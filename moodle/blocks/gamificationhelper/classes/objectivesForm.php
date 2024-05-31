<?php

namespace gamificationhelper\classes;

use moodleform;

class objectivesForm extends moodleform
{
    public function definition()
    {
        $mform = $this->_form;

        $mform->addElement('hidden', 'id', optional_param('id', 0, PARAM_INT));
        $mform->setType('id', PARAM_INT);

        $mform->addElement('select', 'objective', get_string('selectObjective', 'block_gamificationhelper'), [
            'developmentAndAchievement' => get_string('developmentAndAchievement', 'block_gamificationhelper'),
            'ownershipAndPossession' => get_string('ownershipAndPossession', 'block_gamificationhelper'),
            'empowermentAndCreativity' => get_string('empowermentAndCreativity', 'block_gamificationhelper'),
            'unpredictabilityAndCuriosity' => get_string('unpredictabilityAndCuriosity', 'block_gamificationhelper'),
            'socialInfluenceAndRelatedness' => get_string('socialInfluenceAndRelatedness', 'block_gamificationhelper'),
        ]);

        $mform->addElement('select', 'learningstyle', get_string('selectStyle', 'block_gamificationhelper'), [
            'competitive' => get_string('competitive', 'block_gamificationhelper'),
            'cooperative' => get_string('cooperative', 'block_gamificationhelper'),
            'independent' => get_string('independent', 'block_gamificationhelper'),
            'epicNarrative' => get_string('epicNarrative', 'block_gamificationhelper'),
        ]);

        $formButtons = '<div class="form-buttons">
            <a href="index.php?id='
                . optional_param('courseid', 0, PARAM_INT) . '" class="btn btn-primary">'
                . get_string('btnBack', 'block_gamificationhelper') .
            '</a>
            <input class="btn btn-primary" type="submit" name="submitbutton" value="'
                . get_string('btnNext', 'block_gamificationhelper') . '" /></div>';

        $mform->addElement('html', $formButtons);
    }
}
