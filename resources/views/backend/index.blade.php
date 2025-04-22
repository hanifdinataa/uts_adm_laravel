@extends('backend.layouts.main')
@section('content')
<div class="m">
   <div style="background-color: pink; padding: 20px; text-align: center; animation: fadeIn 2s; ">
      <img src="{{ asset('img/hanif.jpg') }}" alt="My Photo" style="width: 200px; height: auto; border-radius: 50%;">
      <h1 style="font-size: 2em; margin-top: 20px;">Hanif dinata</h1>
      <p style="font-size: 1.2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
   </div>
</div>
  

   <style>
      @keyframes fadeIn {
         from { opacity: 0; }
         to { opacity: 1; }
      }
      .m {
         padding-top: 20px;
      }
   </style>
@endsection
