@extends("layout.layout")
@section("body")
<div id="slay"></div>
<div id="popularNoticiaSlayder"></div>
    <div id="noticiaNew"></div>



    @php
        echo " --- rol ".session()->get('rol');
        echo " --- email".session()->get('email');
        echo " --- card".session()->get('card');
    // echo "".session()->exists('email')."".session()->get('rol')=== '4';
    @endphp
@endsection