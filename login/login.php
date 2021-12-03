<?php
    session_start();
    include "koneksi.php";

?>

<!Doctype html>
<html>
<head>
    <title>People Care PVCS</title>
</head>
<center>
<body>
    <form  method="post">
        <label>User Name: </label>
        <input type="text" name="fusername"><br>
        <label>Password: </label>
        <input type="password" name="fpassword"><br>
        <button type="submit"name="fmasuk">Login</button>
    </form>
    <?php
        if (isset($_POST['fmasuk'])){
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi, "SELECT * FROM tab_login WHERE username = '$username AND password = md5('$password') ");
            $check = mysqli_num_rows($qry);
            if($cek==1){
                $_SESSION['userweb']=$username;
                header("location:admin.php");
                exit;
            }
            else{
                echo"Sorry user name and password is wrong";
            }
        }
           
    ?>
</body>
</center>
</html>
