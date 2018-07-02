<?php
	include ("config.php");
	$get_noti_qwr = "select * from 112_noti where seen_unseen = 'u'";
	$qry = mysqli_query($objCon,$get_noti_qwr);
	$count=mysqli_num_rows($qry);
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<form action="" method="POST" >
		<input style="<?php
			if($count > 0 ){
				echo "color: white;border:none;background-color: red";
			}
		 ?>" type="button" name="submit" value="notification"  id="myBtn" <?php echo '('.$count.')' ?>"/>

</form>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
}

.headtext {background-color: pink; float: left;font-size: 26px;font-weight: bold; width: 100%;}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>




<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <span class="close">&times;</span>
     <p>
			 	<span class="headtext">SOMETHING NEW</span><br><br>
			 	<?php
		 		if(isset($_POST['submit']))
		 		{
		 				while ($r=mysqli_fetch_array($qry))
		 				{
		 						echo "<br>Something happend,It is:"." "   .$r['ann']." "   ."Check calendar on"." "   .$r['dates'];
		 				}

		 		}
		 		$update_query = "update 112_noti SET seen_unseen='s' where seen_unseen='u'";
		 		mysqli_query($objCon,$update_query);
		   ?> </p>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
		window.location.reload();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
				window.location.reload();
    }
}
</script>
</head>

</html>
