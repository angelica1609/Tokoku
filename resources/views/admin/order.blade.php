@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <h5>DAFTAR ORDERAN</h5>
        </div>
        @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
        <div class="card-body">
            <ul class="list-group">
                @foreach ($orders as $order)
                <a href="{{ route('admin.showorder',['id'=>$order->id]) }}" class="list-group-item latest-order">
                    <div class="row">
                    
                        <div class="col-12 d-flex">
                            <div class="id" style="width:150px">Order ID: {{ $order->id }}</div>
                            <div class="name">Customer Name: {{ $order->name }}</div>
                            <div class="status text-success ml-auto">PAID</div> 
                        </div>
                    </div>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>
    
@endsection