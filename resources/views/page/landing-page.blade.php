@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About</h2>
          <p>Pada saat ini Universitas Pakuan sedang melakukan pembukaan pendaftaran untuk mahasiswa baru, Adapun
            program yang tersedia di Universitas Pakuan seperti dibawah ini.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Program Doktor
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Manajemen Pendidikan</li>
                <li><i class="bi bi-check-circle-fill"></i> Ilmu Manajemen</li>
              </ul>
              <p class="fst-italic mt-3">
                Program Magister
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Administrasi Pendidikan</li>
                <li><i class="bi bi-check-circle-fill"></i>Manajemen Lingkungan</li>
                <li><i class="bi bi-check-circle-fill"></i>Ilmu Hukum</li>
                <li><i class="bi bi-check-circle-fill"></i>Manajemen</li>
                <li><i class="bi bi-check-circle-fill"></i>Pendidikan Ilmu Pengetahuan Alam</li>
                <li><i class="bi bi-check-circle-fill"></i>Perencanaan Wilayah dan Kota</li>
                <li><i class="bi bi-check-circle-fill"></i>Pendidikan Dasar</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Program Sarjana
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Hukum</li>
                <li><i class="bi bi-check-circle-fill"></i>Keguruan dan Ilmu Pendidikan</li>
                <li><i class="bi bi-check-circle-fill"></i>Ilmu Sosial dan Ilmu Budaya</li>
                <li><i class="bi bi-check-circle-fill"></i>Teknik</li>
                <li><i class="bi bi-check-circle-fill"></i>Matematika dan Ilmu Pengetahuan Alam</li>
              </ul>

              <p class="fst-italic mt-3">
                Program Vokasi
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>Akuntansi</li>
                <li><i class="bi bi-check-circle-fill"></i>Manajemen Pajak</li>
                <li><i class="bi bi-check-circle-fill"></i>Perbankan dan Keuangan</li>
                <li><i class="bi bi-check-circle-fill"></i>Teknik Komputer</li>
                <li><i class="bi bi-check-circle-fill"></i>Sistem Informasi</li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets')}}/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{asset('assets')}}/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="143" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Rank</strong> Versi UNIRANK</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="434" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Dosen Tetap</strong> Yang Kompeten</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="17301" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Mahasiswa Aktif</strong></p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Visi & Misi Universitas Pakuan</h2>
        </div>


        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
          <div class="container text-center" data-aos="zoom-out">
            <a href="https://www.unpak.ac.id/images/visi-misi-unpak.webp" class="glightbox play-btn"></a>
            <h3>Click Here</h3>
            <p> Untuk Melihat Visi Misi Universitas Pakuan.</p>
          </div>
        </section><!-- End Call To Action Section -->

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fasilitas</h2>
          <p>Fasilitas yang ada dilingkungan Universitas Pakuan</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Ruang Kelas</a></h4>
                  <p>Tampilan ruang kelas yang digunakan mahasiswa</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Aula Rapat</a></h4>
                  <p>Tempat jika ada rapat internal</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="{{asset('assets')}}/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Perpustakaan</a></h4>
                  <p>Tampak depan perpustakaan</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Perpustakaan</a></h4>
                  <p>Tampilan meja baca mahasiswa</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Parkiran</a></h4>
                  <p>Tempat parkir mobil</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">FISIB</a></h4>
                  <p>Ballroom FISIB</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="{{asset('assets')}}/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Perpustakaan Utama</a></h4>
                  <p>Tampilan perpustakaan utama</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Taman</a></h4>
                  <p>Tampilan taman universitas pakuan</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Ruang Sidang</a></h4>
                  <p>Tempat sidang mahasiswa</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Gedung FMIPA</a></h4>
                  <p>Tampak depan gedung FMIPA</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="{{asset('assets')}}/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Perpustakaan</a></h4>
                  <p>Tampilan perpustakaan area lainnya</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="{{asset('assets')}}/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="{{asset('assets')}}/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Ruang Rapat Dosen</a></h4>
                  <p>Tempat para dosen melakukan rapat</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Berikut adalah pertanyaan-pertanyaan dasar yang paling sering diajukan
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Berapa biaya 1 sks?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Untuk biaya persatu sksnya adalah Rp 150.000, dimana mahasiswa maksimal mengambil 24 sks
                    persemesternya
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Berapa biaya SPP persemester? Apakah biaya SPP tersebut tetap?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Biaya SPP persemester Rp 3.000.000, dan biaya itu tergolong tetap.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Berapa semester yang akan ditempuh mahasiswa sampei dengan wisuda?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Jika mahasiswa lulus tepat waktu maka semester yang ditemput hanya 8 semester, atau jika tidak tepat
                    waktu mahasiswa hanya bisa berkuliah hingga tahun ke 7.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Apakah biaya masuk bisa dicicil?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Uang masuk tidak bisa dicicil, namum Universitas Pakuan menyediakan fitur penangguhan biaya.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Bagaimana alur sistem pendaftaran mahasiswa baru di Universitas Pakuan?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Mahasiswa mengunjungi web PMB -> Daftar akun -> Login -> Isi form pendaftaran -> Lakukan pembayaran
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Postingan artikel terakhir</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets')}}/img/blog/1.webp" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <a href="blog-details.html">Kembangkan Potensi dan Wawasan Mahasiswa</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('assets')}}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Indah</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Mar 19, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets')}}/img/blog/2.webp" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <a href="blog-details.html">Practitioners Come to Campus "Buka Peluang Bisnis, Karir dan Skillsets"</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('assets')}}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Julia</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Mar 19 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{asset('assets')}}/img/blog/3.webp" alt="" class="img-fluid">
              </div>

              <h2 class="title">
                <a href="blog-details.html">Unpak Hadir di Pameran Pendidikan Tinggi Jabar-Banten di Bandung</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="{{asset('assets')}}/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Lintang</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Mar 19, 2023</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Pertanyaan dan saran, Silahkan kirim melalui form dibawah ini</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Pakuan, Tegallega. Kecamatan Bogor Tengah, Kota Bogor. Jawa Barat 16143</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>rektorat@unpak.ac.id</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 251 8312 2065</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection