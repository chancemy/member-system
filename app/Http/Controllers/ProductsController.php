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
        $requestData = $request->all();
        if($request->hasFile('main_photo')){
            $requestData['main_photo'] = FileController::photosUpload($request->main_photo);
        };
        $newRecord = Product::create($requestData);


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
        $itemData = Product::with('img')->find($id);
        $oldPhotos = $itemData->img ;

        // // dd($itemData->img);
        if(file_exists(public_path().$itemData->main_photo)){
            File::delete(public_path().$itemData->main_photo);
        }
        foreach ($oldPhotos as $value) {
            // dd($value->photo);
            if(file_exists(public_path().$value->photo)){
                File::delete(public_path().$value->photo);
            }
            // dd($value);
            $value->delete();
        }
        $itemData->delete();

        return redirect('/admin/products/item')->with('message','刪除產品成功');
    }
    public function itemEditView(Request $request,$id){

        $productData = Product::with('img')->find($id);
        $typeData = ProductsType::get();
        $oldPhotos =  $productData->img ;

        // dd($oldPhotos);
        return view('admin.produucts.item.edit',compact('productData','typeData','oldPhotos'));
    }
    public function itemEdit(Request $request,$id){
        $oldItemData = Product::with('img')->find($id);
        $newRecord = $request->all();
        if($request->hasFile('main_photo')){
            // dd($oldItemData->main_photo);
            File::delete(public_path().$oldItemData->main_photo);
            $newRecord['main_photo'] = FileController::photosUpload($request->main_photo);
        }
        $oldItemData->update($newRecord);
        // Product::create($newRecord);
        if($request->hasFile('photos')){
            foreach ($request->photos as $key => $value) {
                $path = FileController::photosUpload($value);
                ProductImg::create([
                    'photo' => $path,
                    'product_id' => $id
                ]);
            }
        }

        // $oldItemData = Product::find($id);
        // $oldItemData->product_name = $request->product_name ;
        // $oldItemData->product_price = $request->product_price ;
        // $oldItemData->descript = $request->descript ;
        // $oldItemData->product_type_id = $request->product_type_id;
        // $oldItemData->save();
        return redirect('/admin/products/item')->with('message','修改產品成功');
    }


    public function deleteImg(Request $request){

        $imgType = $request->imgType;
        if($imgType == 'mainPhoto'){
            $oldPhotos = Product::find($request->id);
            if(file_exists(public_path().$oldPhotos->main_photo)){
                // dd($oldPhotos->main_photo);
                File::delete(public_path().$oldPhotos->main_photo);
                $oldPhotos->main_photo = '';
            }
            $oldPhotos->save();
        }else if($imgType == 'photos'){
            $oldPhotos = ProductImg::find($request->id);

            if(file_exists(public_path().$oldPhotos->photo)){
                File::delete(public_path().$oldPhotos->photo);
                // dd(file_exists(public_path().$request->photo));

            }
            $oldPhotos->delete();
        }

        return 'success';

    }
}
