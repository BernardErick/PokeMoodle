<?php

defined('MOODLE_INTERNAL') || die();

class block_pokemoodle_edit_form extends block_edit_form {
        
    protected function specific_definition($mform) {
        
        //Configuração de pokedex

        //Header section
        $mform->addElement('header', 'config_header', get_string('headertitle','block_pokemoodle'));

        //Title section
        $mform->addElement('text', 'config_title', '<b>'.get_string('pokedexnameconfig', 'block_pokemoodle') . '</b>');
        $mform->setDefault('config_title', get_string('title', 'block_pokemoodle'));
        $mform->setType('config_title', PARAM_RAW);        

    }
}