<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Edit Article</title>

     <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style/sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body style="background-color: #fafafa;">
<div id="content">
<?php
    include '../connection/connection.php';
    include '../includes/header.php';
    $id = $_GET['article_id'];
    $sql = "SELECT * FROM article WHERE article_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
    <div class="container">
               <form class="form-horizontal" role="form" method="post" action="./edit-script.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h5>Edit Article</h5> <?php echo $row['title'];?>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <label class="sr-only" for="title">Title</label>
                            <input type="text" class="form-control" id="title"
                                   placeholder="Title" name="title" value="<?php echo $row['title']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
<!--                             error message -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content of the article</label>
                        <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Content" required><?php echo $row['content']; ?></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category</label>
                        <?php
                            if($row['category'] == 'poem') {
                        ?>
                        <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                            <option style="display:none;" disabled="disabled" selected value=""> </option>
                            <option value="poem" selected>Poem</option>
                            <option value="story">Story</option>
                            <option value="others">Others</option>
                        </select>
                        <?php
                            } else if($row['category'] == 'story') {
                        ?>
                        <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                            <option style="display:none;" disabled="disabled" selected value=""> </option>
                            <option value="poem">Poem</option>
                            <option value="story" selected>Story</option>
                            <option value="others">Others</option>
                        </select>
                        <?php
                            } else {
                        ?>
                        <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                            <option style="display:none;" disabled="disabled" selected value=""> </option>
                            <option value="poem">Poem</option>
                            <option value="story">Story</option>
                            <option value="others" selected>Others</option>
                        </select>
                        <?php
                            }
                        ?>
                    </div>
                        
                </div>    
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="article_id" />       
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
    </div>