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
        $dashboard = 'A';
        $this->template->header = View::factory('template/header');
        $this->template->menu   = View::factory('template/menu')
                ->set('dashboard', $dashboard);
        $this->template->value  = 1;
        $content = View::factory('persons/index');
        $this->template->content = $content;
    }
    
    
    public function action_edit() {
        $this->template->header = View::factory('template/header');
        $this->template->menu   = View::factory('template/menu');
        $this->template->value  = 2;
        $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
        $edit = View::factory('persons/edit')
                ->set('department', $department);
        $this->template->content = $edit;
    }
    
    public function action_new() {
        $active = 'A';
        $this->template->header = View::factory('template/header');
        $this->template->menu   = View::factory('template/menu')
                ->set('active', $active);
        $this->template->value  = 2;
        $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
        $new = View::factory('persons/edit')
                ->set('department', $department);
        $this->template->content = $new;
    }
}
