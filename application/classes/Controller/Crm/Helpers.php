<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Helpers
 *
 * @author ADS
 */
class Controller_Crm_Helpers extends Controller {
    //put your code here
    public static function getChangeDateTimeDB($dateWeb) {
        $arrDate = explode(" ",$dateWeb);
        $preDate = explode("/", $arrDate[0]);
        $newDate = $preDate[2]."-".$preDate[1]."-".$preDate[0]." ".$arrDate[1];
        return $newDate;
    }
    
}
