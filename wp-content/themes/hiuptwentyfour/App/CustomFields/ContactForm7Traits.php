<?php

namespace App\CustomFields;

trait ContactForm7Traits
{
    private static function getContactForms7()
    {
        $forms = get_posts([
            'post_type'     => 'wpcf7_contact_form',
            'numberposts'   => -1,
            'order'         => 'ASC',
        ]);
        $listing_forms = [];

        foreach ($forms as $form) {
            $listing_forms[$form->ID] = $form->post_title;
        }
        return $listing_forms;
    }
}
