# Resume Button Filter for Moodle

This Moodle filter allows you to embed course or section-level resume/start buttons inside pages, labels, and HTML blocks using shortcodes.

## Usage

- `[resumebutton courseid=2]` — Course-level resume/start button
- `[resumebutton courseid=2 sectionid=1]` — Specific section resume/start button
- `[resumebuttons courseid=2]` — All section buttons for course 2

## Installation

1. Upload this folder to `moodle/filter/resumebutton`
2. Go to Site administration > Notifications to complete installation
3. Enable the filter from:
   - Site administration > Plugins > Filters > Manage filters
