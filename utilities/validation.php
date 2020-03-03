<?php 
    function validate($str){
        return isEmpty($str) && checkSize($str) && isString($str)!==true;
    }

    function isEmpty($str){
        return trim(strlen($str) > 0);
    }
    
    function isString($str){
        return strpbrk($str, '1234567890') == true;
    }

    function checkSize($str){
        $min = 2;
        return strlen($str) >= $min;
    }  
    function checkIntLenBegin($intnum){
        return BeginLen($intnum) && is_numeric($intnum) ;
    }

    function BeginLen($intnum){
        if (strpos($intnum,'+639') !== false && strlen($intnum)==13){
            return true;
        }else{
            return false;
        }
    }

?>