<?php
    include('../scripts/category.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CultureDev | Articls</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="in this website you can find all the gaming products that you need" name="description" />
		
		<!-- ================== BEGIN core-css ================== -->
		<link rel="stylesheet" href="../Assets/css/main.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<!-- ================== END core-css ================== -->
	</head>
<body>
<?php
    require_once('../includes/navbar.php');
    // session_start();
?>
	<!--============== statistics ===============-->
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
		<!--==============  category ===============-->
		<div class="d-flex justify-content-between mt-5">
			<div class='h3'>
				<u>List of categories :</u> 
			</div>
			<div class=" mb-5">
				<a href="#modal-cat" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add category</a>
			</div>
		</div>
        <div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">name</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					
				<?php
					$data= $catData;
					foreach($data as $row)
					{
				?>
					<tr id="category<?=$row['id'] ?>">
						<th scope="row"> <?=$row['id'] ?> </th>
						<td> <?=$row['name'] ?> </td>
						<td> 
							<button type="button" 
								onclick="getdata(<?=$row['id'] ?> , `<?=$row['name'] ?>`)" 
								data-bs-target="#modal-edit" data-bs-toggle="modal" 
								id="edit-category" class="btn btn-outline-info"
								>Edit
							</button>

							<button type="button" onclick="deleteCategory(<?=$row['id'] ?>)" id="delete-category" name="delete" class="btn btn-outline-danger">Delete</button>
						</td>
					</tr>
				<?php } ?>	
				</tbody>
			</table>
		</div>
		<!--==============  articl ===============-->
		<hr>
		<div class="d-flex justify-content-between mt-5">
			<div class='h3'>
				<u>List of Articls :</u> 
			</div>
			<div class=" mb-5">
				<a href="#modal-articl" data-bs-toggle="modal"  class="btn btn-success btn-rounded px-4 rounded-pill">Add Articl</a>
			</div>
		</div>
        <div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">image</th>
						<th scope="col">Title </th>
						<th scope="col">category</th>
						<th scope="col">Descrition</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"> id</th>
						<td> test img</td>
						<td> test </td>
						<td> test</td>
						<td title="">test...</td>
						<td>
							<a href="#"><button type="button" class="btn btn-outline-info">Edit</button></a>	
							<a href="#"><button type="button" 	name="delete" class="btn btn-outline-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
    </main>

	<?php
    	require_once('../includes/modal.php');
    	require_once('../includes/modalCat.php');
		require_once('../includes/footer.php');
	?>
