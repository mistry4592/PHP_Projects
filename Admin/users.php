 <?php
session_start();
include 'inc/head.php';
include 'inc/nav.php';
include("inc/config.php");
?>
<?php
   if (!isset($_SESSION["uname"])) {
      header("Location: login.php");
   }
?>

<script>
  $('#example').DataTable();
</script>


<?php
include 'inc/head.php';
?>
<div class="container mt-5">
<table id="exampleTable" class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Uname</th>
      <th scope="col">Email</th>
      <th scope="col">Pno</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>
    </tr>
  </thead>



<?php
$sql = "SELECT * FROM users";
$result = $con->query($sql);
while($rows=$result->fetch_assoc()){
?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $rows['id'];?></th>
      <td><?php echo $rows['uname'];?></td>
      <td><?php echo $rows['email'];?></td>
      <td><?php echo $rows['pno'];?></td>
      <td><?php echo $rows['roles'];?></td>
      <th scope="col"><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></th>
      <td><?php echo $rows['is_verify'];?></td>
    </tr>
  <?php
                }
            ?>  
</table>

</div>





<script>
    $(document).ready(function() {
        $('#exampleTable').DataTable();
    } );
</script>



<?php
include 'inc/foot.php';
?>