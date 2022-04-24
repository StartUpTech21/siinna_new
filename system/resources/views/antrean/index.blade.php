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
      <button onclick="mulai('a',12,'teller',1);" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p>panggil teller {{$nomor_antrean_teller_sekarang->kode_antrean}}{{$nomor_antrean_teller_sekarang->nomor_antrean ?? 0}}
        <input type="hidden" id="nomor_antrean_teller_sekarang_panggil" value="{{$nomor_antrean_teller_sekarang->kode_antrean}}{{$nomor_antrean_teller_sekarang->nomor_antrean ?? 0}}"> 
      </button>
      <h1>nomor teler terakhir{{$end_nomor_antrean_teller->kode_antrean}}{{$end_nomor_antrean_teller->end_nomor_antrean}}</h1>
    @elseif(Request()->user()->level1 == 'cs')
    <input type="submit"  value="Refresh Halaman" onClick="document.location.reload(true)">
      <button class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p>panggil cs {{$nomor_antrean_cs_sekarang->kode_antrean}}{{$nomor_antrean_cs_sekarang->nomor_antrean ?? 0}}
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

<div class="audio">
  <audio id="in" src="{{url('public/audio/in.mp3')}}"></audio>
  <audio id="out" src="{{url('public/audio/out.mp3')}}"></audio>
  <audio id="nomor_antrian" src="{{url('public/audio/nomor_antrian.mp3')}}"></audio> 
  <audio id="belas" src="{{url('public/audio/belas.mp3')}}"></audio> 
  <audio id="sebelas" src="{{url('public/audio/sebelas.mp3')}}"></audio> 
  <audio id="puluh" src="{{url('public/audio/puluh.mp3')}}"></audio> 
  <audio id="sepuluh" src="{{url('public/audio/sepuluh.mp3')}}"></audio> 
  <audio id="ratus" src="{{url('public/audio/ratus.mp3')}}"></audio> 
  <audio id="seratus" src="{{url('public/audio/seratus.mp3')}}"></audio> 
  <audio id="suarabelloket1" src="{{url('public/audio/1.mp3')}}"></audio> 
  <audio id="suarabelloket2" src="{{url('public/audio/2.mp3')}}"></audio> 
  <audio id="suarabelloket3" src="{{url('public/audio/3.mp3')}}"></audio> 
  <audio id="suarabelloket4" src="{{url('public/audio/4.mp3')}}"></audio> 
  <audio id="suarabelloket5" src="{{url('public/audio/5.mp3')}}"></audio> 
  <audio id="suarabelloket6" src="{{url('public/audio/6.mp3')}}"></audio> 
  <audio id="suarabelloket7" src="{{url('public/audio/7.mp3')}}"></audio> 
  <audio id="suarabelloket8" src="{{url('public/audio/8.mp3')}}"></audio> 
  <audio id="suarabelloket9" src="{{url('public/audio/9.mp3')}}"></audio> 
  <audio id="suarabelloket10" src="{{url('public/audio/sepuluh.mp3')}}"></audio> 
  <audio id="cs" src="{{url('public/audio/cs.mp3')}}"></audio> 
  <audio id="teller" src="{{url('public/audio/teller.mp3')}}"></audio> 
  <audio id="silahkan_ke" src="{{url('public/audio/silahkan_ke.mp3')}}"></audio> 
  <audio id="a" src="{{url('public/audio/a.mp3')}}"></audio> 
  <audio id="b" src="{{url('public/audio/b.mp3')}}"></audio> 
