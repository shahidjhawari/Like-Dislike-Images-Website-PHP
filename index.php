<?php
include('database.php');
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
            <article class="col-xs-12 col-sm-6 col-md-3" id="post<?php echo $row['id']?>">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="images/<?php echo $row['image']?>" width="300px" alt="<?php echo $row['title']?>" />
                     </a>
                  </div>
                  <div class="panel-footer">
                     <h4><?php echo $row['title']?></h4>
                     <span class="pull-right">
                        <i class="<?php echo $likeClass?> fa-thumbs-up" onclick="setLikeDislike('like','<?php echo $row['id']?>')" id="like_<?php echo $row['id']?>"></i>
						<div id="like"><?php echo $row['like_count']?></div>
						&nbsp;&nbsp;<i class="<?php echo $dislikeClass?> fa-thumbs-down" onclick="setLikeDislike('dislike','<?php echo $row['id']?>')" " id="dislike_<?php echo $row['id']?>"></i>
						<div id="dislike"><?php echo $row['dislike_count']?></div>
                     </span>
                  </div>
               </div>
            </article>
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