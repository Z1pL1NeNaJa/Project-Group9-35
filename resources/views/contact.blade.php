@include ('layouts/fontend/head')

<body>
  @include ('layouts/fontend/header')

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>“สนใจหมู สนใจเรา” ธวัชค้าหมู</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>หมู่ 4 ถ. ประชาราษฎร์ ต.สวนใหญ่อ.เมือง จ.นนทบุรี 11000 ตลาดเทศบาลนครนนทบุรี</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>Thawatpoke@hotmail.com</p>
                <p><br></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>084-906-8199</p>
                <p><br></p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <div class="info-box">
            <h3>QR Code</h3>
            <img src="{{asset('admin/images/qrcode.jpg')}}" width="280px" class="img-fluid" alt="">
            <p>Line ID: @Thawatpoke</p>
          </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>-->
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch align-items-center">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{asset('admin/assetsfont/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a target="_blank" href="https://www.facebook.com/thanakrit.khoonpeng.18/"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/_thisiskluy_/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>นาย ธนกฤษ ขุเพ็ง </h4>
              <span>Font-end</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="{{asset('admin/assetsfont/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a target="_blank" href="https://www.facebook.com/sirawit.foungfuloi"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/sirawit_ffl/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>ศิรวิชญ์ เฟื่องฟูลอย</h4>
              <span>Back-End</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="{{asset('admin/assetsfont/img/team/team-3.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a target="_blank" href="https://www.facebook.com/Intuch.Sukkerd"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/getintxch/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>อินทัช สุขเกิด</h4>
              <span>Tester</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  @include ('layouts/fontend/footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/assetsfont/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('admin/assetsfont/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/assetsfont/js/main.js')}}"></script>
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

</body>

</html>