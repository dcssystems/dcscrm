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
        $msg = array();
        $ds = DIRECTORY_SEPARATOR; 
        $storeFolder = 'uploads';
        $enable_upload = TRUE;
        //$valesPost = $this->request->post();
        if (!empty($_FILES) && $enable_upload && ($_FILES['file']['error']) == 0) {
            if(file_exists('uploads/' . $_FILES['file']['name'])){
                $msg["error"] = 'El archivo ya existe: uploads/' . $_FILES['file']['name'];
            }else{
                $tempFile = $_FILES['file']['tmp_name'];
                $targetPath = dirname(dirname(dirname(dirname(dirname( __FILE__ ))))) . $ds. $storeFolder . $ds;            
                $targetFile =  $targetPath. $_FILES['file']['name']; 
                move_uploaded_file($tempFile,$targetFile);  
                $msg["response"] = $this->_setDataCliente($_FILES['file']['name']);
                $msg["ok"] = 'Se cargo correctamente el archivo: uploads/' . $_FILES['file']['name'];                
            }            
        }else{
            $msg["error"] = 'Error durante la carga del archivo: ' . $_FILES['file']['error'];
        }
        echo json_encode($msg);
        //var_dump($valesPost);
    }
    
    public function _setDataCliente($name) {
        $ds = DIRECTORY_SEPARATOR;
        $line = array();
        $result = array();
        $storeFolder = 'uploads';
        $targetPath = dirname(dirname(dirname(dirname(dirname( __FILE__ ))))) . $ds. $storeFolder . $ds . $name;
        $data = file_get_contents($targetPath); //read the file
        $convert = explode("\n", $data); //create array separate by new line
        for ($i=0;$i<count($convert);$i++){
            $line = explode('|', $convert[$i]); 
            $result['responseModel'] = $this->_saveDataCliente($line);
        }
        return $result;        
    }
    
    public function _saveDataCliente($line, $id) {
        ini_set('max_execution_time', 240);
        $idUpload = $id;
        $modelDataCliente = ORM::factory('Campania_Dataclientes');
            if(!empty($line[0])):
                $modelDataCliente->values(array(
                    'iddatacliente'         => '',
                    'idCliente'             => Session::instance()->get('cliente'),
                    'varFproceso'           => $line[0],
                    'varAgencia'            => $line[1],
                    'varGestor'             => $line[2],
                    'varTerritorio'         => $line[3],
                    'varCodoficina'         => $line[4],
                    'varSubproducto'        => $line[5],
                    'varNomsubproducto'     => $line[6],
                    'varNrocontrato'        => $line[7],
                    'varCodcentral'         => $line[8],
                    'varTpersona'           => $line[9],
                    'varNombre'             => $line[10],
                    'varDivisa'             => $line[11],
                    'varSaldohoy'           => $line[12],
                    'varDireccion'          => $line[13],
                    'varTelefono'           => $line[14],
                    'varCodpostal'          => $line[15],
                    'varCodestado'          => $line[16],
                    'varCodprovincia'       => $line[17],
                    'varCoddistrito'        => $line[18],
                    'varFincumpli'          => $line[19],
                    'varDiavenc'            => $line[20],
                    'varUbigeo'             => $line[21],
                    'varDpto'               => $line[22],
                    'varDistprov'           => $line[23],
                    'varTramodia'           => $line[24],
                    'varTipodoc'            => $line[25],
                    'varNrodoc'             => $line[26],
                    'varTipofono1'          => $line[27],
                    'varPrefijo1'           => $line[28],
                    'varFono1'              => $line[29],
                    'varExtension1'         => $line[30],
                    'varTipofono2'          => $line[31],
                    'varPrefijo2'           => $line[32],
                    'varFono2'              => $line[33],
                    'varExtension2'         => $line[34],
                    'varTipofono3'          => $line[35],
                    'varPrefijo3'           => $line[36],
                    'varFono3'              => $line[37],
                    'varExtension3'         => $line[38],
                    'varTipofono4'          => $line[39],
                    'varPrefijo4'           => $line[40],
                    'varFono4'              => $line[41],
                    'varExtension4'         => $line[42],
                    'varTipofono5'          => $line[43],
                    'varPrefijo5'           => $line[44],
                    'varFono5'              => $line[45],
                    'varExtension5'         => $line[46],
                    'varEmail'              => $line[47],
                    'varProvision'          => $line[48],
                    'datFechadegeneracion'  => $line[49],
                    'datFechadeingreso'     => $line[50],
                    'varOficina'            => $line[51],
                    'varProducto'           => $line[52],
                    'varMarca'              => $line[53],
                    'varTipotelefono'       => $line[54],
                    'varPrefijodetelefono'  => $line[55],
                    'varTelefono1'          => $line[56],
                    'varTelf1extension'     => $line[57],
                    'varTipotelefono2'      => $line[58],
                    'varPrefijodetelefono2' => $line[59],
                    'varTelefono2'          => $line[60],
                    'varTelf2extension'     => $line[61],
                    'varDireccion1'         => $line[62],
                    'varDepartamento'       => $line[63],
                    'varProvincia'          => $line[64],
                    'varDistrito'           => $line[65],
                    'idupload'              => $idUpload
                ))
                ->save();
            endif;             
        return $modelDataCliente;
    }
    
    public function action_newCampaign() {
        $campaign = $this->request->post('campaign');
        $fecInicio = $this->request->post('fecInicio');
        $fecIniDB  = Controller_Crm_Helpers::getChangeDateTimeDB($fecInicio);
        $fecFin = $this->request->post('fecFin');
        $fecFinDB  = Controller_Crm_Helpers::getChangeDateTimeDB($fecFin);
        $typeCampaign = $this->request->post('typeCampaign');
        $codeCampaign = $this->request->post('codecampaign');
        $estCampaign = $this->request->post('estCampaign');
        $newCampaign = ORM::factory("Campania_Campanias")->values(
            array(
                'idCampania' => '',
                'idCliente'  => Session::instance()->get('cliente'),
                'varTablacliente' => 'datos_bbva',
                'idTipocampania' => $typeCampaign,
                'varCodcampania' => $codeCampaign,
                'varNombcampania' => $campaign,
                'datFechainicio'  => $fecIniDB,
                'datFechafinal'  => $fecFinDB,
                'idEstado' => $estCampaign,
                'datReg' => date('Y-m-d H:m:s')
            )
        )->save();
        $response = $this->_setNewList($newCampaign->idCampania);
        if($response){
            echo "Se creo con exito la campaña.";
        }else{
            echo "Ocurio un error al crear la campaña.";
        }
    }
    
    public function _setNewList($idCampaign) {
        $countList = ORM::factory('Campania_Listas')->count_all();        
        $newList = ORM::factory('Campania_Listas')->values(
            array(
                'idLista'       => '',
                'idCampania'    => $idCampaign,
                'varNombre'     => 'List '.($countList+1),
                'datFechacarga' => date('Y-m-d H:m:s'),
                'intCantreg'    => '',
                'datReg'        => date('Y-m-d H:m:s'),
                'datMod'        => '',
                'idUsuario'     => Session::instance()->get('cliente')
            )
        )->save();
        return $newList;
    }
    
    
}
