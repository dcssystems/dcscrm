<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personas
 *
 * @author ADS
 */
class Model_Persona_Personas extends ORM{
    //put your code here
    protected $_table_name = 'personas';
    
    protected $_primary_key = 'idPersona';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idPersona'     => NULL,
        'idDept'        => NULL,
        'idProv'        => NULL,
        'varDocumento'  => NULL,
        'intTipodoc'    => NULL,
        'varCodigo'     => NULL,
        'varNombre'     => NULL,
        'varDireccion'  => NULL,
        'varReferencia' => NULL,
        'varCorreo'     => NULL
    );  
    //idPersona,idDept,idProv,idDist,varDocumento,intTipodoc,varCodigo,varNombre,varDireccion,varReferencia,varCorreo
    
}//END Model_Persona
