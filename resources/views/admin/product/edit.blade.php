<x-admin-layout>

    <x-navbar-admin-layout>
        <x-marquee></x-marquee>
        <x-navbar-admin>
            <x-action-product></x-action-product>
        </x-navbar-admin>
    </x-navbar-admin-layout>

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="body">
                    <a href="{{ route('product.index') }}"><button type="button" class="sub-btn">Back</button>
                    </a>
                    <div class="form-container">
                        <h2>Create New Product</h2>

                        <form class="coquette-form" action="{{ route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label for="product">Product</label>
                            <input type="text" id="product" name="product" value="{{ $product->product }}">

                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" value="{{ $product->price }}">

                            <label for="weight">Weight</label>
                            <input type="number" id="weight" name="weight" value="{{ $product->weight }}">

                            <label for="link">Link</label>
                            <textarea name="link" id="link" rows="5">{{ $product->link }}</textarea>

                            <label for="picture">Picture</label>
                            <input type="file" id="picture" name="picture">
                            <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->picture }}"
                                height="100px">
                            <h6>Current: {{ $product->picture }}</h6>

                            <label for="category">Category</label>
                            <select name="category" id="category">
                                <option value="-"
                                    {{ old('category', $product->category) == '-' ? 'selected' : '' }}>
                                    Choose Product Type</option>
                                <option value="casing"
                                    {{ old('category', $product->category) == 'casing' ? 'selected' : '' }}>
                                    Casing</option>
                                <option value="phonestrap"
                                    {{ old('category', $product->category) == 'phonestrap' ? 'selected' : '' }}>
                                    Phonestrap</option>
                                <option value="bundling"
                                    {{ old('category', $product->category) == 'bundling' ? 'selected' : '' }}>
                                    Bundling</option>
                            </select>

                            <div class="form-buttons">
                                <button type="submit" class="btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
