<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of telefonos
 *
 * @author ADS
 */
class Model_Persona_Telefonos extends ORM {
    //put your code here
    protected $_table_name = 'telefonos';
    
    protected $_primary_key = 'idTelefono';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idTelefono'        => NULL,
        'idPersona'         => NULL,
        'idTipotelefono'    => NULL,
        'varNumero'         => NULL,
        'intEstado'         => NULL,
    ); 
    //idTelefono,idPersona,idTipotelefono,varNumero,intEstado

    
}//END Model_Telefonos
