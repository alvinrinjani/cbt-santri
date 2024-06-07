<?php

class Sessioner 
{
    public static function logSession()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login');
            exit;
        }

        return true;
    }
}