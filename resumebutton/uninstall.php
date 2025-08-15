<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_filter_resumebutton_uninstall() {
    // Clean up if needed
    unset_config('usageinstructions', 'filter_resumebutton');
    return true;
}
