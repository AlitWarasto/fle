<?php
/**
 * Landing Page Mobile Phone View
 *
 * @package WordPress
 * @subpackage JAGO KEUANGAN
 * @since JAGO KEUANGAN 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly

include(TEMPLATEPATH.'/header.php');

if(have_posts()) : while(have_posts()) : the_post();
  the_content();
endwhile; endif;
?><!--
<div class="loader">
  <div class="spinner-border text-danger"></div>
</div>-->
<style>
  #s1 {
    background-image:linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),url("<?php echo $siteurl;?>/wp-content/uploads/2021/05/gabung-bersama-fle-digital-sekarang.jpg");
    background-repeat:no-repeat;
    background-size: cover;
    background-position: bottom;
  }
  #s8 {
    background-image: url("<?php echo $siteurl;?>/wp-content/uploads/2021/05/image-bg-overlay.png");
    background-color: rgba(196,29,0,.77);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 1;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    background-attachment: fixed;
  }
</style>
<section id="s1" class="pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center h5 cOrange fs20 fsi pt6">Cara Belajar Bisnis Terbaru 2021</p>
        <p class="text-center h4 cWhite fs25 fsi pt-1">JAGO KEUANGAN</p>
        <h1 class=" cWhite font-weight-bold pt-3 pb6">Kuasai, Rahasia Keuangan
          Bisnis Anda<br>
          <span class="cOrange">Hanya 1,5 Jam</span><br>
          Pasti Bisa!!</h1>
          <a class="d-flex justify-content-center" href="#hargaSpecial"><button class="btn btn-primary cWhite btnG">Gabung Sekarang<span> </span><i class="fas fa-caret-right"></i></button></a>
      </div>
    </div>
  </div>
</section>
<section id="s2" class="bOrange">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 class="h3 text-center cWhite font-weight-bolder mb-2 mt-2">Apakah Anda Merasakan Situasi Seperti Ini?</h5>
        <ul class="s2ul cWhite">
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Pandemi Covid-19 Bikin Keuangan Bisnis Anda Berantakan?</span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Bingung cara mengelola keuangan perusahaan????</span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Tidak tahu cara recovery Bisnis?</span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Ingin belajar Manajemen Keuangan Bisnis Tapi Tidak Ada Waktu?<br></span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Omset meningkat tapi Keuntungan menipis?</span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Tidak bisa menyusun Laporan Keuangan?</span>
          </li>
          <li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-play" aria-hidden="true"></i> </span> <span class="h5 s2ullisp2">Uang Kas Bisnis anda sering defisit?</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="s3">
  <div class="container">
    <div class="row">
      <h3 class="col-md-12 h3 font-weight-bolder cRed text-center mt-3 mb-3">Jago Keuangan</h3>
      <h4 class="col-md-12 h3 font-weight-bolder cGrey text-center mt-1 mb-1">Solusi Belajar Finance, KILAT!</h4>
      <p class="col-md-12 h5 font-weight-bolder cGrey text-center mt-1 mb-3">Sekarang waktunya belajar <br><span class="cRed font-weight-bold">JAGO KEUANGAN</span> <b>connected from anywhere</b></p>
      <div class="col-md-4">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/everywhere-learning-scaled.jpg">
        <div class="col-md-12">
          <p class="h5 cRed text-center mt-3"><b>Materi Video</b></p>
          <p class="cGrey text-center">Belajar nyaman dari HP maupun Dekstop. Bisa rebahan, bisa diulang, bisa kapanpun dimanapun.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/fle-digital-galeri.jpg">
        <div class="col-md-12">
          <p class="h5 cRed text-center mt-3"><b>Papper Work</b></p>
          <p class="cGrey text-center">Belajar cepat dengan metode: dengar, baca, tulis. Lebih cepat paham, lebih cepat diterapkan di Bisnis Anda.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/call-center-operator-answering-clients-company-with-tech-support_97712-198.jpg">
        <div class="col-md-12">
          <p class="h5 cRed text-center mt-3"><b>Asisten Jago Keuangan</b></p>
          <p class="cGrey text-center">Jangan khawatir, Asisten Jago Keuangan siap mendampingi Anda mengerjakan materi Keuangan.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="s4" class="bRedOld">
  <div class="container">
    <div class="row">
      <h3 class="col-md-12 h3 font-weight-bolder cWhite text-center mt-5 mb-5">Mereka yang merekomendasikan Jago Keuangan</h3>
      <div class="team-boxed">
        <div class="container bRedOld">
          <div class="people d-flex flex-column align-items-center">
            <div class="col-md-6 col-lg-4 item">
              <div class="box"><img class="rounded-circle" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/pakkoko.png">
                <h3 class="name">Koko Hadiono</h3>
                <p class="title">Former Top Management Mc Donald's Indonesia</p>
                <p class="description">Buat rekan-rekan UMKM yang ingin tumbuh dan scaleup. Menguasai ilmu manajemen keuangan itu sangat penting. Pengusaha sukses itu pasti menguasai ilmu finance. Kabar baiknya Jago Keuangan kini bisa dipelajari cukup dari HP. Jauh lebih fleksibel, aplikatif, dan lebih cepat. Good luck!
              </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
              <div class="box"><img class="rounded-circle" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/rendy-1.png">
                <h3 class="name">Rendy Sipahutar</h3>
                <p class="title">Manager PT. BUMA</p>
                <p class="description">Online Learning Jago Keuangan ini keren, training finance untuk level manajemen jadi lebih efisien. Materinya mudah dipahami dengan cepat. Salah satu business skill yang harus dikuasai oleh profesional dan business owner. One of business skill you need to master.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
              <div class="box"><img class="rounded-circle" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/adi.png">
                <h3 class="name">Adi Widjaja</h3>
                <p class="title">Investor Profesional</p>
                <p class="description">Bisnis yang menarik adalah bisnis yang memiliki laporan keuangan. Salah satu parameter bisnis profesional itu memiliki laporan keuangan. Dan investor hanya tertarik kepada bisnis yang memiliki laporan keuangan. In God we trust, others use data. Jago Keuangan ini solusi bagi Anda yang ingin belajar manajemen keuangan bisnis Anda secara Express.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>
<section id="s5" class="bGrey">
  <div class="container">
    <div class="row">
       <!-- Swiper -->
      <div id="s5sw" class="swiper-container mt-3 mb-3">
        <div class="swiper-wrapper bGrey">
          <div class="swiper-slide s5sw">
            <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-20-at-14.44.46.jpeg">
          </div>
          <div class="swiper-slide s5sw">
            <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-20-at-14.44.45.jpeg">
          </div>
          <div class="swiper-slide s5sw">
            <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-20-at-14.44.45-1.jpeg">
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-md-12 mt-3">
        <h6 class="cRed text-center"><b>JAGO KEUANGAN</b></h6>
        <p class="text-center">Telah di ikuti 925+ UKM, Professional dan Corporation di Indonesia Diselenggarakan dalam bentuk workshop sejak tahun 2018</p>
      </div>
    </div>
  </div>
</section>
<section id="s6">
  <div class="container">
    <div class="row">
      <h3 class="col-md-12 text-center mt-4 mb-5 font-weight-bolder fPoppins">Untuk Siapa Jago Keuangan <span class="cRed">JAGO KEUANGAN</span> ini dibuat?</h3>
      <div class="col-md-3">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/mbak-cantik.jpg">
        <h5 class="text-center cGrey mt-2 mb-4">Anda yang mengembangkan usaha</h5>
      </div>
      <div class="col-md-3">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/martabak-alit.jpg">
        <h5 class="text-center cGrey mt-2 mb-4">Anda yang memulai usaha</h5>
      </div>
      <div class="col-md-3">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/download-1.jpg">
        <h5 class="text-center cGrey mt-2 mb-4">Anda yang pusing mengelola usaha</h5>
      </div>
      <div class="col-md-3">
        <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/finance.jpg">
        <h5 class="text-center cGrey mt-2 mb-4">Siapapun yang ingin belajar manajemen keuangan bisnis</h5>
      </div>
    </div>
  </div>
</section>
<section id="s7" class="bGrey">
  <div class="container">
    <div class="row">
      <h3 class="col-md-12 text-center mt-3 mb-3 font-weight-bolder fPoppins">Cerita dari mereka yang sudah belajar <span class="cRed">JAGO KEUANGAN</span></h3>
      <div id="sWA" class="swiper-container mt-3 mb-3">
        <div class="swiper-wrapper bGrey s7sw">
          <div class="swiper-slide">
            <div class="s7ssd">
              <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-23-at-10.03.01.jpeg">
              <span class="mt-3">Lena<br>Distributor AC</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="s7ssd">
              <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-23-at-09.51.26.jpeg">
              <span class="mt-3">Aby<br> Audina Hijab</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="s7ssd">
              <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-23-at-09.41.51.jpeg">
              <span class="mt-3">Sendy<br>Konsultan Resto</span>
            </div>
          </div >
          <div class="swiper-slide">
            <div class="s7ssd">
              <img class="img-fluid" loading="lazy" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/WhatsApp-Image-2020-05-23-at-09.41.50.jpeg">
              <span class="mt-3">Fanny<br>Mr. Suprek</span>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swap"></div>
      </div>
      <div id="hargaSpecial" class="mt-5">
        <div class="col-md-6 mb-5">
          <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/sale.jpg">
          <h3 class="fPoppins text-center font-weight-bold mt-3">HARGA SPESIAL</h3>
          <h3 class="col fPoppins text-center font-weight-bold mt-1">Pra - Launching!</h3>
        </div>
        <div class="col-md-6 box">
          <h3 class="fPoppins text-center font-weight-bold mt-3">Materi apa saja yang akan Anda pelajari:</h3>
          <ul class="s7ul"><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Logika manajemen keuangan untuk mengambil keputusan yang TEPAT dalam Bisnis Anda</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Teknik bikin laporan keuangan yang MUDAH dan CEPAT. Hanya 15 menit setiap hari</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Strategi membangun Bisnis yang SEHAT dan KUAT</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Rahasia AKSELERASI BISNIS yang benar dan terbukti berhasil</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">BAHASA INVESTASI untuk meyakinkan investor</span></li></ul>
          <hr>
          <h1 class="hc text-center">Rp 990.000,-</h1>
          <p class="hd hc text-center">Rp 590.000,-</p>
          <a class="d-flex justify-content-center" href="http://member.jagokeuangan.com/product/jago-keuangan-basic/"><btn class="btn btn-primary pt-3 pb-3 pr-4 pl-4 fs20" role="button"> Gabung Sekarang</btn></a>
          <span class="d-flex justify-content-center">
            <img class="col-3 img-fluid mt-3" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/logo-bca.jpg" style="opacity: .58;">
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="s8">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-3 pt-3 pb-4">
        <h3 class="h4 fPoppins font-weight-bolder cWhite text-center" style="line-height: 1.5em;">Berikut Alasan Kuat, Kenapa Anda Harus Bergabung dengan <brJAGO KEUANGAN Segera</h3>
      </div>
      <div class="col-md-3 pt-2 pb-3">
        <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/Tanda-tanda-pengusaha-sukses-1.jpg"></img>
        <p class="h5 text-center cWhite mt-3">Semua pengusaha sukses menguasai manajemen keuangan</p>
      </div>
      <div class="col-md-3 pt-2 pb-3">
        <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/mbak-lala.jpg"></img>
        <p class="h5 text-center cWhite mt-3">Semakin cepat belajar, semakin cepat praktek, semakin cepat sukses</p>
      </div>
      <div class="col-md-3 pt-2 pb-3">
        <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/Jurnal_Blog_10_Cara_Memulai_Bisnis_Rumahan_Agar_Cepat_Sukses-01-1.png"></img>
        <p class="h5 text-center cWhite mt-3">Bisnis Autopilot, dikontrol dari Kinerja Keuangannya. Segera buat Bisnis Anda Autopilot</p>
      </div>
    </div>
  </div>
</section>
<section id="s9" class="pb-4">
  <div class="container">
    <div class="row">
      <h2 class="h3 col fPoppins font-weight-bolder text-center mb-5 mt-5">Kerugian jika Anda tidak segera belajar <br><span class="cRed"JAGO KEUANGAN</span><br>sekarang juga</h2>
      <ul class="s9ul"><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-times" aria-hidden="true"></i> </span> <span>Bisnis Anda sulit naik level, terjebak dalam zona UMKM bertahun-tahun</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-times" aria-hidden="true"></i> </span> <span>Pusing menjalani Bisnis karena menghadapi masalah yang sama berulang-ulang</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-times" aria-hidden="true"></i> </span> <span>Pesaing Bisnis Anda akan tumbuh lebih cepat dan lebih banyak</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-times" aria-hidden="true"></i> </span> <span>Anda bisa kehilangan peluang bisnis, Waktu tidak kembali dan Peluang tidak datang dua kali</span></li></ul>
      <h2 class="col-md-12 fPoppins font-weight-bolder text-center mb-5 mt-2">Bagi Anda Yang <span class="cRed">Bergabung Hari Ini</span>, Dapatkan Bonus Tambahan:</h2>
      <div class="d-flex flex-column align-items-center">
        <div class="col-10 box2 d-flex flex-column align-items-center mb-3 p-5">
          <div class="col-8"><img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/5.png"></img></div>
          <h4 class="h5 mt-3 fPoppins font-weight-bold text-center">Template Proyeksi Keuangan Bisnis</h4>
          <p class="col d-flex justify-content-center"><span>Rp. </span><span>500.000,-</span></p>
        </div>
        <div class="col-10 box2 d-flex flex-column align-items-center mb-3 p-5">
          <div class="col-8"><img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/5.png"></img></div>
          <h4 class="h5 mt-3 fPoppins font-weight-bold text-center">25 checklist Audit Kinerja Keuangan Bisnis</h4>
          <p class="col d-flex justify-content-center"><span>Rp. </span><span>200.000,-</span></p>
        </div>
        <div class="col-10 box2 d-flex flex-column align-items-center mb-3 p-5">
          <div class="col-8"><img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/5.png"></img></div>
          <h4 class="h5 mt-3 fPoppins font-weight-bold text-center">Teknik recruitment team Accounting yang ampuh!</h4>
          <p class="col d-flex justify-content-center"><span>Rp. </span><span>500.000,-</span></p>
        </div>
      </div>
      <div class="col-md-12 mb-5 mt-5">
        <h2 class="text-center fPoppins font-weight-bolder cRed">Total Bonus Rp 1.200.000,-</h2>
      </div>
    </div>
  </div>
</section>
<section id="s10">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5">
        <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/gumun1.jpg">
      </div>
      <div class="col-md-6 box mt-5">
          <h3 class="h2 fPoppins text-center font-weight-bold mt-3 mb-5">BAYANGKAN JIKA ANDA HARUS:</h3>
          <ul class="s7ul"><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Kuliah S2 MBA : 120 juta</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Workshop Finance: 9 juta</span></li><li class="mt-1 mb-2 position-relative"> <span class="s2ullisp1 mr-1"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </span> <span class="fs18 s2ullisp2">Trial Error Bisnis: boros waktu, tenaga, pikiran dan uang</span></li></ul>
          <h3 class="h2 mt-5 mb-5 fPoppins text-center font-weight-bolder">HARGA SPESIAL <br><span class="cRed">Pra-Launching </span></h3>
          <h1 class="hc text-center">Rp 990.000,-</h1>
          <p class="hd hc text-center">Rp. 590.000,-</p>
          <a class="d-flex justify-content-center" href="http://member.jagokeuangan.com/product/jago-keuangan-basic/"><btn class="btn btn-primary pt-3 pb-3 pr-4 pl-4 fs20" role="button"> Gabung Sekarang</btn></a>
          <span class="d-flex justify-content-center">
            <img class="col-3 img-fluid mt-3" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/logo-bca.jpg" style="opacity: .58;">
          </span>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <div class="boxB col-10 d-flex justify-content-center flex-column align-items-center mt-5 mb-5 p-0">
            <div class="col-md-3 mt-3">
              <img class="img-fluid" src="<?php echo $siteurl; ?>/wp-content/uploads/2021/05/mbg.png">
            </div>
            <div class="col-md-12">
              <h3 class="h2 mt-5 mb-5 fPoppins text-center font-weight-bolder">Garansi Uang Kembali</h3>
            </div>
            <div class="col-md-12">
              <p class="text-center">Garansi Uang Kembali 100% Apabila Anda Tidak Paham pun Sudah Belajar Berkali-kali.
  Kami menyediakan Asisten F.L.E yang membantu menjawab pertanyaan-pertanyaan Anda</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-5 mb-5">
          <h3 class="h2 fPoppins text-center font-weight-bolder">Pertanyaan Yang Sering Ditanyakan</h3>
        </div>
        <div class="d-flex flex-column align-items-center mb-5">
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Apa itu JAGO KEUANGAN?</h6>
            <hr>
            <p class="">JAGO KEUANGAN adalah cara baru belajar manajemen keuangan bisnis dengan cepat dan mudah. Dirancang dengan metode dengar, baca, dan tulis agar kita
  bisa menguasai manajemen keuangan dalam waktu singkat.</p>
          </div>
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Apakah saya akan bisa belajar dengan cepat?</h6>
            <hr>
            <p class="">Ya, Jago Keuangan memiliki Asisten JAGO yang bertugas membantu kita menyelesaikan materi-materi di dalamnya. Asisten F.L.E bisa dihubungi melalui chat via
  Whatsapp untuk tanya jawab.</p>
          </div>
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Apa itu Jago Keuangan?</h6>
            <hr>
            <p class=""JAGO KEUANGAN adalah materi KEUANGAN yang  dapat dipelajari secara online dimanapun untuk menambah keahlian manajemen keuangan bisnis kita.</p>
          </div>
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Apakah kompatibel disemua perangkat?</h6>
            <hr>
            <p class="">ya, kompatibel di semua perangkat.</p>
          </div>
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Berlaku untuk berapa lama member Jago Keuangan?</h6>
            <hr>
            <p class="">Jago Keuangan berlaku seumur hidup.</p>
          </div>
          <div class="col-11 box2 pt-4 pb-4 mb-3">
            <h6 class="fPoppins font-weight-bold">Apakah ada program affiliate?</h6>
            <hr>
            <p class="">Ada. Langsung hubungi ke customer service kami di Whatsapp 0811-2633-997</p>
          </div>
        </div>
    </div>
  </div>
</section>
<?php
include(TEMPLATEPATH.'/footer.php');
?>