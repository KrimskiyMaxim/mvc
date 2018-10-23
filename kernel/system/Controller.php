<?php
namespace kernel\system;

class Controller {
    public $added_styles;
    public $added_scripts;

    public function view($path, $data = null, $template = 'default'){
        if(isset($data)) {foreach ($data as $key => $item){${$key} = $item;}}

        $_added_styles = $this->added_styles;
        $_added_scripts = $this->added_scripts;

        $_template = TEMPLATE.'/base/'.$template.'.tpl';
        $_content = TEMPLATE.'/'.$path.'.tpl';

        include $_template;
    }
    public function ob_include($path, $data = null) {
        if(isset($data)) {
            foreach ($data as $key => $item){
                ${$key} = $item;
            }
        }

        ob_start();
        include $path;
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
    }
    public function addScript($script) {
        if(empty($this->added_scripts)){$this->added_scripts = '';}
        $this->added_scripts = $this->added_scripts."<script src='".'//'.DOMAIN.'/views/javascript/'.$script.'.js?'.LAST_MODIFICATION."'></script> \n";
    }
    public function addStyle($style) {
        if(empty($this->added_styles)){$this->added_styles = '';}
        $this->added_styles = $this->added_styles."<link rel='stylesheet' href='".'//'.DOMAIN.'/views/stylesheet/'.$style.'.css?'.LAST_MODIFICATION."'> \n";
    }

}