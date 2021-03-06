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
                    @foreach ($orders->reverse() as &$order)
                        <!-- Cards Go Here -->
                        @if ($currUser['id'] == $order['user_id'])
                            <div class="col bg-white overflow-hidden shadow-lg sm:rounded-lg m-3 h-1/2 w-1/4">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6">
                                                <div>
                                                    <h1 class="font-semibold text-xl mb-8 font-bold">Order for
                                                        <br />
                                                        @foreach ($users as &$user)
                                                            @if ($user['id'] == $order['user_id'])
                                                                {{ $user['name'] }}
                                                            @break
                                                        @endif
                        @endforeach
                        </h1>
                        <p>Order no. {{ $order['id'] }}</p>
                        <br>
                        <table class="min-w-full divide-y">
                            <thead>
                                <tr>
                                    <th
                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Items
                                    </th>
                                    <th
                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sub-total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $price = 0
                                @endphp
                                @foreach ($orderItems as &$orderItem)
                                    @if ($orderItem['order_id'] == $order['id'])
                                        @foreach ($foodItems as &$foodItem)
                                            @if ($foodItem['id'] == $orderItem['item_id'])
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                        {{ $foodItem['name'] }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-500">
                                                        {{ $foodItem['price'] }}
                                                    </td>
                                                    @php
                                                        $price += $foodItem['price']
                                                    @endphp
                                            @break
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                    @endforeach
                    </tbody>
                    </table>
                    <hr>
                    
                        <table class="min-w-full divide-y mt-6 mb-6">
                            <tbody>
                                <tr>
                                    <td class="px-3 py-2 whitespace-wrap font-semibold">Price</td>
                                    <td class="px-3 py-2 whitespace-wrap text-sm text-right">
                                        {{ $price }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-2 whitespace-wrap font-semibold">Taxes (12%)</td>
                                    <td class="px-3 py-2 whitespace-wrap text-sm text-right">
                                        {{ ($price*12)/100 }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3 py-2 whitespace-wrap font-semibold">Total</td>
                                    <td class="px-3 py-2 whitespace-wrap text-sm text-right">
                                        {{ (($price*12)/100) + $price }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    
                    <button class="mt-6 float-right">
                        <a href="{{ route('RemoveOrder', ['id' => $order['id']]) }}"
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
    @endif
    @endforeach
    </div>
    </div>
    </div>
    </div>
</x-app-layout>
