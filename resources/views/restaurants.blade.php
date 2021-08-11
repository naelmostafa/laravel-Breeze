<style>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col {
        margin: 10px;
    }

    img {
        width: 200px;
        height: 200px;
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

                <div class="row p-10">

                    <!--Card 1-->
                    <a href="{{ route('menu', ['restaurantName' => 'KFC']) }}">
                        <div class="col max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="p-6" src="img/kfc.png" alt="KFC">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">KFC</div>
                            </div>
                        </div>
                    </a>

                    <!--Card 2-->
                    <a href="{{ route('menu', ['restaurantName' => 'McDonalds']) }}">
                        <div class="col max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="p-6" src="img/mcdonalds.png" alt="McDonald's">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">McDonald's</div>
                            </div>
                        </div>
                    </a>

                    <!--Card 3-->
                    <a href="{{ route('menu', ['restaurantName' => 'Papa Johns']) }}">
                        <div class="col max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="p-6" src="img/papa-johns.png" alt="Papa John's">
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
