<?php include 'include/header.php'; ?>

  <section class="header">
    <div class="header__blok">
      <div class="container">
        <h1>VANMOOF X4</h1>
        <div class="button__blok">
          <p>Rule the road with the VanMoof x4. Perfect for controlled
            cruising and longer rides.</p>
          <button id="openModalBtn" type="button" onclick="modalOpen();">Order now</button>
        </div>
      </div>
    </div>
  </section>

  <section class="mobil__banner">
    <div class="blok__image">
      <img src="/image/fon.webp" alt="fon company VANMOOF">
  </section>
  </div>


  <section id="modal" class="modal">
    <form action="/send/mail-recaptcha-enabled.php" id="form1" method="post">
      <div class="modal__content">
        <span class="close" onclick="modalClose();">&times;</span>
        <h5>Join the waitlist</h5>
        <p>Join the waitlist and get priority access & insider benefits.</p>
        <label for="email">Email*
          <input type="email" name="email" placeholder="Email" required>
        </label>
        <div class="checkbox__blok">
          <input type="checkbox" name="checkbox" id="checkbox" value="I agree to privacy policy." required>
          <label for="checkbox">I agree to privacy policy.</label>
        </div>
        <div>
          <button class="btn" type="submit">Send me updates</button>
        </div>
      </div>
    </form>
  </section>

  <script src="/JS/openForm.js"></script>
  <script src="/JS/mail.js"></script>
  <script src="/JS/burger.js"></script>
</body>

</html>