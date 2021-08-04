<style>
    .row {
        display: flex;
        /* equal height of the children */
    }

    .col {
        flex: 1;
        /* additionally, equal width */
        padding: 1em;
        border: solid;
    }

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Restaurants
                </div>

                <div class="row" class="p-10" style="margin: 30px;">

                    <!--Card 1-->
                    <a href="{{ route('menu', ['restaurantName' => 'KFC']) }}">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg" class="col" style="margin: 15px;">
                            <img class="w-full" src="img/kfc.png" alt="KFC" width="200px" height="200px">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">KFC</div>
                            </div>
                        </div>
                    </a>

                    <!--Card 2-->
                    <a href="{{ route('menu', ['restaurantName' => 'McDonalds']) }}">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg" class="col" style="margin: 15px;">
                            <img class="w-full" src="img/mcdonalds.png" alt="McDonald's" width="200px" height="200px">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">McDonald's</div>
                            </div>
                        </div>
                    </a>

                    <!--Card 3-->
                    <a href="{{ route('menu', ['restaurantName' => 'Papa Johns']) }}">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg" class="col" style="margin: 15px;">
                            <img class="w-full" src="img/papa-johns.png" alt="Papa John's" width="200px" height="200px">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Papa John's</div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
