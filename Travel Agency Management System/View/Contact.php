<?php include('Header.php');?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../View/CSS/contactUs.css">
  <link rel="stylesheet" type="text/css" href="../View/CSS/contact.css">
  <title></title>

</head>
<body>
<div class="image">
<div class="wrapper">
    <div class="comment_box">
        <div class="title"> Provide Your Review </div>

          <form action="Comments.php" method="post">
          <textarea name="comment" rows="20" cols="50"></textarea><br> <br>       
          <button type="submit" class="btn"> Submit </button>    
          </form> 
    </div>
</div>
</div>


</body>
</html>
</form>


<?php include('Footer.php');?>