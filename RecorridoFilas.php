<?php

Require_once "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;//IOFactory adivina el tipo de plantilla con la que se trabaja
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$RutaArchivo = "Datos.xlsx";
$documento = IOFactory::load($RutaArchivo);//lectura del archivo

$worksheet = $documento->getActiveSheet();//obtiene hoja activa
$Header = '››' .Espacios(3).'809224'.Espacios(5).'PA01XS0317A0'.Espacios(5).'Y33Y'.Espacios(5);
$Piepagina = Espacios(5).'END'. Espacios(7). '››END'; 
$print='';

if($documento)
{   //$int = 1;
    foreach($worksheet->getRowIterator(2) as $row)//iterados de filas comienza en fila 2    
    {   
        
        $cellIterator = $row->getCellIterator();//Iterador de celdas recorre las celdas    
        for($int = 1; $int <= 1; $int++)
        {
            $celda =  $worksheet->getCell('A'.$int);                 
            
            if($celda)
            {
                $print = 'P0';   
                //echo $celda->getValue(); //-> verifica el valor de la celda           
            }
        }
                
        /*Imprime contenido de celdas*/
        foreach ($cellIterator as $cell) {  
            if($celda)
            {
                $Header.= '|'.$print.$cell->getValue() . PHP_EOL.'|'.Espacios(3); //obtiene valir de la celda 

            }else
            {
                $Header.= '|'.$cell->getValue() . PHP_EOL.'|'.Espacios(3); //obtiene valir de la celda  
                //echo '|';     

            }                   
            
            }              
    } //print_r($print);
}else
{
    echo "<NO DATA FOUND>NULL</NODATAFOUND>";
}
$Header.=$Piepagina;
echo $Header;



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