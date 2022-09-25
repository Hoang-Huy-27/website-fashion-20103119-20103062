<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Thêm sản phẩm</title>
</head>
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    color: #fff;
    background-color: darkblue;
}

#wrapper {
    width: 500px;
    height: 500px;
    padding: 20px;
    margin: 0 auto;
    margin-top: 50px;
    border-radius: 5px;
    background-image: url('img/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f6378486d555644374549717751773d3d2d33322e313639313661393733633333636337353937373538383835393931372e6a7067.jpg');
    background-size: 100%;
}

h1 {
    margin-bottom: 25px;
}

.item span {
    color: #fbc7d4;
    font-weight: bold;
    font-size: 25px;
}

.item input {
    width: 100%;
    padding: 5px;
    margin: 15px 0;
}

#btn {
    width: 100%;
    height: 50px;
    margin: 0 auto;
    font-weight: bold;
    margin-top: 10px;
    border-radius: 10px;
    border: none;
}

#btn:hover {
    cursor: pointer;
    color: #fff;
    background-image: linear-gradient(to right, #9796f0, #fbc7d4);
}
</style>
<body>
<div id="wrapper">
        <h1>Sửa</h1>
    <form action="{{Route('save2')}}" method="post">
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
    <p>Nhà Sản Xuất</p><br>
        <select name="id_msx" id="">
            <?php foreach($nsx as $value):?>
                <option value="{{$value['id']}}" <?php if($sp['id_msx']==$value['id'])?>
                selected="selected" 
                >{{$value['tennhasanxuat']}}
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