<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
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
        <h2 class="font-semibold text-lg text-gray-800 leading-tight inline-block">
            {{ __('Dashboard') }}
        </h2>
        <button class="float-right align-top inline-block">
            <a href="http://127.0.0.1:8000/restaurants"
                class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Order Now!
            </a>
        </button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 font-bold text-lg">
                    Your Orders
                </div>

                <div class="row p-10">
                    @for ($i = 0; $i < 3; $i++)
                        <!-- Cards Go Here -->
                        <a href="#">
                            <div class="col bg-white overflow-hidden shadow-lg sm:rounded-lg m-3 h-1/2 w-1/4">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                <div>
                                                    <h1 class="font-semibold text-lg mb-8">Your Order from
                                                        restaurantName
                                                    </h1>

                                                    <h2>orderNo</h2>
                                                    <table class="min-w-full divide-y">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                    Item
                                                                </th>
                                                                <th
                                                                    class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                    Sub-total
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @for ($j = 0; $j < 4; $j++)
                                                                <tr>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                                        Lorem Ipsum
                                                                    </td>
                                                                    <td
                                                                        class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                                        $20
                                                                    </td>
                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                    <hr>
                                                    <br>
                                                    <p>Taxes</p>
                                                    <p style="text-align: right">???</p>
                                                    <br>
                                                    <p>Total</p>
                                                    <p style="text-align: right">???</p>
                                                    <br>
                                                    <button class="float-right">
                                                        <a href="#"
                                                            class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                            Delete Order
                                                        </a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
