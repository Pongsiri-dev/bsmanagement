<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @vite('resources/css/app.css')
</head>

<body class="font-['Anuphan']">
    <!-- This example requires Tailwind CSS v3.0+ -->
    <div class="isolate bg-white">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3"
                    d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208"
                        y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC"></stop>
                        <stop offset="1" stop-color="#FF80B5"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        {{-- <div class="px-6 pt-6 lg:px-8">
            <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">บาร์เทอร์สมาร์ท</span>
                        <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="image">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div role="dialog" aria-modal="true">
                <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">บาร์เทอร์สมาร์ท</span>
                            <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <main>
            <div class="relative px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-1 sm:py-1 lg:py-1">
                    <div class="sm:mb-8 sm:flex sm:justify-center">
                        <div class="relative">
                            <form action="{{ route('checkInEvents') }}" method="post">
                                @csrf
                                <div class="py-1 flex flex-col justify-center sm:py-1">
                                    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                                        <div
                                            class="relative px-6 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                                            <div class="max-w-md mx-auto">
                                                <div class="flex items-center space-x-5">
                                                    <div
                                                        class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                                        <div class="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="w-5 h-5">
                                                                <path
                                                                    d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                                                            </svg>
                                                            <p class="ml-4">
                                                                ลงทะเบียนอีเว้นท์
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divide-y divide-gray-200">
                                                    <div
                                                        class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                                        <div class="flex flex-col">
                                                            <label class="leading-loose">ชื่ออีเว้นท์</label>
                                                            <input type="hidden" name="event_id"
                                                                value="{{ $event->id }}">
                                                            <input type="text" name="event_name"
                                                                value="{{ $event->event_name }}"
                                                                class="cursor-not-allowed px-4 py-2 bg-gray-300 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                                placeholder="{{ $event->event_name }}">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <label class="leading-loose">เบอร์โทรศัพท์</label>
                                                            <input type="text" name="member_telephone"
                                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                                placeholder="ระบุเบอร์โทรศัพท์">
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <label class="leading-loose">รหัสผู้ใช้งาน
                                                                <span class="inset-0 text-indigo-600"
                                                                    aria-hidden="true">(Member Code)</span></label>
                                                            <input type="text" name="member_code"
                                                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                                placeholder="เช่น 0000234">
                                                        </div>
                                                    </div>
                                                    <div class="pt-4 flex items-center space-x-4">
                                                        <button type="submit"
                                                            class="transition ease-in duration-300 mt-10 flex w-full items-center justify-center rounded-md border bg-orange-200 py-3 px-8 text-base font-small hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                            เข้าร่วม</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div
                    class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                        viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
                        <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3"
                            d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                        <defs>
                            <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208"
                                y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#9089FC"></stop>
                                <stop offset="1" stop-color="#FF80B5"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </main>
    </div>
    {{-- close section I --}}
    {{-- Modal --}}
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $('.btn').click();
            })
        </script>
    @endif
    @if (session('warning'))
        <script>
            $(document).ready(function() {
                $('.btnw').click();
            })
        </script>
    @endif

    {{-- WARNING --}}
    <label for="my-modal-w" class="btnw" style="visibility: hidden">open modal</label>
    <input type="checkbox" id="my-modal-w" class="modal-toggle" />
    <label for="my-modal-w" class="modal cursor-pointer">
        <div class="modal-box relative alert alert-warning shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <span>{{ session('warning') }}</span>
            </div>
        </div>
    </label>

    {{-- SUCCESS --}}
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
</body>

</html>
