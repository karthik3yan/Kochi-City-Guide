<?php
$target_dir = "../image/";
$target_file = $target_dir.basename($_FILES["image1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
    
        $imagelink= basename( $_FILES["image1"]["name"]);
        
        
        
    $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
            
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
   

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $detail = mysqli_real_escape_string($conn, $_POST['info']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);

$query = "INSERT INTO `hotel` (`hid`, `hotelname`, `hoteldetails`, `hoteladdress`, `image`) VALUES (NULL, '$name', '$detail', '$address', '$imagelink')";
   
  	$insert = mysqli_query($conn, $query);
        
        
          if ($insert) {
 header('location: viewhotel.php');	
          }
else
{
    
    echo"erroer inserting";
    
}
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>