<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
        echo "<script>location.href = 'listproject.php';</script>";
    }else{
        $editId = $_GET['editId'];
    }
?>

    <div class="span9">
        <div class="content">
        <div class="module">

<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $description = mysqli_real_escape_string($db->link, $_POST['description']);
        $contributors = mysqli_real_escape_string($db->link, $_POST['contributors']);
        $dat = mysqli_real_escape_string($db->link, $_POST['dat']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;

		if($title == '' || $description == '' || $contributors == '' || $dat == ''){
			echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
		}
		if(!empty($file_name)){
				if (in_array($file_ext, $permited) === false) {
				echo "<span style='font-size:18px;color:red'>You can upload only:-"
				.implode(', ', $permited)."</span>";
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "UPDATE thesis
                            SET title='$title',
                            image='$uploaded_image',
                            description='$description',
                            contributors = '$contributors',
                            dat = '$dat'
                            WHERE id = $editId";
				$updated_rows = $db->update($query);
				if ($updated_rows) {
					echo "<span style='font-size:18px;color:green'>Your project Is Updated Successfully.
					</span>";
				}else {
					echo "<span style='font-size:18px;color:red'>Your project is not Updated !!</span>";
				}
		}
		}else{
			$query = "UPDATE thesis
                        SET title='$title',
                        description='$description',
                        contributors = '$contributors',
                        dat = '$dat'
                        WHERE id = $editId";
			$updated_rows = $db->update($query);
			if ($updated_rows) {
				echo "<span style='font-size:18px;color:green'>Your thesis Is Updated Successfully.
				</span>";
			}else {
				echo "<span style='font-size:18px;color:red'>Your thesis is not Updated !!</span>";
			}
		}
    }
?>

            <div class="module-head">
                <h3>Edit your thesis data</h3>
            </div>
            <div class="module-body">
            <?php 
                $querySelect = "SELECT * FROM thesis WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Title : </label>
                        <div class="controls">
                            <input type="text" id="name" name="title" value="<?php echo $result['title']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Image: </label>
                        <div class="controls">
                            <img src="<?php echo $result['image']; ?>" width="100px" height="80px" />
                            <input type="file" name="image"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Details: </label>
                        <div class="controls">
                            <textarea class="span12" rows="7" name="description">
                                <?php echo $result['description']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Contributors : </label>
                        <div class="controls">
                            <input type="text" id="student" name="contributors" value="<?php echo $result['contributors']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Date: </label>
                        <div class="controls">
                            <input type="date" id="sesson" name="dat" value="<?php echo $result['dat']; ?>" class="span8">
                        </div>
                    </div>                   
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" name="submit" class="btn">Update!</button>
                        </div>
                    </div>
                </form>
            <?php } } ?>
            </div>
        </div>

            
            
        </div><!--/.content-->
    </div><!--/.span9-->
<?php include 'inc/footer.php'; ?>