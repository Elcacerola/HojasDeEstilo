<?php
include ("constantes.php");
include ("vacaciones.php");

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$oVacacion=new Vacaciones($_POST["rut"],
                          $_POST["nombre"],
                          $_POST["cargo"],
                          $_POST["fechaini"], 
                          $_POST["diastotales"],
                          $_POST["comentario"]);
if (isset ($_SESSION["aVacaciones"])){
    $arrVacaciones=$_SESSION["aVacaciones"];
}
$arrVacaciones[]=$oVacacion;
$_SESSION["aVacaciones"]=$arrVacaciones;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

