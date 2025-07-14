<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> Credit Transfer Form </title>
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
            xmlhttp.open("GET","transferring_helper.php?value="+str, true);
            xmlhttp.send();

        }

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
            xmlhttp.open("GET","transferring_helper.php?value="+str, true);
            xmlhttp.send();

        }

/*--------------- 1 ------------------*/
        function my_fun1(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id').innerHTML = this.responseText;
                    // document.getElementById('credit_hours_id').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

/*--------------- 2 ------------------*/
        function my_fun2(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id2').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

/*--------------- 3 ------------------*/
function my_fun3(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id3').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

/*--------------- 4 ------------------*/
function my_fun4(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id4').innerHTML = this.responseText;
                    // document.getElementById('credit_hours_id').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

/*--------------- 5 ------------------*/
        function my_fun5(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id5').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
            xmlhttp.send();

        }

/*--------------- 6 ------------------*/
function my_fun6(str) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else{
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange= function(){
                if (this.readyState==4 && this.status==200) {
                    document.getElementById('credit_code_id6').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","transferring_helper.php?courseCode="+str, true);
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
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i> <!-- menu icon for small screen -->
        </nav>
        <h1> Transfer Credit </h1>
    </section>

  
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
        <div class="card-header">
            <h4>Credit Transfer Form
            <a href="home_page.html" class="btn btn-danger float-end">BACK</a>
             </h4>
        </div>
        
        <div class="card-body">
        <form action="print_page.php" method="POST">


            <div class="container mt-4">
            <div class="row">
            <div class="col-md-12">
            <div class="card">
            <div class="card-body">

<!------------------------------ TABLE 1 ------------------------------>   
        <table class="table ">
                <tr>
                        <th colspan="3">
                                APPLICATION TYPE:
                        </th>
                </tr>
                <tr>
                        <td>
                                <input type="radio" name="application_type" value="new" class="form-check-input"/> 
                                NEW Application
                        </td>
                        <td>
                                <input type="radio" name="application_type" value="add" class="form-check-input"/>
                                Additional Application
                        </td>
                        <td>
                                <input type="text" style="text-align:center;" name="TCFPA" size="3" maxlength="1"/> 
                                Total Credits From previous Approval
                        </td>
                </tr>
        </table>
                  

<!------------------------------ TABLE 2 ------------------------------> 
        <table class="table table-bordered">  
                <tr>
                        <th colspan="4" class="text-light bg-dark">
                                <h5> Section A - Student Particular </h5>
                        </th>
                </tr>
                <tr>
                                <td> <h6>STUDENT NAME : </h6> </td>
                        <td colspan="4">
                                <input type="text" name="student_name" class="form-control"/>
                        </td>
                </tr>
                <tr>
                                <td> <h6>ID NUMBER : </h6> </td>
                        <td>
                                <input type="text" name="ID_number" class="form-control"/>
                        </td>
                                <td> <h6>IC NUMBER : </h6> </td>
                        <td>
                                <input type="text" name="student_IC" class="form-control"/>
                        </td>
                </tr>
                <tr>
                                <td> <h6>CURRENT INSTITUTE : </h6> </td>
                        <td>
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
                        </td>
                                <td> <h6>PROGRAMME : </h6> </td>
                        <td>
                                <select class="form-select mb-3" name="programme_id_c" id="programme_id_c">
                                </select>
                        </td>        
                </tr>
                <tr>
                                <td> <h6>PREVIOUS INSTITUTE : </h6> </td>
                        <td>
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
                        </td>
                                <td> <h6>PROGRAMME : </h6> </td>
                        <td>
                                <select class="form-select mb-3" name="programme_id" id="programme_id">
                                </select>
                        </td>
                </tr>
        </table>

<!------------------------------ 2 ------------------------------> 
<table class="table table-bordered">
<tr class="text-light bg-dark">
        <th colspan="6"> <h5> Section B: Subjects To be Mapped for Credit Transfer </h5></th>
</tr>
<tr>
        <th></th>
	<th> CODE :</th>
	<th>GRADE</th>

	<th>YES</th>
        <th>NO</th>
        <th>APPR CR</th>
	</tr>
<tr>
        <td class="text-center"><h5><b>1.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" required
                name ="SelectA1" id="SelectA1" onchange="my_fun1(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code = mysqli_fetch_array($sql_course_code)){
                echo '<option value="'.$data_course_code['course_code'].'">
                '.$data_course_code['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved" value="yes" /></td>
        <td><input class="form-check-input" type="radio" name="approved" value="no" /></td>
        <td><input type="text" class="form-control" name="appr_credit" size="1" maxlength="2" /></td>
        
</tr>
<tr>
        <td class="text-center"><h5><b>2.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" 
                name ="SelectA2" id="SelectA2" onchange="my_fun2(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code2 = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code2 = mysqli_fetch_array($sql_course_code2)){
                echo '<option value="'.$data_course_code2['course_code'].'">
                '.$data_course_code2['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade2" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved2" value="yes2" /></td>
        <td><input class="form-check-input" type="radio" name="approved2" value="no2" /></td>
        <td><input type="text" class="form-control" name="appr_credit2" size="1" maxlength="2" /></td>
</tr>
<tr>
        <td class="text-center"><h5><b>3.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" 
                name ="SelectA3" id="SelectA3" onchange="my_fun3(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code2 = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code2 = mysqli_fetch_array($sql_course_code2)){
                echo '<option value="'.$data_course_code2['course_code'].'">
                '.$data_course_code2['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade3" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved3" value="yes3" /></td>
        <td><input class="form-check-input" type="radio" name="approved3" value="no3" /></td>
        <td><input type="text" class="form-control" name="appr_credit3" size="1" maxlength="2" /></td>
</tr>
<tr>
        <td class="text-center"><h5><b>4.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" 
                name ="SelectA4" id="SelectA4" onchange="my_fun4(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code2 = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code2 = mysqli_fetch_array($sql_course_code2)){
                echo '<option value="'.$data_course_code2['course_code'].'">
                '.$data_course_code2['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade4" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved4" value="yes4" /></td>
        <td><input class="form-check-input" type="radio" name="approved4" value="no4" /></td>
        <td><input type="text" class="form-control" name="appr_credit4" size="1" maxlength="2" /></td>
</tr>
<tr>
        <td class="text-center"><h5><b>5.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" 
                name ="SelectA5" id="SelectA5" onchange="my_fun5(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code2 = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code2 = mysqli_fetch_array($sql_course_code2)){
                echo '<option value="'.$data_course_code2['course_code'].'">
                '.$data_course_code2['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade5" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved5" value="yes5" /></td>
        <td><input class="form-check-input" type="radio" name="approved5" value="no5" /></td>
        <td><input type="text" class="form-control" name="appr_credit5" size="1" maxlength="2" /></td>
</tr>
<tr>
        <td class="text-center"><h5><b>6.</b></h5></td>
        <td>
                <select class="form-select mb-3" aria-label="Default select example" 
                name ="SelectA6" id="SelectA6" onchange="my_fun6(this.value);">
                <option selected value="">-Select-</option>
                        <?php 
                        $con = mysqli_connect("localhost","root","","credit_transfer_system_dbs");
                        $sql_course_code2 = @mysqli_query($con, "SELECT * FROM mapping_dbs") or die 
                        (mysqli_error($con));
                        while($data_course_code2 = mysqli_fetch_array($sql_course_code2)){
                echo '<option value="'.$data_course_code2['course_code'].'">
                '.$data_course_code2['course_code'].' </option>';
                        }
                        ?>
                </select>
        </td>
        <th><input type="text" class="form-control" name="grade6" size="1" maxlength="2" /></th>
        <td><input class="form-check-input" type="radio" name="approved6" value="yes6" /></td>
        <td><input class="form-check-input" type="radio" name="approved6" value="no6" /></td>
        <td><input type="text" class="form-control" name="appr_credit6" size="1" maxlength="2" /></td>
</tr>
</table>

<table class="table">
<tr>
        <td>
        <div class="mb-3" id="credit_code_id">
        </td>
</tr>
<tr>
        <td>
        <div class="mb-3" id="credit_code_id2">
        </td>
</tr>
<tr>
        <td>
        <div class="mb-3" id="credit_code_id3">
        </td>
</tr>
<tr>
        <td>
        <div class="mb-3" id="credit_code_id4">
        </td>
</tr>
<tr>
        <td>
        <div class="mb-3" id="credit_code_id5">
        </td>
</tr>
<tr>
        <td>
        <div class="mb-3" id="credit_code_id6">
        </td>
</tr>
</table>


		
	                         
        </div>
        </div>
        </div>
        </div> 
        </div>          
        </div>

 
<!------------------------------ Calculate ------------------------------> 
    <div class="container bg-light">
            <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Calculate</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            <input type="hidden" name="submitted" value="TRUE" />
            </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</body>

</br></br>

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
include ('./footer.html');
?>
</html>