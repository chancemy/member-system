<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{
    public function index(){
        if (Gate::allows('admin')){
            $newsData = News::get();
            return view('admin.news.index',compact('newsData'));
        }else{
            '沒有管理者權限';
        }
    }


    public function newsCreateView(){
        $news = News::TYPE ;
        return view('admin.news.create',compact('news'));
    }
    public function newsCreate(Request $request){
        $file = $request->file('img');
        if($request->img){
            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            $extenstion = $request->img->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/'.$filename;
            move_uploaded_file($file,public_path().$path);
        }

        News::create([
            'type' => $request->type,
            'publish_date' => date('Y/m/d'),
            'title' =>$request->title,
            'content' => $request->content,
            'img' => $path
        ]);
        return redirect('/admin/news/')->with('message','新增成功');
    }
    public function newsDelete($id){
        $newsData = News::find($id);
        $newsData->delete();
        return redirect('/admin/news/create')->with('message','刪除成功');
    }
    public function newsEditView(Request $request,$id){

        $oldNewsData = News::find($id);
        $news = News::TYPE ;

        return view('admin.news.edit',compact('oldNewsData','news'));
    }
    public function newsEdit(Request $request,$id){
        $oldNewsData = News::find($id);
        $file = $request->file('img');
        if($request->img){
            File::delete(public_path().$oldNewsData->img);
            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            $extenstion = $request->img->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/'.$filename;
            move_uploaded_file($file,public_path().$path);
        }

            $oldNewsData->type = $request->type ;
            $oldNewsData->publish_date = date('Y/m/d');
            $oldNewsData->title = $request->title;
            $oldNewsData->content = $request->content;
            $oldNewsData->img = $path;

        return redirect('/admin/news/')->with('message','修改成功');
    }
}
