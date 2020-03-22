<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function give(Request $request)
    {
        $validateDate = $request->validate([
            'church' => 'required',
            'service' => 'required',
            'user' => 'required',
            'church' => 'required',
            'amount' => 'required',
            'payment_category' => 'nullable',
        ]);
        

        $payment = new Payment;
        $payment->church_id = $request->church;
        $payment->service_id = $request->service;
        $payment->user_id = $request->user;
        if($request->filled('payment_category')){
            $payment->payment_category_id = $request->payment_category;
        }else{
            $payment->payment_category_id = 1;
        }
        $payment->amount = $request->amount;
        $payment->save();

        return response()->json($payment);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = Payment::where('user_id', $request->user()->id)
                            ->latest()->get();

        return view('users.finance', compact('payments'));
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
