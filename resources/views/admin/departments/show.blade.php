@extends('admin.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('mainBody')

    <!-- Content Header (Page header) -->
 

    <!-- Main content -->
   




      <!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <div class="callout callout-info">
          <h4>Departments </h4>
        </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Departments</h3>
          <a class='col-lg-offset-5 btn btn-success pull-right' href="{{ route('departments.create') }}">Add new</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Departments</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Slug</th>
                            
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                           @foreach ($departments as $department)
                              <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $department->trname }}</td>
                                <td>{{ $department->slug }}</td>
  
                               <td><a class="btn btn-success btn-block" href="{{ route('departments.edit', $department->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                               
                                <td>
                                <form id="delete-form-{{ $department->id }}" method="POST" action="{{ route('departments.destroy', $department->id) }}" style="display: none">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a class="btn btn-danger btn-block" href="" onclick="
                                if(confirm('Bu etkinliği silmek istediğinizden emin misiniz?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $department->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="glyphicon glyphicon-trash"> </span> Sil</a>
                              </td>
  
  
                                </tr>
                          @endforeach
  
                            </tbody>
      
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
  
                    <div class="box-footer">
                      <a href='{{ route('admin.makale') }}' class="btn btn-warning">Geri Dön</a>
                                  </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
       
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  




    </section>
    <!-- /.content -->


@endsection
@section('footer')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
