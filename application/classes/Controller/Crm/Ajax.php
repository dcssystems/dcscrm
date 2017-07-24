<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ajax
 *
 * @author ADS
 */
class Controller_Crm_Ajax extends Controller {
    //put your code here
    public function action_province() {
        $idDpto   = $this->request->post('id');
        $province = ORM::factory('Ubigeo_Ubigeo')
                ->where('idDpto', '=', $idDpto)
                ->where('varDescripcion', '!=', '')
                ->group_by('idProv')
                ->order_by('varProv')
                ->find_all();
        echo View::factory('ajax/province')->set('province', $province);        
    }
    
    public function action_district() {
        $idProv   = $this->request->post('id');
        //$idDpto   = $this->request->post('dpto');
        $district = ORM::factory('Ubigeo_Ubigeo')
                ->where('idProv', '=', $idProv)
                ->where('varDescripcion', '!=', '')
                ->group_by('idDistrito')
                ->order_by('varDistrito')
                ->find_all();
        echo View::factory('ajax/district')->set('district', $district);
    }
    
    public function action_uploadFile() {
        $files = $this->request->post('file');
        echo var_dump($_FILES[$files]['name']);
    }
}
