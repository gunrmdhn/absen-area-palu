@extends('layouts/_main')
@section('main')
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-header">
            </div>
            <div class="card-body">
                @if (request()->routeIs('absen.edit'))
                    <form action="{{ route('absen.update', $absen->id) }}" method="post" enctype="multipart/form-data">
                        <div class="row gy-3">
                            @method('put')
                            @include('pages/absen/_form')
                        </div>
                    </form>
                @else
                    <form action=" {{ route('absen.store') }}" method="post" enctype="multipart/form-data">
                        <div class="row gy-3">
                            @include('pages/absen/_form')
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
