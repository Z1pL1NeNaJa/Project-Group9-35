@include ('layouts/fontend/head')

<body>
  @include ('layouts/fontend/header')
<!-- ======= Tabs Section ======= -->
<section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>ธวัชค้าหมู (Thawat pork shop)</h3>
                <p class="fst-italic">
                ธวัชค้าหมู ผู้ให้บริการด้านเนื้อหมูและสินค้าแปรรูป 
                </p>
                <p>
                ธวัชค้าหมู เราเป็นร้านค้าขายสินค้าหมูแปรรูปจากเนื้อหมู
                ได้แก่ หมูหมัก หมูนุ่ม หมูปรุงรสหรือหมูเด้ง กุนเชียงหมู หมูยอ แคปหมู ฯลฯ
                มากกว่านั้น ธวัชค้าหม ยินดีให้คำแนะนำเรื่องชิ้นส่วนหมูกับลูกค้าทุกท่านเสมอ จากประสบการณ์กว่า 10 ปี
                คุณจึงมั่นใจได้กับเนื้อหมูของเรา
                เนื้อหมูคุณภาพ สดใหม่ ปลอดสารเร่งเนื้อแดง ผลิตใหม่ทุกวัน
                เราเป็นมากกว่าผู้จัดจำหน่าย เพราะเราคือผู้ให้บริการด้านเนื้อหมู เพื่อตอบสนองความต้องการของลูกค้าที่หลากหลาย

                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('admin/assetsfont/img/shopbg.jpg')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->

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


</body>

</html>