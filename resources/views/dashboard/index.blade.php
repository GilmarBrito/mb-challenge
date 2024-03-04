@extends('layouts.app')

@section('title')
@php($title = 'Dashboard')
@endsection

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex justify-content-between align-items-center">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <livewire:crypto.card-overview-market />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <livewire:crypto.card-overview-market-history />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title -->
        </div>
    </div>
</div>
@endsection
