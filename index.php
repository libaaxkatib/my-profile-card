<?php
$name = "Asad MOhamed Abdi";
$job = "Web Developer";
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="card">
    <img src="asad.png" alt="Profile Photo">
    <h1> <?php echo $name; ?></h1>
    <p class="job"><?php echo $job; ?></p>
    <p class="bio"> Waxaan jecelahay coding iyo technology </p>
    <button> Contact Me </button>
    <div id="message"></div>
    <p class="footer"> <?php echo $year; ?> </p> 
  </div>
 
  <script src="script.js"></script>
</body>
</html>