<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <title>ค้นหาข้อมูลสมาชิก</title>
</head>

<body class="font-['Anuphan']">
    <x-app-layout>
        <div class="container bg-white mx-auto md:px-12 min-h-screen">
            <form action="{{ route('search') }}" method="post">
                @csrf
                <div class="flex items-center justify-center py-10">
                    <!-- component -->
                    <div class="col-span-20 h-100 w-full">
                        <div class="form-control">
                            <div class="input-group">
                                <input type="text" placeholder="ค้นหาข้อมูลสมาชิกด้วย Member ID" name="search"
                                    id="search" class="w-full" autocomplete="off" />
                                <button
                                    class="btn btn-square p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- About Section -->
                        <div class="bg-white py-5 mt-10 shadow-md rounded-sm border-t-2 border-orange-500">
                            @if (!empty($data))
                                <div class="flex items-center px-4 space-x-2 font-semibold text-gray-900 leading-8">
                                    <span clas="text-green-500">
                                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">ข้อมูลสมาชิก</span>
                                </div>
                                {{-- {{ dd($data) }} --}}
                                <div class="text-gray-700">
                                    <div class="grid md:grid-cols-2 text-sm">
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">ชื่อ-สกุล</div>
                                            <div class="px-4 py-2">คุณ
                                                {{ $data['member']['name'] . ' ' . $data['member']['lastname'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">ผู้แนะนำ</div>
                                            <div class="px-4 py-2">{{ $data['member']['member_reference_recheck'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">รหัสสมาชิก</div>
                                            <div class="px-4 py-2">{{ $data['member']['member_code'] }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">รหัสผู้แนะนำ</div>
                                            <div class="px-4 py-2">{{ $data['member']['member_reference_code'] }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">เบอร์โทรศัพท์</div>
                                            <div class="px-4 py-2">{{ $data['member']['telephone'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">วันที่เป็นสมาชิก</div>
                                            <div class="px-4 py-2">
                                                {{ SlashDateOnly($data['member']['created']) }}
                                                ({{ \Carbon\Carbon::parse($data['member']['created'])->diffForHumans() }})
                                                {{-- <div> --}}
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">สถานะ</div>
                                            <div class="px-4 py-2">
                                                <p class="text-blue-800">ใช้งาน</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">Wallet</div>
                                            <div class="px-4 py-2">
                                                {{ $data['member']['crypto_wallet_id'] }}
                                            </div>
                                        </div>
                                        {{-- <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">วันที่เป็นสมาชิก</div>
                                            <div class="px-4 py-2">
                                                {{ SlashDateOnly($data['created']) }}
                                                <div>
                                                    (
                                                    {{ \Carbon\Carbon::parse($data['created'])->diffForHumans() }})
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            @else
                                <div
                                    class="flex items-center text-center px-4 space-x-2 font-semibold text-gray-900 leading-8">
                                    <span class="tracking-wide">ไม่พบข้อมูลสมาชิก</span>
                                </div>
                            @endif
                        </div>
                        <!-- End of about section -->

                        {{-- SHOP --}}
                        <div class="bg-white py-5 mt-10 shadow-md rounded-sm border-t-2 border-orange-500">
                            @if (!empty($data))
                                <div class="flex items-center px-4 space-x-2 font-semibold text-gray-900 leading-8">
                                    <span clas="text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                                        </svg>
                                    </span>
                                    <span class="tracking-wide">ข้อมูลร้านค้า</span>
                                </div>
                                <div class="text-gray-700">
                                    <div class="grid md:grid-cols-2 text-sm">
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">ชื่อร้านค้า</div>
                                            <div class="px-4 py-2">
                                                {{ $data['shop']['name'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">รายละเอียดร้านค้า</div>
                                            <div class="px-4 py-2">{{ $data['shop']['detail'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">ที่อยู่ร้าน</div>
                                            <div class="px-4 py-2">{{ $data['shop']['address'] }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">ตำบล</div>
                                            <div class="px-4 py-2">{{ $data['shop']['sub_district'] }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">อำเภอ</div>
                                            <div class="px-4 py-2">
                                                {{ $data['shop']['district'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">จังหวัด</div>
                                            <div class="px-4 py-2">
                                                {{ $data['shop']['province'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">รหัสไปรษณีย์</div>
                                            <div class="px-4 py-2">
                                                {{ $data['shop']['zipcode'] }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="px-4 py-2 font-semibold">สถานะ</div>
                                            <div class="px-4 py-2">
                                                <a class="text-blue-800" href="mailto:jane@example.com">ใช้งาน</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="flex items-center text-center px-4 space-x-2 font-semibold text-gray-900 leading-8">
                                    <span class="tracking-wide">ไม่พบข้อมูลร้านค้า</span>
                                </div>
                            @endif
                        </div>
                        {{-- End of SHOP --}}

                        {{-- <div class="overflow-auto lg:overflow-visible ">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                <thead class="text-gray-500">
                                    <tr>
                                        <th class="p-3">ชื่อ-สกุล</th>
                                        <th class="p-3 text-left">เบอร์โทรศัพท์</th>
                                        <th class="p-3 text-left">วันที่สมัคร</th>
                                        <th class="p-3 text-left">สถานะ</th>
                                        <th class="p-3 text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-800">
                                        <td class="p-3">
                                            <div class="flex align-items-center">
                                                <img class="rounded-full h-12 w-12  object-cover"
                                                    src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
                                                    alt="unsplash image">
                                                <div class="ml-3">
                                                    <div class="">Appple</div>
                                                    <div class="text-gray-500">mail@rgmail.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            Technology
                                        </td>
                                        <td class="p-3 font-bold">
                                            200.00$
                                        </td>
                                        <td class="p-3">
                                            <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                                        </td>
                                        <td class="p-3 ">
                                            <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                <i class="material-icons-outlined text-base">visibility</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                                <i class="material-icons-round text-base">delete_outline</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-800">
                                        <td class="p-3">
                                            <div class="flex align-items-center">
                                                <img class="rounded-full h-12 w-12   object-cover"
                                                    src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                                    alt="unsplash image">
                                                <div class="ml-3">
                                                    <div class="">Realme</div>
                                                    <div class="text-gray-500">mail@rgmail.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            Technology
                                        </td>
                                        <td class="p-3 font-bold">
                                            200.00$
                                        </td>
                                        <td class="p-3">
                                            <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                                        </td>
                                        <td class="p-3">
                                            <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                                <i class="material-icons-outlined text-base">visibility</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                <i class="material-icons-round text-base">delete_outline</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-800">
                                        <td class="p-3">
                                            <div class="flex align-items-center">
                                                <img class="rounded-full h-12 w-12   object-cover"
                                                    src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80"
                                                    alt="unsplash image">
                                                <div class="ml-3">
                                                    <div class="">Samsung</div>
                                                    <div class="text-gray-500">mail@rgmail.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">
                                            Technology
                                        </td>
                                        <td class="p-3 font-bold">
                                            200.00$
                                        </td>
                                        <td class="p-3">
                                            <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                                        </td>
                                        <td class="p-3">
                                            <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                                <i class="material-icons-outlined text-base">visibility</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>
                                            <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                                <i class="material-icons-round text-base">delete_outline</i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                    <style>
                        .table {
                            border-spacing: 0 5px;
                        }

                        i {
                            font-size: 1rem !important;
                        }

                        .table tr {
                            border-radius: 20px;
                        }

                        tr td:nth-child(n+5),
                        tr th:nth-child(n+5) {
                            border-radius: 0 .625rem .625rem 0;
                        }

                        tr td:nth-child(1),
                        tr th:nth-child(1) {
                            border-radius: .625rem 0 0 .625rem;
                        }
                    </style>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>

</html>
