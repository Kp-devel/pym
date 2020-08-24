@extends('layouts.app')

@section('content')
<div class="bg-img ">
    <!-- proveedor -->
    @if($tipo=="proveedor")
        <frm-proveedor/>
    @endif
    <!-- cliente -->
    @if($tipo=="cliente")
        <frm-proveedor/>
    @endif
    <!-- mercader -->
    @if($tipo=="mercader")
        <frm-mercader/>
    @endif
</div>
@endsection
