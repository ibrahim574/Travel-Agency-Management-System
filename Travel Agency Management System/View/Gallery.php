<?php include('Header.php');?>

<hr>
<html>
<head>
    <title>IMS Gallary</title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/gallery.css">
</head>
<h2>IMS Gallary</h2>
<body>
    <div class="full-img" id="full-img_box">
        <img src="images/g-1.jpg" id="full-img">
        <span onclick="CloseFullImg()">X</span>
    </div>
    <div class="img-gallery">
        <img src="images/g-1.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-2.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-3.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-4.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-5.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-6.jpg" onclick="OpenFullImg(this.src)">
        <img src="images/g-7.jpg" onclick="OpenFullImg(this.src)">
    </div>


<script type="text/javascript">
    var fullImgBox = document.getElementById("full-img_box");
    var fullImg = document.getElementById("full-img");

    function OpenFullImg(pic){
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
    }

    function CloseFullImg(){
        fullImgBox.style.display = "none";
    }

</script>

</body>
</html>

<?php include('Footer.php');?>