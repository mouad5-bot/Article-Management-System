<!-- Produts MODAL -->
<div class="modal fade" id="modal-articl">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/article.php" method="POST" id="form-articl" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Articl</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing articl Index  -->
						<input type="hidden" name="id" id="articl-id">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input  type="text" class="form-control" name="title" id="title"/>
						</div>
						<div class="mb-3">
							<label class="form-label">Category</label> 
							<select class="form-select" name="category" id="category">
							    <option value="">Please select</option>
                                <?php 
                                    // $table = 'categorie';
                                    // $data = getdata($table);
                                    // foreach ($data as $categorie) {
                                    //     echo "<option value=".$categorie['id']."> $categorie[name] </option>";
                                    // }
                                ?>
                                    <option value="">Please select</option> 
                                    <option value="1">Ordinateurs </option>
                                    <option value="2">Accessoires </option>

							</select>
						</div>
						<div class="mb-2">
							<label class="form-label">image</label> 
							<input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
    						<textarea name="description" id="editor"></textarea>
							<!-- <textarea class="form-control" rows="5" name="description" id="articl-description"></textarea> -->
						</div>
					
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save_articl"   class="btn btn-primary articl-action-btn" id="articl-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
