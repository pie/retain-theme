<?php
/**
 * Register ACF Fields for the Speakers section (repeater field appearing on front page)
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_speakers',
    'title' => 'Speakers Section',
    'fields' => array(
        array(
            'key' => 'field_speakers',
            'label' => 'Speakers',
            'name' => 'speakers',
            'type' => 'repeater',
            'instructions' => 'Add speakers here',
            'required' => 0,
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add Speaker',
            'sub_fields' => array(
                array(
                    'key' => 'field_speaker_image',
                    'label' => 'Speaker Image',
                    'name' => 'speaker_image',
                    'type' => 'image',
                    'required' => 1,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
                array(
                    'key' => 'field_speaker_first_name',
                    'label' => 'Speaker Name',
                    'name' => 'speaker_name',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_speaker_last_name',
                    'label' => 'Speaker Last Name',
                    'name' => 'speaker_last_name',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_speaker_role',
                    'label' => 'Speaker Role',
                    'name' => 'speaker_role',
                    'type' => 'text',
                    'required' => 1,
                )
            )
        )
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'front-page.php', // The ACF field group will only appear on the front-page.php template
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
));

endif;
