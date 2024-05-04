<?php

class objectivesForm extends moodleform {
    function definition() {
        $mform = $this->_form;

        $mform->addElement('hidden', 'courseid');
        $mform->setType('courseid', PARAM_INT); 

        $mform->addElement('header', 'general', get_string('questionnaire', 'local_gamificationhelper'));

        $mform->addElement('select', 'objective', get_string('selectobjective', 'local_gamificationhelper'), [
            'participation' => 'Aumentar participação',
            'motivation' => 'Motivar com recompensas',
            'challenge' => 'Desafio',
            'collaboration' => 'Colaboração',
            'exploration' => 'Exploração'
        ]);
        
        $mform->addElement('select', 'learningstyle', get_string('selectstyle', 'local_gamificationhelper'), [
            'competitive' => 'Competitiva',
            'cooperative' => 'Cooperativa',
            'independent' => 'Independente',
            'explorative' => 'Exploratória'
        ]);

        $mform->addElement('submit', 'submitbutton', get_string('next', 'local_gamificationhelper'));
    }
}