@include ('layouts/fontend/head')

<body>
  @include ('layouts/fontend/header')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>สั่งซื้อเนื้อหมูที่ ธวัชค้าหมู</h1>
          <h2>สินค้าพร้อมขายทุกวัน ทั้งของสดเเละสินค้าแช่แข็ง</h2>

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>“คุณภาพต้องมาที่ 1”</h3>
              <p>
                ที่พิชชามีท เราคัดหมูจากฟาร์มมาตรฐานสูง ที่ปลอดสารเร่งเนื้อแดง คุณภาพเนื้อหมูจึงโดดเด่น เก็บได้นานและตัดแต่งได้ง่ายตามความต้องการของธุรกิจคุณ
              </p>
              <a href="{{asset('services')}}" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <h4>“สะอาดสุด ทุกขั้นตอน”</h4>
                  <p>ที่พิชชามีท เราใส่ใจในทุกรายละเอียดการผลิตจนถึงส่งมอบถึงมือคุณ ด้วยมาตรฐานความสะอาดที่ได้รับการรับรองในระดับสากลทั้ง GMP & HACCP</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <h4>“ผลิตสดใหม่ทุกวัน”</h4>
                  <p>ที่พิชชามีท เนื้อหมูสีชมพูธรรมชาติเกิดจากการผลิตสดใหม่ทุกวัน และการเก็บรักษาสินค้าตามมาตรฐาน GMP & HACCP ในทุกขั้นตอน</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabss">
      <div class="container" data-aos="fade-up">

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>เนื้อหมู</h3>
                <p>
                  เป็นเนื้อที่มาจากหมู สามารถนำมาทำอาหาร อย่างเช่น รมควัน นำมาทำอย่าง แฮม เบคอน Prosciutto เนื้อหมูถือเป็นเนื้อที่นิยมบริโภคมากที่สุด นอกจากนี้ยังนำมาทำอาหารอย่างเช่น ไส้กรอก เนื้อหมู เป็นต้น

                </p>
                <h3>ประวัติเนื้อหมู</h3>
                <p>
                  ชาติแรกที่มีการนำหมูมาเลี้ยงแบบปศุสัตว์คือ ประเทศจีน ซึ่งเริ่มกันมาเกือบ 5,000 ปีก่อน ส่วนในฝั่งยุโรปนั้นมีบันทึกในประเทศอังกฤษว่ามีการเลี้ยงหมูเมื่อ 800 ปีก่อนคริสตกาล ก่อนจะมีการแพร่ไปเขตอเมริกาโดยโคลัมบัส เมื่อถึงช่วง ค.ศ. 1539 (ปีที่พบดินแดนใหม่) ไปสู่รัฐฟอริดา โดยชาวสเปนนำสุกรไปแพร่หลาย

                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('admin/assetsfont/img/datapork.jfif')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ข่าวสารและโปรโมชั่น</h2>
          <p>ติดตามข่าวสาร กิจกรรมดีดี และบทความที่น่าสนใจ</p>
        </div>

        <div class="row">
          @foreach ($Homepages as $Homepagep)
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>{{ $Homepagep->information }}</h3>
              <img src="{{ asset('admin/images/' . $Homepagep->image) }}" width="350px" class="img-fluid" alt="">
              <li><br>{{ $Homepagep->endpromotion }}</li>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Pricing Section -->


  </main><!-- End #main -->

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