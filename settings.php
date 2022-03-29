<?php
$settings->add(new admin_setting_heading(
            'headerconfig',
             get_string('configs/header','block_pokemoodle'),
             get_string('configs/label','block_pokemoodle')
        ));

$settings->add(new admin_setting_configcheckbox(
            'pokemoodle/allow_html',
            get_string('configs/allowhtml','block_pokemoodle'),
            get_string('configs/description','block_pokemoodle'),
            '1'
        ));