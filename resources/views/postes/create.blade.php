<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a poste') }}
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

        <form action="{{ route('postes.store') }}" method="post">
            @csrf


            <!-- Titre -->
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                    autofocus />
            </div>
            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />
                <x-textarea class="block mt-1 w-full" id="description" name="description">{{ old('description') }}
                </x-textarea>
            </div>
            {{-- Experience --}}
            <label for="experience" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                an option</label>
            <select name="experience"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a experience</option>
                @foreach ($experiences as $experience )

                <option value="{{ $experience->id }}">{{ $experience->experience }}</option>
                @endforeach
            </select>

            {{-- Diplome --}}
            <label for="diplome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                an option</label>
            <select name="diplome"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a diplome</option>
                @foreach ($diplomes as $diplome )
                <option value="{{ $diplome->id }}">{{ $diplome->diplome }}</option>
                @endforeach
            </select>
            {{-- enterprise --}}
            <label for="enterprise" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                an option</label>
            <select name="enterprise_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a enterprise</option>
                @foreach ($enterprises as $enterprise )
                <option value="{{ $enterprise->id }}">{{ $enterprise->name }}</option>
                @endforeach
            </select>
            {{-- button --}}
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-posts-card>
</x-app-layout>
