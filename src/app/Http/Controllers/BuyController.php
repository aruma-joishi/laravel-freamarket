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
        if ($action == 'settlement') {
            return redirect('/')->withInput();

        } elseif ($action == 'address') {
            $request['tel'] = $request['firsttel'] .= $request['middletel'] .= $request['lasttel'];
            $contact = $request->only(['lastname', 'firstname', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'detail']);
            Contact::create($contact);
            return view('thanks');

        } else{
            $bought = $request->get('user_id', 'item_id');
            Bought::create($bought);
        }
    }
}
