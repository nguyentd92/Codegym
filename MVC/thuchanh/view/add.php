<?php
if(isset($message)){
  echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Thêm mới khách hàng</h1>
      </div>
      <div class="col-12">
          <form method="post">
              <div class="form-group">
                  <label>Tên khách hàng</label>
                  <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
              </div>
              <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>       
     </div>   
   </div> 
</div> 
Bước 6: Điều hướng đến trang add trong trang index.php
<?php
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";

use \Controller\CustomerController;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm mới khách hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="navbar navbar-default">
      <a class="navbar-brand" href="index.php">Customer management</a>
  </div>
  <?php
  $controller = new CustomerController();
  $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
  switch ($page){
      case 'add':
          $controller->add();
          break;
     case 'delete':
          break;
      case 'edit':
          break;
      default:
          $controller->index();
          break;
  }
  ?>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>