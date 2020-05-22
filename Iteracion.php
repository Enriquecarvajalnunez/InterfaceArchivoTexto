<?php

Require_once "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;//IOFactory adivina el tipo de plantilla con la que se trabaja
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$RutaArchivo = "Datos.xlsx";
$documento = IOFactory::load($RutaArchivo);//lectura del archivo

$worksheet = $documento->getActiveSheet();//obtiene hoja activa
$Header = '››' .Espacios(3).'809224'.Espacios(5).'PA01XS0317A0'.Espacios(5).'Y33Y'.Espacios(5);
$Piepagina = Espacios(5).'END'. Espacios(7). '››END';


//Para recorrer las filas de una columna:

//$column = 'A';
$lastRow = $worksheet->getHighestRow();
$lastColumn = $worksheet->getHighestColumn();
//$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); 

for ($row = 2; $row <= $lastRow; $row++) 
{    
    for($column = 'A'; $column != $lastColumn; $column++)
    {
        echo $worksheet->getCell($column . $row)->getValue();             
    }   
      
}








//Función para concatenar espacios, se debe revisar porque no esta asignando los espacios correctos 
function Espacios($nespacios)
{
    $espacios=''; 
    //print_r($espacios);
    for($i=0;$i<$nespacios;$i++){
    
      $espacios .= $espacios . "&nbsp";
//      print_r($espacios);
    }
    return $espacios;//devuelvo la cadena con todos los espacios
  }
  
  //echo 'esto es un ejemplo' . Espacios(5) . 'esto es un ejemplo';//entre las dos cadenas llamo a la

?>