<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายละเอียดอีเว้นท์</title>

    <style>
        .scan {
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .scan .qrcode::befor {
            content: '';
            position: absolute;
            inset: 0px;
            width: 100%;
            height: 100%;
            background: #ffa600;
            /* filter: drop-shadow(0 0 20px #ffa600) drop-shadow(0 0 60px #ffa600); */
            animation: animate 4s linear infinite;
        }

        @keyframes animate {

            0%,
            100% {
                height: 20px;
            }

            50% {
                height: 100%;
            }
        }

        .scan .qrcode::after {
            content: '';
            position: absolute;
            inset: 0px;
            width: 100%;
            height: 7px;
            background: #ffa600;
            filter: drop-shadow(0 0 20px #ffa600) drop-shadow(0 0 60px #ffa600);
            animation: animateLine 4s ease-in-out infinite;
        }

        @keyframes animateLine {

            0% {
                top: 20px;
            }

            50% {
                top: 100%;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <x-app-layout>
        <div class="flex flex-col">

            <!-- Column -->
            <div class="stats shadow content-center	">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-title">จำนวนผู้ใช้งานทั้งหมด</div>
                    <div class="stat-value text-primary">25.6K</div>
                    <div class="stat-desc">21% more than last month</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="stat-title">จำนวนที่ลงทะเบียนแล้ว</div>
                    <div class="stat-value text-secondary">2.6M</div>
                    <div class="stat-desc">21% more than last month</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <div class="avatar online">
                            <div class="w-16 rounded-full">
                                <img
                                    src="https://images.pexels.com/photos/11428989/pexels-photo-11428989.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" />
                            </div>
                        </div>
                    </div>
                    <div class="stat-value">86%</div>
                    <div class="stat-title">Tasks done</div>
                    <div class="stat-desc text-secondary">31 tasks remaining</div>
                </div>
            </div>
            <div class="mt-52 py-6 flex flex-col sm:py-6 items-center justify-center scan">
                <div class="bg-white">
                    <div class="relative px-8 py-8 sm:max-w-xl sm:mx-auto hadow-lg qrcode">
                        <img class="shadow-lg" src="/{{ $eventview->event_path }}" alt="{{ $eventview->event_path }}"
                            width="200" height="100" />
                    </div>
                </div>
                <div class="relative justify-center"> </div>
            </div>
            <!-- END Column -->
        </div>
    </x-app-layout>
</body>

</html>
