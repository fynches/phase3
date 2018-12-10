@extends('site.info.layout')

@section('header')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="header">FYNCHES</h1>
                </div>
            </div>
        </div>    
    </header>
    <div class="container">
        <div class="row" id="hc">
            
            <div class="col-md-2">
                <button id="back" class="btn btn-outline-success go-back">GO BACK</button>
            </div>
            
            <div class="col-md-2 text-center stages">
                <div class="num"><p id="num_1">1</p><span hidden id="spanid"><img class="yellow-check" src="public/front/img/CheckIcon-yellow.png"></span></div>
                <div id="stage-1" class="stage-text"><a href="" style="color:black">Host + Child</a></div>
            </div>
            <div class="col-md-2 text-center stages">
                <div class="num"><p id="num_2">2</p><span hidden id="spanid1"><img class="yellow-check" src="public/front/img/CheckIcon-yellow.png"></span></div>
                <div id="stage-2" class="stage-text"><a href="" style="color:black">Date + Location</a></div>
            </div>
            <div class="col-md-2 text-center stages">
                <div class="num"><p id="num_3">3</p><span hidden id="spanid2"><img class="yellow-check" src="public/front/img/CheckIcon-yellow.png"></span></div>
                <div id="stage-3" class="stage-text"><a href="" style="color:black">Page Link</a></div>
            </div>
            <div class="col-md-2 text-center stages">
               <div class="num"><p id="num_4">4</p><span hidden id="spanid3"><img class="yellow-check" src="public/front/img/CheckIcon-yellow.png"></div>
               <div id="stage-4" class="stage-text"><a href="" style="color:black">Success</a></div>
            </div>
            <div class="col-md-2 text-center">
               
            </div>
        </div>
        
        <div class="row border-bottom"></div>
    </div>
    
    
    <div id="host-child">
        @include('site.info.host-child')
    </div>
    <div id="date-location" style="display:none;">
        @include('site.info.date-location')
    </div>
    <div id="page-link" style="display:none;">
        @include('site.info.page-link')
    </div>
    <div id="congratulations" style="display:none;">
        @include('site.info.congratulations')
    </div>
@stop



