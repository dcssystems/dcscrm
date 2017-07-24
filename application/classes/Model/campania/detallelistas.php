<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of detallelistas
 *
 * @author ADS
 */
class Model_Campania_Detallelistas extends ORM {
    //put your code here
    protected $_table_name = 'detallelistas';
    
    protected $_primary_key = 'idDetlista';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idDetlista'    => NULL,
        'idLista'       => NULL,
        'idPersona'     => NULL,
        'idTelefono'    => NULL,
        'datFechain'    => NULL,
        'datFechamod'   => NULL,
    ); 
    //idDetlista,idLista,idPersona,idTelefono,datFechain,datFechamod
    
}
