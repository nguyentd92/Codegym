<?php
if(isset($message)){
  echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Add new Product</h1>
      </div>
      <div class="col-12">
          <form method="post">
              <div class="form-group">
                  <label>Product's name</label>
                  <input type="text" class="form-control" name="name"  placeholder="Type product's name" required>
              </div>
              <div class="form-group">
                  <label>Unit price($)</label>
                  <input type="number" class="form-control" name="unitprice"required>
              </div>
              <div class="form-group">
                  <label>Describe</label>
                  <textarea class="form-control" name="describe"></textarea>
              </div>
			  <div class="form-group">
                  <label>Producer</label>
                  <input type="text" class="form-control" name="producer" required>
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
          </form>       
     </div>   
   </div> 
</div>