<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author ADS
 */
class Controller_Crm_Backend extends Controller_Template {
    //put your code here
    public $auto_render = TRUE;
    
    public $template = 'template/login';

    public function before() 
    {
        parent::before();
        View::set_global('site', ' .::Dircon Solutions::. ');
        $this->template->error = FALSE;
        $this->template->styles = array(
            '<link rel="stylesheet" type="text/css" href="' . URL::base() . 'assets/lib/stroke-7/style.css"/>',
            '<link rel="stylesheet" type="text/css" href="' . URL::base() . 'assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>',
            '<link rel="stylesheet" href="' . URL::base() . 'assets/css/themes/orange-juice.css" type="text/css"/>');
        $this->template->scripts = array(
            '<script src="' . URL::base() . 'assets/lib/jquery/jquery.min.js" type="text/javascript"></script>',
            '<script src="' . URL::base() . 'assets/lib/tether/js/tether.min.js" type="text/javascript"></script>',
            '<script src="' . URL::base() . 'assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>',
            '<script src="' . URL::base() . 'assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>',
            '<script src="' . URL::base() . 'assets/js/app.js" type="text/javascript"></script>');
    }
	
    public function after() {
        parent::after();
    }
}
