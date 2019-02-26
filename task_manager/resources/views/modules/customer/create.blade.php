<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    <form method="post" action="customer.create">
        <div>
            <label>Họ và tên</label><br/>
            <input type='text' name='name'/>
        </div>
        <div>
            <label>Số điện thoại</label><br/>
            <input type='text' name='phone'/>
        </div>
        <div>
            <label>Email</label><br/>
            <input type='email' name='email'/>
        </div>
        <div>
            <label>Job</label><br/>
            <input type='text' name='job'/>
        </div>
        <div>
            <input type='submit' value='Create'/>
        </div>
    </form>

</body>
</html>