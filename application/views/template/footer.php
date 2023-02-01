<!-- Footer bagian akhir Website kita -->
<footer class="section-footer mt-5 mb-4 border-top">
  <div class="container pt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-lg-3">
            <h5>FEATURES</h5>
            <!-- Unstyled list tp ga ada bulet2nya -->
            <ul class="list-unstyled">
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Social Media Kit</a></li>
              <li><a href="#">Affiliate</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>ACCOUNT</h5>
            <!-- Unstyled list tp ga ada bulet2nya -->
            <ul class="list-unstyled">
              <li><a href="#">Refund</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Reward</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>COMPANY</h5>
            <!-- Unstyled list tp ga ada bulet2nya -->
            <ul class="list-unstyled">
              <li><a href="#">Career</a></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Media</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>GET CONNECTED</h5>
            <!-- Unstyled list tp ga ada bulet2nya -->
            <ul class="list-unstyled">
              <li><a href="#">Jakarta Selatan</a></li>
              <li><a href="#">Indonesia</a></li>
              <li><a href="#">0812-345-678</a></li>
              <li><a href="#">support@nomand.id</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container fluid berfungsi untuk rata kanan kiri -->
  <div class="container-fluid">
    <div class="row border-top justify-content-center 
    align-items-center pt-4">
    <div class="col-auto text-gray-500 font-weight-light">
      2021 Copyright Nomads . All right reserved . Made in Jakarta
    </div>
  </div>
</div>
</footer>

<script src="<?= base_url('assets/')  ?>frontend/libraries/retina/retina.min.js"></script>
<script src="<?= base_url('assets/')  ?>frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/')  ?>frontend/libraries/bootstrap/js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:5,
        nav:true,
        loop:false
      }
    }
  })
</script>

</body>

</html>