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
                  <img src="./img/도넛/6.png" alt="로투스">
                  <p>로투스비스코프도넛</p>
              </li>
              <li>
                  <img src="./img/도넛/1.png" alt="스트로베리">
                  <p>스트로베리필드</p>
              </li>
              <li>
                  <img src="./img/도넛/7.png" alt="우유크림">
                  <p>우유크림도넛</p>
              </li>
              <li>
                  <img src="./img/도넛/9.png" alt="고구마">
                  <p>자주빛가을이구마</p>
              </li>
              <li>
                  <img src="./img/도넛/8.png" alt="가을">
                  <p>가을이익어가는밤</p>
              </li>
              <li>
                <img src="./img/도넛/2.png" alt="글레이즈드 사워크림">
                <p>사워크림</p>
              </li>
              <li>
                <img src="./img/도넛/10.png" alt="우유크림듬쁙">
                <p>우유크림듬쁙</p>
              </li>
              <li>
                <img src="./img/도넛/5.png" alt="딸기">
                <p>스트로베리듬뿍</p>
              </li>
              <li>
                <img src="./img/도넛/3.png" alt="딸기">
                <p>딸기크림도넛</p>
              </li>
              <li>
                <img src="./img/도넛/4.png" alt="오리지널">
                <p>오리지널 글레이즈</p>
              </li>

            </ul><!-- img_container -->
          </div><!-- col_width -->
        </div><!-- overflow -->
      </div><!-- donet-visual -->
    </div><!-- donet-wrap -->
  </section><!-- visual-donet -->

  <section class="home-event">
    <div class="event-center">
      <h2>EVENT</h2>
      <ul>
        <li>
          <figure>
            <a href="#"><img src="./img/1.jpg" alt="img1"></a>
          </figure>
          <figcaption>
            <h3>가을 신제품 출시기념</h3>
            <p class="des">가을 신제품 출시기념 이벤트를 진행합니다.</p>
            <p class="date">2022-09-07</p>
          </figcaption>
        </li>
        <li>
          <figure>
          <a href="#"><img src="./img/2.jpg" alt="img2"></a>
          </figure>
          <figcaption>
            <h3>한끼든든</h3>
            <p class="des">한끼든든 피자 출시기념 다양한 이벤트를 진행합니다.</p>
            <p class="date">2022-09-08</p>
          </figcaption>
        </li>
        <li>
          <figure>
          <a href="#"><img src="./img/3.jpg" alt="img3"></a>
          </figure>
          <figcaption>
            <h3>1000원 즉시할인</h3>
            <p class="des">APP에서 Pay 결제 제휴 이벤트를 확인하시고, 할인 받으세요.</p>
            <p class="date">2022-09-22</p>
          </figcaption>
        </li>
      </ul>
      <button>
        <a href="#">이벤트 더보기</a>
      </button>
    </div><!-- event-center -->
  </section><!-- home-event -->

  <section class="const_scroll">
    <span class="text_1"><img src="./img/scroll_txt_1.png" alt="scrolltext1"></span>
    <span class="text_2"><img src="./img/scroll_txt_2.png" alt="scrolltext2"></span>
  </section><!-- const_scroll -->

  <section class="const_sns">
    <div class="sns_center">
      <h3>
        <span class="hidden">크리스피</span>
        <img src="./img/logo/logo2.PNG" alt="logo2">
      </h3>
      <span>크리스피 도넛과 함께하는 SNS</span>
      <div class="sns_img">
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
      </div>
    </div>
  </section><!-- const_sns -->

  <section class="last_img">
    <img src="./img/bottom/bottom2.png" alt="">
  </section>


</main> <!-- main -->

<?php include 'footer.php' ?>