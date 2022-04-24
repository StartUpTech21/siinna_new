<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
    <title>LOGIN | Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="w-full h-screen bg-center" style="background-image : url('images/bg.jpg');">
    <div class="container w-full mx-auto pt-2">
        <nav class="flex bg-base-100 justify-between p-3 rounded-xl shadow-xl">
            <div class="">
                <a class="btn btn-ghost normal-case text-xl">
                    <img class="h-8" src="{{asset('images/logo.png')}}" alt="Logo Bank Syariah Mandiri">
                </a>
            </div>
            <div class="">
                <button class="btn btn-ghost btn-circle">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
                <button class="btn btn-ghost btn-circle">
                  <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
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




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">
    <title>LOGIN | Sistem Informasi Nomor Antrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="w-full h-screen bg-center bg-opacity-25" style="background-image : url('images/bg.jpg');">
    <div class="container mx-auto grid grid-cols-2 ">
        <div class="place-items-center p-10">
            <img src="{{ asset('images/logo.png')}}" alt="Logo Bank Syariah Indonesia" class="m-auto w-72"> 
        </div>
        <div class="order-last flex place-items-center p-6 lg:p-10">
            <a href="{{'tv_informasi'}}" class="px-3 py-2 lg:px-6 lg:py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-sm lg:text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">TV Informasi</a>    
            <a href="{{'mesin_antrean'}}" class="px-3 py-2 lg:px-6 lg:py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-sm lg:text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Mesin Antrian</a>
        </div>
        <div class="row-span-2 mx-auto py-10">
            <form action="{{url('login')}}" method="post">
            @csrf
                <div class="my-6">
                    <input type="email" class="py-3 px-10 border-2 rounded-2xl text-[#0CA49D] text-xl border-[#0CA49D] placeholder:text-[#0CA49D] focus:outline-none focus:ring-2" placeholder="Email" name="email" required>
                </div>
                <div class="my-6">
                    <input type="password" class="py-3 px-10 border-2 rounded-2xl text-[#0CA49D] text-xl border-[#0CA49D] placeholder:text-[#0CA49D] focus:outline-none focus:ring-2" placeholder="Password" name="password" required>
                </div>
                <div class="my-6">
                    <button type="submit" class="bg-[#F9AD3C] px-20 py-3 rounded-2xl text-white uppercase font-semibold shadow-md hover:bg-[#f59b13]">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> --}}