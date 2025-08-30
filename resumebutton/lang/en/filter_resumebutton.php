<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
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
