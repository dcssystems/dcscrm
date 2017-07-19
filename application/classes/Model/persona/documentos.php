<?php  defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of documentos
 *
 * @author ADS
 */
class Model_Persona_Documentos extends ORM {
    //put your code here
    protected $_table_name = 'documentos';
    
    protected $_primary_key = 'idDocumentos';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idDocumentos'      => NULL,
        'idCliente'         => NULL,
        'idPersona'         => NULL,
        'varCodproducto'    => NULL,
        'varProducto'       => NULL,
        'varCodsubproducto' => NULL,
        'varDivisa'         => NULL,
        'varImporte'        => NULL,
        'intDiasvencidos'   => NULL
    );
    //idDocumentos	idCliente	idPersona	varCodproducto	varProducto	varCodsubproducto	varDivisa	varImporte	intDiasvencidos

}
