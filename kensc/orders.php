<?php


if(isset($_POST['order'])){
   
   $club= $_POST['club'];
   $jtype= $_POST['Jtype'];
   $contact= $_POST['contact'];
   $size= $_POST['size'];
   
   $con= mysqli_connect('localhost','root','','kensports');
   $sql= "INSERT INTO Orders values('$contact', '$club', '$jtype', '$size');";
   $ins= mysqli_query($con,$sql);
   if($ins){
    echo "successful";
   }
   else{
    echo mysqli_error($con);
    }
}  
?>