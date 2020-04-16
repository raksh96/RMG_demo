@extends('layouts.master')

@section('title')
    Operators | eGeneration
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Operator</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
        <form action="/save-operators" method="HEAD">
            {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Section</label>
                <input type="text" name="section" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Machine</label>
                <input type="text" name="machine" class="form-control" id="recipient-name">
              </div>
            
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Operators list
            
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >ADD</button>
            
            
          </h4>
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Section
                </th>
                <th>
                  Machine
                </th>
              </thead>
              <tbody>
                @foreach ($operators as $data)
                    
                
                <tr>
                <td>{{$data->id}}</td>
                  <td>{{$data->name}}
                    
                  </td>
                  <td>{{$data->section}}
                    
                  </td>
                  <td>{{$data->machine}}
                    
                  </td>
                </tr>
                
                
                
                
                
                @endforeach 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
    
@endsection

@section('scripts')
    
@endsection