<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likeItem()
    {
        $id = Auth::id();
        $likes = Like::where('user_id', $id)->orderBy('item_id', 'asc')->get(['item_id']);
        $items = array();
        foreach ($likes as &$like) {
            $item = Item::where('id', $like->item_id)->first();
            array_push($items, $item);
        }
        return view('home', compact("items"));
    }

    public function create($item_id)
    {
        Like::like(Auth::id(), $item_id);
        return redirect()->back();;
    }
    public function delete($item_id)
    {
        Like::where('user_id', Auth::id())->where('item_id', $item_id)->delete();
        return redirect()->back();;
    }
}