<?php

     $dsn = 'mysql:host=localhost;dbname=prodacts'; //data source name

     $user = 'root'; //the user to connect

     $pass = '';

     $option = array(

     //  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', lire arab

     );



try {
    $db = new PDO($dsn, $user, $pass); //start a new connection with PDO class
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $q = "INSERT INTO items (name) VALUES ('')";

 //   $db->exec($q);

}     

catch(PDOException $e) {

    echo 'failed ' . $e->getMessage(); 
}

$utilisateur  = "olivier@uneadressebidon.com";
$mot_de_passe = "olivier";
$salt         = "@|-°+==00001ddQ"
echo md5( $mot_de_passe . $salt . $utilisateur .  $salt . $utilisateur . $utilisateur  ); // c6545123d1213h1004d041a9f1


     