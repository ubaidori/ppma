<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google" content="notranslate" />
    <title>Undangan Pernikahan</title>
    <meta
      property="og:image"
      content="{{ asset('storage/wedding/dimas2.jpg') }}"
    />
    <!-- cdn jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- boostrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      rel="icon"
      href="{{ asset('storage/wedding/dimas2.jpg') }}"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Great+Vibes&family=Lato:wght@400;700&family=Dancing+Script&=Caveat:wght@500&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Roboto", sans-serif;
        line-height: 1.6;
      }

      h1 {
        font-family: "Great Vibes", cursive;
      }

      h2 {
        font-family: "Dancing Script", cursive;
      }

      p {
        font-family: "Caveat", cursive;
      }

      audio {
        display: none;
      }

      #container {
        height: 180px;
        width: 180px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 24px;
        position: relative;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
        transition: 0.5s linear;
      }

      #disc {
        margin-left: 60px;
        margin-right: 20px;
        margin-top: 8px;
        margin-bottom: 20px;
      }

      #card {
        margin-top: 25px;
        margin-left: 25px;
        height: 50px;
        width: 50px;
        opacity: 0.5;
      }

      /* 1 */
      .top {
        background: url("https://img.freepik.com/premium-photo/concept-wedding-accessories-with-wedding-rings-white-wooden-background_185193-69932.jpg?w=2000")
          no-repeat center center;
        background-size: cover;
        height: 665px;
      }

      /* 3 */
      #date_time {
        background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-white-clean-floral-background-picture-image_1278785.jpg");
        background-size: cover;
        /* height: 1300px; */
      }

      /* 5 */
      #prewed {
        background: url("https://th.bing.com/th/id/OIP.Hphy6i0lumv_MxdE0loKhAHaD4?pid=ImgDet&amp;w=474&amp;h=248&amp;rs=1")
          no-repeat center center;
        background-size: cover;
        /* height: 1300px; */
      }

      /* 6 */
      #ucapan-doa {
        background: url("https://cdn.pixabay.com/photo/2016/03/29/15/28/flower-1288493_960_720.jpg")
          no-repeat center center;
        background-size: cover;
        /* height: 1300px; */
      }

      /* 7 */
      #gift {
        background: url("https://1.bp.blogspot.com/-VjXRQlM-FPA/XuDsvuN9GgI/AAAAAAAAF_4/qRQhfndGWFApxPa9DIWcgxn4ghk1rWiSwCLcBGAsYHQ/s1920/cat-air-biru.jpg")
          no-repeat center center;
        background-size: cover;
        /* height: 1300px; */
      }

      /* 8 */
      #special-thanks {
        background: url("https://e0.pxfuel.com/wallpapers/557/641/desktop-wallpaper-white-flower-white-floral.jpg")
          no-repeat center center;
        background-size: cover;
        /* height: 1300px; */
      }

      .scroll-icon {
        position: fixed;
        bottom: 50px;
        left: 50%;
        transform: translateX(-50%);
        cursor: pointer;
        opacity: 1;
        transition: opacity 0.3s ease-in-out, bottom 0.3s ease-in-out;
      }

      .scroll-icon.hidden {
        opacity: 0;
      }

      .swipe-text {
        position: absolute;
        bottom: 15px;
        left: 60%;
        transform: translate(-50%, -50%);
        font-size: 14px;
        opacity: 0;
        animation: moveUpDown 2s infinite;
      }

      @keyframes moveUpDown {
        0%,
        100% {
          transform: translate(-50%, -50%) translateY(-10px);
          opacity: 0;
        }

        50% {
          transform: translate(-50%, -50%) translateY(10px);
          opacity: 1;
        }
      }

      /* The actual timeline (the vertical ruler) */
      .timeline {
        position: relative;
        /* max-width: 1200px; */
        margin: 0 auto;
      }

      /* The actual timeline (the vertical ruler) */
      .timeline::after {
        content: "";
        position: absolute;
        width: 6px;
        background-color: white;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
      }

      /* Container around content */
      .container-timeline {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
      }

      /* The circles on the timeline */
      .container-timeline::after {
        content: "";
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: white;
        border: 4px solid #ff9f55;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
      }

      /* Place the container to the left */
      .left {
        left: 0;
      }

      /* Place the container to the right */
      .right {
        left: 50%;
      }

      /* Add arrows to the left container (pointing right) */
      .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
      }

      /* Add arrows to the right container (pointing left) */
      .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Fix the circle for containers on the right side */
      .right::after {
        left: -16px;
      }

      /* The actual content */
      .content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 6px;
      }

      /* Media queries - Responsive timeline on screens less than 600px wide */
      @media screen and (max-width: 600px) {
        /* Place the timelime to the left */
        .timeline::after {
          left: 31px;
        }

        /* Full-width containers */
        .container-timeline {
          width: 100%;
          padding-left: 70px;
          padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .container-timeline::before {
          left: 60px;
          border: medium solid white;
          border-width: 10px 10px 10px 0;
          border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
          left: 15px;
        }

        /* Make all right containers behave like the left ones */
        .right {
          left: 0%;
        }
      }
    </style>
    <!-- google font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Euphoria+Script&family=Marck+Script&family=Princess+Sofia&family=Rouge+Script&family=Square+Peg&display=swap"
      rel="stylesheet"
    />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    />

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  </head>

  <body oncontextmenu="return false">
    <div id="card" class="card fixed-top">
      <audio id="sound" preload="auto">
        <source
          src="/storage/song/urlThe 1975 - About You"
          type="audio/mp3"
          preload="auto"
        />
      </audio>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var sound = document.getElementById("sound");
          // Unmute and play once the page is loaded
          sound.muted = false;
          sound.play().catch(function (error) {
            console.log("Autoplay prevented:", error);
          });
        });
      </script>
      <!-- <audio id="sound" src="thismoment.mp3" preload="auto" controls></audio> -->
      <img
        id="disc"
        src="https://i.pinimg.com/originals/76/33/63/763363a3be941b93610d58f8fb54e638.png"
        alt=""
        height="35"
        width="35"
      />
    </div>

    <div class="fixed-top">
      <div class="output"></div>
    </div>

    <div class="fixed-top">
      <div class="text-center">
        <div
          class=""
          id="welcomeMessage"
          style="
            height: 665px;
            background-color: rgba(255, 255, 255, 0.8);
            padding-top: 200px;
          "
        >
          <h1 style="font-size: 60px">Fitri & Dimas</h1>
          <h2 style="font-size: 30px">Kepada Yth, Bapak/Ibu/Saudara/i</h2>
          <h2 style="font-size: 25px">Tamu</h2>
          <p>Silakan klik tombol di bawah untuk membuka undangan Pernikahan.</p>
          <button id="bukaUndangan" class="btn btn-secondary">
            Buka Undangan
          </button>
        </div>
      </div>
    </div>

    <script>
      // Ketika tombol "Buka Undangan" diklik
      document
        .getElementById("bukaUndangan")
        .addEventListener("click", function () {
          // Sembunyikan pesan selamat datang
          document.getElementById("welcomeMessage").style.display = "none";
          document.getElementById("content-of-main").style.display = "block";
          document.getElementById("title-pernikahan").style.display = "block";
          document.getElementById("date-wedding-1").style.display = "block";
          document.getElementById("loversname").style.display = "block";
          playAudioFirstly(0);
          runIntroPage();
        });
    </script>

    <div class="top p-5 text-center m-0">
      <h2
        class=""
        style="margin-top: 200px; display: none"
        id="title-pernikahan"
      >
        Pernikahan
      </h2>
      <h1 style="font-size: 60px; display: none" id="loversname">
        Fitri & Dimas
      </h1>
      <h2 style="font-size: 30px; display: none" id="date-wedding-1"></h2>
    </div>

    <div style="display: none" id="content-of-main">
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <div class="scroll-icon" id="scrollIcon">
        <pre class="m-0 p-0 swipe-text">Swipe Up </pre>
        <i class="fa fa-chevron-down"></i>
        <i class="fa fa-chevron-down"></i>
        <i class="fa fa-chevron-down"></i>
      </div>
      <script>
        const scrollIcon = document.getElementById("scrollIcon");

        scrollIcon.addEventListener("click", () => {
          // Scroll smoothly to the next section
          window.scrollBy({
            top: window.innerHeight,
            behavior: "smooth",
          });

          // Hide the scroll icon after clicking
          scrollIcon.style.display = "none";
        });

        // Show the scroll icon when scrolling starts
        window.addEventListener("scroll", () => {
          if (window.scrollY > 100) {
            scrollIcon.style.display = "none";
          } else {
            scrollIcon.style.display = "block";
          }
        });
      </script>

      <div
        id="ayat"
        class="quote-1 p-3 text-center bg-light m-0"
        style="display: none"
      >
        <div class="">
          <img
            class="img-fluid"
            height="100px"
            width="100px"
            style="display: none"
            id="dove"
            src="https://png.pngtree.com/png-clipart/20220102/original/pngtree-pigeon-couple-png-image_6990814.png"
            alt=""
          />
        </div>
        <h2 id="tanda-1" class="fs-2 my-0 p-0" style="display: none">
          Pasangan
        </h2>
        <h1
          id="tanda-2"
          class="my-0 p-0"
          style="display: none; font-size: 45px"
        >
          Mempelai
        </h1>
        <p id="tanda-3" style="display: none; font-size: 18px">
          Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah
          kami akan menyelenggarakan acara pernikahan anak kami :
        </p>

        <div class="mx-3" style="margin-top: 50px">
          <div class="row">
            <div class="col-md-4 m-0 p-0">
              <div class="card text-center shadow-lg bg-body-tertiary rounded">
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas.jpg') }}"
                >
                  <img
                    id="foto-profil-1"
                    style="display: none"
                    class="card-img-top img-fluid p-3 pb-5"
                    src="{{ asset('storage/wedding/dimas.jpg') }}"
                    alt="..."
                  />
                </a>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card-body text-center m-0 p-0">
                <h1
                  class="card-title text-secondary"
                  id="nickname-profil-1"
                  style="display: none; font-size: 40px"
                >
                  Fitri
                </h1>
                <h2
                  class="card-subtitle fw-bold"
                  id="fullname-profil-1"
                  style="display: none; font-size: 30px"
                >
                  Buana Safitri
                </h2>
                <div class="position-relative mb-3">
                  <hr
                    style="display: none"
                    id="hr-1"
                    class="border border-secondary border-2 opacity-50 position-absolute top-0 start-50 translate-middle-x"
                    width="50%"
                  />
                </div>
                <div
                  class="mb-5 mt-0 p-0"
                  id="family-profil-1"
                  style="display: none"
                >
                  <p class="m-0 p-0" style="font-size: 14px; font-weight: bold">
                    Putri anak pertama
                  </p>
                  <p class="m-0 p-0" style="font-size: 18px">
                    Masek<br />
                    & <br />Masjuniya
                  </p>
                </div>
              </div>
            </div>

            <!--<div class="col-md-4">-->

            <!--</div>-->
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card-body text-center">
                <h1
                  class="card-title text-secondary"
                  id="nickname-profil-2"
                  style="display: none; font-size: 40px"
                >
                  Dimas
                </h1>
                <h2
                  class="card-subtitle fw-bold"
                  id="fullname-profil-2"
                  style="display: none; font-size: 30px"
                >
                  Moh. Dimas Hariyanto
                </h2>
                <div class="position-relative mb-3">
                  <hr
                    style="display: none"
                    id="hr-2"
                    class="border border-secondary border-2 opacity-50 position-absolute top-0 start-50 translate-middle-x"
                    width="50%"
                  />
                </div>
                <div
                  class="mb-5 mt-0 p-0"
                  id="family-profil-2"
                  style="display: none"
                >
                  <p class="m-0 p-0" style="font-size: 14px; font-weight: bold">
                    Putra anak pertama
                  </p>
                  <p class="m-0 p-0" style="font-size: 18px">
                    Ervin Putro Adi<br />
                    & <br />Yayan Suyanti
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div
                class="card text-center mt-5 shadow-lg bg-body-tertiary rounded"
              >
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas.jpg') }}"
                >
                  <img
                    id="foto-profil-2"
                    style="display: none"
                    class="card-img-top img-fluid p-3 pb-5"
                    src="{{ asset('storage/wedding/dimas.jpg') }}"
                    alt="... "
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="date_time" class="text-center bg-light">
        <img
          id="ring"
          style="display: none"
          height="100"
          width="100"
          class="img-fluid mt-5"
          src="https://akad.in/storage/images/Gclvp0vneoJ5uIGgONVFNfRXgyym4vVOsA5awfGR.png"
          alt="wedding ring"
        />
        <h2
          class="mb-4"
          id="waktu-tempat"
          style="display: none; font-size: 35px"
        >
          Waktu & Tempat
        </h2>
        <div id="card-time" style="display: none">
          <div
            class="card d-inline-flex"
            style="
              width: 5rem;
              background: linear-gradient(to bottom, #e6f7ff, white);
            "
          >
            <div class="card-body">
              <div class="m-0 p-0" style="display: none" id="days-card">
                <h5 id="days" class="card-title">00</h5>
                <p class="card-title">Hari</p>
              </div>
            </div>
          </div>
          <div
            class="card d-inline-flex"
            style="
              width: 5rem;
              background: linear-gradient(to bottom, #e6f7ff, white);
            "
          >
            <div class="card-body">
              <div class="m-0 p-0" style="display: none" id="hours-card">
                <h5 id="hours" class="card-title">00</h5>
                <p class="card-title">Jam</p>
              </div>
            </div>
          </div>
          <div
            class="card d-inline-flex"
            style="
              width: 5rem;
              background: linear-gradient(to bottom, #e6f7ff, white);
            "
          >
            <div class="card-body">
              <div class="m-0 p-0" style="display: none" id="minutes-card">
                <h5 id="minutes" class="card-title">00</h5>
                <p class="card-title">Menit</p>
              </div>
            </div>
          </div>
          <div
            class="card d-inline-flex"
            style="
              width: 5rem;
              background: linear-gradient(to bottom, #e6f7ff, white);
            "
          >
            <div class="card-body">
              <div class="m-0 p-0" style="display: none" id="seconds-card">
                <h5 id="seconds" class="card-title">00</h5>
                <p class="card-title">Detik</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container pb-5" id="ayat-2" style="display: none">
          <div
            class="card-body mt-4 card bg-white"
            style="
              border-radius: 20px;
              background: linear-gradient(to bottom, #e6f7ff, white);
            "
          >
            <p style="font-size: 18px" class="text-center">
              "Dan Di Antara Tanda-Tanda (Kebesaran)-Nya Ialah Dia Menciptakan
              Pasangan-Pasangan Untukmu Dari Jenismu Sendiri, Agar Kamu
              Cenderung Dan Merasa Tenteram Kepadanya, Dan Dia Menjadikan Di
              Antaramu Rasa Kasih Dan Sayang. Sesungguhnya Pada Yang Demikian
              Itu Benar-Benar Terdapat Tanda-Tanda (Kebesaran Allah) Bagi Kaum
              Yang Berpikir."
            </p>
            <h1
              style="display: none; font-size: 20px; font-weight: bold"
              id="ayat-pasangan-1"
            >
              - Ar-Rum 21 -
            </h1>
          </div>
        </div>
      </div>

      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Great+Vibes&display=swap"
        rel="stylesheet"
      />
      <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      />

      <div id="akad-resepsi" class="bg-light">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6">
              <div
                class="lokasi pb-5"
                id="weddinglokasidetail1"
                style="display: none"
              >
                <div
                  class="card d-inline-flex mt-5"
                  style="
                    width: 100%;
                    background: linear-gradient(to bottom, #faf9f6, white);
                  "
                >
                  <div class="card-body shadow-lg p-3 bg-body-tertiary rounded">
                    <h1 class="card-title fw-bold" style="font-size: 40px">
                      Akad Nikah
                    </h1>
                    <hr />
                    <div>
                      <p
                        style="font-size: 17px"
                        class="m-0 p-0"
                        id="day-wedding-1"
                      >
                        -
                      </p>
                      <h2
                        style="font-size: 25px"
                        class="m-0 p-0"
                        id="date-wedding-2-1"
                      >
                        - - -
                      </h2>
                      <p style="font-size: 17px" class="m-0 p-0">
                        Pukul 19:30 WIB - 22:00 WIB
                      </p>
                      <h2 style="font-size: 25px" class="m-0 p-0">
                        di rumah mempelai wanita
                      </h2>
                      <p style="font-size: 17px" class="m-0 p-0">
                        Gapurana - Talango
                      </p>
                    </div>
                    <a href="https://maps.app.goo.gl/zLgJxvohGDKcqG7e6" type="button" class="btn btn-secondary my-5">
                      <i class="fa fa-map" style="font-size: 18px"></i>
                      Lihat Lokasi
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div
                class="lokasi pb-5 text-center"
                id="weddinglokasidetail2"
                style="display: none"
              >
                <div
                  class="card d-inline-flex mt-5"
                  style="
                    width: 100%;
                    display: none;
                    background: linear-gradient(to bottom, #faf9f6, white);
                  "
                >
                  <div class="card-body shadow-lg p-3 bg-body-tertiary rounded">
                    <h1 class="card-title fw-bold" style="font-size: 40px">
                      Resepsi Pernikahan
                    </h1>
                    <hr />
                    <div>
                      <p
                        style="font-size: 17px"
                        class="m-0 p-0"
                        id="day-wedding-2"
                      >
                        -
                      </p>
                      <h2
                        style="font-size: 25px"
                        class="m-0 p-0"
                        id="date-wedding-2-2"
                      >
                        - - -
                      </h2>
                      <p style="font-size: 17px" class="m-0 p-0">
                        Pukul 14:00 WIB - 16:00 WIB
                      </p>
                      <h2 style="font-size: 25px" class="m-0 p-0">
                        di rumah mempelai wanita
                      </h2>
                      <p style="font-size: 17px" class="m-0 p-0">
                        Gapurana, Talango
                      </p>
                    </div>
                    <a href="https://maps.app.goo.gl/zLgJxvohGDKcqG7e6" type="button" class="btn btn-secondary my-5">
                      <i class="fa fa-map" style="font-size: 18px"></i>
                      Lihat Lokasi
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="prewed" class="quote-1 p-3 text-center bg-light m-0">
        <div class="mb-5">
          <div class="">
            <img
              id="bucket"
              class="img-fluid"
              height="100px"
              width="100px"
              style="display: none"
              src="https://www.freepnglogos.com/uploads/flower-bouquet-png/bouquet-ywllow-flowers-png-transparent-images-download-5.png"
              alt=""
            />
          </div>
          <h2 id="momen" class="fs-2 my-0 p-0" style="display: none">Momen</h2>
          <h1
            id="bahagia-kami"
            class="my-0 p-0"
            style="display: none; font-size: 45px"
          >
            Bahagia Kami
          </h1>
          <p id="pernyataan-prewed" style="display: none; font-size: 18px">
            Kamu adalah sahabat dan kekasihku, dan<br />aku tidak tahu sisi mana
            darimu yang paling<br />aku kagumi. Aku menghargai setiap
            <br />perjalanan yg telah kita lalui dan aku siap<br />mengarungi
            cerita baru bersamamu
          </p>
          <div
            id="photo-prewed"
            class="container text-center pb-5"
            style="display: none"
          >
            <div class="row">
              <div class="col m-0 p-1">
                <a
                  data-fancybox="gallery"
                  href="https://akad.in/storage/wedding/foto11756626483.jpg"
                >
                  <img
                    id=""
                    style=""
                    class="img-fluid"
                    src="https://akad.in/storage/wedding/foto11756626483.jpg"
                    alt="... "
                  />
                </a>
              </div>
              <div class="col m-0 p-1">
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas2.jpg') }}"
                >
                  <img
                    id=""
                    style=""
                    class="img-fluid"
                    src="{{ asset('storage/wedding/dimas2.jpg') }}"
                    alt="... "
                  />
                </a>
              </div>
              <div class="col m-0 p-1">
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas2.jpg') }}"
                >
                  <img
                    id=""
                    style=""
                    class="img-fluid"
                    src="{{ asset('storage/wedding/dimas2.jpg') }}"
                    alt="... "
                  />
                </a>
              </div>
              <div class="col m-0 p-1">
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas2.jpg') }}"
                >
                  <img
                    id=""
                    style=""
                    class="img-fluid"
                    src="{{ asset('storage/wedding/dimas2.jpg') }}"
                    alt="... "
                  />
                </a>
              </div>
              <div class="col m-0 p-1">
                <a
                  data-fancybox="gallery"
                  href="{{ asset('storage/wedding/dimas2.jpg') }}"
                >
                  <img
                    id=""
                    style=""
                    class="img-fluid"
                    src="{{ asset('storage/wedding/dimas2.jpg') }}"
                    alt="... "
                  />
                </a>
              </div>
            </div>
            <div class="row"></div>
          </div>
        </div>
      </div>

      <div class="m-0 p-0">
        <div class="text-center bg-light m-0 py-5" id="special-thanks">
          <h2 class="m-0 p-0" style="font-size: 20px">Terimakasih</h2>
          <h1 style="font-size: 60px">Fitri & Dimas</h1>
          <h2 style="font-size: 20px">Keluarga Besar</h2>
          <p style="font-size: 15px">Masek & Masjuniya</p>
          <p class="m-0 p-0" style="font-size: 15px">
            Ervin Putro Adi & Yayan Suyanti
          </p>
        </div>
        <div
          class="text-center d-flex justify-content-center pt-3 m-0 bg-light"
        >
          <div class="d-flex m-0 p-0 row">
            <div class="col-md-12 m-0 p-0"></div>
            <div class="col-md-12">
              <a
                href="https://api.whatsapp.com/send?phone=6285232689199&text=Saya%20mau%20pesan%20undangannya%20kak"
                class="fa fa-whatsapp mx-2"
                aria-hidden="true"
                style="color: inherit; text-decoration: none"
              ></a>
              <a
                href="https://www.instagram.com/ubaid_ori"
                class="fa fa-instagram"
                aria-hidden="true"
                style="color: inherit; text-decoration: none"
              ></a>
              {{-- <style>
                .shopee-icon {
                  width: 300px;
                  height: 300px;
                  border-radius: 50%;
                  animation: blink 2s infinite;
                }

                @keyframes blink {
                  0%,
                  100% {
                    opacity: 1;
                  }
                  50% {
                    opacity: 0;
                  }
                }
              </style> --}}
              <!-- <a
                href="/our-shopee"
                class="shopee-icon"
                aria-hidden="true"
                style="color: inherit; text-decoration: none">
              >
                <img
                  src="https://akad.in/storage/images/tLLnqpZshcVavozaB9MH136OTalLrPWAFNbJKSdN.png"
                  style="
                    width: 50px;
                    height: 50px;
                    padding-bottom: 0px;
                    margin: 0;
                  "
                />
              </a> -->
            </div>
          </div>
          <div class="d-flex m-0 p-0 translate-middle-x" style="height: 50px">
            <div class="vr m-0 p-0"></div>
          </div>
          <div class="d-flex row m-0 p-0">
            <div class="col-md-12 m-0 p-0"></div>
            <p class="col-md-12 m-0 p-0">
              Created By digitalsolutions.co.id <br />
              All Rights Reserved
            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      // static file
      var flag = 0;
      const audio = $("#sound")[0];
      // call functions firstly
      // playAudioFirstly(0);

      function getMyWeddingDate(datetext) {
        let text = datetext;
        const myArray = text.split("-");
        var birthdateVal = myArray[1] + "/" + myArray[2] + "/" + myArray[0];
        console.log(birthdateVal);
        var mydate = new Date(birthdateVal);
        const options = {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
        };
        var indonesiadate = mydate.toLocaleDateString("id", options);
        var arrDate = indonesiadate.split(",");
        return [mydate, indonesiadate, arrDate];
      }

      // functions

      var x = setInterval(function () {
        var mydatestr = "Dec 12, 2022 00:00:00";
        // let text = 2025-09-23;

        const [
          solemnizationmydate,
          solemnizationindonesiadate,
          solemnizationarrDate,
        ] = getMyWeddingDate("2024-04-14");
        $("#day-wedding-1").text(solemnizationarrDate[0]);
        $("#date-wedding-2-1").text(solemnizationarrDate[1]);

        const [mydate, indonesiadate, arrDate] = getMyWeddingDate("2025-12-10");
        $("#day-wedding-2").text(arrDate[0]);
        $("#date-wedding-2-2").text(arrDate[1]);

        const [ngunduhmydate, ngunduhindonesiadate, ngunduharrDate] =
          getMyWeddingDate("2023-10-08");
        $("#day-wedding-3").text(ngunduharrDate[0]);
        $("#date-wedding-2-3").text(ngunduharrDate[1]);

        var countDownDate = mydate.getTime();
        var month = mydate.getMonth() + 1;
        $("#date-wedding-1").text(
          mydate.getDate() + " . " + month + " . " + mydate.getFullYear()
        );
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        if (days < 10) days = "0" + days;
        var hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        if (hours < 10) hours = "0" + hours;
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        if (minutes < 10) minutes = "0" + minutes;
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if (seconds < 10) seconds = "0" + seconds;
        $("#days").text(days);
        $("#hours").text(hours);
        $("#minutes").text(minutes);
        $("#seconds").text(seconds);
      }, 1000);

      function setMymargin() {
        const output = document.querySelector(".output");
        output.innerHTML = `scrollTop: ${window.scrollY} <br>
                                scrollLeft: ${window.scrollX} <br>
                                `;
      }

      function playAudio() {
        $("#disc").animate(
          {
            "margin-left": "7px",
            transform: "rotate(360deg)",
          },
          "slow"
        );
        audio.play();
      }

      function stopAudio() {
        $("#disc").animate(
          {
            "margin-left": "60px",
            transform: "rotate(360deg)",
          },
          "slow"
        );
        audio.pause();
      }

      function checkMarginLeft() {
        var p = document.getElementById("disc");
        var style = p.currentStyle || window.getComputedStyle(p);
        return style;
      }

      function playAudioFirstly(position) {
        var style = checkMarginLeft();
        var y = window.scrollY;
        if (
          flag == 0 &&
          y >= position &&
          style.marginLeft.toString() == "60px"
        ) {
          flag = 1;
          $("#disc").animate(
            {
              "margin-left": "7px",
              transform: "rotate(360deg)",
            },
            "slow"
          );

          setTimeout(function () {
            audio.play();
          }, 1);
        }
      }

      // document ready,scroll,ets
      $(document).ready(function () {
        $("#disc").click(function () {
          var style = checkMarginLeft();
          if (style.marginLeft.toString() == "60px") {
            playAudio();
          } else {
            stopAudio();
          }
        });
      });

      let list_feature_json = {
        intro: 1,
        "profil-1": 1,
        "profil-2": 1,
        timeline: 1,
        "photo-prewed": 1,
        "live-streaming": 0,
        "our-story": 0,
        "ucapan-doa": 0,
        "wedding-gift": 0,
      };

      let list_feature_sequence = Object.keys(list_feature_json).filter(
        (key) => list_feature_json[key] == 1
      );

      function runIntroPage() {
        $("#ayat").fadeIn(100);
        $("#dove").fadeIn(2500);
        $("#tanda-1").slideDown(2500);
        $("#tanda-2").slideDown(1500);
        $("#tanda-3").slideDown(1000);
        // Jalankan aksi ini setelah 2500 milidetik
        setTimeout(function () {
          list_feature_sequence = list_feature_sequence.filter(
            (item) => item !== "intro"
          );
          console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
        }, 2500);

        $("#foto-profil-1").fadeIn(5000);
        $("#image-and").fadeIn(10000);
        $("#nickname-profil-1").animate(
          {
            marginTop: "125px",
          },
          {
            duration: 2500,
            start: function () {
              $(this).css("display", "block");
            },
          }
        );
        $("#nickname-profil-2").animate(
          {
            marginTop: "40px",
          },
          {
            duration: 5200,
            start: function () {
              $(this).css("display", "block");
            },
          }
        );

        // Jalankan aksi ini setelah 2500 milidetik
        setTimeout(function () {
          list_feature_sequence = list_feature_sequence.filter(
            (item) => item !== "profil-1"
          );
          console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
        }, 2500);
      }

      $(document).scroll(function () {
        // setMymargin();
        var y = window.scrollY;

        if (list_feature_sequence[0] === "profil-2") {
          $("#hr-1,#hr-2").fadeIn(5000);
          $("#fullname-profil-1,#fullname-profil-2").animate(
            {
              marginLeft: "0px",
            },
            {
              duration: 1000,
              start: function () {
                $("#fullname-profil-1,#fullname-profil-2").fadeIn(1000);
              },
            }
          );
          $("#family-profil-1,#family-profil-2").slideDown(3000);
          $("#foto-profil-2").fadeIn(10000);

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "profil-2"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }

        if (list_feature_sequence[0] === "timeline") {
          $("#card-time").fadeIn(100);
          $("#ayat-2").fadeIn(100);
          $("#ring").show(500);
          $("#waktu-tempat").fadeIn(8000);
          $("#days-card,#hours-card,#minutes-card,#seconds-card").show(500);
          $("#ayat-pasangan-1").fadeIn(8000);

          $("#weddinglokasidetail1").fadeIn(7000);
          $("#weddinglokasidetail2").fadeIn(8000);
          $("#weddinglokasidetail3").fadeIn(9000);

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "timeline"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }

        // // batas

        if (list_feature_sequence[0] === "photo-prewed") {
          $("#bucket").fadeIn(2500);
          $("#momen").slideDown(2500);
          $("#bahagia-kami").slideDown(1500);
          $("#pernyataan-prewed").slideDown(1000);
          $("#photo-prewed").slideDown(10000, function () {
            // Callback function jika diperlukan setelah slideDown selesai
            // Fungsi ini tetap berjalan ketika animasi selesai
            console.log("Animasi photo-prewed selesai.");
          });

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "photo-prewed"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }

        if (list_feature_sequence[0] === "live-streaming") {
          $("#live-streaming").fadeIn(10000, function () {
            // Callback function jika diperlukan setelah fadeIn selesai
            // Fungsi ini tetap berjalan ketika animasi selesai
            console.log("Animasi live-streaming selesai.");
          });

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "live-streaming"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }
        if (list_feature_sequence[0] === "our-story") {
          $("#our-story").fadeIn(10000, function () {
            // Callback function jika diperlukan setelah fadeIn selesai
            // Fungsi ini tetap berjalan ketika animasi selesai
            console.log("Animasi our-story selesai.");
          });

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "our-story"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }

        if (list_feature_sequence[0] === "ucapan-doa") {
          $("#ucapan-doa").fadeIn(10000, function () {
            // Callback function jika diperlukan setelah fadeIn selesai
            // Fungsi ini tetap berjalan ketika animasi selesai
            console.log("Animasi ucapan-doa selesai.");
          });

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "ucapan-doa"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);
        }
        if (list_feature_sequence[0] === "wedding-gift") {
          $("#wedding-gift").slideDown(10000, function () {
            // Callback function jika diperlukan setelah fadeIn selesai
            // Fungsi ini tetap berjalan ketika animasi selesai
            console.log("Animasi wedding-gift selesai.");
          });

          // Jalankan aksi ini setelah 2500 milidetik
          setTimeout(function () {
            list_feature_sequence = list_feature_sequence.filter(
              (item) => item !== "wedding-gift"
            );
            console.log(list_feature_sequence[0]); // Menampilkan item berikutnya di console
          }, 2500);

          $("#bear").fadeIn(20000);
          $("#thanks-you")
            .css({
              display: "block",
              fontSize: "1px",
              opacity: 0, // Mulai dari keadaan transparan
            })
            .animate(
              {
                fontSize: "14px", // Akhiri dengan skala normal
                opacity: 1, // Akhiri dengan keadaan penuh terlihat
              },
              10000
            ); // Durasi animasi dalam milidetik (20 detik)
          $("#transfer-rekening").fadeIn(20000);
          $("#kirim-kado").fadeIn(20000);
          $("#konfirmasi").fadeIn(20000);
        }
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script>
      // Membuat fungsi untuk menyembunyikan dan menghapus elemen
      function hideAndRemoveElement() {
        var element = document.getElementById("contentend");
        if (element) {
          // Menghapus elemen dari DOM
          element.parentNode.removeChild(element);
        }
      }

      // Panggil fungsi untuk menyembunyikan dan menghapus elemen
      window.onload = function () {
        hideAndRemoveElement();
      };
    </script>

    <div id="contentend">
      <script>
        var host = "akad.in";
        // Jika host bukan akad.in atau 127.0.0.1:8000 return akad.in
        if (host !== "akad.in" && host !== "127.0.0.1:8000") {
          window.location.href = "https://akad.in";
        }
      </script>
    </div>

    <script>
      function translatePage() {
        const elements = document.querySelectorAll("#content *"); // Memilih semua elemen di dalam div dengan id 'content'
        const targetLanguage = "en"; // Inggris

        elements.forEach((element) => {
          const text = element.innerText;
          // Request ke Google Translate API untuk menerjemahkan teks
          fetch(
            `https://translate.googleapis.com/translate_a/single?client=gtx&sl=id&tl=${targetLanguage}&dt=t&q=${encodeURI(
              text
            )}`
          )
            .then((response) => response.json())
            .then((data) => {
              const translatedText = data[0][0][0]; // Mendapatkan teks terjemahan
              element.innerText = translatedText;
            })
            .catch((error) => {
              console.error("Error:", error);
            });
        });
      }
      translatePage();
    </script>
  </body>
</html>