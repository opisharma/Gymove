
<?php 
require_once('header.php');

?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashborad.php">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="addfactarea.php">Fact </a></li>
					</ol>
                </div>
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add fact form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addfactareapost.php" method="POST">
                                        <div class="row">                                               
                                            <div class="form-group col-xl-4 ">
                                                    <input type="text" id="fact_icon" readonly class="form-control border-info" name="fact-icon" placeholder="chose icon">
                                            </div>
                                            <div class="form-group col-xl-4">
                                                <input type="text" class="form-control border-info" name="fact-count" placeholder="Enter fact-count">
                                               
                                            </div>
                                            <div class="form-group col-xl-4">
                                                 <input type="text" class="form-control border-info" name="fact-content" placeholder="Details">
                                            </div>
                                            <div class="form-group col-xl-12">
                                               <?php
                                                $fonts = array (
                                                    'fa-500px',
                                                    'fa-address-book',
                                                    'fa-address-book-o',
                                                    'fa-address-card',
                                                    'fa-address-card-o',
                                                    'fa-adjust',
                                                    'fa-adn',
                                                    'fa-align-center',
                                                    'fa-align-justify',
                                                    'fa-align-left',
                                                    'fa-align-right',
                                                    'fa-amazon',
                                                    'fa-ambulance',
                                                    'fa-american-sign-language-interpreting',
                                                    'fa-anchor',
                                                    'fa-android',
                                                    'fa-angellist',
                                                    'fa-angle-double-down',
                                                    'fa-angle-double-left',
                                                    'fa-angle-double-right',
                                                    'fa-angle-double-up',
                                                    'fa-angle-down',
                                                    'fa-angle-left',
                                                    'fa-angle-right',
                                                    'fa-angle-up',
                                                    'fa-apple',
                                                    'fa-archive',
                                                    'fa-area-chart',
                                                    'fa-arrow-circle-down',
                                                    'fa-arrow-circle-left',
                                                    'fa-arrow-circle-o-down',
                                                    'fa-arrow-circle-o-left',
                                                    'fa-arrow-circle-o-right',
                                                    'fa-arrow-circle-o-up',
                                                    'fa-arrow-circle-right',
                                                    'fa-arrow-circle-up',
                                                    'fa-arrow-down',
                                                    'fa-arrow-left',
                                                    'fa-arrow-right',
                                                    'fa-arrow-up',
                                                    'fa-arrows',
                                                    'fa-arrows-alt',
                                                    'fa-arrows-h',
                                                    'fa-arrows-v',
                                                    'fa-asl-interpreting',
                                                    'fa-assistive-listening-systems',
                                                    'fa-asterisk',
                                                    'fa-at',
                                                    'fa-audio-description',
                                                    'fa-automobile',
                                                    'fa-backward',
                                                    'fa-balance-scale',
                                                    'fa-ban',
                                                    'fa-bandcamp',
                                                    'fa-bank',
                                                    'fa-bar-chart',
                                                    'fa-bar-chart-o',
                                                    'fa-barcode',
                                                    'fa-bars',
                                                    'fa-bath',
                                                    'fa-bathtub',
                                                    'fa-battery',
                                                    'fa-battery-0',
                                                    'fa-battery-1',
                                                    'fa-battery-2',
                                                    'fa-battery-3',
                                                    'fa-battery-4',
                                                    'fa-battery-empty',
                                                    'fa-battery-full',
                                                    'fa-battery-half',
                                                    'fa-battery-quarter',
                                                    'fa-battery-three-quarters',
                                                    'fa-bed',
                                                    'fa-beer',
                                                    'fa-behance',
                                                    'fa-behance-square',
                                                    'fa-bell',
                                                    'fa-bell-o',
                                                    'fa-bell-slash',
                                                    'fa-bell-slash-o',
                                                    'fa-bicycle',
                                                    'fa-binoculars',
                                                    'fa-birthday-cake',
                                                    'fa-bitbucket',
                                                    'fa-bitbucket-square',
                                                    'fa-bitcoin',
                                                    'fa-black-tie',
                                                    'fa-blind',
                                                    'fa-bluetooth',
                                                    'fa-bluetooth-b',
                                                    'fa-bold',
                                                    'fa-bolt',
                                                    'fa-bomb',
                                                    'fa-book',
                                                    'fa-bookmark',
                                                    'fa-bookmark-o',
                                                    'fa-braille',
                                                    'fa-briefcase',
                                                    'fa-btc',
                                                    'fa-bug',
                                                    'fa-building',
                                                    'fa-building-o',
                                                    'fa-bullhorn',
                                                    'fa-bullseye',
                                                    'fa-bus',
                                                    'fa-buysellads',
                                                    'fa-cab',
                                                    'fa-calculator',
                                                    'fa-calendar',
                                                    'fa-calendar-check-o',
                                                    'fa-calendar-minus-o',
                                                    'fa-calendar-o',
                                                    'fa-calendar-plus-o',
                                                    'fa-calendar-times-o',
                                                    'fa-camera',
                                                    'fa-camera-retro',
                                                    'fa-car',
                                                    'fa-caret-down',
                                                    'fa-caret-left',
                                                    'fa-caret-right',
                                                    'fa-caret-square-o-down',
                                                    'fa-caret-square-o-left',
                                                    'fa-caret-square-o-right',
                                                    'fa-caret-square-o-up',
                                                    'fa-caret-up',
                                                    'fa-cart-arrow-down',
                                                    'fa-cart-plus',
                                                    'fa-cc',
                                                    'fa-cc-amex',
                                                    'fa-cc-diners-club',
                                                    'fa-cc-discover',
                                                    'fa-cc-jcb',
                                                    'fa-cc-mastercard',
                                                    'fa-cc-paypal',
                                                    'fa-cc-stripe',
                                                    'fa-cc-visa',
                                                    'fa-certificate',
                                                    'fa-chain',
                                                    'fa-chain-broken',
                                                    'fa-check',
                                                    'fa-check-circle',
                                                    'fa-check-circle-o',
                                                    'fa-check-square',
                                                    'fa-check-square-o',
                                                    'fa-chevron-circle-down',
                                                    'fa-chevron-circle-left',
                                                    'fa-chevron-circle-right',
                                                    'fa-chevron-circle-up',
                                                    'fa-chevron-down',
                                                    'fa-chevron-left',
                                                    'fa-chevron-right',
                                                    'fa-chevron-up',
                                                    'fa-child',
                                                    'fa-chrome',
                                                    'fa-circle',
                                                    'fa-circle-o',
                                                    'fa-circle-o-notch',
                                                    'fa-circle-thin',
                                                    'fa-clipboard',
                                                    'fa-clock-o',
                                                    'fa-clone',
                                                    'fa-close',
                                                    'fa-cloud',
                                                    'fa-cloud-download',
                                                    'fa-cloud-upload',
                                                    'fa-cny',
                                                    'fa-code',
                                                    'fa-code-fork',
                                                    'fa-codepen',
                                                    'fa-codiepie',
                                                    'fa-coffee',
                                                    'fa-cog',
                                                    'fa-cogs',
                                                    'fa-columns',
                                                    'fa-comment',
                                                    'fa-comment-o',
                                                    'fa-commenting',
                                                    'fa-commenting-o',
                                                    'fa-comments',
                                                    'fa-comments-o',
                                                    'fa-compass',
                                                    'fa-compress',
                                                    'fa-connectdevelop',
                                                    'fa-contao',
                                                    'fa-copy',
                                                    'fa-copyright',
                                                    'fa-creative-commons',
                                                    'fa-credit-card',
                                                    'fa-credit-card-alt',
                                                    'fa-crop',
                                                    'fa-crosshairs',
                                                    'fa-css3',
                                                    'fa-cube',
                                                    'fa-cubes',
                                                    'fa-cut',
                                                    'fa-cutlery',
                                                    'fa-dashboard',
                                                    'fa-dashcube',
                                                    'fa-database',
                                                    'fa-deaf',
                                                    'fa-deafness',
                                                    'fa-dedent',
                                                    'fa-delicious',
                                                    'fa-desktop',
                                                    'fa-deviantart',
                                                    'fa-diamond',
                                                    'fa-digg',
                                                    'fa-dollar',
                                                    'fa-dot-circle-o',
                                                    'fa-download',
                                                    'fa-dribbble',
                                                    'fa-drivers-license',
                                                    'fa-drivers-license-o',
                                                    'fa-dropbox',
                                                    'fa-drupal',
                                                    'fa-edge',
                                                    'fa-edit',
                                                    'fa-eercast',
                                                    'fa-eject',
                                                    'fa-ellipsis-h',
                                                    'fa-ellipsis-v',
                                                    'fa-empire',
                                                    'fa-envelope',
                                                    'fa-envelope-o',
                                                    'fa-envelope-open',
                                                    'fa-envelope-open-o',
                                                    'fa-envelope-square',
                                                    'fa-envira',
                                                    'fa-eraser',
                                                    'fa-etsy',
                                                    'fa-eur',
                                                    'fa-euro',
                                                    'fa-exchange',
                                                    'fa-exclamation',
                                                    'fa-exclamation-circle',
                                                    'fa-exclamation-triangle',
                                                    'fa-expand',
                                                    'fa-expeditedssl',
                                                    'fa-external-link',
                                                    'fa-external-link-square',
                                                    'fa-eye',
                                                    'fa-eye-slash',
                                                    'fa-eyedropper',
                                                    'fa-fa',
                                                    'fa-facebook',
                                                    'fa-facebook-f',
                                                    'fa-facebook-official',
                                                    'fa-facebook-square',
                                                    'fa-fast-backward',
                                                    'fa-fast-forward',
                                                    'fa-fax',
                                                    'fa-feed',
                                                    'fa-female',
                                                    'fa-fighter-jet',
                                                    'fa-file',
                                                    'fa-file-archive-o',
                                                    'fa-file-audio-o',
                                                    'fa-file-code-o',
                                                    'fa-file-excel-o',
                                                    'fa-file-image-o',
                                                    'fa-file-movie-o',
                                                    'fa-file-o',
                                                    'fa-file-pdf-o',
                                                    'fa-file-photo-o',
                                                    'fa-file-picture-o',
                                                    'fa-file-powerpoint-o',
                                                    'fa-file-sound-o',
                                                    'fa-file-text',
                                                    'fa-file-text-o',
                                                    'fa-file-video-o',
                                                    'fa-file-word-o',
                                                    'fa-file-zip-o',
                                                    'fa-files-o',
                                                    'fa-film',
                                                    'fa-filter',
                                                    'fa-fire',
                                                    'fa-fire-extinguisher',
                                                    'fa-firefox',
                                                    'fa-first-order',
                                                    'fa-flag',
                                                    'fa-flag-checkered',
                                                    'fa-flag-o',
                                                    'fa-flash',
                                                    'fa-flask',
                                                    'fa-flickr',
                                                    'fa-floppy-o',
                                                    'fa-folder',
                                                    'fa-folder-o',
                                                    'fa-folder-open',
                                                    'fa-folder-open-o',
                                                    'fa-font',
                                                    'fa-font-awesome',
                                                    'fa-fonticons',
                                                    'fa-fort-awesome',
                                                    'fa-forumbee',
                                                    'fa-forward',
                                                    'fa-foursquare',
                                                    'fa-free-code-camp',
                                                    'fa-frown-o',
                                                    'fa-futbol-o',
                                                    'fa-gamepad',
                                                    'fa-gavel',
                                                    'fa-gbp',
                                                    'fa-ge',
                                                    'fa-gear',
                                                    'fa-gears',
                                                    'fa-genderless',
                                                    'fa-get-pocket',
                                                    'fa-gg',
                                                    'fa-gg-circle',
                                                    'fa-gift',
                                                    'fa-git',
                                                    'fa-git-square',
                                                    'fa-github',
                                                    'fa-github-alt',
                                                    'fa-github-square',
                                                    'fa-gitlab',
                                                    'fa-gittip',
                                                    'fa-glass',
                                                    'fa-glide',
                                                    'fa-glide-g',
                                                    'fa-globe',
                                                    'fa-google',
                                                    'fa-google-plus',
                                                    'fa-google-plus-circle',
                                                    'fa-google-plus-official',
                                                    'fa-google-plus-square',
                                                    'fa-google-wallet',
                                                    'fa-graduation-cap',
                                                    'fa-gratipay',
                                                    'fa-grav',
                                                    'fa-group',
                                                    'fa-h-square',
                                                    'fa-hacker-news',
                                                    'fa-hand-grab-o',
                                                    'fa-hand-lizard-o',
                                                    'fa-hand-o-down',
                                                    'fa-hand-o-left',
                                                    'fa-hand-o-right',
                                                    'fa-hand-o-up',
                                                    'fa-hand-paper-o',
                                                    'fa-hand-peace-o',
                                                    'fa-hand-pointer-o',
                                                    'fa-hand-rock-o',
                                                    'fa-hand-scissors-o',
                                                    'fa-hand-spock-o',
                                                    'fa-hand-stop-o',
                                                    'fa-handshake-o',
                                                    'fa-hard-of-hearing',
                                                    'fa-hashtag',
                                                    'fa-hdd-o',
                                                    'fa-header',
                                                    'fa-headphones',
                                                    'fa-heart',
                                                    'fa-heart-o',
                                                    'fa-heartbeat',
                                                    'fa-history',
                                                    'fa-home',
                                                    'fa-hospital-o',
                                                    'fa-hotel',
                                                    'fa-hourglass',
                                                    'fa-hourglass-1',
                                                    'fa-hourglass-2',
                                                    'fa-hourglass-3',
                                                    'fa-hourglass-end',
                                                    'fa-hourglass-half',
                                                    'fa-hourglass-o',
                                                    'fa-hourglass-start',
                                                    'fa-houzz',
                                                    'fa-html5',
                                                    'fa-i-cursor',
                                                    'fa-id-badge',
                                                    'fa-id-card',
                                                    'fa-id-card-o',
                                                    'fa-ils',
                                                    'fa-image',
                                                    'fa-imdb',
                                                    'fa-inbox',
                                                    'fa-indent',
                                                    'fa-industry',
                                                    'fa-info',
                                                    'fa-info-circle',
                                                    'fa-inr',
                                                    'fa-instagram',
                                                    'fa-institution',
                                                    'fa-internet-explorer',
                                                    'fa-intersex',
                                                    'fa-ioxhost',
                                                    'fa-italic',
                                                    'fa-joomla',
                                                    'fa-jpy',
                                                    'fa-jsfiddle',
                                                    'fa-key',
                                                    'fa-keyboard-o',
                                                    'fa-krw',
                                                    'fa-language',
                                                    'fa-laptop',
                                                    'fa-lastfm',
                                                    'fa-lastfm-square',
                                                    'fa-leaf',
                                                    'fa-leanpub',
                                                    'fa-legal',
                                                    'fa-lemon-o',
                                                    'fa-level-down',
                                                    'fa-level-up',
                                                    'fa-life-bouy',
                                                    'fa-life-buoy',
                                                    'fa-life-ring',
                                                    'fa-life-saver',
                                                    'fa-lightbulb-o',
                                                    'fa-line-chart',
                                                    'fa-link',
                                                    'fa-linkedin',
                                                    'fa-linkedin-square',
                                                    'fa-linode',
                                                    'fa-linux',
                                                    'fa-list',
                                                    'fa-list-alt',
                                                    'fa-list-ol',
                                                    'fa-list-ul',
                                                    'fa-location-arrow',
                                                    'fa-lock',
                                                    'fa-long-arrow-down',
                                                    'fa-long-arrow-left',
                                                    'fa-long-arrow-right',
                                                    'fa-long-arrow-up',
                                                    'fa-low-vision',
                                                    'fa-magic',
                                                    'fa-magnet',
                                                    'fa-mail-forward',
                                                    'fa-mail-reply',
                                                    'fa-mail-reply-all',
                                                    'fa-male',
                                                    'fa-map',
                                                    'fa-map-marker',
                                                    'fa-map-o',
                                                    'fa-map-pin',
                                                    'fa-map-signs',
                                                    'fa-mars',
                                                    'fa-mars-double',
                                                    'fa-mars-stroke',
                                                    'fa-mars-stroke-h',
                                                    'fa-mars-stroke-v',
                                                    'fa-maxcdn',
                                                    'fa-meanpath',
                                                    'fa-medium',
                                                    'fa-medkit',
                                                    'fa-meetup',
                                                    'fa-meh-o',
                                                    'fa-mercury',
                                                    'fa-microchip',
                                                    'fa-microphone',
                                                    'fa-microphone-slash',
                                                    'fa-minus',
                                                    'fa-minus-circle',
                                                    'fa-minus-square',
                                                    'fa-minus-square-o',
                                                    'fa-mixcloud',
                                                    'fa-mobile',
                                                    'fa-mobile-phone',
                                                    'fa-modx',
                                                    'fa-money',
                                                    'fa-moon-o',
                                                    'fa-mortar-board',
                                                    'fa-motorcycle',
                                                    'fa-mouse-pointer',
                                                    'fa-music',
                                                    'fa-navicon',
                                                    'fa-neuter',
                                                    'fa-newspaper-o',
                                                    'fa-object-group',
                                                    'fa-object-ungroup',
                                                    'fa-odnoklassniki',
                                                    'fa-odnoklassniki-square',
                                                    'fa-opencart',
                                                    'fa-openid',
                                                    'fa-opera',
                                                    'fa-optin-monster',
                                                    'fa-outdent',
                                                    'fa-pagelines',
                                                    'fa-paint-brush',
                                                    'fa-paper-plane',
                                                    'fa-paper-plane-o',
                                                    'fa-paperclip',
                                                    'fa-paragraph',
                                                    'fa-paste',
                                                    'fa-pause',
                                                    'fa-pause-circle',
                                                    'fa-pause-circle-o',
                                                    'fa-paw',
                                                    'fa-paypal',
                                                    'fa-pencil',
                                                    'fa-pencil-square',
                                                    'fa-pencil-square-o',
                                                    'fa-percent',
                                                    'fa-phone',
                                                    'fa-phone-square',
                                                    'fa-photo',
                                                    'fa-picture-o',
                                                    'fa-pie-chart',
                                                    'fa-pied-piper',
                                                    'fa-pied-piper-alt',
                                                    'fa-pied-piper-pp',
                                                    'fa-pinterest',
                                                    'fa-pinterest-p',
                                                    'fa-pinterest-square',
                                                    'fa-plane',
                                                    'fa-play',
                                                    'fa-play-circle',
                                                    'fa-play-circle-o',
                                                    'fa-plug',
                                                    'fa-plus',
                                                    'fa-plus-circle',
                                                    'fa-plus-square',
                                                    'fa-plus-square-o',
                                                    'fa-podcast',
                                                    'fa-power-off',
                                                    'fa-print',
                                                    'fa-product-hunt',
                                                    'fa-puzzle-piece',
                                                    'fa-qq',
                                                    'fa-qrcode',
                                                    'fa-question',
                                                    'fa-question-circle',
                                                    'fa-question-circle-o',
                                                    'fa-quora',
                                                    'fa-quote-left',
                                                    'fa-quote-right',
                                                    'fa-ra',
                                                    'fa-random',
                                                    'fa-ravelry',
                                                    'fa-rebel',
                                                    'fa-recycle',
                                                    'fa-reddit',
                                                    'fa-reddit-alien',
                                                    'fa-reddit-square',
                                                    'fa-refresh',
                                                    'fa-registered',
                                                    'fa-remove',
                                                    'fa-renren',
                                                    'fa-reorder',
                                                    'fa-repeat',
                                                    'fa-reply',
                                                    'fa-reply-all',
                                                    'fa-resistance',
                                                    'fa-retweet',
                                                    'fa-rmb',
                                                    'fa-road',
                                                    'fa-rocket',
                                                    'fa-rotate-left',
                                                    'fa-rotate-right',
                                                    'fa-rouble',
                                                    'fa-rss',
                                                    'fa-rss-square',
                                                    'fa-rub',
                                                    'fa-ruble',
                                                    'fa-rupee',
                                                    'fa-s15',
                                                    'fa-safari',
                                                    'fa-save',
                                                    'fa-scissors',
                                                    'fa-scribd',
                                                    'fa-search',
                                                    'fa-search-minus',
                                                    'fa-search-plus',
                                                    'fa-sellsy',
                                                    'fa-send',
                                                    'fa-send-o',
                                                    'fa-server',
                                                    'fa-share',
                                                    'fa-share-alt',
                                                    'fa-share-alt-square',
                                                    'fa-share-square',
                                                    'fa-share-square-o',
                                                    'fa-shekel',
                                                    'fa-sheqel',
                                                    'fa-shield',
                                                    'fa-ship',
                                                    'fa-shirtsinbulk',
                                                    'fa-shopping-bag',
                                                    'fa-shopping-basket',
                                                    'fa-shopping-cart',
                                                    'fa-shower',
                                                    'fa-sign-in',
                                                    'fa-sign-language',
                                                    'fa-sign-out',
                                                    'fa-signal',
                                                    'fa-signing',
                                                    'fa-simplybuilt',
                                                    'fa-sitemap',
                                                    'fa-skyatlas',
                                                    'fa-skype',
                                                    'fa-slack',
                                                    'fa-sliders',
                                                    'fa-slideshare',
                                                    'fa-smile-o',
                                                    'fa-snapchat',
                                                    'fa-snapchat-ghost',
                                                    'fa-snapchat-square',
                                                    'fa-snowflake-o',
                                                    'fa-soccer-ball-o',
                                                    'fa-sort',
                                                    'fa-sort-alpha-asc',
                                                    'fa-sort-alpha-desc',
                                                    'fa-sort-amount-asc',
                                                    'fa-sort-amount-desc',
                                                    'fa-sort-asc',
                                                    'fa-sort-desc',
                                                    'fa-sort-down',
                                                    'fa-sort-numeric-asc',
                                                    'fa-sort-numeric-desc',
                                                    'fa-sort-up',
                                                    'fa-soundcloud',
                                                    'fa-space-shuttle',
                                                    'fa-spinner',
                                                    'fa-spoon',
                                                    'fa-spotify',
                                                    'fa-square',
                                                    'fa-square-o',
                                                    'fa-stack-exchange',
                                                    'fa-stack-overflow',
                                                    'fa-star',
                                                    'fa-star-half',
                                                    'fa-star-half-empty',
                                                    'fa-star-half-full',
                                                    'fa-star-half-o',
                                                    'fa-star-o',
                                                    'fa-steam',
                                                    'fa-steam-square',
                                                    'fa-step-backward',
                                                    'fa-step-forward',
                                                    'fa-stethoscope',
                                                    'fa-sticky-note',
                                                    'fa-sticky-note-o',
                                                    'fa-stop',
                                                    'fa-stop-circle',
                                                    'fa-stop-circle-o',
                                                    'fa-street-view',
                                                    'fa-strikethrough',
                                                    'fa-stumbleupon',
                                                    'fa-stumbleupon-circle',
                                                    'fa-subscript',
                                                    'fa-subway',
                                                    'fa-suitcase',
                                                    'fa-sun-o',
                                                    'fa-superpowers',
                                                    'fa-superscript',
                                                    'fa-support',
                                                    'fa-table',
                                                    'fa-tablet',
                                                    'fa-tachometer',
                                                    'fa-tag',
                                                    'fa-tags',
                                                    'fa-tasks',
                                                    'fa-taxi',
                                                    'fa-telegram',
                                                    'fa-television',
                                                    'fa-tencent-weibo',
                                                    'fa-terminal',
                                                    'fa-text-height',
                                                    'fa-text-width',
                                                    'fa-th',
                                                    'fa-th-large',
                                                    'fa-th-list',
                                                    'fa-themeisle',
                                                    'fa-thermometer',
                                                    'fa-thermometer-0',
                                                    'fa-thermometer-1',
                                                    'fa-thermometer-2',
                                                    'fa-thermometer-3',
                                                    'fa-thermometer-4',
                                                    'fa-thermometer-empty',
                                                    'fa-thermometer-full',
                                                    'fa-thermometer-half',
                                                    'fa-thermometer-quarter',
                                                    'fa-thermometer-three-quarters',
                                                    'fa-thumb-tack',
                                                    'fa-thumbs-dowî',          (    !!       `     $   )  D              'Fa-tiumbó-O-down§.* !   @            $   "      (   $    ``   "   (` ! 'fá-thUErs-o-up',
    0 $                    "   !          00     $  'favhuhbs-up',
  !                         " 8   $   !           ( &fa-ticket'<
  `   0        "    `    ! $        (            (00'fa-times',
 $     à  `    ! `              0           0      'fa-qimes(cyvale',
            ` !        h     "   0 $                ba-time{-ãérc|e-o',
    `      0        $ !    (      $ $   4  `     0 7fa-tiíEs-råctanGl%',
                 !  1 ` !       (             $(!   'fA-times-rec0angle%O'
  (         $         `              "          $  !'dq=tint',-
 ""      ¡     0!   @  (       2 "   !   ! @$ "$    'Fa-togg|e-d/wn', ! `$$  !   "  !   ,     "   0  (    ! !     $      'fa=tnggle)left',
8!  $                 !  !   !  "$         0        'æa-tÿgfleoff'-+!!     `        0 !    "0    $            !  "    ! 'fa-tg&le-oj'(
        (        "    (     ! (      !   `0"0 @  h  'fa-tofghg-ricjt',
     `    0            0"  !             8!   `  $'fa-uoggme-up&,
                       "     p   0!     0(  `"      'fa=trademark%,
 " €! 0      00      !  0             "$  ! (       'da-train$,
  `   ! "$          8   "    (                     'fa-tr`nsgender',
           0          ` $           $0    `         'fa-tra.wgender-alt'(
                p    0  "     &  (   "      `      'va-prAsh#,* (      `  $      "           "  !       !      !  7fa=trasl-ï',
    `        (     !  $         `0              $ ` 'fa-tree'(Š            0  $ !       à   `   ! $     `    0     'fcmtrello',                          $ 0            `  4`      'fa-t2ipa`viso2',
 `      0   ($           `     0         (   `    " 'fa-trophy'$        `$      !              !                    'fa-tsukc',
   (  $     $           !              $ !  !     ! 'fa-Try&,
       !!     "(  $      (  ! "0  "! ! $ (    e ` !'Fa=tty',                h $  `(                  !!         'ba-tumblr',        !     $                        ` p       !  'fa-puíblvsquarõ',   0  "   $ ")        "      !   " !     ( !`       'fa-turoI3h/lisa',
   `      $  "       0    0     $  $& $           ! 'f!-|v',
       !    !        !     $     b      $!"!   $    fatwitch',
       "ä `    "      ¡ *    `!$      %, ""%    0  'gA­tsittar',
B  !      `   (!  !       (            !           'fá-twitTar-square',Š     $   `H    (` &  `          0 "0    "   (   (  7fa-}ebbella'           "    !0 (        $       !       !      0&fa5nderline',J "h      0    (         ° `    (   "      ` $       §da-5~dn',
         8                            !`        €   'fa-Uîiversal­icc}ss',-
2  `   0         0     $"   "" "          !$        'famunIvers)ty',       $     !  `    4       4`           `  "$(    'fa-unlank',
   $  a          $  (     "    "( #0          "   ` 'fa-unloCK'-
  `   !         `    0               !$ $$  (       'fa-unlck-alt'$                 (         (    $   ( (   €      ¤( 'fá-unswrTef',
        " "  (         00$$       0¡!"    !         'fa-exlkae',       )    "        !"(    `   `!     (      $     'fa-usb'-
       `        !          %  (`         $!   $ @  'fc-usd',      $       !        (  ( (    (  `   " 0(   `   'fi-use2'(
                 $ 0  `      ¨(    (   !"       0   'fauser)ciscäe',
      (          `   (              $`$        $  ( 'fa,åsgr-kircìE­o',
                          `       ¡à                'fa-õsermd'-
             (   (             $      (            7fa%usev-o'
    0`     $ 0  `              (     $       $ ¨   `'fa-user-plus§,
        (  "$  (             $"   `        `!@   @  'fa-user-wecret'-
0     "   $¢ "*   $         0  0 (          $ `     'fq-wsepmtimes',
          `    "   !!            ¢   0     (   !"  'fa-users,
                   ¢(   ¢   !       "   0   (    1£ 'fa-vcard#,	
*0        !    "  `                            0    'fa-kard-og,
 €                     "        `            à(     7fi-venus,
   b "  `   !     (`                               #va-öenus-double#,O"$! 1  `0$  `   !  &   `    "   !     " !  (  !$   fa-Vunus=MaRs',
  $`       0  !  !     "          0   #    $  !  `'fa-~iacoij ,
  1    `    $         a((       ( 0!     ("$ 8 !    'va-tiadE/,
  a0  °  $    !    (!    !       ¨     !   `      ``gfa-via$eo-sQuase',
     $   `       (    0            `     `         ('fa-fi¤eo-cámmra',
                    "  "$ !             1 0   ¤0 !  'fa­vh}Em§,*`  $          !    $"        (   ( (       "     !  'fa-vimeo-Square',
    $`$    !        ( !       "!     " 0          ` 'f`-viNd%,    `     !         $        (                   ` $'æ`-vk§,         `       0                        0   (   0 /famvolume-cOntro|­ðhone#L
          ` 0         ! `  !  €  !                  'ga-voL5m%­down',
    (                 $  (!    " ¡         $        #fa-volume-of',
         1            p      ` ($                !  'famvïlume/up',
               `  (              "     `     $      'fa-÷arning7,J  0 `      ( "   0        $ $$    (        $ `      'famwec(at'¬      !  "      (    !   " `                        'fa-weibo',     (  0    `  0              0     %    `         'fa-weixIn'$
         0         (           (       (!   $      ('fa)WhatsAp0/,
(                  a   ¨  " !    à °       !0  0    cfa-wheelshair',	 ($        0          0    !( "$        $    h   #  'fa-~he%lchaiz-alt%,
           @` `  `  `           ¡   0      0        %va-wIfig,
   `       0                   $0     $        0 0  'fq­wikipedi!-w',
  (              "  0 (   "        $ `            'fe-wiNdow-cìose', (     0      0¢            (  ) !           "     ('fa-windou-cl~se=ë'¬        `          0                      `$   $  $ 'ba-wi~d/w-maximize'l
 `     "0    "         @0         à  `            $ 'na-window-}iîimize',
!  ( "       @    0                  ! !         "$'fa-wineos-Rustove',
  (  ( 0    "       "  !$  b     % `                'fa,windoWs#,
           !  0   (  !           $   "         `$   &da-gon',
  0  0             0         (  ` @   "  ` `    `  'fa-wordpress',
       $   ( ! &              0        $ 0   " (    'ba-wp`eginner'l      !  $          (   "                           'fawrexplorer',
       `   $(   " !                        `     0  'fá-wpfïrms/-
  ``±       !  `      0   $¡   !          a"      0'fa,wrenah',    $  0   !   "! h $   !    0          ! `       7fA-xihg',
  $`                    ¨(        *    °!      !  ( f`-xing-square',                       p         $              $`$ '&!-x-co-binavor',
!   $    ` ! "      b      ! &           ( $     0 (%&a-y-comb)nator-suuare'.
$  #  `     `(           !   0  0  !   "(           'na-yaho#,
(        `       ""(        `     `         (!   $  'Fa-yc'.
  $ ¤!           !      "      0    `0              '~a%yc-{qua2e'(	
      $     (  ¤       $   0!          !     $ &0   'ga-yelp',
        (   $    !  $       (  (" !  (    $         #&ayEj&,
       " 0        " $              !  (          0$ gb`-yoast',
  ) ! !   0    (       "      $    0      0b!d"  0  'fi-yOutube',
        (       `    (    $   (      0   "     !  !'va-yoõTuBe-0ley',
       !   0    0           % @  a  !  $!  !      $çfa=yogtube-wsõare',
 "    ¨     !     (    (            !             );
`    *(        (( !!  $`     !    $   `   ( "  
      `      ¨   $            `        0         
 (     "     "     (       `      $       
"` $                0    8         `   0  %    	 ( ! `                !          "           0?>
            0       ` "         ¤$0      (  ``<div style>"heiGht: 301px; /vapflow¸ñcrll,;">
      ¥   (0             !      "`                <?ph0$      0`                "           " $ "   !  ( fOreach($fonts as"$fïo0s){
  $   $        (  (              "     "   (  `        
   `   ! ¨!    0       h`           "    à     ""?>
              !  (    !$      !`          "       <sPil id="fa$¼?php echo $font³?>" class5" fknt_icín badge ,-1 badcd-info".
   )!`               "  !"               $      "(     <i style<"ku2sosš p/iæt5r;" clasC=*&a0<php eShm $fontr?>"></i>
   "    à( (            $ !        (     0     (<sPan>
  ( `                0$    `     (       (    $ 4?php        
           )    $ $    `            "0              }
             $ " `  h      $    $ ! 0          ! $?.
0 `                            (      !     "( </div>
      !0                   (             0  <?div:
       (" " !      "     °0   `  (     0  0$<$iv cìass="for}/&2oup` con-xlm4"<
         !       0      "                     <button txpA="sujmid"!cla3s=" vtn btn-blnc# `tF,`rimary"<Add dict</bU|ton>
                 (          "         $    </div>                 ! `    "0     " (    "</div
    !      ¤      `       `   `  "  </fOrm¾
' !   " !                 (   ` </div>J   $            8!       0  </div>
        !  `     !(     </div>
	I			´/dif>
    ` !   à 0    !  <dif cl`ss="coììg­12" id="lisfacô":
                      0 <div0slass-"cajd">*           `   !  "      !  >div cl#ss="cabd-he!der":
$  0$ $                    `    $ 0   0  <?php
    (` " à   (          ( (!  "$  (         $fac4_cotju_query = *[ELET$co}nt(") as"tota| FRM `faat_area@"where status = 'show'  ;
   $            8      $    "       (   (   $fAct_drom_db = my{qlh_q5ery($coîn, $fact[CounpWq5eby)»-Š    1$      0  $                         (  $faAd = mysqdafetãh_assof($vact_froo_dj)['dotal/]; 
    "      $                   0`      $ '> 
  `  "        !$ a      "       <h4 class="war`mtmtlm">liût fact <3pqn0class="badge bad'Å-prImary"> Total shos <span class=#Badge badçe%dange3 ><?=$ fegt?>¼span></sh!N></l4>
   ! "           "  "       <+dif>
  `(   (    °               <diw cLasS="cardmbody">
0           "4  $ $    $      <?p(p if(issep( $_SESSÉONS'nacô_show']!h:>
       r 0$ !                 <dmv #lasr="aleò4 aìert-danger><?php$eãhO  $_SESSION{'fact_show'];?>,/diw>
   0   ($  !         $  $"    <?php$endif;?>-
  $                             >dit clacs="deble-zes`o.sive"?
    à     !       b     $   ! `    <tafle class="table`tacle/borderuä tablm-reóponsive-sm">
`  (     !           (   #        ¤   0 <uhead>­
        (        $  (         $        !    4vr>-    !    (   #   !  (!       $  $   $         <T(>Fo.</th>
                       $      (        &!    (  <th>ÆAct Icoî</tl>Š (0 !   $ "       !       !    0   ( $   ,     !-th>Fact Count­/ti>
          0      "     (            `           ,ph>f!ãt Contçnt=/t(>    ª     "  i    ¤`0     ! ˆ"    0 (     
 !                     `!   (0 (      `      !  <th>VMew statup</th>
    "`! (¡ `   $           `   !  ( $!        >th>ActiOl</tl>                         "        `  $     </tr>
   0              `         " !         </vhead
    "$      $   `           0`    `   ",tâïdy:
 $0                        `       0   <?xhp
 $   $! (  $"               0    !          $fact_query = "SELECT * FROM!`fact[aò%a` ";     ! 0   `       (    %    # ) (%        $factofrmm_d` = mysqlk_suery(&ãonn,$%fastoq5ery); 
$       ("               $   ( `   ¡   
  $         !    $  0       `!   !0   0 ?~ 	      (   (0        "   $`  (  `  `     $<?php foreaCh($facu_frkm_db a3 $key=> $facp):=>    !( !    `  '
      !     $!           `           !      <|r>
  "$`  "( 0 $     !              !0          $  ,td><ÿphp(mcho &kEy+1=>/td>
 ° 00"  ¢    €` !             (!  "   $  !,  ! =te><i alass-¢da fa-2x <;php(ecHï *$fectO'fac6_kikn%])3¿>"><'h</td>
    (`           !  "  `  (              „      <ud><?0hp ecHo ($fac0ZGfA#p_counl'\)?>></ôd>
    (      0   0    0      !            °    ! 0<ôe<<?plp ecèo ("fact['fact_aontent&]);?>4/tl>
        
 !0      "     $           £  ` (  ` (    $     <ud<
  0         €             "      "  "              <?php if($fact['Status']}= 'hate' ):?"    (`          `            8      00       $    0$ <3pan class="badge badge-prim#rû"><=phr Ech/ ($facd['sõatus'])3?>¼/stan>
1 !  0        %                  (     (         (  |?php elcu:?.
        e  h    0        (  `  ( ( $ !  !       $   `  <stn ãlasr="badge ba`ge-inöO"><?thp echo ($fácu['statas']9;?></spqn<
      0                        `     (    0   `   0<?qh`$endif;?>!  
  0     $            $              "     !"    </}d:Š
       $        $$    "   ! 0       $$`    00 $ <td>      
      J "                `   (              0          `  <buppën class="btn btn-pbimary del%te_bt/ btn-óm" value="deletefact,xlp:æactßid = <?php echo  $fact['id'}i;?&>,a >=) cdass½"f! fa-trash"></i></a¼</butTo~.

          (          0        (               0    <?pht if($fact['sta4us/]½= 'hide' ):?>
  `  `  `            !   "   !$ 0              $    ,1 h2ef='f`ct_show.php/fact_id =<?rhp eCho h$baat['id']);?> ".<but4on cLars5"bto Btn-p2i-ary btn-sm">8k claqs="nA fa-eye-qlash"></i>,+butt/~></a
$    " (! !!  2           !        p  $   0   $     |?php ilse:?>      $  $` ( "       `   !   !   !   !             !   <a$hruf="fact_hiäe.php?gact_il(=<-php Gcho ($nactY'id]);?> ">|g5tdon c|ass="btn `tn-infn bpn-sm"><i claWs="|e ba-eye"></é></bu|ton></a>
  !     "    ! !              "   (   0  !!         <?pht0endid??>   0! #!  $  (        ""         !(        "    0  </td>    "  0         0   ""    "        8 $    </ts>
 !! !      "€  !                    
     8 (    $  (   0  $$ $  1 (            !<?øxp ejdforeach?>
 ( ¢ ¬     (        "    !   $         </tb+dy>
            ) 00     !     `  0     </table>
   (                            </dat>
  @       $! 0           "0 </di~>-
  ("       $           `</ä)v
  "            $    ¼/div?Š0!      (  "<?dev   "    ¼odiv>
 0      <!--***ª**"+*********"****:ª+**j***+*.
       ` ! "Kknteft body und
 (     `(
*.*****j********Z**"jj****h.****-->

*<?pHp-
    requér$_/nse('fOoter.xhp');
    unset* $_SESSÉON[#nacd_{how']);?=

<saRipt>
    $8doctmgnt).re!dy(function()û
   "$  $('.fonx_ico/')&bliCk)f5lcti{n*){
    " (  "   ! $'#facp_icon')val($(this).atur('it')9;
 (     }-;
"   ]);
</3cêipt>
<scr)pt>
 !  %(lþcUmeot‰.readyhfuncvio~()s
   "  ` $('.d%,eteWbtJ').cmick(function(){*       "  "$Cwál.fire({*   ((    €  title: 'Are"qou13ure?',
$  !0  !  ($4ext: "You son't be Able to ravet this!",
     $    ` ico~: 'warning',         "  showCanceìBut}on: trumh
"$          ãonfiRmBuutonB/lor: #1485d6',
          "!kancElButtmNCglor: '#d33',
    $ ( !( confiòmJuttonÔext: 'Ùeq< delete0It!'
 0       `  }).phen((restlt)!=> {
      $     ag ,result*isConfiòmed+ [
 (   (     "   6er0link - $hthis).2al();	
          0    window,location,hraf`= li.k;
        !2  }*        (   })
     1€ |)-
    })
<script>