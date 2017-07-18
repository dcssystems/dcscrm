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
class Controller_Crm_Login extends Controller_Crm_Backend{
    //put your code here
    public function action_index() {       
        $this->template->content = View::factory('login/login');        
    }
    
    public function action_login() {
        $user = $this->request->post('username');
        $pass = $this->request->post('password');
        $response = $this->_getValidation($user, $pass);
        $error = '';
        if($response == TRUE){
            $this->redirect('http://localhost/dcscrm/persons/dashboard');
        }else{
            $error = TRUE;           
        }
        $login = View::factory('login/login')->set('error', $error);
        $this->template->content = $login;        
    }
    
    public function _getValidation($user, $pass) {
        $users  = ORM::factory('Auth_Usuarios')->where('varUsuario', '=', $user)
                ->where('varPass', '=', $pass)->find();
        $usuario  = $users->varUsuario;
        $password = $users->varPass;
        $response = FALSE;
        //$perfs = ORM::factory('Auth_Perfiles');
        if($usuario == $user && $password == $pass && !empty($user) && !empty($pass)){
            Session::instance()->set('perfil', $users->idPerfil);
            $response = TRUE;
        }else{
            $response = FALSE;
        }      
        return $response;
    }
    
    public function action_logout() {
        Session::instance()->destroy();
        $this->redirect('http://localhost/dcscrm/login/login');
    }
}
