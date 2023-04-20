<?php
require_once('header.php');
?>

<main class="main">
    <div class="container">
        <h1>Nous contacter</h1>
        <form action="x" class="contact-form">
            <label for="name" class="first-part">Votre nom</label>
            <input class="placeholder first-part" type="text" name="nom" id="name" required placeholder="Entrez votre nom">
            <label for="mail" class="second-part">Votre e-mail</label>
            <input class="placeholder second-part" type="email" name="mail" id="mail" required placeholder="Entrez votre adresse e-mail">
            <label for="msg" class="last-part">Votre message</label>
            <textarea id="msg" class="placeholder last-part" required placeholder="Tapez votre message"></textarea>
            <button class="last-part btn" type=submit>Envoyer
                <svg height="22" viewBox="0 0 22 22" width="22" xmlns="http://www.w3.org/2000/svg"><g stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(-1 -1)"><path d="m22 12a10 10 0 1 1 -10-10 10 10 0 0 1 10 10z"/><path d="m12 16 4-4-4-4"/><path d="m8 12h8"/></g></svg>
            </button>
        </form>
    </div>
</main>

<?php
require_once('footer.php');
?>