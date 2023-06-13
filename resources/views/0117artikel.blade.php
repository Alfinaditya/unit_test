@extends('layout.0117main')

@section('container')
<div class="row">
  <div class="col-sm-7">
      <img src="/images/FM.jpg" width="920"> 
  </div>
      <!-- <div class="col-sm-5 text-center">
        <h3>Author By : <br>
        Mahardika Dwi Rani</h3>
      </div> -->
</div>

    <div class="row">
      <div class="col-sm-10 mt-5">
        <h3>Apa Itu Framework?</h3>
        <P> Nah, framework adalah sebuah kerangka program yang digunakan untuk membantu developer untuk mengembangkan kode secara konsisten.
       <br> <br>
        Dengan adanya framework developer bisa mengurangi jumlah bug pada website atau aplikasi yang dibuat. Karena, fungsi dan variabel yang sudah tersedia di dalam komponen framework.
        </P>
        
        <br><h3>Fungsi Framework</h3>
          <b>1. Program Menjadi Lebih Terstruktur dan Tersusun</b>
          <p><br>
          Saat developer mengerjakan pengembangan aplikasi atau website yang besar, maka program yang akan ditulis di dalamnya menjadi semakin banyak. Terkadang, semakin banyaknya program yang ditulis akan menjadikan proses debugging semakin lambat.
          Selain itu, saat Anda mencari kode program yang error akan semakin sulit karena program yang tidak terstruktur.
          <br><br>
          Oleh karena itu, dengan adanya framework dapat menjadikan program menjadi lebih terstruktur sehingga Anda dapat dengan mudah menemukan kode yang perlu diperbaiki. Bahkan beberapa jenis framework ada yang menerapkan 
          konsep MVC (Model View Controller) yang akan memudahkan developer untuk memisahkan antara logika dan view.
          </p>
          <b>2. Praktis untuk Developer</b>
          <p><br>
          Saat Anda mengembangkan aplikasi atau website, akan lebih praktis ketika Anda menggunakan framework. Alasannya karena framework sudah menyediakan kode berupa function dan class jadi proses pembuatan software atau aplikasi akan menjadi lebih cepat. 
          Anda cukup memanggil function atau class tersebut ke dalam kode program Anda.
          <br> </p>
          <b>3. Memiliki Keamanan yang Lebih Unggul</b>
          <p><br>
          Selama bertahun-tahun, keamanan untuk aplikasi dan website telah menjadi perhatian utama bagi developer. Beberapa dari developer telah menggunakan segala cara untuk  mengamankan aplikasi dan website yang telah mereka buat.
          <br><br>
          Setelah framework hadir, developer boleh sedikit tenang soal keamanan program yang telah dibuat. Karena setiap celah keamanan dari framework sudah diidentifikasi oleh 10-100+ developer ahli. Framework juga terus 
          diperbarui versinya untuk menawarkan fitur baru dan menangani bug yang meminimalisir celah keamanan framework.
          </p>
        <br><h3>Jenis Framework</h3>        
        <b>1. Framework JavaScript</b>
        <br><b>2. Framework CSS</b>
        <br><b>3. Framework PHP</b>
      </div>
    </div>

    <br><a href="/"> Balik Ke Home </a>
@endsection
