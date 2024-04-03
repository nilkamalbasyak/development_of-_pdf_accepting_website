<?php
if($_POST['submit'])
{
	$h=mysql_connect("localhost","root","");
	mysql_select_db('mini_project',$h);

		$Aname = $_POST['Aname'];
		$Atname = $_POST['Atname'];
		$AID = $_POST['AID'];
		$Atemail = $_POST['Atemail'];
		//print_r($_FILES[pdf]);
		$pdf = $_FILES['pdf']["name"];
		$temppdf = $_FILES['pdf']["tmp_name"];
        $folder = "pdf/".$pdf;
		//echo $folder;
		move_uploaded_file($temppdf,$folder);

		$insertquery ="INSERT INTO submission VALUES('".$Aname."','".$Atname."',".$AID.",'".$Atemail."','".$folder."')";
		echo "Record Inserted.";
		echo "<br>"."Go back to previous page for next registration.";
		mysql_query($insertquery,$h);
		mysql_close($h);
}
?>
