<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a contact') }}
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

        <form action="{{ route('contacts.update', $contact->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('title', $contact->name)" required autofocus />
            </div>

            <!-- FirsName -->
            <div class="mt-4">
                <x-label for="firstName" :value="__('FirstName')" />

                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName"
                    :value="old('firstName', $contact->firstName)" required autofocus />

            </div>
            {{-- Phone --}}
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input class="block mt-1 w-full" name="phone" id="phone" type="text"
                    :value="old('phone', $contact->phone)" required autofocus />

            </div>
            {{-- email --}}
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input class="block mt-1 w-full" name="email" id="email" type="text"
                    :value="old('email', $contact->email)" required autofocus />

            </div>
            {{-- jobTitle --}}
            <div class="mt-4">
                <x-label for="site" :value="__('jobtitle')" />
                <x-input class="block mt-1 w-full" name="jobTitle" id="jobTitle" type="text"
                    :value="old('jobTitle', $contact->jobTitle)" required autofocus />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>

    </x-posts-card>
</x-app-layout>
