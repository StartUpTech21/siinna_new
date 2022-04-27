<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <title>TV Informasi | Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript">
        function displayTime() {
            var date = new Date();
            var tahun = date.getFullYear();
            var bulan = date.getMonth();
            var tanggal = date.getDate();
            var hari = date.getDay();
            var jam = date.getHours();
            var menit = date.getMinutes();
            var detik = date.getSeconds();
            switch (hari) {
                case 0:
                    hari = "Minggu";
                    break;
                case 1:
                    hari = "Senin";
                    break;
                case 2:
                    hari = "Selasa";
                    break;
                case 3:
                    hari = "Rabu";
                    break;
                case 4:
                    hari = "Kamis";
                    break;
                case 5:
                    hari = "Jum'at";
                    break;
                case 6:
                    hari = "Sabtu";
                    break;
            }
            switch (bulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11:
                    bulan = "Desember";
                    break;
            }
            document.getElementById('Tanggal').innerHTML = hari + ", " + tanggal + " " + bulan + " " + tahun;
            document.getElementById('Jam').innerHTML = jam + ":" + menit + ":" + (detik.length == 1 ? "0" + detik : detik);
        }
    </script>
</head>

<body class="w-full h-screen bg-center flex" style="background-image : url('images/bg.jpg');"
    onload="setInterval('displayTime()', 1000);">
    <div class="container mx-auto place-self-center">
        <nav class="flex mx-auto w-[70rem] bg-base-100 justify-between py-5 rounded-xl shadow-xl">
            <div class=" mx-auto">
                <img class="h-12" src="{{ asset('images/logo.png') }}" alt="Logo Bank Syariah Indonesia">
            </div>
        </nav>

        <div class="card w-[70rem] mx-auto lg:card-side bg-base-100 shadow-xl my-5">
            <figure>
                <img src="{{ asset('images/banner.jpg') }}" alt="Banner">
            </figure>
            <div class="card-body">
                <div class="bg-[#e3d3bc] rounded-xl">
                    <div class="bg-[#0CA49D] w-full py-2 flex items-center justify-center rounded-t-lg">
                        <p class="uppercase text-2xl text-white font-bold text-center">Loket 1</p>
                    </div>
                    <div class="flex items-center py-3">
                        <p class="uppercase text-xl font-bold text-center">Customer Service</p>
                        <p class="uppercase text-5xl font-bold text-[#0CA49D] text-center">B{{ $max_nomor_antrean_cs_tambah_satu }}</p>
                    </div>
                </div>
                <div class="bg-[#e3d3bc] rounded-xl">
                    <div class="bg-[#0CA49D] w-full py-2 flex items-center justify-center rounded-t-lg">
                        <p class="uppercase text-2xl text-white font-bold text-center">Loket 2</p>
                    </div>
                    <div class="flex items-center py-3">
                        <p class="uppercase text-xl font-bold text-center">Customer Service</p>
                        <p class="uppercase text-5xl font-bold text-[#0CA49D] text-center">B{{ $max_nomor_antrean_cs_tambah_satu }}</p>
                    </div>
                </div>
                <div class="bg-[#e3d3bc] rounded-xl">
                  <div class="bg-[#0CA49D] w-full py-2 flex items-center justify-center rounded-t-lg">
                      <p class="uppercase text-2xl text-white font-bold text-center">Loket 3</p>
                  </div>
                  <div class="flex items-center py-3">
                      <p class="uppercase text-xl font-bold text-center">Customer Service</p>
                      <p class="uppercase text-5xl font-bold text-[#0CA49D] text-center">B{{ $max_nomor_antrean_cs_tambah_satu }}</p>
                  </div>
              </div>
            </div>
        </div>
        <footer class="flex w-[70rem] mx-auto p-5 bg-base-100 rounded-xl shadow-xl justify-between">
            <div class="items-center grid-flow-col flex">
                <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd" class="fill-current">
                    <path
                        d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                    </path>
                </svg>
                <p class="font-semibold">&nbsp;Copyright © 2022 - All right reserved</p>
            </div>
            <div class="items-center flex font-bold">
                <p id="Tanggal"></p>&nbsp;&nbsp;<p id="Jam"></p>
            </div>
        </footer>
    </div>
</body>

</html>






















{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
  <title>TV Informasi | Sistem Informasi Nomor Antrean</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript">
    function displayTime(){
      var date = new Date();
      var tahun = date.getFullYear();
      var bulan = date.getMonth();
      var tanggal = date.getDate();
      var hari = date.getDay();
      var jam = date.getHours();
      var menit = date.getMinutes();
      var detik = date.getSeconds();
      switch(hari) {
      case 0: hari = "Minggu"; break;
      case 1: hari = "Senin"; break;
      case 2: hari = "Selasa"; break;
      case 3: hari = "Rabu"; break;
      case 4: hari = "Kamis"; break;
      case 5: hari = "Jum'at"; break;
      case 6: hari = "Sabtu"; break;
      }
      switch(bulan) {
      case 0: bulan = "Januari"; break;
      case 1: bulan = "Februari"; break;
      case 2: bulan = "Maret"; break;
      case 3: bulan = "April"; break;
      case 4: bulan = "Mei"; break;
      case 5: bulan = "Juni"; break;
      case 6: bulan = "Juli"; break;
      case 7: bulan = "Agustus"; break;
      case 8: bulan = "September"; break;
      case 9: bulan = "Oktober"; break;
      case 10: bulan = "November"; break;
      case 11: bulan = "Desember"; break;
      }
      document.getElementById('Tanggal').innerHTML=hari + ", " + tanggal + " " + bulan + " " + tahun;
      document.getElementById('Jam').innerHTML=jam + ":" + menit + ":" + (detik.length==1?"0"+detik:detik);
    }

  </script>
</head>
<body class="w-full h-screen bg-cover bg-center" style="background-image : url('https://storage.googleapis.com/sinna/bg-siinna.jpg')" onload="setInterval(displayTime, 1000);">
  <div class="m-16 grid grid-cols-12 gap-4 place-items-center">
    <div class="my-10 col-start-1 col-end-13">
      <img class="w-64 my-5" src="{{url('public')}}/assets/logo.png">
    </div>
    <div class=" col-start-1 col-end-6 bg-white p-4 rounded-2xl drop-shadow-lg">
      <h1 class="uppercase text-3xl font-bold text-[#0CA49D] text-center">Teller</h1>
      <h1 class="uppercase text-8xl p-10   font-bold text-[#0CA49D] text-center">A{{$max_nomor_antrean_teller_tambah_satu}}</h1>
      <h2 class="uppercase text-xl font-bold text-[#0CA49D] text-center">Dari 5 Antrian</h2>
    </div> 
    <div class="col-start-6 col-span-2 bg-white p-3 rounded-2xl drop-shadow-lg">
      <h1 id="Tanggal" class="font-bold text-center text-md"></h1>
      <h1 id="Jam"  class="font-bold text-center"></h1>
    </div> 
    <div class="col-start-8 col-end-13 bg-white p-3 rounded-2xl drop-shadow-lg">
      <h1 class="uppercase text-3xl font-bold text-[#0CA49D] text-center">CS</h1>
      <h1 class="uppercase text-8xl p-10 font-bold text-[#0CA49D] text-center">B{{$max_nomor_antrean_cs_tambah_satu}}</h1>
      <h2 class="uppercase text-xl font-bold text-[#0CA49D] text-center">Dari 10 Antrian</h2>
    </div>
     
  </div>
</body>
</html> --}}
