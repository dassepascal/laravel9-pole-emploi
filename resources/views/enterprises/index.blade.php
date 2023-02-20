<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @Lang('Enterprise List')
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
                                <th class="px-2 py-2 text-xs text-gray-500">Nom de l'entreprise</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Activité</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($enterprises as $enterprise)
                            <tr class="whitespace-nowrap">
                                <td class="px-4 py-4">{{ $enterprise->name }}</td>
                                <td class="px-4 py-4">{{ $enterprise->activity }}</td>

                                <x-link-button href="{{ route('enterprises.show',$enterprise->id) }}">
                                    @lang('Show')
                                </x-link-button>
                                <x-link-button href="{{ route('enterprises.edit',$enterprise->id) }}">
                                    @lang('Edit')
                                </x-link-button>
                                <x-link-button
                                    onclick="event.preventDefault(); document.getElementById('destroy{{ $enterprise->id }}').submit();">
                                    @lang('Delete')
                                </x-link-button>
                                <form id="destroy{{ $enterprise->id }}" action="{{ route('enterprises.destroy',$enterprise->id) }}"
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
