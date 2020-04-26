@extends('layouts.master')

@section('title')
    Operator | eGeneration
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Operator details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
        <form action="/save-operators" method="HEAD">
            {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Operator name</label>
              <input type="text" name="operator_name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Section name</label>
                <select name="sec" class="form-control" id="sec">
                    <option value="">Choose section</option>
                    <?php foreach($sections2 as $item){?>
                    <option value="<?php echo $item->id;?>"><?php echo $item->section_name;?></option>
                    
                  
                  <?php }?> 
                </select> 
                 
              </div>
              <div class="form-group">
                
                <label for="recipient-name" class="col-form-label">Machine name</label>
                <select name="mac" class="form-control" id="mac">
                    <option value="">Choose machine</option>
                    <?php foreach($machines1 as $item){?>
                    <option value="<?php echo $item->id;?>"><?php echo $item->machine_name;?></option>
                    
                  
                  <?php }?> 
                </select>
                 
                
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
          <h4 class="card-title">Operator Table
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>

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
                  Operator name
                </th>
                <th>
                    Section name
                  </th>
                  <th>
                    Machine name
                  </th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                @foreach ($operators as $data)
                      <tr>
                  <td>{{ $data->id }}
                    
                  </td>
                  <td>{{ $data->name }}
                    
                  </td>
                  <td>{{ $data->sections['section_name'] }}
                  </td> 
                  
                  <td>{{ $data->machines['machine_name'] }}
                  </td> 
                  
                  <td><a href="#" class="btn btn-success">EDIT</a></td>
                  <td><a href="#" class="btn btn-danger">DELETE</a></td>
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