<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/cssfile4.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/cssfile8.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>


<?php
include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `movies` WHERE Id=$ID");
$data = mysqli_fetch_array($Record);
?>



<center>
<h2 class="settextstyle" >Upload Movies</h2>
</center>

<!-- body upload -->
<form action="updatequery.php" method="POST" enctype="multipart/form-data">
  <div class="form-group formbg">
    <label for="exampleFormControlFile1">Movie Banner : </label>
    <input type="file" name="bannerImg" class="form-control-file" onchange="getImagePreview(event)" id="upload_file" required>

    <img class="setupimageview" src="../uploadImage/<?php echo $data['Bannerimage'] ?>" alt=""><br>
To-> <br>
<div id="preview"></div>
    <br>



    <label for="formGroupExampleInput">Movie Name : </label>
    <input type="text" name="movieName" class="form-control" id="formGroupExampleInput" placeholder="Moivie Name With Languages" value="<?php echo $data['Name'] ?>">

    <label for="formGroupExampleInput2">Description</label>
    <input type="text" name="movieDescription" class="form-control" id="formGroupExampleInput2" placeholder="Description" value="<?php echo $data['Description'] ?>">

    <select class="form-select form-select-lg mt-2 mb-1" aria-label=".form-select-lg example" name="categories">
  <option value="action">Action</option>
  <option value="adult">Adult</option>
  <option value="adventure">Adventure</option>
  <option value="bollywood">Bollywood</option>
  <option value="comedy">Comedy</option>
  <option value="dc">DC</option>
  <option value="drama">Drama</option>
  <option value="fantasy">Fantasy</option>
  <option value="hollywood">Hollywood</option>
  <option value="horror">Horror</option>
  <option value="mystry">Mystry</option>
  <option value="marvel">Marvel</option>
  <option value="netflix">Netflix</option>
  <option value="romance">Romance</option>
  <option value="scifi">SCI-FI</option>
 
</select>


    <label for="formGroupExampleInput2">480P</label>
    <input type="text" name="movieLink480" class="form-control" id="formGroupExampleInput2" placeholder="link" value="<?php echo $data['Link480'] ?>">

    <label for="formGroupExampleInput2">720P</label>
    <input type="text" name="movieLink720" class="form-control" id="formGroupExampleInput2" placeholder="link" value="<?php echo $data['Link720'] ?>">

    <label for="formGroupExampleInput2">1080P</label>
    <input type="text" name="movieLink1080" class="form-control" id="formGroupExampleInput2" placeholder="link" value="<?php echo $data['Link1080'] ?>"> <br>


    <h3>Screenshots</h3>

    <label for="exampleFormControlFile1">Screenshot 1 : </label>
    <input type="file" name="screenshotno1" class="form-control-file" onchange="getSS1(event)" id="previewss1" required>

    <img class="setupimageview" src="../screenshots/<?php echo $data['Screenshot1'] ?>" alt=""><br>
    To-> <br>
    <div id="screenshot1"></div><br>



    <label for="exampleFormControlFile1">Screenshot 2 : </label>
    <input type="file" name="screenshotno2" class="form-control-file" onchange="getSS2(event)" id="previewss2" >

    <img class="setupimageview" src="../screenshots/<?php echo $data['Screenshot2'] ?>" alt=""><br>
    To-> <br>
    <div id="screenshot2"></div><br>




    <label for="exampleFormControlFile1">Screenshot 3 : </label>
    <input type="file" name="screenshotno3" class="form-control-file"  onchange="getSS3(event)" id="previewss3">

    <img class="setupimageview" src="../screenshots/<?php echo $data['Screenshot3'] ?>" alt=""><br>
    To-> <br>
    <div id="screenshot3"></div><br>



    <input type="hidden" name="Id" value="<?php echo $data['Id'] ?>">

    <input type="submit" name="update" value="Update" class="btn-primary">

    </div>
</form>
    

<!-- update code -->







<!-- script -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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