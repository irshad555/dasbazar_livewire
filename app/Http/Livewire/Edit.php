<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;


class Edit extends Component
{ 
    public $product;
    public $id;

     public function mount($id)
    {
       $product=Product::where('id',$id)->first();
    }
    public function render()
    {
        
        return view('livewire.edit');
    }
}
