<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductDatatables extends LivewireDatatable
{
     public $model = Product::class;
    // public function render()
    // {
    //     return view('livewire.product-datatables');
    // }
    //  function columns()
    // {
    //     return [
    //         NumberColumn::name('id')->label('ID')->sortBy('id')->searchable(),
    //         Column::name('name')->label('Name')->filterable()->searchable()->truncate(),
    //         DateColumn::name('created_at')->label('Creation Date'),
    //         Column::callback(['id', 'name'], function ($id, $name) {
    //             return view('table-actions', ['id' => $id, 'name' => $name]);
    //         })->unsortable()
    //     ];
    // }
}
