<?php
    $id = $_GET['id'];

    $sql_up = "SELECT * FROM product where item_id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $product_name = $_POST['item_name'];

        if($_FILES['item_image']['name']==''){
            $image = $row_up['item_image'];
        }
        else{
            $image= $_FILES['item_image']['name'];
            $image_tmp = $_FILES['item_image']['tmp_name'];
            move_uploaded_file($image_tmp, ''.$image);
        }

        $price = $_POST['item_price'];
        $description = $_POST['item_register'];
        $brand_id = $_POST['item_brand'];

        $sql = "UPDATE products SET product_name = '$product_name', image = '$image', price = '$price', description = '$description', brand_id = '$brand_id'
        values ('$product_name', '$image', $price, '$description', $item_brand)";
        $query = mysqli_query($connect, $sql);
        header('location: dashboard.php?page_layout=list');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Edit Product</h2>
        </div>
        <div class="card-body">
            <form action="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Product Name</label>
                  <input type="text" name="product_name" class="form-control" required value="<?php echo $row_up['item_name']?>">
                </div>
                <div class="form-group">
                  <label for="">Images</label>
                  <input type="file" name="image">
                </div>
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="number" name="price" class="form-control" required value="<?php echo $row_up['item_price']?>">
                </div>
                <div class="form-group">
                  <label for="">Date registration</label>
                  <input type="datetime-local" name="description" class="form-control" required value="<?php echo $row_up['item_register']?>">
                </div>  
                <div class="form-group">
                  <label for="">Brand</label>
                  <select class="form-control" name="item_brand">
                    <option value="">Apple</option>
                    <option value="">Samsung</option>
                    <option value="">Redmi</option>
                  </select>
                </div>
                <button name="sbm" class="btn btn-primary" type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>