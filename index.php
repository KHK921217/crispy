<?php include 'header.php' ?>
<script src="./js/main.js"></script>

<main>

  <section class="home-visual">
    <div class="overflow">
      <div class="col_width">
        <ul class="img_container">
          <li>
            <figure class="inner">
              <img src="./img/visual/1.jpg" alt="img1">
            </figure>
          </li>
          <li>
            <figure class="inner">
              <img src="./img/visual/2.jpg" alt="img2">
            </figure>
          </li>
          <li>
            <figure class="inner">
              <img src="./img/visual/3.jpg" alt="img3">
            </figure>
          </li>
          <li>
            <figure class="inner">
              <img src="./img/visual/5.jpg" alt="img5">
            </figure>
            <figure class="inner-img">
              <img src="./img/visual/5-1.png" alt="img5-inner">
            </figure> 
          </li>
        </ul><!-- img_container -->
      </div><!-- col_width -->
    </div><!-- overflow -->
    <button class="prev"><i class="fa-regular fa-circle-left"></i></button>
    <button class="next"><i class="fa-regular fa-circle-right"></i></button>

    <!-- indicator 영역 -->
    <div class="indicator">
      <button class="active"></button>
      <button></button>
      <button></button>
      <button></button>
    </div>

    <div class="progress"><!-- 클래스 이름 변경하지 말것 -->
      <div class="bar"></div>
    </div><!-- progress --> 

  </section><!-- home-visual -->

  <section class="visual-top">
    <div class=inner>
      <a href="#"><img class="right-baner" src="./img/top/top right_baner.png" alt="right-baner"></a>
      <a href="#"><img class="left-baner" src="./img/top/top_left_baner.png" alt="left-banner"></a>
    </div>
  </section>

  <section class="visual-donet">
    <div class="donet-wrap">
      <h2>BEST MENU</h2>
      <div class="donet-visual">
        <div class="overflow">
          <div class="col_width">
            <ul class="img_container">
              <li>
                <figure>
                  <img src="./img/도넛/6.png" alt="로투스">
                </figure>
                <figcaption>
                  <p>로투스비스코프도넛</p>
                </figcaption>
              </li>
              <li>
                <figure>
                  <img src="./img/도넛/1.png" alt="스트로베리">
                </figure>
                <figcaption>
                  <p>스트로베리필드</p>
                </figcaption>
              </li>
              <li>
                <figure>
                  <img src="./img/도넛/7.png" alt="우유크림">
                </figure>
                <figcaption>
                  <p>우유크림도넛</p>
                </figcaption>
              </li>
              <li>
                <figure>
                  <img src="./img/도넛/9.png" alt="고구마">
                </figure>
                <figcaption>
                  <p>자주빛가을이구마</p>
                </figcaption>
              </li>
              <li>
                <figure>
                  <img src="./img/도넛/8.png" alt="가을">
                </figure>
                <figcaption>
                  <p>가을이익어가는밤</p>
                </figcaption>
              </li>
            </ul>
          </div><!-- col_width -->
        </div><!-- overflow -->

      </div><!-- donet-visual -->
    </div>
  </section>

</main> <!-- main -->

<?php include 'footer.php' ?>