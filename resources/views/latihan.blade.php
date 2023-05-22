@extends('layouts.base')

@section('text')

    
<div class="row">
    <div class="col text-center p-3">
        <img class="logo" src="/img/cl_primary.png">
    </div>
</div>

<div class="p-5 full-height">
    <div class="content">        
        <div class="title m-b-md">
            Member list
        </div>
                 
        <div class="container mt-5">
            <div class="row">
                @foreach($member as $members)
                <div class="col-sm-3 p-3 text-black">   
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="/img/{{ $members['img']}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{ $members['ign'] }}</h4>
                            <p class="card-text">{{ $members['skill'] }}</p>
                            <p class="card-text">{{ $members['weap']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach    
            </div>
        </div>    
    </div>
</div>
@endsection