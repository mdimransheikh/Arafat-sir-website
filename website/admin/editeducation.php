<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
    if(!isset($_GET['editId']) || $_GET['editId']==NULL){
        header("Location:listeducation.php");
    }else{
        $editId = $_GET['editId'];
    }
?>
    <div class="span9">
        <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Your Education Field</h3>
            </div>
            <div class="module-body">
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $degree_name = mysqli_real_escape_string($db->link, $_POST['degree_name']);
        $pass_year = mysqli_real_escape_string($db->link, $_POST['pass_year']);
        $institution = mysqli_real_escape_string($db->link, $_POST['institution']);
        $description = mysqli_real_escape_string($db->link, $_POST['description']);

        if($degree_name == '' || $pass_year == '' || $institution == ''){
            echo "<span style='font-size:18px;color:red'>Field must not be empty. !!</span>";
        }else{
            $query = "UPDATE education
                        SET 
                        degree_name='$degree_name',
                        pass_year='$pass_year',
                        institution='$institution',
                        description='$description'
                    WHERE id='$editId'";
            $updated_rows = $db->update($query);
            if ($updated_rows) {
             echo "<span style='font-size:18px;color:green'>Education Field Updated Successfully.
             </span>";
            }else {
             echo "<span style='font-size:18px;color:red'>Education Field is not Updated !!</span>";
            }
        }
    }
?>
            <?php 
                $querySelect = "SELECT * FROM education WHERE id='$editId'";
                $data = $db->select($querySelect);
                if($data){
                    while($result = $data->fetch_assoc()){
            ?>
                <form class="form-horizontal row-fluid" action="" method="post">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Degree: </label>
                        <div class="controls">
                            <input type="text" id="degree" name="degree_name" value="<?php echo $result['degree_name']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Passing year: </label>
                        <div class="controls">
                            <input type="text" id="year" name="pass_year" value="<?php echo $result['pass_year']; ?>" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Institute name: </label>
                        <div class="controls">
                            <input type="text" id="name" name="institution" value="<?php echo $result['institution']; ?>" class="span8">
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