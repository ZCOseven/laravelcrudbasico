<style>
    /* Bloque header */
    .header {
        background-color: #333;
        padding: 20px;
    }

    /* Elemento header__nav */
    .header__nav {
        display: flex;
        justify-content: center;
    }

    /* Elemento header__list */
    .header__list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    /* Elemento header__item */
    .header__item {
        margin-right: 20px;
    }

    /* Elemento header__link */
    .header__link {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    /* Modificador para header__link en hover */
    .header__link:hover {
        color: #ff6347;
    }
</style>

<header class="header">
    <nav class="header__nav">
        <ul class="header__list">
            <li class="header__item"><a href="{{ route('home') }}" class="header__link">Inicio</a></li>
            <li class="header__item"><a href="{{ route('about') }}" class="header__link">Nosotros</a></li>
            <li class="header__item"><a href="{{ route('admin.login') }}" class="header__link">Login</a></li>
        </ul>
    </nav>
</header>
