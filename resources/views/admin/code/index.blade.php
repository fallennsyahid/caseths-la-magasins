<x-admin-layout>

    <x-navbar-admin-layout>
        <x-marquee></x-marquee>
        <x-navbar-admin>
            <x-action-code></x-action-code>
        </x-navbar-admin>
    </x-navbar-admin-layout>

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-center align-items-md-center flex-column flex-md-row pt-2 pb-2">
                <div>
                    <h3 class="fw-bold mb-2">Code</h3>
                    <h6 class="op-7 mb-1">All Data Code</h6>
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
                                        <th>Code</th>
                                        <th style="text-align: center;">Discount(%)</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($codes as $index => $row)
                                        <tr>
                                            <td style="text-align: center;">{{ $index + 1 }}</td>
                                            <td>{{ $row->code }}</td>
                                            <td style="text-align: center;">{{ $row->discount_percentage }}</td>
                                            <td>
                                                <a href="{{ route('code.edit', $row->id) }}" class="sub-btn">Update</a>
                                            </td>
                                            <td>
                                                <button type="button" class="delete-btn"
                                                    data-id="{{ $row->id }}">Delete</button>
                                                <form id="delete-form-{{ $row->id }}"
                                                    action="{{ route('code.destroy', $row->id) }}" method="POST"
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
