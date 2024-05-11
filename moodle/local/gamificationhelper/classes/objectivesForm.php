<?php

namespace gamificationhelper\classes;

use moodleform;

class objectivesForm extends moodleform {
    function definition() {
        $mform = $this->_form;

        $mform->addElement('select', 'objective', get_string('selectObjective', 'local_gamificationhelper'), [
            'participation' => get_string('participation', 'local_gamificationhelper'),
            'motivation' => get_string('motivation', 'local_gamificationhelper'),
            'challenge' => get_string('challenge', 'local_gamificationhelper'),
            'collaboration' => get_string('collaboration', 'local_gamificationhelper'),
            'exploration' => get_string('exploration', 'local_gamificationhelper'),
        ]);
        
        $mform->addElement('select', 'learningstyle', get_string('selectStyle', 'local_gamificationhelper'), [
            'competitive' => get_string('competitive', 'local_gamificationhelper'),
            'cooperative' => get_string('cooperative', 'local_gamificationhelper'),
            'independent' => get_string('independent', 'local_gamificationhelper'),
            'explorative' => get_string('explorative', 'local_gamificationhelper')
        ]);

        $formButtons = '<div class="form-buttons">';
        $formButtons .= '<a href="index.php" class="btn btn-primary">' . get_string('btnBack', 'local_gamificationhelper') . '</a>';
        $formButtons .= '<input class="btn btn-primary" type="submit" name="submitbutton" value="' . get_string('btnNext', 'local_gamificationhelper') . '" />';
        $formButtons .= '</div>';

        $mform->addElement('html', $formButtons);
    }
}