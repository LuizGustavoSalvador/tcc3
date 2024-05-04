<?php

class selectCourseForm extends moodleform {
    function definition() {
        $mform = $this->_form;
        $courses = get_courses();
        $options = [];
        foreach ($courses as $course) {
            $options[$course->id] = $course->fullname;
        }
        $mform->addElement('select', 'courseid', get_string('selectcourse', 'local_gamificationhelper'), $options);
        $mform->setType('courseid', PARAM_INT);
        
        $mform->addElement('submit', 'submitbutton', get_string('next', 'local_gamificationhelper'));
    }
}