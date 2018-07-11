<?php
    include_once 'notification.php';
?>
<div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

<!--
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
-->
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../">HOME</a>
                            </li>
                            <?php 
                                if(isset($_SESSION['loggedin'])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php">LOGOUT</a>
                            </li>
                            <?php 
                                } else {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button">LOGIN
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/new-college/login/student-login.php" class="dropdown-item">Student login</a></li>
                                    <div class="dropdown-divider"></div>        
                                  <li><a href="/new-college/login/teacher-login.php" class="dropdown-item">Teacher login</a></li>
                                    <div class="dropdown-divider"></div>    
                                  <li><a href="/new-college/login/admin-login.php" class="dropdown-item">Admin login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button">REGISTER
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="/new-college/registration/student-signup.php" class="dropdown-item">Student signup</a></li>
                                    <div class="dropdown-divider"></div>
                                  <li><a href="/new-college/registration/teacher-signup.php" class="dropdown-item">Teacher signup</a></li>
                                </ul>
                            </li>
                            <?php
                                }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../about-us.php">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../update-article/index.php">SUBMIT ARTICLES</a>
                            </li>
                            <?php
                                if(isset($_SESSION['loginType'])) {
                                    if($_SESSION['loginType'] == 'admin') {
                                        
                            ?>    
                                        <li class="nav-item">
                                            <a class="nav-link" href="./dashboard/">DASHBOARD</a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
<?php
    displayNotification();
?>