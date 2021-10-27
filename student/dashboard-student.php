<?php
include('header-student.php');
?>
<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span class="fas fa-user-graduate"></span>
            <span>Education</span>
        </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
        <!--nút 3 ghạch-->
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="">
                    <span class="ti-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="fas fa-scroll"></span>
                    <span>Subject</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="far fa-comments"></span>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="ti-settings"></span>
                    <span>Acount</span>
                </a>
            </li>
        </ul>
    </div>
</div>
    
<?php
include('footer.php');
?>