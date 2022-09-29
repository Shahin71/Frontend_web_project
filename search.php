<!DOCTYPE html->
<html>

    <head>
         <title>Library Books Collection</title>
		 <link rel="stylesheet" type="text/css" href="library_info.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body>
	<div id="nav">
	<h3>Library Books Collection</h3>
    <h5>Searching Books:</h5>
	
	

<!-- <div id="input-group-addon">
<i class="icon-list">
</i>
</span> -->
<button style="font-size:18px"><i class="fa fa-address-book" style="font-size:20px;color:red"></i></button>
<?php 
$con = mysqli_connect("localhost", "root", "", "mis");
$sql = "SELECT * from departments";

$result = mysqli_query($con, $sql);

?>

<select type="text" class="form-control" name="event_name" id="select_event" style="font-size:20px;margin:0px;">
      <option disabled selected>Select Department</option>
          
		 <?php 
		  while( $row = mysqli_fetch_assoc($result)){
			  //print_r($row);
		 ?>
		<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
		<?php 
		}
		?>

</select>
          <p id="event-log" style="color:Yellow;font-size: 20px;margin:0px;display: none;"></p>
		   <input type="text" placeholder="Book Name"/><br> 
	
	   <div id="fin">
	   <input type="submit" value="Find">
	   </div>
	   <div id="note">
       <p> **Please,Enter book name to find in the library.**</p>
	   </div>
      </body>
     </html>