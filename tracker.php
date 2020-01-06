<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="myapptracker";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>

<header class="w3-container w3-center w3-padding-48 w3-light-grey">
    <h1 class="w3-xxxlarge"><b>My Application Tracker</b></h1>
    <h6> <span class="w3-tag">One spot to track all your applications</span></h6>
</header>

<div class="post w3-light-grey pad1 ">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="row">

<div class="pad">
<label for="state">State</label>
<br>
<select name="state">

	<option value="Alabama">Alabama</option>
	<option value="Alaska">Alaska</option>
	<option value="Arizona">Arizona</option>
	<option value="Arkansas">Arkansas</option>
	<option value="California">California</option>
	<option value="Colorado">Colorado</option>
	<option value="Connecticut">Connecticut</option>
	<option value="Delaware">Delaware</option>
	<option value="District of Columbia">District of Columbia</option>
	<option value="Florida">Florida</option>
	<option value="Georgia">Georgia</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Idaho">Idaho</option>
	<option value="Illinois">Illinois</option>
	<option value="Indiana">Indiana</option>
	<option value="Iowa">Iowa</option>
	<option value="Kansas">Kansas</option>
	<option value="Kentucky">Kentucky</option>
	<option value="Louisiana">Louisiana</option>
	<option value="Maine">Maine</option>
	<option value="Maryland">Maryland</option>
	<option value="Massachusetts">Massachusetts</option>
	<option value="Michigan">Michigan</option>
	<option value="Minnesota">Minnesota</option>
	<option value="Mississippi">Mississippi</option>
	<option value="Missouri">Missouri</option>
	<option value="Montana">Montana</option>
	<option value="Nebraska">Nebraska</option>
	<option value="Nevada">Nevada</option>
	<option value="New Hampshire">New Hampshire</option>
	<option value="New Jersey">New Jersey</option>
	<option value="New Mexico">New Mexico</option>
	<option value="New York">New York</option>
	<option value="North Carolina">North Carolina</option>
	<option value="North Dakota">North Dakota</option>
	<option value="Ohio">Ohio</option>
	<option value="Oklahoma">Oklahoma</option>
	<option value="Oregon">Oregon</option>
	<option value="Pennsylvania">Pennsylvania</option>
	<option value="Rhode Island">Rhode Island</option>
	<option value="South Carolina">South Carolina</option>
	<option value="South Dakota">South Dakota</option>
	<option value="Tennessee">Tennessee</option>
	<option value="Texas">Texas</option>
	<option value="Utah">Utah</option>
	<option value="Vermont">Vermont</option>
	<option value="Virginia">Virginia</option>
	<option value="Washington">Washington</option>
	<option value="West Virginia">West Virginia</option>
	<option value="Wisconsin">Wisconsin</option>
	<option value="Wyoming">Wyoming</option>
</select>
</div>

<div class="pad">
<label for="location">Location</label><br>
<input type="textbox" name="location" placeholder="location">
</div>

<div class="pad">
<label for="company">Company</label><br>
<input type="textbox" name="company" placeholder="company">
</div>

<div class="pad">
<label for="position">Position</label><br>
<input type="textbox" name="position" placeholder="position">
</div>

<div class="pad">
<label for="site">Site</label><br>
<input type="textbox" name="site" placeholder="site">
</div>

<div class="pad">
<label for="status">status</label><br>
<select name="status">
<option value="Applied">Applied</option>
<option value="Processing">Processing</option>
<option value="Rejected">Rejected</option>
</select>
</div>

</div>
<div class="row">
<div class="pad">
<label for="contacts">Contact</label><br>
<input type="textbox" name="contacts" placeholder="contacts">
</div>
</div>

<br>
<input type="submit" value="Submit">
<input type="reset">

</form> 
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$state=$_POST['state'];
$location=$_POST['location'];
$company=$_POST['company'];
$position=$_POST['position'];
$site=$_POST['site'];
$contacts=$_POST['contacts'];
$username="amarn19";
$status=$_POST['status'];
if($location!=null&&$company!=null&&$position!=null){
$sql="insert into myapp(state,location,company,position,site,contacts,username,status) values('$state','$location','$company','$position','$site','$contacts','$username','$status');" ;
mysqli_query($conn,$sql);
}
else
	 echo "<script type='text/javascript'>alert('Missing location,company and position ');</script>";

}
?>
<?php
$sql="select * from myapp;" ;
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
?>

<div class="container mb-3 mt-3">
<table class="table table-striped table-bordered mydatatable" style="width:100%;">

<thead>
<tr>
<th>State</th>
<th>Location</th>
<th>Company</th>
<th>Role</th>
<th>Site</th>
<th>Contacts</th>
<th>Status</th>
<th>Change</th>
</tr>
</thead>

<tbody>
<?php 
if($resultcheck>0)
{
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row['state']."</td><td>".$row['location']."</td><td>".$row['company']."</td><td>".$row['position']."</td><td>".$row['site']."</td><td>".$row['contacts']."</td><td>".$row['status']."</td><td>".$row['status']."</td>
</tr>";
	}
}

?>

</tbody>

<tfoot>
<tr>
<th>Name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
</tr>
</tfoot>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
    $('.mydatatable').DataTable();
</script>
</body>
</html>