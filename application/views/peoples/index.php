<div class="container">
	<h3 class="mt-3">List User</h3>

	<div class="row">
		<div class="col-md-8">
			<form action="<?= base_url('peoples'); ?>" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Seacrh Name.." name="keyword">
				  <div class="input-group-append">
				    <input type="submit" name="submit"class="btn btn-primary">
				  </div>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-md-10">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name User</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($peoples as $people) : ?>
					<tr>
						<th><?= ++$start; ?></th>
						<td><?= $people['name']; ?></td>
						<td>
							<a href="" class="badge badge-success" data-toggle="modal" data-target="#viewDetail">View Detail</a>
						</td>	
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

<!-- modal -->

<div class="modal fade" id="viewDetail" tabindex="-1" role="dialog" aria-labelledby="viewDetailLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 800px;">
      <div class="modal-header">
        <h5 class="modal-title" id="viewDetailLabel">Detail Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-light">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Address</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($peoples as $people) : ?>
		    <tr>
		      <th scope="row">#</th>
		      <td><?= $people['name'];  ?></td>
		      <td><?= $people['email'];  ?></td>
		      <td><?= $people['address'];  ?></td>
		    </tr>
		    <?php endforeach; ?>
		</table>    
      </div>
    </div>
  </div>
</div>