@extends('template.base')
@push('antreanAutoReload')
  <!-- if($count_id_antrean->count_id_antrean == $count_id_antrean->count_id_antrean+1) -->
    <!-- <meta http-equiv="refresh" content="3"> -->
  <!-- endif -->
@endpush
@section('content')

<div>
  <div class="flex justify-around">
    @if(Request()->user()->level1 == 'teller')
    <input type="submit"  value="Refresh Halaman" onClick="document.location.reload(true)">
      <button class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p id="pemanggilan-teller">panggil teller {{$nomor_antrean_teller_sekarang->kode_antrean}}{{$nomor_antrean_teller_sekarang->nomor_antrean ?? 0}}
        <input type="hidden" id="nomor_antrean_teller_sekarang_panggil" value="{{$nomor_antrean_teller_sekarang->kode_antrean}}{{$nomor_antrean_teller_sekarang->nomor_antrean ?? 0}}"> 
      </button>
      <h1>nomor teler terakhir{{$end_nomor_antrean_teller->kode_antrean}}{{$end_nomor_antrean_teller->end_nomor_antrean}}</h1>
    @elseif(Request()->user()->level1 == 'cs')
    <input type="submit"  value="Refresh Halaman" onClick="document.location.reload(true)">
      <button class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p id="pemanggilan-cs">panggil cs {{$nomor_antrean_cs_sekarang->kode_antrean}}{{$nomor_antrean_cs_sekarang->nomor_antrean ?? 0}}
        <input type="hidden" id="nomor_antrean_cs_sekarang_panggil" value="{{$nomor_antrean_cs_sekarang->kode_antrean}}{{$nomor_antrean_cs_sekarang->nomor_antrean ?? 0}}">
      </button>
      <h1>nomor cs terakhir{{$end_nomor_antrean_cs->kode_antrean}}{{$end_nomor_antrean_cs->end_nomor_antrean}}</h1>

    @endif

    @if(Request()->user()->level1 == 'teller')
    <form action="{{url('teller/antrean',$nomor_antrean_teller_sekarang->id)}}" method="post">
      @csrf
      @method("PUT")
      <input type="hidden" name="id" value="{{$nomor_antrean_teller_sekarang->id}}">
      <input type="hidden" name="id_pelayanan" value="{{request()->user()->id}}">
      <input type="hidden" name="jenis_pelayanan" value="{{$nomor_antrean_teller_sekarang->jenis_pelayanan}}">
      <input type="hidden" name="kode_antrean" value="{{$nomor_antrean_teller_sekarang->kode_antrean}}">
      <input type="hidden" name="nomor_antrean" value="{{$nomor_antrean_teller_sekarang->nomor_antrean}}">
      <input type="hidden" name="status" value="selesai">
    <button type="submit" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">selanjutnya</button>
    </form>
    @elseif(Request()->user()->level1 == 'cs')
    <form action="{{url('cs/antrean',$nomor_antrean_cs_sekarang->id)}}" method="post">
      @csrf
      @method("PUT")
      <input type="hidden" name="id" value="{{$nomor_antrean_cs_sekarang->id}}">
      <input type="hidden" name="id_pelayanan" value="{{request()->user()->id}}">
      <input type="hidden" name="jenis_pelayanan" value="{{$nomor_antrean_cs_sekarang->jenis_pelayanan}}">
      <input type="hidden" name="kode_antrean" value="{{$nomor_antrean_cs_sekarang->kode_antrean}}">
      <input type="hidden" name="nomor_antrean" value="{{$nomor_antrean_cs_sekarang->nomor_antrean}}">
      <input type="hidden" name="status" value="selesai">
    <button type="submit" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">selanjutnya</button>
    </form>
    @endif
  </div>
</div>


@endsection
@push('jumlah-antrian')
  <!-- load file audio bell antrian -->
  <audio id="tingtung" src="{{url('public/audio/tingtung.mp3')}}"></audio>

  <!-- Responsivevoice -->
  <!-- Get API Key -> https://responsivevoice.org/ -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs');
      $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs');
      $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller');
      $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller');


      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      setInterval(function() {
        $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs').fadeIn("slow");
        $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs').fadeIn("slow");
        $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller').fadeIn("slow");
        $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller').fadeIn("slow");
      }, 1000);

      $('#pemanggilan-teller').on('click',function() {

          var nomor_antrean_teller_sekarang = document.getElementById('nomor_antrean_teller_sekarang_panggil').value;

          // buat variabel untuk menampilkan audio bell antrian
          var bell = document.getElementById('tingtung');

          // mainkan suara bell antrian
          bell.pause();
          bell.currentTime = 0;
          bell.play();

          // set delay antara suara bell dengan suara nomor antrian
          durasi_bell = bell.duration * 770;

          // mainkan suara nomor antrian
          setTimeout(function() {
            responsiveVoice.speak("Nomor Antrian, " + nomor_antrean_teller_sekarang + ", silahkan, ke loket, 1", "Indonesian Male", {
              rate: 0.9,
              pitch: 1,
              volume: 1
            });
          }, durasi_bell);
      });

      $('#pemanggilan-cs').on('click',function() {

          var nomor_antrean_cs_sekarang = document.getElementById('nomor_antrean_cs_sekarang_panggil').value;
          // buat variabel untuk menampilkan audio bell antrian
          var bell = document.getElementById('tingtung');

          // mainkan suara bell antrian
          bell.pause();
          bell.currentTime = 0;
          bell.play();

          // set delay antara suara bell dengan suara nomor antrian
          durasi_bell = bell.duration * 770;

          // mainkan suara nomor antrian
          setTimeout(function() {
            responsiveVoice.speak("Nomor Antrian, " + nomor_antrean_cs_sekarang + ", silahkan, ke loket, 1", "Indonesian Male", {
              rate: 0.9,
              pitch: 1,
              volume: 1
            });
          }, durasi_bell);
      });
    });
  </script>
@endpush