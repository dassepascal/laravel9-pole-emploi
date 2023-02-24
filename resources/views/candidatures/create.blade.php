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

        <form action="{{ route('candidatures.store') }}" method="post">
            @csrf


            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- lien -->
            <div class="mt-4">
                <x-label for="lien" :value="__('Lien')" />

                <x-input id="lien" class="block mt-1 w-full" type="text" name="lien" :value="old('lien')"
                    required autofocus />
            </div>
             {{-- Source --}}
             <label for="diplome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                an option</label>
            <select name="source_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a source</option>
                @foreach ($sources as $source )
                <option value="{{ $source->id }}">{{ $source->label_source }}</option>
                @endforeach
            </select>
            {{-- Enterprise --}}
            <div class="mt-4">
                <x-label for="enterprise" :value="__('Enterprise')" />

                <x-input class="block mt-1 w-full" name="enterprise" id="znterprise" type="text" :value="old('enterprise')" required
                    autofocus />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>

    </x-posts-card>
</x-app-layout>
