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

        <form action="{{ route('contacts.store') }}" method="post">
            @csrf


            <!-- name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <!-- firstName -->
            <div class="mt-4">
                <x-label for="firstName" :value="__('FirstName')" />
                <x-input class="block mt-1 w-full"  type="text" name="firstName" :value="old('firstName')" required autofocus />

            </div>
             <!-- Phone -->
             <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />
                <x-input class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
              <!--email -->
              <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>
                <!--jodTitle -->
                <div class="mt-4">
                    <x-label for="jobTitle" :value="__('JobTitle')" />
                    <x-input class="block mt-1 w-full" type="text" name="jobTitle" :value="old('jobTitle')" required autofocus />
                </div>

            {{-- button --}}
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-posts-card>
</x-app-layout>
