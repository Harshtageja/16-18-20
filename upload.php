<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $sql="INSERT into images (FirstName,LastName,Email,Password,Gender,ContactNumber,DOB,image) VALUES ('".$_POST['Name']."','".$_POST['last']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['gender']."','".$_POST['number']."','".$_POST['dob']."','$imgContent')";
            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 

            }else{ 
                $statusMsg = "File upload failed, please try again."; 
                 echo $db->error;
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>