@extends('layouts.shared')

@section('content')




<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">All Department</span>
            <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>
        </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section service-2">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                  <div class="section-title">
                      <h2>Award winning patient care</h2>
                      <div class="divider mx-auto my-4"></div>
                      <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                  </div>
              </div>
          </div>
          <div class="card-group ">
            
            @foreach ($Depart as $depart)

            <div class="card ml-4 " >
              <img src="{{$depart->image}}" class="card-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$depart->name}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                
              </div>
            </div>
            @endforeach 

          </div>



      
               </div>
       </section>
  
  @endsection 