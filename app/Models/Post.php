<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use softDeletes;
    public function index(){
        $posts = Post::all();
        dd($posts);
        return view('posts.index',['posts' => $posts]);
    }
    public function up(): void {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("titulo",128);
            $table->string("texto",5000);
            $table->boolean("publicado");
            $table->softDeletes();
            $table->timestamps();
        });
}}
