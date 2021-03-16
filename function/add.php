<?php
    if(isset($_POST['sbm'])){
      $product_name = $_POST['item_name'];

      $image = $_FILES['item_image']['name'];
      $image_tmp = $_POST['item_image']['tmp_name'];

      $price = $_POST['item_price'];
      $description = $_POST['item_register'];
      $brand_id = $_POST['item_brand'];

      $sql = "INSERT INTO product (item_name, item_image, item_price, item_register, item_brand)
      values ('$product_name', '$image', $price, '$description', $brand_id)";
      $query = mysqli_query($connect, $sql);
      move_uploaded_file($image_tmp,'images/'.$image);
      header("location: dashboard.php?page_layout=list");
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Add Product</h2>
        </div>
        <div class="card-body">
            <form action="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Product Name</label>
                  <input type="text" name="item_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Images</label>
                  <input type="file" name="item_image">
                </div>
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="number" name="item_price" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Desctiption</label>
                  <input type="datetime-local" name="item_register" class="form-control" required >
                </div>  
                <div class="form-group">
                  <label for="">Brand</label>
                  <select class="form-control" name="item_brand">
                    <option value="">Apple</option>
                    <option value="">Samsung</option>
                    <option value="">Redmi</option>
                  </select>
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>