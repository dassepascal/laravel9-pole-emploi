<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a task') }}
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

        <form action="{{ route('postes.update', $poste->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Titre -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                    :value="old('title', $poste->title)" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-textarea class="block mt-1 w-full" id="description" name="description">{{ old('description',
                    $poste->description) }}</x-textarea>
            </div>
            {{-- Experience --}}
            <div class="mt-4">
                <x-label for="experience" :value="__('Experience')" />

                <x-input class="block mt-1 w-full"  name="experience" id="experience" type="text"
                :value="old('experience', $poste->experience)" required autofocus />

            </div>
            {{-- Diplome --}}
            <div class="mt-4">
                <x-label for="diplome" :value="__('Diplôme')" />
                <x-input class="block mt-1 w-full"  name="diplome" id="diplome" type="text"
                :value="old('diplome', $poste->diplome)" required autofocus />

            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>

    </x-posts-card>
</x-app-layout>
