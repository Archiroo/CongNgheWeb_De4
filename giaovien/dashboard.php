<?php
    include('header-teacher.php');
?>
<input type="checkbox" id = "sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <i class="fas fa-user-graduate"></i>
            <span>Education</span>
        </h3>
        <i class="fas fa-bars"></i>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="far fa-address-book"></i>
                    <span>Subject</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-book"></i>
                    <span>Homework</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-user-friends"></i>
                    <span>Team</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-folder"></i>
                    <span>Project</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="far fa-comments"></i>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-cog"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php
    include('../sinhvien/footer.php')
?>