@extends('seller.app')
 @section('title', 'Marketplace')
 @push('page-styles')
 <style>
    .inline-block {
        display: inline-block;
    }
    .error_div {
        margin: auto;
        width: 100%;
        border: 1px solid #1f2d3d;
        padding: 10px;
    }
    .error_div li {
        list-style: none;
    }
</style> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
@endpush  
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
      <h1>Product List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">   
               <a href="#">Home</a>
            </li>
             <li class="breadcrumb-item active">Product List</li>
          </ol>
        </div>
   <div class="col-md-12" style="margin-top: 1rem;">  
   <livewire:create/>   
  </div>
  <!-- /.container-fluid -->
</section>  

               
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product List</h3>
              </div>

                <div class="card-body">


                  


                <livewire:product-datatables  exportable />
                
              </div>
                 
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
    </div>
</section>
<!-- /.content -->

@stop
@push('page-scripts')





@endpush