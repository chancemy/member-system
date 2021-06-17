<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductsType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function typeIndex(){
        $typeData = ProductsType::get();
        return view('admin.produucts.type.index',compact('typeData'));
    }

    public function typeCreate(){
        return view('admin.produucts.type.create');
    }
    public function typeUpdate(Request $request){
        ProductsType::create($request->all());
        return redirect('/admin/products/type')->with('message','新增種類成功');
    }
    public function typeDelete($id){
        $typeData = ProductsType::find($id);
        $typeData->delete();
        return redirect('/admin/products/type')->with('message','刪除種類成功');
    }
    public function typeEditView(Request $request,$id){

        $oldTypeData = ProductsType::find($id);
        return view('admin.produucts.type.edit',compact('oldTypeData'));
    }
    public function typeEdit(Request $request,$id){

        $oldTypeData = ProductsType::find($id);
        $oldTypeData->type_name = $request->type_name;
        $oldTypeData->save();
        return redirect('/admin/products/type')->with('message','修改種類成功');
    }

    ///

    public function productsIndex(){
        $productsData = Product::get();
        return view('admin.produucts.item.index',compact('productsData'));
    }

    public function itemCreate(){
        $productsData = ProductsType::get();
        return view('admin.produucts.item.create',compact('productsData'));
    }
    public function itemUpdate(Request $request){
        Product::create($request->all());
        return redirect('/admin/products/item')->with('message','新增產品成功');
    }
    public function itemDelete($id){
        $itemData = Product::find($id);
        $itemData->delete();
        return redirect('/admin/products/item')->with('message','刪除產品成功');
    }
    public function itemEditView(Request $request,$id){

        $oldItemData = Product::find($id);
        $productsData = ProductsType::get();
        return view('admin.produucts.item.edit',compact('oldItemData','productsData'));
    }
    public function itemEdit(Request $request,$id){
        $oldItemData = Product::find($id);

        $oldItemData->product_name = $request->product_name ;
        $oldItemData->product_price = $request->product_price ;
        $oldItemData->descript = $request->descript ;
        $oldItemData->product_type_id = $request->product_type_id;
        $oldItemData->save();
        return redirect('/admin/products/item')->with('message','修改產品成功');
    }

}
