<x-admin-layout>

    <x-navbar-admin-layout>
        <x-marquee></x-marquee>
        <x-navbar-admin>
            <x-action-product></x-action-product>
        </x-navbar-admin>
    </x-navbar-admin-layout>

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-center align-items-md-center flex-column flex-md-row pt-2 pb-2">
                <div>
                    <h3 class="fw-bold mb-2">Product</h3>
                    <h6 class="op-7 mb-1">All Data Product</h6>
                </div>
            </div>
            <div class="row">
                <div class="fonts">
                    <div class="main-table">
                        <div class="table-container">
                            <table class="coquette-table" id="myTable">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Picture</th>
                                        <th>Link</th>
                                        <th>Weight</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $index => $row)
                                        <tr>
                                            <td style="text-align: center;">{{ $index + 1 }}</td>
                                            <td>{{ $row->product }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $row->picture) }}"
                                                    alt="{{ $row->picture }}" height="100">
                                            </td>
                                            <td><a href="{{ $row->link }}">{{ $row->link }}</a></td>
                                            <td>{{ $row->weight }}</td>
                                            <td>{{ $row->category }}</td>
                                            <td>
                                                <a href="{{ route('product.edit', $row->id) }}"
                                                    class="sub-btn">Update</a>
                                            </td>
                                            <td>
                                                <button type="button" class="delete-btn"
                                                    data-id="{{ $row->id }}">Delete</button>
                                                <form id="delete-form-{{ $row->id }}"
                                                    action="{{ route('product.destroy', $row->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
    </div>

</x-admin-layout>
