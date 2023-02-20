<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a contact')
        </h2>

    </x-slot>

    <x-posts-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Name')</h3>
        <p>{{$contact->name }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('firstName')</h3>
        <p>{{$contact->firstName }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Phone')</h3>
        <p>{{$contact->phone }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Email')</h3>
        <p>{{$contact->email }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('JobTitle')</h3>
        <p>{{$contact->jobTitle}}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{$contact->created_at->format('d/m/Y') }}</p>
        @if($contact->created_at !=$contact->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{$contact->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-posts-card>
</x-app-layout>
