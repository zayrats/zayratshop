<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Styles -->

</head>

<body>
    @livewire('navigation-menu')
    <div class="px-32 py-10 dark:text-white bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full">
            <img class="h-auto w-full rounded-lg" src="{{ url('images/header.png') }}" alt="header_image">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">
            <div class="col-span-1 md:col-span-1">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <img class="w-auto motion-safe:hover:scale-[1.01] max-h-24 transition-all duration-300 rounded-lg cursor-pointer filter hover:backdrop-grayscale-0" src="{{ url('images/item1.png') }}" alt="item1">
                        </div>
                        <div class="col-span-1">
                            <p class="text-left self-start">Mobile Legends</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-1 md:col-span-2">
                <div class="grid grid-rows-1 gap-4">
                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Masukkan User ID</h4>
                            <hr>
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="col-span-1">
                                    <input type="text" id="user_id" name="user_id" class="mt-1 p-2 border rounded-3xl w-full" placeholder="User ID">
                                </div>

                                <div class="col-span-1">
                                    <input type="text" id="server_id" name="server_id" class="mt-1 p-2 border rounded-3xl w-full" placeholder="Server ID">
                                </div>
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Silahkan Masukkan User ID & Server Anda Dan Pastikan Benar.</p>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Nominal Top Up</h4>
                            <hr>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                                <div class="row-span-1">
                                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-600 dark:border-gray-700">
                                        <p>Weekly Diamond Pass</p>
                                        <p>Rp 23.300,-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Pembayaran</h4>
                            <hr>
                            <div>
                                
                            </div>
                        </div>
                    </div>


                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Nomor Whatsapp</h4>
                            <hr>
                            <div class="mt-4">
                                <input type="number" id="whatsapp" name="whatsapp" class="mt-1 p-2 border rounded-3xl w-full" placeholder="08xxxxxxxxxxxx">
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Bukti pembelianmu akan kami kirimkan ke WhatsApp.</p>
                            <a href="">
                                <div class="dark:hover:bg-blue-500 w-48 text-center mt-1 p-2 rounded-3xl bg-blue-400">
                                    <h4>Konfirmasi Topup</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
