
<?php

if (isset($_POST['Submit'])) {
    $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = md5($_POST['Password']);

    $select = "SELECT * FROM clients WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $select);
    mysqli_stmt_bind_param($stmt, 'ss', $Username, $Password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['Username'] = $Username;
        $_SESSION['isLoggedIn'] = false;

        header('Location: header.php?page=slider');
        exit();
    } else {
        echo 'Incorrect login';
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
