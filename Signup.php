<?php

namespace MyApp\Controller;

class Signup extends \MyApp\Controller {

  public function run() {
    if ($this->isLoggedIn()) {
      header('Location: ' . SITE_URL);
      exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->postProcess();
    }
  }
  
protected function postProcess(){
  //validate
  try{
    $this->_validate();
  }catch (\MyApp\Exception\InvaidEmail $e){
    echo $e->getMessage();
      exit;
  }catch (\MyApp\Exception\InvaildPassword $e){
     echo $e->getMessage();
      exit;
  }  
  
    echo "success";
    exit;　
  
  //crate user
  
  //redirect to login


}
  
Private function _validate(){
  if(!friter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    throw new \MyApp\Exception\InvalidPassword();
  }
  
  if(!preg_match('/\A[a-zA-Z0-9]+\z/',$_POST['passwor'])){
    throw new \MyApp\Exception\InvalidPassword();
  }
}
  
}
