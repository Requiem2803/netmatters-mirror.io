<footer>
   <footer>
            <div class="follow-us">
            <img class="footer-logo" src="img/netmatters-logo.webp" alt="Netmatters Logo">
            <h4>Follow us on:</h4>
            <button><img src="icons/facebook.png"></button>
            <button><img src="icons/linkedin2.png"></button>
            <button><img src="icons/twitter.png"></button>
            <button><img src="icons/instagram.png"></button>
            </div>
            <div class="about">
            <h4>About Netmatters</h4>
            <ul>
                <li>News</li>
                <li>Our Careers</li>
                <li>Our Team</li>
                <li>Contact Us</li>
                <li>Privacy Policy</li>
                <li>Cookie Policy</li>
                <li>Data Retention</li>
                <li>CCTV Policy</li>
                <li>Enviromental Policy</li>
                <li>Terms &amp; Conditions</li>
            </ul>
            </div>
            <div class="services">
            <h4>Our Services</h4>
            <ul>
                <li>Bespoke Software</li>
                <li>IT Support</li>
                <li>Digital Marketing</li>
                <li>Telecoms Services</li>
                <li>Web Design</li>
                <li>Cyber Security</li>
                <li>Developer Training</li>
            </ul>
            </div>
            <div class="industries">
            <h4>Our Industries</h4>
            <ul>
                <li>Financial Services</li>
                <li>Construction</li>
                <li>Retail &amp; E-Commerce</li>
                <li>Non-Profits</li>
                <li>SME's</li>
                <li>Healthcare</li>
                <li>Education &amp; Training</li>
                <li>Travel &amp; Leisure</li>
                <li>Manufactoring &amp; Offshore</li>
            </ul>
            </div>
            <div class="locations">
            <h4>Locations</h4>
            <ul>
                <li>Cambride Office</li>
                <li>Wymondham Office</li>
                <li>Great Yarmouth Office</li>
            </ul>
            </div>
            <div class="copyright">
            <p>&copy; Copyright Netmatters 2025. All rights reserved. - <a>Sitemap</a></p>
            </div>
        </footer>
</footer>

<!-- Cookie Banner (visible on all pages) -->
<div id="cookie-banner" style="display: none;">
  <p>This website uses cookies to ensure you get the best experience on our website. <a href="#">Learn more</a></p><br>
  <button id="accept-cookies">Got it!</button>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/carousel.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/cookieAlert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-js/1.3.0/sticky.min.js"></script>
<script>
  // Scroll behavior
  let lastScrollTop = 0;
  const header = document.querySelector('header');

  window.addEventListener('scroll', function () {
      let scrollTop = window.scrollY || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
          header.classList.add('header-hidden');
      } else {
          header.classList.remove('header-hidden');
      }
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
</script>
</body>
</html>