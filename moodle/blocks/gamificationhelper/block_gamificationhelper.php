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

defined('MOODLE_INTERNAL') || die();

class block_gamificationhelper extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_gamificationhelper');
    }

    public function get_content() {
        global $OUTPUT, $COURSE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $context = context_course::instance($COURSE->id);

        if (!has_capability('block/gamificationhelper:view', $context)) {
            $this->content->text = '';
            $this->content->footer = '';
            return $this->content;
        }else{
            $this->content->text = html_writer::link(
                new moodle_url('/blocks/gamificationhelper/index.php', ['id' => $COURSE->id]),
                get_string('accessPlugin', 'block_gamificationhelper')
            );
    
            return $this->content;
        }
    }
}

