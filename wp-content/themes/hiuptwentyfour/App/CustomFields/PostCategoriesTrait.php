<?php
namespace App\CustomFields;


trait PostCategoriesTrait {
    private static function getPostCategories() {
        $categories = get_categories();
        $options    = [];
        foreach ($categories as $category) {
            $options[$category->term_id] = $category->name;
        }
        return $options;
    }
}
