<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CartItems') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mt-8 flow-root overflow-hidden">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <table class="w-full text-left">
                                <thead class="bg-white">
                                <tr>
                                    <th scope="col" class="relative isolate py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">編號 </th>
                                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">使用者編號</th>
                                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 md:table-cell">商品編號</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">創建時間</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">更新時間</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart_items as $cart_item)
                                    <tr>
                                        <td class="relative py-4 pr-3 text-sm font-medium text-gray-900">{{ $cart_item->id }}</td>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ $cart_item->user_id }}</td>
                                        <td class="hidden px-3 py-4 text-sm text-gray-500 md:table-cell">{{ $cart_item->product_id }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500">{{ $cart_item->created_at }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500">{{ $cart_item->updated_at }}</td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
