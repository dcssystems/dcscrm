<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploades
 *
 * @author ADS
 */
class Model_Campania_Uploades extends ORM  {
    //put your code here
    protected $_table_name = 'upload';
    
    protected $_primary_key = 'idUpload';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idUpload'          => NULL,
        'idCliente'         => NULL,
        'varDescripcion'    => NULL,
        'datFechUpload'     => NULL,
        'idEstado'          => NULL,
        'varNumFilas'       => NULL
    ); 
}
