<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายการผู้เข้าร่วม</title>
</head>

<body class="font-['Anuphan']">
    <x-app-layout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6 bg-white overflow-hidden shadow-xl sm:rounded-lg mt-6">
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <h2 class="text-xl">
                        รายละเอียดทั้งหมด
                    </h2>
                    <div class="grid grid-cols-2">
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            อีเว้นท์: {{ $event[0]->event_name }}
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            ผู้จัด: {{ $event[0]->event_author }}
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            รายละเอียด: {{ $event[0]->event_description }}
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            สถานที่จัดงาน: {{ $event[0]->event_venue }}
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            วันที่เริ่ม: {{ $event[0]->event_sdate }}
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            วันที่สิ้นสุด: {{ $event[0]->event_edate }}
                        </div>
                    </div>



                </div>
                {{-- section audience list --}}
                <div class="py-8">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    ลำดับ
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    ลูกทีม
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    เบอร์โทรศัพท์
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    วันที่สมัคร
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    สถานะ
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($ad as $item)
                                <tr class="hover:scale-105 duration-500">
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $i++ }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex">
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    คุณ {{ $item->member_firstname . ' ' . $item->member_lastname }}
                                                </p>
                                                <p class="text-gray-600 whitespace-no-wrap">
                                                    {{ phoneNumberFormat($item->member_telephone) }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ phoneNumberFormat($item->member_telephone) }}
                                        </p>
                                        <p class="text-gray-600 whitespace-no-wrap">
                                            {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ SlashDateOnly($item->created_at) }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">ลงทะเบียนแล้ว</span>
                                        </span>
                                    </td>
                                    {{--  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                        <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                            <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                            </svg>
                                        </button>
                                    </td> --}}
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
