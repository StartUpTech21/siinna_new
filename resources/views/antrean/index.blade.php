@extends('template.base')
@push('antreanAutoReload')
  <!-- if($count_id_antrean->count_id_antrean == $count_id_antrean->count_id_antrean+1) -->
    <!-- <meta http-equiv="refresh" content="3"> -->
  <!-- endif -->
@endpush
@section('content')
<div class="flex">
    <div class="">
    @if(Request()->user()->level1 == 'teller')
      <!-- panggil -->
      <button onclick="mulai('{{$nomor_antrean_teller_sekarang_lowercase}}','{{$nomor_antrean_teller_sekarang->nomor_antrean}}','{{$level}}','{{$no_pelayanan}}');" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p>panggil teller {{$nomor_antrean_teller_sekarang->kode_antrean}}{{$nomor_antrean_teller_sekarang->nomor_antrean ?? 0}}</p>
      </button>

      <!-- refresh -->
      <button onClick="document.location.reload(true)" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Refresh Halaman</button>

      <!-- terakhir -->
      <button class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Nomor TELLER terakhir{{$end_nomor_antrean_teller->kode_antrean}}{{$end_nomor_antrean_teller->end_nomor_antrean}}</button>


    @elseif(Request()->user()->level1 == 'cs')
      <!-- panggil -->
      <button onclick="mulai('{{$nomor_antrean_cs_sekarang_lowercase}}','{{$nomor_antrean_cs_sekarang->nomor_antrean}}','{{$level}}','{{$no_pelayanan}}');" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"><p>panggil cs {{$nomor_antrean_cs_sekarang->kode_antrean}}{{$nomor_antrean_cs_sekarang->nomor_antrean ?? 0}}</p>
      </button>

      <!-- refresh -->
      <button onClick="document.location.reload(true)" class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Refresh Halaman</button>
      

      <!-- terakhir -->
      <button class="px-6 py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-md font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Nomor CS terakhir {{$end_nomor_antrean_cs->kode_antrean}}{{$end_nomor_antrean_cs->end_nomor_antrean}}</button>
    @endif
    </div>


    <div class="">
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
  <audio id="in" src="{{asset('audio/in.mp3')}}"></audio>
  <audio id="out" src="{{asset('audio/out.mp3')}}"></audio>
  <audio id="nomor_antrian" src="{{asset('audio/nomor_antrian.mp3')}}"></audio> 
  <audio id="belas" src="{{asset('audio/belas.mp3')}}"></audio> 
  <audio id="sebelas" src="{{asset('audio/sebelas.mp3')}}"></audio> 
  <audio id="puluh" src="{{asset('audio/puluh.mp3')}}"></audio> 
  <audio id="sepuluh" src="{{asset('audio/sepuluh.mp3')}}"></audio> 
  <audio id="ratus" src="{{asset('audio/ratus.mp3')}}"></audio> 
  <audio id="seratus" src="{{asset('audio/seratus.mp3')}}"></audio> 
  <audio id="suarabelloket1" src="{{asset('audio/1.mp3')}}"></audio> 
  <audio id="suarabelloket2" src="{{asset('audio/2.mp3')}}"></audio> 
  <audio id="suarabelloket3" src="{{asset('audio/3.mp3')}}"></audio> 
  <audio id="suarabelloket4" src="{{asset('audio/4.mp3')}}"></audio> 
  <audio id="suarabelloket5" src="{{asset('audio/5.mp3')}}"></audio> 
  <audio id="suarabelloket6" src="{{asset('audio/6.mp3')}}"></audio> 
  <audio id="suarabelloket7" src="{{asset('audio/7.mp3')}}"></audio> 
  <audio id="suarabelloket8" src="{{asset('audio/8.mp3')}}"></audio> 
  <audio id="suarabelloket9" src="{{asset('audio/9.mp3')}}"></audio> 
  <audio id="suarabelloket10" src="{{asset('audio/sepuluh.mp3')}}"></audio> 
  <audio id="cs" src="{{asset('audio/cs.mp3')}}"></audio> 
  <audio id="teller" src="{{asset('audio/teller.mp3')}}"></audio> 
  <audio id="silahkan_ke" src="{{asset('audio/silahkan_ke.mp3')}}"></audio> 
  <audio id="a" src="{{asset('audio/a.mp3')}}"></audio> 
  <audio id="b" src="{{asset('audio/b.mp3')}}"></audio> 
