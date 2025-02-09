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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'phone' => trim($_POST['phone']),
        'occ' => trim($_POST['occ']),
        'sex' => trim($_POST['sex']),
        'aoi' => trim($_POST['aoi']),
        'name_err' => '',
        'email_err' => '',
        'phone_err' => '',
        'sex_err' => '',
        'aoi' => '',
        'occ' => ''
      ];

      // Validate email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter an email!';
        // Validate name
        if (empty($data['name'])) {
          $data['name_err'] = 'Please enter a name!';
        }
        $this->view('pages/volunteer', $data);
      } elseif (empty($data['phone'])) {
        $data['phone_err'] = 'Phone number is required!';
        $this->view('pages/volunteer', $data);
      } elseif (empty($data['sex'])) {
        $data['sex_err'] = 'Kindly select an option!';
        $this->view('pages/volunteer', $data);
      } elseif (empty($data['aoi'])) {
        $data['aoi_err'] = 'This field is required!';
        $this->view('pages/volunteer', $data);
      }
    } else {
      $data = [
        'name' => '',
        'email' => '',
        'occ' => '',
        'phone' => '',
        'name_err' => '',
        'email_err' => '',
        'occ_err' => '',
        'phone_err' => '',
        'sex' => '',
      ];
      // Load about view
      $this->view('pages/volunteer', $data);
    }
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
