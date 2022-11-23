

<?php
  include '../../model/db.php';
  include'../view/header.php';
$sql='select * from post_wait ';
$kq=$conn ->query($sql);
?>
include'../view/header.php';
<article>
<?php
foreach( $kq as $row){?>
    <form action="" method="post">
    <p>Tên bài viết</p>
    <input type="text" name="post_name" id="" value="<?php echo $row['post_wait_name']?>">
    
    
    </form>
      

        
    </article>
    <?php } ?>



