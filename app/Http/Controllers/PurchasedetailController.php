<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchasedetail;

class PurchasedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchasedetails=Purchasedetail::with('item')->get();
		return response()->json($purchasedetails);
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
        $purchasedetail= new Purchasedetail([
			'purchase_id'=>$request->get('purchase_id'),
			'item_id'=>$request->get('item_id')
		]);
		$purchasedetail->save();
		return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchasedetail=Purchasedetail::find($id);
		return response()->json($purchasedetail);
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
        $purchasedetail=Purchasedetail::find($id);
		$purchasedetail->purchase_id=$request->get('purchase_id');
		$purchasedetail->item_id=$request->get('item_id');
		$purchasedetail->save();
		
		return response()->json('Successfully Update');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchasedetail=Purchasedetail::find($id);
		$purchasedetail->delete();
		
		return response()->json('Successfully Deleted');
    }
}
