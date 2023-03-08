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

        <form action="{{ route('addaudience') }}" method="post">
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
                                            เพิ่มข้อมูลผู้เข้าร่วม
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose">ชื่อจริง</label>
                                            <div class="relative max-w-sm focus-within:text-gray-600 text-gray-400">
                                                <input required type="text" name="firstname"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุชื่อจริง">
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose">นามสกุล</label>
                                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                                <input required type="text" name="lastname"
                                                    class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                    placeholder="ระบุนามสกุล">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">เบอร์โทรศัพท์</label>
                                        <input required type="text" name="phone"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="ระบุเบอร์โทรศัพท์">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">อาชีพ</label>
                                        <input required type="text" name="career"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                            placeholder="ระบุอาชีพ">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">กรุณาเลือกเข้าร่วมอีเว้นท์</label>
                                        <select id="userSel" name="event_id"
                                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                            @foreach ($eList as $item)
                                                @if ($item->event_edate > Carbon\Carbon::now())
                                                    <option value="{{ $item->id }}">{{ $item->event_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-0 flex items-center space-x-0">
                            <button type="submit"
                                class="transition ease-in duration-300 mt-10 flex w-full items-center justify-center rounded-md border bg-orange-400 py-3 px-8 text-base font-small hover:bg-orange-500">
                                ลงทะเบียนเข้าร่วม</button>
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

</body>

</html>
