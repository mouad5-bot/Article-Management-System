CKEDITOR.replace("editor");
CKEDITOR.replace("description-edit-articl");

/********  dashboard update  popup modal ********/
// alert('testttt');
// $(document).ready(function(){
//   $("#edit-category").on('click', function(){
//     $("#modal-edit").modal('show');
//   });
// });

function getdata(id, name) {
  document.getElementById("edit-cat-id").value = id;
  document.getElementById("edit-category-name").value = name;
}

/// function delete
function deleteCategory(idd) {
  Swal.fire({
    background: "#ffffff",
    color: "#353030",
    title: "Are you sure you want to delete this Category?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#18663b",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    // after confirmation is succesfull
    if (result.isConfirmed) {
      Swal.fire({
        background: "#ffffff",
        color: "#353030",
        title: "Deleted!",
        text: "Category has been deleted successfully. ",
        icon: "success",
      });
      // using ajax to send data without refresh
      $.ajax({
        url: "../scripts/category.php",
        method: "POST",
        data: { dcategory: idd },
        dataType: "html",
        success: function () {
          // removing element from dom
          document.querySelector(`#category${idd}`).remove();
        },
      });
    }
  });
}

function getdataArticl(id, image, title, category, description) 
{
  document.getElementById("id-edit-articl").value = id;
  document.getElementById('image-edit-articl').value = image;
  document.getElementById("title-edit-articl").value = title;
  document.getElementById("category-edit-articl").value = category;
  document.getElementById("description-edit-articl").value = description;
}
