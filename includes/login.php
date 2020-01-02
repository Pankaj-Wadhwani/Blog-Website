<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">

</head>

  <body class="">

    <div class="container">
      <div class="mt-5 row">
          <div class="col-md-4 offset-4">
              <h3>Login</h3>
            <p>Provide credentials to get access</p>
<!--        <div class="card-body">-->
          <form method="post" action="processLogin.php" class="mt-4" role="form">
            <div class="form-group">
<!--              <div class="form-label-group">-->
                <label for="inputEmail">Username</label>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">

<!--              </div>-->
            </div>
            <div class="form-group">
<!--              <div class="form-label-group">-->
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">

<!--              </div>-->
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>

          </form>
<!--          <div class="text-center">-->
<!--            <a class="d-block small mt-3" href="register.html">Register an Account</a>-->
<!--            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
<!--          </div>-->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
