<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';


// echo $fileType; 
 // $file= $_FILES['company_logo'];
 // print_r($file);

$company_name=$_POST['c_name'];
$company_uid=$_POST['c_uid'];
$company_tpo=$_POST['c_tpo'];
$segment=$_POST['segment'];
$venue=$_POST['c_venue'];
$apply_before_da=$_POST['c_date'];
$apply_before_time=$_POST['c_time'];
$joining_at=$_POST['c_joinat'];
$ppt_date=$_POST['ppt_date'];
$ppt_time=$_POST['ppt_time'];
$salary=$_POST['c_salary'];
$campus_c=$_POST['c_status'];
$campus_date=$_POST['ca_date'];
$campus_time=$_POST['ca_time'];
$Designation=$_POST['c_desg'];

if(isset($_POST['c_uid']) && !empty($_POST['c_uid']) )
{
	$check=mysqli_query($con,"select * from `jobcard` WHERE company_uid='$company_uid'");
	$count1=mysqli_num_rows($check);
	if($count1>0){
		header('Location: error.html');
	}
	else{
			if((isset($_POST['c_name'])) && (isset($_POST['c_uid'])) && (isset($_POST['c_tpo']))&& (isset($_POST['segment'])) && (isset($_POST['c_venue'])) && (isset($_POST['c_date'])) && (isset($_POST['c_time'])) && (isset($_POST['c_joinat'])) && (isset($_POST['ppt_date'])) && (isset($_POST['ppt_time'])) && (isset($_POST['c_salary'])) && (isset($_POST['c_status'])) && (isset($_POST['ca_date'])) && (isset($_POST['ca_time'])) && (isset($_POST['c_desg'])))
				{
						mysqli_query($con,"INSERT into jobcard (company_name,company_uid,company_tpo,segment,venue,apply_before_da,apply_before_time,joining_at,ppt_date,ppt_time,salary,campus_c,campus_date,campus_time,Designation) VALUES ('$company_name','$company_uid','$company_tpo','$segment','$venue','$apply_before_da','$apply_before_time','$joining_at','$ppt_date','$ppt_time','$salary','$campus_c','$campus_date','$campus_time','$Designation')");
						echo 'successfully<br>';
					}
					else{
					echo 'Please complete the details<br>';
				}
											




			// companylogo

			// File upload path
			$fileName = $_FILES["company_logo"]["name"];
			$targetFilePath = "uploads/companylogo/". $fileName;
			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
			if(isset($_POST["submit"]) && !empty($_FILES["company_logo"]["name"])){
			    // Allow certain file formats
			    $allowTypes = array("JPG","JPEG","PNG","GIF","jpg","png","gif");
			    if(in_array($fileType, $allowTypes)){
			        // Upload file to server
			        if(move_uploaded_file($_FILES["company_logo"]["tmp_name"], $targetFilePath)){
			            // Insert image file name into database
			            $insert = mysqli_query($con,"update jobcard set companylogo='$fileName' where company_uid='$company_uid'");
			   
			            if(($insert)){
			                $statusMsg = "The file company logo has been uploaded successfully.";
			            }else{
			                $statusMsg = "File upload failed, please try again";
			            } 
			        }else{
			            $statusMsg = "Sorry, there was an error uploading your file.";
			        }
			    }else{
			        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
			    }
			    $statusMsg = 'Uploaded Company Logo successfully<br>';
			}


			echo $statusMsg;

			// presentation
			$fileName = $_FILES["c_prst"]["name"];
			$targetFilePath = "uploads/companyprest/". $fileName;
			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

			if(isset($_POST["submit"]) && !empty($_FILES["c_prst"]["name"])){
			    // Allow certain file formats
			    $allowTypes = array("JPG","JPEG","PNG","GIF",'pdf');
			    if(in_array($fileType, $allowTypes)){
			        // Upload file to server
			        if(move_uploaded_file($_FILES["c_prst"]["tmp_name"], $targetFilePath)){
			            // Insert image file name into database
			            $insert = mysqli_query($con,"update jobcard set company_prst='$fileName' where company_uid='$company_uid'");
			            echo $insert;
			            if(($insert)){
			                $statusMsg = "The file presentation has been uploaded successfully.";
			            }else{
			                $statusMsg = "File upload failed, please try again.";
			            } 
			        }else{
			            $statusMsg = "Sorry, there was an error uploading your file.";
			        }
			    }else{
			        $statusMsg = 'Uploaded Company presentation successfully<br> ';
			    }
			}
			// Display status message
			echo $statusMsg;
	}
}
?>


















<!-- 





<?php
include("dbconfig.php");
$statusMsg='';
$targetfile="upload/companylogo/";

if(isset($_POST["submit"]))
{
	echo 'Hello';
	if(!empty($_FILES['company_logo']['name']))
	{
			$fileName=basename($_FILES['company_logo']['name']);
			$targetfilepath=$targetfile . $fileName;
			$fileType=pathinfo($targetfilepath,PATHINFO_EXTENSION);

			// allow file type

			$allowType=$array('jpg','png','gif','jpeg');
			if(in_array($fileType, $allowType))
			{
				// uploading file
				if(move_uploaded_file($_FILES['company_logo']['tmp_name'], $targetfilepath))
				{
					// insert image file name to db

						$insert=mysqli_query($con,"insert into images (companylogo,uploaded_on) values('".$fileName."', NOW())");
						if($insert)
						{
				                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
		            	}
		            	else
		            	{
		              		 $statusMsg = "File upload failed, please try again.";
		              	}
		        }
		        else
		        {
		         	 $statusMsg = "Sorry, there was an error uploading your file.";
		        }
            }
            else
            { 
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & JPEG files are allowed to upload.';	
			}
	}
	else
	{
		$statusMsg = 'Please select a file to upload.';
	}
}	
	// Display status message
echo $statusMsg;

?> -->