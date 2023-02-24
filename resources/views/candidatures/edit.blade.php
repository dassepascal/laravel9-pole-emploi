<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a candidature') }}
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

        <form action="{{ route('candidatures.update', $candidature->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name', $candidature->name)" required autofocus />
            </div>

            <!-- Lien -->
            <div class="mt-4">
                <x-label for="lien" :value="__('Lien')" />

                <x-input id="lien" class="block mt-1 w-full" type="text" name="lien"
                    :value="old('lien', $candidature->lien)" required autofocus />

            </div>
            {{-- Enterprise --}}
            <div class="mt-4">
                <x-label for="enterprise" :value="__('Enterprise')" />

                <x-input class="block mt-1 w-full" name="enterprise" id="enterprise" type="text"
                    :value="old('enterprise', $candidature->enterprise)" required autofocus />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>

    </x-posts-card>
</x-app-layout>
