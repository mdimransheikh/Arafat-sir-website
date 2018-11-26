<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

	<div class="span9">
		<div class="content">
			<div class="module">
				<div class="module-head">
					<h3>Add new thesis</h3>
				</div>
		<div class="module-body">

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $title 		  = mysqli_real_escape_string($db->link, $_POST['title']);
            $description  = mysqli_real_escape_string($db->link, $_POST['description']);
            $contributors = mysqli_real_escape_string($db->link, $_POST['contributors']);
            $dat 		  = mysqli_real_escape_string($db->link, $_POST['dat']);

			$permited  = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "upload/".$unique_image;

            if($title == '' || $description == '' || $contributors == '' || $dat == ''){
                echo "<span class='error'>Field must not be empty. !!</span>";
            }else{
				if (in_array($file_ext, $permited) === false) {
					echo "<span style='font-size:18px;color:red'>You can upload only:-"
					.implode(', ', $permited)."</span>";
				}else{
					move_uploaded_file($file_temp, $uploaded_image);
					$query = "INSERT INTO thesis(title, image, description, contributors, dat) VALUES('$title', '$uploaded_image', '$description', '$contributors', '$dat')";
					$inserted_rows = $db->insert($query);
						if ($inserted_rows) {
							echo "<span style='font-size:18px;color:green'>New thesis is uploaded successfully.!!
							</span>";
						}else {
							echo "<span style='font-size:18px;color:red'>Something went wrong !!</span>";
					}
				}
        }
    }
    ?>

	<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="basicinput">Title : </label>
			<div class="controls">
				<input type="text" name="title" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Image : </label>
			<div class="controls">
				<input type="file" name="image" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Thesis description: </label>
			<div class="controls">
				<textarea class="span8" rows="7" name="description"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Contributors: </label>
			<div class="controls">
				<input type="text" name="contributors" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Date: </label>
			<div class="controls">
				<input type="date" name="dat" class="span8" value="<?php echo date("Y-m-d"); ?>">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn">Upload!</button>
			</div>
		</div>
	</form>
</div>
</div>
</div><!--/.content-->
</div><!--/.span9-->
<?php include 'inc/footer.php'; ?>