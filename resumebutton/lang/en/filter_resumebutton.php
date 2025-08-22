<?php

/**
 * @package     filter_resumebutton
 * @copyright   2025 Rudraksh Batra <batra.rudraksh@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Resume Button Shortcode Filter';
$string['filtername'] = 'Resume Button Shortcode';

$string['usageinstructions_title'] = 'How to use';
$string['privacy:metadata'] = 'The Resume Button Filter plugin does not store any personal data because it only renders shortcode-based navigation buttons using course context and user progress handled by core features.';
$string['usageinstructions_desc'] = 'You can add the following shortcodes anywhere in Moodle content (Pages, Labels, HTML blocks, etc.) to show the resume/start buttons:
<br><br>
<b>[resumebutton courseid=COURSEID]</b> – shows course-level resume button<br>
<b>[resumebutton courseid=COURSEID sectionid=SECTIONID]</b> – shows section-level resume button<br>
<b>[resumebuttons courseid=COURSEID]</b> – renders all section buttons for that course<br><br>
If <code>courseid</code> is not specified, it will auto-detect the current course context.';
