@extends('layouts.admin1')
 
@section('title')
  <title>Trang admin</title>
@endsection
 
@section('content')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <table style="width: 50%;margin-top:20px;margin-left:60px;"> 
    <h1 >
    Danh sách menu
    </h1>
  <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>lever</th>
      <th>parent_id</th>
      <th>Sửa</th>
      <th>Xoá</th>
    </tr>
        <?php
        $stt=0;
            foreach($danh_muc as $value) {$stt++;?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td>
                        <?php echo $value['ten']; ?>
                    </td>
                    <td>
                        <?php  echo $value['lever']; ?>
                    </td>
                    <td>
                        <?php  echo $value['parent_id']; ?>
                    </td>
                    <td>
                        <a href="suanav/{{$value['id']}}">Sửa</a>
                    </td>
                    <td>
                        <a href="xoadm/{{$value['id']}}">Xoá</a>
                    </td>
                </tr>
        <?php } ?>
        <a href="themnav">Thêm sản phẩm</a>
    </table>
    
  </div>
  <!-- /.content-wrapper -->
  
  @endsection