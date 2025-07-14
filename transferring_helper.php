<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
     <title> transferring Helper </title> 
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

<?php

$conn= mysqli_connect("localhost", "root", "","credit_transfer_system_dbs");

if (!$conn) {
	exit("Sorry, Connection error..");
} else {
	//echo "Connection Ok";
}

//previous
if(isset($_GET["value"])){
	$val= ($_GET["value"]);
	$val_M = mysqli_real_escape_string($conn, $val);
	$sql="SELECT * FROM programme_dbs WHERE uni_id='$val_M'";

	$result= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)>0) {
		echo "<select name='programme_id_c'>";

			while ($rows= mysqli_fetch_assoc($result)) {

			echo "<option value='".$rows["id"]."'>".$rows["programme_name"]."</option>";
			}
		echo "</select>";
	}
}

//current
if(isset($_GET["value_c"])){
	$val_c= ($_GET["value_c"]);
	$val_M_c = mysqli_real_escape_string($conn, $val_c);
	$sql_c="SELECT id, uni_id, programme_name FROM programme_dbs WHERE uni_id='$val_M_c'";

	$result_c= mysqli_query($conn, $sql_c);

	if (mysqli_num_rows($result_c)>0) {
		echo "<select name='programme_id_c'>";

			while ($rows_c= mysqli_fetch_assoc($result_c)) {

			echo "<option value='".$rows_c["id"]."'>".$rows_c["programme_name"]."</option>";
			}
		echo "</select>";
	}
}

