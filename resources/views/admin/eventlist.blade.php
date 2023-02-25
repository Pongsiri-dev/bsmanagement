<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายการอีเว้นท์</title>
</head>

<body>
    <x-app-layout>
        <div class="container mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                @foreach ($events as $item)
                    <!-- Column -->
                    <a href="{{ route('eventview', $item->id) }}">
                        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 hover:scale-105 duration-500">
                            <!-- Article -->
                            <article class="overflow-hidden rounded-lg shadow-lg">
                                <a href="#">

                                    {{-- <img alt="Placeholder" class="block h-auto w-full"
                                    src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1712&q=80"> --}}
                                    {{-- <img alt="Placeholder" class="block h-auto w-full"
                                    src="https://picsum.photos/600/400/?random"> --}}
                                </a>
                                <a href="{{ route('eventview', $item->id) }}">
                                    <header class="flex bg-white items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <span class="no-underline text-black" href="#">
                                                {{ $item->event_name }}
                                            </span>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            {{ SlashDateOnly($item->event_sdate) }}
                                        </p>
                                    </header>
                                    <footer class="flex bg-white items-center justify-between leading-none p-2 md:p-4">
                                        {{-- <a class="flex items-center no-underline hover:underline text-black"
                                            href="{{ route('eventview', $item->id) }}"> --}}
                                        <p class="ml-2 text-sm">
                                            ผู้จัด : {{ $item->event_author }}
                                        </p>
                                        {{-- </a> --}}

                                        {{-- <a class="no-underline text-grey-darker hover:text-red-dark"
                                            href="{{ route('eventview', $item->id) }}"> --}}
                                        <div>
                                            <img src="/{{ $item->event_path }}" alt="{{ $item->event_path }}"
                                                width="30" height="20" />
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        {{-- </a> --}}
                                    </footer>
                                </a>
                            </article>
                            <!-- END Article -->
                        </div>
                    </a>
                    <!-- END Column -->
                @endforeach
            </div>
        </div>
    </x-app-layout>
</body>

</html>
