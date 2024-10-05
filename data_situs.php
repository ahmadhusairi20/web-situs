<?php include "header.php"; ?>
<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Data Situs Sejarah
        </h1>
        <p class="text-white link-nav">Halaman ini memuat informasi Tempat Situs Sejarah Linge di Kabupaten Aceh Tengah</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start price Area -->
<section id="peta_situs" class="about-info-area section-gap">
  <div class="container">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-12">
          <div class="title text-center">
            <h1 class="mb-15">Sejarah Kerajaan Linge</h1>
            <p>Kerajaan Linge adalah salah satu kerajaan yang pernah didirikan oleh suku Gayo di wilayah Dataran Tinggi Gayo, Provinsi Aceh. Sumber informasi mengenai Kerjaan Linge hanya diperoleh dari tradisi lisan suku Gayo Wilayah kekuasaan Kerajaan Linge diperkirakan mulai dikembangkan sejak abad ke-10 Masehi di wilayah Kecamatan Linge, Kabupaten Aceh Tengah. Menurut cerita rakyat dari suku Gayo, raja pertama Kerajaan Linge ialah Meurah Adi Genali yang dikenali sebagai ayah dari Sultan Johan Syah yang mendirikan Kesultanan Aceh (1203–1234 M).</p>
            <p>Cerita rakyat yang menjadi tradisi lisan suku Gayo menceritakan keyakinan mengenai keberadaan Kerajaan Linge. Dalam kepercayaan suku Gayo, Kerajaan Linge telah didirikan di Dataran Tinggi Gayo sebelum penyebaran agama Islam di Aceh. Informasi mengenai Kerajaan Linge sering disebutkan dalam percakapan sehari-hari dari suku Gayo yang menjadi penduduk di Kabupaten Aceh Tengah, Provinsi Aceh, Indonesia. Dalam penuturan suku Gayo, Kerajaan Linge pernah didirikan di wilayah Kecamatan Linge yang terletak di bagian selatan Danau Laut Tawar. Suku Gayo di Aceh meyakini bahwa sebelum Kesultanan Aceh menguasai Dataran Tinggi Gayo, wilayah ini telah dikuasai oleh sebuah kerajaaan bernama Kerajaan Linge. Kerajaan Linge diperkirakan mulai dirintis sejak abad ke-10 Masehi. </p>
            <p>Namun dari cerita rakyat mengenai "Negeri Rum" bahwa suku Gayo berasal dari wilayah pesisir Kabupaten Aceh Utara. Namun suku Gayo berpindah mengikuti sungai Peusangan hingga mencapai Dataran Tinggi Gayo. Melalui cerita rakyat, diyakini bahwa kesejahteraan penduduk dari suku Gayo di Kerajaan Linge baru dimulai sejak masa kekuasaan Meurah Adi Genali.Sehingga Meurah Adi Genali dianggap sebagai pendiri Kerajaan Linge di Dataran Tinggi Gayo. Nama Meurah Adi Genali banyak disebutkan dalam Kronika Gayo. Meurah Adi Genali merupakan ayah dari Sultan Johan Syah yang menjadi pendiri Kesultanan Aceh yang memerintah sejak tahun 1203 hingga 1234 M.
            </p>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End other-issue Area -->

</div>

<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 info-left">
        <img class="img-fluid" src="img/about/info-img.jpg" alt="">
      </div>

      <div class="col-lg-12 into-right" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-15">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">

            </div>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-black">Data Situs Sejarah Linge Kabupaten Aceh Tengah</h6>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th width="30%">Nama Situs Sejarah</th>
                    <th width="30%">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = file_get_contents('http://localhost/SIG-SITUS/ambildata.php');
                  $no = 1;
                  if (json_decode($data, true)) {
                    $obj = json_decode($data);
                    foreach ($obj->results as $item) {
                  ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $item->nama_situs; ?></td>
                        <td><?php echo $item->alamat; ?></td>
                        <td class="ctr">
                          <div class="btn-group">
                            <a href="detail.php?id_situs=<?php echo $item->id_situs; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                              <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                  <?php $no++;
                    }
                  } else {
                    echo "data tidak ada.";
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>