<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Field;
use App\Models\{
Seller,
ProductType,
Product
};
use Illuminate\Support\Str;

class Create extends Component
{

    public $showDiv = false;
 
    public function render()
    {
        return view('livewire.create');
    }
    public function openDiv()
    {
        $this->showDiv =! $this->showDiv;
    }
      
    public $form=['name'=>'',  
                'HSNCode' =>'',
                'description'=>'',
                'min_quantity'=>'',
                'max_quantity'=>'',
                'MRP'=>'',
                'SellingPrice'=>'',
                'Tax'=>'',
                'Length'=>'',
                'Weight'=>'',
                'Width'=>'',
                'Height'=>'',
                'Brand'=>'',
                'ProductType'=>'',
                'attribute'=>'',
                'cess_prefix'=>'',
                'cess'=>'',
                'SelfShipping'=>'',
                'attributes'=>'',
            ];
    protected $rules = [
        'form.name' => 'required|min:6',
        'form.HSNCode' =>'required',
        'form.description'=>'required',
        'form.min_quantity'=>'required|numeric',
        'form.max_quantity'=>'required|numeric|gt:form.min_quantity',
        'form.MRP'=>'required|numeric',
        'form.SellingPrice'=>'required|numeric',
        'form.Tax'=>'required|numeric',
        'form.Length'=>'required|numeric',
        'form.Weight'=>'required|numeric',
        'form.Width'=>'required|numeric',
        'form.Height'=>'required|numeric',
    ];

    public function submit()
    {
        // $this->validate();
        
 
      $cess=$this->form['cess'].$this->form['cess_prefix'];
        // Product::create($this->form);
        $product = new Product();
        $product->name = $this->form['name'];
        $product->slug = Str::random(10);
        $product->seller_id = 1;
        $product->product_type_id = 1;
        $product->brand_id = 1;
        $product->cess=$cess;
        $product->hsn_code = $this->form['HSNCode'];
        $product->description = $this->form['description'];
        $product->min_order_qty = $this->form['min_quantity'];
        $product->max_order_qty = $this->form['max_quantity'];
        $product->mrp = $this->form['MRP'];
        $product->selling_price = $this->form['SellingPrice'];
        $product->tax = $this->form['Tax'];
        $product->weight = $this->form['Length'];
        $product->length = $this->form['Weight'];
        $product->width = $this->form['Width'];
        $product->height = $this->form['Height'];
        if($this->form['SelfShipping']){
        $product->self_shipping = $this->form['SelfShipping'];
        }
        if($this->form['attributes']){
        $product->attributes = json_encode($this->form['attribute']);
         }
        $product->save();
        
        $this->showDiv = false;
       session()->flash('message', 'Product Add Successfully..!.');
    }
}
