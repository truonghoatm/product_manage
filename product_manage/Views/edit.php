<h2>Cập nhật thông tin san pham</h2>
<form method="post" action="index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $product->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Price</label>
        <textarea name="price" class="form-control"><?php echo $product->price; ?></textarea>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
    </div>
    <div class="form-group">
        <label>Product Vendor</label>
        <textarea name="productVendor" class="form-control"><?php echo $product->productVendor; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>