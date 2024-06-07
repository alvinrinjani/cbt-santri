<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once 'app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model;
    }

    public function getKelas($string)
    {
        $lastSlashPos = strrpos($string, '/');
        if ($lastSlashPos !== false) {
            $substring = substr($string, $lastSlashPos + 1);
            return $substring;
        }
        return $string;
    }
}
