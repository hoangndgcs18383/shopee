<?php
    $sql = "SELECT * FROM product";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>List Product</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Code</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Date Registration</th>
                        <th>Brand</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['item_name']; ?></td>
                                
                                <td>
                                    <img style="width: 180px;" src="<?php echo $row['item_image'];?>">
                                </td>
                                <td><?php echo $row['item_price'];?></td>
                                <td><?php echo $row['item_register'];?></td>
                                <td><?php echo $row['item_brand'];?></td>
                                <td>
                                    <a class="btn btn-success" href="dashboard.php?page.layout=edit&id=<?php echo $row['item_id']; ?>">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onClick="return Del('<?php echo $row['item_name'];?>')" href="dashboard.php?page.layout=delete&id=<?php echo $row['item_id']; ?>">Delete</a>
                                </td> 
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="dashboard.php?page_layout=add">Add New</a>
        </div>
    </div>
</div>
<SCript>
    function Del(name){
        return confirm("Are you sure want to delete product " + name + " ?");
    }
</SCript>