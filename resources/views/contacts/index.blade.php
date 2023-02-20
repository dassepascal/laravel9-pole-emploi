<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @Lang('Contact List')
        </h2>

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

                                {{-- <th class="px-2 py-2 text-xs text-gray-500">@lang('Title')</th> --}}
                                <th class="px-2 py-2 text-xs text-gray-500">Nom </th>
                                {{-- <th class="px-2 py-2 text-xs text-gray-500">Nom de l'entreprise</th> --}}
                                {{-- <th class="px-2 py-2 text-xs text-gray-500">Description</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Expérience</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Diplôme</th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($contacts as $contact)
                            <tr class="whitespace-nowrap">
                                {{-- <td class="px-4 py-4 text-sm text-gray-500">{{ $contact->id }}</td> --}}
                                <td class="px-4 py-4">{{ $contact->name }}</td>

                                {{-- <td class="px-4 py-4">{{ $contact->description }}</td>
                                <td class="px-4 py-4">{{ $contact->experience }}</td>
                                <td class="px-4 py-4">{{ $contact->diplome }}</td> --}}
                                 <x-link-button href="{{ route('contacts.show',$contact->id) }}">
                                    @lang('Show')
                                </x-link-button>
                               {{-- <x-link-buttonhref="route('postes.edit',$contact->id)
                                    @lang('edit')
                                </x-link-button>
                                <x-link-button
                                    onclick="event.preventDefault(); document.getElementById('destroy{{ $contact->id }}').submit();">
                                    @lang('Delete')
                                </x-link-button>
                                <form id="destroy{{ $contact->id }}" action="{{ route('postes.destroy',$contact->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
