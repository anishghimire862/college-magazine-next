<?php
    
    include './connection/connection.php';
    include './sidebar/sidebar.php';
    include './includes/retrive-articles.php';
?>   
     <div class="card p-1 pb-0">
         <div style="background-color: #314D68; letter-spacing: 1px;">
            <p class="text-center text-capitalize font-weight-bold p-1 pb-0 h1" style="color: #fff;"><?php echo strip_tags($title); ?></p>
         </div>
         <?php
            if(isset($_SESSION['loggedin'])) {
                if($_SESSION['loggedin'] == $username || $_SESSION['loginType'] == 'admin') {
         ?>
         <div class="text-right" style="color: blue; text-decoration: underline;">
            <?php echo "<a href='./edit/index.php?article_id=$id'> Edit </a>";?>
            <?php echo "<a href='./edit/delete-script.php?article_id=$id' class='pl-2 pr-1'> Delete</a>"; ?>
         </div>
         <?php 
                }
            }
         ?>
        <div class="pl-md-5 pl-sm-1 pr-md-5 pr-sm-1">
            <p class="text-justify font-weight-light" style="font-size: 0.875em; color: #222222; margin: 0.5em 0; line-height: 28px;"><?php echo nl2br(strip_tags($content)); ?></p> 
            <br/>
            <span class="text-left font-italic" style="font-size: 13px; color: #9f9b9b;">Posted on: <?php echo $posted_on; ?></span>
        </div>
        <div>
            <figure class="text-right">
                <img src="<?php echo $image; ?>" alt="Profile Picture" class="img-responsive" width="100" height="100">
                    <figcaption> <?php 
                                    if($loginType=='teacher'){
                                        echo $name ."<i class='material-icons' style='font-size: 15px;'>verified_user</i>";
                                    } else if($loginType=='student') {
                                        echo $name;
                                    } else {
                                        echo $name ."<i class='material-icons' style='font-size: 15px;'>verified_user</i>";
                                    }
                                    
                                 ?> 
                    </figcaption>
            </figure>
            <?php
                if(isset($faculty) && isset($enrolledOn)) {
            ?>
            <p class="text-uppercase text-right pr-2" style="color: #000;"><?php echo $faculty ." " .$enrolledOn; ?></p>    
        </div> 
         <?php 
                }
         ?>
     </div>
    <div>
        <p> This article has been read <?php echo $views; ?> times. </p>
    </div>
    <div class="line"> </div>
    <?php
        $aid = $_GET['article_id'];
        if(isset($_SESSION['loggedin']) && isset($_SESSION['loginType'])) {
            $loggedUser = $_SESSION['loggedin'];
            $loggedType = $_SESSION['loginType'];
        
        $sql = "SELECT * FROM $loggedType WHERE username = '$loggedUser'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
        
    ?> 
    <?php 
        if(isset($_SESSION['loggedin'])  && $row['approved'] == 1) {
            
    ?>        
    <div>
        <form action="./includes/post-comment.php" method="post">
            <div class="form-group">
                <label for="userComment">Write your comment here..</label>
                <textarea class="form-control" id="userComment" rows="2" name="comment"></textarea>
                <button type="submit" class="btn btn-success mt-1">SUBMIT</button>
            </div>
            <input type="hidden" value="<?php echo $aid; ?>" name="aid" />
        </form>
    </div>
    <?php
        } else if($row['approved'] == 0){
            echo "<div class='alert alert-warning' role='alert'>Please wait untill you are verified to post a comment.</div>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>Please login or register to post a comment.</div>";
        }
    ?>                
        <?php
            $sql = "SELECT * FROM comment WHERE article_id = $aid ORDER BY comment_id DESC";
            $result = $conn->query($sql);
            
            if($result->num_rows>0) {
                while($row = $result->fetch_assoc()) {
        ?>
            <div class="row mt-1">
                <figure class="col-md-2">
                    <img src="<?php echo $row['photo']; ?>" alt="Profile Picture" class="img-fluid pl-1 rounded-circle" style="width: 80px; height: 80px;">
                    <figcaption class="pl-md-2 pl-1"> <?php echo $row['commented_by']; ?> </figcaption>
                </figure>
                <div class="col-md-10">
                    <p class="p-2 card"> <?php echo strip_tags($row['content']); ?> </p>
                </div>    
            </div>     
    <?php
                }
            } else {
                echo "No comments to be displayed.";
            }
    ?>        
     </div>
    </div>
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