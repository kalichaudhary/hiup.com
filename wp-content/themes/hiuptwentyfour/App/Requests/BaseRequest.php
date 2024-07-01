<?php

namespace  App\Requests;

use Exception;
use ReflectionClass;

/**
 * BaseRequest
 *
 * A simple class for handling ajax reqests
 */
abstract class BaseRequest
{
    protected static $action;
    protected static $nonce;
    protected static $verify_nonce = true;
    protected static $nonce_field = 'security';
    public static $request;
    public static $wp;
    public static $user;

    abstract protected static function run();

    public function __construct()
    {
        global $wp;
        static::$wp = $wp;
        static::$request = static::request();

        if (static::isLoggedIn()) {
            static::$user = wp_get_current_user();
        }
    }

    public static function request()
    {
        return $_REQUEST;
    }

    public static function boot()
    {
        $class = static::getClassName();
        $class = new $class;

        if ($class::$verify_nonce) {
            $class::verifyNonce();
        }

        $class::run();
        die();
    }

    public static function listen($public = true)
    {
        $action_name = static::getActionName();
        $class_name = static::getClassName();

        add_action("wp_ajax_{$action_name}", [$class_name, 'boot']);

        if ($public) {
            add_action("wp_ajax_nopriv_{$action_name}", [$class_name, 'boot']);
        }
    }


    // -----------------------------------------------------
    // UTILITY METHODS
    // -----------------------------------------------------
    public static function getClassName()
    {
        return get_called_class();
    }

    public static function getActionName()
    {
        $class = static::getClassName();
        $reflection = new ReflectionClass($class);
        $action = $reflection->newInstanceWithoutConstructor();

        if (!isset($action::$action)) {
            throw new Exception("Public property \$action not provieded.");
        }

        return $action::$action;
    }

    public static function verifyNonce()
    {
        if (!check_ajax_referer(static::$nonce, static::$nonce_field, false)) {
            static::returnError(['message' => 'Nonce error.'], 401);
        }
    }

    // -----------------------------------------------------
    // JSONResponse
    // -----------------------------------------------------
    public static function returnBack()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die();
        }

        return false;
    }


    public static function returnRedirect($url, $params = array())
    {
        $url .= '?' . http_build_query($params);
        ob_clean();
        header('Location: ' . $url);
        die();
    }

    public static function returnJson($data = null, $status_code = null)
    {
        exit(wp_send_json($data, $status_code));
    }

    public static function returnSuccess($data = null, $status_code = 200)
    {
        exit(wp_send_json_success($data, $status_code));
    }

    public static function returnError($data = null, $status_code = null)
    {
        exit(wp_send_json_error($data, $status_code));
    }

    public static function url($params = [])
    {
        $params = http_build_query(array_merge([
            'action' => (new static())::$action,
        ], $params));

        return admin_url('/admin-ajax.php') . '?' . $params;
    }

    public static function isLoggedIn()
    {
        return is_user_logged_in();
    }

    public static function has($key)
    {
        if (isset(static::$request[$key])) {
            return true;
        }

        return false;
    }

    /**
     * Get value from request
     *
     * @param  string $key     [description]
     * @param  string $default [description]
     * @return string
     */
    public static function get($key, $default = null, $stripslashes = true)
    {
        if (static::has($key)) {
            if ($stripslashes) {
                return stripslashes(static::$request[$key]);
            }
            return static::$request[$key];
        }

        return $default;
    }
}
