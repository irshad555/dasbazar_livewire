<div>
   <section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update Product Information</h3>
                    </div>

                 
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form >
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}" />
                        <input type="hidden" name="type_id" value="{{$product->product_type_id}}" />
                        <div class="card-body">
                            <div class="form-group col-md-5 inline-block">
                                <label for="name">Name<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" id="name" name="Name" id="name"
                                 
                                 value="{{ old('Name', $product->name) }}"

                                  class="form-control @error('Name') is-invalid @enderror" />

                                @if($errors->has('Name'))
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Name')}}</em>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="hsn_code">HSN Code<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control 
                                @error('HSNCode') is-invalid @enderror" 
                                name="HSNCode" id="hsn_code"
                                 
                                 value="{{ old('HSNCode', $product->hsn_code) }}"
                                  />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('HSNCode')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-10">
                                <label for="description">Description<span class="m-l-5 text-danger"> *</span></label>

                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" 
                               
                                value="{{ old('description', $product->description) }}"
                                 name="description" rows="3">
                                {{old('description', $product->description)}}
                                </textarea>
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('description')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="min_quantity">Minimum Quantity<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('min_quantity') is-invalid @enderror" id="min_quantity" name="min_quantity" 
                                value="{{ old('min_quantity', $product->min_order_qty) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('min_quantity')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-5 inline-block">
                                <label for="max_quantity">Maximum Quantity<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('max_quantity') is-invalid @enderror" id="max_quantity" name="max_quantity" 
                                value="{{ old('max_quantity', $product->max_order_qty) }}"/>
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('max_quantity')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-3 inline-block">
                                <label for="mrp">MRP<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('MRP') is-invalid @enderror" name="MRP" id="mrp" 
                                value="{{ old('MRP', $product->mrp) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('MRP')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-3 inline-block">
                                <label for="Selling_Price">Selling Price<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('SellingPrice') is-invalid @enderror" id="Selling_Price" name="SellingPrice" 
                                value="{{ old('SellingPrice', $product->selling_price) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('SellingPrice')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-4 inline-block">
                                <label for="Tax">Tax<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" id="Tax" class="form-control @error('Tax') is-invalid @enderror" name="Tax" 
                                value="{{ old('Tax', $product->tax) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Tax')}}</em>
                                </span>
                            </div>

                            <div class="form-group col-md-3 inline-block">
                                <label for="Length">Length<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('Length') is-invalid @enderror" id="Length" name="Length" 
                                 value="{{ old('Length', $product->length) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Length')}}</em>
                                </span>
                            </div>
                            <div class="form-group col-md-2 inline-block">
                                <label for="Weight">Weight<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('Weight') is-invalid @enderror" id="Weight" name="Weight" 
                                 value="{{ old('Weight', $product->weight) }}"/>
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Weight')}}</em>
                                </span>
                            </div>
                            <div class="form-group col-md-2 inline-block">
                                <label for="Width">Width<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('Width') is-invalid @enderror" id="Width" name="Width" 
                                 value="{{ old('Width', $product->width) }}"/>
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Width')}}</em>
                                </span>
                            </div>
                            <div class="form-group col-md-3 inline-block">
                                <label for="Height">Height<span class="m-l-5 text-danger"> *</span></label>
                                <input type="text" class="form-control @error('Height') is-invalid @enderror" id="Height" name="Height"  value="{{ old('Height', $product->height) }}" />
                                <span class="invalid feedback text-danger" role="alert">
                                    <em>{{$errors->first('Height')}}</em>
                                </span>
                            </div>
                            @php
                             $brands = \App\Models\Brand::all();
                            
                            @endphp
                           <div class="form-group col-md-10 inline-block">
                                <label for="">Brand</label>
                                
                                <select class="form-control" id="" 
                                name="Brand">
                                 <option></option>
                                 @foreach($brands as $brand)
                                 <option 

                        {{($product->brand_id == $brand->id) ? 'selected' : ''}} 

                                 value="{{$brand->id}}" >
                                    {{$brand->name}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
                            @php
                             $productTypes = \App\Models\ProductType::where('status',1)->get();

                            @endphp
             
                        
                           <div class="form-group col-md-10 inline-block">
                                <label for="">Product Type</label>
                                
                                <select class="form-control" id="" 
                                name="ProductType">
                                 <option></option>
                                 @foreach($productTypes as $type)
                                 <option value="{{$type->id}}" 
                                    {{($product->product_type_id == $type->id) ? 'selected' : ''}}>{{$type->name}}</option>
                                  @endforeach
                                </select>
                                
                            </div>
                            @php
                            $attributeOptions = \App\Models\Attribute::with('values')->get();
                            $product_attr = json_decode($product->attributes, true);
                            @endphp
                            @foreach($attributeOptions as $attr)     
                            <p>
                            <div class="form-group col-md-10 inline-block">
                            <label for="">{{$attr->name}}</label>                     
                            <select class="form-control" id="" name="attribute[{{$attr->name}}]">
                            <option></option>
                            @foreach($attr->values as $val)
                            <option  
                            {{(!empty($product_attr[$attr->name]) && $product_attr[$attr->name] == $val->value) ? 'selected' : ''}}>
                            {{$val->value}}
                            </option>
                            @endforeach
                            </select>
                            </div>
                            </p>
                            @endforeach
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input @error('SelfShipping') is-invalid @enderror" type="checkbox" id="customCheckbox1" name="SelfShipping" value="1" 
                            @isset($product->self_shipping)
                            {{($product->self_shipping == "1" ? 'checked' : '')}}@endisset >
                            <label for="customCheckbox1" class="custom-control-label">Self Shipping</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                             &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
</div>
