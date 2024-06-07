<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <!-- Categories Table -->
                    <div class="my-4">
                        <h2 class="text-2xl font-bold mb-2">Categories</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $category->id }}</td>
                                        <td class="border px-4 py-2">{{ $category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Subcategories Table -->
                    <div class="my-4">
                        <h2 class="text-2xl font-bold mb-2">Subcategories</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $subcategory->id }}</td>
                                        <td class="border px-4 py-2">{{ $subcategory->name }}</td>
                                        <td class="border px-4 py-2">{{ $subcategory->category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Products Table -->
                    <div class="my-4">
                        <h2 class="text-2xl font-bold mb-2">Products</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Subcategory</th>
                                    <th class="px-4 py-2">Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $product->id }}</td>
                                        <td class="border px-4 py-2">{{ $product->name }}</td>
                                        <td class="border px-4 py-2">{{ $product->subcategory->name }}</td>
                                        <td class="border px-4 py-2">{{ $product->subcategory->category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Orders Table -->
                    <div class="my-4">
                        <h2 class="text-2xl font-bold mb-2">Orders</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Customer</th>
                                    <th class="px-4 py-2">Seller</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $order->id }}</td>
                                        <td class="border px-4 py-2">{{ $order->customer->name }}</td>
                                        <td class="border px-4 py-2">{{ $order->seller->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Orders with Products Table -->
                    <div class="my-4">
                        <h2 class="text-2xl font-bold mb-2">Orders with Products</h2>
                        <table class="w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Products</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ordersWithProducts as $order)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $order->id }}</td>
                                        <td class="border px-4 py-2">
                                            @foreach ($order->products as $product)
                                                <p>{{ $product->name }} ({{ $product->pivot->quantity }})</p>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>