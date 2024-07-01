<?php

namespace App\Requests;

use Timber\Timber;
use App\Requests\BaseRequest;

class LoadMoreRequest extends BaseRequest
{
    protected static $action = 'load_more';
    protected static $nonce  = '_load_more_';

    public static function run()
    {
        $context        = Timber::context();
        $paged          = intval($_POST['paged']);
        $posts_per_page = intval($_POST['posts_per_page']);
        $max_no_pages   = intval($_POST['max_no_pages']);


        $args = [
            'post_type'      => 'post',
            'posts_per_page' => $posts_per_page,
            'paged'          => $paged,
        ];

        $posts = Timber::get_posts($args);

        ob_start();

        foreach ($posts as $post) {
            $context['post'] = $post;
            Timber::render('tease-post.twig', $context);
        }

        $response = ob_get_contents();
        ob_end_clean();

        static::returnSuccess([
            'content'      => $response,
            'max_no_pages' => $max_no_pages,
        ]);
    }
}
