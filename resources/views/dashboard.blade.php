<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600 mb-4">Selamat datang, {{ auth()->user()->name }}.</p>

                {{-- Pindahkan tes badge-nya ke dalam sini agar lebih rapi --}}
                <div class="flex space-x-4 mt-4 border-t pt-4">
                    <x-badge status="Aman" />
                    <x-badge status="Menipis" />
                    <x-badge status="Habis" />
                    <x-badge status="Tidak Diketahui" />
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>