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

defined('MOODLE_INTERNAL') || die();

class filter_resumebutton extends moodle_text_filter {
    public function filter($text, array $options = []) {
        global $CFG, $DB, $COURSE;

        if (!isloggedin() || isguestuser()) {
            return $text;
        }

        require_once($CFG->dirroot . '/local/resume/lib.php');

        // Match [resumebuttons courseid=11]
        $text = preg_replace_callback('/\\[resumebuttons\\s*courseid\\s*=\\s*(\\d+)\\s*\\]/i', function($m) use ($DB) {
            $courseid = (int)$m[1];
            $sections = $DB->get_records('course_sections', ['course' => $courseid], 'section ASC');
            $html = '';
            foreach ($sections as $section) {
                if ($section->section == 0) continue; // skip general section
                $modinfo = get_fast_modinfo($courseid);
                $sectioninfo = $modinfo->get_section_info($section->section);
                if (empty($modinfo->sections[$section->section])) continue; // skip empty
                $html .= local_resume_render_resume_button($courseid, $section->section);
            }
            return $html;
        }, $text);

        // Match [resumebutton courseid=11 sectionid=2]
        $text = preg_replace_callback('/\\[resumebutton(?:\\s+courseid\\s*=\\s*(\\d+))?(?:\\s+sectionid\\s*=\\s*(\\d+))?\\]/i', function($matches) use ($COURSE) {
            $courseid = isset($matches[1]) && $matches[1] ? (int)$matches[1] : ($COURSE->id ?? 0);
            $sectionnumber = isset($matches[2]) && $matches[2] ? (int)$matches[2] : null;

            if ($courseid) {
                return local_resume_render_resume_button($courseid, $sectionnumber);
            }
            return '';
        }, $text);

        return $text;
    }
}
