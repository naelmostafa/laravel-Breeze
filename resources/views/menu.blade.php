<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }} - {{ $restaurantName }}
        </h2>
    </x-slot>
    <!--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Menu items
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="py-12">
        <div class="w-4xl container mx-auto sm:px-6 lg:px-8 flex flex-wrap">

            <!-- Menu Items Go Here -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-2/3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Description
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Price
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <!-- Item list will go here -->
                                            @for ($i = 0; $i < count($foodItems); $i++)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <p>{{ $foodItems[$i]['name'] }}</p>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                        <p>{{ $foodItems[$i]['description'] }}</p>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <p>{{ $foodItems[$i]['price'] }}</p>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                        <a href="{{ route('FoodRemoveFromInvoice', ['id' => $foodItems[$i]->id]) }}"
                                                            class="text-yellow-600 hover:text-yellow-900">
                                                            <i style="font-size:24px" class="fa">&#xf056;</i>
                                                        </a>

                                                        <a href="{{ route('FoodAddToInvoice', ['id' => $foodItems[$i]->id]) }}"
                                                            class="text-yellow-600 hover:text-yellow-900">
                                                            <i style="font-size:24px" class="fa">&#xf055;</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Goes here -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3 h-1/2 w-1/4">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div>
                                    <h2 class="font-semibold text-lg mb-8">Your Order</h2>
                                    <table class="min-w-full divide-y">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Quantity
                                                </th>
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
                                            <tr>
                                                @if (empty($invoice->Items))
                                                @else
                                                    @foreach ($invoice->Items as &$item)
                                                        @if ($item['qty'] > 0)
                                                            <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                                {{ $items['qty'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                                {{ $items['item']['name'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                                {{ $items['price'] }}
                                                            </td>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <br>
                                    <p>Taxes</p>
                                    <p style="text-align: right">???</p>

                                    <p>Total</p>
                                    <p style="text-align: right">???</p>
                                    <br>
                                    <button class="float-right">
                                        <a href="/invoice-to-order"
                                            class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            Place Order
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
