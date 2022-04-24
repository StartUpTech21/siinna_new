<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
    <title>Mesin Antrian | Sistem Informasi Nomor Antrian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      function displayTime(){
        var clientTime = new Date();
        var time = new Date(clientTime.getTime());
        var y = time.getFullYear().toString();
        var m = time.getMonth().toString();
        var d = time.getDate().toString();
        var sh = time.getHours().toString();
        var sm = time.getMinutes().toString();
        var ss = time.getSeconds().toString();
        document.getElementById("Tanggal").innerHTML=(d)+"-"+(m)+"-"+(y);
        document.getElementById("Jam").innerHTML=(sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+" WIB";
      }
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#simpanCS").click(function(){
          var data = $('.form-data-cs').serializeArray();
          data.push({name: '_token', value: "<?php echo e(csrf_token()); ?>"});
          //get the input value
          var jenis_pelayanan = document.getElementById('jenis_pelayanan').value;
          var kode_antrean = document.getElementById('kode_antrean').value;
          var status = document.getElementById('status').value;
          // console.log(data);
          $.ajax({
            type: 'POST',
            url: "mesin_antrean",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success: function() {
              location.reload();
            }, error: function(response){
              console.log(response.responseText);
            }
        });
      });
      $("#simpanTeller").click(function(){
        var data = $('.form-data-teller').serializeArray();
        data.push({name: '_token', value: "<?php echo e(csrf_token()); ?>"});
        //get the input value
        var jenis_pelayanan = document.getElementById('jenis_pelayanan').value;
        var kode_antrean = document.getElementById('kode_antrean').value;
        var status = document.getElementById('status').value;
        // console.log(data);
        $.ajax({
          type: 'POST',
          url: "mesin_antrean",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: data,
          success: function() {
            location.reload();
          }, error: function(response){
            console.log(response.responseText);
          }
        });
      });
    });
</script>
</head>
<body class="w-full h-screen bg-cover bg-center" style="background-image : url('https://storage.googleapis.com/sinna/bg-siinna.jpg')" onload="setInterval('displayTime()', 1000);">
    <div class="m-16 grid grid-cols-6 gap-4 place-items-center">
      <div class="my-10 col-start-1 col-end-7">
        <img class="w-64 my-5" src="<?php echo e(url('public')); ?>/assets/logo.png">
      </div>
      <div class=" col-start-1 col-end-4 bg-white p-4 rounded-2xl drop-shadow-lg">
        <h1 class="uppercase text-3xl font-bold text-[#0CA49D] text-center">Teller</h1>
        <h1 class="uppercase text-8xl p-10   font-bold text-[#0CA49D] text-center">A<?php echo e($max_nomor_antrean_teller_tambah_satu); ?></h1>
        <form action="<?php echo e(url('mesin_antrean')); ?>" method="post" target="_blank">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="jenis_pelayanan" id="jenis_pelayanan" value="teller">
          <input type="hidden" name="kode_antrean" id="kode_antrean" value="A">
          <input type="hidden" name="status" id="status" value="menunggu">
          <!-- <button type="button" name="simpan" id="simpanTeller" class="tombol-nav">Ambil Nomor Antrian Teller</button> -->
          <button type="submit" id="simpanTeller" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Ambil Nomor Antrian</button>
        </form>
      </div> 
      <div class="col-start-4 col-end-7 bg-white p-3 rounded-2xl drop-shadow-lg">
        <h1 class="uppercase text-3xl font-bold text-[#0CA49D] text-center">CS</h1>
        <h1 class="uppercase text-8xl p-10 font-bold text-[#0CA49D] text-center">B<?php echo e($max_nomor_antrean_cs_tambah_satu); ?></h1>
        <!-- <form method="post" class="form-data-cs" id="form-data-cs"> -->
        <form action="<?php echo e(url('mesin_antrean')); ?>" method="post"  target="_blank">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="jenis_pelayanan" id="jenis_pelayanan" value="cs">
          <input type="hidden" name="kode_antrean" id="kode_antrean" value="B">
          <input type="hidden" name="status" id="status" value="menunggu">
          <!-- <button type="button" name="simpan" id="simpanCS" class="tombol-nav">Ambil Nomor Antrian CS</button> -->
          <button type="submit" id="simpanCS" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Ambil Nomor Antrian</button>
        </form>
      </div>  
    </div>
  </body>
</html><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/mesin_antrean.blade.php ENDPATH**/ ?>