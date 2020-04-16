@extends('layouts.master')

@section('title')
    Dashboard | eGeneration
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>select dropdown</h4>
                <select name="" id="">
                    @foreach ($sectionList as $item)
                <option value="{{$item->id}}">{{$item->section_name}}</option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>
@endsection