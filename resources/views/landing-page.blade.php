 @extends('layouts.master')

 @section('content')
     <div class="container mt-4">
         <h1>landing page</h1>
         {{-- memanggil gambar dari folder public --}}
         <img src="{{asset('images/instagram.png')}}" alt="">
     </div>
 @endsection
