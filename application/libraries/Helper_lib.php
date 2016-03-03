<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Helper_lib
{

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function getActiveMenu($check = '')
    {
        $url1 = $this->ci->uri->segment(1);
        $url2 = $this->ci->uri->segment(2);
        $css_class = '';
        if ($url2 == '') {
            if ($url1 == $check) {
                $css_class = 'uk-active';
            }
        } else {
            if ($url2 == $check) {
                $css_class = 'uk-active';
            }
        }
        
        return $css_class;
    }
    
    public function getActiveMainMenu($check = '')
    {
        $url1 = $this->ci->uri->segment(1);
        $css_class = '';
        if ($url1 == $check) {
            $css_class = 'uk-active';
        }
        
        return $css_class;
    }
}
