<?php
/**
 * @package     filter_resumebutton
 * @copyright   2025 Rudraksh Batra <batra.rudraksh@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'filter_resumebutton';
$plugin->version = 2025072303;
$plugin->requires = 2022041900; // Moodle 4.0+
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.1';

// Declare dependency on local_resume plugin
$plugin->dependencies = [
    'local_resume' => 2025071100 // Replace with actual version of local_resume if needed
];
