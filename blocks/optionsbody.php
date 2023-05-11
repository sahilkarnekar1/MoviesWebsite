

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>


<div class="options" > 
      <!-- options -->
<!-- donload -->

     <div class="howdownload">
      <center>
        <h3>How To Download</h3>
      </center>
<div class="videoWrapper">
     <!-- Copy & Pasted from YouTube -->
    <iframe width="560" height="349" src="https://drive.google.com/file/d/1c8Mdsceqvl-KtexcDlxE_TcI4YeQ2lX3/preview" frameborder="0" allowfullscreen="true"></iframe>
</div>
</div> 

<!-- popular -->

<?php include 'admin7875632522/config.php';
$Pquery="SELECT * FROM movies WHERE Popular='pop'";
$Presult = $con->query($Pquery);

if ($Presult->num_rows > 0) {
  // output data of each row
  while($Prow = $Presult->fetch_assoc()) { ?>


<?php echo "<a class='atextdeco' href='viewmovie.php?Id=".$Prow['Id']."'>"; ?> 
    <div class="pop">
    <center>
      <h3>Popular</h3>
    </center>
  
  <img src="uploadImage/<?php echo $Prow['Bannerimage']; ?>" alt="">
  
  <h2 class="Pname"><?php echo $Prow['Name']; ?></h2>
  
  </div>
  <?php echo "</a>"; ?>
  <?php } ?>
<?php } ?> 





    






<!-- social -->


<div class="social">
<center>
    <h3 style="margin-bottom:30px;">Follow Us</h3>
  </center>
  <div class="socialimg">
   <a href="#"> <img src="logo/git.gif" alt="" class="soimg"></a>
   <a href="#"><img src="logo/insta.webp" alt="" class="soimg"></a>
   <a href="https://t.me/spotmymovies" target="_blank"><img src="logo/tele.webp" alt="" class="soimg"></a>
  </div>
</div>



<!-- categories -->
<center>
    <div class="cat">
    <ul class="list-group">

    <a href="cataction.php"><li class="list-group-item">Action</li></a> 
       <a href="catadult.php"><li class="list-group-item">Adult</li></a> 
       <a href="catadventure.php"><li class="list-group-item">Adventure</li></a> 
       <a href="catbollywood.php"><li class="list-group-item">Bollywood</li></a> 
       <a href="catcomedy.php"><li class="list-group-item">Comedy</li></a>
       <a href="catdc.php"><li class="list-group-item">DC</li></a> 
       <a href="catdrama.php"><li class="list-group-item">Drama</li></a> 
       <a href="catfantasy.php"><li class="list-group-item">Fantasy</li></a> 
       <a href="cathollywood.php"><li class="list-group-item">Hollywood</li></a> 
       <a href="cathorror.php"><li class="list-group-item">Horror</li></a> 
       <a href="catmystry.php"><li class="list-group-item">Mystry</li></a> 
       <a href="catmarvel.php"><li class="list-group-item">Marvel</li></a> 
       <a href="catnetflix.php"><li class="list-group-item">Netflix</li></a> 
       <a href="catromance.php"><li class="list-group-item">Romance</li></a> 
       <a href="catsci.php"><li class="list-group-item">SCI-FI</li></a>
       <a href="catweb.php"><li class="list-group-item">Webseries</li></a>

</ul>
    </div>
</center>




<!-- form -->
<div class="movieform">
<form action="reviewinsert.php" method="post">
<div class="form-group">
    <label for="exampleInputPassword1">Your Name</label>
    <input name="uname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone No:</label>
    <input name="phone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Phone(Not mandatory)">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Movie Name</label>
    <textarea name="mname" class="contact-form-email-message" cols="25" id="ContactForm1_contact-form-email-message" name="email-message" rows="5" required></textarea>
  </div>
  
  <button type="submit" name="send" class="btn btn-primary">Submit</button>
</form>

</div>




</div>
</body>
</html>