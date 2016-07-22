<!--
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Submission Form</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<link href="./bootstrap.css" rel="stylesheet">
   
<link href="./dashboard.css" rel="stylesheet">

</head>
-->
<body>
<?php

  //require_once 'dbconfig.php';

  if(isset($_POST['btnsave']))
  {
    $useritem=$_POST['item']; //Item name
    echo $useritem;
    $uservendor=$_POST['vendor']; //Vendor Name
    $usersku=$_POST['sku'];     //Sku Number
    $userdescription=$_POST['description'];

    $imageFile=$_FILES['user_image']['name'];
    $tempDir=$_FILES['user_image']['tmp_name'];
    $imgsize=$_FILES['user_image']['size'];



    $upload_dir='user_images/';
    $extension=strtolower(pathinfo($imageFile,PATHINFO_EXTENSION));
    $validExtension = array('jpeg','jpg','png');
    $userPicture=rand(1000,100000).".".$extension;

    move_uploaded_file($tempDir,$upload_dir.$userPicture);

    
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testdb";

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO arcade (ditem,dvendor,dcode,details,dpic)
    VALUES ('$useritem', '$uservendor',$usersku,'$userdescription', '$userPicture')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
	catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
 }
 ?>













<?php include("./header.php") ?>


<div class="btn-group" style="margin-left:270px">
              <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Room <span class="glyphicon glyphicon-plus"></span>
              </button>
              
            </div>
<div class="btn-group" style="margin-left:30px">
              <a href="form.php" class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Photos <span class="glyphicon glyphicon-plus"></span>
              </a>

            </div>
<div class="row" style="margin-left:270px">
<?php
	
	$stmt = $conn->prepare('SELECT ditem, dvendor, dcode, details,dpic FROM arcade');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<img src="user_images/<?php echo $row['dpic']; ?>" class="img-rounded" width="250px" height="250px" />
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Images Found. Please add photos
            </div>
        </div>
        <?php
	}
	
?>
</div>


<?php include("./footer.php") ?>








	


  



</body>