</div>
@endsection
@push('jumlah-antrian')
  <script type="text/javascript">
    // $(document).ready(function() {
      // $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs');
      // $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs');
      // $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller');
      // $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller');


      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      // setInterval(function() {
      //   $('#nomor_antrean_cs_sekarang').load('nomor_antrean_cs').fadeIn("slow");
      //   $('#end_nomor_antrean_cs').load('end_nomor_antrean_cs').fadeIn("slow");
      //   $('#nomor_antrean_teller_sekarang').load('nomor_antrean_teller').fadeIn("slow");
      //   $('#end_nomor_antrean_teller').load('end_nomor_antrean_teller').fadeIn("slow");
      // }, 1000);

    // });

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
          var intToStringNo = no.toString();
          var digitKeDua = intToStringNo.substring(1,2);
          setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+700;
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
      }else if(no < 100){
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+700;
          if (digitKeDua == 0) { /*dua puluh*/
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }else if (digitKeDua != 0) { /*dua puluh satu*/
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }
          
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 110) {
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
          var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeTiga+'').pause();
            document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeTiga+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 120) {
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
          var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeTiga+'').pause();
            document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeTiga+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 120) {
          var intToStringNo = no.toString();
          var digitKeDua = intToStringNo.substring(1,2);
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no < 200) {
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
	        var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
              document.getElementById('seratus').pause();
              document.getElementById('seratus').currentTime=0;
              document.getElementById('seratus').play();
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          if (digitKeTiga == 0) {
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          } else if (digitKeTiga != 0) {
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeTiga+'').pause();
              document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeTiga+'').play();
              }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }

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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if (no == 200) {
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no < 210){
        var intToStringNo = no.toString();
        var digitKeSatu = intToStringNo.substring(0,1);
	      var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime=0;
            document.getElementById('ratus').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeTiga+'').pause();
            document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeTiga+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no == 210){
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no == 211){
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no < 220){
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime=0;
            document.getElementById('ratus').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeTiga+'').pause();
            document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeTiga+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else if(no == 220){
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime=0;
            document.getElementById('ratus').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;

          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeDua+'').pause();
            document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeDua+'').play();
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

          setTimeout(function() {
              for (var i = 0 ; i < urut.toString().length; i++) {
                $("#suarabel"+i+"").remove();
              };
            }, totalwaktu);
          totalwaktu=totalwaktu+1000;
      }else {
          var intToStringNo = no.toString();
          var digitKeSatu = intToStringNo.substring(0,1);
          var digitKeDua = intToStringNo.substring(1,2);
          var digitKeTiga = intToStringNo.substring(2,3);
          setTimeout(function() {
            document.getElementById('suarabelloket'+digitKeSatu+'').pause();
            document.getElementById('suarabelloket'+digitKeSatu+'').currentTime=0;
            document.getElementById('suarabelloket'+digitKeSatu+'').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;
          setTimeout(function() {
            document.getElementById('ratus').pause();
            document.getElementById('ratus').currentTime=0;
            document.getElementById('ratus').play();
          }, totalwaktu);
          totalwaktu=totalwaktu+1000;

          if (digitKeTiga == 0) {
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          } else if(digitKeTiga != 0 ){
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeDua+'').pause();
              document.getElementById('suarabelloket'+digitKeDua+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeDua+'').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('puluh').pause();
              document.getElementById('puluh').currentTime=0;
              document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
            setTimeout(function() {
              document.getElementById('suarabelloket'+digitKeTiga+'').pause();
              document.getElementById('suarabelloket'+digitKeTiga+'').currentTime=0;
              document.getElementById('suarabelloket'+digitKeTiga+'').play();
            }, totalwaktu);
            totalwaktu=totalwaktu+1000;
          }
          
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