<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3 font-['Anuphan']">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="สร้างอีเว้นท์" href="{{ url('/dashboard/events/new') }}" :isActive="request()->routeIs('events')">
        <x-slot name="icon">
            <x-icon name="megaphone" solid mini />
            {{-- <x-icons.events class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="รายการอีเว้นท์" href="{{ url('/dashboard/events/list') }}" :isActive="request()->routeIs('eventslist')">
        <x-slot name="icon">
            <x-icon name="table-cells" solid mini />
            {{-- <x-icons.events class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="รายการผู้เข้าร่วม" href="{{ url('/dashboard/audience') }}" :isActive="request()->routeIs('audience')">
        <x-slot name="icon">
            <x-icon name="user-group" solid mini />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="เพิ่มข้อมูลผู้เข้าร่วม" href="{{ url('/dashboard/addaudienceview') }}" :isActive="request()->routeIs('addaudienceview')">
        <x-slot name="icon">
            <x-icon name="user" solid mini />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="ค้นหาข้อมูลสมาชิก" href="{{ url('/dashboard/search') }}" :isActive="request()->routeIs('search')">
        <x-slot name="icon">
            <x-icon name="magnifying-glass" solid mini />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="รายงาน" href="{{ url('/dashboard/users') }}" :isActive="request()->routeIs('report')">
        <x-slot name="icon">
            <x-icon name="document-text" solid mini />
        </x-slot>
    </x-sidebar.link>

    {{-- Examples --}}

    {{-- <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')" /> --}}

    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}

</x-perfect-scrollbar>
