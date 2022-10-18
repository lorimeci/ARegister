<?php
class UserController extends AuthController {

    public $model;
    public function loginAction()
    {
     $this->checkUserAccess();
     require_once VIEW_PATH .'dashboard.html';
    }
    
  
 
}