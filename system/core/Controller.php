<?php
/**
 * Class controller
 *
 *
 */
class Controller
{
  protected $view;

  function __construct()
  {
    $this->view = new View();
    $this->view->view = $this->view;

    $this->load = new Loader();
  }

}
