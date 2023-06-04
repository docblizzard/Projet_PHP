
<?php

session_start();

if (isset($_POST['Submit'])){
    $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = $_POST['Password'];
    $select = " SELECT * FROM clients WHERE username = '$Username' AND password ='$Password' ";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0){
        header('Location: header.php?page=slider');
    }
}

?>
<link rel="stylesheet" type ="text/css" href="style.css">
    <div class="register-form">
        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3> Log in </h3>
            <input type="text" name ="Username" required placeholder="Enter your Username">
            <input type="password" name ="Password" required placeholder="Enter your Password">
            <input type="submit" name="Submit" value ="Submit" class ="register-button" >
            <p> Don't have an account yet? <a href="header.php?page=register">Make one here</a></p>
        </form>
    </div>
