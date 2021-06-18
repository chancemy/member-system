<?php

namespace App\Http\Controllers;

use App\ProductImg;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public static function imgUpload($file ){
        if($file ){

            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            $extenstion = $file ->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/'.$filename;
            move_uploaded_file($file,public_path().$path);
        }
        return $path;
    }

    public static function photosUpload($value){
        $file = $value;
        if(!is_dir('upload/')){
            mkdir('upload/');
        }
        $extenstion = $file->getclientoriginalextension();
        $filename = md5(uniqid(rand())) . '.' . $extenstion;
        $path = '/upload/'.$filename;
        move_uploaded_file($file,public_path().$path);
        return $path ;
    }

    
}
