<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @Lang('Candidature List')
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
                                <th class="px-2 py-2 text-xs text-gray-500">Titre du poste</th>
                                <th class="px-2 py-2 text-xs text-gray-500">lien</th>
                                <th class="px-2 py-2 text-xs text-gray-500">entreprise</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($candidatures as $candidature)
                            <tr class="whitespace-nowrap">
                                <td class="px-4 py-4">{{ $candidature->name }}</td>
                                <td class="px-4 py-4">{{ $candidature->lien }}</td>
                                <td class="px-4 py-4">{{ $candidature->enterprise }}</td>

                                <x-link-button href="{{ route('candidatures.show',$candidature->id) }}">
                                    @lang('Show')
                                </x-link-button>
                                <x-link-button href="{{ route('candidatures.edit',$candidature->id) }}">
                                    @lang('Edit')
                                </x-link-button>
                                <x-link-button
                                    onclick="event.preventDefault(); document.getElementById('destroy{{ $candidature->id }}').submit();">
                                    @lang('Delete')
                                </x-link-button>
                                <form id="destroy{{ $candidature->id }}" action="{{ route('candidatures.destroy',$candidature->id) }} }}"
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
