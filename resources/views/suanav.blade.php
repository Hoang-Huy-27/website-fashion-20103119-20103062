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
        <h1>Sửa</h1>
    <form enctype="multipart/form-data" action="{{Route('themdm2')}}" method="post">
    {{csrf_field()}}
    <input type="submit" id="btn" name="ten" value="Sữa"><br>
    <div class="item">
        <label for="ten">ID:{{$sp['id']}}</label>
        <input type="hidden" name="id" value="{{$sp['id']}}">
    </div>
    <div class="item">
        <label for="ten">Tên sản phẩm:</label>
        <input type="text" name="ten" id="ten" value="{{$sp['ten']}}">
    </div>
    <div class="item">
        <label for="lever">lever:</label>
        <span id="lever-error"></span>
        <input type="number" name="lever" id="lever" value="{{$sp['lever']}}">
    </div>
    <div class="item">
        <label for="parent_id">parent_id:</label>
        <input type="text" name="parent_id" id="parent_id" value="{{$sp['parent_id']}}">
    </div>
    </form>
    
</div>
</body>
</html>