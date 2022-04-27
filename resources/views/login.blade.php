<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <title>LOGIN | Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="w-full bg-center bg-repeat" style="background-image : url('images/bg.jpg');">
    <div class="container w-full mx-auto pt-2">
        <nav class="flex bg-base-100 justify-between p-3 rounded-xl shadow-xl">
            <div class="">
                <a class="btn btn-ghost normal-case text-xl">
                    <img class="h-8" src="{{asset('images/logo.png')}}" alt="Logo Bank Syariah Mandiri">
                </a>
            </div>
            <div class="">
                <button class="btn btn-ghost btn-circle">
                    <a href="{{url('tv_informasi')}}"><img src="{{asset('images/television.png')}}" class="h-6" alt="Icon Televisi"></a>                
                </button>
                <button class="btn btn-ghost btn-circle">
                  <div class="indicator">
                    <a href="{{url('/')}}"><img src="{{asset('images/ticket-machine.png')}}" class="h-6" alt="Icon Mesin Antrian"></a>                
                  </div>
                </button>
            </div>
        </nav>

        <div class="card lg:card-side bg-base-100 shadow-xl my-5">
            <figure>
                <img src="{{asset('images/banner.jpg')}}" alt="Banner">
            </figure>
            <div class="card-body">
                <form action="{{url('login')}}" method="post" class="mx-auto">
                    @csrf
                    <h1 class="font-bold text-3xl text-center my-3">Halaman Login</h1>
                    <h1 class="font-bold text-xl text-center my-3 text-[#0CA49D]">Sistem Informasi Nomor Antrian</h1>
                    <hr class="border">
                    <div class="my-6">
                        <input type="email" class="py-2 px-10 border-2 rounded-2xl text-[#0CA49D] text-xl border-[#0CA49D] placeholder:text-[#0CA49D] focus:outline-none focus:ring-2" placeholder="Email" name="email" required>
                    </div>
                    <div class="my-6">
                        <input type="password" class="py-2 px-10 border-2 rounded-2xl text-[#0CA49D] text-xl border-[#0CA49D] placeholder:text-[#0CA49D] focus:outline-none focus:ring-2" placeholder="Password" name="password" required>
                    </div>
                    <div class="my-6">
                        <button type="submit" class="bg-[#F9AD3C] px-16 py-2 rounded-2xl text-white uppercase font-semibold shadow-md hover:bg-[#f59b13]">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="flex p-3 bg-base-100 rounded-xl shadow-xl">
            <div class="items-center grid-flow-col flex">
                <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg> 
                <p>&nbsp;Copyright © 2022 - All right reserved</p>
            </div>
        </footer>
    </div>
</body>