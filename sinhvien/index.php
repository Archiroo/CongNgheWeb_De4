<?php
include('./header-student.php');
?>
<div class="d-flex flex-wrap">
    <input type="checkbox" id="list">
    <div class="menu">
        <div class="menu-header">
            <h3 class="brand">
                <span class="fas fa-link"></span>
                <span>Education</span>
            </h3>
            <label for="list"><i class="fas fa-bars"></i></label>
        </div>
        <div class="menu-main">
            <ul>
                <li>
                    <a href="./index.php">
                        <span class="fas fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-book"></span>
                        <span>Homework</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-file-invoice"></span>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-table"></span>
                        <span>Transcript</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-users"></span>
                        <span>Imformation</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-content container">
        <div class="header row">
            <div class="col-6 box1 d-flex flex-wrap">
                <i class="fas fa-search icon-search"></i>
                <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success button-search" type="submit">Search</button>
            </div>
            <div class="col-6 box2">
                <span><i class="fas fa-bell"></i></span>
                <span><i class="fas fa-comment"></i></span>
                <span><a href=""><img src="../image/user.jpg" class="user-imge" alt=""></a></span>
            </div>
        </div>
        <div class="main">
            <div class="subject">
                <div class="CN-Web">
                    <a href="" class="subject-click">
                        <img src="../image/cnweb.jpg" alt="">
                        <h4>TLU-CSE</h4>
                        <h4>Công Nghệ Web(Backend)</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('./footer.php');
    ?>