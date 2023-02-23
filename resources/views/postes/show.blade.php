<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a poste')
        </h2>

    </x-slot>

    <x-posts-card>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Title')</h3>
        <p>{{ $poste->title }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Description')</h3>
        <p>{{ $poste->description }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Experience')</h3>
        <p>{{ $poste->experience->label_experience}}</p>


        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Diplôme')</h3>

        <p>{{ $poste->diplome->label_diplome }}</p>
        {{-- enterprise --}}
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Enterprise')</h3>
        <a href="{{ route('enterprises.show',$poste->enterprise->id) }}">{{ $poste->enterprise->name }}</a>

        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{ $poste->created_at->format('d/m/Y') }}</p>
        @if($poste->created_at != $poste->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{ $poste->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-posts-card>
</x-app-layout>
