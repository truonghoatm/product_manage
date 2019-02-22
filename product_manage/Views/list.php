<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>ProductVendor</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->description?></td>
        <td><?php echo $product->productVendor?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Edit</a></td>
        <td> <a href="./index.php?page=detail&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Detail</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>