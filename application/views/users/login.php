<?= $username = '';
$password = '';
?>
<div id="content" align="center">
    <h4>Please enter the admin username and password.</h4>

    <div class="login">

        <?php echo validation_errors(); ?>
        <?php echo form_open('users/login'); ?>

        <dl>
            <dt>Username</dt>
            <dd><input type="text" name="username" value="<?php echo $username; ?>"</dd>
        </dl>
        <dl>
            <dt>Password</dt>
            <dd><input type="password" name="password" value="<?php echo $password; ?>"</dd>
        </dl>
        <div id="operations">
            <input type="submit" value="Log in" />
        </div>
    </div>
    <?php
    if(isset($_SESSION['login'])){
        if(! $_SESSION['login']) {
            echo 'Incorrect username or password';
            session_unset();
        }
    }
    ?>
    <br />
    <br />
    <a href="<?php echo site_url('users/create')?>"> Create an account</a>
</div>