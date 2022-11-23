<?php
include'../../model/db.php';

if (isset($_POST['delete'])){
echo $row['id_post'];
    $sql="delete from post where post_id = $id_post";
    $kq= $conn->query($sql);

}
?>