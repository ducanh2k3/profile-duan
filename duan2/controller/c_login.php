<?php



include'../model/db.php';
include'../view/header-costumer.php';
  $email= $_POST['email'] ;
 $password=$_POST['password'] ;

 $sql="select * from account where email='$email'";
 $kq= $conn->query($sql)->fetch();
 echo $kq['id_account_type'];

 if(isset($kq['dk'])){
  header("location:dky.php");
 }
if(isset($_POST['login'])){
if($email=!$kq['email']){
  echo '<script type="text/javascript">';
  echo ' alert("Ban da nhap sai email")';  //not showing an alert box.
  echo '</script>';
 }
 elseif($email=$kq['email']){
 
  if($password==$kq['password']){
  if($kq['id_account_type'] == 2){
    echo '<script type="text/javascript">';
    echo ' alert("dang nhap thanh cong")';  //not showing an alert box. 
    echo '</script>';
    $_SESSION['user']=$email;
    $yourURL="../view/home.php";
    echo ("<script>location.href='$yourURL'</script>");

   
  

  }   elseif ($kq['id_account_type'] == 1) {
    $_SESSION['user']=$email;
    $yourURL="../admin/view/admin.php";
    echo ("<script>location.href='$yourURL'</script>");
  

  }


  


  }else{
    echo '<script type="text/javascript">';
    echo ' alert("Sai mat khau")';  //not showing an alert box.
    echo '</script>';

  }







}}
 
 ?>


