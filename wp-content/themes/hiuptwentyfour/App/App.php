<?php

namespace App;

use App\Core\WP;
use App\Core\WPDisableComments;
use App\Requests\LoadMoreRequest;
use App\PostTypes\TestimonialPostType;
use App\Integrations\CarbonIntegration;


/*
|--------------------------------------------------------------------------
| APP Class
|--------------------------------------------------------------------------
|
| This class contains app logic which will run at app inital level
|
*/

class App
{
  /**
   * Initialize all app level functions
   *
   * @return void
   */
  public static function init()
  {

    $instance = new static();

    /**
     * Check if Carbon is active or not if Carbon is not active
     * Show error message with instructions to activate "Advanced Custom Fields" plugin
     */
    if (!function_exists('carbon_get_the_post_meta') && !is_admin() && !((defined('WP_CLI') && WP_CLI))) {
      return $instance::showMessageToActivateCarbon();
    }


    add_filter('timber/integrations', function (array $integrations): array {
      $integrations[] = new CarbonIntegration();

      return $integrations;
    });

    // require_once 'helper-functions.php';

    // Disable WP comment functionality totally (uncomment this line if comment functionality is required)
    WPDisableComments::init();

    // Initialize WP default customizations and configurations
    WP::init();

    // Init service post type
    TestimonialPostType::init();

    // Listen for ajax requests
    LoadMoreRequest::listen();
  }

  /**
   * Show error message with instructions to activate "Advanced Custom Fields" plugin
   */
  public static function showMessageToActivateCarbon()
  {

    // Show error message HTML
    echo <<<HTML
      <div class="error-page">
        <h1>Execute command below to continue</h1>
        <p>Browse to your theme directory.</p>
        <p>Execute the following in your terminal of choice:</p>
        <code>composer require htmlburger/carbon-fields-plugin</code>
      </div>
    HTML;

    // Kill further code execution to codevent fatal errors
    wp_die();
  }
}
