<?php

class Helper
{
    public static function cleanStr($str) 
    {
        $strClean = str_replace(["'", '"', '`', ' '], '', $str);
        return $strClean;
    }
}

?>