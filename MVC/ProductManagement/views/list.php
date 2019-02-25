<h2>Products list</h2>
<a href="./index.php?page=add">Add</a>
<a href="./index.php?page=get">Search</a>
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
  <?php foreach ($products as $product): ?>
  <tr>
      <td><?php echo $product->id ?></td>
      <td><?php echo $product->name ?></td>
      <td><?php echo $product->unitPrice ?></td>
      <td><?php echo $product->describe ?></td>
	  <td><?php echo $product->producer ?></td>
	  <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>

  <?php endforeach; ?>
  </tbody>
</table>