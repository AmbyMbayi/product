
<div class="row">
	<div class="col-lg-12 margin-tb">
		<br>
		<div class="pull-left">
			<h2>Crud application</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="<?php echo base_url('items/create')?>">create a new Item</a>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data as $item){?>
			<tr>
				<td><?php echo $item->title; ?></td>
				<td>php <?php echo $item->description; ?></td>
				<td>
					<form method="DELETE" action="<?php echo base_url('items/delete/'.$item->id);?>">
						<a class="btn btn-info" href="<?php echo base_url('items/'.$item->id)?>">show</a>
						<a class="btn btn-primary" href="<?php echo base_url('items/edit/'.$item->id)?>">Edit</a>
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
		<?php }?> 
	</tbody>
</table>