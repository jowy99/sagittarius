@extends('crm.layout')

@section('main')
<div class="min-h-screen w-full space-y-12">
    <div class="p-2 md:flex md:items-center md:justify-center md:mt-8">
        <div class="w-full h-full rounded-lg py-8 bg-green-700 dark:bg-green-800 dark:border-green-700 md:w-9/12 md:h-9/12 md:rounded-lg md:p-12">
            <h1 class="capitalize font-bold text-green-400 dark:text-green_light-600 text-4xl text-center md:text-6xl">list projects</h1>
            <hr class="h-1 w-20 mx-auto my-4 bg-green-500 border-0">
            <table class="min-w-full divide-y divide-carbon-300 border border-carbon-600 p-4 md:p-0">
                <thead class="bg-green-600">
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm uppercase font-bold text-green_light-200 sm:pl-6 lg:pl-8">Title</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm uppercase font-bold text-green_light-200">Description</th>
                    <th scope="col" class="hidden md:block px-3 py-3.5 text-left text-sm uppercase font-bold text-green_light-200">File</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm uppercase font-bold text-green_light-200">Action</th>
                </tr>
                </thead>
                @forelse ($projs as $proj)
                <tbody class="divide-y divide-carbon-200 bg-green_light-600 dark:bg-green_light-700">
                <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-light-400 font-semibold sm:pl-6 lg:pl-8">{{ $proj->title }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-light-200">{{ $proj->description }}</td>
                    <td class="hidden md:block whitespace-nowrap px-3 py-4 text-sm text-light-200">{{ $proj->file }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm">
                        <div class="space-x-8 flex">
                            <a href="{{ route('crm.delete-proj', $proj->id) }}">
                                <x-css-trash class="w-6 h-6 text-red-500" />
                            </a>
                            <a href="{{ route('crm.edit-proj', $proj->id) }}">
                                <x-feathericon-edit class="h-6 w-6 text-yellow-500" />
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ __('Tabla vacía') }}
                    </td>
                </tr>
                </tbody>
                @endforelse
            </table>
            <div class="p-4 md:p-0">
                {{ $projs->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</div>
@endsection
