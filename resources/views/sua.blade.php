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
    <form enctype="multipart/form-data" action="{{Route('save2')}}" method="post">
    {{csrf_field()}}
    <div class="item">
        <label for="tensanpham">ID:{{$sp['id']}}</label>
        <input type="hidden" name="id" value="{{$sp['id']}}">
    </div>
    <div class="item">
        <label for="tensanpham">Tên sản phẩm:</label>
        <input type="text" name="tensanpham" id="tensanpham" value="{{$sp['tensanpham']}}">
    </div>
    <div class="item">
        <label for="soluong">Số lượng:</label>
        <span id="soluong-error"></span>
        <input type="number" name="soluong" id="soluong" value="{{$sp['soluong']}}">
    </div>
    <div class="item">
        <label for="anh">Anh:</label>
        <input type="file" name="anh" id="anh" value="{{$sp['anh']}}">
    </div>
    <div class="item">
    <p>Nhà Sản Xuất</p><br>
        <select name="id_nsx" id="">
            <?php foreach($nsx as $value):?>
                <option value="{{$value['id']}}" <?php if($sp['id_nsx']==$value['id']):?>
                selected="selected" <?php endif?>>{{$value['tennhasanxuat']}}
                </option>
            <?php endforeach?>
        </select>
        <?php
        ?>
    </div>
    <input type="submit" id="btn" name="ten" value="Sữa"><br>
    </form>
    
</div>
</body>
</html>