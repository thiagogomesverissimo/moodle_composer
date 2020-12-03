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
 * Form for editing tag block instances.
 *
 * @package   block_usp_cursos
 * @copyright 2020 Ewout ter Haar <ewout@usp.br>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->libdir . '/formslib.php');


class block_usp_cursos_codmoodles_form extends moodleform {

    //Add elements to form
    public function definition() {
        global $CFG;

        $mform = $this->_form; // Don't forget the underscore!
        $options = array( 'multiple'=>false,'placeholder' => 'JJJJJJJ.V.AAAATTT','tags'=>false,'showsuggestion'=>true,'ajax'=>'enrol_stoa/getcodmoodles');

        $mform->addElement('autocomplete', "codmoodles","",array(),$options);
        $this->add_action_buttons($cancel=false,$submitlabel=get_string('createcourse','block_usp_cursos'));

    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}