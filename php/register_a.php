<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
echo $_POST['save'];
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
elseif(isset($_POST['save']))
{
    echo "Verified Email";
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="upload/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    echo $first_name.$email;
    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $query="INSERT INTO register(First_Name, Last_Name, Email, Password, File ) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)', '$final_file')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: ../html/login.html");
    }
    else 
    {
		echo "Error.Please try again";
	}

}
?>
