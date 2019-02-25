<h2>Product</h2>
<a href="./index.php?page=add">Add</a>
<form method='post'>
	<input type='text' name='name'/>
	<input type='submit' value='Get'/>
</form>
<table class="table">
  <thead>
  <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Unit Price</th>
      <th>Describe</th>
	  <th>Producer</th>
	  <th></th>
	  <th></th>
  </tr>
  </thead>
  <tbody>

  <?php if (isset($products)):?>
  <?php foreach ($products as $product): ?>
    <tr>
      <td><?php echo $product->id ?></td>
      <td><?php echo $product->name ?></td>
      <td><?php echo $product->unitPrice ?></td>
      <td><?php echo $product->describe ?></td>
	  <td><?php echo $product->producer ?></td>
	  <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
	</tr>
	<?php endforeach; ?>
	<?php endif; ?>
  </tbody>
</table>