<?php 
include "config.php";
$reqtype=$_REQUEST['req'];

if($reqtype=="state"){ ?> 
<select name="state" onchange="loadcity(this.value,'');" id="zone_id" class="form-select custom-select custom-select-sm">
	   <option value="">Select state</option>
	   <?php
	   $d=mysqli_query($conn,"SELECT * FROM tbl_states where country_id=".$_REQUEST['cid']);
	   while($g=mysqli_fetch_array($d)){
		   echo '<option value="'.$g['id'].'" >'.$g['name'].'</option>';
	   }
	echo '</select>';
}
if($reqtype="city"){ ?>
 <select name="city" id="city" class="form-select custom-select custom-select-sm">
	   <option value="">Select city</option><?php
	   $d=mysqli_query($conn,"SELECT * FROM tbl_cities where state_id=".$_REQUEST['sid']);
	   while($g=mysqli_fetch_array($d)){
		   echo '<option value="'.$g['id'].'" >'.$g['name'].'</option>';
	   }
	echo '</select>';
}
?>