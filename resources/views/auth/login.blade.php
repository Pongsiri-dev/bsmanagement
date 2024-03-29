<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เข้าสู่ระบบ</title>
</head>

<body class="bg-white">
    <div class="isolate bg-white">
        <x-guest-layout>
            <x-auth-card>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="grid gap-6">
                        <!-- Email Address -->
                        <div class="space-y-2">
                            <x-label for="member_id" :value="__('รหัสสมาชิก *กรอกเลขสมาชิก 7 หลัก Ex.0012345')" />
                            <input placeholder="รหัสสมาชิก" type="text"
                                class="text-md block px-3 py-2 rounded-lg w-full" name="member_code" required>
                            {{-- <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                                </x-slot> --}}
                            {{-- <x-input withicon id="member_code" class="block w-full" type="text" name="member_code"
                                :value="old('member_code')" placeholder="{{ __('รหัสสมาชิก') }}" required autofocus /> --}}
                            {{-- </x-input-with-icon-wrapper> --}}
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <x-label for="password" :value="__('รหัสผ่าน')" />
                            <div class="py-2" x-data="{ show: true }">
                                <div class="relative">
                                    <input placeholder="รหัสผ่าน" :type="show ? 'password' : 'text'"
                                        class="text-md block px-3 py-2 rounded-lg w-full" name="password" required>
                                    <div class="absolute inset-y-0 right-0 pr-6 flex items-center text-sm leading-5">
                                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                            :class="{ 'hidden': !show, 'block': show }"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                            :class="{ 'block': !show, 'hidden': show }"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                            <path fill="currentColor"
                                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                            </path>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            {{-- <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="password" class="block w-full form-control" type="password"
                                    name="password" required autocomplete="current-password"
                                    placeholder="{{ __('รหัสผ่าน') }}" data-toggle="password" />
                            </x-input-with-icon-wrapper> --}}
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="text-orange-500 border-gray-300 rounded focus:border-orange-300 focus:ring focus:ring-orange-500 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                                    name="remember">
                                <span
                                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>

                            {{-- @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}
                        </div>

                        <div>
                            <x-button class="justify-center w-full gap-2">
                                <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" />
                                <span>{{ __('เข้าสู่ระบบ') }}</span>
                            </x-button>
                        </div>

                        {{-- @if (Route::has('register'))
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Don’t have an account?') }}
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                            {{ __('Register') }}
                        </a>
                    </p>
                @endif --}}
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
    </div>
</body>

</html>
