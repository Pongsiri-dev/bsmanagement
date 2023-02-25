<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <div class="px-6 pt-6 lg:px-8">
            <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">บาร์เทอร์สมาร์ท</span>
                        <img src="{{ url('/logo-barter.png') }}" alt="logo" width="80" height="80">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true" id="bubble">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                {{-- Menu --}}
                <div class="hidden lg:flex lg:gap-x-12">
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Event</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About</a> --}}
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ url('/login') }}"
                        class="relative rounded-full py-1 px-3 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 font-semibold
                        bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ">เข้าสู่ระบบ
                        <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div role="dialog" aria-modal="true" id="vMobile">
                <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">บาร์เทอร์สมาร์ท</span>
                            <img class="h-8" src="{{ url('/logo-barter.png') }}" alt="">
                        </a>
                        <button type="button" id="cBtn" class="rounded-md p-3 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root justify-center space-x-2">
                        <div class="-my-6 divide-y divide-gray-500/10 flex justify-center space-x-2">
                            {{-- <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Event</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Company</a>
                            </div> --}}
                            <div>
                                <img src="{{ url('/logo-barter.png') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 md:max-sm md:max-lg:flex max-w-md mx-auto justify-center md:max-w-2xl mt-12">
                        <a href="{{ url('/login') }}"
                            class="text-center -inline-block rounded bg-orange-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal
                                 text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out 
                                 ">
                            เข้าสู่ระบบ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="relative px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-20">
                    {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div
                            class="relative rounded-full py-1 px-3 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Announcing our next round of funding. <a href="#"
                                class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                    aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div> --}}
                    <div class="text-center">
                        <h1 class="text-4xl font-regular tracking-tight text-gray-700 sm:text-6xl">สังคมไร้เงินสด
                            แต่ไม่ไร้น้ำใจ</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">เราคือ Platform
                            แลกเปลี่ยนสินค้าที่รวบรวมนักธุรกิจและผู้ประกอบการในประเทศไทยที่มีสินค้าและบริการนำมาแลกเปลี่ยนกันด้วยระบบการบาร์เทอร์.
                            สร้างโอกาสนำเสนอสินค้า เพิ่มช่องทางการขาย ระบายสต๊อก แลกเปลี่ยน ช่วยเหลือ และ
                            ต่อยอดทางธุรกิจซึ่งกันและกัน ที่ใช้งานได้จริง
                            ที่จะช่วยให้ท่านเพิ่มโอกาสในธุรกิจในหลากหลายมิติที่ท่านอาจจะคาดไม่ถึงมาก่อนให้แก่ตัวท่าน และ
                            ธุรกิจของท่านเอง.</p>
                        <p class="mt-8 text-lg text-gray-600">
                            ผู้พันบาร์เทอร์ <br>
                            พ.ต.ดร ธนพงษ์ จันทร์ทอง
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <div class="text-center">
                                <h3 class="text-3xl mb-3"> ดาวน์โหลดแอพลิเคชั่น </h3>
                                <div class="flex justify-center my-10">
                                    <a href="https://play.google.com/store/apps/details?id=th.co.bartersmart">
                                        <div class="flex items-center border rounded-lg px-4 py-2 w-52 mx-2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png"
                                                class="w-7 md:w-8">
                                            <div class="text-left ml-3">
                                                <p class='text-xs text-gray-600'>Download on </p>
                                                <p class="text-sm md:text-base"> Google Play Store </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://apps.apple.com/th/app/bartersmart/id1586611452">
                                        <div class="flex items-center border rounded-lg px-4 py-2 w-44 mx-2">
                                            <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png"
                                                class="w-7 md:w-8">
                                            <div class="text-left ml-3">
                                                <p class='text-xs text-gray-600'>Download on </p>
                                                <p class="text-sm md:text-base"> Apple Store </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            {{-- <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                ดาวน์โหลดแอพ</a> --}}
                            {{-- <a href="#" class="text-base font-semibold leading-7 text-gray-900">ดาวน์โหลดแอพ <span
                                    aria-hidden="true"></span></a> --}}
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

    {{-- Section II --}}
    {{-- <div class="bg-white py-24 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">หน่วยแลกเปลี่ยนของเรา</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">พอยท์ และ บิ๊กพอยท์</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">คลิกที่รูปเพื่อศึกษาข้อมูลเพิ่มเติม</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            เหรียญ Big Point คืออะไร
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Big Point คือเหรียญดิจิตอลที่ใช้ระบบ Blockchain ในการออกเหรียญ โดยเหรียญ Big Point
                            มีไว้แจกเพื่อนสมาชิกเท่านั้น ห้ามจำหน่าย
                            มีจำนวนจำกัดที่ 21 ล้านเหรียญ โดยเหรียญมีจำนวนจำกัด จะไม่มีการออกเพิ่มอีก
                        </dd>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Big Point คือเหรียญดิจิตอลที่ใช้ระบบ Blockchain ในการออกเหรียญ โดยเหรียญ Big Point
                            มีไว้แจกเพื่อนสมาชิกเท่านั้นห้ามจำหน่าย
                            มีจำนวนจำกัดที่ 21 ล้านเหรียญ โดยเหรียญมีจำนวนจำกัด จะไม่มีการออกเพิ่มอีก
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Point มีมูลค่าเท่าไร ?
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">ตลาดแลกเปลี่ยนสินค้าของ Bartersmart
                            มีการกําหนดการตั้งราคาสินค้าและบริการให้เท่ากับราคาจริงของสินค้าและบริการในตลาดการแลกเปลี่ยนสินค้าที่ใช้
                            เงินสด มูลค่าของ 1 Point จะเท่ากับ 1 บาท ซึ่งการตั้งราคาสินค้าในตลาดแลกเปลี่ยนสินค้าของ
                            Bartersmart จะป้องกันการขายสินค้าหรือบริการที่เกินกว่าราคาตลาด</dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            การเข้าร่วมใช้บริการ Playform
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            ในการที่คุณจะเข้ามาร่วมการแลกเปลี่ยนกับทาง Bartersmart นั้น
                            จะต้องมีค่าใช้จ่ายในเรื่องกี่ใช้บริการ Platform และการเปิดแอ็คเคาร์แรกเข้าเท่านั้น
                            หลังจากนั้นจะไม่มีการเรียกเก็บค่าบริการรายเดือน หรือ รายปี รวมถึงไม่มีการเก็บค่า
                            ธรรมเนียมในการโอนแต่อย่างใด เพื่อไม่ทำให้เพิ่มภาระและค่าใช้จ่ายกับผู้ใช้บริการ
                            ไม่ว่าในช่องทางไหนๆ ผู้สมัครต้องเป็นเจ้าของกิจการ หรือ นักธุรกิจที่มีสินค้า
                            และบริการเท่านั้น บริษัทฯจะพิจาณาไม่รับบุคคลทั่วไปที่ยังไม่มีสินค้าเข้ามาขายในระบบ
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            กรณีผู้ซื้อมี Points ไม่เพียงพอที่จะชําระสินค้า
                            ผู้ซื้อสามารถชําระส่วนต่างเป็นเงินสดได้หรือไม่ ?
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            ผู้ซื้อที่มีจํานวน points ไม่เพียงพอที่จะชําระสินค้า
                            ทางบริษัทอนุญาตให้ทางผู้ซื้อสามารถชําระส่วนต่างเป็นเงินสดได้
                            โดยผู้ซื้อสามารถติดต่อไปทางผู้ขายได้โดยตรงเพื่อทําข้อตกลงต่อรองที่จะชําระส่วนต่างของสินค้าหรือบริการในส่วนที่ขาดด้วยเงินสดโดยไม่จําเป็นต้องผ่านบริษัท
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div> --}}
    {{-- close section II --}}
    {{-- section footer --}}
    <footer class="px-4 divide-y dark:bg-gray-800 dark:text-gray-100">
        {{-- <div class="container flex flex-col justify-center py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
            <div class="justify-center ">
                <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 lg:justify-start">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full dark:bg-violet-400">
                        <img src="{{ url('/logo-barter.png') }}" alt="logo">
                    </div>
                    <span class="self-center text-2xl font-semibold">Bartersmart</span>
                </a>
            </div> --}}
        {{-- <div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4">
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Product</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Features</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Integrations</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Pricing</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="tracking-wide uppercase dark:text-gray-50">Company</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Privacy</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Terms of Service</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h3 class="uppercase dark:text-gray-50">Developers</h3>
                    <ul class="space-y-1">
                        <li>
                            <a rel="noopener noreferrer" href="#">Public API</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Documentation</a>
                        </li>
                        <li>
                            <a rel="noopener noreferrer" href="#">Guides</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <div class="uppercase dark:text-gray-50">Social media</div>
                    <div class="flex justify-start space-x-3">
                        <a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                <path
                                    d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z">
                                </path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                class="w-5 h-5 fill-current">
                                <path
                                    d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="py-6 text-sm text-center dark:text-gray-400">© 2023 Company Co. All rights reserved.</div>
    </footer>

    <script>
        $(document).ready(function() {
            document.getElementById('cBtn').onclick = GFG_click;
            document.getElementById('bubble').onclick = GFG_click;

            function GFG_click(clicked) {
                $('#vMobile').toggle();
            }
        });
    </script>
</body>

</html>
