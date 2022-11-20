<?php
include '../view/header-costumer.php';
include '../model/db.php';
include'../view/body_bv.php';
$user=$_SESSION['user'];

$sql="select * from account where email = '$user' ";
$kq=$conn->query($sql);
foreach($kq as $row){
    echo $row['id_account_type'];
}
?>



<?php
include'footer.html';
?>


