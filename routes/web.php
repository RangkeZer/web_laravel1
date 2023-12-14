<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
]);
});
Route::get('/about', function () {
    return view ('about', [
    "title" => "About",   
    "name" => "Rangketama" 
    ]);
});


Route::get('/blog', function () {

    $blog_post = [
    [
        "title" => "Post Pertama", 
        "slug" => "post-pertama" ,
        "author" => "John Doe",
        "body"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In obcaecati fugiat, 
        nisi maiores unde laboriosam ratione ab ipsum rem hic iusto animi doloribus voluptatem, similique 
        dolorum sit incidunt distinctio nostrum reprehenderit corporis? Excepturi iusto reiciendis eaque quo 
        rerum quasi repudiandae. Odit deserunt repudiandae perferendis, nisi quis totam 
        alias beatae nulla aliquam ipsa architecto, neque quo iure! Explicabo laudantium necessitatibus vitae.
         Quis nostrum provident necessitatibus libero blanditiis 
        in dolorum pariatur, tempore, quae laudantium dolor excepturi deleniti enim sunt 
        repellat doloremque accusantium."
    ],

    [
        "title" => "Post Kedua",  
        "slug" => "post-pertama" , 
        "author" => "Yanto ",
        "body"       => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In obcaecati fugiat, 
        nisi maiores unde laboriosam ratione ab ipsum rem hic iusto animi doloribus voluptatem, similique 
        dolorum sit incidunt distinctio nostrum reprehenderit corporis? Excepturi iusto reiciendis eaque quo 
        rerum quasi repudiandae. Odit deserunt repudiandae perferendis, nisi quis totam 
        alias beatae nulla aliquam ipsa architecto, neque quo iure! Explicabo laudantium necessitatibus vitae.
         Quis nostrum provident necessitatibus libero blanditiis 
        in dolorum pariatur, tempore, quae laudantium dolor excepturi deleniti enim sunt 
        repellat doloremque accusantium."
    ]
];

    return view ('post', [
        "title" => "Blog", 
        "post"  => $blog_post 
    ]);
}); 

//Single Post 
Route::get ('post/{slug}', function($slug) {
    return view ('sipost' , [
        "title" => "Single Post"
    ]);
});

