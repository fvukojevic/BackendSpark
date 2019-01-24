<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Reminder;

class AdminController extends Controller
{
    public function index()
    {
        $numofPosts = Article::count();
        $numofUsers = User::count();
        $numOfCategories = Category::count();
        $reminders = Reminder::latest()->paginate(5);
        return view('admin.index', compact('numofPosts','numofUsers', 'numOfCategories', 'reminders'));
    }

    public function posts(){
        $articles = Article::get()->all();
        return view('admin.posts', compact('articles'));
    }
    public function users(){
        $users = User::get()->all();
        return view('admin.users', compact('users'));
    }

    public function addpost(){
        $categories = Category::get()->all();
        return view('admin.addpost', compact('categories'));
    }

    public function addcategory(){
        $categories = Category::get()->all();
        return view('admin.addcategory', compact('categories'));
    }

    public function theme(){
        return view('admin.theme');
    }

    public function edit($id)
    {
      $article = Article::findOrFail($id);
      $categories = Category::get()->all();
      return view('admin.editPost', compact('article', 'categories'));
    }

    public function editUser($id)
    {
      $user = User::findOrFail($id);
      return view('admin.editUser', compact('user'));
    }


}
