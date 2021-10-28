<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{

Product
};
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected function manageProducts()
    {
    return view('seller.catalog.products',compact([]));
    }
    protected function manageProductsAjax()
    {    
    $data = Product::all(); 


    return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('status',function($data)
                {
                $statusBtn = '

                <input data-id="'.$data->id.'" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                 '.($data->status == 1 ? 'checked' : '').' >';
                return $statusBtn; 
                })

                ->addColumn('action',function($data)
                {
                $actionBtn = '
                    <a style="display:inline-block" href=""
                class="btn btn-sm">
                 <i class="fa fa-eye text-info" aria-hidden="true"></i>
                </a>
               <br>
                <a style="display:inline-block" href=""
                class="btn btn-sm">
                <i class="fas fa-edit " aria-hidden="true"></i>
                </a> 
                 <br>
                <a style="display:inline-block" data-id="'.$data->id.'"   class="btn btn-sm delete">
                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                </a>';

                return $actionBtn;
                })
                ->escapeColumns([])
                
                ->rawColumns(['action','status'])
                ->make(true);
    }
}
