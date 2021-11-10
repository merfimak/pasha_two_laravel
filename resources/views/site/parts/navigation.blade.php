<div class="menu">
    <div class="menu_body">
        <div class="menu_top">
            <div class="menu__logo">
                <div class="menu__logo_img"><img src="{{asset(env('THEME'))}}/site/img/menu/logo.png" alt="logo">  </div>              
                <div class="menu_info">
                    <div class="logo_title"><a href="{{ route('main') }}">YAVORSKYI VIDEO GRILL</a></div>
                    <div class="logo_text"><a href="{{ route('main') }}">Zdjecia z drona filmy | FPV Szczecin Aerial</a></div>                   
                </div>                          
            </div>
            <div class="header__burger">
            <span></span>
            </div>
            <nav class="menu__nav">
                <ul class="menu__list">                 
                    <li><a href="{{ route('portfolio') }}" class="menu__link">Portfolio</a></li>
                    <li><a href="{{ route('main') }}#messaging" class="menu__link _slow_scroll">Kontakt</a></li>
                    <li><a href="{{ route('main') }}#about" class="menu__link _slow_scroll">about</a></li>
                </ul>
            </nav>
            </div>
            <div class="icons">
                <div class="icons_body">
                    <div class="icon"><a href="https://www.facebook.com/YavorskyiVG/" target="_blank"><img src="{{asset(env('THEME'))}}/site/img/menu/fb.png" alt=""></a></div>
                    <div class="icon"><a href="https://www.instagram.com/Yavorskyivg/" target="_blank"><img src="{{asset(env('THEME'))}}/site/img/menu/inst.png" alt=""></a></div>
                    <div class="icon"><a href="https://www.youtube.com/channel/UCCptccz1aaRAS7dzP8Kkxzw" target="_blank"><img src="{{asset(env('THEME'))}}/site/img/menu/youtube.png" alt=""></a></div>
                    <div class="icon"><a href="mailto:fpvsonderling@gmail.com"><img src="{{asset(env('THEME'))}}/site/img/menu/mail.png" alt=""></a></div>
                    <div class="icon"><a href="tel:+48787939909"><img src="{{asset(env('THEME'))}}/site/img/menu/tel.png" alt=""></a></div>
                </div>
            </div>
    </div>          
</div>