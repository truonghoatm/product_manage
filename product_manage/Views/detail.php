<h2>Chi tiet san pham</h2>
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
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->description?></td>
        <td><?php echo $product->productVendor?></td>
    </tr>
    </tbody>