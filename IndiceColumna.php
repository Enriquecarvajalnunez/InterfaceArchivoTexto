<?php

Require_once "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;//IOFactory adivina el tipo de plantilla con la que se trabaja
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$RutaArchivo = "Datos.xlsx";
$documento = IOFactory::load($RutaArchivo);//lectura del archivo

$worksheet = $documento->getActiveSheet();//obtiene hoja activa
//$Header = '››' .Espacios(3).'809224'.Espacios(5).'PA01XS0317A0'.Espacios(5).'Y33Y'.Espacios(5);
//$Piepagina = Espacios(5).'END'. Espacios(7). '››END'; 


//$celda =  $worksheet->getCell('A'.$int);
//$celda =  $worksheet->getCellByColumnAndRow(1,$int);


 /*Recorrido de columna*/
$column = 'A';
$column2 = 'B';
$lastRow = $worksheet->getHighestRow();
$lastColumn = $worksheet->highestColumnIndex();

for ($row = 2; $row <= $lastRow; $row++) {
    $cell = $worksheet->getCell($column.$row);
    //echo $cell;
    //print_r($row);
  
   
}
echo $cell2;



?>