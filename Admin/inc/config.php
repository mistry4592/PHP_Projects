<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root'); // Add your Database UserName
   define('DB_PASSWORD', ''); // Add your Database Password (If You set Bydefult is null)
   define('DB_DATABASE', 'sakshi');  // Add your Database Name

   //here we use mysqli_connect this functions is used for connect to db
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Connection Failed...."); 

   if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>