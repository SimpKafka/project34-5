<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{

    public function index()
    {
            $promotion = Promotion::Paginate(4);
            return view('admin.promotion.index',compact('promotion'));
    }

    public function createform()
    {
        return view('admin.promotion.create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'promotion' => 'required|unique:promotions|max:255'
        ]);
        $promotion = new Promotion();
        $promotion->promotion = $request->promotion;
        $promotion->image = $request->iamge;
        $promotion->save();
        return redirect()->route('pro.index');
    }

    public function edit($promotion_id){
        $product = Promotion::find($promotion_id);
        return view('admin.promotion.updateform',compact('promotion'));
    }

    public function update(Request $request, $promotion_id){
        $promotion = Promotion::find($promotion_id);
        $promotion->image = $request->price;
        $promotion->update();
        return redirect()->route('pro.index');
    }

    public function delete($prmotiont_id){
        $promotion = Promotion::find($promotion_id);
        $promotion->delete();
        return redirect()->route('pro.index');
    }


}
