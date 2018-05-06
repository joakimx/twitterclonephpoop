<?php
if (isset($_POST['login']) && !empty($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($_POST['email']) || !empty($_POST['password'])) {
        $email = $getFromU->checkInput($email);
        $password = $getFromU->checkInput($password);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Invalid Email";
        } else {
            if($getFromU->login($email, $password) === false) {
                $error = "The Email or Password is incorrect!";
            }
        }

    } else {
        $error = "Please enter Username and Password";
    }
}
?>

<div class="login-div">
    <form method="POST">
        <ul>
            <li>
                <input type="text" name="email" placeholder="Please Enter Email Address" />
            </li>
            <li>
                <input type="password" name="password" placeholder="Enter Password" />
                <input type="submit" name="login" value="Log in" />
            </li>
            <li>
                <input type="checkbox" value="Remember Me" />
            </li>
        </ul>
            <?php
            if(isset($error)){
                echo '<li class="error-li">
                       <div class="span-fp-error">' . $error . '</div> </li>';
            }
            ?>
    </form>
</div>
