<?php
/**
 * Register ACF Fields for the Schedule section (Day 1 and Day 2)
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_schedule',
    'title' => 'Schedule Section',
    'fields' => array(
        // Day 1 Schedule
        array(
            'key' => 'field_schedule_day_1',
            'label' => 'Day 1 Schedule',
            'name' => 'schedule_day_1',
            'type' => 'repeater',
            'instructions' => 'Add schedule for Day 1',
            'required' => 0,
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add Session',
            'sub_fields' => array(
                array(
                    'key' => 'field_day1_time',
                    'label' => 'Time',
                    'name' => 'time',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_day1_session',
                    'label' => 'Session',
                    'name' => 'session',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_day1_speaker_name',
                    'label' => 'Speaker Name',
                    'name' => 'speaker_name',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => 'field_day1_speaker_photo',
                    'label' => 'Speaker Photo',
                    'name' => 'speaker_photo',
                    'type' => 'image',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),
        ),
        // Day 2 Schedule
        array(
            'key' => 'field_schedule_day_2',
            'label' => 'Day 2 Schedule',
            'name' => 'schedule_day_2',
            'type' => 'repeater',
            'instructions' => 'Add schedule for Day 2',
            'required' => 0,
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add Session',
            'sub_fields' => array(
                array(
                    'key' => 'field_day2_time',
                    'label' => 'Time',
                    'name' => 'time',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_day2_session',
                    'label' => 'Session',
                    'name' => 'session',
                    'type' => 'text',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_day2_speaker_name',
                    'label' => 'Speaker Name',
                    'name' => 'speaker_name',
                    'type' => 'text',
                    'required' => 0,
                ),
                array(
                    'key' => 'field_day2_speaker_photo',
                    'label' => 'Speaker Photo',
                    'name' => 'speaker_photo',
                    'type' => 'image',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'front-page.php',
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
?>
