<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Diamond Store</h3>
                        <div class="nk-block-des text-soft">
                            <p>Beli Diamond untuk mendukung kreator favorit Anda.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="bg-primary p-2 px-3 rounded text-white fw-bold">
                            <em class="icon ni ni-diamond"></em> Saldo: {{ Auth::user()->diamonds }} Diamond
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-block">
                @if(session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="row g-gs">
                    @foreach($packages as $package)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-bordered h-100 text-center">
                            <div class="card-inner">
                                <div class="mb-3">
                                    <em class="icon ni {{ $package['icon'] }} text-primary" style="font-size: 48px;"></em>
                                </div>
                                <h4 class="title">{{ $package['diamonds'] }} Diamond</h4>
                                <div class="h5 text-soft mb-4">Rp {{ number_format($package['price'], 0, ',', '.') }}</div>
                                <form action="{{ route('store.buy') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="diamonds" value="{{ $package['diamonds'] }}">
                                    <button type="submit" class="btn btn-primary btn-block">Beli Sekarang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="nk-block mt-5">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <h5 class="title">Apa itu Diamond?</h5>
                        <p>Diamond adalah mata uang digital di Codekarya App yang digunakan untuk memberikan apresiasi atau "Sawer" kepada kreator atas karya-karya mereka. Dengan menyawer, Anda membantu kreator untuk terus berkarya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
