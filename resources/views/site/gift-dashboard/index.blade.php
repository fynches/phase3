@extends('site.gift-dashboard.gift-info')
@extends('site.layout.account-header')

@section('content')
<div class="container">
    <div class="row" style="margin-top:50px;">
        <div class="col-md-3">
            <ul class="dashboard-list">
                <h4>Dashboard</h4>
                <li><a href="http://fynches.codeandsilver.com/gift-dashboard">Gift Pages</a></li>
                <li><a href="http://fynches.codeandsilver.com/gifted">Gifted</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="row">
                <h3>Gift Pages</h3>
                <button class="create-gift" style="margin-left:auto">Recent Gifts</button>
            </div>
            <div class="row" style="margin-top:50px;">
                <h3 style="height:50px; overflow: hidden;">Active Gift Pages    ----------------------------------------------------------------------------------</h3>
            </div>
            @foreach($gifts as $gift)
            <div class="row">
                <div class="media">
                    <span class="media-left">
                        <img src="http://fynches.codeandsilver.com/public/front/img/img5.png" alt="Image Here">
                    </span>
                    <div class="media-body" style="margin-left:20px;">
                        <h4>{{$gift['name']}}</h4>
                        <p>{{$gift['details']}}</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                @if($gift['published'] === TRUE)
                 <p>Gift Page Status: Published</p>
                @else
                <p>Gift Page Status: Unpublished <a href="" style="text-decoration: underline;">Make Page Live</a></p>
                @endif
                <div style="margin-left:auto">
                    <a href=""><i style="font-size:24px;margin-left:20px;color: black;" class="fa fa-bank"></i></a>
                    <a href=""><i style="font-size:24px;margin-left:20px;color: black;" class="far fa-file-alt"></i></a>
                    <a href=""><i style="font-size:24px;margin-left:20px;color: black;" class="far fa-edit"></i></a>
                    <a href=""><i style="font-size:24px;margin-left:20px;color: black;" class="far fa-trash-alt"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
 

