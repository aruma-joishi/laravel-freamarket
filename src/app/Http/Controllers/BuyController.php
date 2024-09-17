<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;
use App\Models\Profile;
use App\Models\Item;
use App\Models\Bought;

use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function buy(Request $request)
    {
        $item = Item::where('id', $request->num)->first();
        $id = Auth::id();
        $profile = Profile::where('user_id',$id)->first();
        $settlements = Settlement::all();
        $settlement_id = 1;
        return view('buy', compact("item","profile","settlements","settlement_id"));
    }

    public function buyConfirm(Request $request)
    {
        $action = $request->get('settlement', 'address','confirm');
        $item = Item::where('id', $request->item_id)->first();
        if ($action == 'settlement') {
            return view('settlement',compact("request"));
        } elseif ($action == 'address') {
            return view('settlement', compact("request"));
        } else{
            $bought = $request->get('user_id', 'item_id');
            Bought::create($bought);
            return view('/')->with('result', '購入完了しました');
        }
    }
}
