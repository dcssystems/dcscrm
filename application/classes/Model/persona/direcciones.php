<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of direcciones
 *
 * @author ADS
 */
class Model_Persona_Direcciones extends ORM {
    //put your code here
    protected $_table_name = 'direccion';
    
    protected $_primary_key = 'iddireccion';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'iddireccion'   => NULL,
        'idCliente'     => NULL,
        'idPersona'     => NULL,
        'idDep'         => NULL,
        'idProv'        => NULL,
        'idDist'        => NULL,
        'varDireccion'  => NULL,
        'varReferencia' => NULL,
        'intEstado'     => NULL
    ); 
    //iddireccion,idCliente,idPersona,idDep,idProv,idDist,varDireccion,varReferencia,intEstado
    
}//END Model_Direcciones
