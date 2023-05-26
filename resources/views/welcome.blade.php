@extends('layout.app')

@section('content')
   <div class="row row-cols-4">
      @foreach ($trains as $train)
      <div class="col d-flex flex-wrap">
             <div class="card">
               <h3>{{$train->Azienda}}</h3>
               <p></p>
             </div>
            </div>
            @endforeach
   </div>
   
@endsection