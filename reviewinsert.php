<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="spotmymovieslogo.png" type="image/x-icon">
    <title>Document</title>

    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null,null,window.location.href);
      }
    </script>


</head>
<body>
    


<?php
// include db connection
include 'admin7875632522/config.php';

if (isset($_POST['send'])) {
   $USERNAME=$_POST['uname'];
   $username = mysqli_real_escape_string($con,  $USERNAME);

   $USEREMAIL=$_POST['email'];
   $useremail = mysqli_real_escape_string($con,  $USEREMAIL);

   $USERPHONE=$_POST['phone'];
   $userphone = mysqli_real_escape_string($con,  $USERPHONE);

   $MOVIEREQ=$_POST['mname'];
   $moviereq = mysqli_real_escape_string($con,  $MOVIEREQ);




   mysqli_query($con,"INSERT INTO `contact`(`userName`, `userEmail`, `userphone`, `Enquiry`) VALUES ('$username','$useremail','$userphone','$moviereq')");

?>

   <center>
   <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Thank you for getting in touch!</h1>
   
   <p> We appreciate you contacting us about [<?php echo "$MOVIEREQ" ?>]. Our Team Will Verify Your Request, ASAP!! .<span style='font-size:50px;'>&#9201;</span></p>
   
   <h2 class="setdiffont"> Have a great day! <span style='font-size:25px;'>&#128150;</span></h2>
   </center>
<?php
}
   

?>




</body>
</html>