<?php
include 'config.php';
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['user'])){

	header('location:index.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'config.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/cssfile4.css">
    <link rel="stylesheet" href="css2/cssfile6.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>


    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  
}

th, td {
  text-align: left;
  padding: 8px;
  overflow:hidden;
}

tr:nth-child(even){background-color: #f2f2f2}





/* new */

.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}


</style>


</head>
<body>
    

<!-- navbar -->

<?php 
include 'adminblocks/adminnav.php';
?>



<!-- bodycoding -->











<div style="overflow-x:auto;">
  <table border="1" width="100%" style='table-layout:fixed'>

  <col width="10%">
  <col width="20%">
  <col width="10%">
  <col width="10%">
  <col width="20%">
  <col width="10%">
  <col width="10%">
  <col width="10%">

    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Enquiry</th>
      <th><img src='delete.png'></th>
      <th><img src='viewuser.png'></th>
      <th><img src='reply.png'></th>
      
    </tr>

<?php

    include 'config.php';


if (isset($_POST['submit'])) {
  $search=$_POST['search'];


  // Get the total number of records from our table "students".
  $total_pages = $con->query("SELECT COUNT(*) FROM contact WHERE Id like '%$search%' or userName like '%$search%' or userEmail like '%$search%' ORDER BY Id DESC")->fetch_row()[0];

  // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
  // Number of results to show on each page.
  $num_results_on_page = 17;
            
  
  if ($stmt = $con->prepare("SELECT * FROM contact WHERE Id like '%$search%' or userName like '%$search%' or userEmail like '%$search%' ORDER BY Id DESC LIMIT ?,?")) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
    $stmt->close();
  }



  while ($row = $result->fetch_assoc()) {
    echo"
     <tr>
    
 <td>$row[Id]</td>
 <td>$row[userName]</td>
 <td>$row[userEmail]</td>
 <td>$row[userphone]</td>
 <td><div style='max-height:85px'>$row[Enquiry]</div></td>
 <td><a href='deleteuser.php? Id= $row[Id]'><img src='delete.png'></a></td>
 <td><a href='userrequest.php? Id= $row[Id]'><img src='viewuser.png'></a></td>
 <td><a href='reply.php? Id= $row[Id]'><img src='reply.png'></a></td>
    
    </tr>
    ";
 }
 
?>

</table>
</div>

<br><br>


<center>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="enquiries.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="enquiries.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="enquiries.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="enquiries.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="enquiries.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="enquiries.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="enquiries.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="enquiries.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="enquiries.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
          
</center>





<?php


} else {
  
  // Get the total number of records from our table "students".
  $total_pages = $con->query('SELECT COUNT(*) FROM contact ORDER BY Id DESC')->fetch_row()[0];

  // Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
  
  // Number of results to show on each page.
  $num_results_on_page = 17;
            
  
  if ($stmt = $con->prepare('SELECT * FROM contact ORDER BY Id DESC LIMIT ?,?')) {
    // Calculate the page to get the results we need from our table.
    $calc_page = ($page - 1) * $num_results_on_page;
    $stmt->bind_param('ii', $calc_page, $num_results_on_page);
    $stmt->execute(); 
    // Get the results...
    $result = $stmt->get_result();
    $stmt->close();
  }



  while ($row = $result->fetch_assoc()) {
    echo"
     <tr>
    
 <td>$row[Id]</td>
 <td>$row[userName]</td>
 <td>$row[userEmail]</td>
 <td>$row[userphone]</td>
 <td><div style='max-height:85px'>$row[Enquiry]</div></td>
 <td><a href='deleteuser.php? Id= $row[Id]'><img src='delete.png'></a></td>
 <td><a href='userrequest.php? Id= $row[Id]'><img src='viewuser.png'></a></td>
 <td><a href='reply.php? Id= $row[Id]'><img src='reply.png'></a></td>
    
    </tr>
    ";
 }
 ?>

</table>
</div>

<br><br>

<!-- pagination -->

<center>
<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="enquiries.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="enquiries.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="enquiries.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="enquiries.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="enquiries.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="enquiries.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="enquiries.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="enquiries.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="enquiries.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
</ul>
<?php endif; ?>
          
</center>





 
<?php

}


?>
   
   

   



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/action.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>
</html>