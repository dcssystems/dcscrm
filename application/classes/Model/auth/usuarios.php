<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author ADS
 */
class Model_Auth_Usuarios extends ORM {
    //put your code here
    protected $_table_name = 'usuarios';
    
    protected $_primary_key = 'idUsuario';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idUsuario'      => NULL,
        'idPerfil'       => NULL,
        'varUsuario'     => NULL,
        'varPass'        => NULL,
        'varPhonelogin'  => NULL,
        'varPhonepass'   => NULL,
        'intEstado'      => NULL,
    );  
}
