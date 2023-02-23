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
    <title>เพิ่มข้อมูล</title>
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
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                                        </svg>
                                        <p class="ml-4">
                                            เพิ่มข้อมูลผู้ใช้ใหม่
                                        </p>
                                    </div>
                                    {{-- <p class="text-sm text-gray-500 font-normal leading-relaxed"></p> --}}
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ชื่อจริง</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="text" name="firstname"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุชื่อจริง">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">นามสกุล</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="text" name="lastname"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุนามสกุล">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">เบอร์โทรศัพท์</label>
                                        <input type="text" name="phone"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="ระบุเบอร์โทรศัพท์">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">รหัสผ่าน</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="password"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุรหัสผ่าน">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ยืนยันรหัสผ่าน</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="re-password"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ยืนยันรหัสผ่าน">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">กระเป๋า Trust Wallet ของผู้สมัคร(ขึ้นต้นด้วย
                                            Ox)</label>
                                        <input type="text" name="phone"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="เช่น Ox12345">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">กำหนดการมองเห็น</label>
                                        <select id="userSel" name="event_assign"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            <option value="all">สมาชิกทั้งหมด</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="pt-4 flex items-center space-x-4">
                                    <button type="submit"
                                        class="mt-10 flex w-full items-center justify-center rounded-md border bg-600 py-3 px-8 text-base font-small hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        ยกเลิก</button>

                                    <button type="submit"
                                        class="transition ease-in duration-300 mt-10 flex w-full items-center justify-center rounded-md border bg-orange-200 py-3 px-8 text-base font-small hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        สร้างอีเว้นท์</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- section b --}}
            <div class="bg-gray-100 py-1 flex flex-col justify-center sm:py-1">
                <div class="relative py-1 sm:max-w-xl sm:mx-auto">
                    <div class="relative px-6 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                        <div class="max-w-md mx-auto">
                            <div class="flex items-center space-x-5">
                                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path
                                                d="M2.879 7.121A3 3 0 007.5 6.66a2.997 2.997 0 002.5 1.34 2.997 2.997 0 002.5-1.34 3 3 0 104.622-3.78l-.293-.293A2 2 0 0015.415 2H4.585a2 2 0 00-1.414.586l-.292.292a3 3 0 000 4.243zM3 9.032a4.507 4.507 0 004.5-.29A4.48 4.48 0 0010 9.5a4.48 4.48 0 002.5-.758 4.507 4.507 0 004.5.29V16.5h.25a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75v-3.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v3.5a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5H3V9.032z" />
                                        </svg>
                                        <p class="ml-4">
                                            เพิ่มข้อมูลร้านค้า
                                        </p>
                                    </div>
                                    {{-- <p class="text-sm text-gray-500 font-normal leading-relaxed"></p> --}}
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ชื่อร้านค้า</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="text" name="firstname"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุชื่อร้านค้า">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">ที่อยู่ร้านค้า</label>
                                        <input type="text" name="phone"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="ระบุที่อยู่ร้านค้า">
                                    </div>
                                    {{-- <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">รหัสผ่าน</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="password"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุรหัสผ่าน">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ยืนยันรหัสผ่าน</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="re-password"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ยืนยันรหัสผ่าน">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="flex flex-col">
                                        <label class="leading-loose">จังหวัด</label>
                                        <select id="userSel" name="event_assign"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            <option value="all">เลือกจังหวัด</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">อำเภอ</label>
                                        <select id="userSel" name="event_assign"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            <option value="all">เลือกอำเภอ</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">ตำบล</label>
                                        <select id="userSel" name="event_assign"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            <option value="all">เลือกตำบล</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center space-x-4 pl-1 pr-12">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">รหัสผู้แนะนำ</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="password"
                                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุรหัสผู้แนะนำ">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ชื่อ-นามสกุลผู้แนะนำ</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input type="password" name="re-password"
                                                    class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุชื่อ-นามสกุลผู้แนะนำ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button type="submit"
                                        class="mt-10 flex w-full items-center justify-center rounded-md border bg-600 py-3 px-8 text-base font-small hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        ยกเลิก</button>

                                    <button type="submit"
                                        class="transition ease-in duration-300 mt-10 flex w-full items-center justify-center rounded-md border bg-orange-200 py-3 px-8 text-base font-small hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        เพิ่มข้อมูลผู้ใช้ใหม่</button>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </label>
        {{-- Close Modal --}}

    </x-app-layout>

</body>

</html>
