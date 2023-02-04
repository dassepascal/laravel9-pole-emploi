<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a task')
        </h2> --}}
        <h2>enterprise</h2>
    </x-slot>

    <x-posts-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Name')</h3>
        <p>{{$enterprise->name }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Activity')</h3>
        <p>{{$enterprise->activity }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Phone')</h3>
        <p>{{$enterprise->phone }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Address')</h3>
        <p>{{$enterprise->address }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Site')</h3>
        <p>{{$enterprise->site }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{$enterprise->created_at->format('d/m/Y') }}</p>
        @if($enterprise->created_at !=$enterprise->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{$enterprise->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-posts-card>
</x-app-layout>
