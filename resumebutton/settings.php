<?php
defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('filter_resumebutton/heading', get_string('pluginname', 'filter_resumebutton'), ''));

$settings->add(new admin_setting_configtextarea(
    'filter_resumebutton/usageinstructions',
    get_string('usageinstructions_title', 'filter_resumebutton'),
    get_string('usageinstructions_desc', 'filter_resumebutton'),
    '',
    PARAM_RAW
));
