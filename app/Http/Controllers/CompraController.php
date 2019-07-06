<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Inventory;
use config\Session;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->regenerate();
        $inventories = DB::select('select * from inventories, products WHERE inventories.id_prod = products.id_prod AND cantidad_prod > 0');
        if(!empty(session()->get('cart'))){
            foreach(session()->get('cart') as &$c){
                echo $c['id_prod'];
             }
        }
        return view('cliente.index',  compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = session()->get('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //session()->forget('cart');
        if(empty(session()->get('cart'))){
            session()->put('cart', array(array('id_prod'=>$request->input('id_product'), 'cantidad_prod'=>$request->input('cantidad_prod'))));
        }else{
            $cart = session()->get('cart');
            $repeated = false;

            foreach($cart as &$c){          
                if($c["id_prod"] == $request->input('id_product')){
                    $repeated = true;
                    break;
                }
            }
            if($repeated){
                return view('cliente');

            }else{
                array_push($cart, array('id_prod'=>$request->input('id_product'),'cantidad_prod'=>$request->input('cantidad_prod')));
                session()->put('cart', $cart);
            }

            
        }
        return back()->withInput();
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
