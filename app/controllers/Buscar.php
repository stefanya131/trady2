<?php
/**
 *
 */
class Buscar_Controller extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view->title = "¡First app!";
    $this->view->view = $this->view;
    $this->view->render('welcome');
  }

  public function search()
  {
    $this->view->title = "Buscando...";
    $this->view->view = $this->view;
    $this->view->render('search');
  }
}
