<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add your new education field</h3>
							</div>
							<div class="module-body">
<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$position    = mysqli_real_escape_string($db->link, $_POST['position']);
		$institution = mysqli_real_escape_string($db->link, $_POST['institution']);
		$from_to     = mysqli_real_escape_string($db->link, $_POST['from_to']);
		$description = mysqli_real_escape_string($db->link, $_POST['description']);

		if($position == "" || $from_to == "" || $institution == ""){
			echo "<span style='font-size:18px;color:red'>Field must not be empty !!</span>";
		}else{
			$query = "INSERT INTO experience(position,institution, from_to, description) VALUES('$position', '$institution', '$from_to', '$description')";
			$data = $db->insert($query);
				if($data){
					echo "<span style='font-size:18px;color:green'>Experience Field uploaded successfully !!</span>";
				}else{
					echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
				}
		}
	}
?>
		<form class="form-horizontal row-fluid" action="" method="post">
			<div class="control-group">
				<label class="control-label" for="basicinput">Name of position: </label>
				<div class="controls">
					<input type="text" id="basicinput" name="position" class="span8">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">Institution name: </label>
				<div class="controls">
					<input type="text" id="basicinput" name="institution" class="span8">	
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">From - to Date: </label>
				<div class="controls">
					<input type="text" id="basicinput" name="from_to" class="span8">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="basicinput">Description</label>
				<div class="controls">
					<textarea class="span8" rows="7" name="description"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn">Upload</button>
				</div>
			</div>
		</form>
		</div>
	</div>			
						
</div><!--/.content-->
</div><!--/.span9-->
<?php include 'inc/footer.php'; ?>