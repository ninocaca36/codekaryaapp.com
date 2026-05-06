<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Web Management Settings</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Manage general content and sections across the website.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="nk-block">
                        <form action="{{ route('web-management.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="card card-bordered mb-4">
                                <div class="card-inner">
                                    <h5 class="title mb-4">Portofolio: Header (Breadcrumbs)</h5>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_header_subtitle">Subtitle</label>
                                                <input type="text" class="form-control" name="portfolio_header_subtitle" value="{{ $settings['portfolio_header_subtitle'] ?? 'Showcase' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_header_title">Title</label>
                                                <input type="text" class="form-control" name="portfolio_header_title" value="{{ $settings['portfolio_header_title'] ?? 'Portofolio' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_header_bg">Background Image</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input" name="portfolio_header_bg" id="portfolio_header_bg">
                                                        <label class="form-file-label" for="portfolio_header_bg">Choose file</label>
                                                    </div>
                                                    @if(isset($settings['portfolio_header_bg']))
                                                        <div class="mt-2">
                                                            <img src="{{ asset($settings['portfolio_header_bg']) }}" alt="" style="width: 200px; border-radius: 4px;">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-bordered mb-4">
                                <div class="card-inner">
                                    <h5 class="title mb-4">Portofolio: Siapa Kami (About Us)</h5>
                                    <div class="row g-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_about_title">Title</label>
                                                <input type="text" class="form-control" name="portfolio_about_title" value="{{ $settings['portfolio_about_title'] ?? 'Siapa Kami' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_about_content1">Paragraph 1</label>
                                                <textarea class="form-control" name="portfolio_about_content1" rows="3">{{ $settings['portfolio_about_content1'] ?? 'Codekarya adalah wadah kreatif bagi para kreator digital untuk membagikan karya terbaik mereka kepada dunia.' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_about_content2">Paragraph 2</label>
                                                <textarea class="form-control" name="portfolio_about_content2" rows="3">{{ $settings['portfolio_about_content2'] ?? 'Dedikasi kami tercermin dalam setiap baris kode, setiap nada musik, dan setiap frame video.' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_about_image">Image</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input" name="portfolio_about_image" id="portfolio_about_image">
                                                        <label class="form-file-label" for="portfolio_about_image">Choose file</label>
                                                    </div>
                                                    @if(isset($settings['portfolio_about_image']))
                                                        <div class="mt-2">
                                                            <img src="{{ asset($settings['portfolio_about_image']) }}" alt="" style="width: 200px; border-radius: 4px;">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-bordered mb-4">
                                <div class="card-inner">
                                    <h5 class="title mb-4">Portofolio: Call To Action</h5>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_title1">Small Title</label>
                                                <input type="text" class="form-control" name="portfolio_cta_title1" value="{{ $settings['portfolio_cta_title1'] ?? 'Take the First Step to the' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_title2">Big Title</label>
                                                <input type="text" class="form-control" name="portfolio_cta_title2" value="{{ $settings['portfolio_cta_title2'] ?? 'Success of Your Company' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_text">Description</label>
                                                <textarea class="form-control" name="portfolio_cta_text" rows="2">{{ $settings['portfolio_cta_text'] ?? 'Eu labore dolor ad eu voluptate nisi pariatur cillum fugiat est amet elit esse amet pariatur.' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_btn_text">Button Text</label>
                                                <input type="text" class="form-control" name="portfolio_cta_btn_text" value="{{ $settings['portfolio_cta_btn_text'] ?? 'Make an Appointment' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_btn_link">Button Link</label>
                                                <input type="text" class="form-control" name="portfolio_cta_btn_link" value="{{ $settings['portfolio_cta_btn_link'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="portfolio_cta_bg">Background Image</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" class="form-file-input" name="portfolio_cta_bg" id="portfolio_cta_bg">
                                                        <label class="form-file-label" for="portfolio_cta_bg">Choose file</label>
                                                    </div>
                                                    @if(isset($settings['portfolio_cta_bg']))
                                                        <div class="mt-2">
                                                            <img src="{{ asset($settings['portfolio_cta_bg']) }}" alt="" style="width: 200px; border-radius: 4px;">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Save All Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
