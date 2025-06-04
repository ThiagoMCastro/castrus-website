<?php
$clientes = [
    [
        "logo" => 'assets/img/clients/horizonte.png',
        "link" => 'https://horizonte-rp.com/'
    ],
    [
        "logo" => 'https://i0.wp.com/www.postimtabacaria.com.br/wp-content/uploads/2021/10/logo.png?fit=320%2C320&ssl=1',
        "link" => 'https://www.postimtabacaria.com.br/'
    ]
];
$projects = [
    [
        'title' => 'Website Horizonte Roleplay',
        'link' => 'https://horizonte-rp.com',
        'tags' => ['website', 'design', 'codeigniter'],
        'description' => 'Website do servidor de SA-MP Horizonte Roleplay, com design responsivo e otimizado para SEO. Com backend em Codeigniter.',
        'image' => 'https://i.imgur.com/0zi7dwj.png'
    ],
    [
        'title' => 'Painel de Jogadores Horizonte RP',
        'link' => 'https://horizonte-rp.com/ucp',
        'tags' => ['php', 'website', 'codeigniter'],
        'description' => 'Painel de Jogadores do servidor de SA-MP Horizonte Roleplay, com diversos sistemas integrados.',
        'image' => 'https://i.imgur.com/R4iU7zX.png'
    ],
    [
        'title' => 'Game Launcher Horizonte RP',
        'link' => 'https://horizonte-rp.com',
        'tags' => ['Electron', 'game launcher', 'sa-mp'],
        'description' => 'Game Launcher do servidor de SA-MP Horizonte Roleplay, desenvolvido em ElectronJS.',
        'image' => 'https://i.imgur.com/v01l1ZF.png'
    ],
    [
        'title' => 'Website Sombras que Ecoam',
        'link' => 'https://sombrasqueeecoam.com.br/',
        'tags' => ['website', 'design', 'landing-page'],
        'description' => 'Website do curta-metragem Sombras que Ecoam, com design responsivo e otimizado para SEO.',
        'image' => 'https://i.imgur.com/CVac7Rh.png'
    ],
    [
        'title' => 'Website Postim Tabacaria',
        'link' => 'https://www.postimtabacaria.com.br/',
        'tags' => ['website', 'design', 'wordpress'],
        'description' => 'Website da Postim Tabacaria, com design responsivo e otimizado para SEO. Tema criado autoralmente para WordPress e PHP.',
        'image' => 'https://i.imgur.com/ZCtNDhY.png'
    ],
    [
        'title' => 'Diversos outros projetos',
        'link' => 'https://www.behance.net/castrusdigital',
        'tags' => ['website', 'design', 'fotografia'],
        'description' => 'Confira outros projetos desenvolvidos por nós, incluindo sites, design gráfico e fotografia no nosso Behance.',
        'image' => 'https://i.imgur.com/6gBgECH.png'
    ]
];
$menus = [
    [
        'title' => 'Portfólio',
        'link' => '#portfolio'
    ],
    [
        'title' => 'Contato',
        'link' => '#contato'
    ]
];
$social = [
    [
        'icon' => 'bi bi-linkedin',
        'link' => 'https://www.linkedin.com/in/thiagocdearaujo/'
    ],
    [
        'icon' => 'bi bi-instagram',
        'link' => 'https://www.instagram.com/castrus.digital'
    ],
    [
        'icon' => 'bi bi-github',
        'link' => 'https://github.com/thiagomcastro'
    ],
    [
        'icon' => 'bi bi-behance',
        'link' => 'https://www.behance.net/castrusdigital'
    ]
];
$services = [
    [
        'title' => 'Design Gráfico',
        'description' => 'Criação de identidade visual, logotipos, materiais gráficos e muito mais.',
        'image' => 'assets/img/services/design.png'
    ],
    [
        'title' => 'Desenvolvimento<br>Web',
        'description' => 'Sites responsivos, lojas virtuais e sistemas personalizados.',
        'image' => 'assets/img/services/sites.png'
    ],
    [
        'title' => 'Edição de Vídeo',
        'description' => 'Produção e edição de vídeos para redes sociais, YouTube e eventos.',
        'image' => 'assets/img/services/video.png'
    ],
    [
        'title' => 'Fotografia<br>Profissional',
        'description' => 'Fotografia de produtos, eventos e retratos.',
        'image' => 'assets/img/services/fotografia.png'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Castrus Digital ✦ Design, Web, Vídeo e Fotografia</title>
    <meta name="description"
        content="Castrus Digital é uma agência criativa especializada em design gráfico, desenvolvimento de sites, edição de vídeos e fotografia profissional. Transformamos ideias em experiências visuais únicas.">
    <meta name="keywords"
        content="agência de design, desenvolvimento web, edição de vídeo, fotografia, branding, identidade visual, Castrus Digital, design gráfico">
    <meta name="author" content="Castrus Digital">
    <meta property="og:title" content="Castrus Digital ✦ Design, Web, Vídeo e Fotografia">
    <meta property="og:description"
        content="Agência criativa que une design, tecnologia e arte para criar soluções digitais incríveis.">
    <meta property="og:image" content="assets/img/og-image.png">
    <meta property="og:url" content="https://www.castrus.digital">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div id="particles-js" style="position: absolute; width: 100%; height: 100%; z-index: -1;"></div>

    <div id="floating-lights-container"></div>
    <!-- Navbar -->
    <nav class="navbar navbar_top navbar-expand-lg shadow rounded-4">
        <div data-aos="zoom-in" class="container">
            <a class="navbar-brand logo fw-bold fs-4" href="#">
                <img width="100px" src="assets/img/logo.png" alt="Logo da Castrus Digital" loading="lazy">
            </a>

            <!-- Botão que ativa o offcanvas -->
            <button class="navbar-toggler bg-transparent border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <!-- Menu padrão para telas grandes -->
            <div class="d-none d-lg-flex ms-auto">
                <ul class="navbar-nav text-uppercase fw-medium">
                    <?php foreach ($menus as $menu): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= $menu['link'] ?>"><span class="shine">✦</span>
                                <?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start p-5" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header d-flex align-items-center justify-content-center">
            <button type="button" style="font-size: 3em;opacity: 1;background: transparent;"
                class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="text-yellow bi-x"></i></button>
        </div>
        <div class="offcanvas-body d-flex flex-column align-items-center justify-content-center">
            <img src="assets/img/logo.png" class="mb-5" width="100px" alt="Castrus Digital logo">
            <ul class="navbar-nav text-uppercase fw-medium">
                <?php foreach ($menus as $menu): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= $menu['link'] ?>"><span class="shine">✦</span>
                            <?= $menu['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>


    <!-- Hero -->
    <header class="text-center mt-5">
        <div class="container py-5 d-flex justify-content-center flex-column align-items-center">
            <h1 data-aos="zoom-in" class="display-4 fw-bold title">
                Sua nova agência <span class="marker-below random-shake-2 text-yellow">favorita</span>
            </h1>

            <p data-aos="fade-in" class="lead text-light mb-4 w-75">Oferecemos todos os serviços criativos que você precisa: <span
                    class="text-yellow">design
                    gráfico, desenvolvimento de sites, vídeos e fotografia.</span> Tudo em um só lugar.</p>
            <a data-aos="zoom-in" href="#contato" class="random-shake btn btn-warning text-dark fw-bold px-4 py-2">Pedir orçamento</a>
            <div data-aos="fade-down" class="mouse mt-5 random-shake"></div>
        </div>
    </header>
    <main class="container py-5">
        <!-- Sobre -->
        <section id="sobre" class="container mb-5">
            <div class="row">
                <div class="col-md-6 col-12 d-flex flex-column justify-content-center align-items-start">
                    <h2 data-aos="zoom-in" class="section-title mb-3 title-2">Quem somos? <span class="shine">✦</span></h2>
                    <p data-aos="fade-right" style="font-size: 1.5em" class="text-white regular">Somos uma <span class="text-yellow">agência
                            criativa</span> focada em unir
                        <span class="text-yellow">tecnologia, arte e estratégia</span>. Nossa
                        missão é transformar ideias em <span class="text-yellow">experiências visuais
                            impactantes</span>, com foco em resultados e
                        inovação.
                    </p>
                </div>
                <div data-aos="zoom-in" class="col-6 d-none d-md-flex flex-column justify-content-center align-items-end">
                    <img class="random-shake w-100" src="assets/img/check.png" alt="">
                </div>
            </div>
        </section>

        <!-- Serviços -->
        <section id="servicos" class="py-5 rounded-4 mb-5">
            <h2 data-aos="fade-down" class="section-title text-center mb-5 title">Nossos serviços <span class="shine">✦</span></h2>
            <div class="row text-center g-4">
                <?php foreach ($services as $service): ?>
                    <div data-aos="zoom-in" class="col-md-3">
                        <div class="card h-100 service_card">
                            <div class="card-body h-100 d-flex flex-column justify-content-center align-items-center">
                                <img src="<?= $service['image'] ?>" loading="lazy" width="100px" class="random-shake mb-3"
                                    alt="<?= $service['title'] ?>">
                                <h5 class="text-white card-title"><?= $service['title'] ?> <span class="shine">✦</span></h5>
                                <p style="text-align: center;font-size: 0.9em;word-wrap: break-word;"
                                    class="regular text-yellow"><?= $service['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Portfólio -->
        <section id="portfolio" class="mb-5">
            <h2 data-aos="fade-down" class="section-title text-center mb-4 title">Portfólio <span class="shine">✦</span></h2>
            <div class="row g-4">
                <?php foreach ($projects as $project): ?>
                    <div data-aos="zoom-in" class="col-12 mb-3">
                        <div class="card shadow-lg rounded-4 overflow-hidden service_card p-3 text-white">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-7 p-3">
                                    <h4 class="card-title text-yellow"><?= $project['title'] ?></h4>
                                    <p class="card-text regular"><?= $project['description'] ?></p>
                                    <div class="mb-3">
                                        <?php foreach ($project['tags'] as $tag): ?>
                                            <span class="badge bg-warning text-dark me-1"><?= $tag ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <a href="<?= $project['link'] ?>" target="_blank" class="btn btn-warning fw-bold"><i
                                            class="bi-box-arrow-in-right"></i> Ver projeto</a>
                                </div>
                                <div class="col-md-5">
                                    <div id="carousel-<?= md5($project['title']) ?>" class="carousel slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-item active">
                                            <img src="<?= $project['image'] ?>" class="d-block w-100 rounded"
                                                alt="<?= $project['title'] ?>">
                                        </div>
                                        <!-- Você pode adicionar mais imagens futuramente aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </section>


        <!-- Call to action -->
        <section data-aos="zoom-in" id="cta" class="py-5 d-flex justify-content-center align-items-center flex-column mb-5">
            <div class="cta_card p-5 text-center text-white rounded-4 shadow">
                <h2 class="section-title title text-yellow mb-4">Bora tirar a ideia do papel? <span
                        class="shine">✦</span></h2>
                <p class="lead mb-4">
                    Se você tem um projeto engavetado ou uma ideia que merece ganhar vida com design, tecnologia e
                    criatividade, estamos prontos para ajudar.
                </p>
                <a href="#contato" class="btn btn-warning fw-bold px-4 py-2">Falar com a Castrus</a>
            </div>
        </section>


        <!-- Contato -->
        <section id="contato" class="d-flex justify-content-center align-items-center flex-column mb-5">
            <h2 data-aos="fade-down" class="section-title text-center title mb-4">Encontre-nos <span class="shine">✦</span></h2>
            <div class="d-flex flex-row">
                <?php foreach ($social as $item): ?>
                    <a data-aos="zoom-in" href="<?= $item['link'] ?>" class="btn social-button btn-lg m-2" target="_blank">
                        <i class="<?= $item['icon'] ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer data-aos="zoom-in" class="text-center py-5 text-white regular">
        <img src="assets/img/logo.png" alt="Castrus Digital logo" width="100px" class="mb-3">
        <p class="py-2">Castrus Digital ✦ Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (obrigatório para Slick) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        $(document).ready(function () {
            AOS.init({
                once: false     // anima apenas uma vez
            });
        })

    </script>
    <script>
        const container = document.getElementById('floating-lights-container');

        for (let i = 0; i < 10; i++) {
            const light = document.createElement('img');
            light.src = 'assets/img/light.png';
            light.classList.add('light-glow');

            // Posicionamento aleatório no corpo da página
            const top = Math.random() * 3000; // altura máxima da página (ajuste conforme necessário)
            const left = Math.random() * window.innerWidth;

            light.style.top = `${top}px`;
            light.style.left = `${left}px`;

            // Animação com duração e delay diferentes
            light.style.animationDuration = `${20 + Math.random() * 10}s`;
            light.style.animationDelay = `${Math.random() * 10}s`;
            light.style.animationDirection = Math.random() > 0.5 ? 'alternate' : 'alternate-reverse';

            container.appendChild(light);
        }
        $(document).ready(function () {
            Fancybox.bind("[data-fancybox]", {
            });

            $('.logo-carousel').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>

    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 60,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": { "value": "#ffffff" },
                "shape": {
                    "type": "circle",
                    "stroke": { "width": 0, "color": "#000000" },
                    "polygon": { "nb_sides": 5 }
                },
                "opacity": {
                    "value": 0.3,
                    "random": true,
                    "anim": { "enable": false }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": { "enable": false }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 120,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out"
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": { "enable": true, "mode": "grab" },
                    "onclick": { "enable": false },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": { "opacity": 0.6 }
                    }
                }
            },
            "retina_detect": true
        });
    </script>
</body>

</html>