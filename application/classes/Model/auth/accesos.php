<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acessos
 *
 * @author ADS
 */
class Model_Auth_Accesos extends ORM {
    //put your code here
    protected $_table_name = 'accesos';
    
    protected $_primary_key = 'idAccesos';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idAccesos'     => NULL,
        'varNomacceso'  => NULL,
        'varDiracceso'  => NULL,
        'intEstado'     => NULL
    );
    //	idAccesos	varNomacceso	varDiracceso	intEstado
    
}//END Model_Accesos
