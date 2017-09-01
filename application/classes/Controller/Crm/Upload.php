<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author ADS
 */
class Controller_Crm_Upload extends Controller_Crm_Application {
    //put your code here
    private $activeMenu = 3;
    public function action_uploadFile() {
        $actvUpload = $this->activeMenu;
        if(!empty(Session::instance()->get('nameUser'))){
            $dshUpload = 'A';            
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu')
                ->set('dshUpload', $dshUpload)
                ->set('actvUpload', $actvUpload);
            $this->template->value  = 2;
            $content = View::factory('upload/index');
            $this->template->content = $content; 
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        }
    }   
    
    public function action_list() {
        
    }
    
    
}
