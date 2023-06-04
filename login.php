
<?php

session_start();

if (isset($_POST['Submit'])){
    $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = $_POST['Password'];

    if ($Username == 'elwin' && $Password == '123'){
        $_SESSION['Username'] = $Username;
        header('Location: header.php?page=slider');
    }
    else {
        echo 'incorrect login';
    }
    echo $Username;
    echo $Password;
}

?>
<link rel="stylesheet" type ="text/css" href="style.css">
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=30">Click</a>

    <div class="register-form">
        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3> Log in </h3>
            <input type="text" name ="Username" required placeholder="Enter your Username">
            <input type="password" name ="Password" required placeholder="Enter your Password">
            <input type="submit" value ="Submit" class ="register-button" name="Submit">
            <p> Don't have an account yet? <a href="header.php?page=register">Make one here</a></p>
        </form>
    </div>

<?php
    // setcookie('Username', $Username, time() + 86400 * 30);
    // if (isset($_COOKIE['Username'])){
    //     echo $_COOKIE['Username'];
    // }
?>