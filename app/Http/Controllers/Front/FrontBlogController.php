<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class FrontBlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view('front.pages.blogs.index', compact('blogs'));
    }

    public function show(string $id) {
        $blog = Blog::findOrFail($id);

        // JSON formatındaki images alanını PHP dizisine dönüştür
        $blog->images = json_decode($blog->images, true);

        // $blog değişkenini map ile manipüle ederek yeni bir dizi oluştur
        $blog = collect([$blog])->mapWithKeys(function ($item, $key) {
            return [
                $key => [
                    'id' => $item->id,
                    'title' => $item->title,
                    'text' => $item->text,
                    'images' => $item->images,
                    'created_at' => $item->created_at,
                    'updated_at' => $item->updated_at,
                ]
            ];
        });

        $blog = $blog[0];

        return view('front.pages.blogs.blog', compact('blog'));
    }
}
