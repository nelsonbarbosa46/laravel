
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/"
                    class="{{ request()->is('/') ? 'active' : '' }}">
                        Ínicio
                    </a>
                </li>
                <li>
                    <a href="/about"
                    class="{{ request()->is('about') ? 'active' : '' }}">
                        Galeria
                    </a>
                </li>
                <li>
                    <a href="#"
                    class="{{ request()->is('contact') ? 'active' : '' }}">
                        Contactos
                    </a>
                </li>
            </ul>
        </nav>
    </header>