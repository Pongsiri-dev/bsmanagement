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
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight">จำนวนอีเว้นท์ทั้งหมด {{ count($events) }}
                            อีเว้นท์
                        </h2>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            ลำดับ
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            ชื่ออีเว้นท์
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            รายละเอียด
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            สถานที่จัดงาน
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            สถานะ
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($e = 1)
                                    @foreach ($events as $item)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                {{ $e++ }}
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    {{-- <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="{{ $item->event_name }}" alt="" />
                                                    </div> --}}
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $item->event_name }}
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000004</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $item->event_description }}</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $item->event_venue }}
                                                </p>
                                                <p class="text-gray-600 whitespace-no-wrap">
                                                    {{ $item->event_sdate }}
                                                    {{-- {{ \Carbon\Carbon::parse($item['event_sdate'])->diffForHumans() }} --}}

                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                @if ($item->event_edate > Carbon\Carbon::now())
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-green-400 opacity-300 rounded-full"></span>
                                                    </span>
                                                @else
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-red-400 opacity-300 rounded-full"></span>
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                                                {{-- <button class="bg-white py-1 px-4 border-2 border-x-orange-400 shadow">
                                                    ดูข้อมูล
                                                </button> --}}
                                                <a href="{{ route('audiencelist', $item->id) }}"
                                                    class="bg-white py-1 px-4 border-2 border-x-orange-400 shadow">
                                                    ดูข้อมูล
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach()
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>
