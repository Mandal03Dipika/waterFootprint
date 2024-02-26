<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                        <a href="{{route('water')}}" class="btn btn-success">Start</a>
                        <a href="{{route('question.create')}}" class="btn btn-success">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>