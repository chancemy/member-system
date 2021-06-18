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
        $path = FileController::imgUpload($file );
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
        $oldNewsData = News::find($id);
        File::delete(public_path().$oldNewsData->img);
        $oldNewsData->delete();
        return redirect('/admin/news/')->with('message','刪除成功');
    }
    public function newsEditView(Request $request,$id){

        $oldNewsData = News::find($id);
        $news = News::TYPE ;

        return view('admin.news.edit',compact('oldNewsData','news'));
    }
    public function newsEdit(Request $request,$id){
        $oldNewsData = News::find($id);

        if($request->hasfile('img')){
            $file = $request->file('img'); //嚴謹的寫法與 $request->img 一樣
            File::delete(public_path().$oldNewsData->img);
            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            $extenstion = $request->img->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/'.$filename;
            move_uploaded_file($file,public_path().$path);
            $oldNewsData->img = $path;
        }

            $oldNewsData->type = $request->type ;
            $oldNewsData->publish_date = date('Y/m/d');
            $oldNewsData->title = $request->title;
            $oldNewsData->content = $request->content;

            $oldNewsData->save();
        return redirect('/admin/news/')->with('message','修改成功');
    }
}
