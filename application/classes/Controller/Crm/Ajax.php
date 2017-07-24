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
        ini_set('post_max_size', '64M');
        ini_set('upload_max_filesize', '64M');
        //$files = $this->request->post('filePersons');
        $ds          = DIRECTORY_SEPARATOR; 
        $storeFolder = 'uploads';
        $enable_upload = true;   

        if ( !empty($_FILES) && $enable_upload ) {

            $tempFile = $_FILES['filePersons']['tmp_name'];                 

            $targetPath = dirname(dirname(dirname(dirname(dirname( __FILE__ ))))) . $ds. $storeFolder . $ds; 
            
            //$targetPath = str_replace('\\', '/', $targetPath);

            $targetFile =  $targetPath. $_FILES['filePersons']['name']; 

            //move_uploaded_file($tempFile,$targetFile);

        }
        echo var_dump($_FILES);
        echo var_dump($targetPath);
    }
}
