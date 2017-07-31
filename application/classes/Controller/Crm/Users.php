<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ADS
 */
class Controller_Crm_Users extends Controller_Crm_Application {
    //put your code here
    
    public function action_operator() {
        if(!empty(Session::instance()->get('nameUser'))){
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu')
                ->set('actHome', 3);
            $this->template->value  = 3;
            $content = View::factory('user/operario/operario');
            $this->template->content = $content; 
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        } 
    }
    
}
