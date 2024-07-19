<x-main-template>
    <x-sidebar />
    <x-header />

    <x-page-content>
        {{ $slot }}
    </x-page-content>

    <x-back-to-top-button />
    <x-switcher />
    <x-overlay />

</x-main-template>
