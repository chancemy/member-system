<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function typeIndex(){
        $typeData = ProductsType::with('product')->get();
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
        if($typeData->product->count() != 0){
            return redirect('/admin/products/type')->with('message','此種類尚有產品無法直接刪除種類');
        }
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
        $productsData = Product::with('type')->get();
        // dd($productsData->img);
        return view('admin.produucts.item.index',compact('productsData'));
    }

    public function itemCreate(){
        $productsData = ProductsType::get();
        return view('admin.produucts.item.create',compact('productsData'));
    }
    public function itemUpdate(Request $request){
        $newRecord  = Product::create($request->all());
        $mainPhoto = $request->all();
        if($request->has('main_photo')){
            $mainPhoto['main_photo'] = FileController::photosUpload($request->photo);
            // dd( $mainPhoto['photo']);
            Product::create([
                'product_name'=>$mainPhoto->name,
                'product_price' => $mainPhoto->price,
                'descript' => $mainPhoto->content,
                'main_photo' =>$mainPhoto['main_photo'],
            ]);
        };
        if($request->hasFile('photos')){

            foreach ($request->photos as $key => $value) {
                $path = FileController::photosUpload($value);
                ProductImg::create([
                    'photo' => $path,
                    'product_id' => $newRecord->id
                ]);
            }
        }
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
        $oldPhotos =  $oldItemData->img ;
        // dd($oldPhotos);
        return view('admin.produucts.item.edit',compact('oldItemData','productsData','oldPhotos'));
    }
    public function itemEdit(Request $request,$id){

        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $value) {


                $path = FileController::photosUpload($value);
                ProductImg::create([
                    'photo' => $path,
                    'product_id' => $id
                ]);
            }
        }


        $oldItemData = Product::find($id);
        $oldItemData->product_name = $request->product_name ;
        $oldItemData->product_price = $request->product_price ;
        $oldItemData->descript = $request->descript ;
        $oldItemData->product_type_id = $request->product_type_id;
        $oldItemData->save();
        return redirect('/admin/products/item')->with('message','修改產品成功');
    }


    public function deleteImg(Request $request){
        $oldPhotos = ProductImg::find($request->id);
        if(file_exists(public_path().$request->photo)){
            File::delete(public_path().$request->photo);
        }
        $oldPhotos->delete();
    }
}
