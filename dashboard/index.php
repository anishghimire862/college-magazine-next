<?php
    session_start();
    include '../connection/connection.php';
    if(isset($_SESSION['loggedin']) && isset($_SESSION['loginType'])) {
        if($_SESSION['loginType'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Admin Dashboard</title>

     <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../style/sidebar.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body style="background-color: #fafafa;">
<div id="content">
    <?php
        include '../includes/header.php';        
    ?>
        <div class="container">
            <h5> The following student need approval. </h5> 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Name</th>
                  <th scope="col">Batch</th>
                  <th scope="col">Faculty</th>
                    <th scope="col">Approve</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT * FROM student WHERE approved = 0";
                $result = $conn->query($sql);
                $sn = 0;
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $sn++;
                        $username = $row['username'];
                        $name = $row['name'];
                        $batch = $row['enrolled_on'];
                        $faculty = $row['faculty'];    
               ?>      
                <tr>
                  <th scope="row"> <?php echo $sn; ?> </th>
                  <?php echo "<td> $username </td>"; ?>
                  <?php echo "<td> $name </td>"; ?>
                  <?php echo "<td> $batch </td>"; ?>
                  <?php echo "<td> $faculty </td>"; ?>
                  <?php echo "<td> <a href='../approval/student-approval.php?username=$username'> Approve </td> </a>"; ?>        
                </tr>
            <?php
                    } 
                } else {
                    echo "<div class='bg-info'>No request requiring approval </div>";
                }
            ?>      
              </tbody>
            </table>
                        <div class="line"></div>

            <h5> The following teacher need approval. </h5> 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Name</th>
                  <th scope="col">Approve</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT * FROM teacher WHERE approved = 0";
                $result = $conn->query($sql);
                $sn = 0;
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $sn++;
                        $username = $row['username'];
                        $name = $row['name'];    
               ?>      
                <tr>
                  <th scope="row"> <?php echo $sn; ?> </th>
                  <?php echo "<td> $username </td>"; ?>
                  <?php echo "<td> $name </td>"; ?>
                  <?php echo "<td> <a href='../approval/teacher-approval.php?username=$username'> Approve </td> </a>"; ?>        
                </tr>
            <?php
                    } 
                } else {
                    echo "<div class='bg-info'>No request requiring approval</div>";
                }
            ?>      
              </tbody>
            </table>
                        <div class="line"></div>
            <h5> The following post need approval. </h5> 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Article ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Category</th>
                  <th scope="col">Posted On</th>
                  <th scope="col">Posted By</th>
                  <th scope="col">Content</th>
                  <th scope="col">Approve</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT * FROM article WHERE approved = 0";
                $result = $conn->query($sql);
                $sn = 0;
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $sn++;
                        $article_id = $row['article_id'];
                        $title = $row['title'];    
                        $category = $row['category'];    
                        $posted_on = $row['posted_on'];    
                        $posted_by = $row['posted_by'];   
                        $content = $row['content'];
                        $substring = substr($content,0,20);
               ?>      
                <tr>
                  <th scope="row"> <?php echo $sn; ?> </th>
                  <?php echo "<td> $article_id </td>"; ?>
                  <?php echo "<td> $title </td>"; ?>
                  <?php echo "<td> $category </td>"; ?>
                  <?php echo "<td> $posted_on </td>"; ?>
                  <?php echo "<td> $posted_by </td>"; ?>
                  <?php echo "<td> <a href='#'> $substring ... </a></td>"; ?>
                  <?php echo "<td> <a href='../approval/post-approval.php?article_id=$article_id'> Approve </td> </a>"; ?>        
                </tr>
            <?php
                    } 
                } else {
                    echo "No request requiring approval";
                }
            ?>      
              </tbody>
            </table>
                        <div class="line"></div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
        } else {
        header('location: ../index.php');
    }
?>