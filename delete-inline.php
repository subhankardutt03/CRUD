<?php

  $stu_id = $_GET['id'];

    include 'config.php';

     $sql = "DELETE from student where sid ={$stu_id} ";

    $result= mysqli_query($conn,$sql) or die("query unsuccessful");

    header("Location: http://localhost/basic PHP/php & mysql/crud/index.php ");

    mysqli_close($conn);
?>