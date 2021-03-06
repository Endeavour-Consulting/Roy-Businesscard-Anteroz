<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Anteroz: Roy A. Hanssen" />
    <meta property="og:description" content="Superior-Premium Rum is a high-end Superior-Premium rum and the pinpoint 
    of Dominican endeavor." />
    <meta property="og:image" content="/images/profile-picture.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400i|Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/left-column.css">
    <link rel="stylesheet" href="./css/btn-panel.css">
    <link rel="stylesheet" href="./css/icons-panel.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/media.css">
    <title>Roy A. Hanssen</title>
  </head>
  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=867279866616605&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrap" class="main row">
      <div class="col half">
        <div class="profile">
          <div class="header">
            <div class="header-image">
              <img
                src="./images/background.jpg"
                alt="Roy A. Hanssen: header image">
            </div>
            <img src="./images/logo.png" alt="Roy A. Hanssen: Logo" class="logo">
          </div>
          <div class="content">
            <div class="user-picture">
              <img
                src="./images/profile-picture.png"
                alt="Roy A. Hanssen: profile picture">
            </div>
            <div class="profile_name text-center">
              <span>Roy A. Hanssen</span>
            </div>
            <div class="profile_description text-center">
              <span>Co-Founder & COO</span>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col half"
        id="rightCol">
        <div class="contact-menu">
          <ul>
            <li>
              <a
                target="_blank"
                href="https://www.anteroz.com/the-brand-en">
                <img
                  src="./images/icons/webpage.svg"
                  alt="Roy A. Hanssen: world wide web"
                  class="svg">
              </a>
            </li>
            <li>
              <a href="tel:+4790836399">
                <img
                  src="./images/icons/phone.svg"
                  alt="Roy A. Hanssen: call"
                  class="svg">
              </a>
            </li>
            <li>
              <a href="sms:+4790836399">
                <img
                  src="./images/icons/sms.svg"
                  alt="Roy A. Hanssen: sms"
                  class="svg">
              </a>
            </li>
            <li>
              <a href="mailto:roy@anteroz.com">
                <img
                  src="./images/icons/mail.svg"
                  alt="Roy A. Hanssen: mail"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="./files/Roy-A-Hanssen-business-card.vcf">
                <img
                  src="./images/icons/download.svg"
                  alt="Roy A. Hanssen: download"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="social-media">
          <ul>
            <li>
              <a
                id="btn-instagram"
                onclick="openModal('instagram')">
                <img
                  src="./images/icons/instagram.svg"
                  alt="Roy A. Hanssen: instagram"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-facebook"
                onclick="openModal('facebook')">
                <img
                  src="./images/icons/facebook.svg"
                  alt="Roy A. Hanssen: facebook"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-google"
                target="_blank"
                href="https://www.google.com.ua/search?q=Anteroz,+Pje.+Lucero,+1,+28047+Madrid,+%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F&ludocid=12181515388131447326#lrd=0xd4188036bf283e3:0xa90d6fb47f87921e,3">
                <img
                  src="./images/icons/google-review.svg"
                  alt="Roy A. Hanssen: google"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-youtube"
                target="_blank"
                href="https://www.youtube.com/watch?v=dVcav3uVNvE">
                <img
                  src="./images/icons/youtube.svg"
                  alt="Roy A. Hanssen: youtube"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-linkedin"
                target="_blank"
                href="https://www.linkedin.com/company/anteroz/">
                <img
                  src="./images/icons/linkedin.svg"
                  alt="Roy A. Hanssen: linkedin"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="btn-panel">
          <a
            class="btn"
            id="btn-shop"
            onClick="openModal('shop')">
            <span>Products</span>
          </a>
          <a
            class="btn"
            id="btn-members"
            onClick="openModal('members')">
            <span>Become member</span>
          </a>
          <a
            class="btn"
            id="btn-subscribe"
            onClick="openModal('subscribe')">
            <span>Subscribe</span>
          </a>
          <a
            class="btn"
            id="btn-about"
            onClick="openModal('about')">
            <span>News</span>
          </a>
          </a>
        </div>
      </div>

    </div>


      <div id="instagram" class="modal">

        <header>
          <div onclick="closeModal('instagram')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <!-- InstaWidget -->
          <a href="https://instawidget.net/v/user/anterozspirits" id="link-c762160e33389b87034bd8b27419e6d054d71783c61edb3ec8d598c11f76b3fd">@anterozspirits</a>
          <script src="https://instawidget.net/js/instawidget.js?u=c762160e33389b87034bd8b27419e6d054d71783c61edb3ec8d598c11f76b3fd&width=100%"></script>
        </div>

        <iframe width="320" height="440" data-src="https://instagram.com/p/qbq6fIJMVZ/embed" frameborder="0"></iframe>

      </div>

      <div id="facebook" class="modal">

        <header>
          <div onclick="closeModal('facebook')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <div class="fb-page-wrap">
            <div class="fb-page"
              data-href="https://www.facebook.com/anterozspirits"
              data-tabs="timeline"
              data-small-header="false"
              data-width="500"
              data-adapt-container-width="true"
              data-hide-cover="false"
              data-show-facepile="true">
              <blockquote
                cite="https://www.facebook.com/anterozspirits"
                class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/anterozspirits">Anteroz</a>
              </blockquote>
            </div>
          </div>
        </div>

      </div>

      <div id="shop" class="modal">

        <header>
          <div onclick="closeModal('shop')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/the-collection-en"></iframe>
        </div>

      </div>

      <div id="members" class="modal">

        <header>
          <div onclick="closeModal('members')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/members"></iframe>
        </div>

      </div>

      <div id="about" class="modal">

        <header>
          <div onclick="closeModal('about')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/anteroz-world"></iframe>
        </div>

      </div>

      <div id="subscribe" class="modal">

        <header>
          <div onclick="closeModal('subscribe')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <div style="padding: 30px">
            <iframe
              width="100%"
              height="100%"
              data-src="https://www.youtube.com/embed/dVcav3uVNvE"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen>
            </iframe>
          </div>
        </div>

      </div>

    <!-- Loader -->
    <div class="loader">
      <div class="loader_inner"></div>
    </div>

    <!-- Scripts -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/svg-img.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/tools.js"></script>
    <script src="./js/modal.js"></script>
  </body>
</html>
