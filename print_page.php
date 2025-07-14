<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> Credit Transfer Form </title> 
    <link rel="stylesheet" href="css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- This is for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Roboto&display=swap" rel="stylesheet">
    <!-- font awesome 4 cdn -->
    <link rel="icon" href="Images/unikl_logo.png">
</head>

<?php
	if(isset($_REQUEST['submitted'])){

                // Connect to The Database
                require_once ('mysqli.php'); 
                global $dbc;

                $TCFPA = $_REQUEST['TCFPA'];

		$student_name = $_REQUEST['student_name'];
		$ID_number = ($_REQUEST['ID_number']);
		$student_IC = $_REQUEST['student_IC'];

                $institute_name = $_REQUEST['SelectA'];
                $programme_name = $_REQUEST['programme_id'];
                
                $institute_name_c = $_REQUEST['SelectA_c'];
                $programme_name_c = $_REQUEST['programme_id_c'];

                // Check for previous registration.
                $query = "SELECT id FROM student_dbs";
                $result = @mysqli_query ($dbc,$query); // Run the query.
                
                // Make the query.
                $query = "INSERT INTO student_dbs 
                (student_name, ID_number, student_IC, programme_name_c, institute_name_c, programme_name, institute_name)
                VALUES 
                ('$student_name', '$ID_number', '$student_IC', '$programme_name_c', '$institute_name_c', '$programme_name', '$institute_name')";

                    $result = @mysqli_query ($dbc,$query); // Run the query
                
                mysqli_close($dbc); // Close the database connection.   

                // 1
                $course_code = $_REQUEST['SelectA1'];
                // $course_name = $_REQUEST['credit_code_id'];
                // $credit_hours = $_REQUEST['credit_hours'];
                $grade = $_REQUEST['grade'];
                // $course_code_c = $_REQUEST['course_code_c'];
                // $course_name_c = $_REQUEST['course_name_c'];
                // $credit_hours_c = $_REQUEST['credit_hours_c'];

                // 2
                $course_code2 = $_REQUEST['SelectA2'];
                // $course_name2 = $_REQUEST['course_name2'];
                // $credit_hours2 = $_REQUEST['credit_hours2'];
                $grade2 = $_REQUEST['grade2'];
                // $course_code_c2= $_REQUEST['course_code_c2'];
                // $course_name_c2 = $_REQUEST['course_name_c2'];
                // $credit_hours_c2 = $_REQUEST['credit_hours_c2'];

                // 3
                $course_code3 = $_REQUEST['SelectA3'];
                // $course_name3 = $_REQUEST['course_name3'];
                // $credit_hours3 = $_REQUEST['credit_hours3'];
                $grade3 = $_REQUEST['grade3'];
                // $course_code_c3= $_REQUEST['course_code_c3'];
                // $course_name_c3 = $_REQUEST['course_name_c3'];
                // $credit_hours_c3 = $_REQUEST['credit_hours_c3'];

                // 4
                $course_code4 = $_REQUEST['SelectA4'];
                // $course_name4 = $_REQUEST['course_name4'];
                // $credit_hours4 = $_REQUEST['credit_hours4'];
                $grade4 = $_REQUEST['grade4'];
                // $course_code_c4 = $_REQUEST['course_code_c4'];
                // $course_name_c4 = $_REQUEST['course_name_c4'];
                // $credit_hours_c4 = $_REQUEST['credit_hours_c4'];

                // 5
                $course_code5 = $_REQUEST['SelectA5'];
                // $course_name5 = $_REQUEST['course_name5'];
                // $credit_hours5 = $_REQUEST['credit_hours5'];
                $grade5 = $_REQUEST['grade5'];
                // $course_code_c5 = $_REQUEST['course_code_c5'];
                // $course_name_c5 = $_REQUEST['course_name_c5'];
                // $credit_hours_c5 = $_REQUEST['credit_hours_c5'];

                // 6
                $course_code6 = $_REQUEST['SelectA6'];
                // $course_name6 = $_REQUEST['course_name6'];
                // $credit_hours6 = $_REQUEST['credit_hours6'];
                $grade6 = $_REQUEST['grade6'];
                // $course_code_c6 = $_REQUEST['course_code_c6'];
                // $course_name_c6 = $_REQUEST['course_name_c6'];
                // $credit_hours_c6 = $_REQUEST['credit_hours_c6'];

?>

<body>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">


    <div class="d-flex align-items-center">
  <div class="flex-shrink-0">
    <img src="Images/unikl_logo.png" width="90">
  </div>
  <div class="flex-grow-1 ms-3">
  <h4 style="text-align:center">UNIVERSITI KUALA LUMPUR<br/>CREDIT TRANSFER APPLICATION</h4>
  </div>
</div>
<!------------------------------ TABLE 1 ------------------------------>   
<table class="table">
        <tr>
                <th colspan="3">
                            APPLICATION TYPE:
                </th>
        </tr>
        <tr>
                <td>
                            <?php
                            if(isset($_POST['application_type']) && 
                            $_POST['application_type'] == 'new') {
                                echo "&#9745;";
                            }else{
                                echo "&#9744;";
                            } ?> 
                            NEW Application
                </td>
                <td>
                <?php
                            if(isset($_POST['application_type']) && 
                            $_POST['application_type'] == 'add') {
                                echo "&#9745;";
                            }else{
                                echo "&#9744;";
                            } ?>  
                            Additional Application
                </td>
                <td>
                            <input type="text" style="text-align:center;"
                            size="3" maxlength="1" readonly value = <?php echo $TCFPA;?> > 
                                Total Credits From previous Approval
                </td>
        </tr>
        <tr>
                <td colspan="3">
                            <b> NOTE: </b>
                            <br>
                            1. Student is allowed to apply for credit transfer first semester only 
                            <br>
                            2. Kindly complete this form and attach a copy of semester result/transcripts 
                            and syllabus of the relevant subjects and submit to academic services 
                            <br>
                            3. For additional Application, attach previous approval application 
                            and fill in additional subject only with relevant for approval. 
                </td>
        </tr>
</table>	
      

<!------------------------------ TABLE 2 ------------------------------>
<table border = 1>  
        <tr>
                <th colspan="4" class="text-light bg-dark">
                            Section A - Student Particular
                </th>
        </tr>
        <tr>
                             <td>STUDENT NAME :  </td>
                <td colspan="4">
                            <?php echo $student_name; ?>
                </td>
        </tr>
        <tr>
                            <td>STUDENT ID :  </td>
                <td>
                            <?php echo $ID_number; ?>
                </td>
                            <td>IC NUMBER :  </td>
                <td>
                            <?php echo $student_IC;?>
                </td>
        </tr>
        <tr>
                            <td>CURRENT PROGRAMME :  </td>
                <td>
                            <?php echo $programme_name_c;?>
                </td>
                            <td>INSTITUTE :  </td>
                <td>
                            <?php echo $institute_name_c;?>
                </td>        
        </tr>
        <tr>
                            <td>PREVIOUS PROGRAMME :  </td>
                <td>
                            <?php echo $programme_name;?>
                </td>
                            <td>INSTITUTE :  </td>
                <td>
                            <?php echo $institute_name;?>
                </td>
        </tr>
</table>

<div class="container mt-2">
            <u><b> STUDENT'S ACKNOWLEDGEMENT </b></u><br>
            I hereby admit all infomation provided, pertaining to my application is true and correct
        <div class="container mt-4">
                Student's Signature ___________________
        </div>
</div>


<!------------------------------ TABLE 3 ------------------------------>
<table border = 1>
        <tr>
                        <th colspan="8" class="text-light bg-dark">
                                Section B: Subjects To be mapped for Credit Transfer 
                        </th>
                        <th colspan="3" class="text-light bg-dark">
                                For Evaluator used 
                        </th>
        </tr>        
        <tr>
                            <td rowspan="2"> </td>
                            <td colspan="4"> 
                                Subjects From Previous Programme 
                            </td>
                            <td colspan="3">
                                Subjects in the Current Programme (UniKL)
                            </td>
                            <td colspan="2">
                                Approved? 
                            </td>
                            <td rowspan="2">
                                Appr <br/>
                                Credit 
                            </td>
        </tr>
        <tr>
                            <td> Code </td>
                            <td> Subject Title </td>
                            <td> Credit </td>
                            <td> Grade </td>
                            <td> Code </td>
                            <td> Subject Title </td>
                            <td> Credit </td>
                            <td> Yes </td>
                            <td> No </td>     
        </tr>
        <!------------------------------ 1 ------------------------------>
        <tr>
                            <td> 1 </td>
                <td>
                            <?php echo $course_code;?>
                </td>
                <td>
                            <?php //echo $course_name;?>
                </td>
                <td>
                            <?php //echo $credit_hours;?>
                </td>
                <td>
                            <?php echo $grade;?>
                </td>

                <td>
                            <?php //echo $course_code_c;?>
                </td>
                <td>
                            <?php //echo $course_name_c;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved']) && 
                                $_POST['approved'] == 'yes') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved']) && 
                                $_POST['approved'] == 'no') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit'])) {
                                        if (is_numeric($_REQUEST['appr_credit'])) {
                                                $appr_credit = ($_REQUEST['appr_credit']);
                                        } else {
                                                $appr_credit = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit = NULL;
                                }
                                echo $appr_credit;
                                ?> 
                </td>				
        </tr>
        <!------------------------------ 2 ------------------------------>
        <tr>
                            <td> 2 </td>
                <td>
                            <?php echo $course_code2;?>
                </td>
                <td>
                            <?php //echo $course_name2;?>
                </td>
                <td>
                            <?php //echo $credit_hours2;?>
                </td>
                <td>
                            <?php echo $grade2;?>
                </td>

                <td>
                            <?php //echo $course_code_c2;?>
                </td>
                <td>
                            <?php //echo $course_name_c2;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c2;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved2']) && 
                                $_POST['approved2'] == 'yes2') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved2']) && 
                                $_POST['approved2'] == 'no2') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit2'])) {
                                        if (is_numeric($_REQUEST['appr_credit2'])) {
                                                $appr_credit2 = ($_REQUEST['appr_credit2']);
                                        } else {
                                                $appr_credit2 = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit2 = NULL;
                                }
                                echo $appr_credit2;
                                ?> 
                </td>	
        </tr>
        <!------------------------------ 3 ------------------------------>                      
        <tr>
                            <td> 3 </td>
                <td>
                            <?php echo $course_code3;?>
                </td>
                <td>
                            <?php //echo $course_name3;?>
                </td>
                <td>
                            <?php //echo $credit_hours3;?>
                </td>
                <td>
                            <?php echo $grade3;?>
                </td>

                <td>
                            <?php //echo $course_code_c3;?>
                </td>
                <td>
                            <?php //echo $course_name_c3;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c3;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved3']) && 
                                $_POST['approved3'] == 'yes3') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved3']) && 
                                $_POST['approved3'] == 'no3') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit3'])) {
                                        if (is_numeric($_REQUEST['appr_credit3'])) {
                                                $appr_credit3 = ($_REQUEST['appr_credit3']);
                                        } else {
                                                $appr_credit3 = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit3 = NULL;;
                                }
                                echo $appr_credit3;
                                ?> 
                </td>	
        </tr> 
        <!------------------------------ 4 ------------------------------>                 
        <tr>
                            <td> 4 </td>
                            <td>
                            <?php echo $course_code4;?>
                </td>
                <td>
                            <?php //echo $course_name4;?>
                </td>
                <td>
                            <?php //echo $credit_hours4;?>
                </td>
                <td>
                            <?php echo $grade4;?>
                </td>

                <td>
                            <?php //echo $course_code_c4;?>
                </td>
                <td>
                            <?php //echo $course_name_c4;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c4;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved4']) && 
                                $_POST['approved4'] == 'yes4') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved4']) && 
                                $_POST['approved4'] == 'no4') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit4'])) {
                                        if (is_numeric($_REQUEST['appr_credit4'])) {
                                                $appr_credit4 = ($_REQUEST['appr_credit4']);
                                        } else {
                                                $appr_credit4 = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit4 = NULL;;
                                }
                                echo $appr_credit4;
                                ?> 
                </td>
        </tr>
        <!------------------------------ 5 ------------------------------>                
        <tr>
                            <td> 5 </td>
                <td>
                            <?php echo $course_code5;?>
                </td>
                <td>
                            <?php //echo $course_name5;?>
                </td>
                <td>
                            <?php //echo $credit_hours5;?>
                </td>
                <td>
                            <?php echo $grade5;?>
                </td>

                <td>
                            <?php //echo $course_code_c5;?>
                </td>
                <td>
                            <?php //echo $course_name_c5;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c5;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved5']) && 
                                $_POST['approved5'] == 'yes5') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved5']) && 
                                $_POST['approved5'] == 'no5') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit5'])) {
                                        if (is_numeric($_REQUEST['appr_credit5'])) {
                                                $appr_credit5 = ($_REQUEST['appr_credit5']);
                                        } else {
                                                $appr_credit5 = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit5 = NULL;;
                                }
                                echo $appr_credit5;
                                ?> 
                </td>
        </tr>
        <!------------------------------ 6 ------------------------------>
        <tr>
                            <td> 6 </td>
                <td>
                            <?php echo $course_code6;?>
                </td>
                <td>
                            <?php //echo $course_name6;?>
                </td>
                <td>
                            <?php //echo $credit_hours6;?>
                </td>
                <td>
                            <?php echo $grade6;?>
                </td>

                <td>
                            <?php //echo $course_code_c6;?>
                </td>
                <td>
                            <?php //echo $course_name_c6;?>
                </td>
                <td>
                            <?php //echo $credit_hours_c6;?>
                </td>

                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved6']) && 
                                $_POST['approved6'] == 'yes6') {
                                        echo "&#10004;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php
                                if(isset($_POST['approved6']) && 
                                $_POST['approved6'] == 'no6') {
                                        echo "&#10006;";

                                }else{
                                        echo "";

                                } ?> 
                </td>
                <td style="text-align:center;">
                                <?php 
                                if (!empty($_REQUEST['appr_credit6'])) {
                                        if (is_numeric($_REQUEST['appr_credit6'])) {
                                                $appr_credit6 = ($_REQUEST['appr_credit6']);
                                        } else {
                                                $appr_credit6 = NULL;
                                                echo '<font color="red">-</font>';
                                        }
                                } else {
                                        $appr_credit6 = NULL;;
                                }
                                echo $appr_credit6;
                                ?> 
                </td>
        </tr>

        <tr>
                            <td colspan="10" class="text-right">
                                
                                Total Credits Approved by Evaluator
                            </td>
                <td style="text-align:center;">
                              <?php
                              $total_appr = $appr_credit + $appr_credit2 + $appr_credit3
                              + $appr_credit4 + $appr_credit5 + $appr_credit6;

                              echo $total_appr;
                              ?>  
                </td>
        </tr>
                    
</table>
<br>

<table border="1">	
        <tr>
                <th colspan="3" class="text-light bg-dark">
                                FOR UNIKL USED ONLY 
                </th>
        </tr>         
        <tr>                     
                            <td>A) Recommended by (Evaluator)</td>
                            <td>B) Approved by</td>
                            <td>C) Updated in ECITIE (Academic Services Section)</td>                 
        </tr>
        <tr>
                <td>   
                            Signature ________________________
                            <br/>
                            Date:
                </td>
                <td>      
                            Signature ________________________
                            <br/>
                            Date:
                </td>
                <td>
                        <div class="float-end">
                            <p class="text-right">
                            Previous Approved Credits recorded in ECITIE
                            <input type="text" size="3" maxlength="2" readonly/>
                                <br>
                            Total Credit Approved from this application
                            <input type="text"  size="3" maxlength="2" readonly/>
                                <br>
                            Total Credi recorded in ECITIE:
                            <input type="text" size="3" maxlength="2" readonly/>
                            </p>
                        </div>
                                <br>
                            Processed by: <br/> Date:
                </td> 
        </tr>
                    
</table>
   
</div>
</div>
</div>
</div>    


<br> 
<div class="text-center">   
<input type="button" value="PRINT" class="btn btn-primary"  onclick="window.print();return false;">
</div>
<br>

<?php	
            		
}
	
?>

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





