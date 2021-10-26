<?php
    include('header-student.php');
?>
<!-- CSS cùng với sinh viên -->
    <div class="home">
        <h1>Education Support</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum neque aliquid similique error velit placeat vitae accusantium est nam magnam?</p>
        <a href="#" id="login-btn">
            <button class="btn btn-index">Get Started</button>
        </a>
    </div>
    <div class="login-form-container login">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="" method="POST">
            <h3>sign in</h3>
            <span>User name</span>
            <input type="email" name="" class="box" placeholder="Enter your email" id="">
            <span>Pass word</span>
            <input type="password" name="" class="box" placeholder="Enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" class="remember-me">
                <label for="remember-me">Remember-me</label>
            </div>
            <input type="submit" value="Sign in" class="btn btn-sign-in">
            <p>For get password ? <a href="#">Click Here</a></p>
            <p>Don't have an account ? <a href="sign-up.php">Create One</a></p>
        </form>
    </div>
<?php
    include('footer.php');
?>