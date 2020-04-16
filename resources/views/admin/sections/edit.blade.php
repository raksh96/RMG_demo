@extends('layouts.master')

@section('title')
    Sections edit | eGeneration
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sections Edit Data</h4>

        <form action="{{ url('section-update/'.$sections->id) }}" method="HEAD">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Section name</label>
              <input type="text" name="section_name" class="form-control" value={{ $sections->section_name }}>
            </div>
            
          
        </div>
        <div class="modal-footer">
        <a href="{{ url('knitting')}}" class="btn btn-primary">BACK</a>
          <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
        </div>
    </div>
</div>
</div>
    
@endsection