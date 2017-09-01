<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of listas
 *
 * @author ADS
 */
class Model_Campania_Listas extends ORM {
    //put your code here
    protected $_table_name = 'lista';
    
    protected $_primary_key = 'idLista';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idLista'       => NULL,
        'idCampania'    => NULL,
        'varNombre'     => NULL,
        'datFechacarga' => NULL,
        'intCantreg'    => NULL,
        'datReg'        => NULL,
        'datMod'        => NULL,
        'idUsuario'     => NULL        
    ); 
    //idLista	idCampaña	varNomb	intCantreg
}
