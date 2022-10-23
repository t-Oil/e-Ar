@extends('layouts.app')

@section('content_header')
    <h3 class="m-0">{{ $data->contentHeader ?? '' }}</h3>
@stop

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        {{ $data->contentHeader }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
