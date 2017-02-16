<?php
session_start();
$error=' '; //variable para recoger los errores
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        $error = "";
    }else{
        
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        
        $conn = mysqli_connect("localhost", "root" , "");
        
        $db= mysqli_select_db($conn, "armonic");
        
        $query = mysqli_query($conn, "SELECT * from userpass WHERE pass='$pass' AND user='$user'");
        
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION['username'] = $user;
            header("Location: index.php"); //redirigimos a otra page
        }
        else{
            $error = "username or password is invalid";
            $_SESSION['username'] = null;
        }
        mysqli_close($conn);
    }
}

?>
