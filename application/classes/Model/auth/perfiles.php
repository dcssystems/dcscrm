<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfiles
 *
 * @author ADS
 */
class Model_Auth_Perfiles extends ORM {
    //put your code
    protected $_table_name = 'perfiles';
    
    protected $_primary_key = 'idPerfil';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idPerfil'       => NULL,
        'varNomperfil'   => NULL,
        'intEstado'      => NULL,
    );  
}
