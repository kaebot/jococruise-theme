<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_about',
        'title' => 'About',
        'fields' => array (
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'about',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'custom_fields',
                1 => 'discussion',
                2 => 'comments',
                3 => 'revisions',
                4 => 'slug',
                5 => 'author',
                6 => 'format',
                7 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_artist',
        'title' => 'Artist',
        'fields' => array (
            array (
                'key' => 'field_54b7030175454',
                'label' => 'Artist Type',
                'name' => 'artist_type',
                'type' => 'select',
                'choices' => array (
                    'artist' => 'Artist',
                    'featured artist' => 'Featured Artist',
                    'office hours' => 'Office Hours',
                ),
                'default_value' => '',
                'allow_null' => 1,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_54b95bb123e45',
                'label' => 'Artist Subtitle',
                'name' => 'artist_subtitle',
                'type' => 'text',
                'instructions' => '[Example]<br>Title: John Roderick<br>Subtitle: The Long Winters',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'discussion',
                1 => 'comments',
                2 => 'revisions',
                3 => 'slug',
                4 => 'author',
                5 => 'format',
                6 => 'categories',
                7 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_city',
        'title' => 'City',
        'fields' => array (
            array (
                'key' => 'field_54b83b55ed730',
                'label' => 'City X Position',
                'name' => 'city_x_position',
                'type' => 'number',
                'instructions' => 'The horizontal distance from the left edge of the full-size map in pixels.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_54b83bbced731',
                'label' => 'City Y Position',
                'name' => 'city_y_position',
                'type' => 'number',
                'instructions' => 'The vertical distance from the top edge of the full-size map in pixels.',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_54b83bdeed732',
                'label' => 'Invert Label Position',
                'name' => 'invert_label_position',
                'type' => 'true_false',
                'instructions' => 'Enable to show the city label under its point on the map.',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_54c937c66bb8a',
                'label' => 'Invert Info Position',
                'name' => 'invert_info_position',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_54c937d96bb8b',
                'label' => '',
                'name' => '',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'city',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_faq',
        'title' => 'FAQ',
        'fields' => array (
            array (
                'key' => 'field_544c2ecd0555e',
                'label' => 'Show on Front Page',
                'name' => 'show_on_front_page',
                'type' => 'checkbox',
                'choices' => array (
                    'show on front page' => 'show on front page',
                ),
                'default_value' => '',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_54caf8c8c0de8',
                'label' => 'FAQ Section Header',
                'name' => 'faq_section_header',
                'type' => 'radio',
                'choices' => array (
                    'About the Cruise' => 'About the Cruise',
                    'Booking & Reservations' => 'Booking & Reservations',
                    'Planning for Your Cruise' => 'Planning for Your Cruise',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'vertical',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'faq',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
?>