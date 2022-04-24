<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.bankbsi.co.id/img/favicon.png">

    <title>LOGIN | Sistem Informasi Nomor Antrian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen bg-cover bg-center bg-no-repeat" style="background-image : url('https://storage.googleapis.com/sinna/bg-login.jpg')">
    <div class="container mt-40 mx-auto grid grid-cols-2 ">
        <div class="place-items-center p-10">
            <img src="<?php echo e(url('public')); ?>/assets/logo.png" alt="Logo Bank Syariah Indonesia" class="m-auto w-72"> 
        </div>
        <div class="order-last flex place-items-center p-6 lg:p-10">
            <a href="<?php echo e('tv_informasi'); ?>" class="px-3 py-2 lg:px-6 lg:py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-sm lg:text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">TV Informasi</a>    
            <a href="<?php echo e('mesin_antrean'); ?>" class="px-3 py-2 lg:px-6 lg:py-3 bg-[#F9AD3C] rounded-2xl text-white uppercase mx-auto text-sm lg:text-lg font-semibold shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Mesin Antrian</a>
        </div>
        <div class="row-span-2 mx-auto py-10">
            <form action="<?php echo e(url('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
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
</html><?php /**PATH G:\xampp\htdocs\siinna_new\system\resources\views/login.blade.php ENDPATH**/ ?>