</div>
@endsection
@push('jumlah-antrian')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs');
      $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs');
      $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller');
      $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller');


      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      // setInterval(function() {
      //   $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs').fadeIn("slow");
      //   $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs').fadeIn("slow");
      //   $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller').fadeIn("slow");
      //   $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller').fadeIn("slow");
      // }, 1000);

    });

  function mulai(ab, no, pelayanan, noPelayanan){
      var totalwaktu = 8568.163;
      document.getElementById('in').pause();
      document.getElementById('in').currentTime=0;
      document.getElementById('in').play();
      totalwaktu=document.getElementById('in').duration*1000;	
      setTimeout(function() {
          document.getElementById('nomor_antrian').pause();
          document.getElementById('nomor_antrian').currentTime=0;
          document.getElementById('nomor_antrian').play();
      }, totalwaktu);
      totalwaktu=totalwaktu+1500;

      if (ab === "a") {
        setTimeout(function() {
          document.getElementById('a').pause();
          document.getElementById('a').currentTime=0;
          document.getElementById('a').play();
        }, totalwaktu);
        totalwaktu=totalwaktu+1000;
      }else if(ab === "b"){
        setTimeout(function() {
          document.getElementById('b').pause();
          document.getElementById('b').currentTime=0;
          document.getElementById('b').play();
        }, totalwaktu);
        totalwaktu=totalwaktu+1000;
      }

      if(no<10){
        setTimeout(function() {
            document.getElementById('suarabelloket'+no+'').pause();
            document.getElementById('suarabelloket'+no+'').currentTime=0;
            document.getElementById('suarabelloket'+no+'').play();
          }, totalwaktu);
        totalwaktu=totalwaktu+1000;
        setTimeout(function() {
            document.getElementById('silahkan_ke').pause();
            document.getElementById('silahkan_ke').currentTime=0;
            document.getElementById('silahkan_ke').play();
          }, totalwaktu);
        totalwaktu=totalwaktu+1500;
        
        if (pelayanan == "cs") {
          setTimeout(function() {
            document.getElementById('cs').pause();
            document.getElementById('cs').currentTime=0;
            document.getElementById('cs').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }else if (pelayanan == "teller") {
          setTimeout(function() {
            document.getElementById('teller').pause();
            document.getElementById('teller').currentTime=0;
            document.getElementById('teller').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }

        
        // setTimeout(function() {
        //     for (var i = 0 ; i < urut.toString().length; i++) {
        //       $("#suarabel0"+i+"").remove();
        //     };
        //   }, totalwaktu);
        // totalwaktu=totalwaktu+1000;
      }else if(no==10){
          setTimeout(function() {
              document.getElementById('sepuluh').pause();
              document.getElementById('sepuluh').currentTime=0;
              document.getElementById('sepuluh').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1500;

          if (pelayanan == "cs") {
          setTimeout(function() {
            document.getElementById('cs').pause();
            document.getElementById('cs').currentTime=0;
            document.getElementById('cs').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }else if (pelayanan == "teller") {
          setTimeout(function() {
            document.getElementById('teller').pause();
            document.getElementById('teller').currentTime=0;
            document.getElementById('teller').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }
          // setTimeout(function() {
          //     for (var i = 0 ; i < urut.toString().length; i++) {
          //       $("#suarabel"+i+"").remove();
          //     };
          //   }, totalwaktu);
          // totalwaktu=totalwaktu+1000;
      }else if(no==11){
          setTimeout(function() {
              document.getElementById('sebelas').pause();
              document.getElementById('sebelas').currentTime=0;
              document.getElementById('sebelas').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1500;

          if (pelayanan == "cs") {
          setTimeout(function() {
            document.getElementById('cs').pause();
            document.getElementById('cs').currentTime=0;
            document.getElementById('cs').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }else if (pelayanan == "teller") {
          setTimeout(function() {
            document.getElementById('teller').pause();
            document.getElementById('teller').currentTime=0;
            document.getElementById('teller').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+noPelayanan+'').pause();
            document.getElementById('suarabelloket'+noPelayanan+'').currentTime=0;
            document.getElementById('suarabelloket'+noPelayanan+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
        }
          // setTimeout(function() {
          //     for (var i = 0 ; i < urut.toString().length; i++) {
          //       $("#suarabel"+i+"").remove();
          //     };
          //   }, totalwaktu);
          // totalwaktu=totalwaktu+1000;
      }else if(no < 20){
          setTimeout(function() {
              document.getElementById('suarabel1').pause();
              document.getElementById('suarabel1').currentTime=0;
              document.getElementById('suarabel1').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('belas').pause();
              document.getElementById('belas').currentTime=0;
              document.getElementById('belas').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          // setTimeout(function() {
          //     for (var i = 0 ; i < urut.toString().length; i++) {
          //       $("#suarabel"+i+"").remove();
          //     };
          //   }, totalwaktu);
          // totalwaktu=totalwaktu+1000;
      }else if(no < 100){
          setTimeout(function() {
              document.getElementById('suarabel0').pause();
              document.getElementById('suarabel0').currentTime=0;
              document.getElementById('suarabel0').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabel1').pause();
              document.getElementById('suarabel1').currentTime=0;
              document.getElementById('suarabel1').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no==100){
        setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 110) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabel2').pause();
              document.getElementById('suarabel2').currentTime=0;
              document.getElementById('suarabel2').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 110) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('sepuluh').pause();
              document.getElementById('sepuluh').currentTime=0;
              document.getElementById('sepuluh').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 111) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('sebelas').pause();
              document.getElementById('sebelas').currentTime=0;
              document.getElementById('sebelas').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 120) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabel2').pause();
              document.getElementById('suarabel2').currentTime=0;
              document.getElementById('suarabel2').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('belas').pause();
              document.getElementById('belas').currentTime=0;
              document.getElementById('belas').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 120) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabel1').pause();
              document.getElementById('suarabel1').currentTime=0;
              document.getElementById('suarabel1').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 200) {
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabel1').pause();
              document.getElementById('suarabel1').currentTime=0;
              document.getElementById('suarabel1').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          
          if (no%10!=0) {
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime=0;
                document.getElementById('suarabel2').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }

          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 200) {
          setTimeout(function() {
              document.getElementById('suarabel0').pause();
              document.getElementById('suarabel0').currentTime=0;
              document.getElementById('suarabel0').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('ratus').pause();
              document.getElementById('ratus').currentTime=0;
              document.getElementById('ratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no < 999){
          setTimeout(function() {
              document.getElementById('suarabel0').pause();
              document.getElementById('suarabel0').currentTime=0;
              document.getElementById('suarabel0').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          if (no.toString().substr(1,1) == 0 && urut.toString().substr(2,1)==0) { // 200 300 400 ..
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime=0;
                document.getElementById('ratus').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          } else if(no.toString().substr(1,1) == 0 && urut.toString().substr(2,1)!=0){ // 201 304 405 506
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime=0;
                document.getElementById('ratus').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime=0;
                document.getElementById('suarabel2').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }else if(no.toString().substr(1,1) != 0 && urut.toString().substr(2,1)==0){ //210 250 230
            if(no.toString().substr(1,1) == 1){ //210
              setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime=0;
                document.getElementById('ratus').play();
              }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              setTimeout(function() {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime=0;
                document.getElementById('sepuluh').play();
              }, totalwaktu);
              totalwaktu=totalwaktu+1000;
            }else{
              setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime=0;
                document.getElementById('ratus').play();
              }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              setTimeout(function() {
                document.getElementById('suarabel1').pause();
                document.getElementById('suarabel1').currentTime=0;
                document.getElementById('suarabel1').play();
              }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              setTimeout(function() {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime=0;
                document.getElementById('puluh').play();
              }, totalwaktu);
              totalwaktu=totalwaktu+1000;
            }
          }else if(no.toString().substr(1,1) != 0 && urut.toString().substr(2,1)!=0){
            if (no.toString().substr(1,1)==1) {
              if (no.toString().substr(2,1)==1) { // 211 311 411 511
                setTimeout(function() {
                    document.getElementById('ratus').pause();
                    document.getElementById('ratus').currentTime=0;
                    document.getElementById('ratus').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
                setTimeout(function() {
                    document.getElementById('sebelas').pause();
                    document.getElementById('sebelas').currentTime=0;
                    document.getElementById('sebelas').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
              }else{ //212 215 219
                setTimeout(function() {
                    document.getElementById('ratus').pause();
                    document.getElementById('ratus').currentTime=0;
                    document.getElementById('ratus').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
                setTimeout(function() {
                    document.getElementById('suarabel2').pause();
                    document.getElementById('suarabel2').currentTime=0;
                    document.getElementById('suarabel2').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
                setTimeout(function() {
                    document.getElementById('belas').pause();
                    document.getElementById('belas').currentTime=0;
                    document.getElementById('belas').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
              }
            }else{
              setTimeout(function() {
                  document.getElementById('ratus').pause();
                  document.getElementById('ratus').currentTime=0;
                  document.getElementById('ratus').play();
                }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              setTimeout(function() {
                  document.getElementById('suarabel1').pause();
                  document.getElementById('suarabel1').currentTime=0;
                  document.getElementById('suarabel1').play();
                }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              setTimeout(function() {
                  document.getElementById('puluh').pause();
                  document.getElementById('puluh').currentTime=0;
                  document.getElementById('puluh').play();
                }, totalwaktu);
              totalwaktu=totalwaktu+1000;
              if (no%10!=0) {
                setTimeout(function() {
                    document.getElementById('suarabel2').pause();
                    document.getElementById('suarabel2').currentTime=0;
                    document.getElementById('suarabel2').play();
                  }, totalwaktu);
                totalwaktu=totalwaktu+1000;
              }
            }
          }

          setTimeout(function() {
              document.getElementById('silahkan_ke').pause();
              document.getElementById('silahkan_ke').currentTime=0;
              document.getElementById('silahkan_ke').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              document.getElementById('suarabelloket'+loket+'').pause();
              document.getElementById('suarabelloket'+loket+'').currentTime=0;
              document.getElementById('suarabelloket'+loket+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }

      setTimeout(function(){
        document.getElementById('out').pause();
        document.getElementById('out').currentTime=0;
        document.getElementById('out').play();
      }, totalwaktu);
      totalwaktu=totalwaktu+1000;
      // setTimeout(function() {
      //   $.post("../apps/monitoring-daemon-result.php", { id : urut }, function(data){
      //     if (!data.status) {
      //       console.log(data.status);		
      //     }
      //   }, 'json');
      // }, totalwaktu);
      totalwaktu=totalwaktu+1000;
	}
  </script>

@endpush