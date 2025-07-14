<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
     <title> Add Course Record </title> 
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <!-- This is for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Roboto&display=swap" rel="stylesheet">
    <!-- font awesome 4 cdn -->
    <link rel="icon" href="Images/unikl_logo.png">

    <script>
        function my_fun(str) {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else{
            xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function(){
            if (this.readyState==4 && this.status==200) {
                document.getElementById('programme_id').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","course_helper.php?value="+str, true);
        xmlhttp.send();

        }

    </script>

</head>
<body>
    <section class="record-page">
        <nav>
            <a href="home_page.html"><img src="Images/unikl_logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i> <!-- close icon for small screen -->
                <ul>
                    <li><a href="home_page.html">Home</a></li>
                    <li><a href="record_page.html">Record</a></li>
                    <li><a href="transferring_page.php">Credit Transfer</a></li>
                    <li><a  href="logout.php">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i> <!-- menu icon for small screen -->
        </nav>

        <h1>~|> ADD COURSE <|~</h1>

    </section>

    <div class="container mt-5">
        <a href="record_page.html" class="btn btn-dark">Go Back </a>
        <a href="view_record.php" class="btn btn-info float-end">View Record </a>
        
        <form method="post" class="shadow p-3 mt-5 form-w" >

            <h3>Add Course</h3><hr>

            <div class="mb-1">
                <label class="form-label">INSTITUTE NAME :</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" required
            name ="SelectA" id="SelectA" onchange="my_fun(this.value);">  
                <option selected value="">-Select-</option>

                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_institute = @mysqli_query($con, "SELECT * FROM institute_dbs") or die 
                    (mysqli_error($con));
                    while($data_institute = mysqli_fetch_array($sql_institute)){
                echo '<option value="'.$data_institute['id'].'">
                '.$data_institute['institute_name'].' </option>';
                    }
                ?>
            </select>
    
            <div class="mb-1">
                <label class="form-label">PROGRAMME NAME :</label>
            
                <select class="form-select mb-3" name="programme_id" id="programme_id">
                </select>
            </div>

            <!--<div class="mb-1">
                <label class="form-label">INSTITUTE NAME :</label>
            </div>
            <select class="form-select mb-3"
                name="institute_name" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php /*
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_institute = @mysqli_query($con, "SELECT * FROM institute_dbs") or die 
                            (mysqli_error($con));
                    while($data_institute = mysqli_fetch_array($sql_institute)){
                        echo '<option value="'.$data_institute['id'].'">
                            '.$data_institute['institute_name'].' </option>';
                    } */
                ?>
            </select>

            <div class="mb-1">
                <label class="form-label">PROGRAMME NAME :</label>
            </div>
            <select class="form-select mb-3"
                name="programme_name" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php /*
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_programme = @mysqli_query($con, "SELECT * FROM programme_dbs") or die 
                            (mysqli_error($con));
                    while($data_programme = mysqli_fetch_array($sql_programme)){
                        echo '<option value="'.$data_programme['id'].'">
                            '.$data_programme['programme_name'].' </option>';
                    } */
                ?>
            </select>-->
            

            <div class="mb-3">
                <label class="form-label">COURSE CODE : </label>
                <input type="text" name="course_code" class="form-control" required>       
            </div>

            <div class="mb-3">
                <label class="form-label">COURSE NAME : </label>
                <input type="text" name="course_name" class="form-control" required>          
            </div>
            
            <div class="mb-3">
                <label class="form-label">CREDIT HOUR : </label>
                <input type="text" name="credit_hours" class="form-control"required>       
            </div>

            <a href="mapping_page.php" class="btn btn-secondary float-end"><b>></b></a>
            <a href="programme_page.php" class="btn btn-secondary float-start"><b><</b></a>

            <div class="text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
            <input type="reset" class="btn btn-primary" value="Reset"/>
            <input type="hidden" name="submitted" value="TRUE" />
            </div>

        </form>

<?php 

    if (isset($_POST['submitted'])) {

        require_once ('mysqli.php'); // Connect to the db.
        global $dbc;	
                
        $institute_name = ($_POST['SelectA']); 
        $programme_id = ($_POST['programme_id']);
        $course_code = ($_POST['course_code']);    
        $course_name = ($_POST['course_name']);   
        $credit_hours = ($_POST['credit_hours']);
                
        // Check for previous registration.
        $query = "SELECT id FROM course_dbs WHERE course_code='$course_code'";
        $result = @mysqli_query ($dbc,$query); // Run the query.
            if (@mysqli_num_rows($result) ==0) {

                // Make the query.
                $query = "INSERT INTO course_dbs 
                (uni_id, programme_id, course_code, course_name,credit_hours)
                VALUES
                ('$institute_name', '$programme_id', '$course_code','$course_name', '$credit_hours')";

                $result = @mysqli_query ($dbc,$query); // Run the query. // Run the query.
                if ($result) { // If it ran OK. == IF TRUE
                        
                            // Print a message.
                            echo '<h1 id="mainhead">Information </h1>
                            <p>have been successfully recorded </p><p><br /></p>';
                            exit();
                            
                } else { // If it did not run OK.
                            echo '<h1 id="mainhead">System Error</h1>
                            <p class="error"> could not be record due to a system error. We apologize for any inconvenience.</p>'; // Public message.
                            echo '<p>' . mysqli_error($dbc)  . '<br /><br />Query: ' . $query . '</p>'; // Debugging message.
                            exit();
                           
                }
                            
            } else { // Already registered.
                    echo '<h1 id="mainhead">Error!</h1>
                    <p class="error">The information has already recorded in the system.</p>';
            }
                
                mysqli_close($dbc); // Close the database connection.      
        }
    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!------ JavaScript to give function to icon in small screen ------>
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
    <?php

?>
</body>
</html>