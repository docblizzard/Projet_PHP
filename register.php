<?php 

if (isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Password = md5($_POST['Password']);
    $Password2 = md5($_POST['Password2']);
    $select = " SELECT * FROM clients WHERE username = '$Username'";
    $result = mysqli_query($conn, $select);
    
    if (mysqli_num_rows($result) > 0) {
        $error[] = 'Username already exist ';
    }
    else {
        if ($Password != $Password2 ){
            $error[] = 'Password is not matching';
        }
        else {
            $insert = "INSERT INTO clients(username, password, email) VALUES ('$Username','$Password','$Email')";
            mysqli_query($conn, $insert);
            header('Location: header.php?page=login');
        }
    }    
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register a new account</title>
  <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>
    <div class="register-form">
        <form action ="#" method="post">
            <h3> Register </h3>
            <?php 
                if (isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            ?>
            <input type="text" name ="Username" required placeholder="Enter your Username">
            <input type="text" name ="Email" required placeholder="Enter your email">
            <input type="password" name ="Password" required placeholder="Enter your Password">
            <input type="password" name ="Password2" required placeholder="Confirm your Password">
            <input type="submit" name ="submit" value ="Register now" class ="register-button">
            <p> Already have an account? <a href="header.php?page=login">Log in here</a></p>
        </form>
    </div>

</body>
</html>