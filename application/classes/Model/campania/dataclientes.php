<?php defined('SYSPATH') or die('No direct script access.');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dataclientes
 *
 * @author ADS
 */
class Model_Campania_Dataclientes extends ORM {
    //put your code here
    protected $_table_name = 'datos_bbva';
    
    protected $_primary_key = 'iddatacliente';
    
    protected $_db_group = 'default';
    
    protected $_table_columns = array(
        'iddatacliente'         => NULL,
        'varFproceso'           => NULL,
        'varAgencia'            => NULL,
        'varGestor'             => NULL,
        'varTerritorio'         => NULL,
        'varCodoficina'         => NULL,
        'varSubproducto'        => NULL,
        'varNomsubproducto'     => NULL,
        'varNrocontrato'        => NULL,
        'varCodcentral'         => NULL,
        'varTpersona'           => NULL,
        'varNombre'             => NULL,
        'varDivisa'             => NULL,
        'varSaldohoy'           => NULL,
        'varDireccion'          => NULL,
        'varTelefono'           => NULL,
        'varCodpostal'          => NULL,
        'varCodestado'          => NULL,
        'varCodprovincia'       => NULL,
        'varCoddistrito'        => NULL,
        'varFincumpli'          => NULL,
        'varDiavenc'            => NULL,
        'varUbigeo'             => NULL,
        'varDpto'               => NULL,
        'varDistprov'           => NULL,
        'varTramodia'           => NULL,
        'varTipodoc'            => NULL,
        'varNrodoc'             => NULL,
        'varTipofono1'          => NULL,
        'varPrefijo1'           => NULL,
        'varFono1'              => NULL,
        'varExtension1'         => NULL,
        'varTipofono2'          => NULL,
        'varPrefijo2'           => NULL,
        'varFono2'              => NULL,
        'varExtension2'         => NULL,
        'varTipofono3'          => NULL,
        'varPrefijo3'           => NULL,
        'varFono3'              => NULL,
        'varExtension3'         => NULL,
        'varTipofono4'          => NULL,
        'varPrefijo4'           => NULL,
        'varFono4'              => NULL,
        'varExtension4'         => NULL,
        'varTipofono5'          => NULL,
        'varPrefijo5'           => NULL,
        'varFono5'              => NULL,
        'varExtension5'         => NULL,
        'varEmail'              => NULL,
        'varProvision'          => NULL,
        'varFechadegeneracion'  => NULL,
        'varFechadeingreso'     => NULL,
        'varOficina'            => NULL,
        'varProducto'           => NULL,
        'varMarca'              => NULL,
        'varTipotelefono'       => NULL,
        'varPrefijodetelefono'  => NULL,
        'varTelefono1'          => NULL,
        'varTelf1extension'     => NULL,
        'varTipotelefono2'      => NULL,
        'varPrefijodetelefono2' => NULL,
        'varTelefono2'          => NULL,
        'varTelf2extension'     => NULL,
        'varDireccion1'         => NULL,
        'varDepartamento'       => NULL,
        'varProvincia'          => NULL,
        'varDistrito'           => NULL
    );
    //iddatacliente	idCliente	varFproceso	varAgencia	varGestor	
    //varTerritorio	varCodoficina	varSubproducto	varNomsubproducto	
    //varNrocontrato	varCodcentral	varTpersona	varNombre	varDivisa	
    //varSaldohoy	varDireccion	varTelefono	varCodpostal	varCodestado	
    //varCodprovincia	varCoddistrito	varFincumpli	varDiavenc	varUbigeo	
    //varDpto	varDistprov	varTramodia	varTipodoc	varNrodoc	
    //varTipofono1	varPrefijo1	varFono1	varExtension1	varTipofono2	
    //varPrefijo2	varFono2	varExtension2	varTipofono3	varPrefijo3	
    //varFono3	varExtension3	varTipofono4	varPrefijo4	varFono4	
    //varExtension4	varTipofono5	varPrefijo5	varFono5	
    //varExtension5	varEmail	varProvision	datFechadegeneracion	
    //datFechadeingreso	varOficina	varProducto	varMarca	
    //varTipotelefono	varPrefijodetelefono	varTelefono1	varTelf1extension	
    //varTipotelefono2	varPrefijodetelefono2	varTelefono2	varTelf2extension	
    //varDireccion1	varDepartamento	varProvincia	varDistrito
}
