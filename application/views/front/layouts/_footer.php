<!--================ start footer Area  =================-->	
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>Sijaupdate.com</h3>
               </div>
               <p>Sijaupdate merupakan portal berita kekinian</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                  <div class="f_title">
                  <h3>Link Terkait</h3>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <h5 style="color: white">Category</h5>
                        <ul class="list mt-3">
                           <?php foreach($category as $c) : ?>
                              <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                           <?php endforeach ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <h5 style="color: white">Info</h5>
                        <ul class="list">
                              <li><a href="<?= base_url('contact') ?>">About</a></li>
                              <li><a href="#">Contact</a></li>
                        </ul>
                     </div>										
                  </div>							
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget m_news_widgets">
               <div class="f_title">
                  <h3>Informasi</h3>
               </div>
               <div class="col-lg-4 col-md-4 footer-social icon mx-auto">
                  <a href="https://www.smknegeri1garut.sch.id/pplg/"><i class="fa fa-google"></i></a>
                  <br>
                  <br>
                  <a href="https://www.instagram.com/sija.smkn1garut/"><i class="fa fa-instagram"></i></a>
                  <br>
                  <br>
                  <a href="https://www.youtube.com/@SMKN1GARUTTV"><i class="fa fa-youtube-play"></i></a>
                 
               </div>
            </div>
         </div>	
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
         <p class="col-lg-8 col-md-8 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sijaupdate</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->
