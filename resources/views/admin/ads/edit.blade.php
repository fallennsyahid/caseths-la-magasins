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
                        <h2>Update Ads</h2>

                        <form class="coquette-form" action="{{ route('ads.update', $ad->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label for="ads">Ads</label>
                            <input type="text" id="ads" name="ads" value="{{ $ad->ads }}">

                            <label for="picture">Picture</label>
                            <input type="file" id="picture" name="picture">
                            <img src="{{ asset('storage/' . $ad->picture) }}" alt="{{ $ad->picture }}" height="50px">
                            <h6>Current: {{ $ad->picture }}</h6>

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
