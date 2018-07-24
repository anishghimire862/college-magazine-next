<?php
    include './sidebar/sidebar.php';
//    include './connection/connection.php';
?>      
            <h4> MOST VIEWED ARTICLE </h4>
            <div class="card-columns">
                <?php
                    $mostviewed = "SELECT * FROM article ORDER BY views DESC LIMIT 1";
                    $result = $conn->query($mostviewed);
                    $row = $result->fetch_assoc();
                    $article_id = $row['article_id'];
                    $category = $row['category'];
                    $substring = substr($row['content'],0,103); 
                ?>
                <div class="card" style="height: 10em;">
                        <?php
                            echo "<a href='./$category.php?article_id=$article_id'>";
                        ?>

                        <h6 class="card-title m-0 p-2 title"><?php echo strip_tags($row['title']); ?></h6>  
                            <div class="card-body p-2">  
                                <p class="card-text"><?php echo strip_tags($substring) ."..."; ?></p>
                            </div>
                <?php    
                   echo "</a>";
                ?>       
                </div>
            </div>
            <div class="line"></div>            
            <h4>STORY</h4>
            <div class="card-columns">
            <?php
                $sql = "SELECT * FROM article WHERE CATEGORY='story' AND approved=1 ORDER BY article_id DESC LIMIT 3";
                $result = $conn->query($sql);
                if($result->num_rows>0) {
                    while($row = $result->fetch_assoc()) {
                    $substring = substr($row['content'],0,103); 
                    $article_id = $row['article_id'];    
            ?>
              <div class="card" style="height: 10em;">
            <?php      
                echo "<a href='./story.php?article_id=$article_id'>";  
            ?>            
                    <h6 class="card-title m-0 p-2 title"><?php echo strip_tags($row['title']); ?></h6>  
                    <div class="card-body p-2">  
                        <p class="card-text"><?php echo strip_tags($substring) ."..."; ?></p>
                    </div>
            <?php      
                echo "</a>"
            ?>        
              </div>
            <?php
                    }
                }
            ?>            
            </div>    
            <div class="line"></div>

            <h4>POEMS</h4>
            <div class="card-columns">
            <?php
                $sql = "SELECT * FROM article WHERE CATEGORY='poem' AND approved=1 ORDER BY article_id DESC LIMIT 3";
                $result = $conn->query($sql);
                if($result->num_rows>0) {
                    while($row = $result->fetch_assoc()) {
                    $substring = substr($row['content'],0,103);
                    $article_id = $row['article_id'];    
            ?>
            <div class="card" style="height: 10em;">
            <?php      
                echo "<a href='./poem.php?article_id=$article_id'>";  
            ?>    
                <h6 class="card-title  m-0 p-2 title"><?php echo strip_tags($row['title']); ?></h6>
                <div class="card-body p-2">
                  <p class="card-text"><?php echo strip_tags($substring) ."..."; ?></p>
                </div>
            <?php      
                echo "</a>"
            ?>    
              </div>
            <?php
                    }
                }
            ?>            
            </div>
            <div class="line"></div>
            
            <h4>OTHERS</h4>
            <div class="card-columns">
            <?php
                $sql = "SELECT * FROM article WHERE CATEGORY='others' AND approved=1 ORDER BY article_id DESC LIMIT 3";
                $result = $conn->query($sql);
                if($result->num_rows>0) {
                    while($row = $result->fetch_assoc()) {
                    $substring = substr($row['content'],0,103);
                    $article_id = $row['article_id'];    
            ?>
              <div class="card" style="height: 10em;">
            <?php      
                echo "<a href='./others.php?article_id=$article_id'>";  
            ?>      
                <h6 class="card-title m-0 p-2 title"><?php echo strip_tags($row['title']); ?></h6>
                <div class="card-body p-2">
                  <p class="card-text"><?php echo strip_tags($substring) ."..."; ?></p>
                </div>
            <?php      
                echo "</a>"
            ?>      
              </div>
            <?php
                    }
                }
            ?>            
            </div>
            

            <div class="line"></div>
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