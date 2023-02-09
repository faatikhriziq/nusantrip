<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|min:1',
            'image' => 'required|image'
        ]);
        $fileName = now().'-'.str_replace(' ','-',$request->image->getClientOriginalName());

        if($validate){
         Category::create($request->all());
         $request->file('image')->storeAs('images',$fileName);
        return redirect()->route('kategori-wisata')->session()->flashdata('success','Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('kategori-wisata')->session()->flashdata('error','Data gagal Ditambahkan');
        }






            return redirect()->route('kategori-wisata');




    }
}
