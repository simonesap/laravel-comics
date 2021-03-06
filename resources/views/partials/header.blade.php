
<header class="">

    <div class="container_default_1 flexBetween justify_center h_25 bg_custom_lightblue" style="width: 100%; height: 20px">
        <div></div>
        <div></div>
        <div>
            <span class="text_uppercase text_white m_10 p_20 fs_0">dc power visa</span>
            <span class="text_uppercase text_white m_10 p_20 fs_0">additional dc sites <i></i></span>
        </div>
    </div>

    <nav class="container_default_1 d_flex flexBetween">
        <a class="m_10" href=" {{ url('/')}}">
            <img class="" src=" {{ asset('images/dc-logo.png') }}" alt="">
        </a>
        <ul class="reset_list flexRowWrap m_20">
            <li class="m_10">
                <a class="text_uppercase p_b_15 fs_3 p_x_5 text_black text_decoration" href=" {{ route( 'characters' ) }} ">characters</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'comics' ) }} ">comics</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'movies' ) }} ">movies</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'tv' ) }} ">tv</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'games' ) }} ">games</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'collectibles' ) }} ">collectibles</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'video' ) }} ">video</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'fans' ) }} ">fans</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'news' ) }} ">news</a>
            </li>
            <li class="m_10">
                <a class="text_uppercase fs_3 p_5 text_black text_decoration" href=" {{ route( 'shop' ) }} ">shop</a>
                <i></i>
            </li>
        </ul>
        <div class="b_bottom">
            <form class="flexRowWrapEnd" action="" method="GET">
                <input class="b_none w_25" type="text" placeholder="">
                <div class="text_capital">search</div>
            </form>
            <i class="fa-regular fa-magnifying-glass"></i>
        </div>
    </nav>

    <div class="h_50_vh w_100" style="background-image: url('{{ asset('images/jumbotron.jpg')}}');background-size: cover;" >
        {{-- style="background-image: url('{{ asset('images/jumbotron.jpg')}}');" --}}
        {{-- <img class="w_100 h_50_vh" src="{{ asset('images/jumbotron.jpg')}}" alt=""> --}}
    </div>

</header>
