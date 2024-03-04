@extends('layouts.app')

@section('title')
@php($title = 'Cryptocurrencies')
@endsection

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <livewire:crypto.table />
            </div>
        </div>
    </div>
</div>

@endsection
