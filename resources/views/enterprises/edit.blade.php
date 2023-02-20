<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a enterprise') }}
        </h2>
    </x-slot>

    <x-posts-card>

        <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- Message de réussite -->
        @if (session()->has('message'))
        <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
            {{ session('message') }}
        </div>
        @endif

        <form action="{{ route('enterprises.update', $enterprise->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('title', $enterprise->name)" required autofocus />
            </div>

            <!-- Activity -->
            <div class="mt-4">
                <x-label for="activity" :value="__('Activity')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="activity"
                    :value="old('title', $enterprise->activity)" required autofocus />

            </div>
            {{-- Phone --}}
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input class="block mt-1 w-full" name="phone" id="phone" type="text"
                    :value="old('phone', $enterprise->phone)" required autofocus />

            </div>
            {{-- Address --}}
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />
                <x-input class="block mt-1 w-full" name="address" id="address" type="text"
                    :value="old('address', $enterprise->address)" required autofocus />

            </div>
            {{-- Site --}}
            <div class="mt-4">
                <x-label for="site" :value="__('Site')" />
                <x-input class="block mt-1 w-full" name="site" id="site" type="text"
                    :value="old('site', $enterprise->site)" required autofocus />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>

    </x-posts-card>
</x-app-layout>
