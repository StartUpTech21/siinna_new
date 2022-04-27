<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesin Antrian | Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body onload="cetak();" class="default-printing text-xs">
    <table class="mx-5 font-mono w-5/6">
        <tr>
            <td>
                <img class="w-32 py-2" src="{{asset('images/logo.png')}}">
            </td>
        </tr>
        <tr>
            <td class="m-0 py-2 border-b border-black border-dashed" style="line-height: 0.85rem;">
                SINNA 2022 <br>SISTEM INFORMASI NOMOR ANTRIAN
            </td>
        </tr>
        <tr>
            <td class="py-2 border-b border-black border-dashed" style="line-height: 0.85rem;">
                BSI - Bank Syariah Indonesia <br> KC KETAPANG <br> KALIMANTAN BARAT</br>
            </td>
        </tr>
        <tr class="text-6xl">
            <td class="px-20">
                {{$data_print->kode_antrean}}{{$data_print->nomor_antrean}}
            </td>
        </tr>
        <tr>
            <td class="px-20 pb-2 text-bold uppercase border-b border-black border-dashed" style="line-height: 0.85rem;">
                Layanan {{$data_print->jenis_pelayanan}}
            </td>
        </tr>
        <tr>
            <td class="pt-2 pb-8" style="line-height: 0.85rem;">
                www.bankbsi.co.id <br>{{$data_print->created_at}}
            </td>
        </tr>
    </table>
    <script type="text/javascript">
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
    function cetak() {  		
        window.print();
        setTimeout(function(){ window.close();},100);
    }
    </script>
</body>
</html>