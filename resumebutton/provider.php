<?php

/**
 * @package     filter_resumebutton
 * @copyright   2025 Rudraksh Batra <batra.rudraksh@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace filter_resumebutton\privacy;

defined('MOODLE_INTERNAL') || die();

use core_privacy\local\metadata\null_provider;

/**
 * Privacy provider for filter_resumebutton.
 */
class provider implements null_provider {

    /**
     * Returns the reason why this plugin does not store any personal data.
     *
     * @return string
     */
    public static function get_reason(): string {
        return get_string('privacy:metadata', 'filter_resumebutton');
    }
}
