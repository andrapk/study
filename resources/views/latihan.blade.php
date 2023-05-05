@extends('layouts.base')

@section('text')
<img src="/img/cl_primary.png">
<div class="flex-center position-ref full-height">

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