 <?php
session_start();
include 'inc/head.php';
include("inc/config.php");
?>
<?php
   if (!isset($_SESSION["uname"])) {
      header("Location: login.php");
   }
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>

<?php
include 'inc/head.php';
?>
<form action="logout.php">
<div class="m-5">
<button class="btn btn-primary">Logout</button>
</div>
</form>
<div class="container mt-5">
<table id="exampleTable" class="table table-striped table-bordered" style="width: 70%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Uname</th>
      <th scope="col">Email</th>
      <th scope="col">Pno</th>
      <th scope="col">Role</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>


<?php
$sql = " SELECT * FROM users";
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