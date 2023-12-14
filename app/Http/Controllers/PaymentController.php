<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Item;

class PaymentController extends Controller
{
    public function index(Request $request){
        $item = Item::findOrFail($request->item_id);
        $buyer = Auth::guard('buyer')->user();

        return view('payment', [ 
            "title" => "Payment",
            'buyer' => $buyer,
            'item' => $item,
        ]);
    }

    public function add_transaction(Request $request) {
        $validated = $request->validate([
            't_quantity' => 'required',
            't_paymentmethod' => 'required',
            't_totalprice' => 'required',
            't_paymentproof' => 'required|file|image',
            'buyer_id' => 'required',
            'item_id' => 'required',
            'seller_id' => 'required',
        ]);

        $validated['t_status'] = 'WAITING';

        if ($request->file('t_paymentproof')) {
            $file = $request->file('t_paymentproof');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/paymentproof/' . $filename);
            $validated['t_paymentproof'] = '/storage/paymentproof/' . $filename;
        }

        // Add to transaction table
        Transaction::create($validated);

        // Remove the item from cart
        Cart::where('buyer_id', $validated['buyer_id'])
            ->where('item_id', $validated['item_id'])
            ->first()
            ->delete();

        // Decrease the item stock
        $item = Item::findOrFail($validated['item_id']);
        $item['i_stock'] = $item['i_stock'] - 1;
        $item->save();

        return redirect('/cart')->with('paymentSuccessful', 'Payment success, please wait for seller confirmation');
    }

    public function confirm_transaction(Request $request) {
        $t = Transaction::findOrFail($request->t_id);
        $t['t_trackingcode'] = $request->t_trackingcode;
        $t['t_status'] = 'ON DELIVERY';
        $t->save();

        return redirect('/dashboard/order')->with('orderConfirmed', 'Order #' . $request->t_id . ' confirmed!');
    }
}
