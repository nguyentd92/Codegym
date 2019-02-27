<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>

<div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Danh Sách Khách Hàng</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($customers) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                        @else
                        @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer['name'] }}</td>
                            <td>{{ $customer['bod'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>
                                <a href="{{ $customer['id'] }}/edit">Sửa</a> | <a href="#">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>