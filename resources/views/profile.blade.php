@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
    <div>
        <h2>History</h2>
            <x-rent-logs-table :rentlog='$rent_logs'/>
    </div>
@endsection

