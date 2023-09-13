<?php
include("inc/admin_auth.php");
include 'inc/head.php';
?>
<div class="container mt-3">
    <div class="row">
        <div class="card">
            <div class="card-header text-center bold">
                <h2>Edit/Show Roles</h2>
            </div>
            <div class="card-body">
                <?php
                $sql_data = "select * from roles";
                $result_data = mysqli_query($con,$sql_data);
                if(mysqli_num_rows($result_data) > 0){

                }else{
                    echo "No Record found";
                }
            ?>
                <div class="mt-5">
                    <table class="datatable table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role_Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($result_data)){?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['rname']; ?>
                                </td>
                                <td><button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'inc/foot.php';
?>