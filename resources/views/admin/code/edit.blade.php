<x-admin-layout>

    <x-navbar-admin-layout>
        <x-marquee></x-marquee>
        <x-navbar-admin>
            <x-action-code></x-action-code>
        </x-navbar-admin>
    </x-navbar-admin-layout>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="body">
                    <a href="{{ route('code.index') }}"><button type="button" class="sub-btn">Back</button></a>
                    <div class="form-container">
                        <h2>Update Code</h2>

                        <form class="coquette-form" action="{{ route('code.update', $code->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label for="code">Code</label>
                            <input type="text" id="code" name="code" value="{{ $code->code }}">

                            <label for="discount_percentage">Discount(%)</label>
                            <input type="number" id="discount_percentage" name="discount_percentage"
                                value="{{ $code->discount_percentage }}">

                            <div class="form-buttons" style="margin-top: 1.2rem;">
                                <button type="submit" class="btn-submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
