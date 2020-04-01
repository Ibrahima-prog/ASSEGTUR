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
        <h3 class="box-title">Makaleri</h3>
        <a class='col-lg-offset-5 btn btn-success pull-right' href="{{ route('admin.makale.ekle') }}">Makale Ekle</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Mevcut Makaler</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Makale Başlığı</th>
                          <th>Makale EK Dosya İsmi</th>
                          <th>Tariği</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach ($posts as $post)
                            <tr>
                              <td>{{ $loop->index + 1 }}</td>
                              <td>{{ $post->trtitle }}</td>
                              <td>{{ $post->file }}</td>
                              <td>{{ $post->created_at }}</td>
                        
                             <td><a href="{{ route('admin.makale.duzenle', $post->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                             
                              <td>
                              <form id="delete-form-{{ $post->id }}" method="get" action="{{ route('admin.makale.delete', $post->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Bu makaleyi silmek istediğinizden emin misiniz?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $post->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
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