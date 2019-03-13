<?php

include 'Models/Model.php';

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function CreateView($viewName)
    {
        $login = $this->model->getLogin();

        if ($login) {
            include "Views/home.php";
        } else {
            include "Views/$viewName.php";
        }

        $artists = $this->model->showArtists();
    }
}