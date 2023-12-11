@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('content')
    <section class="comics">
        <div class="container">
            <div class="current-series"> CURRENT SERIES</div>
            <div class="main-content d-flex flex-column">
                <div class="row comics-list">
                    @foreach ($comics as $item)
                        <div class="col-2 comic-container">
                            <img src="{{$item['thumb']}}" alt="" class="thumb">
                            <h3 class="series">{{strtoupper($item['series'])}}</h3>
                        </div>
                    @endforeach
                </div>
                <div class="load-more d-flex justify-content-center"><h4>LOAD MORE</h4></div>
            </div>
        </div>
    </section>
@endsection