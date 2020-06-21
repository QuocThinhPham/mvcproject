<?php

class Controller
{
    const VIEW_FOLDER_NAME = './mvc/Views';
    const MODEL_FOLDER_NAME = './mvc/Models';
    public function view($viewPath, array $data = [])
    {
        foreach ($data as $key => $value) $$key = $value;
        require_once(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php');
    }

    public function model($modelName)
    {
        require_once(self::MODEL_FOLDER_NAME . '/' . str_replace('.', '/', $modelName) . '.php');
    }
}