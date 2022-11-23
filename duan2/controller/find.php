<?php
include "../model/db.php";
$find=$_GET['find'];

if(isset($_GET['find'])){
    header('Location:../view/afterfind.php?find='.$find);
}





?>