<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Item;
use App\Models\Comment;
use App\Models\User;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('home', compact("items"));
    }

    public function search(Request $request)
    {
        $items = Item::where('name')->keywordSearch($request->keyword)->get();
        return view('home', compact("items"));
    }

    public function item(Request $request)
    {
        $item = Item::where('id', $request->num)->first();
        $categories = Category::all();
        $conditions = Condition::all();
        return view('item', compact("item","categories","conditions"));
    }

    public function comment(Request $request)
    {
        $item = Item::where('id', $request->num)->first();
        $comments = Comment::where('item_id', $request->num)->get();
        $profiles = Profile::all();
        return view('comment', compact("item", "comments","profiles"));
    }

    public function commentConfirm(Request $request)
    {
        $comment = $request->only(['comment','user_id','item_id']);
        Comment::create($comment);
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        Comment::find($request->comment_id)->delete();
        return redirect('comment/{$request->item_id}');
    }


    public function mypage()
    {
        $id = Auth::id();
        $profile = Profile::where('user_id',$id)->first();
        $items = Item::where('user_id', $id)->get();
        return view('mypage', compact("items", "profile"));
    }

    public function bought()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $items = Item::where('user_id', $id)->first();
        return view('mypage', compact("items", "user"));
    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $profile = Profile::where('user_id', $id)->first();
        return view('profile', compact("user","profile"));
    }

    public function update(ProfileRequest $request)
    {
        $profile = $request->only(['name', 'postcode', 'address','building']);
        dd($profile);
        unset($profile['_token']);
        Profile::find('user_id',$request->user_id)->first()->update($profile);
        return redirect('/mypage');
    }


}
