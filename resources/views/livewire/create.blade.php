<div>
     <button type="button" wire:click="openDiv" class="btn btn-block btn-secondary col-md-3">Add Product</button>
   <br>

@if($showDiv)
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Basic Product Information</h3>
                    </div>
               @include('flash-message')
                    <!-- /.card-header -->
                    <!-- form start -->
                     <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
                    <form wire:submit.prevent="submit">
                        @csrf
 
  

                        <div class="card-body">
                            <div class="form-group col-md-5 inline-block">
                                <label for="name">Name<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" wire:model="form.name" id="name" value="{{Request::old('form.name')}}" class="form-control @error('form.name') is-invalid @enderror" />

                                @if($errors->has('form.name'))
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.name')}}</em>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="hsn_code">HSN Code<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.HSNCode') is-invalid @enderror" wire:model="form.HSNCode" value="{{Request::old('form.HSNCode')}}" />
                                @if($errors->has('form.HSNCode'))
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.HSNCode')}}</em>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-md-10">
                                <label for="description">Description<span class="m-l-5 text-danger"> *</span></label>
                                <textarea class="form-control @error('form.description') is-invalid @enderror" id="description" value="{{Request::old('form.description')}}" wire:model="form.description" rows="3">
                                {{ Request::old('form.description') }}

                                </textarea>
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.description')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="min_quantity">Minimum Quantity<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.min_quantity') is-invalid @enderror" id="min_quantity" wire:model="form.min_quantity" 
                                value="{{Request::old('form.min_quantity')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.min_quantity')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="max_quantity">Maximum Quantity<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.max_quantity') is-invalid @enderror" id="max_quantity" wire:model="form.max_quantity" 
                                value="{{Request::old('form.max_quantity')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.max_quantity')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="mrp">MRP<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.MRP') is-invalid @enderror" wire:model="form.MRP" id="mrp" value="{{Request::old('form.MRP')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.MRP')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="Selling_Price">Selling Price<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.SellingPrice') is-invalid @enderror" id="Selling_Price" wire:model="form.SellingPrice" value="{{Request::old('form.SellingPrice')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.SellingPrice')}}</em>
                                </span>
                            </div>

                          

                        <div class="form-group col-md-6 inline-block">
                      <label for="cess">Cess Charge</label>
                       <!--  <span for="Cess">Cess Charge:</span> -->
                        <input type="number" wire:model="form.cess" step="0.01"  
                        class="form-control col-md-4 inline-block" maxlength="10" data-validation-required="1" data-validation-regex="^[0-9]*(\.[0-9]{1,2})?$" 
                        value="0" data-validation-number="float" min="0" >

                        <select  wire:model="form.cess_prefix" class="form-control col-md-2 inline-block">
                            <option value="INR">INR</option>
                            <option value="%">%</option>
                        </select>
               
                       </div>
                         <div class="form-group col-md-3 inline-block">
                                <label for="Tax">Tax<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" id="Tax" class="form-control @error('form.Tax') is-invalid @enderror" wire:model="form.Tax" value="{{Request::old('form.Tax')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.Tax')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-3 inline-block">
                                <label for="Length">Length<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.Length') is-invalid @enderror" id="Length" wire:model="form.Length" value="{{Request::old('form.Length')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.Length')}}</em>
                                </span>
                            </div>
                            <div class="form-group col-md-2 inline-block">
                                <label for="Weight">Weight<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.Weight') is-invalid @enderror" id="Weight" wire:model="form.Weight" value="{{Request::old('form.Weight')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.Weight')}}</em>
                                </span>
                            </div>
                            <div class="form-group col-md-2 inline-block">
                                <label for="Width">Width<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.Width') is-invalid @enderror" id="Width" wire:model="form.Width" value="{{Request::old('form.Width')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.Width')}}</em>
                                </span>
                            </div>
                    

                       
                           

                   <div class="form-group col-md-3 inline-block">
                                <label for="Height">Height<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('form.Height') is-invalid @enderror" id="Height" wire:model="form.Height" value="{{Request::old('Height')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.Height')}}</em>
                                </span>
                            </div>
                            @php
             $brands = \App\Models\Brand::all();
            @endphp
               
                           <div class="form-group col-md-10 inline-block">
                                <label for="">Brand</label>
                                
                                <select class="form-control" id="" 
                                wire:model="form.Brand">
                                 <option></option>
                                 @foreach($brands as $brand)
                                 <option value="{{$brand->id}}" >{{$brand->name}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
            @php
             $productTypes = \App\Models\ProductType::where('status',1)->get();
            @endphp
                           <div class="form-group col-md-10 inline-block">
                                <label for="">Product Type</label>
                                <select class="form-control" id="" 
                                wire:model="form.ProductType">
                                 <option></option>
                                 @foreach($productTypes as $type)
                                 <option value="{{$type->id}}" >{{$type->name}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
                             
                            
            @php
             $attributeOptions = \App\Models\Attribute::with('values')->get();

            @endphp
             @foreach($attributeOptions as $attr)
                        <p>
                           <div class="form-group col-md-10 inline-block">
                                <label for="">{{$attr->name}}</label>
                                
                                <select class="form-control" id="" 
                                wire:model="form.attribute[{{$attr->name}}]" >
                                 <option></option>
                                  @foreach($attr->values as $val)
                                 <option >{{$val->value}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
                             </p>
                             @endforeach

                              <div class="custom-control custom-checkbox">
                                <input class="custom-control-input @error('form.SelfShipping') is-invalid @enderror" type="checkbox" id="customCheckbox1" value="1" 
                                wire:model="form.SelfShipping" value="{{Request::old('form.SelfShipping')}}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('form.SelfShipping')}}</em>
                                </span>
                                <label for="customCheckbox1" class="custom-control-label">Self Shipping</label>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Product</button>
                             &nbsp;&nbsp;&nbsp;

                        <button type="button" class="btn btn-secondary" wire:click="openDiv"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endif
</div>

