<?php

require_once "Loader.php";

/**
 *
 */
class System
{
  /**
   * Save the URL given
   * @var array
   */
  protected $routes = array();


  /**
   * Save the basepath of the application
   * @var string
   */
  protected $basepath;


  /**
   * Save the URI given
   * @var string
   */
  protected $uri;


  /**
   * Save the base URL of the app
   * @var string
   */
  protected $base_url;


  /**
   * Save the name of searched controller
   * @var string
   */
  protected $controller;


  /**
   * Save the name of the searched method
   * @var string
   */
  protected $method;


  /**
   * Save the parameter if is there
   * @var string
   */
  protected $param;

  // -----------------------------------------------------------------

  public function __construct()
  {
    $this->load = new Loader();
  }

  // -----------------------------------------------------------------


  /**
   * Function init, only follow a sequence of steps,
   * this will be it's life cycle.
   *
   * @return void
   */
  public function init()
  {
    $this->getURI();

    $this->constants();

    // Load a clases of given path
    $this->load->autoload('system/core/');

    // Load the database
    // ---

    // Load the models
    // ---

    // Load the hooks
    // ---
    // Load the request controller
    $this->load->controller($this->controller, $this->method, $this->param);
  }


  // -----------------------------------------------------------------


  /**
   * getURI, only resolve the URI and set the controller name and method name...
   *
   * @return void
   */
  public function getURI()
  {
    $this->basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, - 1)).'/';

    $this->uri = substr($_SERVER['REQUEST_URI'], strlen($this->basepath));

    //
    // Save the route in array
    //
    $this->routes = explode('/', $this->uri);

    //
    // Define the controller
    //
    if ( ! isset($this->routes[1]) || empty($this->routes[1]) )
    {
      $this->controller = DEFAULT_CONTROLLER;
    }
    else
    {
      $this->controller =$this->routes[1];
    }

    //
    // is requesting a method... ?
    //
    if ( ! isset($this->routes[2]) || empty($this->routes[2]))
    {
      $this->method = "index";
    }
    else
    {
      $this->method = $this->routes[2];
    }

    //
    // is there a parameter... ?
    //
    isset($this->routes[3])
    ? $this->param = $this->routes[3]
    : $this->param = "";
  }


  // -----------------------------------------------------------------


  /**
   * This function set the constants for the app
   *
   * @return void
   */
  public function constants()
  {
    $request_uri = explode('/', $_SERVER["REQUEST_URI"]);

    define('SERVER_NAME', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']);
    define('BASEPATH', SERVER_NAME.$this->basepath);
    define('BASE_URL', BASEPATH.'index.php');
    define('APPPATH', SERVER_NAME.$this->basepath.'app/');
    define('STATICPATH', APPPATH.'assets/');

    define('VIEWPATH', APPPATH.'views/');
    define('SYSPATH', SERVER_NAME.$this->basepath.'system/');


    // echo "SERVER_NAME: ".SERVER_NAME."<br>";
    // echo "base_url: ".BASE_URL."<br>";
    // echo "basepath: ".BASEPATH."<br>";
    // echo "apppath: ".APPPATH."<br>";
    // echo "viewpath: ".VIEWPATH."<br>";
    // echo "SYSPATH: ".SYSPATH."<br>";
    // echo "STATICPATH: ".STATICPATH."<br>";
  }
}
