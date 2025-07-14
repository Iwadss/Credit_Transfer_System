<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> Student Record </title> 
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

        <h1>~|> Student Record <|~</h1>

    </section>

    <?php  
        // Connect to The Database
        require_once ('mysqli.php'); 
        global $dbc;
    ?>

<!-------------------------- VIEW STUDENT -------------------------->
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
 <div class="card">
<div class="card-body">
<div class="card-header">
    <h4>Student Details
    <a href="record_page.html" class="btn btn-danger float-end">BACK</a>
    </h4>
</div>

    <?php
        $query = "SELECT * 
        FROM ((student_dbs
            INNER JOIN programme_dbs p
                    ON student_dbs.programme_name = p.id)
            INNER JOIN institute_dbs i
                    ON student_dbs.institute_name = i.id)
        ";
        

        $student_result = @mysqli_query ($dbc,$query);
    ?>
            <table class="table table-bordered table-striped">  
                    <tr>  
                        <th>NO</th>
                        <th>Student Name</th>
                        <th>ID Number</th>
                        <th>Student IC</th>
                        <th>Current Institute</th>
                        <th>Current Programme</th>
                        <th>Previous Institute</th>
                        <th>Previous Programme</th> 
                    </tr>
                    <?php  
                        if(@mysqli_num_rows($student_result) > 0) {  
                            while ($row = mysqli_fetch_array($student_result, MYSQLI_ASSOC)) {
                    ?>  
                            <tr>  
                                <td><?php echo $row["id"]; ?></td>  
                                <td><?php echo $row["student_name"]; ?></td> 
                                <td><?php echo $row["ID_number"]; ?></td>
                                <td><?php echo $row["student_IC"]; ?></td> 
                                <td><?php echo $row["institute_name_c"]; ?></td>
                                <td><?php echo $row["programme_name_c"]; ?></td> 
                                <td><?php echo $row["institute_name"]; ?></td>
                                <td><?php echo $row["programme_name"]; ?></td>
                                
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