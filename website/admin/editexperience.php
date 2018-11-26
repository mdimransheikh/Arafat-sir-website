<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
        header("Location:listexperience.php");
    }else{
        $editId = $_GET['editId'];
    }
?>
    <div class="span9">
        <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Your Experience Field</h3>
            </div>
            <div class="module-body">
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $position    = mysqli_real_escape_string($db->link, $_POST['position']);
        $institution = mysqli_real_escape_string($db->link, $_POST['institution']);
        $from_to     = mysqli_real_escape_string($db->link, $_POST['from_to']);
        $description = mysqli_real_escape_string($db->link, $_POST['description']);

        if($position == '' || $institution == '' || $from_to == ''){
            echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
        }else{
            $query = "UPDATE experience
                        SET 
                        position='$position',
                        institution='$institution',
                        from_to='$from_to',
                        description='$description'
                    WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Experience Field Updated Successfully.!!
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Experience Field is not Updated.!!</span>";
            }
        }
    }
?>
            <?php 
                $querySelect = "SELECT * FROM experience WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Position: </label>
                        <div class="controls">
                            <input type="text" id="degree" name="position" value="<?php echo $result['position']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Institution: </label>
                        <div class="controls">
                            <input type="text" id="year" name="institution" value="<?php echo $result['institution']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">From to date: </label>
                        <div class="controls">
                            <input type="text" id="name" name="from_to" value="<?php echo $result['from_to']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description: </label>
                        <div class="controls">
                            <textarea class="span12" rows="7" name="description">
                                <?php echo $result['description']; ?>
                            </textarea>
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