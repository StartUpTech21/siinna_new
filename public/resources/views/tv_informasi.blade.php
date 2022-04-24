<!DOCTYPE html>
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
</html>