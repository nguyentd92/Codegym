<h2>Update product's information</h2>
<form method="post" action="<?php $url?>">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $product->name; ?>" class="form-control" require/>
    </div>
    <div class="form-group">
        <label>Unit Price</label>
        <input type="number" name="unitprice" class="form-control" value="<?php echo $product->unitPrice; ?>" require/>
    </div>
    <div class="form-group">
        <label>Describe</label>
        <textarea name="describe" class="form-control"><?php echo $product->describe; ?></textarea>
    </div>
	<div class="form-group">
        <label>Producer</label>
        <input type="text" name="producer" class="form-control" require value="<?php echo $product->producer; ?>"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>