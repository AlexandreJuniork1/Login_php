@extends('layout')
@section('title', 'Dashboard')

@section('main')
    <div class="cards">
        <div class="card-single">
            <h1>54</h1>
            <span>Custormers</span> 
            <span class="las la-users"></span>
        </div>  
        <div class="card-single">
            <h1>79</h1> 
            <span>Projects</span> 
            <span class="las la-clipboard-list"></span>
        </div>
        <div class="card-single">
            <h1>124</h1>
            <span>Orders</span> 
            <span class="las la-shopping-bag" ></span>
        </div>
        <div class="card-single">
            <h1>6k</h1>
            <span>Income</span> 
            <span class="lab la-google-wallet"></span>
        </div>
    </div>
@endsection