<?php
include "inc/head.php";
 ?>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center bold">
            <h2>Forget Password</h2>
        </div>
        <div class="card-body">
            <form action="inc/ver.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="emails">
                </div>
                <button type="submit" class="btn btn-primary" name="forget_pass">Submit</button>
                <button type="button" class="btn btn-primary" onclick="ClearFields();">Clear</button>
            </form>
        </div>
    </div>
</div>
<?php include "inc/foot.php";
?>