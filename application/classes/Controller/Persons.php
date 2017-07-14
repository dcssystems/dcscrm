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
class Controller_Persons extends Controller{
    //put your code here
    
    public function action_dashboard() {
        $persons = View::factory('persons/index');
        $this->response->body($persons);
    }
    
    
    public function action_edit() {
        $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
        $edit = View::factory('persons/edit')
                ->set('department', $department);
        $this->response->body($edit);
    }
    
    public function action_new() {
        $department = ORM::factory('Ubigeo_Ubigeo')
                ->group_by('varDpto')
                ->find_all();
        $new = View::factory('persons/edit')
                ->set('department', $department);
        $this->response->body($new);
    }
}
