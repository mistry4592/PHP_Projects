
<?php
session_start();
include 'inc/head.php';
include 'inc/config.php';
?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h2>Register Here</h2>
        </div>
        <div class="card-body">
            <?php
            $ids = $_SESSION["id"];
                $sql_data = "select * from visitor where users = '$ids'";
                $result_data = mysqli_query($con,$sql_data);
                if(mysqli_num_rows($result_data) > 0){

                }else{
                    echo "No Record found";
                }
            ?>
            <div class="mt-5">
                <table class="datatable table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">UName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pho No</th>
                            <th scope="col">Role</th>
                            <th scope="col">Verify</th>
                            <th scope="col"> Wing</th>
                            <th scope="col"> Flat</th>
                            <th scope="col">Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                while($row = mysqli_fetch_assoc($result_data)){?>
                        <tr>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['phno']; ?>
                            </td>
                            <td>
                                <?php echo $row['address']; ?>
                            </td>
                            <td>
                                <?php echo $row['purpose']; ?>
                            </td>
                            <td>
                                <?php echo $row['meet_per']; ?>
                            </td>
                            <td>
                                <?php echo $row['dtime']; ?>
                            </td>
                            <td>
                                <?php echo $row['wing']; ?>
                            </td>
                            <td>
                                <?php echo $row['flat']; ?>
                            </td>
                            <td>
                                <button class="btn btn-primary">Out </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php
include 'inc/foot.php';
?>