<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
	<div class="span9">
		<div class="content">

		<div class="module">
			<div class="module-head">
				<h3>About me</h3>
			</div>
<?php 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		$position = mysqli_real_escape_string($db->link, $_POST['position']);
		$dept = mysqli_real_escape_string($db->link, $_POST['dept']);
		$institute = mysqli_real_escape_string($db->link, $_POST['institute']);
		$dob = mysqli_real_escape_string($db->link, $_POST['dob']);
		$phone = mysqli_real_escape_string($db->link, $_POST['phone']);
		$email = mysqli_real_escape_string($db->link, $_POST['email']);
		$address = mysqli_real_escape_string($db->link, $_POST['address']);
		$about = mysqli_real_escape_string($db->link, $_POST['about']);
		$fb_link = mysqli_real_escape_string($db->link, $_POST['fb_link']);
		$yt_link = mysqli_real_escape_string($db->link, $_POST['yt_link']);
		$git_link = mysqli_real_escape_string($db->link, $_POST['git_link']);
		$tw_link = mysqli_real_escape_string($db->link, $_POST['tw_link']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;

		if($name == '' || $position == '' || $institute == '' || $dept == '' || $dob == '' || $phone == '' || $email == ''){
			echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
		}
		if(!empty($file_name)){
				if (in_array($file_ext, $permited) === false) {
				echo "<span style='font-size:18px;color:red'>You can upload only:-"
				.implode(', ', $permited)."</span>";
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "UPDATE about_me
							SET name='$name',
							image='$uploaded_image',
							position='$position',
							dept = '$dept',
							institute = '$institute',
							dob = '$dob',
							phone = '$phone',
							email = '$email',
							address = '$address',
							about = '$about',
							fb_link = '$fb_link',
							yt_link = '$yt_link',
							git_link = '$git_link',
							tw_link = '$tw_link'
							WHERE id='1'";
				$updated_rows = $db->update($query);
				if ($updated_rows) {
					echo "<span style='font-size:18px;color:green'>Your about Is Updated Successfully.
					</span>";
				}else {
					echo "<span style='font-size:18px;color:red'>Your about is not Updated !!</span>";
				}
		}
		}else{
			$query = "UPDATE about_me
						SET name='$name',
						position='$position',
						dept = '$dept',
						institute = '$institute',
						dob = '$dob',
						phone = '$phone',
						email = '$email',
						address = '$address',
						about = '$about',
						fb_link = '$fb_link',
						yt_link = '$yt_link',
						git_link = '$git_link',
						tw_link = '$tw_link'
						WHERE id='1'";
			$updated_rows = $db->update($query);
			if ($updated_rows) {
				echo "<span style='font-size:18px;color:green'>Your about Is Updated Successfully.
				</span>";
			}else {
				echo "<span style='font-size:18px;color:red'>Your about is not Updated !!</span>";
			}
		}
    }
?>
			<div class="module-body">
			<?php 
				$query = "SELECT * FROM about_me WHERE id='1'";
				$data = $db->select($query);
				if($data){
					$result = mysqli_fetch_array($data);
			?>
				<form class="form-horizontal row-fluid" action="" method="post" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label" for="basicinput">Name</label>
						<div class="controls">
                            <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" class="span8">
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
						<label class="control-label" for="basicinput">Position</label>
						<div class="controls">
                            <input type="text" id="name" name="position" value="<?php echo $result['position']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Institute</label>
						<div class="controls">
                            <input type="text" id="name" name="institute" value="<?php echo $result['institute']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Department</label>
						<div class="controls">
                            <input type="text" id="name" name="dept" value="<?php echo $result['dept']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Date of birth</label>
						<div class="controls">
                            <input type="date" id="name" name="dob" value="<?php echo $result['dob']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Mobile</label>
						<div class="controls">
                            <input type="text" id="name" name="phone" value="<?php echo $result['phone']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Email</label>
						<div class="controls">
                            <input type="email" id="name" name="email" value="<?php echo $result['email']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Address</label>
						<div class="controls">
                            <input type="text" id="name" name="address" value="<?php echo $result['address']; ?>" class="span8">
                        </div>
					</div>
					
                    <div class="control-group">
                        <label class="control-label" for="basicinput">About me: </label>
                        <div class="controls">
                            <textarea class="span8" rows="7" name="about">
                                <?php echo $result['about']; ?>
                            </textarea>
                        </div>
                    </div> 

					<div class="control-group">
						<label class="control-label" for="basicinput">Facebook</label>
						<div class="controls">
                            <input type="text" id="name" name="fb_link" value="<?php echo $result['fb_link']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Youtube</label>
						<div class="controls">
                            <input type="text" id="name" name="yt_link" value="<?php echo $result['yt_link']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Github</label>
						<div class="controls">
                            <input type="text" id="name" name="git_link" value="<?php echo $result['git_link']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Twitter</label>
						<div class="controls">
                            <input type="text" id="name" name="tw_link" value="<?php echo $result['tw_link']; ?>" class="span8">
                        </div>
					</div>

					<div class="control-group">
						<div class="controls">
							<button type="submit" name="submit" class="btn">Update!</button>
						</div>
					</div>
				</form>
			<?php } ?>
			</div>
		</div>

			
			
		</div><!--/.content-->
	</div><!--/.span9-->
<?php include 'inc/footer.php'; ?>