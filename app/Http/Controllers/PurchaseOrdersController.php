<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PurchaseOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaseorders = DB::table('purchase_orders')
        ->join('suppliers', 'suppliers.id', 'purchase_orders.supplier_id')
        ->get();
        
        return view('purchaseorders.index')->with('purchaseorders', $purchaseorders);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderdetails = DB::table('purchase_order_details')
        ->join('purchase_orders', 'purchase_orders.id', 'purchase_order_details.prder_id')
        ->join('items', 'items.id', 'purchase_order_details.item_id')
        ->where('purchase_order_details.prder_id', $id)
        ->get();

        return view('purchaseorders.show')->with('orderdetails', $orderdetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
