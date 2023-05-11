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
             @foreach($member as $members)
                <div>
                {{ $members['ign'] }} - {{ $members['skill'] }}
                </div>
            @endforeach
    </div>
</div>
@endsection