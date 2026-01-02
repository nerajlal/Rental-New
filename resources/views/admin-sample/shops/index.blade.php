<x-admin-layout>
    @section('header')
        {{ __('Manage Shops') }}
    @endsection

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                        <tr>
                            <th class="px-6 py-3">Shop Name</th>
                            <th class="px-6 py-3">Owner</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Created At</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($shops as $shop)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $shop->name }}
                                <div class="text-xs text-gray-400">{{ $shop->slug }}</div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $shop->owner->name }}
                                <div class="text-xs text-gray-400">{{ $shop->owner->email }}</div>
                            </td>
                            <td class="px-6 py-4">
                                @if($shop->status === 'active')
                                    <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium ring-1 ring-inset ring-green-600/20 text-green-700">Active</span>
                                @elseif($shop->status === 'pending')
                                    <span class="inline-flex items-center rounded-full bg-yellow-50 px-2 py-1 text-xs font-medium ring-1 ring-inset ring-yellow-600/20 text-yellow-800">Pending</span>
                                @else
                                    <span class="inline-flex items-center rounded-full bg-red-50 px-2 py-1 text-xs font-medium ring-1 ring-inset ring-red-600/20 text-red-700">Suspended</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $shop->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                @if($shop->status === 'pending')
                                <form action="{{ route('admin.shops.approve', $shop) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="font-medium text-blue-600 hover:underline">Approve</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $shops->links() }}
            </div>

        </div>
    </div>
</x-admin-layout>
