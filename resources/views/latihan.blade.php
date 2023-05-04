@extends('layouts.base')

@section('text')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Member list
        </div>
            <div>
                {{ $member[0]['ign'] }} - {{ $member[0]['skill'] }}
                {{ $member[1]['ign'] }} - {{ $member[1]['skill'] }}
                {{ $member[2]['ign'] }} - {{ $member[2]['skill'] }}
                {{ $member[3]['ign'] }} - {{ $member[3]['skill'] }}
            </div>        
    </div>
</div>
@endsection