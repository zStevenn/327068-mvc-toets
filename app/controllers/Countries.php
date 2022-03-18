<?php
class Countries extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('Country');
  }

  public function index()
  {
    $countries = $this->userModel->getCountries();

    $data =
      [
        'countries' => $countries
      ];
    $this->view('countries/index', $data);
  }
}
