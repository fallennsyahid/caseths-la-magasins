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
                    <a href="{{ route('product.index') }}"><button type="button" class="sub-btn">Back</button></a>
                    <div class="form-container">
                        <h2>Create New Product</h2>

                        <form class="coquette-form" action="{{ route('product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <label for="product">Product</label>
                            <input type="text" id="product" name="product" placeholder="Enter product name"
                                required>

                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" placeholder="Enter product price"
                                required>

                            <label for="weight">Weight</label>
                            <input type="number" id="weight" name="weight"
                                placeholder="Enter product weight (gram)" required>

                            <label for="link">Link</label>
                            <textarea name="link" id="link" rows="5" placeholder="Enter product link" required></textarea>

                            <label for="picture">Picture</label>
                            <input type="file" id="picture" name="picture" required>

                            <label for="category">Category</label>
                            <select name="category" id="category" required>
                                <option value="-">Choose Type Product</option>
                                <option value="casing">Casing</option>
                                <option value="phonestrap">Phonestrap</option>
                                <option value="bundling">Bundling</option>
                            </select>

                            <div class="form-buttons">
                                <button type="submit" class="btn-submit" id="alertButton">Submit</button>
                                <button type="reset" class="btn-reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
