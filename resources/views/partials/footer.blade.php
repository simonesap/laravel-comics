
@php

$dcComics = [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ];

$dc = [
    'Terms Of USe',
    'Privacy policy(New)',
    'Ad Choices',
    'Advertising',
    'Jobs',
    'Subscriptions',
    'Talent Workshops',
    'CPSC Certificates',
    'Ratings',
    'Shop Help',
    'Contact US',
];

$sites = [
        'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa',
];

$shop = [
        'Shop DC',
        'Shop DC Collectibles',
];

$icons = [
        '/public/images/footer-facebook.png',
        '../../../public/images/footer-periscope.png',
        '../../../public/images/footer-pinterest.png',
        '../../../public/images/footer-twitter.png',
        '../../../public/images/footer-youtube.png',
];

// $select = [
//               [
//                 'name' => 'DIGITAL COMICS',
//                 'url' =>'../../../public/images/buy-comics-digital-comics.png',
//               ],
//               [
//                 'name'=> 'DC MERCHANDISE',
//                 'url'=> '../../../public/images/buy-comics-merchandise.png',
//               ],
//               [
//                 'name'=> 'SUBSCRIPTION',
//                 'url'=> '../../../public/images/buy-comics-shop-locator.png',
//               ],
//               [
//                 'name'=> 'COMIC SHOP LOCATOR',
//                 'url'=> '../../../public/images/buy-comics-subscriptions.png',
//               ],
//               [
//                 'name'=> 'DC POWER VISA',
//                 'url'=> '../../../public/images/buy-dc-power-visa.svg',
//               ],
//             ];

@endphp

{{-- <div>
    <div id="main">
        <ul>
            @forelse ($select as $key => $sel)
            <li>
                <img src="{{ $key->url}}" alt="">
                <a href="#"></a>
            </li>
        </ul>
    </div>
</div> --}}

<div id="app" style="background-image: url('{{ asset('images/footer-bg.jpg')}}');background-size: cover;">

     <div id="container">

       <div id="col-1-2">
         <div>

           <div id="dcComics-shop-container">
             <h3>dc comics</h3>
             <ul class="listTypeNone">
                @forelse ($dcComics as $dc_c)
                    <li>
                        {{$dc_c}}
                    </li>
                @empty

                @endforelse
             </ul>
           </div>
           <div>
             <h3 id="shop">shop</h3>
             <ul class="listTypeNone">
                @forelse ($shop as $sh)
                    <li>
                        {{$sh}}
                    </li>
                @empty

                @endforelse
             </ul>
           </div>

         </div>

         <div>
           <h3>dc</h3>
           <ul class="listTypeNone">
            @forelse ($dc as $d)
                <li>
                    {{$d}}
                </li>
            @empty

            @endforelse
           </ul>
         </div>

         <div>
           <h3>sites</h3>
           <ul class="listTypeNone">
            @forelse ($sites as $site)
                <li>
                    {{$site}}
                </li>
            @empty

            @endforelse
           </ul>
         </div>

       </div>

       <div id="col-2-2">
         <div style="background-image: url('{{ asset('images/dc-logo-bg.png')}}');background-size: cover;" id="image"></div>
       </div>

     </div>

 </div>




{{-- <div id="container">

    <div id="col-1">
        <button>sign-up now!</button>
    </div>

    <div id="col-2">
        <div>
            <h3>follow us</h3>
        </div>

        <div>
            <ul id="list">
                @forelse ($icons as $icon)
                    <li>
                        {{$icon}}
                    </li>
                @empty

                @endforelse

            </ul>
        </div>
    </div>

</div> --}}
