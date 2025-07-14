<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> View Record </title> 
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

        <h1>~|> VIEW RECORD <|~</h1>

    </section>

    <?php  
        // Connect to The Database
        require_once ('mysqli.php'); 
        global $dbc;
    ?>

<!-------------------------- VIEW INSTITUTE -------------------------->
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
 <div class="card">
<div class="card-body">
<div class="card-header">
    <h4>Institute Details
    <a href="institute_page.php" class="btn btn-primary float-end">Add Record</a>
    </h4>
</div>

    <?php
        $query = "SELECT CONCAT(id) as id,
                (institute_name) as institute_name,
                    (institute_type) as institute_type
        FROM institute_dbs";

        $institute_result = @mysqli_query ($dbc,$query);
    ?>
            <table class="table table-bordered table-striped">  
                    <tr>  
                        <th>NO</th>
                        <th>Institute</th>
                        <th>Institute Type</th> 
                    </tr>
                    <?php  
                        if(mysqli_num_rows($institute_result) > 0) {  
                            while ($row = mysqli_fetch_array($institute_result, MYSQLI_ASSOC)) {
                    ?>  
                            <tr>  
                                <td><?php echo $row["id"]; ?></td>  
                                <td><?php echo $row["institute_name"]; ?></td> 
                                <td><?php echo $row["institute_type"]; ?></td>
                                
                            </tr>  
                    <?php  
                            }  
                        }  
                    ?>  
            </table>

</div>
</div>
</div>
</div>
</div>
<!-------------------------- VIEW PROGRAMME -------------------------->
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
 <div class="card">
<div class="card-body">
<div class="card-header">
    <h4>Programme Details
    <a href="programme_page.php" class="btn btn-primary float-end">Add Record</a>
    </h4>
</div>  

    <?php

        $query = "SELECT * 
            FROM institute_dbs 
                INNER JOIN programme_dbs 
                    ON institute_dbs.id = programme_dbs.uni_id";

        $programme_result = @mysqli_query ($dbc,$query);
    ?>
            <table class="table table-bordered table-striped">  
                    <tr>  
                        <th>No</th>
                        <th>Programme</th>
                        <th>Institute</th>
                    </tr>
                    <?php  
                        if(mysqli_num_rows($programme_result) > 0) {  
                            while ($row = mysqli_fetch_array($programme_result, MYSQLI_ASSOC)) {
                    ?>  
                            <tr>  
                                <td><?php echo $row["id"]; ?></td>  
                                <td><?php echo $row["programme_name"]; ?></td> 
                                <td><?php echo $row["institute_name"]; ?></td>  
                            </tr>  
                    <?php  
                            }  
                        }  
                    ?>  
            </table>

</div>
</div>
</div>
</div>
</div>
<!-------------------------- VIEW COURSE -------------------------->
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body"> 
<div class="card-header">
    <h4>Course Details
    <a href="course_page.php" class="btn btn-primary float-end">Add Record</a>
    </h4>
</div>


    <?php

        $query = "SELECT * 
        FROM ((course_dbs
            INNER JOIN programme_dbs p
                    ON course_dbs.programme_id = p.id)
            INNER JOIN institute_dbs i
                    ON course_dbs.uni_id = i.id)
        ";

        $course_result = @mysqli_query ($dbc,$query);
    ?>
            <table class="table table-bordered table-striped">  
                    <tr>  
                        <th>No</th>
                        <th>Institute</th>
                        <th>Programme</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Hours</th>

                        
                    </tr>
                    <?php  
                        if(mysqli_num_rows($course_result) > 0) {  
                            while ($row = mysqli_fetch_array($course_result, MYSQLI_ASSOC)) {
                    ?>  
                            <tr>  
                                <td><?php echo $row["id"]; ?></td>  
                                <td><?php echo $row["institute_name"]; ?></td> 
                                <td><?php echo $row["programme_name"]; ?></td>  
                                <td><?php echo $row["course_code"]; ?></td> 
                                <td><?php echo $row["course_name"]; ?></td>
                                <td><?php echo $row["credit_hours"]; ?></td>  
                            </tr>  
                    <?php  
                            }  
                        }  
                    ?>  
            </table>


</div>
</div>
</div>
</div>
</div>
                    
<?php
include ('./footer.html');
?>

</body>
</html>