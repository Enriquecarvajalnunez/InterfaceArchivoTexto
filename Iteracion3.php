<?php
/*Se encuentra funcionando correctamente*/

Require_once "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;//IOFactory adivina el tipo de plantilla con la que se trabaja
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$RutaArchivo = "Datos.xlsx";
$documento = IOFactory::load($RutaArchivo);//lectura del archivo

$worksheet = $documento->getActiveSheet();//obtiene hoja activa
$Header = '››' .Espacios(3).'809224'.Espacios(49).'PA01XS0317A0'.Espacios(22).'Y33Y'.Espacios(22);
$Piepagina = 'END'. Espacios(57). '››END'.Espacios(55); 

$celda = '';
$int = 1;
  
    foreach($worksheet->getRowIterator(2) as $row)//iterados de filas comienza en fila 2    
    {   
        
        $cellIterator = $row->getCellIterator();//Iterador de celdas recorre las celdas                                              
                                                                                           
        /*Imprime contenido de celdas*/
        $i=1; //itera entre columnas en excel inicia desde el indice 1, variable bandera
        foreach ($cellIterator as $cell) //columnas
        {             
           
           if($i==1)
            {
                
                $Header.= str_pad('P0'.$cell->getValue(),18,chr(32),STR_PAD_RIGHT); //obtiene valor de la celda                
                $i++;
               
            }else
            {
                $Header.=str_pad($cell->getValue(), 4, '0', STR_PAD_LEFT) .Espacios(8); //obtiene valor de la celda                                     
            }                         
        }
        
    }

$Header.=$Piepagina;
echo 'PROCESO FINALIZADO CON EXITO !';
$report_output = 'C:\xampp\htdocs\DatosPHP\Datos.txt';
file_put_contents($report_output,$Header);


//Función para concatenar espacios, se debe revisar porque no esta asignando los espacios correctos 
  function Espacios($nespacios)
  {
      return str_pad(chr(32), $nespacios, chr(32), STR_PAD_RIGHT);
  }
  
?>