<?php
class Pages extends Controller
{
  public function __construct() {}

  // Load Homepage
  public function index()
  {
    redirect('pages/welcome');
  }

  public function about()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/about', $data);
  }
  public function welcome()
  {
    //Set Data
    $data = [
      '' => ''
    ];

    // Load about view
    $this->view('pages/index', $data);
  }

  public function events()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/events', $data);
  }

  public function volunteer()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/volunteer', $data);
  }

  public function blog()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/blog', $data);
  }

  public function donate()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/donate', $data);
  }
}
