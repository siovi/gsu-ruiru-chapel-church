<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DB;

class CheckoutController extends Controller
{
   public function checkout()
{
	return view('Givings');
  }

  public function submit(Request $request)
{ 
    $order_id = DB::table('tbl_order')->insertGetId(
        [
            'firstname'    => $request->get('firstname'), 
            'lastname'     => $request->get('lastname'),
            'email'         => $request->get('email'),
            'total_payment' => Cart::total(),
            'total_tax'     => Cart::tax(),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
            'paymentdone'       => '0'
        ]
    );

    foreach(Cart::content() as $row)
    {
        $submit = DB::table('tbl_item')->insertGetId(
            [
                'order_id'      => $order_id, 
                'product_id'    => $row->id,
                'amount'        => $row->price,
                'qty'           => $row->qty,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]
        );
    }

    $paypalId = '';
    $query = array();
    $query['business']      = $paypalId;
    $query['cmd']           = '_xclick';
    $query['item_name']     = 'Project';
    $query['no_shipping']   = '1';
    $query['item_number']   = $order_id;
    $query['amount']        = Cart::total();
    $query['currency_code'] = 'USD';
    $query['cancel_return'] = 'http://example.com/cancel';
    $query['return']        = 'http://example.com/response';
    $query_string = http_build_query($query);

    header('Location: https://www.sandbox.paypal.com/cgi-bin/webscr?' . $query_string);
    exit();    
}

public function response(Request $request)
{
    if(!empty($request->get('item_number')))
    {
        $item_number  = $request->get('item_number');
        $status  = $request->get('st');
        if($status == 'Completed')
        {
            $getdetail = DB::table('tbl_order')
             ->where('id','=',$item_number)
               ->select('*')
               ->first();    

            if(count($getdetail) > 0)
            {
                $query_update =  DB::table('tbl_order')
                    ->where('id', $item_number)
                    ->update([
                    'paymentdone' => '1',
                ]);

                Cart::destroy();
                return redirect('checkout')->with('success','Thank you! Your order successfully placed.');
            }
            else
            {
                return redirect('checkout')->with('error','Due to some error please try again.');
            }
        }
        else
        {
            return redirect('checkout')->with('error','Due to some error please try again.');
        }    
    }
    else
    {
        return redirect('checkout')->with('error','Due to some error please try again.');
    }
}
public function cancel()
{
    return redirect('checkout')->with('error','Your payment is cancel please try again.');
}
}
