<?php
    if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
         $conn = mysqli_connect('localhost','root','','examcell',3307) or die("Connection Failed : " .mysqli_connect_error());
         if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql="INSERT INTO `login`(`Email`,`Password`) VALUES ('$email','$password')";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo 'Entry Successfull';
             }
            else{
                echo 'Error Occured';
            }


         }



    }

?>
