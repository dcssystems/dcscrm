<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author ADS
 */
class Controller_Crm_Application extends Controller_Template {
    //put your code here
    public $auto_render = TRUE;
    
    public $template = 'template/template';

    public function before() 
    {       
        parent::before();
        View::set_global('site', ' .::Dircon Solutions::. ');
        $this->template->header = '';
        $this->template->menu = '';
        $this->template->content = '';
        $this->template->value = '';
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
	
    protected function _user_auth() 
    {
        $action_name = Request::instance()->action;

        if (($this->assert_auth !== FALSE  && Auth::instance()->logged_in($this->assert_auth) === FALSE)
        || (is_array($this->assert_auth_actions) && array_key_exists($action_name, $this->assert_auth_actions)
        && Auth::instance()->logged_in($this->assert_auth_actions[$action_name]) === FALSE)) 
        {
            if (Auth::instance()->logged_in()) 
            {
                Request::instance()->redirect('admin/auth/noaccess');
            } 
            else 
            {
                Request::instance()->redirect('login');
            }
        }
    }
}
