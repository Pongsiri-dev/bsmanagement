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
                            <x-label for="member_id" :value="__('รหัสสมาชิก')" />

                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="member_code" class="block w-full" type="text"
                                    name="member_code" :value="old('member_code')" placeholder="{{ __('รหัสสมาชิก') }}" required
                                    autofocus />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <x-label for="password" :value="__('รหัสผ่าน')" />

                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="password" class="block w-full" type="password" name="password"
                                    required autocomplete="current-password" placeholder="{{ __('รหัสผ่าน') }}" />
                            </x-input-with-icon-wrapper>
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
