<?php
include("inc/admin_auth.php");
include 'inc/head.php';
?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <?php
            $sql_users = "SELECT * FROM `users`";
            $mysqliStatus = $con->query($sql_users);
            $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            <div class="card bg-primary">
                <div class="card-body">
                    <h2 class="card-title mb-3 text-center">Total Users</h2>
                    <p class="h1 text-center"><?php echo $rows_count_value; ?></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <?php
            $sql_users = "SELECT * FROM `roles`";
            $mysqliStatus = $con->query($sql_users);
            $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            <div class="card bg-primary">
                <div class="card-body">
                    <h2 class="card-title mb-3 text-center">Total Roles</h2>
                    <p class="h1 text-center"><?php echo $rows_count_value; ?></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-primary">
                <div class="card-body">
                    <h2 class="card-title mb-3 text-center">Total Users</h2>
                    <p class="h1 text-center">20</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-primary">
                <div class="card-body">
                    <h2 class="card-title mb-3 text-center">Total Users</h2>
                    <p class="h1 text-center">20</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'inc/foot.php';
?>