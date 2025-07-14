<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> Store Mapping Records </title> 
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
        //previous
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
            xmlhttp.open("GET","mapping_helper.php?value="+str, true);
            xmlhttp.send();

        }

//1
        function my_fun1(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('courseResult').innerHTML = this.responseText;
                    // document.getElementById('credit_hours_id').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","mapping_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

        //current
        function my_fun_c(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('programme_id_c').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","mapping_helper.php?value="+str, true);
            xmlhttp.send();

        }

//2
        function my_fun2(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('courseResult_c').innerHTML = this.responseText;
                    //document.getElementById('credit_hours_id_c').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","mapping_helper.php?courseCode_c="+str, true);
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

        <h1>~|> STORE MAPPING RECORDS <|~</h1>

    </section>

    <div class="container mt-5">
        <a href="record_page.html" class="btn btn-dark">Go Back </a>
        <a href="view_mapping.php" class="btn btn-info float-end">View Record </a>
        
        <form method="post" class="shadow p-3 mt-5 form-w" >

            <h3>Previous</h3><hr>

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



<!-------------------------------- 1 -------------------------------->
            <div class="mb-1">
                <label class="form-label">COURSE CODE :</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" required
            name ="SelectA1" id="SelectA1" onchange="my_fun1(this.value);">  
                <option selected value="">-Select-</option>

                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_code = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                    (mysqli_error($con));
                    while($data_course_code = mysqli_fetch_array($sql_course_code)){
                echo '<option value="'.$data_course_code['course_code'].'">
                '.$data_course_code['course_code'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-3" id="courseResult">
            </div>
    
            <!-- <div class="mb-1">
                <label class="form-label">COURSE NAME :</label>
            
                <select class="form-select mb-3" name="course_name_id" id="course_name_id">
                </select>
            </div>

            <div class="mb-1">
                <label class="form-label">CREDIT HOURS :</label>
            
                <select class="form-select mb-3" name="credit_hours_id" id="credit_hours_id">
                </select>
            </div> -->

            <!--<div class="mb-1">
                <label class="form-label">COURSE CODE :</label>
            </div>
            <select class="form-select mb-3"
                name="course_code" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_code = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_course_code = mysqli_fetch_array($sql_course_code)){
                        echo '<option value="'.$data_course_code['id'].'">
                            '.$data_course_code['course_code'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-1">
                <label class="form-label">COURSE NAME :</label>
            </div>
            <select class="form-select mb-3"
                name="course_name" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_name = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_course_name = mysqli_fetch_array($sql_course_name)){
                        echo '<option value="'.$data_course_name['id'].'">
                            '.$data_course_name['course_name'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-1">
                <label class="form-label">CREDIT HOURS :</label>
            </div>
            <select class="form-select mb-3"
                name="credit_hours" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_credit_hours = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_credit_hours = mysqli_fetch_array($sql_credit_hours)){
                        echo '<option value="'.$data_credit_hours['id'].'">
                            '.$data_credit_hours['credit_hours'].' </option>';
                    }
                ?>
            </select>-->



<!-------------------------------- Current -------------------------------->
            <h3>Current</h3><hr>

            <div class="mb-1">
                <label class="form-label">INSTITUTE NAME :</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" required
            name ="SelectA_c" id="SelectA_c" onchange="my_fun_c(this.value);">  
                <option selected value="">-Select-</option>

                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_institute_c = @mysqli_query($con, "SELECT * FROM institute_dbs") or die 
                    (mysqli_error($con));
                    while($data_institute_c = mysqli_fetch_array($sql_institute_c)){
                echo '<option value="'.$data_institute_c['id'].'">
                '.$data_institute_c['institute_name'].' </option>';
                    }
                ?>
            </select>
    
            <div class="mb-1">
                <label class="form-label">PROGRAMME NAME :</label>
            
                <select class="form-select mb-3" name="programme_id_c" id="programme_id_c">
                </select>
            </div>


<!-------------------------------- 2 -------------------------------->
            <div class="mb-1">
                <label class="form-label">COURSE CODE :</label>
            </div>
            <select class="form-select mb-3" aria-label="Default select example" required
            name ="SelectA2" id="SelectA2" onchange="my_fun2(this.value);">  
                <option selected value="">-Select-</option>

                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_code_c = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                    (mysqli_error($con));
                    while($data_course_code_c = mysqli_fetch_array($sql_course_code_c)){
                echo '<option value="'.$data_course_code_c['course_code'].'">
                '.$data_course_code_c['course_code'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-3" id="courseResult_c">
            </div>


            <!--<div class="mb-1">
                <label class="form-label">COURSE CODE :</label>
            </div>
            <select class="form-select mb-3"
                name="course_code_c" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_code_c = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_course_code_c = mysqli_fetch_array($sql_course_code_c)){
                        echo '<option value="'.$data_course_code_c['id'].'">
                            '.$data_course_code_c['course_code'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-1">
                <label class="form-label">COURSE NAME :</label>
            </div>
            <select class="form-select mb-3"
                name="course_name_c" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_course_name_c = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_course_name_c = mysqli_fetch_array($sql_course_name_c)){
                        echo '<option value="'.$data_course_name_c['id'].'">
                            '.$data_course_name_c['course_name'].' </option>';
                    }
                ?>
            </select>

            <div class="mb-1">
                <label class="form-label">CREDIT HOURS :</label>
            </div>
            <select class="form-select mb-3"
                name="credit_hours_c" 
                    aria-label="Default select example"
                        required>

                    <option selected value="">-Select-</option>
                <?php 
                    $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                    $sql_credit_hours_c = @mysqli_query($con, "SELECT * FROM course_dbs") or die 
                            (mysqli_error($con));
                    while($data_credit_hours_c = mysqli_fetch_array($sql_credit_hours_c)){
                        echo '<option value="'.$data_credit_hours_c['id'].'">
                            '.$data_credit_hours_c['credit_hours'].' </option>';
                    }
                ?>
            </select>-->

            <a href="course_page.php" class="btn btn-secondary float-start"> <b> < </b> </a>

            <div class="text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
            <input type="reset" class="btn btn-primary" value="Reset"/>
            <input type="hidden" name="submitted" value="TRUE" />
            </div>
        
        </form>

<?php 

    if (isset($_POST['submitted'])) {

        require ('mysqli.php'); // Connect to the db.
        global $dbc;

        /*------ Current ------*/
        $institute_name = ($_POST['SelectA']); 
        $programme_id = ($_POST['programme_id']);
        $course_code = ($_POST['SelectA1']);    
        $course_name = ($_POST['course_name_id']);   
        $credit_hours = ($_POST['credit_hours_id']);

        /*------ Previous ------*/
        $institute_name_c = ($_POST['SelectA_c']); 
        $programme_id_c = ($_POST['programme_id_c']);
        $course_code_c = ($_POST['SelectA2']);    
        $course_name_c = ($_POST['course_name_id_c']);   
        $credit_hours_c = ($_POST['credit_hours_id_c']);
                
        // Check for previous registration.
        $query = "SELECT id FROM mapping_dbs WHERE course_code='$course_code'";
        $result = @mysqli_query ($dbc,$query); // Run the query.
        if (@mysqli_num_rows($result) ==0) {



        // Make the query.
        $query = "INSERT INTO mapping_dbs
            (uni_id, programme_id, course_code, course_name, credit_hours,
                uni_id_c, programme_id_c, course_code_c, course_name_c, credit_hours_c)
            VALUES 
            ('$institute_name', '$programme_id', '$course_code','$course_name', '$credit_hours',
                '$institute_name_c', '$programme_id_c', '$course_code_c','$course_name_c', '$credit_hours_c')";

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
    <?php
include ('./footer.html');
?>
</body>
</html>