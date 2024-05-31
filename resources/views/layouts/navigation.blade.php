<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-left">
                <a class="logo" href="{{route('dashboard')}}">
                    <img src="{{ asset('images/logo.svg') }}" alt="Harvy Market"/>
                </a>
                <a class="header-tel" href="tel:0800555555">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 16 16" viewBox="0 0 16 16">
                        <path d="M12.7 9.9c-.3-.3-.7-.5-1.1-.5-.4 0-.8.2-1.2.5L9.3 11c-.1 0-.2-.1-.3-.1-.1-.1-.2-.1-.3-.2-1-.6-1.9-1.5-2.8-2.5-.4-.6-.7-1.1-.9-1.5l.8-.8.3-.3c.7-.7.7-1.6 0-2.3l-1-.9c-.1-.1-.2-.2-.3-.4l-.6-.6c-.3-.3-.7-.5-1.1-.5-.4 0-.8.2-1.1.5L.7 2.6c-.4.4-.6.9-.7 1.6-.1 1 .2 1.9.4 2.5C1 8.1 1.8 9.5 3 11c1.5 1.8 3.3 3.2 5.3 4.1.8.4 1.8.8 3 .9h.2c.8 0 1.4-.3 2-.8l.6-.6.4-.4c.3-.3.5-.8.5-1.2 0-.4-.2-.8-.5-1.2l-1.8-1.9zm1.2 3.6-.4.4-.7.7c-.3.4-.7.5-1.3.5h-.2c-1-.1-1.9-.5-2.6-.8-1.9-.9-3.6-2.2-5-3.9C2.6 9 1.8 7.7 1.3 6.3 1 5.5.9 4.8.9 4.2c0-.4.2-.7.5-1L2.6 2c.2-.2.3-.2.5-.2s.4.1.5.2c.2.3.4.5.6.7l.3.3.9.9c.4.4.4.7 0 1-.1.2-.2.3-.3.4l-.8.8c-.3.3-.3.6-.2.8.2.6.6 1.1 1.1 1.8.9 1.1 1.9 2 3 2.7.1.1.3.2.4.2.1.1.2.1.3.2.1.1.2.1.3.1.3 0 .5-.2.5-.2l1.2-1.2c.1-.1.3-.3.5-.3s.4.1.5.2l1.9 1.9c.4.5.4.8.1 1.2zM8.6 3.8c.9.2 1.7.6 2.4 1.2.6.6 1.1 1.4 1.2 2.3 0 .2.2.4.4.4h.1c.3 0 .4-.3.4-.5-.2-1.1-.7-2-1.5-2.8-.8-.8-1.8-1.3-2.8-1.5-.2 0-.5.1-.5.4-.1.2.1.5.3.5zM16 7.1c-.3-1.8-1.1-3.4-2.4-4.6S10.7.3 8.9 0c-.2 0-.4.1-.5.4 0 .2.1.5.4.5 1.6.3 3 1 4.2 2.2 1.1 1.1 1.9 2.6 2.2 4.2 0 .2.2.4.4.4h.1c.2-.2.3-.4.3-.6z" style="fill:#fff"/>
                    </svg>
                    0 800 555 55 55
                </a>
                <nav class="navigation">
                    <ul>
                       <x-nav-link href="#"> Головна</x-nav-link>
                        <li><a href="#">Як це працює?</a></li>
                        <li><a href="#">Продавцям</a></li>
                        <li><a href="#">Покупцям</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <a class="place-link modal_open" href="#modal_place">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 13 15" viewBox="0 0 13 15">
                            <path d="M9 9.9c1.6-2.5 1.4-2.2 1.4-2.3.6-.8.9-1.8.9-2.8C11.3 2.2 9.1 0 6.5 0 3.9 0 1.7 2.2 1.7 4.9c0 1 .3 2 .9 2.8L4 9.9c-1.5.2-4 .9-4 2.5 0 .6.4 1.3 2.1 2 1.2.4 2.7.6 4.4.6 3.1 0 6.5-.9 6.5-2.6 0-1.6-2.5-2.3-4-2.5zM3.4 7.2s-.1 0 0 0c-.5-.7-.8-1.5-.8-2.3 0-2.2 1.7-4 3.9-4s3.9 1.8 3.9 4c0 .8-.2 1.6-.7 2.3 0 .1.2-.3-3.2 5.1L3.4 7.2zm3.1 6.9c-3.4 0-5.6-1-5.6-1.8 0-.5 1.1-1.3 3.7-1.6l1.6 2.5c.1.1.2.2.4.2.1 0 .3-.1.4-.2l1.6-2.5c2.5.3 3.7 1.1 3.7 1.6-.2.8-2.4 1.8-5.8 1.8z" style="fill:#fff"></path>
                        <path d="M6.5 2.7c-1.2 0-2.2 1-2.2 2.2s1 2.2 2.2 2.2 2.2-1 2.2-2.2-1-2.2-2.2-2.2zm0 3.5c-.7 0-1.3-.6-1.3-1.3s.6-1.3 1.3-1.3 1.3.6 1.3 1.3-.6 1.3-1.3 1.3z" style="fill:#fff"></path>
                        </svg>
                    <span class="confirmed-city-js">Вся Україна</span>
                </a>
                <a class="enter-link" href="https://harvy.market/login/">

                    @if (auth()->check())
                        <span>Сергій</span>
                    @else
                        <span>Мій профіль</span>
                    @endif
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 13 15" viewBox="0 0 13 15">
                            <path d="M8.8 7c1-.7 1.6-1.8 1.6-3.1C10.4 1.7 8.7 0 6.5 0S2.6 1.7 2.6 3.8c0 1.3.6 2.4 1.6 3.1-2.5 1-4.2 3.3-4.2 6C0 14.1 1 15 2.2 15h8.7c1.2 0 2.2-.9 2.2-2.1-.1-2.7-1.8-5-4.3-5.9zM3.7 3.8c0-1.5 1.2-2.7 2.8-2.7s2.8 1.2 2.8 2.7S8 6.5 6.5 6.5 3.7 5.3 3.7 3.8zm7.1 10H2.2c-.5 0-1-.4-1-1 0-2.9 2.4-5.2 5.3-5.2s5.3 2.3 5.3 5.2c0 .6-.4 1-1 1z" style="fill:#fff"></path></svg>
                </a>
                <a class="user-link link-js" href="https://harvy.market/?route=favorites">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 16 14" viewBox="0 0 16 14">
                            <path d="M4.8 1.3c1 0 1.9.5 2.6 1.6.3.4.9.4 1.1 0 .7-1.2 1.6-1.6 2.6-1.6s2 .4 2.6 1.2c1.3 1.3 1.4 3.8-.3 5.5L8 12.5 2.6 8C.9 6.3 1 3.8 2.2 2.4c.6-.7 1.6-1.1 2.6-1.1zm0-1.3C3.4 0 2.1.6 1.2 1.6c-1.6 1.9-1.7 5.1.5 7.3l5.8 4.9c.2.2.6.2.9 0l5.8-4.9c2.2-2.2 2.1-5.4.5-7.3-.9-1-2.2-1.6-3.6-1.6C10 0 8.9.7 8 1.7 7.1.7 6 0 4.8 0z" style="fill:#fff"></path>
                        </svg>
                    <span class="favorites-count">0</span>
                </a>
                <form action="https://harvy.market/" class="header-search-form" method="get">
                    <input type="hidden" name="post_type" value="products">
                    <input type="text" required="" class="header-search-input" name="s" value="">
                    <a class="user-link header-search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 13 13" viewBox="0 0 13 13"><path d="M12.9 12.1 9.7 9c.8-.9 1.3-2.2 1.3-3.5C11 2.5 8.5 0 5.5 0S0 2.5 0 5.5 2.5 11 5.5 11C6.8 11 8 10.5 9 9.7l3.2 3.2c.1.1.2.1.4.1.1 0 .3 0 .4-.1 0-.2 0-.6-.1-.8zM1 5.5C1 3 3 1 5.5 1S10 3 10 5.5 8 10 5.5 10C3 9.9 1 7.9 1 5.5z" style="fill:#fff"></path></svg>
                    </a>
                </form>
                <div class="tog-nav"><span> </span></div>
            </div>
        </div>
    </div>
</header>
