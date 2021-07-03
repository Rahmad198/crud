@extends('layouts.master')

@section('content')

    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
            <h2>EDIT DATA</h2>
        </div>
                            @if(session('sukses'))
                                <div class="alert alert-success" role="alert">
                                    {{session('sukses')}}
                                </div>
                            @endif
                         
            <div class="row">
            <div class="col-md-8">
            <div class="widget">
            <div class="widget-header clearfix">
								<h3><i class="icon ion-ios-compose-outline"></i> <span>Masukkan Data Baru</span></h3>
							</div>
                            <div class="widget-content">
                            <form action="/warga/{{$warga->id}}/update" method="POST" id="form1" enctype="multipart/form-data"> 
                             {{csrf_field()}}
                                <div class="form-horizontal" >
									
                                    <div class="form-group">
										<label class="col-md-2 control-label">Nama</label>
										<div class="col-md-10">
                                        <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$warga->Nama}}"required>
										</div>
									</div>
                        

                                    <div class="form-group">
										<label class="col-md-2 control-label">Jenis Kelamin</label>
										<div class="col-md-10">
											<select class="form-control" name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example">
                                                <option selected disabled>Pilih Jenis Kelamin</option>
                                                <option value="L" @if($warga->Jenis_Kelamin == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($warga->Jenis_Kelamin == 'P') selected @endif>Perempuan</option>
											</select>
										</div>
                                    </div>  

									<div class="form-group">
										<label class="col-md-2 control-label">Alamat</label>
										<div class="col-md-10">
											<textarea class="form-control" name="Alamat" class="form-control" id="alamat" rows="3" required>{{$warga->Alamat}}</textarea>
										</div>
									</div>

                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Foto</label>
                                        <input type="file" name="foto" class="from-control">
                                    </div>

                                    <button type="submit" class="btn btn-warning btn-sm">Update</button>	
								</div>
                                </form>
							</div>
						</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('content1')
            <h1>Edit data warga</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif
            <div class="row">
           
            
            
            <form action="/warga/{{$warga->id}}/update" method="POST"> 
                    {{csrf_field()}}
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$warga->Nama}}"required>
                </div>
                
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example" >
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L" @if($warga->Jenis_Kelamin == 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if($warga->Jenis_Kelamin == 'P') selected @endif>Perempuan</option>
                            </select>
                    </div>
                    
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea name="Alamat" class="form-control" id="alamat" rows="3" required>{{$warga->Alamat}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
                           <input type="file" name="foto" class="from-control">
                   </div>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
                </div>
            </div>
@endsection
        


           
    


