<?php
try{
    $conn= new PDO("mysql:host=localhost;dbname=duan1;charsets=uft8","root","");

} catch(Throwable $e){
    echo "loi $e";
}

?>
