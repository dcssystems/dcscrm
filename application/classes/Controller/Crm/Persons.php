<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persons
 *
 * @author ADS
 */
class Controller_Crm_Persons extends Controller_Crm_Application{
    //put your code here
    
       
    public function action_dashboard() {
        if(!empty(Session::instance()->get('nameUser'))){
            $dashboard = 'A';
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu')
                ->set('dashboard', $dashboard);
            $this->template->value  = 1;
            $content = View::factory('persons/index');
            $this->template->content = $content; 
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        }        
    }
    
    
    public function action_edit() {
        if(!empty(Session::instance()->get('nameUser'))){
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu');
            $this->template->value  = 2;
            $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
            $edit = View::factory('persons/edit')
                ->set('department', $department);
            $this->template->content = $edit;
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        }
        
    }
    
    public function action_new() {
        if(!empty(Session::instance()->get('nameUser'))){
            $active = 'A';
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu')
                ->set('active', $active);
            $this->template->value  = 2;
            $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
            $new = View::factory('persons/edit')
                ->set('department', $department);
            $this->template->content = $new;
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        }
        
    }
}
