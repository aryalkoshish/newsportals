<?php

namespace App\Http\Controllers;
use DB;
use Carbon\carbon; 
use Illuminate\Support\Arr;
use App\Images;
use Illuminate\Http\Request;




class NewsController extends Controller
{
    public function createnews(){
    	return view('news.add_news');
    }

    public function addnews(){

    	$request = Request()->all();

    	$data = $this->validatereq($request);
    	$a = [];
    	$a['created_at'] = Carbon::now();
    	$final= array_merge($data,$a);
    	DB::table('news')->insert($final);
    	return redirect()->to('view_news');
    }

    public function validatereq($request)
    {

       return Request()->validate([

          'news_title' =>'required',
          'writer_id' => 'required',
          'news'=> 'required:max(10000)',
          'news_description' =>'nullable',
          'categories' => 'required',
          'views' => 'required',
          'seo_title'=>'nullable',
          'seo_keywords'=>'nullable',
          'seo_description'=>'nullable',

      ]);				
   }

   public function viewnews(){
       $news = DB::table('news')->get();
       return view('news.view_news',compact('news'));
   }

   public function viewimages(){
        $img=DB::table('images')->get();
        return view('media.view_image',compact('img'));
    }
    public function showimage($id){
        $im = DB::table('images')->where('id',$id)->get()->first();
        return view('media.show_image',compact('im')); 
    }


   public function shownews($id)
   {
       $news = DB::table('news')->where('id',$id)->get()->first();
       $c=DB::table('news')->get();


       $array = ['$news->news_title' => 0];

       foreach ($c as $c) 
       {
          $s= similar_text ( $news->news_title ,$c->news_title, $percent);
          if($percent >= 50){
             $g=$c->news_title;
             $array = Arr::prepend($array, $g, $percent);
         }
     }
     $sorted = array_values(Arr::sort($array, function ($value) {
        return $value;
    }));
     $ip = Request::ip();
     if($ip>=0){
        $c=DB::table('news')->where('id',$id)->get()->first();
        $c->views=$c->views++;
    }
    $data=\location::get($ip);
    return view('news.show_news',compact('news','sorted','ip'));
}


public function storeimage(Request $request){
    
    // $input=$request->all();
    
    $images=array();
    if($files=$request->file('images')){
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('image',$name);
            $images[]=$name;
        }
    }
    /*Insert your data*/

    Images::insert( [
        'images'=>  implode("|",$images),
        
        //you can put other insertion here
    ]);


    return redirect('test');
}


}
