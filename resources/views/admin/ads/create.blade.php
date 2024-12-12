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
                    <a href="{{ route('ads.index') }}"><button type="button" class="sub-btn">Back</button></a>
                    <div class="form-container">
                        <h2>Create New Ads</h2>

                        <form class="coquette-form" action="{{ route('ads.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <label for="ads">Ads</label>
                            <input type="text" id="ads" name="ads" required>

                            <label for="picture">Picture</label>
                            <input type="file" id="picture" name="picture" required>

                            <div class="form-buttons" style="margin-top: 1.2rem;">
                                <button type="submit" class="btn-submit">Submit</button>
                                <button type="reset" class="btn-reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
