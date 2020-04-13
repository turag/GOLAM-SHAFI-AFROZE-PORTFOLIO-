
<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["loggedin"])){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login
          <?php
          include '../includes/db/db.php';
          if(isset($_POST['login']))
          {
              $usename = $_POST['username'];
              $pass = $_POST['pass'];

              if(empty($usename) || empty($pass) ){
                  echo '<br><span> Wrong Username  Passwod</span>';
              }
              else {
                  $sql = "SELECT * FROM b_user WHERE username = ?;";
                  $stmt = mysqli_stmt_init($con);
                  if(mysqli_stmt_prepare($stmt, $sql)){
                        mysqli_stmt_bind_param($stmt, "s", $usename);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if($row = mysqli_fetch_array($result)){
                            $pwdcheck = password_verify($pass, $row['pass']);
                            if($pwdcheck){
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['user'] = $row['username'];
                                $_SESSION['pass'] = $row['pass'];
                                header('Location: index.php');

                            }
                            else{
                                echo '<br><span>Wrong Password</span>';
                            }
                        }
                        else{
                            echo '<br><span>No User Found</span>';
                        }
                  }
              }
          }
          ?>

      </div>
      <div class="card-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
          <div class="form-group">
            <div class="form-label-group">
              <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>

          <button name="login" class="btn btn-primary btn-block">Login</button>
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
