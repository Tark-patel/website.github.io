<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T.P links</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
  html{
    background-image: url("s.p\ and\ tark.jpg");
    background-position: center;
  }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    
    section {
      padding: 20px 100px;
    }
    .section-home{
      
    }
    .section-home {
      position: relative;
      min-height: 100vh;
     
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .section-home:before {
      content: '';
      position: absolute;
      background: linear-gradient(to top, #23252B, transparent);
      width: 100%;
      height: 80px;
      bottom: 0;
    }

    .section-home h1 {
      color: #fff;
      font-size: 10vw;
      font-weight: 800;
      text-shadow: 0 5px 25px rgb(0 0 0 / 20%);
      opacity: 0.3;
    }

    .section-two {
      min-height: 100vh;
      background: #23252B;
    }

    .section-two h2 {
      color: #fff;
      font-size: 3em;
      font-weight: 700;
      margin: 30px 0;
    }

    .section-two p {
      color: #fff;
      font-size: 1em;
      margin: 30px 0;
    }

    header {
      z-index: 999;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #23252B;
      box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
      padding: 0 100px;
      transition: 0.6s;
    }

    header .logo {
      color: #fff;
      font-size: 1.8em;
      font-weight: 700;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 2px;
    }

    header .navigation {
      position: relative;
      line-height: 75px;
      transition: 0.6s;
      transition-property: line-height;
    }

    header.sticky .navigation {
      line-height: 60px;
    }

    header .navigation .menu {
      position: relative;
      display: flex;
      justify-content: center;
      list-style: none;
      user-select: none;
    }

    .menu-item>a {
      color: #fff;
      font-size: 1em;
      text-decoration: none;
      margin: 20px;
      padding: 25px 0;
    }

    .menu-item>a:hover {
      color: #469DFF;
      transition: 0.3s;
    }

    .menu-item .sub-menu {
      position: absolute;
      background: #23252B;
      top: 74px;
      line-height: 40px;
      list-style: none;
      border-radius: 0 0 8px 8px;
      box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
      pointer-events: none;
      transform: translateY(20px);
      opacity: 0;
      transition: 0.3s;
      transition-property: transform, opacity;
    }

    header.sticky .menu-item .sub-menu {
      top: 60px;
    }

    .menu-item:hover .sub-menu {
      pointer-events: all;
      transform: translateY(0);
      opacity: 1;
    }

    .menu-item .sub-menu .sub-item {
      position: relative;
      padding: 7px 0;
      cursor: pointer;
      box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
    }

    .menu-item .sub-menu .sub-item a {
      color: #fff;
      font-size: 1em;
      text-decoration: none;
      padding: 15px 30px;
    }

    .menu-item .sub-menu .sub-item:hover {
      background: #4080EF;
    }

    .menu-item .sub-menu .sub-item:last-child:hover {
      border-radius: 0 0 8px 8px;
    }

    .more .more-menu {
      position: absolute;
      background: #23252B;
      list-style: none;
      top: 0;
      left: 100%;
      white-space: nowrap;
      border-radius: 0 8px 8px 8px;
      overflow: hidden;
      pointer-events: none;
      transform: translateY(20px);
      opacity: 0;
      transition: 0.3s;
      transition-property: transform, opacity;
    }

    .more:hover .more-menu {
      pointer-events: all;
      transform: translateY(0);
      opacity: 1;
    }

    .more .more-menu .more-item {
      padding: 7px 0;
      box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
      transition: 0.3s;
    }

    .more .more-menu .more-item:hover {
      background: #4080EF;
    }

    .menu-btn {
      display: none;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: "Roboto", sans-serif;
    }

    header {
      z-index: 1;
      position: fixed;
      background: #22242A;
      padding: 20px;
      width: calc(100% - 0%);
      top: 0;
      height: 30px;
    }

    .left_area h3 {
      color: #fff;
      margin: 0;
      text-transform: uppercase;
      font-size: 22px;
      font-weight: 900;
    }


    @media screen and (max-width: 780px) {
      .sidebar {
        display: none;
      }

      #sidebar_btn {
        display: none;
      }

      .content {
        margin-left: 0;
        margin-top: 0;
        padding: 10px 20px;
        transition: 0s;
      }

      #check:checked~.content {
        margin-left: 0;
      }


      .nav_bar {
        background: #222;
        width: (100% - 0px);
        margin-top: 70px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }

      .nav_bar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

      .nav_bar .nav_btn {
        color: #fff;
        font-size: 22px;
        cursor: pointer;
        transition: 0.5s;
        transition-property: color;
      }

      .nav_bar .nav_btn:hover {
        color: hotpink;
      }

      .active {
        display: block;
      }
    }

    .dropbtn {
      background-color: #2F323A;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: hotpink;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .leftside {
      color: #000000;
      text-transform: uppercase;
      text-align: center;
    }

    .leftside h3 {
      font-size: 40px;
      margin-bottom: 20px;
      position: relative;
    }

    .leftside h1 {
      margin-top: 20px;
      font-size: 25px;
      margin-left: 50px;
      margin-bottom: 25px;
    }

    .leftside h2 {
      margin-bottom: 35px;
      font-weight: 500;
      word-spacing: 4px;
      font-size: 50px;
      content: "";
      color: #000000;
    }

    .color span {
      color: #19B3D3;
    }

    .hotpink {
      color: hotpink;
    }

    .blue {
      color: #19B3D3;
    }

    .link {
      display: inline-block;
      background: linear-gradient(45deg, #12B3D3, hotpink);
      border-radius: 6px;
      padding: 20px 10px;
      box-sizing: border-box;
      box-shadow: 40px 22px 70px rgba(#12B3D3, hotpink, pink, lightblue);
      text-decoration: none;
    }

    .hiden {
      color: white;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .youtube {
      text-decoration: underline blue;
    }

    .info {
      margin-top: -500px;
      text-align: right;
      font-family: "Roboto", sans-serif;
      font-weight: 400;
      font-size: medium;
    }

    .card h1 {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      text-align: center;
    }

    .card h1:hover {
      color: hotpink;
    }

    .coruse {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #19B3D3;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      color: #384047;
    }

    form {
      max-width: 300px;
      margin: 10px auto;
      padding: 10px 20px;
      background: #f4f7f8;
      border-radius: 8px;
    }

    h1 {
      margin: 0 0 30px 0;
      text-align: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      font-size: 16px;
      height: auto;
      margin: 0;
      outline: 0;
      padding: 15px;
      width: 100%;
      background-color: #e8eeef;
      color: #8a97a0;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
      margin-bottom: 30px;
    }



    select {
      padding: 6px;
      height: 32px;
      border-radius: 2px;
    }

    button {
      padding: 19px 39px 18px 39px;
      color: #FFF;
      background-color: #4bc970;
      font-size: 18px;
      text-align: center;
      font-style: normal;
      border-radius: 5px;
      width: 100%;
      border: 1px solid #3ac162;
      border-width: 1px 1px 3px;
      box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
      margin-bottom: 10px;
    }

    fieldset {
      margin-bottom: 30px;
      border: none;
    }

    legend {
      font-size: 1.4em;
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    label.light {
      font-weight: 300;
      display: inline;
    }

    .number {
      background-color: #5fcf80;
      color: #fff;
      height: 30px;
      width: 30px;
      display: inline-block;
      font-size: 0.8em;
      margin-right: 4px;
      line-height: 30px;
      text-align: center;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
      border-radius: 100%;
    }

    @media screen and (min-width: 480px) {

      form {
        max-width: 480px;
      }

      .coruse :hover {
        opacity: 0.7;
      }

      footer {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
        color: #19B3D3;
      }

      footer :hover {
        color: hotpink;
      }

      .body {
        margin: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        place-items: center;
        overflow: hidden;
        font-family: poppins;
      }

      .container {
        position: relative;
        width: 350px;
        height: 500px;
        border-radius: 20px;
        padding: 40px;
        box-sizing: border-box;
        box-shadow: 14px 14px 20px #19B3D3, -14px -14px 20px hotpink;
      }


      .inputs {
        text-align: left;
        margin-top: 30px;
      }

      .body label,
      input,
      button {
        display: block;
        width: 100%;
        outline: none;
      }

      .body input {
        background: #ecf0f3;
        padding: 10px;
        border-radius: 50px;
        box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
      }

      .body button {
        margin-top: 20px;
        background: #1DA1F2;
        height: 40px;
        border-radius: 20px;

      }

      .body button:hover {
        box-shadow: none;
      }


      .body h1 {
        position: absolute;
        top: 0;
        left: 0;
      }

      .tark a {
        text-align: center;
        text-decoration: none;
        margin-top: 255px;
      }

      .counter {
        color: #19B3D3;
        text-align: right;
        font-family: cursive;
      }

      .ending {
        font-size: 1.5rem;
        text-transform: capitalize;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        display: flex;
        justify-content: center;
      }
    }

    .section-home {
      position: relative;
      min-height: 100vh;
      background: url(bg.jpg)no-repeat;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .section-home:before {
      content: '';
      position: absolute;
      background: linear-gradient(to top, #23252B, transparent);
      width: 100%;
      height: 80px;
      bottom: 0;
    }

    .section-home h1 {
      color: #fff;
      font-size: 10vw;
      font-weight: 800;
      text-shadow: 0 5px 25px rgb(0 0 0 / 20%);
      opacity: 0.3;
    }

    .section-two {
      min-height: 100vh;
      background: #23252B;
    }

    .section-two h2 {
      color: #fff;
      font-size: 3em;
      font-weight: 700;
      margin: 30px 0;
    }

    .section-two p {
      color: #fff;
      font-size: 1em;
      margin: 30px 0;
    }

    @media (max-width: 780px) {
      header .navigation .menu {
        position: fixed;
        display: block;
        background: #23252b;
        min-width: 350px;
        height: 100vh;
        top: 0;
        right: -100%;
        padding: 90px 50px;
        visibility: hidden;
        overflow-y: auto;
        transition: 0.5s;
        transition-property: right, visibility;
      }

      header.sticky .navigation {
        line-height: 75px;
      }

      header .navigation .menu.active {
        right: 0;
        visibility: visible;
      }

      .menu-item {
        position: relative;
      }

      .menu-item .sub-menu {
        opacity: 1;
        position: relative;
        top: 0;
        transform: translateX(10px);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        overflow: hidden;
        display: none;
      }

      header.sticky .menu-item .sub-menu {
        top: 0;
      }

      .menu-item:hover .sub-menu {
        transform: translateX(10px);
      }

      .menu-item .sub-menu .sub-item {
        box-shadow: none;
      }

      .menu-item .sub-menu .sub-item:hover {
        background: none;
      }

      .menu-item .sub-menu .sub-item a:hover {
        color: #4080EF;
        transition: 0.3s;
      }

      .more .more-menu {
        opacity: 1;
        position: relative;
        left: 0;
        transform: translateY(0);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        display: none;
      }

      .more .more-menu .more-item {
        box-shadow: none;
      }

      .more .more-menu .more-item:hover {
        background: none;
      }

      .more .more-menu .more-item a {
        margin-left: 20px;
      }

      .close-btn {
        position: absolute;
        background: url(close.png)no-repeat;
        width: 40px;
        height: 40px;
        background-size: 25px;
        background-position: center;
        top: 0;
        left: 0;
        margin: 25px;
        cursor: pointer;
      }

      .menu-btn {
        background: url(menu.png)no-repeat;
        width: 40px;
        height: 40px;
        background-size: 30px;
        background-position: center;
        cursor: pointer;
        display: block;
      }

      header {
        padding: 15px 20px;
      }

      header.sticky {
        padding: 10px 20px;
      }
    }

    img {
      margin-left: 24%;
    }
    .button{
      width: 0%;
      height: 1px;
      animation: sng 4s linear infinite;
      background-color:hotpink;
    }
    .button:hover{
      background-color:hotpink ;
      width: 25%;
      transition: 1s;
    }
  /* BUTTON1 */
  .button1{
      width: 0%;
      height: 1px;
      animation: sng 4s linear infinite;
      background-color:hotpink;
    }
    .button1:hover{
      background-color:hotpink ;
      width: 50%;
      transition: 1s;
    }
/* BUTTON2 */
.button{
      width: 0%;
      height: 1px;
      animation: sng 4s linear infinite;
      background-color:hotpink;
    }
    .button:hover{
      background-color:hotpink ;
      width: 100%;
      transition: 1s;
    }
    .button2{
      width: 0%;
      height: 1px;
      animation: sng 4s linear infinite;
      background-color: rgb(88, 214, 231);
    }
    .button2:hover{
      background-color:rgb(88, 214, 231) ;
      width: 75%;
      transition: 1s;
    }
    .button3{
      width: 0%;
      height: 1px;
      animation: sng 4s linear infinite;
      background-color: rgb(228, 125, 93);
    }
    .button3:hover{
      background-color: rgb(228, 125, 93) ;
      width: 75%;
      transition: 1s;
    }
    
  </style>
</head>

<body>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  </head>

  <body>

    <header>
      <a href="#" class="logo">Tark parthish</a>

      </div>

      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="#">Home</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">Follow us <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Instagram</a></li>
              <li class="sub-item"><a href="#">Facebook</a></li>
              <li class="sub-item"><a href="#">Reddit</a></li>
            </ul>
          </li>
          <li class="menu-item">

            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Sub Item 01</a></li>
              <li class="sub-item"><a href="#">Sub Item 02</a></li>
              <li class="sub-item"><a href="#">Sub Item 03</a></li>
              <li class="sub-item"><a href="#">Sub Item 04</a></li>
              <li class="sub-item more">
                <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">More Item 01</a></li>
                  <li class="more-item"><a href="#">More Item 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item"><a href="#">Services</a></li>
          <li class="menu-item"><a href="#">About</a></li>
          <li class="menu-item"><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>

    <section class="section-home">
      <h1>Welcome to <span style="color: hotpink;">Tark</span><span style="color: rgb(54, 177, 218);"> Parthish's
          website</span></h1>
    </section>
    </main>
    <section class="section-two">
      <h2 style="text-align:center;">CEO of Tark tecnical</h2>
      <img src="ambuja-cement-giant.jpg" alt="" srcset="">
      <div data-aos="flip-left">
        <h1 class="hover">About Tark:-</h1>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
          classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
          professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
          consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
          literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
          of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
          book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
          Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        <a href="card.php" class="coruse">View his coruses and source code</a>
        <br><br><br>
        <!--info of Parthish-->
        <div data-aos="flip-left">
          <h2 style="text-align:center;">CEO of parthish tecnical</h2>
          <img src="ambuja-cement-giant.jpg" alt="" srcset="">
          <h1 class="hover">About parthish:-</h1>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
            professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
            literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
            of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
            book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
            Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
          <button class="coruse">View his coruses and source code</button>
          <h2>Content We provide</h2>
          <p>HTML :-</p> <button class="button"><p hidden>--</p></button>
          <p>CSS :-</p> <button class="button1"><p hidden>--</p></button>
          <p>JAVA :-</p> <button class="button2"><p hidden>--</p></button>
          <p>C :-</p> <button class="button3"><p hidden>--</p></button>
          <h2>Our latest videoes</h2>
         
          </script>
          <footer>
            <div class="form">
              <h1>Get latest news about codeing by contact us on email <i class="far fa-paper-plane"></i> </h1>
              <form id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off">
                <input id="nameField" name="entry.1955020924" placeholder="Enter your name" type="text" required>
                <input id="emailField" name="entry.2084337029" placeholder="Enter your email" type="email" required>
                <input id="mobField" name="entry.260660730" placeholder="Enter your 10 Digit Phone Number" type="text"
                  pattern="^\d{10}$" required>


                </select>
                <button id="send" type="submit" class="common_btn">Register Now</button>
              </form>

              <h3 id="success-msg"
                style="text-align: center !important; margin-top:190px !important; display:none; color:hotpink"> Your
                Responce is recored</h3>  

              </form>
            </div><br><br>
    </section>

    <script>
      function postToGoogle() {
        var field1 = $("#nameField").val();
        var field2 = $("#emailField").val();
        var field3 = $("#mobField").val();
        var field4 = $("#cinema option:selected").text();

        if (field1 == "") {
          alert('Please Fill Your Name');
          document.getElementById("nameField").focus();
          return false;
        }
        if (field2 == "") {
          alert('Please Fill Your Email');
          document.getElementById("emailField").focus();
          return false;
        }
        if (field3 == "" || field3.length > 10 || field3.length < 10) {
          alert('Please Fill Your Mobile Number');
          document.getElementById("mobField").focus();
          return false;
        }
        $.ajax({
          url: "https://docs.google.com/forms/d/e/1FAIpQLSdyk51gz7NFhkPy015gtdHGIH8Xje8Fl5LNt3fopGlQqECW9A/formResponse?",
          data: { "entry.1955020924": field1, "entry.2084337029": field2, "entry.260660730": field3, },
          type: "POST",
          dataType: "xml",
          success: function (d) {
          },
          error: function (x, y, z) {

            $('#success-msg').show();
            $('#form').hide();

          }
        });
        return false;
      }
    </script>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
      });
    </script>
    </section>
  </body>
</html>
</html>