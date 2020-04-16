@extends('layouts.master')

@section('title')
    Dashboard | eGeneration
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD Section details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
        </div>
        <form action="/save-sections" method="HEAD">
            {{ csrf_field() }}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Section name</label>
              <input type="text" name="section_name" class="form-control" id="recipient-name">
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



  <!-- Delete Modal -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_modal_Form" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
      
      <div class="modal-body">
        <input type="hidden" id="delete_sections_id">
        <h5>Are you sure you want to delete this data?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Yes. Delete it</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- END Delete Modal -->


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Section Table
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>

          </h4>
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable" class="table table-stripped">
              <thead class=" text-primary">
                <th>
                  ID
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
                  @foreach ($sections as $data)
                      
                  
                <tr>
                  <td>{{ $data->id }}
                    
                  </td>
                  <td>{{ $data->section_name }}
                    
                  </td>
                <td><a href="{{ url('section/'.$data->id) }}" class="btn btn-success">EDIT</a>
                    
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="btn btn-danger deletebtn">DELETE</a>
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
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
    $('#datatable').on('click', '.deletebtn', function (){
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text();
      }).get();
      console.log(data);
      $('#delete_sections_id').val(data[0]);
      $('#delete_modal_Form').attr('action', '/section-delete/' +data[0]);
      $('#deletemodalpop').modal('show');


    });
} );
</script>
    
@endsection