<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a candidature')
        </h2>

    </x-slot>

    <x-posts-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Name')</h3>
        <p>{{$candidature->name }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Lien')</h3>
        <p>{{$candidature->lien }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Source')</h3>
        <p>{{$candidature->source->label_source }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Enterprise')</h3>
        <p>{{$candidature->enterprise }}</p>


        @if($candidature->created_at !=$candidature->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{$candidature->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-posts-card>
</x-app-layout>
