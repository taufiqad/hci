<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header" style="text-align: center"><h2>Selamat Datang!</h2></div>
        <div class="card-body">
          <form method="post" action="function/checklogin.php">
            <div class="form-group">
              <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <small>Didn't Have An Account?</small>
          <a href="" class="" data-toggle = "modal" data-target ="#myModal1">Sign Up</a>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog" style="color:black;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
              </div>
              <div class="modal-body">
                <form method="post" action="function/register.php">
                  <div class="form-group">
                    <label for="email2">Email</label>
                    <input type="email" class="form-control" name="email2" id="email2">
                  </div>
                  <div class="form-group">
                    <label for="username2">Username</label>
                    <input type="text" class="form-control" name="username2" id="username2">
                  </div>
                  <div class="form-group">
                    <label for="password2">Password</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                  </div>
                  <div class="form-group">
                    <label for="birth">Birth Date (Format Month-Day-Year)</label>
                    <input type="date" class="form-control" name="birth" id="birth">
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
</body>
</html>