/*--------------- 1 ------------------*/
if(isset($_GET["courseCode"])){
 	$val1= ($_GET["courseCode"]);
 	$val_M1 = mysqli_real_escape_string($conn, $val1);
 	$sql1="SELECT * FROM mapping_dbs WHERE course_code='$val_M1'";

 	$result1= mysqli_query($conn, $sql1);

 	if (mysqli_num_rows($result1)>0) {

 		$rows1= mysqli_fetch_assoc($result1);
	
 		?>
<table class="table table-bordered">
	<tr>
		<th colspan="3">PREVIOUS PROGRAMME</th>
		<th colspan="3">CURRENT PROGRAMME</th>
	</tr>
	<tr>
		<th> CODE</th>
		<th>SUBJECT TITLE</th>
		<th>CREDIT</th>

		<th> CODE</th>
		<th>SUBJECT TITLE</th>
		<th>CREDIT</th>

	</tr>
	<tr>
		<th>
			<?php echo ('<option name="course_code_id' . $rows1['id'] . '">' . $rows1['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id' . $rows1['id'] . '">' . $rows1['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id' . $rows1['id'] . '">' . $rows1['credit_hours'] .  '</option>');?>
		</th>		
		<th>
			<?php echo ('<option name="course_code_id_c' . $rows1['id'] . '">' . $rows1['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c' . $rows1['id'] . '">' . $rows1['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c' . $rows1['id'] . '">' . $rows1['credit_hours_c'] .  '</option>');?>
		</th>
	</tr>

 		<?php
 	}

}
?>

<?php
/*--------------- 2 ------------------*/
if(isset($_GET["courseCode2"])){
 	$val2= ($_GET["courseCode2"]);
 	$val_M2 = mysqli_real_escape_string($conn, $val2);
 	$sql2="SELECT * FROM mapping_dbs WHERE course_code='$val_M2'";

 	$result2= mysqli_query($conn, $sql2);

 	if (mysqli_num_rows($result2)>0) {

 		$rows2= mysqli_fetch_assoc($result2);
	
 		?>

	<tr>
		<th>
			<?php echo ('<option name="course_code_id2' . $rows2['id'] . '">' . $rows2['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id2' . $rows2['id'] . '">' . $rows2['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id2' . $rows2['id'] . '">' . $rows2['credit_hours'] .  '</option>');?>
		</th>		
		<th>
			<?php echo ('<option name="course_code_id_c2' . $rows2['id'] . '">' . $rows2['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c2' . $rows2['id'] . '">' . $rows2['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c2' . $rows2['id'] . '">' . $rows2['credit_hours_c'] .  '</option>');?>
		</th>

		
	</tr>
 		<?php
 	}
}
?>

<?php
/*--------------- 3 ------------------*/
if(isset($_GET["courseCode3"])){
 	$val3= ($_GET["courseCode3"]);
 	$val_M3 = mysqli_real_escape_string($conn, $val3);
 	$sql3="SELECT * FROM mapping_dbs WHERE course_code='$val_M3'";

 	$result3= mysqli_query($conn, $sql3);

 	if (mysqli_num_rows($result3)>0) {

 		$rows3= mysqli_fetch_assoc($result3);
	
 		?>

	<tr>
		<th>
			<?php echo ('<option name="course_code_id3' . $rows3['id'] . '">' . $rows3['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id3' . $rows3['id'] . '">' . $rows3['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id3' . $rows3['id'] . '">' . $rows3['credit_hours'] .  '</option>');?>
		</th>	
		<th>
			<?php echo ('<option name="course_code_id_c3' . $rows3['id'] . '">' . $rows3['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c3' . $rows3['id'] . '">' . $rows3['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c3' . $rows3['id'] . '">' . $rows3['credit_hours_c'] .  '</option>');?>
		</th>

	</tr>
 		<?php
 	}
}
?>

<?php
/*--------------- 4 ------------------*/
if(isset($_GET["courseCode4"])){
 	$val4= ($_GET["courseCode4"]);
 	$val_M4 = mysqli_real_escape_string($conn, $val4);
 	$sql4="SELECT * FROM mapping_dbs WHERE course_code='$val_M4'";

 	$result4= mysqli_query($conn, $sql4);

 	if (mysqli_num_rows($result4)>0) {

 		$rows4= mysqli_fetch_assoc($result4);
	
 		?>

	<tr>
		<th>
			<?php echo ('<option name="course_code_id4' . $rows4['id'] . '">' . $rows4['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id4' . $rows4['id'] . '">' . $rows4['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id4' . $rows4['id'] . '">' . $rows4['credit_hours'] .  '</option>');?>
		</th>		
		<th>
			<?php echo ('<option name="course_code_id_c4' . $rows4['id'] . '">' . $rows4['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c4' . $rows4['id'] . '">' . $rows4['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c4' . $rows4['id'] . '">' . $rows4['credit_hours_c'] .  '</option>');?>
		</th>

		
	</tr>
 		<?php
 	}
}
?>

<?php
/*--------------- 5 ------------------*/
if(isset($_GET["courseCode5"])){
 	$val5= ($_GET["courseCode5"]);
 	$val_M5 = mysqli_real_escape_string($conn, $val3);
 	$sql5="SELECT * FROM mapping_dbs WHERE course_code='$val_M5'";

 	$result5= mysqli_query($conn, $sql5);

 	if (mysqli_num_rows($result5)>0) {

 		$rows5= mysqli_fetch_assoc($result5);
	
 		?>

	<tr>
		<th>
			<?php echo ('<option name="course_code_id5' . $rows5['id'] . '">' . $rows5['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id5' . $rows5['id'] . '">' . $rows5['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id5' . $rows5['id'] . '">' . $rows5['credit_hours'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_code_id_c5' . $rows5['id'] . '">' . $rows5['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c5' . $rows5['id'] . '">' . $rows5['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c5' . $rows5['id'] . '">' . $rows5['credit_hours_c'] .  '</option>');?>
		</th>

		
	</tr>
 		<?php
 	}
}
?>

<?php
/*--------------- 6 ------------------*/
if(isset($_GET["courseCode6"])){
 	$val6= ($_GET["courseCode6"]);
 	$val_M6 = mysqli_real_escape_string($conn, $val6);
 	$sql6="SELECT * FROM mapping_dbs WHERE course_code='$val_M6'";

 	$result6= mysqli_query($conn, $sql6);

 	if (mysqli_num_rows($result6)>0) {

 		$rows6= mysqli_fetch_assoc($result6);
	
 		?>

	<tr>
		<th>
			<?php echo ('<option name="course_code_id6' . $rows6['id'] . '">' . $rows6['course_code'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id6' . $rows6['id'] . '">' . $rows6['course_name'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id6' . $rows6['id'] . '">' . $rows6['credit_hours'] .  '</option>');?>
		</th>	
		<th>
			<?php echo ('<option name="course_code_id_c6' . $rows6['id'] . '">' . $rows6['course_code_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="course_name_id_c6' . $rows6['id'] . '">' . $rows6['course_name_c'] .  '</option>');?>
		</th>
		<th>
			<?php echo ('<option name="credit_hours_id_c6' . $rows6['id'] . '">' . $rows6['credit_hours_c'] .  '</option>');?>
		</th>

		
	</tr>
 		<?php
 	}
}
?>
</table>



</body>
</html>