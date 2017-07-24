<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientes
 *
 * @author ADS
 */
class Model_Campania_Clientes extends ORM {
    //put your code here
    protected $_table_name = 'clientes';
    
    protected $_primary_key = 'idCliente';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idCliente'         => NULL,
        'varRazonsocial'    => NULL,
        'varRuc'            => NULL,
        'varDireccion'      => NULL,
        'varContacto'       => NULL,
        'varTelefono'       => NULL,
        'varEmail'          => NULL,
        'intEstado'         => NULL,
    ); 
    //idCliente,varRazonsocial,varRuc,varDireccion,varContacto,varTelefono,varEmail,intEstado
    
}
