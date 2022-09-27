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
        <h1>Thêm sản phẩm</h1>
    <form action="{{ Route('save') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="item">
        <label for="tensanpham">Tên sản phẩm:</label>
        <input type="text" name="tensanpham" id="tensanpham">
    </div>
    <div class="item">
        <label for="soluong">Số lượng:</label>
        <span id="soluong-error"></span>
        <input type="number" name="soluong" id="soluong">
    </div>
    <div class="item">
        <label for="anh">Anh:</label>
        <input type="file" name="anh" id="anh">
    </div>
    <div class="item">
    <p>Nhà Sản Xuất</p><br>
        <select name="id_nsx" id="">
            <?php foreach($nsx as $value):?>
                <option value="{{$value['id']}}">{{$value['tennhasanxuat']}}</option>
            <?php endforeach?>
        </select>
        <?php
        ?>
    </div>
    <input type="submit" id="btn" name="ten" value="Thêm"><br>
    </form>
    
</div>
</body>
</html>