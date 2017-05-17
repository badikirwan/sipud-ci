		<!-- Breadcrumb -->
		<?php echo $this->breadcrumb->output(); ?>
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title"><?php echo $title?></h4>
						<ul class="panel-tool-options">
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i>Options</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#" id="delete"><i class="icon-arrows-ccw"></i> Update data</a></li>
									<li><a href="#" data-toggle="modal" data-target="#modal-agama"><i class="icon-plus"></i> Add data</a></li>
								</ul>
							 </li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
						 	<table class="table table-hover">
								<thead>
									<tr>
										<th width="20%">#</th>
										<th width="50%">Agama</th>
										<th>Aksi</th>
									</tr>
								</thead>
							 <tbody>
							 <?php
							 $no = 0;
							 foreach ($all as $key) :
								 $no++; ?>
								 <tr>
 									<td><?php echo $no;?></td>
 									<td><?php echo $key->agama?></td>
 									<td>
										<button class="btn btn-primary btn-sm" type="button"><i class=" icon-pencil"></i> Edit</button>
										<button onclick="delete_agama(<?php echo $key->id_agama?>)"class="btn btn-secondary btn-sm delete" type="button"><i class="icon-trash"></i> Delete</button>
									</td>
 								</tr>
							<?php endforeach ?>
							 </tbody>
						 	</table>
					 	</div>
					</div>
				</div>
			</div>
		</div>

		<div id="modal-agama" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<form action="#" id="form">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title">Add data</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-md-3">ID</label>
							<div class="col-md-9">
								<input type="text" name="id" placeholder="Email" class="form-control">
							</div>
						</div>
						<br>
						<div class="form-group">
							<label class="col-md-3">Agama</label>
							<div class="col-md-9">
								<input type="text" name="agama" placeholder="Agama" class="form-control">
							</div>
						</div>
					</div>
					<br>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button id="save" type="submit" class="btn btn-primary">Save</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</form>
		</div>

		<script type="text/javascript">
		$(document).ready(function() {
			$("#save").click(function() {
				$.ajax({
					url : '<?php echo base_url('agama/add')?>',
					data : $('#form').serialize(),
					type : 'POST',
					success : function(data) {
						location.reload();
					},
					error : function(data) {

					}
				});
			});
		});

		function delete_agama(id) {
		bootbox.dialog({
			message: "Are you sure you want to delete ?",
			buttons: {
				success: {
					label: "No",
					className: "btn-default",
					callback: function() {
						$('.bootbox').modal('hide');
					}
				},
				danger: {
					label: "Yes",
					className: "btn-info",
					callback: function() {
						$.ajax({
							type: 'POST',
							url: '<?php echo base_url('agama/delete')?>/'+id,
						}).done(function(response){
							location.reload();
						}).fail(function(){
							bootbox.alert('Something Went Wrong...');
						})
					}
				}
			}
		})
		}
		</script>
