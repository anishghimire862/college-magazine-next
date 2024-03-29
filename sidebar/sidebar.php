<?php
    session_start();    
    include './connection/connection.php';
    include_once './includes/notification.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KCMIT Magazine</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./style/sidebar.css">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <?php
                    if(isset($_SESSION['loggedin'])){
                        $loginType = $_SESSION['loginType'];
                        $username = $_SESSION['loggedin'];
                        $sql = "SELECT * FROM $loginType WHERE username = '$username'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        
//                        if(isset($row['approved'])) {
//                            if($row['approved'] == 1) {
//                                echo "<h6> Welcome " .$username ." </h6>" ."<a href='#'>|<b>A</b>|</a>";
//                            }
//                            else {
//                                echo "<h6'>Welcome " .$username ." </h6>" ."<a href='#'>|<b>UA</b>|</a>";
//                            }
//                        }
//                    } else {
//                        echo "<h6>Welcome Guest  </h6>";
//                    } 
                        if(isset($row['approved'])) {
                            if($row['approved'] == 1) {
                                if($loginType == 'teacher' || $loginType == 'admin') {
                                    echo  "<h6> Welcome " .strip_tags($username) ."<i class='material-icons' style='font-size: 15px;'>verified_user</i> </h6>";
                                    
                                } else {
                                    echo "<h6> Welcome " .strip_tags($username) ."<a href='#'>|<b>A</b>|</a></h6>";
                                }
                            } else if($row['approved'] == 0) {
                                echo "<h6'>Welcome " .strip_tags($username) ." </h6> " ."<a href='#'>|<b>UA</b>|</a>";
                            }
                        }
                    } else {
                        echo "<h6>Welcome Guest  </h6>";
                    }
                
                ?>        
            </div>

            <ul class="list-unstyled components">
                <p>Articles</p>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">STORY</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <?php    
                            $sql = "SELECT * FROM article WHERE category = 'story' AND approved = 1 ORDER BY article_id DESC";
                            $result = $conn->query($sql);

                            if($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $article_id = $row['article_id'];
                                    echo "<li>";    
                                    echo "<a href='story.php?article_id=$article_id'>" .strip_tags($title) ."</a>";        
                                }
                                echo "</li>";    
                            } else {
                                echo "No results..";
                            }
                        ?>    
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">POEMS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <?php    
                            $sql = "SELECT * FROM article WHERE category = 'poem' AND approved = 1 ORDER BY article_id DESC";
                            $result = $conn->query($sql);

                            if($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $article_id = $row['article_id'];
                                    echo "<li>";    
                                    echo "<a href='poem.php?article_id=$article_id'>" .strip_tags($title) ."</a>";        
                                }
                                echo "</li>";    
                            } else {
                                echo "No results..";
                            }
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="#pageOtherSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">OTHERS</a>
                    <ul class="collapse list-unstyled" id="pageOtherSubmenu">
                        <?php    
                            $sql = "SELECT * FROM article WHERE category = 'others' AND approved = 1 ORDER BY article_id DESC";
                            $result = $conn->query($sql);

                            if($result->num_rows>0) {
                                while($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $article_id = $row['article_id'];
                                    echo "<li>";    
                                    echo "<a href='others.php?article_id=$article_id'>" .strip_tags($title) ."</a>";        
                                }
                                echo "</li>";    
                            } else {
                                echo "No results..";
                            }
                        ?>
                    </ul>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <?php
                                if(isset($_SESSION['loggedin'])) {
                                    echo '<li class="nav-item">
                                            <a class="nav-link" href="logout.php">LOGOUT</a>
                                    </li>';
                                } else {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button">LOGIN
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="./login/student-login.php" class="dropdown-item">Student login</a></li>
                                    <div class="dropdown-divider"></div>        
                                  <li><a href="./login/teacher-login.php" class="dropdown-item">Teacher login</a></li>
                                    <div class="dropdown-divider"></div>    
                                  <li><a href="./login/admin-login.php" class="dropdown-item">Admin login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button">REGISTER
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="./registration/student-signup.php" class="dropdown-item">Student signup</a></li>
                                    <div class="dropdown-divider"></div>
                                  <li><a href="./registration/teacher-signup.php" class="dropdown-item">Teacher signup</a></li>
                                </ul>
                            </li>
                            <?php
                                }
                            ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about-us.php">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./update-article/index.php">SUBMIT ARTICLES</a>
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




<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
-->
