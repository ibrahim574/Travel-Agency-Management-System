var fullImgBox = document.getElementById("full-img_box");
    var fullImg = document.getElementById("full-img");

    function OpenFullImg(pic){
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
    }

    function CloseFullImg(){
        fullImgBox.style.display = "none";
    }