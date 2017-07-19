<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of parametros
 *
 * @author ADS
 */
class Model_Parametro_Parametros extends ORM {
    //put your code here
    protected $_table_name = 'parametros';
    
    protected $_primary_key = 'idParametro';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idParametro'       => NULL,
        'intN1'             => NULL,
        'varNomparametro'   => NULL,
        'intN2'             => NULL,
        'varNomdetalle'     => NULL,
        'intEstado'         => NULL
    );
    //idParametro intN1 varNomparametro intN2 varNomdetalle intEstado
    
}
