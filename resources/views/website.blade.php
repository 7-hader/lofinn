@extends('layouts.app')

@section('content')
    
  @include("layouts.modules.why")

  @include("layouts.modules.video")
  
  <div class="container">
    @include("layouts.modules.pack")
  </div>
 
@endsection