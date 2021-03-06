@extends('layouts.master')

@section('content')
<div class="col-right" >
    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
					<h2>SPORT</h2>
                    
	<!-- quick task modal -->
    	
					<!-- end quick task modal -->
				</div>
                <div class="widget">
					
					<div class="widget-content">
						<div class="table-responsive">
                        @if(session('sukses'))
                            <div class="alert alert-warning"><i class="icon ion-alert-circled"></i> {{session('sukses')}} @endif</div>
							<div id="datatable-data-export_wrapper" class="dataTables_wrapper form-inline no-footer">
                            <div class="clearfix"></div><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-data-export_length"><label><select name="datatable-data-export_length" aria-controls="datatable-data-export" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div>
                            <div class="col-sm-6">
                            
                            <div id="datatable-column-interactive_filter" class="dataTables_filter">
                                <form  method="GET" action="/warga">
                                <label>Search:<input name="cari" type="search" class="form-control input-sm" aria-controls="datatable-column-interactive"></label>
                                </form>
                            </div>

                               

                            </div></div>
                            <button  type="button" class="btn btn-primary btn-sm" style='float: right;' data-toggle="modal" data-target="#quick-task-modal">
                                Tambah Data
                            </button>
                            
                            <table id="datatable-data-export" class="table table-sorting table-striped table-hover table-bordered datatable dataTable no-footer" role="grid" aria-describedby="datatable-data-export_info">
                            
								<thead>
									<tr role="row">
                                        <th style="width: 50px;">No</th>
                                        <th style="width: 100px;">Nama</th>
                                        <th style="width: 100px;">Foto</th>
                                        <th style="width: 55px;">Jenis Kelamin</th>
                                        <th style="width: 150px;">Alamat</th>
                                        <th style="width: 40px;">Terakhir diubah</th>
                                        <th style="width: 80px;">Aksi</th>
                                    </tr>
								</thead>
								<tbody>
                                <?php $no=1 ?>
                                @foreach ($data_warga1 as $warga)
								<tr>
                        <td>{{$no++ }}</td>
                        <td>{{$warga->Nama}}</td>
                        <td><a href="/warga/{{$warga->id}}/avatar">lihat gambar</td>
                        <td>{{$warga->Jenis_Kelamin}}</td>
                        <td>{{$warga->Alamat}}</td>
                        <td>{{$warga->updated_at->diffForHumans()}}</td>
                        <td>
                            <a href="/warga/{{$warga->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/warga/{{$warga->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data tersebut?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
							</table>
                
				</div>
    </div>
    
</div>
                <div class="modal fade" id="quick-task-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body">
                            <form action="/warga/create" method="POST" id="form1"> 
                                {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea name="Alamat" class="form-control" id="alamat" rows="3" required></textarea>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div> 

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" id="foto" >
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
                        </div>

 
@stop
@section('content1')
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif

@endsection
                        


