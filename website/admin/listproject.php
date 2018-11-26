<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>My project list</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No.</th>
											<th>Title</th>
											<th>Image</th>		
											<th>Description</th>	
											<th>Members</th>		
											<th>Date</th>	
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
							<?php 
								$query = "SELECT * FROM project ORDER BY id DESC";
								$result = $db->select($query);
								if($result){
									$i=1;
									while($data = $result->fetch_assoc()){
							?>
								<tr class="odd gradeX">
									<td><?php echo $i; ?></td>
									<td><?php echo $data['title']; ?></td>
									<td><img src="<?php echo $data['image']; ?>" alt="image" width="50px" height="50px" /></td>
									<td><?php echo $fm->textShorten($data['description'], 50); ?></td>
									<td><?php echo $data['contributors']; ?></td>
									<td><?php echo $data['dat']; ?></td>
									<td>
										<a href="editproject.php?editId=<?php echo $data['id']; ?>">Edit</a> 
										<a onclick="return confirm('Are you sure to delete?');"  href="deleteproject.php?deleteId=<?php echo $data['id']; ?>">Delete</a>
					 				</td>
								</tr>
							<?php 
								$i++;
								} } 
							?>
									</tbody>
								</table>
							</div>
						</div><!--/.module-->
						
<?php include 'inc/footer.php'; ?>

<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>