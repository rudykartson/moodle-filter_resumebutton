<?php
/**
 * @package     filter_resumebutton
 * @copyright   2025 Rudraksh Batra <batra.rudraksh@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$settings->add(new admin_setting_heading('filter_resumebutton/heading', get_string('pluginname', 'filter_resumebutton'), ''));

$settings->add(new admin_setting_configtextarea(
    'filter_resumebutton/usageinstructions',
    get_string('usageinstructions_title', 'filter_resumebutton'),
    get_string('usageinstructions_desc', 'filter_resumebutton'),
    '',
    PARAM_RAW
));
