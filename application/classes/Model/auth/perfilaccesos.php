<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilaccesoos
 *
 * @author ADS
 */
class Model_Auth_Perfilaccesos {
    //put your code here
    protected $_table_name = 'perfilaccesos';
    
    protected $_primary_key = 'idPerfilacceso';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'idPerfilacceso'    => NULL,
        'idPerfil'          => NULL,
        'idAcceso'          => NULL,
        'idUsuariomod'      => NULL,
        'datFechain'        => NULL,
        'datFechamod'       => NULL,
        'intEstado'         => NULL
    );
    //idPerfilacceso	idPerfil	idAcceso	idUsuariomod	datFechain	datFechamod	intEstado
}
