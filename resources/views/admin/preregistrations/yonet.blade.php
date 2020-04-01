@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection


@section('mainBody')
<!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tüm kayıt Listesi</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Gender</th>  
                          {{-- <th>Country</th>  --}}
                          <th>Phone Number</th>
                          <th>Email</th>
                          {{-- <th>Onayla</th> --}}
                          <th>Detayları | İrtibat</th>
                          <th>Sil</th>

                        </tr>
                        </thead>
                        <tbody>                  

                         @foreach ($registrations as $registration)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $registration->firstname }}</td>
                              <td>{{ $registration->gender }}</td>
                              {{-- <td>{{ $registration->country }}</td> --}}
                              <td>{{ $registration->phone }}</td>
                              <td>{{ $registration->email }}</td>
                             

                             {{-- <td>

                              @if( $registration->status == 0 )
                              <a href="{{ route('admin.onkayi.onayla', $registration->id ) }}" class="btn btn-block btn-success"><span class="glyphicon glyphicon-ok"></span> Onayla</a>
                              @else
                              <span><strong>Onaylandı</strong></span>
                              @endif

                            </td> --}}

                             <td><a href="{{ route('admin.onkayi.detaylari', $registration->id) }}" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Detayları | İrtibat</a></td>
                             
                              <td>
                              <form id="delete-form-{{ $registration->id }}" method="get" action="{{ route('admin.onkayi.delete', $registration->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Bu kaydı silmek istediğinizden emin misiniz?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $registration->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" class="btn btn-block btn-danger" ><span class="glyphicon glyphicon-trash" ></span> Kaydı Sil</a>
                            </td>
                              </tr>
                        @endforeach

                          </tbody>
    
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>

                  <div class="box-footer">
              <a href='{{ route('admin.onkayit') }}' class="btn btn-warning">Geri Dön</a>
            </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        AFROKONYA ÜYE LİSTESİ
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

<!-- /.content-wrapper -->

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