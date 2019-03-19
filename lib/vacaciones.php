<?php
class Vacaciones{
    private $rut;
    private $nombre;
    private $cargo;
    private $fechaini;
    private $dias;
    private $comentario;
}

function getRut() {
    return $this->rut;
}

 function getNombre() {
    return $this->nombre;
}

 function getCargo() {
    return $this->cargo;
}

 function getFechaini() {
    return $this->fechaini;
}

 function getDias() {
    return $this->dias;
}

 function getComentario() {
    return $this->comentario;
}

 function setRut($rut) {
    $this->rut = $rut;
}

 function setNombre($nombre) {
    $this->nombre = $nombre;
}

 function setCargo($cargo) {
    $this->cargo = $cargo;
}

 function setFechaini($fechaini) {
    $this->fechaini = $fechaini;
}

 function setDias($dias) {
    $this->dias = $dias;
}

 function setComentario($comentario) {
    $this->comentario = $comentario;
}



function __construct($rut, $nombre, $cargo, $fechaini, $dias, $comentario) {
    $this->rut = $rut;
    $this->nombre = $nombre;
    $this->cargo = $cargo;
    $this->fechaini = $fechaini;
    $this->dias = $dias;
    $this->comentario = $comentario;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

