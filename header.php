<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/index.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://kit.fontawesome.com/cc7c7e940e.js" crossorigin="anonymous"></script>
  <script defer src="./js/window.js"></script>
  <script defer src="./js/menu.js"></script>
  <script defer src="./js/common.js"></script>
  <script defer src="./js/responsive_carousel_horz.js"></script>
  <script defer src="./js/smoothscroll.js"></script>
  <title>Document</title>
</head>
<body>
 
<header>
  <nav class="member">
    <ul class="header_top">
      <li><a href="#" class="dummy-link">로그인</a></li>
      <li><a href="#" class="dummy-link">회원가입</a></li>
      <li><a href="#" class="dummy-link">고객의소리</a></li>
      <li><a href="#" class="dummy-link">윤리경영</a></li>
      <li><a href="#" class="dummy-link">사이트맵</a></li>
    </ul><!-- header_top -->
  </nav>  

    <div class="gnb-center">
      <h1 class="logo">
        <span class="hidden">logo</span>
        <a href="#">
          <img src="./img/logo/logo.png" alt="logo">
        </a>
      </h1><!-- h1 -->
      <nav class="gnb gnb-lg"> 
        <?php include 'gnb.php' ?>
      </nav>
    <button class="mbtn">
        <i class="fa-solid fa-bars"></i>
        <i class="fa-solid fa-up-long"></i>
    </button>
    </div><!-- gnb_center  -->

  <nav class="gnb gnb-sm"> 
        <?php include 'gnb.php' ?> 
  </nav>

</header>
