<?php
include("inc/admin_auth.php");
include 'inc/head.php';
?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h2>Register Here</h2>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
            <?php
                $sql_data = "select * from users";
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
                            <th scope="col"> Action</th>
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
                                <?php echo $row['uname']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['pno']; ?>
                            </td>
                            <td>
                                <?php echo $row['roles']; ?>
                            </td>
                            <td>
                                <?php echo $row['is_verify']; ?>
                            </td>
                            <td><a class="btn btn-primary">Edit</a>
                                <a href='delete.php?id=<?php echo $row['id']; ?>' class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
    include 'inc/foot.php';
?>