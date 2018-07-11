<?php $username = '';
$displayName = '';
$password1 = '';
$password2 = '';
?>
<div id="content">
    <h4>Create your account</h4>
    <div class="account create">

        <?php echo validation_errors(); ?>
        <?php echo form_open('users/create'); ?>

        <dl>
            <dt>Username</dt>
            <dd><input type="text" name="username" value="<?php echo $username; ?>"</dd>
            <?php
            if($_SESSION['username_exists']){

                echo 'This username already exists. Please choose a new username.';
            }
            ?>
        </dl>
        <dl>
            <dt>Display Name</dt>
            <dd><input type="text" name="displayName" value="<?= $displayName ?>" </dd>
        </dl>
        <dl>
            <dt>Password</dt>
            <dd><input type="password" name="password" value="<?php echo $password1; ?>"</dd>
        </dl>
        <dl>
            <dt>Re-enter your password</dt>
            <dd><input type="password" name="password_reenter" value="<?php echo $password2; ?>"</dd>
            <?php
            if(!$_SESSION['reenter_valid']){

                echo 'Passwords did not match. Please re-enter passwords.';
            }
            ?>
        </dl>
        <div id="operations">
            <input type="submit" value="Create Account" />
        </div>
    </div>
</div>