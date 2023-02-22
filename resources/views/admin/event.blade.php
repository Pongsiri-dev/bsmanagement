<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body class="font-['Anuphan']">
    <x-app-layout>
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot> --}}

        <form action="{{ route('addEvents') }}" method="post">
            @csrf
            <div class="bg-gray-100 py-1 flex flex-col justify-center sm:py-1">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-6 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                        <div class="max-w-md mx-auto">
                            <div class="flex items-center space-x-5">
                                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                    <h2 class="leading-relaxed">สร้างอีเว้นท์</h2>
                                    <p class="text-sm text-gray-500 font-normal leading-relaxed"></p>
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">ชื่ออีเว้นท์</label>
                                        <input type="text" name="event_name"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="ชื่ออีเว้นท์">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">รายละเอียดอีเว้นท์</label>
                                        <input type="text" name="event_description"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="รายละเอียดอีเว้นท์">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">สถานที่จัดอีเว้นท์</label>
                                        <input type="text" name="event_venue"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="สถานที่จัดอีเว้นท์">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">เริ่มอีเว้นท์</label>
                                            <div
                                                class="datepicker relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="date" name="event_sdate"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="{{ now()->toDateTimeString() }}">
                                                {{-- <div class="absolute left-3 top-2">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">สิ้นสุดอีเว้นท์</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="date" name="event_edate"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ววดดปป">
                                                {{-- <div class="absolute left-3 top-2">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">กำหนดการมองเห็น</label>
                                        <select id="userSel" name="event_assign"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            <option value="all">สมาชิกทั้งหมด</option>
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button type="submit"
                                        class="mt-10 flex w-full items-center justify-center rounded-md border bg-600 py-3 px-8 text-base font-small hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        ยกเลิก</button>

                                    <button type="submit"
                                        class="transition ease-in duration-300 mt-10 flex w-full items-center justify-center rounded-md border bg-orange-200 py-3 px-8 text-base font-small hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 GenQrCode">
                                        สร้างอีเว้นท์</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- Modal --}}
        @if (session('success'))
            <script>
                $(document).ready(function() {
                    $('.btn').click();
                })
            </script>
        @endif
        <label for="my-modal" class="btn" style="visibility: hidden">open modal</label>
        <input type="checkbox" id="my-modal" class="modal-toggle" />
        <label for="my-modal" class="modal cursor-pointer">
            <div class="modal-box relative alert alert-success shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </label>
        {{-- Close Modal --}}

    </x-app-layout>

    {{-- for script  --}}
    <script>
        $('.GenQrCode').click(function() {
            console.log('Event Click add ');
            // Request QR code 
            if ("WebSocket" in window) {
                var base = window.location.hostname;
                var ws = new WebSocket('ws://' + base + ':8090');
                // var ws = new WebSocket('wss://'+base+':8090');
                console.log(ws);
                ws.onopen = function() {
                    ws.send(JSON.stringify({
                        type: "server",
                        code: 0,
                        step: 0
                    }));

                };
                ws.onmessage = function(evt) {
                    const data = JSON.parse(event.data);
                    console.log("datafromservver", data);
                    const step = data.data && data.data.step;
                    if (step === 0) {
                        //Generate QR Code and show to user.
                        $("#qrcode").qrcode({
                            "width": 100,
                            "height": 100,
                            "text": data.data.url
                        });
                        console.log("QR code generated successfully");
                    } else if (step === 2) {
                        const {
                            username,
                            token
                        } = data.data;
                        localStorage.setItem(TOKEN_KEY, token);

                        $("#qrcode").html("");
                        ws.close();
                        alert(username);
                        is_loginfun(username);
                    }
                };
                ws.onclose = function() {
                    console.log("Connection is closed...");
                };
            } else {
                alert("WebSocket NOT supported by your Browser!");
            }
        });
    </script>

</body>

</html>
