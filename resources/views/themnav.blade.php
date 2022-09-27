<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <title>Thêm sản phẩm</title>
</head>

<body>
<div id="wrapper">
        <h1>Thêm danh muc</h1>
    <form action="{{ Route('themdm') }}" method="post" >
    {{csrf_field()}}
    <input type="submit" id="btn" name="ten" value="Thêm"><br>
    <div class="item">
        <label for="lever">lever:</label>
        <span id="lever-error"></span>
        <input type="number" name="lever" id="lever">
    </div>
    <div class="item">
        <label for="parent_id">parent_id:</label>
        <span id="parent_id-error"></span>
        <input type="text" name="parent_id" id="parent_id">
    </div>
    <div class="item">
        <label for="ten">Tên:</label>
        <input type="text" name="ten" id="ten">
    </div>
    </form>
    
</div>
</body>
</html>