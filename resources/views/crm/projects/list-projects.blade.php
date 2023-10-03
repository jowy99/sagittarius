@extends('crm.layout')

@section('main')
<div class="m-8 px-4 sm:px-6 lg:px-8">
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-6 lg:pl-8">Title</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Description</th>
                    </tr>
                    </thead>

                    @forelse ($projs as $proj)
                    <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-carbon-800 sm:pl-6 lg:pl-8">{{ $proj->title }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-carbon-800">{{ $proj->description }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-carbon-800">
                            <div>
                                <a href="{{ route('crm.delete-proj', $proj->id) }}" class="text-red-500">
                                    {{ __('Delete') }}
                                </a>
                                <a href="{{ route('crm.edit-proj', $proj->id) }}" class="text-yellow-500">
                                    {{ __('Edit') }}
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- More people... -->
                    @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ __('Tabla vacía') }}
                        </td>
                    </tr>

                    </tbody>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
