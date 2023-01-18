<?php
    require_once('../includes/head.php');
    require_once('../includes/navbar.php');
    session_start();
?>
	
    <main class="container">
		<div class="row row-cols-lg-4 row-cols-sm-2 m-3 d-flex justify-content-between">
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">categories</div>
				<div class="card-body">
						<h5 class="card-title text-success"> test </h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">Articls</div>
				<div class="card-body">
					<h5 class="card-title text-success"> test </h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center" style="max-width: 18rem;">
				<div class="card-header h4">Admins </div>
				<div class="card-body">
						<h5 class="card-title text-success"> test MAD</h5>
				</div>
			</div>
			<div class="card text-black bg-light text-center"  style="max-width: 18rem;">
				<div class="card-header h4 ">Posts</div>
				<div class="card-body">
						<h5 class="card-title text-success"> test </h5>
				</div>
			</div>
		</div>
		<hr>
		<div class="d-flex justify-content-between mt-5">
			<div class='h3'>
				<u>List of products :</u> 
			</div>
			<div class=" mb-5">
				<a href="#modal-product" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add Product</a>
			</div>
		</div>
        <div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">image</th>
						<th scope="col">Product </th>
						<th scope="col">quantity</th>
						<th scope="col">price</th>
						<th scope="col">category</th>
						<th scope="col">Description</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"> id</th>
						<td> test img</td>
						<td> test </td>
						<td> test</td>
						<td> test</td>
						<td> test</td>
						<td title="">test...</td>
						<td>
							<a href="#"><button type="button" class="btn btn-outline-info">Edit</button></a>	
						</td>
						<td>	
							<a href="#"><button type="button" 	name="delete" class="btn btn-outline-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
    </main>

	<?php
		require_once('../includes/footer.php');
	?>
