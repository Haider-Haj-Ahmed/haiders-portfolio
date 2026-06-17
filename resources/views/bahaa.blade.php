<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Bahaa Aldeen | Elite Dental & Aesthetic Studio</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        :root{
            --gold:#C9A84C;--gold2:#E8C97A;--gold3:#F5E6B8;
            --dark:#060608;--dark2:#0d0d10;--dark3:#141418;
            --glass:rgba(255,255,255,0.03);--glass-border:rgba(201,168,76,0.18);
        }
        *{margin:0;padding:0;box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{font-family:'Inter',sans-serif;background:var(--dark);color:#d8d4cc;overflow-x:hidden;-webkit-font-smoothing:antialiased}
        h1,h2,h3,.serif{font-family:'Cormorant Garamond',serif}

        /* ── LOADER ── */
        #loader{position:fixed;inset:0;background:var(--dark);z-index:99999;display:flex;flex-direction:column;align-items:center;justify-content:center;transition:opacity .9s ease}
        #loader.out{opacity:0;pointer-events:none}
        .l-ring{width:56px;height:56px;border-radius:50%;border:1px solid rgba(201,168,76,.15);border-top-color:var(--gold);animation:spin 1.1s linear infinite}
        .l-text{margin-top:18px;font-family:'Cormorant Garamond',serif;font-size:13px;letter-spacing:4px;color:var(--gold);opacity:.7;text-transform:uppercase}
        @keyframes spin{to{transform:rotate(360deg)}}

        /* ── CANVAS ── */
        #bg-canvas{position:fixed;inset:0;width:100%;height:100%;z-index:0;pointer-events:none}

        /* ── NOISE OVERLAY ── */
        .noise{position:fixed;inset:0;z-index:1;pointer-events:none;opacity:.025;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");background-size:200px}

        /* ── CURSOR ── */
        .cursor{position:fixed;width:420px;height:420px;border-radius:50%;pointer-events:none;z-index:2;background:radial-gradient(circle,rgba(201,168,76,.07),transparent 65%);transform:translate(-50%,-50%);mix-blend-mode:screen;transition:opacity .3s;opacity:0}

        /* ── NAV ── */
        nav{position:fixed;top:0;left:0;right:0;z-index:50;padding:20px 48px;display:flex;justify-content:space-between;align-items:center;transition:all .5s ease}
        nav.scrolled{background:rgba(6,6,8,.88);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border-bottom:1px solid var(--glass-border);padding:14px 48px}
        .nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none}
        .nav-logo i{color:var(--gold);font-size:18px}
        .nav-logo span{font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:500;color:#fff;letter-spacing:.5px}
        .nav-links{display:flex;gap:36px;list-style:none}
        .nav-links a{color:rgba(255,255,255,.6);text-decoration:none;font-size:12px;letter-spacing:2px;text-transform:uppercase;font-weight:500;transition:color .3s}
        .nav-links a:hover{color:var(--gold)}
        .nav-cta{border:1px solid var(--gold);color:var(--gold);padding:8px 22px;border-radius:30px;font-size:11px;letter-spacing:2px;text-transform:uppercase;text-decoration:none;font-weight:600;transition:all .3s}
        .nav-cta:hover{background:var(--gold);color:#000}
        .hamburger{display:none;background:none;border:none;color:#fff;font-size:22px;cursor:pointer}

        /* ── HERO ── */
        #home{position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;z-index:10;padding-top:100px;padding-bottom:60px}
        .hero-inner{max-width:1200px;margin:0 auto;padding:0 48px;width:100%;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
        .hero-badge{display:inline-flex;align-items:center;gap:10px;background:rgba(201,168,76,.06);border:1px solid rgba(201,168,76,.2);border-radius:40px;padding:8px 18px;margin-bottom:32px}
        .hero-badge .dot{width:6px;height:6px;border-radius:50%;background:var(--gold);animation:pulse-dot 2s infinite}
        @keyframes pulse-dot{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(.8)}}
        .hero-badge span{font-size:10px;letter-spacing:3px;text-transform:uppercase;color:var(--gold);font-weight:600}
        .hero-title{font-size:clamp(3.2rem,5.5vw,6rem);line-height:1.0;font-weight:300;color:#fff;margin-bottom:28px;letter-spacing:-.5px}
        .hero-title strong{font-weight:600;font-style:italic;background:linear-gradient(135deg,var(--gold2),var(--gold));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
        .hero-sub{font-size:15px;line-height:1.8;color:rgba(255,255,255,.55);max-width:440px;margin-bottom:44px}
        .hero-sub em{color:var(--gold);font-style:normal;font-weight:500}
        .hero-btns{display:flex;gap:14px;flex-wrap:wrap}
        .btn-primary{background:linear-gradient(135deg,var(--gold),var(--gold2));color:#000;padding:14px 34px;border-radius:40px;font-size:11px;letter-spacing:2.5px;text-transform:uppercase;font-weight:700;text-decoration:none;transition:all .35s;box-shadow:0 8px 32px rgba(201,168,76,.25)}
        .btn-primary:hover{transform:translateY(-2px);box-shadow:0 14px 40px rgba(201,168,76,.35)}
        .btn-ghost{border:1px solid rgba(255,255,255,.2);color:rgba(255,255,255,.75);padding:14px 34px;border-radius:40px;font-size:11px;letter-spacing:2.5px;text-transform:uppercase;font-weight:500;text-decoration:none;transition:all .35s;backdrop-filter:blur(8px)}
        .btn-ghost:hover{border-color:var(--gold);color:var(--gold)}
        .hero-stats{display:flex;gap:44px;margin-top:56px;padding-top:44px;border-top:1px solid rgba(255,255,255,.08)}
        .hero-stats .stat span{font-family:'Cormorant Garamond',serif;font-size:3rem;font-weight:300;color:#fff;line-height:1;display:block}
        .hero-stats .stat small{font-size:10px;letter-spacing:2.5px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-top:6px;display:block}
        .hero-img-wrap{position:relative;display:flex;justify-content:center}
        .hero-img-ring{position:relative;width:420px;height:420px}
        .ring-outer{position:absolute;inset:-20px;border-radius:50%;border:1px solid rgba(201,168,76,.15);animation:ring-spin 20s linear infinite}
        .ring-middle{position:absolute;inset:-6px;border-radius:50%;border:1px solid rgba(201,168,76,.25)}
        .hero-img-inner{position:relative;width:100%;height:100%;border-radius:50%;overflow:hidden;border:1px solid rgba(201,168,76,.3)}
        .hero-img-inner img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform .8s ease}
        .hero-img-inner:hover img{transform:scale(1.06)}
        .hero-img-inner::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(201,168,76,.12),transparent 60%);pointer-events:none}
        .hero-badge-float{position:absolute;background:rgba(13,13,16,.92);backdrop-filter:blur(16px);border:1px solid var(--glass-border);border-radius:16px;padding:14px 20px;white-space:nowrap}
        .hbf-tl{bottom:-20px;left:-40px}
        .hbf-br{top:-10px;right:-50px}
        .hero-badge-float .f-label{font-size:9px;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:4px}
        .hero-badge-float .f-val{font-size:20px;font-family:'Cormorant Garamond',serif;color:#fff;font-weight:500}
        @keyframes ring-spin{to{transform:rotate(360deg)}}

        /* ── DIVIDER ── */
        .divider{display:flex;align-items:center;gap:16px;margin:0 auto;max-width:240px;opacity:.3}
        .divider::before,.divider::after{content:'';flex:1;height:1px;background:var(--gold)}
        .divider i{color:var(--gold);font-size:12px}

        /* ── SECTIONS ── */
        section{position:relative;z-index:10}
        .s-label{font-size:10px;letter-spacing:4px;text-transform:uppercase;color:var(--gold);font-weight:600;margin-bottom:14px;display:block}
        .s-title{font-size:clamp(2.4rem,4vw,3.8rem);font-weight:300;color:#fff;line-height:1.1;margin-bottom:22px}
        .s-title em{font-style:italic;font-weight:300}
        .s-line{width:60px;height:1px;background:linear-gradient(90deg,var(--gold),transparent);margin:0 auto 20px}

        /* ── PHILOSOPHY ── */
        #philosophy{padding:120px 0;background:var(--dark2)}
        .phi-wrap{max-width:1200px;margin:0 auto;padding:0 48px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
        .phi-quote{font-family:'Cormorant Garamond',serif;font-size:clamp(1.5rem,2.5vw,2rem);font-weight:300;font-style:italic;color:rgba(255,255,255,.85);line-height:1.6;border-left:2px solid var(--gold);padding-left:32px;margin-bottom:40px}
        .phi-body{font-size:14px;line-height:1.9;color:rgba(255,255,255,.5);margin-bottom:36px}
        .phi-pillars{display:grid;grid-template-columns:1fr 1fr;gap:16px}
        .pillar{background:var(--glass);border:1px solid var(--glass-border);border-radius:16px;padding:24px;transition:all .35s}
        .pillar:hover{background:rgba(201,168,76,.05);border-color:rgba(201,168,76,.35);transform:translateY(-3px)}
        .pillar i{font-size:22px;color:var(--gold);margin-bottom:14px}
        .pillar h4{font-size:13px;font-weight:600;color:#fff;letter-spacing:.5px;margin-bottom:6px}
        .pillar p{font-size:11px;color:rgba(255,255,255,.4);line-height:1.6}

        /* ── SERVICES ── */
        #services{padding:120px 0;background:var(--dark)}
        .services-wrap{max-width:1200px;margin:0 auto;padding:0 48px}
        .services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:64px}
        .svc{background:var(--glass);border:1px solid var(--glass-border);border-radius:20px;padding:36px 30px;transition:all .4s;cursor:default;position:relative;overflow:hidden}
        .svc::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);transform:scaleX(0);transition:transform .4s}
        .svc:hover::before{transform:scaleX(1)}
        .svc:hover{background:rgba(201,168,76,.04);border-color:rgba(201,168,76,.35);transform:translateY(-6px);box-shadow:0 24px 60px rgba(0,0,0,.4)}
        .svc-icon{width:56px;height:56px;border-radius:14px;background:rgba(201,168,76,.08);display:flex;align-items:center;justify-content:center;margin-bottom:28px;transition:background .3s}
        .svc:hover .svc-icon{background:rgba(201,168,76,.15)}
        .svc-icon i{font-size:26px;color:var(--gold)}
        .svc h3{font-size:18px;font-weight:600;color:#fff;margin-bottom:12px;font-family:'Cormorant Garamond',serif;letter-spacing:.3px}
        .svc p{font-size:13px;color:rgba(255,255,255,.48);line-height:1.8}
        .svc-link{display:inline-flex;align-items:center;gap:6px;color:var(--gold);font-size:11px;letter-spacing:2px;text-transform:uppercase;text-decoration:none;margin-top:22px;font-weight:600;opacity:.7;transition:opacity .3s}
        .svc:hover .svc-link{opacity:1}

        /* ── GALLERY ── */
        #gallery{padding:120px 0;background:var(--dark2)}
        .gallery-wrap{max-width:1300px;margin:0 auto;padding:0 48px}
        .swiper{margin-top:64px;padding-bottom:48px!important}
        .swiper-slide{height:auto}
        .gal-card{border-radius:20px;overflow:hidden;position:relative;height:480px;border:1px solid var(--glass-border)}
        .gal-card img{width:100%;height:100%;object-fit:cover;transition:transform .8s ease}
        .gal-card:hover img{transform:scale(1.08)}
        .gal-overlay{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.85) 0%,transparent 55%);opacity:0;transition:opacity .4s}
        .gal-card:hover .gal-overlay{opacity:1}
        .gal-info{position:absolute;bottom:0;left:0;right:0;padding:28px;transform:translateY(8px);transition:transform .4s;opacity:0}
        .gal-card:hover .gal-info{opacity:1;transform:translateY(0)}
        .gal-info h4{font-family:'Cormorant Garamond',serif;font-size:22px;color:#fff;margin-bottom:6px}
        .gal-info p{font-size:11px;letter-spacing:2px;color:var(--gold);text-transform:uppercase}
        .swiper-pagination-bullet{background:rgba(201,168,76,.3)!important;opacity:1!important;width:6px!important;height:6px!important;transition:all .3s}
        .swiper-pagination-bullet-active{background:var(--gold)!important;width:24px!important;border-radius:3px!important}
        .swiper-button-next,.swiper-button-prev{width:44px!important;height:44px!important;background:rgba(201,168,76,.1)!important;border:1px solid var(--glass-border)!important;border-radius:50%!important;backdrop-filter:blur(12px)!important;color:var(--gold)!important}
        .swiper-button-next::after,.swiper-button-prev::after{font-size:13px!important;font-weight:700!important}

        /* ── QUOTE ── */
        #quote-sec{padding:120px 0;background:var(--dark);position:relative;overflow:hidden}
        .quote-bg{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;opacity:.03;font-family:'Cormorant Garamond',serif;font-size:40vw;color:#fff;user-select:none;line-height:1}
        .quote-inner{max-width:900px;margin:0 auto;padding:0 48px;text-align:center;position:relative;z-index:2}
        .q-mark{font-family:'Cormorant Garamond',serif;font-size:120px;line-height:.8;color:var(--gold);opacity:.25;display:block;margin-bottom:16px}
        .q-text{font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.6rem);font-weight:300;font-style:italic;color:rgba(255,255,255,.9);line-height:1.55;margin-bottom:40px}
        .q-author{font-size:11px;letter-spacing:4px;text-transform:uppercase;color:var(--gold);font-weight:600}
        .q-deco{display:flex;justify-content:center;gap:8px;margin-top:20px;opacity:.4}
        .q-deco i{color:var(--gold);font-size:10px}

        /* ── CONTACT ── */
        #contact{padding:120px 0;background:var(--dark2)}
        .contact-wrap{max-width:1200px;margin:0 auto;padding:0 48px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
        .contact-info{padding-top:16px}
        .contact-info .s-title{margin-bottom:16px}
        .contact-info p{font-size:14px;line-height:1.85;color:rgba(255,255,255,.5);margin-bottom:44px}
        .c-item{display:flex;align-items:center;gap:18px;margin-bottom:22px}
        .c-icon{width:44px;height:44px;border-radius:12px;background:rgba(201,168,76,.08);border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;flex-shrink:0}
        .c-icon i{color:var(--gold);font-size:16px}
        .c-item span,.c-item a{font-size:13px;color:rgba(255,255,255,.6);text-decoration:none;transition:color .3s;line-height:1.5}
        .c-item a:hover{color:var(--gold)}
        .c-form{background:rgba(255,255,255,.02);border:1px solid var(--glass-border);border-radius:24px;padding:44px}
        .c-form input,.c-form textarea{width:100%;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.08);border-radius:12px;padding:14px 18px;color:#fff;font-size:13px;font-family:'Inter',sans-serif;outline:none;transition:border-color .3s;margin-bottom:16px;resize:none}
        .c-form input::placeholder,.c-form textarea::placeholder{color:rgba(255,255,255,.3)}
        .c-form input:focus,.c-form textarea:focus{border-color:rgba(201,168,76,.4)}
        .c-form textarea{min-height:100px}
        .c-form button{width:100%;background:linear-gradient(135deg,var(--gold),var(--gold2));border:none;color:#000;padding:16px;border-radius:40px;font-size:11px;letter-spacing:3px;text-transform:uppercase;font-weight:700;cursor:pointer;transition:all .35s;box-shadow:0 8px 32px rgba(201,168,76,.2)}
        .c-form button:hover{transform:translateY(-2px);box-shadow:0 14px 40px rgba(201,168,76,.35)}

        /* ── FOOTER ── */
        footer{background:var(--dark);padding:56px 48px 32px;border-top:1px solid rgba(255,255,255,.05);position:relative;z-index:10}
        .footer-inner{max-width:1200px;margin:0 auto;display:flex;flex-direction:column;align-items:center;gap:24px}
        .footer-logo{display:flex;align-items:center;gap:10px}
        .footer-logo i{color:var(--gold)}
        .footer-logo span{font-family:'Cormorant Garamond',serif;font-size:20px;color:#fff}
        .footer-links{display:flex;gap:32px;list-style:none}
        .footer-links a{font-size:11px;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.35);text-decoration:none;transition:color .3s}
        .footer-links a:hover{color:var(--gold)}
        .footer-social a{color:rgba(255,255,255,.3);font-size:18px;text-decoration:none;transition:color .3s}
        .footer-social a:hover{color:var(--gold)}
        .footer-copy{font-size:11px;color:rgba(255,255,255,.2);letter-spacing:1.5px;text-align:center}
        .footer-copy a{color:var(--gold);text-decoration:none;opacity:.7}
        .footer-copy a:hover{opacity:1}

        /* ── SCROLL LINE ── */
        .scroll-line{position:fixed;top:0;left:0;height:2px;background:linear-gradient(90deg,var(--gold),var(--gold2));z-index:200;transition:width .1s linear;width:0%}

        /* ── MOBILE MENU ── */
        .mob-menu{position:fixed;top:0;right:0;height:100vh;width:280px;background:rgba(6,6,8,.97);backdrop-filter:blur(30px);z-index:200;transform:translateX(100%);transition:transform .4s ease;padding:80px 40px;display:flex;flex-direction:column;gap:28px;border-left:1px solid var(--glass-border)}
        .mob-menu.open{transform:translateX(0)}
        .mob-menu a{color:rgba(255,255,255,.7);text-decoration:none;font-size:22px;font-family:'Cormorant Garamond',serif;font-weight:300;letter-spacing:1px;transition:color .3s}
        .mob-menu a:hover{color:var(--gold)}
        .mob-close{position:absolute;top:24px;right:24px;background:none;border:none;color:#fff;font-size:20px;cursor:pointer}

        /* ══════════════════════════════════════
               RESPONSIVE - PHOTO ALWAYS VISIBLE
           ══════════════════════════════════════ */
        @media(max-width:1024px){
            .hero-inner{gap:40px}
            .hero-img-ring{width:350px;height:350px}
        }
        @media(max-width:900px){
            #home{padding-top:130px;padding-bottom:60px;min-height:auto}
            .hero-inner,.phi-wrap,.contact-wrap{grid-template-columns:1fr;gap:48px}
            .services-grid{grid-template-columns:1fr 1fr}
            .hero-img-wrap{display:flex;justify-content:center;margin-top:20px;margin-bottom:20px}
            .hero-img-ring{width:280px;height:280px}
            .ring-outer{inset:-14px}
            .ring-middle{inset:-4px}
            .hero-badge-float{display:none}
            .hero-stats{gap:24px;flex-wrap:wrap;justify-content:center}
            nav{padding:16px 24px}
            nav.scrolled{padding:12px 24px}
            .nav-links,.nav-cta{display:none}
            .hamburger{display:block}
            .hero-inner,.phi-wrap,.services-wrap,.gallery-wrap,.contact-wrap,.footer-inner{padding:0 24px}
            .contact-wrap{padding:0 24px}
            .hero-btns{justify-content:center}
            .hero-title{font-size:clamp(2.4rem,7vw,4rem);text-align:center}
            .hero-sub{text-align:center;max-width:100%}
            .hero-badge{justify-content:center;margin-left:auto;margin-right:auto;max-width:fit-content}
            .phi-pillars{grid-template-columns:1fr 1fr}
            .c-form{padding:30px 24px}
            .c-form input,.c-form textarea{padding:12px 14px}
            .c-form button{padding:14px}
            .footer-links{gap:18px;flex-wrap:wrap;justify-content:center}
        }
        @media(max-width:600px){
            #home{padding-top:120px;padding-bottom:40px}
            .hero-inner{padding:0 20px;gap:32px}
            .services-grid{grid-template-columns:1fr}
            .phi-pillars{grid-template-columns:1fr}
            .hero-stats{flex-direction:column;gap:16px;align-items:center}
            .hero-btns{flex-direction:column;align-items:center;gap:12px}
            .btn-primary,.btn-ghost{width:100%;text-align:center;padding:12px 24px}
            .phi-wrap,.services-wrap,.gallery-wrap,.contact-wrap{padding:0 20px}
            .hero-title{font-size:clamp(2rem,9vw,3rem)}
            .hero-sub{font-size:14px}
            .hero-stats .stat span{font-size:2.4rem}
            .hero-stats .stat small{font-size:9px}
            .c-form{padding:24px 18px}
            .nav-logo span{font-size:18px}
            .swiper-button-next,.swiper-button-prev{width:36px!important;height:36px!important}
            .swiper-button-next::after,.swiper-button-prev::after{font-size:10px!important}
            .gal-card{height:360px}
            .q-mark{font-size:80px}
            .q-text{font-size:1.3rem}
            #loader .l-text{font-size:11px}
            .hero-img-ring{width:220px;height:220px}
        }
        @media(max-width:380px){
            #home{padding-top:110px;padding-bottom:30px}
            .hero-inner{padding:0 16px;gap:24px}
            .hero-title{font-size:1.8rem}
            .hero-badge{padding:6px 12px;font-size:9px;max-width:90%}
            .hero-badge span{font-size:9px;letter-spacing:2px}
            .hero-sub{font-size:13px}
            .nav-logo i{font-size:16px}
            .nav-logo span{font-size:16px}
            .mob-menu a{font-size:20px}
            .hero-img-ring{width:180px;height:180px}
            .ring-outer{inset:-10px}
        }
    </style>
</head>
<body>

<!-- Scroll progress -->
<div class="scroll-line" id="sline"></div>

<!-- Noise -->
<div class="noise"></div>

<!-- Cursor -->
<div class="cursor" id="cur"></div>

<!-- Loader -->
<div id="loader">
    <div class="l-ring"></div>
    <div class="l-text">Dr. Bahaa Aldeen</div>
</div>

<!-- Canvas -->
<canvas id="bg-canvas"></canvas>

<!-- NAV -->
<nav id="nav">
    <a href="#home" class="nav-logo">
        <i class="fas fa-tooth"></i>
        <span>Dr. Bahaa Aldeen</span>
    </a>
    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#philosophy">Philosophy</a></li>
        <li><a href="#services">Artistry</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Concierge</a></li>
    </ul>
    <a href="#contact" class="nav-cta">Book Now</a>
    <button class="hamburger" id="hbtn"><i class="fas fa-bars"></i></button>
</nav>

<!-- MOBILE MENU -->
<div class="mob-menu" id="mobmenu">
    <button class="mob-close" id="mcls"><i class="fas fa-times"></i></button>
    <a href="#home">Home</a>
    <a href="#philosophy">Philosophy</a>
    <a href="#services">Artistry</a>
    <a href="#gallery">Gallery</a>
    <a href="#contact">Concierge</a>
</div>

<!-- ══ HERO ══ -->
<section id="home">
    <div class="hero-inner">
        <div data-aos="fade-right" data-aos-duration="1100">
            <div class="hero-badge">
                <span class="dot"></span>
                <span>Elite Dental Architect · Homs, Syria</span>
            </div>
            <h1 class="hero-title">
                Where Science<br>Meets <strong>Artistry</strong>
            </h1>
            <p class="hero-sub">
                Dr. Bahaa Aldeen — precision-focused smile architect and dental artist. Advancing mastery at <em>WPU University, Hama</em>.
            </p>
            <div class="hero-btns">
                <a href="#contact" class="btn-primary">Begin the Journey <i class="fas fa-arrow-right" style="margin-left:6px;font-size:10px"></i></a>
                <a href="#gallery" class="btn-ghost">Signature Smiles</a>
            </div>
            <div class="hero-stats">
                <div class="stat"><span>1+</span><small>Year of Excellence</small></div>
                <div class="stat"><span>20+</span><small>Transformations</small></div>
                <div class="stat"><span>4.9★</span><small>Patient Rating</small></div>
            </div>
        </div>
        <div class="hero-img-wrap" data-aos="fade-left" data-aos-duration="1100">
            <div class="hero-img-ring">
                <div class="ring-outer"></div>
                <div class="ring-middle"></div>
                <div class="hero-img-inner">
                    <img src="/baa.jpeg" alt="Dr. Bahaa Aldeen" onerror="this.src='https://placehold.co/420x420/141418/C9A84C?text=Dr.+Bahaa'">
                </div>
            </div>
            <div class="hero-badge-float hbf-tl">
                <div class="f-label">Smile cases</div>
                <div class="f-val">20+</div>
            </div>
            <div class="hero-badge-float hbf-br">
                <div class="f-label">Patient rating</div>
                <div class="f-val">4.9 ★</div>
            </div>
        </div>
    </div>
    <div style="position:absolute;bottom:36px;left:50%;transform:translateX(-50%);z-index:20;animation:afloat 2.5s ease-in-out infinite;cursor:pointer" onclick="document.getElementById('philosophy').scrollIntoView({behavior:'smooth'})">
        <i class="fas fa-chevron-down" style="color:var(--gold);font-size:18px;opacity:.7"></i>
    </div>
</section>

<!-- ══ PHILOSOPHY ══ -->
<section id="philosophy">
    <div class="phi-wrap">
        <div data-aos="fade-right" data-aos-delay="100">
            <span class="s-label">The Bahaa Code</span>
            <h2 class="s-title">Beyond Smile <em>Design</em></h2>
            <blockquote class="phi-quote">"I don't just restore teeth — I sculpt confidence. Every intervention respects facial harmony, gingival architecture, and the unique story of each patient."</blockquote>
            <p class="phi-body">Using digital smile design, premium ceramics, and micro-surgery techniques, each case becomes a masterpiece of biomimetic dentistry — merging the precision of science with the sensitivity of art.</p>
        </div>
        <div data-aos="fade-left" data-aos-delay="200">
            <div class="phi-pillars">
                <div class="pillar"><i class="fas fa-microscope"></i><h4>Precision</h4><p>Micron-level margins, zero compromise</p></div>
                <div class="pillar"><i class="fas fa-palette"></i><h4>Harmony</h4><p>Facial-driven, proportional design</p></div>
                <div class="pillar"><i class="fas fa-chart-line"></i><h4>Durability</h4><p>Built for a lifetime of function</p></div>
                <div class="pillar"><i class="fas fa-feather-alt"></i><h4>Art de Vivre</h4><p>A boutique, unhurried experience</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ══ SERVICES ══ -->
<section id="services">
    <div class="services-wrap">
        <div class="section-header" data-aos="fade-up">
            <span class="s-label">Mastery Services</span>
            <h2 class="s-title">Sculptural <em>Dentistry</em></h2>
            <div class="s-line"></div>
        </div>
        <div class="services-grid">
            <div class="svc" data-aos="fade-up" data-aos-delay="0">
                <div class="svc-icon"><i class="fas fa-crown"></i></div>
                <h3>Ceramic Mastery</h3>
                <p>Ultra-thin veneers, full-contour zirconia & lithium disilicate — invisible restorations with supreme aesthetics.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
            <div class="svc" data-aos="fade-up" data-aos-delay="80">
                <div class="svc-icon"><i class="fas fa-teeth-open"></i></div>
                <h3>Full Mouth Rehab</h3>
                <p>Neuromuscular & aesthetic rehabilitation for TMD, worn dentition, and gummy smiles.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
            <div class="svc" data-aos="fade-up" data-aos-delay="160">
                <div class="svc-icon"><i class="fas fa-smile"></i></div>
                <h3>Smile Makeover</h3>
                <p>Complete digital mock-up and wax try-in before execution. Tailored entirely to your personality.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
            <div class="svc" data-aos="fade-up" data-aos-delay="240">
                <div class="svc-icon"><i class="fas fa-tooth"></i></div>
                <h3>Biological Implants</h3>
                <p>Guided surgery & immediate loading. Bone regeneration with premium-tier brands.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
            <div class="svc" data-aos="fade-up" data-aos-delay="320">
                <div class="svc-icon"><i class="fas fa-star"></i></div>
                <h3>Holistic Whitening</h3>
                <p>Pain-free laser & enamel-safe whitening with professional desensitizing aftercare protocol.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
            <div class="svc" data-aos="fade-up" data-aos-delay="400">
                <div class="svc-icon"><i class="fas fa-hand-peace"></i></div>
                <h3>Emergency Concierge</h3>
                <p>Same-day VIP care for fractures, acute infections, or unforeseen aesthetic emergencies.</p>
                <a href="#contact" class="svc-link">Enquire <i class="fas fa-arrow-right" style="font-size:9px"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ══ GALLERY ══ -->
<section id="gallery">
    <div class="gallery-wrap">
        <div class="section-header" data-aos="fade-up">
            <span class="s-label">Transformation Gallery</span>
            <h2 class="s-title">Real Smiles, <em>Real Stories</em></h2>
            <div class="s-line"></div>
        </div>
        <div class="swiper mySwiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gal-card">
                        <img src="/veeners2.jpg" alt="Veneers" onerror="this.src='https://placehold.co/700x480/141418/C9A84C?text=Veneers'">
                        <div class="gal-overlay"></div>
                        <div class="gal-info"><h4>Veneers Transformation</h4><p>Ceramic Artistry</p></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gal-card">
                        <img src="/fullRehab.webp" alt="Full Rehab" onerror="this.src='https://placehold.co/700x480/141418/C9A84C?text=Full+Rehab'">
                        <div class="gal-overlay"></div>
                        <div class="gal-info"><h4>Full Mouth Rehab</h4><p>Neuromuscular Design</p></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gal-card">
                        <img src="/beforeafter.webp" alt="Smile Design" onerror="this.src='https://placehold.co/700x480/141418/C9A84C?text=Smile+Design'">
                        <div class="gal-overlay"></div>
                        <div class="gal-info"><h4>Smile Design</h4><p>Digital Workflow</p></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gal-card">
                        <img src="/implant.webp" alt="Implant" onerror="this.src='https://placehold.co/700x480/141418/C9A84C?text=Implant'">
                        <div class="gal-overlay"></div>
                        <div class="gal-info"><h4>Implant Restoration</h4><p>Guided Surgery</p></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- ══ QUOTE ══ -->
<section id="quote-sec">
    <div class="quote-bg">"</div>
    <div class="quote-inner" data-aos="zoom-in" data-aos-duration="1000">
        <span class="q-mark">"</span>
        <p class="q-text">The mouth is a mirror of the body. A dentist is not merely a tooth doctor, but a guardian of overall health and confidence.</p>
        <span class="q-author">— Dr. Bahaa Aldeen</span>
        <div class="q-deco">
            <i class="fas fa-tooth"></i>
            <i class="fas fa-tooth"></i>
            <i class="fas fa-tooth"></i>
        </div>
    </div>
</section>

<!-- ══ CONTACT ══ -->
<section id="contact">
    <div class="contact-wrap">
        <div class="contact-info" data-aos="fade-right">
            <span class="s-label">Exclusive Access</span>
            <h2 class="s-title">Reserve Your<br><em>Smile Concierge</em></h2>
            <p>Whether it's a full digital diagnosis or a discreet VIP consultation, Dr. Bahaa Aldeen's practice responds within 4 hours.</p>
            <div class="c-item">
                <div class="c-icon"><i class="fas fa-map-marker-alt"></i></div>
                <span>Homs, Syria — Central Medical District</span>
            </div>
            <div class="c-item">
                <div class="c-icon"><i class="fas fa-graduation-cap"></i></div>
                <span>Student at WPU University, Hama, Syria</span>
            </div>
            <div class="c-item">
                <div class="c-icon"><i class="fas fa-phone-alt"></i></div>
                <a href="tel:+9630981636931">0981636931</a>
            </div>
            <div class="c-item">
                <div class="c-icon"><i class="fab fa-instagram"></i></div>
                <a href="https://instagram.com/2o.xvi" target="_blank">@2o.xvi</a>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-delay="150">
            <div class="c-form">
                <input type="text" placeholder="Full name">
                <input type="email" placeholder="Email address">
                <input type="tel" placeholder="Phone number">
                <textarea placeholder="Describe your smile goals…"></textarea>
                <button type="button">Request Consultation &nbsp; <i class="fas fa-calendar-check"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- ══ FOOTER ══ -->
<footer>
    <div class="footer-inner">
        <div class="footer-logo">
            <i class="fas fa-tooth"></i>
            <span>Dr. Bahaa Aldeen</span>
        </div>
        <ul class="footer-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#philosophy">Philosophy</a></li>
            <li><a href="#services">Artistry</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Concierge</a></li>
        </ul>
        <div class="footer-social">
            <a href="https://instagram.com/2o.xvi" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="footer-copy">© 2026 — Precision Aesthetic & Dental Craft · Homs, Syria<br>Developed by <a href="https://haj-ahmed.up.railway.app/corporate-haider" target="_blank">Haider Al-Haj Ahmed</a></p>
    </div>
</footer>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    AOS.init({duration:900,once:true,offset:80,easing:'ease-out-cubic'});

    (function(){
        const L=document.getElementById('loader');
        function hide(){L.classList.add('out');setTimeout(()=>L.style.display='none',900)}
        window.addEventListener('load',()=>setTimeout(hide,400));
        setTimeout(hide,3500);
    })();

    window.addEventListener('scroll',()=>{
        const p=(window.scrollY/(document.documentElement.scrollHeight-window.innerHeight))*100;
        document.getElementById('sline').style.width=p+'%';
    });

    const navEl=document.getElementById('nav');
    let lastY=0;
    window.addEventListener('scroll',()=>{
        const y=window.scrollY;
        if(y>60) navEl.classList.add('scrolled');
        else navEl.classList.remove('scrolled');
        if(window.innerWidth>900){
            navEl.style.transform=y>lastY&&y>120?'translateY(-100%)':'translateY(0)';
        }
        lastY=y;
    });

    const mm=document.getElementById('mobmenu');
    document.getElementById('hbtn').onclick=()=>mm.classList.add('open');
    document.getElementById('mcls').onclick=()=>mm.classList.remove('open');
    mm.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>mm.classList.remove('open')));

    document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{
        e.preventDefault();
        const t=document.querySelector(a.getAttribute('href'));
        if(t) t.scrollIntoView({behavior:'smooth',block:'start'});
    }));

    const cur=document.getElementById('cur');
    if(window.innerWidth>900){
        document.addEventListener('mousemove',e=>{
            cur.style.left=e.clientX+'px';cur.style.top=e.clientY+'px';cur.style.opacity='1';
        });
        document.addEventListener('mouseleave',()=>cur.style.opacity='0');
    }

    new Swiper('.mySwiper',{
        slidesPerView:1,spaceBetween:24,loop:true,
        pagination:{el:'.swiper-pagination',clickable:true},
        navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'},
        autoplay:{delay:4500,disableOnInteraction:false},
        breakpoints:{768:{slidesPerView:2},1100:{slidesPerView:3}}
    });

    (async function(){
        try{
            const s=await import('https://unpkg.com/three@0.128.0/build/three.module.js');
            const THREE=s;
            const canvas=document.getElementById('bg-canvas');
            const renderer=new THREE.WebGLRenderer({canvas,alpha:true,antialias:true});
            renderer.setPixelRatio(Math.min(window.devicePixelRatio,2));
            renderer.setSize(window.innerWidth,window.innerHeight);
            renderer.setClearColor(0x000000,0);

            const scene=new THREE.Scene();
            const cam=new THREE.PerspectiveCamera(60,window.innerWidth/window.innerHeight,.1,100);
            cam.position.z=4;

            const tg=new THREE.Group();
            const cMat=new THREE.MeshStandardMaterial({color:0xC9A84C,metalness:.7,roughness:.15,emissive:0x2a1a00,emissiveIntensity:.2});
            const crown=new THREE.Mesh(new THREE.SphereGeometry(.75,64,64),cMat);
            crown.scale.set(1,.88,.68);crown.position.y=.28;tg.add(crown);
            const rMat=new THREE.MeshStandardMaterial({color:0xA8842A,metalness:.55,roughness:.25});
            const rGeo=new THREE.CylinderGeometry(.38,.26,.85,16);
            const r1=new THREE.Mesh(rGeo,rMat);r1.position.set(-.38,-.48,0);r1.scale.set(.75,1,.6);tg.add(r1);
            const r2=new THREE.Mesh(rGeo,rMat);r2.position.set(.38,-.48,0);r2.scale.set(.75,1,.6);tg.add(r2);
            const r3=new THREE.Mesh(new THREE.CylinderGeometry(.26,.22,.55,8),rMat);r3.position.set(0,-.68,0);r3.scale.set(.65,1,.55);tg.add(r3);
            const gMat=new THREE.MeshStandardMaterial({color:0xF5E6B8,emissive:0xC9A84C,emissiveIntensity:.5,transparent:true,opacity:.22});
            const gShell=new THREE.Mesh(new THREE.SphereGeometry(.9,32,32),gMat);gShell.scale.set(1.08,.95,.82);gShell.position.y=.28;tg.add(gShell);
            scene.add(tg);

            scene.add(new THREE.AmbientLight(0x404040,.8));
            const key=new THREE.DirectionalLight(0xfff5e0,1.2);key.position.set(2,3,4);scene.add(key);
            const fill=new THREE.PointLight(0xC9A84C,.6,10);fill.position.set(-2,1,2);scene.add(fill);
            const back=new THREE.PointLight(0x8b6014,.4,10);back.position.set(0,1,-3);scene.add(back);

            const pMat=new THREE.MeshStandardMaterial({color:0xC9A84C,emissive:0xA8842A,emissiveIntensity:.3});
            const pts=[];
            for(let i=0;i<60;i++){
                const p=new THREE.Mesh(new THREE.SphereGeometry(.02,8,8),pMat);
                const r=1.6+Math.random()*.8,a=Math.random()*Math.PI*2,b=Math.random()*Math.PI*2;
                p.position.set(Math.cos(a)*r*Math.sin(b),Math.sin(b)*r*.75,Math.sin(a)*r*Math.cos(b));
                p.userData={r,a,b,sp:.003+Math.random()*.005};
                scene.add(p);pts.push(p);
            }

            let mx=0,my=0;
            window.addEventListener('mousemove',e=>{mx=(e.clientX/window.innerWidth-.5)*.4;my=(e.clientY/window.innerHeight-.5)*.4});

            let t=0;
            function animate(){
                requestAnimationFrame(animate);t+=.005;
                tg.rotation.y=Math.sin(t*.22)*.22+mx*.3;
                tg.rotation.x=Math.sin(t*.35)*.1-my*.15;
                tg.position.y=Math.sin(t*.6)*.05;
                tg.position.x+=(mx*.4-tg.position.x)*.03;
                pts.forEach(p=>{
                    p.userData.a+=p.userData.sp;p.userData.b+=p.userData.sp*.65;
                    const {r,a,b}=p.userData;
                    const rr=r+Math.sin(t*2+r)*.05;
                    p.position.set(Math.cos(a)*rr*Math.sin(b),Math.sin(b)*rr*.8,Math.sin(a)*rr*Math.cos(b));
                    p.scale.setScalar(.7+Math.sin(t*3+r)*.45);
                });
                renderer.render(scene,cam);
            }
            animate();
            window.addEventListener('resize',()=>{
                cam.aspect=window.innerWidth/window.innerHeight;cam.updateProjectionMatrix();
                renderer.setSize(window.innerWidth,window.innerHeight);
            });
        }catch(e){console.warn('3D unavailable',e)}
    })();
</script>
</body>
</html>
