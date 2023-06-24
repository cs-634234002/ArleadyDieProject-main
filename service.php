<?php
require_once('connections/mysqli.php');
?>
<!DOCTYPE html>
<html lang="en " >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <style>
    @import url(http://fonts.googleapis.com/css?family=Kanit);
    body {
        font-family: 'Kanit', sans-serif;
    }
  </style>
</head>
<?php include 'includes/navbar.php';?>
<body> 
<div class="container">
  <div class="row">
    <?php
$sql ="SELECT * FROM tb_service ORDER BY id" ;
$result = mysqli_query($Connection,$sql);
while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-sm">
      <div class="text-center">
      <img src="images/<?=$row['image']?>" width="300px" height="250" class="mt-5 p-2 my-2 "><br>
      ชื่อบริการ: <?=$row['service']?><br>
      รายละเอียด: <?=$row['description']?><br>
      สถานะ: <?=$row['status']?><br>
      <a class="btn btn-outline-danger mt-2" href="">จอง</a>
        </div>  
    </div>
  <?php
  }
  mysqli_close($Connection);
  ?>  
  </div>
</div>
</body>
<?php include 'includes/footer.php';?>
</html>
