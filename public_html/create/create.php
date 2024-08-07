<?php include '../include/header.php'; ?>

<div class="container">
    <div class="create__blok">
        
            <img src="/image/createPage.png" alt="create page">
            <h2>Страница в разработке...</h2>
      
        <p>Мы работаем над тем, чтобы сделать этот раздел доступным для вас. Пожалуйста, зайдите позже.</p>
    </div>
    <div class="back__home">
        <a href="/index.php">Вернуться на главную страницу</a>
    </div>
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