<?php

class User {

    public $User_Name;
    public $Password;
    public $Url_photo;


 // Methods
 function set_name($User_Name) {
    $this->name = $User_Name;

  }
  function get_name() {
    return $this->name;
  }

  function set_password($Password) {
    $this->password = $Password;

  }
  function get_password() {
    return $this->password; 
  }
}

$UserName = new User();

echo '<pre>';
var_dump($UserName);
echo '</pre>';


class Post {

    public $Url_photo;
    public $Date;
    public $Content;
    
}


$blog = new Post();

function set_photo($Url_photo) {
    $this->photo = $Url_photo;

  }
  function get_photo() {
    return $this->name;
  }

  function set_date($Date) {
    $this->date = $Date;

  }
  function get_password() {
    return $this->password; 
  }

echo '<pre>';
var_dump($blog);
echo '</pre>';