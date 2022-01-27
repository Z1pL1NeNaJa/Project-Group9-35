@include ('layouts/fontend/head')


<body>
    @include ('layouts/fontend/header')


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>หน้าหลัก/ชิ้นส่วนหมู</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <a href="{{ route('about') }}">
                            <li @if ($type == '') class="filter-active" @endif>ทั้งหมด</li>
                        </a>
                        @foreach ($categories as $category)
                            <a href="{{ route('about') }}?type={{ $category->category_id }}">
                                <li @if ($type == $category->category_id) class="filter-active" @endif>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach ($product as $products)
                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('admin/images/' . $products->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $products->name }}</h4>
                                <p>{{ $products->price }}</p>
                                <p>{{ $products->category->name }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Section -->

    @include ('layouts/fontend/footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/assetsfont/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('admin/assetsfont/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/assetsfont/js/main.js') }}"></script>

</body>

</html>
