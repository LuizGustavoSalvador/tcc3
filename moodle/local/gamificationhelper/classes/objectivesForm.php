<?php

namespace gamificationhelper\classes;

use moodleform;

class objectivesForm extends moodleform {
    function definition() {
        $mform = $this->_form;

        $mform->addElement('select', 'objective', get_string('selectObjective', 'local_gamificationhelper'), [
            'developmentAndAchievement' => get_string('developmentAndAchievement', 'local_gamificationhelper'),
            'ownershipAndPossession' => get_string('ownershipAndPossession', 'local_gamificationhelper'),
            'empowermentAndCreativity' => get_string('empowermentAndCreativity', 'local_gamificationhelper'),
            'unpredictabilityAndCuriosity' => get_string('unpredictabilityAndCuriosity', 'local_gamificationhelper'),
            'socialInfluenceAndRelatedness' => get_string('socialInfluenceAndRelatedness', 'local_gamificationhelper'),
        ]);
        
        $mform->addElement('select', 'learningstyle', get_string('selectStyle', 'local_gamificationhelper'), [
            'competitive' => get_string('competitive', 'local_gamificationhelper'),
            'cooperative' => get_string('cooperative', 'local_gamificationhelper'),
            'independent' => get_string('independent', 'local_gamificationhelper'),
            'epicNarrative' => get_string('epicNarrative', 'local_gamificationhelper')
        ]);

        $formButtons = '<div class="form-buttons">
            <a href="index.php" class="btn btn-primary">' . get_string('btnBack', 'local_gamificationhelper') . '</a>
            <input class="btn btn-primary" type="submit" name="submitbutton" value="' 
            . get_string('btnNext', 'local_gamificationhelper') . '" /></div>';

        $mform->addElement('html', $formButtons);
    }
}