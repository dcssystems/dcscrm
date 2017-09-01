<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Campaigns
 *
 * @author ADS
 */

class Controller_Crm_Campaigns extends Controller_Crm_Application {
    //put your code here
    private $activeMenu = 2;
    
    public function action_dashboard() {
        $actvCamp = $this->activeMenu;
        if(!empty(Session::instance()->get('nameUser'))){
            $dashbCamp = 'A';            
            $this->template->header = View::factory('template/header')
                ->set('nameUser', Session::instance()->get('nameUser'));
            $this->template->menu   = View::factory('template/menu')
                ->set('dashbCamp', $dashbCamp)
                ->set('actvCamp', $actvCamp);
            $this->template->value  = 1;
            $uploadData= ORM::factory('Campania_Uploades')->where('idCliente', '=', Session::instance()->get('cliente'))->find_all();
            $content = View::factory('campaigns/index')
                ->set('uploadData', $uploadData);
            $this->template->content = $content; 
        }else{
            $this->redirect('http://localhost/dcscrm/login/login');
        } 
    }
    
    public function action_list() {
        
    }
    
    public function action_testProcedure() {
        $idUser    = Session::instance()->get('idUser');
        $nameTable = 'datos_bbva';
        $idList    = 3;
        $idUpload  = 1;
        $query = DB::query(Database::SELECT, "CALL sp_takeList(:idUpload, :nameTable, :idList, :idUser)");
        $query->parameters(array(
            ':idUpload' => $idUpload, 
            ':nameTable' => $nameTable, 
            ':idList' => $idList, 
            ':idUser' => (int) $idUser
        ));
        $query->execute();
    }
}
