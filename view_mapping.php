<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> View Mapping </title>
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
                    <li><a href="logout.php">Log Out</a></li>
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

<!-------------------------- VIEW MAPPING -------------------------->
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
 <div class="card">
<div class="card-body">
<div class="card-header">
    <h4>Mapping Details
    <a href="mapping_page.php" class="btn btn-primary float-end">Add Record</a>
    </h4>
</div>    


    <?php
        
        // $int1 = "SELECT * 
        // FROM (((((mapping_dbs
        //     INNER JOIN institute_dbs i
        //         ON mapping_dbs.uni_id = i.id)   
        //     INNER JOIN programme_dbs p
        //         ON mapping_dbs.programme_id = p.id)
        //     INNER JOIN course_dbs c
        //         ON mapping_dbs.course_code = c.id)
        //     INNER JOIN course_dbs cc
        //     ON mapping_dbs.course_name = cc.id)
        //     INNER JOIN course_dbs ccc
        //     ON mapping_dbs.credit_hours = ccc.id)
        // ";
        // $int1_result = @mysqli_query ($dbc,$int1);

        // $int2 = "SELECT * 
        // FROM (((((mapping_dbs
        //     INNER JOIN institute_dbs i
        //         ON mapping_dbs.uni_id_c = i.id)   
        //     INNER JOIN programme_dbs p
        //         ON mapping_dbs.programme_id_c = p.id)
        //     INNER JOIN course_dbs c
        //         ON mapping_dbs.course_code_c = c.id)
        //     INNER JOIN course_dbs cc
        //         ON mapping_dbs.course_name_c = cc.id)
        //     INNER JOIN course_dbs ccc
        //         ON mapping_dbs.credit_hours_c = ccc.id)
        // ";
        // $int2_result = @mysqli_query ($dbc,$int2);

        $query = "SELECT *
            FROM ((mapping_dbs
            
            INNER JOIN institute_dbs i ON mapping_dbs.uni_id = i.id)
            INNER JOIN programme_dbs p ON mapping_dbs.programme_id = p.id)

        ";
        $int1_result = @mysqli_query ($dbc,$query);


    ?>
            
<table class="table table-bordered table-striped">  
        <tr>  
                        <th colspan = "5">PREVIOUS</th>
                        <th colspan = "5">CURRENT</th>
        </tr>
        <tr>  
                        <th>Institute</th>
                        <th>Programme</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Hours</th>
                        
                        <th>Institute</th>
                        <th>Programme</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Credit Hours</th>
        </tr>
        
                <?php if(@mysqli_num_rows($int1_result) > 0) {  
                while ($row = mysqli_fetch_array($int1_result, MYSQLI_ASSOC)) { ?>
        <tr>
                        <td><?php echo $row["institute_name"]; ?></td> 
                        <td><?php echo $row["programme_name"]; ?></td> 
                        <td><?php echo $row["course_code"]; ?></td>
                        <td><?php echo $row["course_name"]; ?></td> 
                        <td><?php echo $row["credit_hours"]; ?></td>


                        <td><?php echo $row["uni_id_c"]; ?></td> 
                        <td><?php echo $row["programme_id_c"]; ?></td> 
                        <td><?php echo $row["course_code_c"]; ?></td>
                        <td><?php echo $row["course_name_c"]; ?></td> 
                        <td><?php echo $row["credit_hours_c"]; ?></td>

                        
                <?php }} ?> 

        </tr>  
                     
</table>


</div>
</div>
</div>
</div>
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

</body>

</html>