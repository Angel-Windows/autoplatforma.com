<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $post = Post::select('posts.*', 'categories.name as category_name', 'posts.published_at', \DB::raw("'John' as author_name"))
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->first();

        return view("page.blog")
            ->with("post", $post);
    }
    public function admin(){
        $post = Post::select('posts.*', 'categories.name as category_name', 'posts.published_at', \DB::raw("'John' as author_name"))
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->first();

        return view("page.admin")
            ->with("post", $post);
    }
    public function post_store(Request $request){
        $post = Post::where("id", 1)->first();
        $post->content = $request->input('content');
        $post->save();
        return redirect()->back();
    }
    public function post_add_img(Request $request){

        $uploadedImage = $request->file('file'); // Получаем файл из запроса

        if ($uploadedImage) {
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $uploadedImage->move(public_path('images'), $imageName); // Сохраняем изображение в папку "public/images"

            // Вернуть URL загруженного изображения
            return response()->json(['location' => asset('images/' . $imageName)]);
        }

        // Если произошла ошибка, вернуть сообщение об ошибке
        return response()->json(['error' => 'Ошибка загрузки изображения'], 400);




    }

}
