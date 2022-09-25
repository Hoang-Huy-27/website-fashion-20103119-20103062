<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_SanPham;
use App\Models\model_NhaSanXuat;

class ProductController extends Controller
{
    public function hienthi()
    {
        $san_pham = model_SanPham::all()->toArray();
        return view('admin')->with('san_pham',$san_pham);
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
    public function xoa($id)
    {
        model_SanPham::find($id)->delete();
        return redirect()->Route('admin');
    }
    public function save(Request $rq)
    {
        $sp =new model_SanPham();
        $sp->tensanpham= $rq->tensanpham;
        $sp->soluong= $rq->soluong;
        $sp->id_msx= $rq->id_msx;
        $sp->save();
        return redirect()->Route('admin');   
    }
    public function save2(Request $rq)
    {
        $sp = model_SanPham::find($rq->id);
        $sp->tensanpham= $rq->tensanpham;
        $sp->soluong= $rq->soluong;
        $sp->id_msx= $rq->id_msx;
        $sp->save();
        return redirect()->Route('admin');   
    }
}
