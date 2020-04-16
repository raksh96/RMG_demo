@extends('layouts.master')

@section('title')
    Machines | eGeneration
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Machine details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
        <form action="/save-machines" method="HEAD">
            {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Machine name</label>
              <input type="text" name="machine_name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Brand</label>
                <input type="text" name="brand" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                
                <label for="recipient-name" class="col-form-label">Section name</label>
                <select name="sec" class="form-control" id="sec">
                  <option value="">Choose section</option>
                  <?php foreach($sections as $item){?>
                  <option value="<?php echo $item->id;?>"><?php echo $item->section_name;?></option>
                  
                
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
          <h4 class="card-title">Machine Table
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
                  Machine name
                </th>
                <th>
                    Brand
                  </th>
                  <th>
                    Section name
                  </th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                  @foreach ($machines as $data)
                      <tr>
                  <td>{{ $data->id }}
                    
                  </td>
                  <td>{{ $data->machine_name }}
                    
                  </td>
                  <td>{{ $data->brand }}
                  </td> 
                  
                  <td>{{ $data->$sections1->section_name }}
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