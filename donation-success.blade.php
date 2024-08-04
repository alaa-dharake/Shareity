@extends('layouts.layout')
@section('page-title', 'Donation Success')

@section('content')
    <h1>Thank You!</h1>
    <p>Your donation to the campaign with ID {{ $campaign_id }} was successful.</p>
@endsection
