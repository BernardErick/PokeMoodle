<?php

defined('MOODLE_INTERNAL') || die();

class block_pokemoodle extends block_base {
    public function init() {
        $this->title = get_string('title', 'block_pokemoodle');
    }
    //permite criar mais de uma instancia
    public function instance_allow_multiple() {
        return true;
    }
    function instance_allow_config() {
        return true;
    }
    //informa que tem um arquivo de configuração
    function has_config() {return true;}
    //esconde o título do bloco
    public function hide_header ()  { 
        return true; 
      }
    //conteudo principal
    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   =  file_get_contents('pages/pokedex.php',true);
     
        return $this->content;
    }
    public function html_attributes() {
        $attributes = parent::html_attributes(); // Get default values
        $attributes['class'] .= ' block_'. $this->name(); // Append our class to class attribute
        return $attributes;
    }
    //chamado toda vez que houver um update
    public function specialization() {
        if (isset($this->config)) {
            if (empty($this->config->title)) {
                $this->title = get_string('title', 'block_pokemoodle');            
            } else {
                $this->title = $this->config->title;
            }
            if (empty($this->config->text)) {
                $this->config->text = get_string('erro', 'block_pokemoodle');
            }   
        }
    }
    public function applicable_formats() {
        return array('all' => true);
      }
    public function instance_config_save($data,$nolongerused =false) {
        if(get_config('pokemoodle', 'allow_html') == '1') {
          $data->text = strip_tags($data->text);
        }
        // And now forward to the default implementation defined in the parent class
        return parent::instance_config_save($data,$nolongerused);
      }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
}