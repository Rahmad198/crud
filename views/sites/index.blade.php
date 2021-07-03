@extends('layouts.web')

@section('content')

<h1>Headline News</h1>
        <div class="card">
          <div class="head-card">
            <img src="{{asset('admin/assets/img/tengah1.jfif')}}" alt="">
          </div>
         <div class="body-card">
            <h1>Demo Mahasiswa UMM</h1>
            <p>Ratusan mahasiswa Universitas Muhammadiyah Malang (UMM) menggelar demonstrasi di depan rektorat UMM, Selasa (16/2/2021). Mereka menuntut keringanan SPP akibat Pandemi Covid-19....</p>
            <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
         </div>
        </div> 
        
        <div class="card">
          <div class="head-card">
            <img src="{{asset('admin/assets/img/tengah2.jfif')}}" alt="">
          </div>
         <div class="body-card">
            <h1>Tolak Omnibus Law</h1>
            <p>alam surat pemberitahuan aksinya, KSBI mengungkapkan usulan KSBI dalam pertemuan tripartit tidak diakomodasi dalam UU Cipta Kerja ....</p>
            <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
         </div>
        </div> 

        <div class="card">
          <div class="head-card">
            <img src="{{asset('admin/assets/img/umm.jpg')}}" alt="">
          </div>
         <div class="body-card">
            <h1>UMM berhasil berada di peringkat pertama Universitas Islam Terbaik Dunia 2021 </h1>
            <p>Kali ini, Universitas Muhammadiyah Malang (UMM) berhasil berada di peringkat pertama Universitas Islam Terbaik Dunia 2021 versi UniRank. Pemeringkatan Universitas Islam Terbaik Dunia 2021 versi UniRank ini berdasarkan pada beberapa kriteria, antara lain:....</p>
            <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
         </div>
        </div> 

        @stop  