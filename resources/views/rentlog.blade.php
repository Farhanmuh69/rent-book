@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name','dashboard')

@section('content')

<div class="mt-5">
    <h1>Rent Log</h1>
    <x-rent-logs-table :rentlog='$rent_logs'/>
</div>

@endsection

