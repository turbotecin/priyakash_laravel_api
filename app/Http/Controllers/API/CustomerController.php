<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    function list(){
        $response = array();

        $customer_list = DB::table('customers')
                        ->where('is_delete', '=', 0)
                        ->Where('is_active', '=', 1)
                        // ->where('company_Id', '=', $companydetails->company_Id)
                        ->get();
                        
        $response['status'] = 'success';
        $response['msg'] = '';
        $response['response']['customer_list'] = $customer_list;
        return $response;
    }
}
