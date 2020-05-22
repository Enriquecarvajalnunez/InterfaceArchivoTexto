<?php


require_once "WebRequest.class.php";
//require_once "Response.class.php";
//class DefaultCommand extends Response{

class CmdDefaultInicio {
    function execute() {

        //$this ->setHttpHeaders(200); //OK
        return "success";
    }
}

?>

