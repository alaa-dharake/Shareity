@extends('layouts.layout')
@section('page-title')
My Campaigns
@endsection
@section('content')

<div class="page-start">
    <div class="con">
        <h1 class="large-heading">All My Campaigns <span>({{ $campaigns->count() }})</span> </h1>
        <div class="all-campaigns">
            @if($campaigns->count() == 0)
            <h3>You have not created any campaigns yet</h3>
            @else 
                @foreach ($campaigns as $campaign)
                <div class="campaign-card">
                    <img src="{{$campaign->image ? asset('storage/' . $campaign->image) : asset('/images/logo.png')}}" alt="" >
                    <div class="campaign-info">
                        <h1>{{ $campaign->campaign_name }}</h1>
                        <h4><span>By</span> {{ $campaign->author }}</h4>
                        <div class="donated-amount">{{ $campaign->donated_amount }}FCFA</div>
                        {{-- <input type="range" name="percentage" id="percentage" value="{{ (($campaign->donated_amount)*100)/$campaign->goal_amount }}" disabled> --}}
                        {{-- <div class="card-flex">
                            <div class="percentage">{{ (($campaign->donated_amount)*100)/$campaign->goal_amount }}% Donated</div>
                            <div class="goal">Goal: {{ $campaign->goal_amount }}FCFA</div>
                        </div> --}}
                        <p>{{ $campaign->description }}</p>
                        <div class="card-flex">
                            <a href="/campaigns/{{$campaign->id}}/edit" class="btn btn-blue">Edit</a>
                            {{-- <button href="" class="btn btn-red delete-btn">Delete</button> --}}
                            <button href="" class="btn btn-red cancel-delete">Cancel</button>
                            <form action="/campaigns/{{$campaign->id}}" method="POST" style="display: inline;">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button type="submit" class="fonticon-wrap" style="background: none; border: none; cursor: pointer; margin-right: 10px; color: #f5700a;">
                                   Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
