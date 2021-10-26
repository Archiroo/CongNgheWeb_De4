<?php
include('header-student.php');
?>
<div class="login-form-container">
    <form action="" method="POST">
        <h3>sign up</h3>
        <span>User name</span>
        <input type="text" name="username" class="box" placeholder="Enter your username">
        <span>Email</span>
        <input type="email" name="useremail" class="box" placeholder="Enter your email">
        <span>Pass word</span>
        <input type="password" name="userpass1" class="box" placeholder="Enter your password">
        <span>Confirm pass word</span>
        <input type="password" name="userpass2" class="box" placeholder="Confirm your password">
        <div class="sign-up">
            <a href="index.php" class="btn btn-canel btn-sign-up">Cancel</a>
            <input type="submit" value="Create" class="btn btn-sign-up">
        </div>
    </form>
</div>

<?php
include('footer.php');
?>