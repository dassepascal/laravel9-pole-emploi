<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @Lang('Tasks List')
        </h2> --}}
        <h2> Poste</h2>
    </x-slot>
    <div class="flex justify-center mx-auto">
        @if (session()->has('message'))
        <div class="mt-3 mb-4 list-disc list-inside text-sm text-red-600">
            {{ session('message') }}
        </div>
        @endif
      </div>
    <div class="container flex justify-center mx-auto">
          <!-- Message  -->


        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow pt-6">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>

<<<<<<< HEAD
                                {{-- <th class="px-2 py-2 text-xs text-gray-500">@lang('Title')</th> --}}
=======
>>>>>>> code4
                                <th class="px-2 py-2 text-xs text-gray-500">Id</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Nom du poste</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Nom de l'entreprise</th>
                                {{-- <th class="px-2 py-2 text-xs text-gray-500">Description</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Expérience</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Diplôme</th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($postes as $poste)
<<<<<<< HEAD
                           {{-- @dump($poste->enterprise->name) --}}
=======

>>>>>>> code4
                            <tr class="whitespace-nowrap">
                                <td class="px-4 py-4 text-sm text-gray-500">{{ $poste->id }}</td>
                                <td class="px-4 py-4">{{ $poste->title }}</td>
                                <td class="px-4 py-4">{{ $poste->enterprise->name }}</td>

                                {{-- <td class="px-4 py-4">{{ $poste->entreprise->name }}</td>  --}}

                                <td class="px-4 py-4">{{ $poste->enterprise->name }}</td>
                              
                                <x-link-button href="{{ route('postes.show',$poste->id) }}">
                                    @lang('Show')
                                </x-link-button>
                                <x-link-button href="{{ route('postes.edit',$poste->id) }}">
                                    @lang('edit')
                                </x-link-button>
                                <x-link-button
                                    onclick="event.preventDefault(); document.getElementById('destroy{{ $poste->id }}').submit();">
                                    @lang('Delete')
                                </x-link-button>
                                <form id="destroy{{ $poste->id }}" action="{{ route('postes.destroy',$poste->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
