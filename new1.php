<?php
if($_POST['submit'])
{
	$h=mysql_connect("localhost","root","");
	mysql_select_db('mini_project',$h);

		
		$AID = $_POST['AID'];
		//print_r($_FILES[pdf]);
		$pdf1 = $_FILES['pdf']["name"];
		$temppdf = $_FILES['pdf']["tmp_name"];
        $folder = "pdf1/".$pdf1;
		//echo $folder;
		move_uploaded_file($temppdf,$folder);

		$insertquery ="INSERT INTO payment VALUES(".$AID.",'".$folder."')";
		echo "Submission Successful.";
		mysql_query($insertquery,$h);
		mysql_close($h);
}
?>
