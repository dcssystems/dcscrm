<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campañas
 *
 * @author ADS
 */
class Model_Campania_Campanias extends ORM {
    //put your code here
    protected $_table_name = 'campanias';
    
    protected $_primary_key = 'idCampania';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idCampania'        => NULL,
        'idCliente'         => NULL,
        'varCodcampania'    => NULL,
        'varNombcampania'   => NULL,
        'varFechainicio'    => NULL,
        'varFechafinal'     => NULL,
        'varEstado'         => NULL
    ); 
    //idCampania	idCliente	varCodcampania	varNombcampania	varFechainicio	varFechafinal	varEstado
    
}
