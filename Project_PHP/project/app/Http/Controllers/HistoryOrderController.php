<?php

namespace App\Http\Controllers;

use App\Models\HistoryOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $orders = HistoryOrder::all();
        $user=Auth::user();
        return view('history_orders.index')->with('history_orders', $orders)->with('users', $user);*/

        return "p";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryOrder  $historyOrder
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryOrder $historyOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryOrder  $historyOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryOrder $historyOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\HistoryOrder  $historyOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoryOrder $historyOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryOrder  $historyOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryOrder $historyOrder)
    {
        //
    }
}
