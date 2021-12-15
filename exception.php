<?php 
class OriginalException extends Exception{

    function __construct(Exception $e){
        $code=$e->getCode();
        if($code == "1045"){
            $msg='database not connected';
        }
        else if($code == "42S02"){
        $msg='SQL error';
        }
        else if($code == "2002"){
        $msg='database kidou dekinai';
        }





        //switch

        switch (get_class($e)) {
            case 'PDOException':
                exit($msg.':<br>'.$e->getMessage());
                break;
            case 'Exception':
                exit('error :<br>'.$e->getMessage());
                break;
            
            default:
                echo "yoteigai no error wo hasseishita";
        }
    }
}