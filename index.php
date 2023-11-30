<?php
include('db.php');
$res=mysqli_query($con,"select * from post");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.bundle.js">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
<div class="container mt40">
         <section class="row">
			<?php 
			if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				
			$likeClass="far";	
			if(isset($_COOKIE['like_'.$row['id']])){
				$likeClass="fas";
			}		

			$dislikeClass="far";	
			if(isset($_COOKIE['dislike_'.$row['id']])){
				$dislikeClass="fas";
			}	
			?>
			<?php } } else {
				echo "No data found";
			}
			?>
		 </section>
      </div>


    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
</body>
</html>