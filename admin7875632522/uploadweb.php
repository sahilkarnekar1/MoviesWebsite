<?php
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['user'])){

	header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/cssfile4.css">
    <link rel="stylesheet" href="css2/cssfile8.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php  include 'links.php' ?> 
    <title>Document</title>

  

</head>
<body class="bgg">

<!-- navbar -->

<?php 
include 'adminblocks/adminnav.php';
?>


<center>
<h2 class="settextstyle" >Upload Web Series</h2>
<p>Upload single season</p>
</center>

<!-- body upload -->
<form action="insertweb.php" method="POST" enctype="multipart/form-data">
  <div class="form-group formbg">
    <label for="exampleFormControlFile1">Web Series Banner : </label>
    <input type="file" name="bannerImg" class="form-control-file" onchange="getImagePreview(event)" id="upload_file" required>

<div id="preview"></div>
    <br>

    <label for="formGroupExampleInput">Web Series Name : </label>
    <input type="text" name="webName" class="form-control" id="formGroupExampleInput" placeholder="Web Name With Languages" required>

    <label for="formGroupExampleInput2">Description</label>
    <input type="text" name="webDescription" class="form-control" id="formGroupExampleInput2" placeholder="Description" required>


    <select class="form-select form-select-lg mt-2 mb-1" aria-label=".form-select-lg example" name="categories">
  <option value="webseries">WEBSERIES</option>
  
 
</select>

<h5>Type = Webseries</h5>
<h5>Complete Season</h5>




    <label for="formGroupExampleInput2">480P</label>
    <input type="text" name="webLink480" class="form-control" id="formGroupExampleInput2" placeholder="link" >

    <label for="formGroupExampleInput2">720P</label>
    <input type="text" name="webLink720" class="form-control" id="formGroupExampleInput2" placeholder="link" >

    <label for="formGroupExampleInput2">1080P</label>
    <input type="text" name="webLink1080" class="form-control" id="formGroupExampleInput2" placeholder="link" > <br>


    <h3>Screenshots</h3>

    <label for="exampleFormControlFile1">Screenshot 1 : </label>
    <input type="file" name="screenshotno1" class="form-control-file" onchange="getSS1(event)" id="previewss1" required>

    <div id="screenshot1"></div><br>

    <label for="exampleFormControlFile1">Screenshot 2 : </label>
    <input type="file" name="screenshotno2" class="form-control-file" onchange="getSS2(event)" id="previewss2" >

    <div id="screenshot2"></div><br>


    <label for="exampleFormControlFile1">Screenshot 3 : </label>
    <input type="file" name="screenshotno3" class="form-control-file" onchange="getSS3(event)" id="previewss3" >

    <div id="screenshot3"></div><br>
    
    <p>Note : You can Update only <h6>BannerImage,Name,Description,Complete Season Download Links 480,720,1080,and ScreenShots.</h6> You Can not Update Webseries Episode Links. if you want to update it , you need to delete complete data and reinsert it.</p>
    <h5>Number of Episodes</h5>
    <input type="number" name="" id="nmep">
    <button type="button" name="cr" onclick="epFunction()">Create</button><br>

<div id="epdiv">

</div>
<script>
function epFunction() {
var nmep = document.getElementById("nmep").value;
const container = document.querySelector('#epdiv');

for (let i = 0; i < nmep; i++) {
  const label = document.createElement('label');
  label.textContent = `Ep ${i+1}: `;

  const input = document.createElement("INPUT");
  input.setAttribute("type", "text");
  input.setAttribute("value", "");
  input.setAttribute("name", "webEpisodes[]");

  const br = document.createElement('br');

  container.appendChild(label);
  container.appendChild(input);
  container.appendChild(br);
  
}
}
</script>

    
<br>
    <input type="submit" name="upload" value="Post" class="btn-primary" >

    </div>
</form>







<!-- scripts -->






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/action.js"></script>

<script type="text/javascript">

  // banner

function getImagePreview(event) {
  
   var UploadFieldID = "upload_file";
   var MaxSizeInBytes = 2097152;
   var fld = document.getElementById(UploadFieldID);
   if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
   {
      alert("The file size must be no more than " + parseInt(MaxSizeInBytes/1024/1024) + "MB");
      var image =  URL.createObjectURL(event.target.files[0]);
 var imagediv = document.getElementById('preview');
 var newimg=document.createElement('img');
 imagediv.innerHTML='Select different image';
 newimg.src="warning.gif";
 imagediv.appendChild(newimg)
      return false;
   }
else{
  var image =  URL.createObjectURL(event.target.files[0]);
 var imagediv = document.getElementById('preview');
 var newimg=document.createElement('img');
 imagediv.innerHTML='';
 newimg.src=image;
 imagediv.appendChild(newimg)
 return true;
}

}

// ss1


  function getSS1(event) {
  
  var UploadFieldID = "previewss1";
  var MaxSizeInBytes = 2097152;
  var fld = document.getElementById(UploadFieldID);
  if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
  {
     alert("The file size must be no more than " + parseInt(MaxSizeInBytes/1024/1024) + "MB");
     var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot1');
var newimg=document.createElement('img');
imagediv.innerHTML='Select different image';
newimg.src="warning.gif";
imagediv.appendChild(newimg)
     return false;
  }
else{
 var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot1');
var newimg=document.createElement('img');
imagediv.innerHTML='';
newimg.src=image;
imagediv.appendChild(newimg)
return true;
}

}

// ss2


  function getSS2(event) {
  
  var UploadFieldID = "previewss2";
  var MaxSizeInBytes = 2097152;
  var fld = document.getElementById(UploadFieldID);
  if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
  {
     alert("The file size must be no more than " + parseInt(MaxSizeInBytes/1024/1024) + "MB");
     var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot2');
var newimg=document.createElement('img');
imagediv.innerHTML='Select different image';
newimg.src="warning.gif";
imagediv.appendChild(newimg)
     return false;
  }
else{
 var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot2');
var newimg=document.createElement('img');
imagediv.innerHTML='';
newimg.src=image;
imagediv.appendChild(newimg)
return true;
}

}

// ss3

function getSS3(event) {
  
  var UploadFieldID = "previewss3";
  var MaxSizeInBytes = 2097152;
  var fld = document.getElementById(UploadFieldID);
  if( fld.files && fld.files.length == 1 && fld.files[0].size > MaxSizeInBytes )
  {
     alert("The file size must be no more than " + parseInt(MaxSizeInBytes/1024/1024) + "MB");
     var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot3');
var newimg=document.createElement('img');
imagediv.innerHTML='Select different image';
newimg.src="warning.gif";
imagediv.appendChild(newimg)
     return false;
  }
else{
 var image =  URL.createObjectURL(event.target.files[0]);
var imagediv = document.getElementById('screenshot3');
var newimg=document.createElement('img');
imagediv.innerHTML='';
newimg.src=image;
imagediv.appendChild(newimg)
return true;
}

}
</script>





</body>

</html>