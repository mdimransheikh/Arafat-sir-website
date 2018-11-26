<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Your Education list</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No.</th>
											<th>Degree</th>
											<th>Passing year</th>
											<th>Institution name</th>
											<th>Details</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
							<?php 
								$query = "SELECT * FROM education ORDER BY id DESC";
								$result = $db->select($query);
								if($result){
									$i=1;
									while($data = $result->fetch_assoc()){
							?>
								<tr class="odd gradeX">
									<td><?php echo $i; ?></td>
									<td><?php echo $data['degree_name']; ?></td>
									<td><?php echo $data['pass_year']; ?></td>
									<td><?php echo $data['institution']; ?></td>
									<td><?php echo $data['description']; ?></td>
									<td>
										<a href="editeducation.php?editId=<?php echo $data['id']; ?>">Edit</a>
										<a onclick="return confirm('Are you sure to delete?');"  href="deleteeducation.php?deleteId=<?php echo $data['id']; ?>">Delete</a>
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