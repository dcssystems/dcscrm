<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author ADS
 */
class Controller_Login extends Controller{
    //put your code here
    public function action_index() {
        $login = View::factory('login/login');
        $this->response->body($login);
        
    }
}
