<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!empty($_REQUEST["data"])){
    $name    = $_REQUEST["data"]["name"];
    $email   = $_REQUEST["data"]["email"];
    $message = $_REQUEST["data"]["message"];
    
    $to = "informes@dirconsolutions.com";
    $subject = "Formulario de contactenos";
    $body = "Informacion del contacto: <br/> Nombre:". $name ." "
            . "<br/>Email: ". $email ."<br/> "
            . "Consulta: ". $message."<br/>";
    if (mail($to, $subject, $body)) {
        echo("success");
    } else {
        echo("<p>Email delivery failed…</p>");
    }
}