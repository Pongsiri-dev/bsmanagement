<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- @vite('resources/css/app.css') --}}
    <style>
        .wrapper {
            display: grid;
            place-items: center
        }
    </style>
</head>

<body class="font-['Anuphan']">
    <x-app-layout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6 overflow-hidden font-['Anuphan']">
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
            {{-- Card --}}
            {{-- <div class="container my-12 mx-auto md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <div class=" bg-white shadow-xl">
                    <div class="card-body">
                        <div class="flex items-center">
                            <h2 class="card-title pr-6">สมาชิกใหม่</h2>
                            <img src="/icons/icons8-user-64.png" alt="Shoes" />
                        </div>
                        <p>จำนวนสมาชิกใหม่ที่ทำการสมัครเป็นสมาชิก</p>
                        <div class="card-actions justify-end">
                            <button class="h-9 px-2 font-semibold rounded-md bg-black text-white" type="submit">
                                ดูข้อมูล</button>
                        </div>
                    </div>
                </div>
                <div class=" bg-white shadow-xl m-1">
                    <div class="card-body">
                        <div class="flex items-center">
                            <h2 class="card-title pr-6">Top Rank</h2>
                            <img src="/icons/confetti.png" alt="Shoes" />
                        </div>
                        <p>ผู้แนะนำที่มีจำนวนแนะนำมากที่สุด</p>
                        <div class="card-actions justify-end">
                            <button class="h-9 px-2 font-semibold rounded-md bg-black text-white" type="submit">
                                ดูข้อมูล</button>
                        </div>
                    </div>
                </div>
                <div class=" bg-white shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">สมาชิกทั้งหมด</h2>
                        <p>50,000 </p>
                        <div class="card-actions justify-end">
                            <button class="h-9 px-2 font-semibold rounded-md bg-black text-white" type="submit">
                                ดูข้อมูล</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

            <!-- component -->
            <section class="text-gray-600 body-font bg-gray-50  flex justify-center items-center">
                <div class="container px-5 py-1 mx-auto">
                    <div class="flex flex-wrap -m-4 text-center">
                        <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                            <div
                                class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                <div>
                                    <h2 class="text-gray-900 text-md font-bold">จำนวนสมาชิกทั้งหมด</h2>
                                    <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">+ 150.000 ₭</h3>
                                    <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                    <button
                                        class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">ดูข้อมูล</button>
                                </div>
                                <div
                                    class="bg-gradient-to-tr from-yellow-500 to-yellow-400 w-32 h-32  rounded-full shadow-2xl shadow-yellow-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <div>
                                        <h1 class="text-white text-2xl">Member</h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                            <div
                                class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                <div>
                                    <h2 class="text-gray-900 text-md font-bold">จำนวนสมาชิกใหม่</h2>
                                    <h3 class="mt-2 text-xl font-bold text-orange-500 text-left">+ 150.000 ₭</h3>
                                    <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                    <button
                                        class="text-sm mt-6 px-4 py-2 bg-orange-400  text-white rounded-lg  tracking-wider hover:bg-orange-500 outline-none">ดูข้อมูล</button>
                                </div>
                                <div
                                    class="bg-gradient-to-tr from-orange-500 to-orange-400 w-32 h-32  rounded-full shadow-2xl shadow-orange-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <div>
                                        <h1 class="text-white text-2xl">New</h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                            <div
                                class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                                <div>
                                    <h2 class="text-gray-900 text-md font-bold">จำนวนอีเว้นท์ทั้งหมด</h2>
                                    <h3 class="mt-2 text-xl font-bold text-red-500 text-left">+ 150.000 ₭</h3>
                                    <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                    <button
                                        class="text-sm mt-6 px-4 py-2 bg-red-400  text-white rounded-lg  tracking-wider hover:bg-red-500 outline-none">ดูข้อมูล</button>
                                </div>
                                <div
                                    class="bg-gradient-to-tr from-red-500 to-red-400 w-32 h-32  rounded-full shadow-2xl shadow-red-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <div>
                                        <h1 class="text-white text-2xl">Events</h1>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                        <div
                            class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                            <div>
                                <h2 class="text-gray-900 text-md font-bold">Total Ballance</h2>
                                <h3 class="mt-2 text-xl font-bold text-green-500 text-left">+ 150.000 ₭</h3>
                                <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                <button
                                    class="text-sm mt-6 px-4 py-2 bg-green-400  text-white rounded-lg  tracking-wider hover:bg-green-500 outline-none">ดูข้อมูล</button>
                            </div>
                            <div
                                class="bg-gradient-to-tr from-green-500 to-green-500 w-32 h-32  rounded-full shadow-2xl shadow-green-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                <div>
                                    <h1 class="text-white text-2xl">Basic</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                        <div
                            class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                            <div>
                                <h2 class="text-gray-900 text-md font-bold">Total Ballance</h2>
                                <h3 class="mt-2 text-xl font-bold text-cyan-500 text-left">+ 150.000 ₭</h3>
                                <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                <button
                                    class="text-sm mt-6 px-4 py-2 bg-cyan-400  text-white rounded-lg  tracking-wider hover:bg-cyan-500 outline-none">ดูข้อมูล</button>
                            </div>
                            <div
                                class="bg-gradient-to-tr from-cyan-500 to-cyan-400 w-32 h-32  rounded-full shadow-2xl shadow-cyan-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                <div>
                                    <h1 class="text-white text-2xl">Basic</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3 w-full hover:scale-105 duration-500">
                        <div
                            class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
                            <div>
                                <h2 class="text-gray-900 text-md font-bold">Total Ballance</h2>
                                <h3 class="mt-2 text-xl font-bold text-indigo-500 text-left">+ 150.000 ₭</h3>
                                <p class="text-sm font-semibold text-gray-400">Last Updated</p>
                                <button
                                    class="text-sm mt-6 px-4 py-2 bg-indigo-400 text-white rounded-lg  tracking-wider hover:bg-indigo-500 outline-none">ดูข้อมูล</button>
                            </div>
                            <div
                                class="bg-gradient-to-tr from-indigo-500 to-indigo-400 w-32 h-32  rounded-full shadow-2xl shadow-[#304FFE] border-white  border-dashed border-2  flex justify-center items-center ">
                                <div>
                                    <h1 class="text-white text-2xl">Basic</h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
            </section>

            {{-- Table Events --}}
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6"> --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6 bg-white overflow-hidden shadow-xl sm:rounded-lg mt-6">
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div>
                            <h2 class="text-2xl font-semibold leading-tight">จำนวนอีเว้นท์ทั้งหมด {{ count($elist) }}
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
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                สถานะผู้เข้าร่วม
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($e = 1)
                                        @foreach ($elist as $item)
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
                                                        <div class="ml-0">
                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                {{ $item->event_name }}
                                                            </p>
                                                            <p class="text-gray-600 whitespace-no-wrap">
                                                                ผู้จัด : {{ $item->event_author }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $item->event_description }}</p>
                                                    {{-- <p class="text-gray-600 whitespace-no-wrap">USD</p> --}}
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">{{ $item->event_venue }}
                                                    </p>
                                                    <p class="text-gray-600 whitespace-no-wrap">
                                                        {{ $item->created_at->diffForHumans() }}</p>
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
                                                    {{-- <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                        <span class="relative">ใช้งาน</span>
                                                    </span> --}}
                                                </td>
                                                <td>
                                                    <div class="flex items-center">
                                                        <span class="mr-1">{{ $randomNumber }}%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-1 text-xs flex rounded bg-red-200">
                                                                <div style="width: {{ $randomNumber }}%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                    <a href="{{ route('audiencelist', $item->id) }}"
                                                        class="bg-white py-1 px-4 border-2 border-x-orange-400 shadow">
                                                        ดูข้อมูล
                                                    </a>
                                                    {{-- <button
                                                        class="bg-white hover:bg-gray-100 text-gray-800 py-1 px-4 border border-gray-400 rounded shadow">
                                                        ดูข้อมูล
                                                    </button> --}}
                                                </td>
                                            </tr>
                                        @endforeach()
                                        {{-- <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Michael Roberts
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000003</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$214,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 25, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">Due in 6 days</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Paid</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Devin Childs
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000002</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$20,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 14, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">Due in 2 weeks</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Pending</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Frederick Nicholas
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000001</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$12,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 6, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">
                                                    Due 3 weeks ago
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Overdue</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

            {{-- Table Users --}}
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div>
                            <h2 class="text-2xl font-semibold leading-tight">จำนวนสมาชิกทั้งหมด
                                {{ count((array) $child['result']) }}
                                คน </br>
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
                                        @foreach ($child['result'] as $item)
                                            <tr class="hover:scale-105 duration-500">
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    {{ $i++ }}
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="flex">
                                                        {{-- <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="{{ $item->profile_photo_url }}" alt="" />
                                                    </div> --}}
                                                        <div class="ml-3">
                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                คุณ {{ $item['name'] . ' ' . $item['lastname'] }}
                                                            </p>
                                                            <p class="text-gray-600 whitespace-no-wrap">
                                                                {{ $item['member_code'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ phoneNumberFormat($item['telephone']) }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ SlashDateOnly($item['created']) }}
                                                    </p>
                                                    <p class="text-gray-600 whitespace-no-wrap">
                                                        {{ \Carbon\Carbon::parse($item['created'])->diffForHumans() }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                        <span class="relative">ใช้งาน</span>
                                                    </span>
                                                </td>
                                                {{-- <td
                                                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                    <button type="button"
                                                        class="inline-block text-gray-500 hover:text-gray-700">
                                                        <svg class="inline-block h-6 w-6 fill-current"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                        </svg>
                                                    </button>
                                                </td> --}}
                                            </tr>
                                        @endforeach()
                                        {{-- <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Michael Roberts
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000003</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$214,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 25, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">Due in 6 days</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Paid</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Devin Childs
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000002</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$20,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 14, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">Due in 2 weeks</p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Pending</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Frederick Nicholas
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap">000001</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">$12,000</p>
                                                <p class="text-gray-600 whitespace-no-wrap">USD</p>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Sept 6, 2019</p>
                                                <p class="text-gray-600 whitespace-no-wrap">
                                                    Due 3 weeks ago
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                    <span aria-hidden
                                                        class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                    <span class="relative">Overdue</span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 bg-white text-sm text-right">
                                                <button type="button"
                                                    class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg class="inline-block h-6 w-6 fill-current"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </x-app-layout>

</body>

</html>
