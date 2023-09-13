<?php
session_start();
include 'inc/head.php';

 if (isset($_SESSION["uname"])) {
      header("Location: index.php");
   }
?>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Chigs Hacking</a>
    </div>
</nav>
<?php
if (isset($_SESSION['status'])) {
    echo '<div class="alert alert-danger container mt-5">
  <strong>Danger!  </strong>' .$_SESSION['status']. '</div>';
  session_destroy();
}

?>
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center bold">
                    <h2>Login Page</h2>
                </div>
                <div class="card-body">
                    <form action = "code.php" method = "POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email_log">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass_log" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <a href="forget_pass.php"> Forget Password</a>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login_btn">Submit</button>
                        <button type="button" class="btn btn-primary" onclick="ClearFields();">Clear</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Register Here</h2>
                </div>
                <div class="card-body">
                    <form action = "code.php"  method = "POST">
                        <div class="mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" name="uname_reg" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email_reg" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="pass_reg" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="text" name="cpass_reg" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="pno_reg" class="form-control">
                        </div>
                         <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" name="role_reg" id="exampleFormControlSelect1">
                              <option>Admin</option>
                              <option>User</option>
                            </select>
                          </div>
                        <button type="submit" name="reg_sub" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
    function ClearFields(){
        document.getElementsByName('email_log').value = "";
        document.getElementsByName('pass_log').value = "";
    }
    </script>
<?php
    include 'inc/foot.php';
?>