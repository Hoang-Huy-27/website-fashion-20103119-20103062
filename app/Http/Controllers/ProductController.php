<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_SanPham;
use App\Models\model_NhaSanXuat;
use App\Models\model_DanhMuc;

class ProductController extends Controller
{
    public function hienthi()
    {
        $san_pham = model_SanPham::all()->toArray();
        return view('admin')->with('san_pham',$san_pham);
    }
    public function hienthi1()
    {
        $danh_muc = model_DanhMuc::all()->toArray();
        return view('danhmucsanpham')->with('danh_muc',$danh_muc);
    }
    public function them()
    {
        $nsx = model_NhaSanXuat::all()->toArray();
        return view('them')->with('nsx',$nsx);
    }
    public function sua($id)
    {
        $nsx = model_NhaSanXuat::all()->toArray();
        $sp = model_SanPham::find($id)->toArray();
        return view('sua',compact('nsx','sp'));
    }
    public function suanav($id)
    {
        $sp = model_DanhMuc::find($id)->toArray();
        return view('suanav',compact('sp'));
    }
    public function xoa($id)
    {
        model_SanPham::find($id)->delete();
        return redirect()->Route('admin');
    }
    public function xoadm($id)
    {
        model_DanhMuc::find($id)->delete();
        return redirect()->Route('danhmucsanpham');
    }
    public function save(Request $rq)
    {
        $sp =new model_SanPham();
        $sp->tensanpham= $rq->tensanpham;
        $sp->soluong= $rq->soluong;
        $sp->id_nsx= $rq->id_nsx;
        if($file = $rq->file('anh'))
        {
            $name = $file->getClientOriginalName();
            if($file->move(public_path('anh'),$name))
            {
                $sp->anh=$name;
            }
        }
        $sp->save();
        return redirect()->Route('admin');   
    }
    public function save2(Request $rq)
    {
        $sp = model_SanPham::find($rq->id);
        $sp->tensanpham= $rq->tensanpham;
        $sp->soluong= $rq->soluong;
        if($file = $rq->file('anh'))
        {
            $name = $file->getClientOriginalName();
            if($file->move(public_path('anh'),$name))
            {
                $sp->anh=$name;
            }
        }
        $sp->id_nsx= $rq->id_nsx;
        $sp->save();
        return redirect()->Route('admin');   
    }
    public function themdm2(Request $rq)
    {
        $sp = model_DanhMuc::find($rq->id);
        $sp->ten= $rq->ten;
        $sp->lever= $rq->lever;
        $sp->parent_id= $rq->parent_id;
        $sp->save();
        return redirect()->Route('danhmucsanpham');   
    }
    public function themdm(Request $rq)
    {
        $sp =new model_DanhMuc();
        $sp->ten= $rq->ten;
        $sp->lever= $rq->lever;
        $sp->parent_id= $rq->parent_id;
        $sp->save();
        return redirect()->Route('danhmucsanpham');  
    }
    public function themnav()
    {
        $nsx = model_DanhMuc::all()->toArray();
        return view('themnav');
    }

}
