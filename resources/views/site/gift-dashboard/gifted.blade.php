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
                <h3>Gifted</h3>
                <button class="create-gift" style="margin-left:auto">Create Gift Page</button>
            </div>
            <div class="row" style="margin-top:50px;">
                <h3 style="height:50px; overflow: hidden;">GIFTED   --------------------------------------------------------------------------------------------------------------</h3>
            </div>
            @foreach($gifts as $gift)
            <div class="row">
                <div class="media">
                    <span class="media-left">
                        <img src="http://fynches.codeandsilver.com/public/front/img/img5.png" alt="Image Here">
                    </span>
                    <div class="media-body" style="margin-left:20px;">
                        <h4>{{$gift['sent_by']}}</h4>
                        <p>{{$gift['description']}}</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <p style="margin-right:auto">Gifted To: {{$gift['name']}}</p> <p>Gifted ${{$gift['price']}} of ${{$gift['price']}} Requested</p>
                <p style="margin-left:auto">Gifted On: {{date_create_from_format('Y-m-d', $gift['date_gifted'])->format('m-d-Y')}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
 

