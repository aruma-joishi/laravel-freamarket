<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellRequest;

use App\Models\Condition;
use App\Models\Category;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;

class SellController extends Controller
{

    public function  sell()
    {
        $categories = Category::all();
        $conditions = Condition::all();
        return view('sell', compact("categories", "conditions"));
    }

    public function  sellConfirm(SellRequest $request)
    {
        $image = $request->file('image');
        $path = $image->store('public/image');
        $model->path = $path;
        $model->save();

        $request['img_url']= 1;
        $item = $request->only(['img_url','name', 'price', 'description', 'user_id', 'category_id', 'condition_id']);
        Item::create($item);
        return redirect('/')->with('result', '出品が完了しました');
    }


}
