<?php
    include './sidebar/sidebar.php';
//    include './connection/connection.php';
?>      
    <p class="text-justify font-weight-light" style="font-size: 0.875em; color: #222222; margin: 0.5em 0; line-height: 28px;">
        As the world is getting advanced with new innovations & technological inventions, we are still wasting so much of investment and effort on paper. This project is a small initiation to make the world more digitized. Why waste so much of wealth & wait for almost a year for things that can be done right now? This Digital Paper facilitates its user to read & add contents immediately. You can immediately browse the contents, upload your articles, whenever & wherever you are. 
    </p> 
    <figure>
        <img src="https://anishghimire862.github.io/college-magazine/images/devlopersImg.jpg" alt="Developers Image" class="img-fluid" usemap="#developers" />
         <figcaption>In picture: Saroj, Anish, Dipak from left to right.</figcaption>
    </figure>    
    <p class="text-justify font-weight-light" style="font-size: 0.875em; color: #222222; margin: 0.5em 0; line-height: 28px;">
        This Digital Paper is prepared as the project work of Web Tech-I and Web Tech-II by Anish Ghimire, Dipak Raj Badu and Saroj Kafle. We remain grateful to our lecturer Mr. Indra PC for providing us this golden opportunity and for all the support and guidance throughout the completion of the project.
    </p>    
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