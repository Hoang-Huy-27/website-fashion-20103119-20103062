@extends('layouts.admin1')
 
@section('title')
  <title>Trang admin</title>
@endsection
 
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <table style="width: 50%;margin-top:20px;margin-left:60px;"> 
    <h1 >
    Danh sách các sản phẩm
    </h1>
  <tr>
      <th>STT</th>
      <th>Tên sản phẩm</th>
      <th>Số lượng</th>
      <th>Anh</th>
      <th>Nhà sản xuất</th>
      <th>Sửa</th>
      <th>Xoá</th>
    </tr>
        <?php
        $stt=0;
            foreach($san_pham as $value) {$stt++;?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td>
                        <?php echo $value['tensanpham']; ?>
                    </td>
                    <td>
                        <?php  echo $value['soluong']; ?>
                    </td>
                    <td>
                        <img src="anh\<?php  echo $value['anh']; ?>" class="center-block" style="height:100px;width:100px" alt="">
                    </td>
                    <td>
                        <?php  echo \App\Models\model_NhaSanXuat::find($value['id_nsx'])->tennhasanxuat; ?>
                    </td>
                    <td>
                        <a href="sua/{{$value['id']}}">Sửa</a>
                    </td>
                    <td>
                        <a href="xoa/{{$value['id']}}">Xoá</a>
                    </td>
                </tr>
        <?php } ?>
        <a href="them">Thêm sản phẩm</a>
    </table>
    
  </div>
  <!-- /.content-wrapper -->
  
  @endsection