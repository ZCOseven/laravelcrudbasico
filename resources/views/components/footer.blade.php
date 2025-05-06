<style>
    /* Bloque footer */
    .footer {
        background-color: #222;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    /* Elemento footer__content */
    .footer__content {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Elemento footer__text */
    .footer__text {
        font-size: 14px;
        margin-bottom: 20px;
    }

    /* Elemento footer__social-links */
    .footer__social-links {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    /* Elemento footer__social-item */
    .footer__social-item {
        margin-right: 15px;
    }

    /* Elemento footer__social-link */
    .footer__social-link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    /* Modificador para footer__social-link en hover */
    .footer__social-link:hover {
        color: #ff6347;
    }
</style>

<footer class="footer">
    <div class="footer__content">
        <p class="footer__text">© 2025 Crud Basico. Derechos a quien le corresponda.</p>
        <ul class="footer__social-links">
            <li class="footer__social-item"><a href="#" class="footer__social-link">Facebook</a></li>
            <li class="footer__social-item"><a href="#" class="footer__social-link">Twitter</a></li>
            <li class="footer__social-item"><a href="#" class="footer__social-link">Instagram</a></li>
        </ul>
    </div>
</footer>