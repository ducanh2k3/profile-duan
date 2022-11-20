<?php

include "../model/db.php";
$sql = "select * from account";
$kq = $conn->query($sql);



if (isset($_POST["dky"])) {
    if ($_POST["name"] == "") {
        echo '<script type="text/javascript">';
        echo ' alert("Bạn chưa nhập Họ và tên mời bạn nhập Họ và tên")';  //not showing an alert box.
        echo '</script>';
    } elseif ($_POST["email"] == "") {
        echo '<script type="text/javascript">';
        echo ' alert("Bạn chưa nhập email mời bạn nhập email")';  //not showing an alert box.
        echo '</script>';
    }
     elseif ($_POST["password"] == "") {
        echo '<script type="text/javascript">';
        echo ' alert("Bạn chưa nhập mật khẩu mời bạn nhập khẩu")';  //not showing an alert box.
        echo '</script>';
    } else {
        $sql = "select *from account";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id_account_type=2;
        if(isset($_POST['email'])) {
            $connecDB = mysqli_connect("localhost","root","","duan1");
            $results = mysqli_query($connecDB,"SELECT * FROM account WHERE email='$email'");

            //return total count
            $email_exist = mysqli_num_rows($results);
            if($email_exist) {
                echo '<script type="text/javascript">';
                echo ' alert("Email bạn nhập đã có người sử dụng,mời bạn sử dụng email khác")';  //not showing an alert box.
                echo '</script>';
            }else{
                $password = $_POST['password'];
                $id_account_type = 2;
    
                $sql = "insert into account values('','$email', '$password','$name','$id_account_type')";
                $result = $conn->prepare($sql);
    
                if ($result->execute()) {
                    echo "Ban da dang ky thanh cong";
    
                    header('Location:../view/login.php');
                    ob_end_flush();
                } else {
                    echo "Đẩy lên thất bại";
                }
            }
          
        }

      
    }
}


?>