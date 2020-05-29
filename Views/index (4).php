<?php
 // include_once 'includes/conect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../Css/style.scss">
<link rel="stylesheet" href="../Css/bootstrap.min.css">
<link rel="stylesheet" href="../Css/style.css">
<link rel="stylesheet" href="js/jquery-3.4.1.min.js"><script src="script.js"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

</head>
<body>


    <!--start navbar  -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src=".././img/ima.png" alt="logo" width="50px" ; height="50px">
                <span>LOG</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="nav-link.active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seconnecter.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="s'inscrire.php">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--End navbar  -->

    <form action="sinscrire.php" method="post">
        <p>fullname: <input type="text" name="fullname" /></p><br>
        <p>email : <input type="text" name="email" /></p><br>
        <p>password : <input type="password" name="password" /></p><br>
        <input type="submit" value="s'inscrire">
      </form>


       <!-- <?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//
//   $email = $_POST['email'];
//   $username = $_POST['fullname'];
//   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//
//   try {
//     // set the PDO error mode to exception
//     $sql = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New user registred created successfully";
//   } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
//   }
//
//   $conn = null;
// }
?> -->

</body>
</html>
