<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Haider Al-Haj Ahmed — Backend Engineer & Laravel Architect. Building scalable APIs and production PHP systems.">
<title>Haider Al-Haj Ahmed | Backend Engineer</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
/* ═══════════════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════════════ */
:root {
  --bg:        #08080f;
  --bg2:       #0d0d1a;
  --bg3:       #111124;
  --surface:   rgba(255,255,255,0.04);
  --surface2:  rgba(255,255,255,0.07);
  --surface3:  rgba(255,255,255,0.10);
  --border:    rgba(255,255,255,0.08);
  --border2:   rgba(139,92,246,0.35);
  --border3:   rgba(255,255,255,0.14);
  --text:      #f1f0ff;
  --text2:     #a09ec0;
  --text3:     #5e5c80;
  --purple:    #8b5cf6;
  --purple2:   #a78bfa;
  --purple3:   #c4b5fd;
  --violet:    #7c3aed;
  --indigo:    #6366f1;
  --glow:      rgba(139,92,246,0.18);
  --glow2:     rgba(139,92,246,0.08);
  --sans:      'Inter', system-ui, sans-serif;
  --mono:      'JetBrains Mono', monospace;
  --max:       1160px;
  --pad:       clamp(16px,5vw,64px);
}

/* ── Reset ── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
/* FIX 1: overflow-x:hidden on both html AND body to prevent document-level horizontal scroll */
html{scroll-behavior:smooth;font-size:16px;overflow-x:hidden}
body{font-family:var(--sans);background:var(--bg);color:var(--text);-webkit-font-smoothing:antialiased;overflow-x:hidden}
a{color:inherit;text-decoration:none}
img{display:block;max-width:100%}
button{font-family:var(--sans);cursor:pointer;border:none;background:none}

/* ── Layout ── */
/* FIX 2: container must never exceed viewport width */
.container{width:100%;max-width:var(--max);margin:0 auto;padding:0 var(--pad);box-sizing:border-box}

/* ── Scrollbar ── */
::-webkit-scrollbar{width:3px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--purple);border-radius:3px}

/* ── Selection ── */
::selection{background:rgba(139,92,246,.3);color:#fff}

/* ═══════════════════════════════════════════════
   GLOBAL GLOW ORBS (background atmosphere)
═══════════════════════════════════════════════ */
.orb{position:fixed;border-radius:50%;pointer-events:none;z-index:0;filter:blur(120px);opacity:.6;animation:orbDrift 20s ease-in-out infinite}
.orb-1{width:600px;height:600px;background:radial-gradient(circle,rgba(109,40,217,.22),transparent 70%);top:-200px;right:-100px;animation-delay:0s}
.orb-2{width:500px;height:500px;background:radial-gradient(circle,rgba(79,70,229,.15),transparent 70%);bottom:-150px;left:-100px;animation-delay:-10s}
.orb-3{width:300px;height:300px;background:radial-gradient(circle,rgba(139,92,246,.12),transparent 70%);top:50%;left:50%;transform:translate(-50%,-50%);animation-delay:-5s}
@keyframes orbDrift{0%,100%{transform:translate(0,0)}33%{transform:translate(40px,-30px)}66%{transform:translate(-30px,40px)}}

/* ── Progress bar ── */
#progress-bar{position:fixed;top:0;left:0;height:2px;width:0;background:linear-gradient(90deg,var(--violet),var(--purple),var(--purple3));z-index:1000;transition:width .1s;box-shadow:0 0 12px rgba(139,92,246,.6)}

/* ═══════════════════════════════════════════════
   NAV
═══════════════════════════════════════════════ */
#nav{position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:500;transition:all .4s}
.nav-pill{
  display:flex;align-items:center;gap:4px;
  padding:10px 16px;
  background:rgba(13,13,26,.75);
  backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);
  border:1px solid var(--border);
  border-radius:50px;
  white-space:nowrap;
  max-width:95vw;
  overflow-x:auto;
  scrollbar-width:none;
  box-shadow:0 0 0 1px rgba(255,255,255,.03),0 20px 60px rgba(0,0,0,.4);
}
.nav-pill::-webkit-scrollbar{display:none}
.nav-brand{
  font-family:var(--mono);font-size:12px;font-weight:600;
  color:var(--purple3);letter-spacing:.08em;
  padding:6px 14px;margin-right:4px;flex-shrink:0;
}
.nav-pill a{
  font-size:13px;font-weight:500;color:var(--text2);
  padding:6px 14px;border-radius:50px;
  transition:color .2s,background .2s;flex-shrink:0;
}
.nav-pill a:hover,.nav-pill a.active{color:var(--text);background:rgba(255,255,255,.06)}
.nav-cta{
  display:inline-flex;align-items:center;gap:7px;
  font-size:13px;font-weight:700;letter-spacing:.02em;
  padding:9px 20px;border-radius:50px;margin-left:8px;
  background:linear-gradient(135deg,var(--violet),var(--purple));
  color:#fff;flex-shrink:0;
  box-shadow:0 0 28px rgba(109,40,217,.55), 0 0 0 1px rgba(255,255,255,.12);
  transition:all .3s;
  text-shadow:0 1px 3px rgba(0,0,0,.3);
}
.nav-cta:hover{box-shadow:0 0 44px rgba(139,92,246,.75), 0 0 0 1px rgba(255,255,255,.2);transform:translateY(-2px) scale(1.03)}
/* mobile hamburger */
.nav-ham{display:none;flex-direction:column;gap:5px;padding:6px;margin-left:8px;flex-shrink:0}
.nav-ham span{display:block;width:20px;height:1.5px;background:var(--text2);border-radius:2px;transition:.3s}
#mob-menu{
  display:none;flex-direction:column;
  position:fixed;top:80px;left:16px;right:16px;
  background:rgba(13,13,26,.97);border:1px solid var(--border);
  border-radius:20px;padding:16px 8px;z-index:499;
  backdrop-filter:blur(24px);
  box-shadow:0 20px 60px rgba(0,0,0,.5);
}
#mob-menu.open{display:flex}
#mob-menu a{padding:12px 20px;font-size:15px;font-weight:500;color:var(--text2);border-radius:12px;transition:all .2s}
#mob-menu a:hover{color:var(--text);background:rgba(255,255,255,.05)}

/* ═══════════════════════════════════════════════
   SHARED SECTION STYLES
═══════════════════════════════════════════════ */
section{position:relative;z-index:1}
.section-eyebrow{
  display:inline-flex;align-items:center;gap:8px;
  font-family:var(--mono);font-size:11px;font-weight:500;
  color:var(--purple2);letter-spacing:.12em;text-transform:uppercase;
  margin-bottom:16px;
}
.section-eyebrow::before,.section-eyebrow::after{content:'';display:inline-block;width:20px;height:1px;background:var(--purple)}
.section-heading{
  font-size:clamp(30px,4vw,52px);font-weight:800;
  letter-spacing:-.03em;line-height:1.08;color:var(--text);
}
.section-heading .gradient{
  background:linear-gradient(135deg,var(--purple3) 0%,var(--purple) 50%,var(--indigo) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.gradient{
  background:linear-gradient(135deg,var(--purple3) 0%,var(--purple) 50%,var(--indigo) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}

/* Glass card */
.glass{
  background:var(--surface);
  border:1px solid var(--border);
  border-radius:20px;
  backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);
  position:relative;overflow:hidden;
}
.glass::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(255,255,255,.04) 0%,transparent 60%);
  pointer-events:none;
}
.glass-hover{transition:border-color .3s,transform .3s,box-shadow .3s}
.glass-hover:hover{border-color:rgba(139,92,246,.3);transform:translateY(-4px);box-shadow:0 20px 60px rgba(0,0,0,.4),0 0 40px rgba(139,92,246,.1)}

/* Purple glow border top accent */
.accent-top::after{
  content:'';position:absolute;top:0;left:20%;right:20%;
  height:1px;background:linear-gradient(90deg,transparent,var(--purple),transparent);
}

/* Scroll reveal */
.reveal{opacity:0;transform:translateY(32px);transition:opacity .7s cubic-bezier(.22,.61,.36,1),transform .7s cubic-bezier(.22,.61,.36,1)}
.reveal.d1{transition-delay:.1s}.reveal.d2{transition-delay:.2s}.reveal.d3{transition-delay:.3s}.reveal.d4{transition-delay:.4s}
.reveal.visible{opacity:1;transform:none}

/* ═══════════════════════════════════════════════
   HERO
═══════════════════════════════════════════════ */
#hero{min-height:100vh;display:flex;align-items:center;padding:120px var(--pad) 80px;overflow:hidden}
.hero-glow{
  position:absolute;top:50%;left:50%;transform:translate(-50%,-60%);
  width:800px;height:800px;border-radius:50%;
  background:radial-gradient(circle,rgba(109,40,217,.25) 0%,rgba(139,92,246,.08) 40%,transparent 70%);
  pointer-events:none;z-index:0;
}
.hero-ring{
  position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  width:900px;height:900px;border-radius:50%;
  border:1px solid rgba(139,92,246,.08);pointer-events:none;z-index:0;
}
.hero-ring2{width:700px;height:700px;border-color:rgba(139,92,246,.05)}
.hero-inner{position:relative;z-index:1;width:100%;max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:64px}
.hero-avail{
  display:inline-flex;align-items:center;gap:10px;
  font-family:var(--mono);font-size:11px;color:var(--text2);
  border:1px solid var(--border);border-radius:50px;
  padding:7px 16px;margin-bottom:28px;
  background:rgba(255,255,255,.03);
}
.avail-dot{width:7px;height:7px;border-radius:50%;background:#22c55e;box-shadow:0 0 0 3px rgba(34,197,94,.2);animation:pulseGreen 2.5s infinite}
@keyframes pulseGreen{0%,100%{box-shadow:0 0 0 3px rgba(34,197,94,.2)}50%{box-shadow:0 0 0 6px rgba(34,197,94,.05)}}
.hero-title{
  font-size:clamp(40px,5.5vw,74px);font-weight:900;
  letter-spacing:-.04em;line-height:1.03;margin-bottom:22px;
}
.hero-title .line-white{display:block;color:var(--text)}
.hero-title .line-grad{
  display:block;
  background:linear-gradient(135deg,#c4b5fd 0%,#8b5cf6 40%,#6366f1 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  filter:drop-shadow(0 0 40px rgba(139,92,246,.4));
}
.hero-sub{font-size:16px;color:var(--text2);line-height:1.75;max-width:460px;margin-bottom:36px;font-weight:400}
.hero-btns{display:flex;flex-wrap:wrap;gap:14px;margin-bottom:56px}
.btn-purple{
  display:inline-flex;align-items:center;gap:8px;
  padding:14px 30px;border-radius:50px;
  font-size:14px;font-weight:700;color:#fff;
  background:linear-gradient(135deg,var(--violet),var(--purple));
  box-shadow:0 0 32px rgba(109,40,217,.4);
  transition:all .3s;
}
.btn-purple:hover{box-shadow:0 0 50px rgba(139,92,246,.6);transform:translateY(-2px)}
.btn-ghost{
  display:inline-flex;align-items:center;gap:8px;
  padding:13px 30px;border-radius:50px;
  font-size:14px;font-weight:600;color:var(--text);
  border:1px solid var(--border3);
  background:rgba(255,255,255,.03);
  transition:all .3s;
}
.btn-ghost:hover{border-color:var(--border2);background:rgba(139,92,246,.08)}
.hero-stats{display:flex;gap:40px;flex-wrap:wrap}
.hero-stat{}
.hero-stat-num{font-size:30px;font-weight:800;letter-spacing:-.04em;color:var(--text)}
.hero-stat-num span{
  background:linear-gradient(135deg,var(--purple3),var(--purple));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.hero-stat-label{font-size:12px;color:var(--text3);margin-top:2px}

/* Hero right — code card */
.hero-right{display:flex;justify-content:center;align-items:center}
.code-card{
  width:100%;max-width:480px;
  background:rgba(10,10,20,.85);
  border:1px solid var(--border);
  border-radius:20px;overflow:hidden;
  box-shadow:0 30px 100px rgba(0,0,0,.5),0 0 60px rgba(109,40,217,.15);
  backdrop-filter:blur(20px);
}
.code-card-bar{
  display:flex;align-items:center;gap:8px;
  padding:14px 18px;
  background:rgba(255,255,255,.025);
  border-bottom:1px solid var(--border);
}
.cc-dots{display:flex;gap:6px}
.cc-dots span{width:11px;height:11px;border-radius:50%}
.cc-dots span:nth-child(1){background:#ff5f57}
.cc-dots span:nth-child(2){background:#febc2e}
.cc-dots span:nth-child(3){background:#28c840}
.cc-filename{font-family:var(--mono);font-size:11px;color:var(--text3);margin-left:6px}
/* FIX 3: white-space:pre-wrap prevents horizontal overflow from long code lines on mobile */
.code-body{padding:22px 24px;font-family:var(--mono);font-size:12.5px;line-height:1.9;white-space:pre-wrap;word-break:break-word;overflow-x:hidden}
.ck{color:#c792ea}.cs{color:#c3e88d}.cf{color:#82aaff}.cm{color:#546e7a;font-style:italic}.cv{color:#f8f8f2}.cn{color:#ffcb6b}
.code-footer{
  border-top:1px solid var(--border);padding:12px 18px;
  display:flex;align-items:center;justify-content:space-between;
}
.badge-green{
  display:inline-flex;align-items:center;gap:6px;
  font-family:var(--mono);font-size:11px;color:#4ade80;
}
.badge-green::before{content:'';width:6px;height:6px;border-radius:50%;background:#22c55e;display:inline-block}
.badge-purple{
  font-family:var(--mono);font-size:10px;
  padding:3px 10px;border-radius:50px;
  background:rgba(139,92,246,.15);color:var(--purple3);
  border:1px solid rgba(139,92,246,.25);
}

/* floating badges */
.code-card-wrap{position:relative}
.float-badge{
  position:absolute;
  font-family:var(--mono);font-size:10px;font-weight:600;
  padding:7px 13px;border-radius:10px;
  background:rgba(10,10,20,.92);border:1px solid var(--border2);
  color:var(--purple3);
  backdrop-filter:blur(12px);white-space:nowrap;
  box-shadow:0 8px 32px rgba(0,0,0,.4);
  animation:floatBadge 4s ease-in-out infinite;
  pointer-events:none;z-index:2;
}
.fb-1{top:60px;right:-24px;animation-delay:0s}
.fb-2{bottom:80px;left:-24px;animation-delay:-2s}
.fb-3{bottom:-16px;right:40px;animation-delay:-1s}
@keyframes floatBadge{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}

/* ═══════════════════════════════════════════════
   TICKER
═══════════════════════════════════════════════ */
#ticker{position:relative;z-index:1;padding:20px 0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);overflow:hidden;background:rgba(255,255,255,.015)}
.ticker-track{display:flex;gap:0;animation:tickerScroll 25s linear infinite;white-space:nowrap}
.ticker-item{display:inline-flex;align-items:center;gap:10px;padding:0 32px;font-family:var(--mono);font-size:12px;color:var(--text3);letter-spacing:.06em}
.ticker-item .dot{width:4px;height:4px;border-radius:50%;background:var(--purple);flex-shrink:0}
@keyframes tickerScroll{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* ═══════════════════════════════════════════════
   ABOUT
═══════════════════════════════════════════════ */
#about{padding:120px 0;z-index:1}
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start}
.about-body{font-size:15px;color:var(--text2);line-height:1.85;margin-bottom:16px}
.about-body strong{color:var(--text);font-weight:600}
.about-links{display:flex;flex-wrap:wrap;gap:10px;margin-top:28px}
.about-link{
  display:inline-flex;align-items:center;gap:7px;
  font-size:13px;font-weight:500;color:var(--text2);
  padding:8px 18px;border-radius:50px;
  border:1px solid var(--border);background:var(--surface);
  transition:all .3s;
}
.about-link:hover{color:var(--purple3);border-color:var(--border2);background:rgba(139,92,246,.08)}
/* Timeline */
.timeline{padding-left:22px;position:relative}
.timeline::before{content:'';position:absolute;left:0;top:6px;bottom:0;width:1px;background:linear-gradient(180deg,var(--purple) 0%,rgba(139,92,246,.1) 100%)}
.tl-item{position:relative;padding-bottom:32px}
.tl-item:last-child{padding-bottom:0}
.tl-dot{position:absolute;left:-27px;top:5px;width:9px;height:9px;border-radius:50%;background:var(--purple);box-shadow:0 0 0 3px rgba(139,92,246,.2),0 0 16px rgba(139,92,246,.5)}
.tl-dot.dim{background:var(--text3);box-shadow:none}
.tl-year{font-family:var(--mono);font-size:11px;color:var(--purple2);letter-spacing:.08em;margin-bottom:5px}
.tl-title{font-size:15px;font-weight:600;color:var(--text);margin-bottom:4px}
.tl-desc{font-size:13px;color:var(--text2);line-height:1.6}

/* ═══════════════════════════════════════════════
   PROOF POINTS
═══════════════════════════════════════════════ */
#proof{padding:0 0 120px;z-index:1}
.proof-strip{
  display:grid;grid-template-columns:repeat(4,1fr);
  border:1px solid var(--border);border-radius:20px;
  overflow:hidden;position:relative;
}
.proof-strip::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,var(--purple),transparent);
}
.proof-cell{
  padding:36px 28px;
  border-right:1px solid var(--border);
  background:var(--surface);position:relative;
  transition:background .3s, transform .35s cubic-bezier(.22,.61,.36,1), box-shadow .35s, border-color .3s;
  cursor:default;
}
.proof-cell:last-child{border-right:none}
.proof-cell:hover{
  background:var(--surface2);
  transform:translateY(-6px) scale(1.02);
  box-shadow:0 20px 60px rgba(0,0,0,.45), 0 0 40px rgba(139,92,246,.14);
  border-color:rgba(139,92,246,.35);
  z-index:2;
}
/* top accent line slides in on hover */
.proof-cell::after{
  content:'';position:absolute;top:0;left:20%;right:20%;height:1px;
  background:linear-gradient(90deg,transparent,var(--purple),transparent);
  opacity:0;transition:opacity .35s;
}
.proof-cell:hover::after{opacity:1}
.proof-num{
  font-size:38px;font-weight:900;letter-spacing:-.05em;margin-bottom:6px;
  background:linear-gradient(135deg,var(--text) 0%,var(--purple3) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.proof-label{font-size:13px;color:var(--text2);line-height:1.5}

/* ═══════════════════════════════════════════════
   EXPERTISE
═══════════════════════════════════════════════ */
#expertise{padding:0 0 120px;z-index:1}
.expertise-header{margin-bottom:56px;text-align:center}
.exp-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.exp-card{
  padding:32px 28px;border-radius:20px;
  background:var(--surface);border:1px solid var(--border);
  position:relative;overflow:hidden;
  transition:all .35s;
}
.exp-card:hover{border-color:rgba(139,92,246,.3);background:var(--surface2);transform:translateY(-5px);box-shadow:0 20px 60px rgba(0,0,0,.4),0 0 40px rgba(139,92,246,.1)}
.exp-card::before{
  content:'';position:absolute;top:0;left:20%;right:20%;height:1px;
  background:linear-gradient(90deg,transparent,rgba(139,92,246,.6),transparent);
  opacity:0;transition:opacity .35s;
}
.exp-card:hover::before{opacity:1}
.exp-glow{
  position:absolute;width:200px;height:200px;border-radius:50%;
  background:radial-gradient(circle,rgba(139,92,246,.12),transparent 70%);
  top:-60px;right:-60px;pointer-events:none;
}
.exp-icon{
  width:44px;height:44px;border-radius:12px;
  display:flex;align-items:center;justify-content:center;
  background:rgba(139,92,246,.12);border:1px solid rgba(139,92,246,.2);
  margin-bottom:18px;
}
.exp-icon svg{width:20px;height:20px;stroke:var(--purple2);fill:none;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.exp-num{font-family:var(--mono);font-size:10px;color:var(--text3);letter-spacing:.1em;margin-bottom:18px}
.exp-title{font-size:16px;font-weight:700;color:var(--text);margin-bottom:10px}
.exp-desc{font-size:13px;color:var(--text2);line-height:1.7}

/* ═══════════════════════════════════════════════
   ARSENAL
═══════════════════════════════════════════════ */
#arsenal{padding:0 0 120px;z-index:1}
.arsenal-header{margin-bottom:56px;text-align:center}
.skill-groups{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:32px}
.skill-group-card{
  padding:28px;border-radius:20px;
  background:var(--surface);border:1px solid var(--border);
}
.skg-label{
  font-family:var(--mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;
  color:var(--text3);margin-bottom:20px;
  padding-bottom:12px;border-bottom:1px solid var(--border);
}
.skill-row{display:flex;align-items:center;gap:14px;padding:10px 0;border-bottom:1px solid rgba(255,255,255,.04)}
.skill-row:last-child{border-bottom:none}
.sk-name{font-size:13px;font-weight:500;color:var(--text);min-width:110px}
.sk-track{flex:1;height:3px;border-radius:3px;background:rgba(255,255,255,.07);overflow:hidden}
.sk-fill{height:100%;border-radius:3px;width:0;background:linear-gradient(90deg,var(--violet),var(--purple));transition:width 1.4s cubic-bezier(.22,.61,.36,1);box-shadow:0 0 8px rgba(139,92,246,.5)}
.sk-pct{font-family:var(--mono);font-size:10px;color:var(--text3);min-width:30px;text-align:right}
/* tag cloud */
.tag-cloud{display:flex;flex-wrap:wrap;gap:8px}
.stag{
  display:inline-block;font-family:var(--mono);font-size:11px;font-weight:500;
  padding:5px 12px;border-radius:50px;
  background:var(--surface2);border:1px solid var(--border);
  color:var(--text2);transition:all .25s;
}
.stag:hover{border-color:var(--border2);color:var(--purple3);background:rgba(139,92,246,.1)}
.stag.accent{background:rgba(139,92,246,.12);border-color:rgba(139,92,246,.25);color:var(--purple3)}

/* ═══════════════════════════════════════════════
   PROJECTS
═══════════════════════════════════════════════ */
#projects{padding:0 0 120px;z-index:1}
.projects-header{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:48px;flex-wrap:wrap;gap:20px}
.projects-list{display:flex;flex-direction:column;gap:16px}
.proj-card{
  padding:0;border-radius:20px;
  background:var(--surface);border:1px solid var(--border);
  overflow:hidden;transition:all .35s;
}
.proj-card:hover{border-color:rgba(139,92,246,.3);box-shadow:0 20px 80px rgba(0,0,0,.4),0 0 40px rgba(139,92,246,.08)}
.proj-top-bar{
  display:flex;align-items:center;gap:4px;
  padding:10px 24px;background:rgba(255,255,255,.02);
  border-bottom:1px solid var(--border);
}
.proj-top-bar .cc-dots span{width:8px;height:8px}
.proj-top-file{font-family:var(--mono);font-size:10px;color:var(--text3);margin-left:8px}
.proj-body{
  display:grid;grid-template-columns:1fr auto;
  align-items:start;gap:28px;padding:28px 28px 24px;
}
.proj-index{font-family:var(--mono);font-size:11px;color:var(--text3);letter-spacing:.1em;margin-bottom:10px}
.proj-title{font-size:20px;font-weight:800;color:var(--text);margin-bottom:8px;letter-spacing:-.02em}
.proj-desc{font-size:14px;color:var(--text2);line-height:1.65;margin-bottom:16px;max-width:600px}
.proj-tags{display:flex;flex-wrap:wrap;gap:7px;margin-bottom:20px}
.ptag{font-family:var(--mono);font-size:10px;font-weight:600;padding:4px 11px;border-radius:50px}
.ptag-v{background:rgba(139,92,246,.12);color:var(--purple3);border:1px solid rgba(139,92,246,.2)}
.ptag-g{background:rgba(255,255,255,.05);color:var(--text2);border:1px solid var(--border)}
.proj-actions{display:flex;gap:10px;align-items:center;flex-shrink:0;flex-direction:column;align-items:flex-end;padding-top:10px}
.proj-gh-btn{
  display:inline-flex;align-items:center;gap:7px;
  font-size:12px;font-weight:600;font-family:var(--mono);
  padding:8px 16px;border-radius:50px;
  background:var(--surface2);border:1px solid var(--border3);color:var(--text2);
  transition:all .25s;white-space:nowrap;
}
.proj-gh-btn:hover{color:var(--purple3);border-color:var(--border2);background:rgba(139,92,246,.1)}
.proj-gh-btn svg{width:13px;height:13px}
.expand-btn{
  font-family:var(--mono);font-size:10px;color:var(--text3);
  padding:4px 0;letter-spacing:.06em;
  transition:color .2s;white-space:nowrap;
}
.expand-btn:hover{color:var(--purple2)}
/* case study */
.proj-case{max-height:0;overflow:hidden;transition:max-height .5s cubic-bezier(.22,.61,.36,1)}
.proj-case.open{max-height:400px}
.case-inner{
  border-top:1px solid var(--border);
  display:grid;grid-template-columns:repeat(3,1fr);
  background:rgba(255,255,255,.015);
}
.case-col{padding:22px 28px;border-right:1px solid var(--border)}
.case-col:last-child{border-right:none}
.case-lbl{font-family:var(--mono);font-size:10px;letter-spacing:.1em;text-transform:uppercase;color:var(--purple2);margin-bottom:8px}
.case-txt{font-size:13px;color:var(--text2);line-height:1.65}

/* ═══════════════════════════════════════════════
   PHILOSOPHY (dark inverted)
═══════════════════════════════════════════════ */
#philosophy{padding:0 0 120px;z-index:1}
.phi-box{
  border:1px solid var(--border);border-radius:24px;
  background:rgba(255,255,255,.02);overflow:hidden;position:relative;
}
.phi-box::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,var(--purple),transparent);
}
.phi-header{padding:48px 48px 40px;border-bottom:1px solid var(--border)}
.phi-list{padding:0 48px}
.phi-item{
  display:grid;grid-template-columns:52px 1fr 1fr;gap:32px;
  padding:32px 0;border-bottom:1px solid var(--border);align-items:start;
}
.phi-item:last-child{border-bottom:none}
.phi-num{font-family:var(--mono);font-size:12px;color:var(--text3);padding-top:2px}
.phi-title{font-size:17px;font-weight:700;color:var(--text)}
.phi-desc{font-size:14px;color:var(--text2);line-height:1.75}
/* arch */
.phi-arch{
  border-top:1px solid var(--border);padding:36px 48px;
  background:rgba(255,255,255,.015);
}
.arch-label{font-family:var(--mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--text3);margin-bottom:24px;text-align:center}
.arch-nodes{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:0;row-gap:12px}
.anode{
  padding:10px 18px;border-radius:10px;font-family:var(--mono);font-size:12px;font-weight:500;
  transition:transform .3s;
}
.anode:hover{transform:scale(1.06)}
.anode.light{background:rgba(255,255,255,.06);border:1px solid var(--border3);color:var(--text2)}
.anode.blue{background:rgba(139,92,246,.15);border:1px solid rgba(139,92,246,.3);color:var(--purple3)}
.aarrow{margin:0 10px;color:var(--text3);font-size:14px}

/* ═══════════════════════════════════════════════
   PROCESS
═══════════════════════════════════════════════ */
#process{padding:0 0 120px;z-index:1}
.process-header{text-align:center;margin-bottom:56px}
.process-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.process-card{
  padding:32px 24px;border-radius:20px;
  background:var(--surface);border:1px solid var(--border);
  position:relative;overflow:hidden;
  transition:all .35s;
}
.process-card:hover{border-color:rgba(139,92,246,.3);background:var(--surface2);transform:translateY(-4px)}
.process-card::before{
  content:'';position:absolute;top:0;left:50%;transform:translateX(-50%);
  width:60%;height:1px;
  background:linear-gradient(90deg,transparent,rgba(139,92,246,.5),transparent);
  opacity:0;transition:opacity .35s;
}
.process-card:hover::before{opacity:1}
.step-num{
  font-family:var(--mono);font-size:10px;letter-spacing:.1em;
  color:var(--purple2);margin-bottom:20px;
}
.step-title{font-size:15px;font-weight:700;color:var(--text);margin-bottom:10px}
.step-desc{font-size:13px;color:var(--text2);line-height:1.7}

/* ═══════════════════════════════════════════════
   TERMINAL
═══════════════════════════════════════════════ */
#terminal-section{padding:0 0 120px;z-index:1}
.term-layout{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start}
.term-intro{}
.term-intro p{font-size:15px;color:var(--text2);line-height:1.8;margin-top:14px}
.cmd-pills{display:flex;flex-wrap:wrap;gap:8px;margin-top:24px}
.cpill{
  font-family:var(--mono);font-size:11px;
  padding:6px 13px;border-radius:50px;
  background:var(--surface2);border:1px solid var(--border);
  color:var(--text2);cursor:pointer;transition:all .25s;
}
.cpill:hover{border-color:var(--border2);color:var(--purple3);background:rgba(139,92,246,.1)}
/* Terminal window */
.terminal{
  background:#060610;border:1px solid var(--border);border-radius:20px;overflow:hidden;
  box-shadow:0 30px 100px rgba(0,0,0,.5),0 0 60px rgba(109,40,217,.1);
}
.term-bar{
  display:flex;align-items:center;gap:10px;
  padding:13px 18px;background:rgba(255,255,255,.02);
  border-bottom:1px solid var(--border);
}
.term-title{font-family:var(--mono);font-size:11px;color:var(--text3);margin-left:8px}
.term-body{padding:20px;min-height:280px;max-height:360px;overflow-y:auto;overflow-x:hidden;scrollbar-width:thin;scrollbar-color:rgba(139,92,246,.2) transparent}
#term-out{margin-bottom:12px;line-height:2;word-break:break-word}
#term-out p{animation:tLine .15s ease}
@keyframes tLine{from{opacity:0;transform:translateX(-6px)}to{opacity:1;transform:none}}
.term-ps{display:flex;align-items:center;gap:8px}
.ps1{color:#a78bfa;font-family:var(--mono);font-size:12.5px}
#term-in{background:none;border:none;outline:none;color:#f1f0ff;font-family:var(--mono);font-size:16px;flex:1;caret-color:var(--purple)}
/* terminal colors */
.tc{color:#67e8f9}.tg{color:#86efac}.tp{color:#c4b5fd}.ty{color:#fde68a}.tr{color:#fca5a5}.td{color:rgba(255,255,255,.3)}.tw{color:#f1f0ff}

/* ═══════════════════════════════════════════════
   CONTACT
═══════════════════════════════════════════════ */
#contact{padding:0 0 120px;z-index:1}
.contact-wrap{
  border:1px solid var(--border);border-radius:24px;overflow:hidden;
  position:relative;
}
.contact-wrap::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,var(--purple),transparent);
}
.contact-glow{
  position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  width:600px;height:400px;border-radius:50%;
  background:radial-gradient(ellipse,rgba(109,40,217,.12),transparent 70%);
  pointer-events:none;
}
.contact-inner{position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;align-items:start}
.contact-left{padding:56px 48px;border-right:1px solid var(--border)}
.contact-heading{font-size:clamp(28px,4vw,50px);font-weight:900;letter-spacing:-.04em;line-height:1.05;margin-bottom:18px}
.contact-sub{font-size:15px;color:var(--text2);line-height:1.75;margin-bottom:36px}
.contact-channels{display:flex;flex-direction:column;gap:12px}
.cch{
  display:flex;align-items:center;gap:16px;
  padding:16px 20px;border-radius:14px;
  border:1px solid var(--border);background:var(--surface);
  transition:all .3s;
}
.cch:hover{border-color:rgba(139,92,246,.3);background:var(--surface2);transform:translateX(4px)}
.cch-icon{
  width:38px;height:38px;border-radius:10px;
  display:flex;align-items:center;justify-content:center;
  background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.15);
  flex-shrink:0;
}
.cch-icon svg{width:16px;height:16px;stroke:var(--purple2);fill:none;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.cch-lbl{font-family:var(--mono);font-size:10px;color:var(--text3);letter-spacing:.08em;margin-bottom:2px}
.cch-val{font-size:14px;font-weight:500;color:var(--text)}
.cch-arrow{margin-left:auto;color:var(--text3);font-size:14px;transition:transform .25s,color .25s}
.cch:hover .cch-arrow{transform:translateX(3px);color:var(--purple2)}
/* right panel */
.contact-right{padding:56px 40px}
.cpanel-block{margin-bottom:32px}
.cpanel-block:last-child{margin-bottom:0}
.cp-lbl{font-family:var(--mono);font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:var(--text3);margin-bottom:8px}
.cp-val{font-size:15px;font-weight:600;color:var(--text)}
.cp-tags{display:flex;flex-wrap:wrap;gap:7px;margin-top:8px}
.cpanel-divider{border:none;border-top:1px solid var(--border);margin:24px 0}
.avail-badge{
  display:inline-flex;align-items:center;gap:8px;
  font-size:13px;font-weight:600;color:#4ade80;
}

/* ═══════════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════════ */
#footer{border-top:1px solid var(--border);background:rgba(255,255,255,.01);padding:28px 0;z-index:1;position:relative}
.footer-inner{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px}
.footer-brand{font-family:var(--mono);font-size:12px;color:var(--text3)}
.footer-copy{font-size:12px;color:var(--text3)}
.footer-links{display:flex;gap:20px}
.footer-links a{font-family:var(--mono);font-size:11px;color:var(--text3);transition:color .2s}
.footer-links a:hover{color:var(--purple2)}

/* ═══════════════════════════════════════════════
   3D CARD TILT — perspective wrapper
═══════════════════════════════════════════════ */
.tilt{
  transform-style:preserve-3d;
  transition:transform .08s linear,box-shadow .3s;
  will-change:transform;
}
.tilt .tilt-inner{
  transform:translateZ(0px);
  transition:transform .08s linear;
}
/* card shine layer */
.tilt::after{
  content:'';
  position:absolute;inset:0;border-radius:inherit;
  background:radial-gradient(circle at var(--mx,50%) var(--my,50%),rgba(255,255,255,.08) 0%,transparent 55%);
  opacity:0;transition:opacity .3s;pointer-events:none;z-index:10;
}
.tilt:hover::after{opacity:1}

/* ── Magnetic button pulse ring ── */
.btn-purple,.btn-ghost,.nav-cta{position:relative;overflow:hidden}
.btn-purple::before,.nav-cta::before{
  content:'';position:absolute;inset:0;border-radius:inherit;
  background:radial-gradient(circle at var(--bx,50%) var(--by,50%),rgba(255,255,255,.18),transparent 60%);
  opacity:0;transition:opacity .4s;pointer-events:none;
}
.btn-purple:hover::before,.nav-cta:hover::before{opacity:1}

/* ── Ripple effect ── */
.ripple-host{position:relative;overflow:hidden}
.ripple{
  position:absolute;border-radius:50%;
  background:rgba(139,92,246,.25);
  transform:scale(0);animation:rippleAnim .6s linear;
  pointer-events:none;
}
@keyframes rippleAnim{to{transform:scale(4);opacity:0}}

/* ── Scroll-driven section parallax ── */
.parallax-section{will-change:transform}

/* ── Scroll-reveal — upgraded with direction variants ── */
.reveal{opacity:0;transform:translateY(32px);transition:opacity .75s cubic-bezier(.22,.61,.36,1),transform .75s cubic-bezier(.22,.61,.36,1)}
.reveal.from-left{transform:translateX(-40px)}
.reveal.from-right{transform:translateX(40px)}
.reveal.from-scale{transform:scale(.94)}
.reveal.d1{transition-delay:.1s}.reveal.d2{transition-delay:.2s}.reveal.d3{transition-delay:.3s}.reveal.d4{transition-delay:.4s}
.reveal.visible{opacity:1;transform:none}

/* ── Glowing border animation on hover (nav-cta, proof nums) ── */
@keyframes borderGlow{0%,100%{box-shadow:0 0 20px rgba(139,92,246,.3)}50%{box-shadow:0 0 40px rgba(139,92,246,.6),0 0 80px rgba(139,92,246,.2)}}
.proof-cell:hover {animation:borderGlow .8s ease infinite}

/* ── Scroll indicator line (hero) ── */
.scroll-line{
  position:absolute;bottom:32px;left:50%;transform:translateX(-50%);
  display:flex;flex-direction:column;align-items:center;gap:8px;
  opacity:.4;animation:scrollBounce 2.5s ease-in-out infinite;z-index:2;
}
.scroll-line span{font-family:var(--mono);font-size:9px;letter-spacing:.2em;text-transform:uppercase;color:var(--text3)}
.scroll-line-bar{width:1px;height:48px;background:linear-gradient(180deg,var(--purple),transparent);border-radius:1px}
@keyframes scrollBounce{0%,100%{transform:translateX(-50%) translateY(0);opacity:.4}50%{transform:translateX(-50%) translateY(8px);opacity:.7}}

/* ── Typewriter cursor blink ── */
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
.cursor-blink{animation:blink 1s step-end infinite;color:var(--purple)}

/* ── Horizontal scroll ticker (enhanced) ── */
#ticker:hover .ticker-track{animation-play-state:paused}

/* ── Skill bar shimmer ── */
@keyframes shimmer{0%{background-position:-200% center}100%{background-position:200% center}}
.sk-fill.shimmer{
  background:linear-gradient(90deg,var(--violet),var(--purple),var(--purple3),var(--purple),var(--violet));
  background-size:200% auto;
  animation:shimmer 2.5s linear infinite;
}

/* ── about-link hover ripple ── */
.about-link{overflow:hidden}

/* ── Project card glow track (mouse follow) ── */
.proj-card{position:relative}
.proj-card::before{
  content:'';position:absolute;inset:0;border-radius:20px;
  background:radial-gradient(circle at var(--px,50%) var(--py,50%),rgba(139,92,246,.1) 0%,transparent 55%);
  opacity:0;transition:opacity .3s;pointer-events:none;z-index:0;
}
.proj-card:hover::before{opacity:1}

/* ── exp-card inner content lift ── */
.exp-card .exp-icon,.exp-card .exp-title,.exp-card .exp-desc{
  transition:transform .35s cubic-bezier(.22,.61,.36,1);
}
.exp-card:hover .exp-icon{transform:translateY(-4px) scale(1.08)}
.exp-card:hover .exp-title{transform:translateY(-2px)}
.exp-card:hover .exp-desc{transform:translateY(-1px)}

/* ═══════════════════════════════════════════════
   RESPONSIVE — Tablet 1024px
═══════════════════════════════════════════════ */
@media(max-width:1024px){
  .hero-inner{grid-template-columns:1fr;gap:40px;text-align:center}
  .hero-avail,.hero-btns,.hero-stats{justify-content:center}
  .hero-sub{max-width:100%}
  .hero-right{justify-content:center}
  .code-card{max-width:500px}
  .fb-1{right:-10px}.fb-2{left:-10px}
  .about-grid{grid-template-columns:1fr;gap:40px}
  .proof-strip{grid-template-columns:repeat(2,1fr)}
  .proof-cell{border-right:none;border-bottom:1px solid var(--border)}
  .proof-cell:nth-child(odd){border-right:1px solid var(--border)}
  .proof-cell:last-child,.proof-cell:nth-last-child(2){border-bottom:none}
  .exp-grid{grid-template-columns:repeat(2,1fr)}
  .skill-groups{grid-template-columns:1fr}
  .process-grid{grid-template-columns:repeat(2,1fr)}
  .term-layout{grid-template-columns:1fr;gap:40px}
  .contact-inner{grid-template-columns:1fr}
  .contact-left{border-right:none;border-bottom:1px solid var(--border);padding:40px 32px}
  .contact-right{padding:40px 32px}
  .phi-header{padding:36px 32px 28px}
  .phi-list{padding:0 32px}
  .phi-item{grid-template-columns:40px 1fr;gap:20px}
  .phi-desc{grid-column:2}
  .phi-arch{padding:28px 32px}
  section{padding-left:0;padding-right:0}
}

/* ═══════════════════════════════════════════════
   RESPONSIVE — Mobile 768px
═══════════════════════════════════════════════ */
@media(max-width:768px){
  :root{--pad:18px}
  /* FIX 4: on mobile the nav was left:16px + no transform so it stayed anchored left — correct */
  #nav{top:10px;width:calc(100% - 32px);left:16px;transform:none}
  .nav-pill{justify-content:space-between;padding:8px 14px}
  .nav-pill a:not(.nav-cta){display:none}
  .nav-cta{display:none}
  .nav-ham{display:flex}

  /* hero */
  #hero{padding:100px var(--pad) 80px}
  /* FIX 5: hero-inner must not push wider than its container on single-col layout */
  .hero-inner{width:100%;max-width:100%}
  .hero-title{font-size:clamp(34px,9vw,52px);letter-spacing:-.03em}
  .hero-sub{font-size:14px;line-height:1.7}
  .hero-stats{gap:20px}
  .hero-stat-num{font-size:26px}
  .hero-stat-label{font-size:11px}
  .scroll-line{display:none}
  .hero-btns{gap:10px}
  .btn-purple,.btn-ghost{padding:12px 22px;font-size:13px}

  /* code card — constrain fully on mobile */
  .code-card-wrap{width:100%;max-width:100%;margin:0 auto}
  .code-card{max-width:100%}
  /* FIX 6: smaller font + pre-wrap already set globally; reinforce no overflow */
  .code-body{font-size:11px;padding:16px 18px;overflow-x:hidden}
  .float-badge{display:none}

  /* about */
  #about,#expertise,#arsenal,#projects,#philosophy,#process,#terminal-section,#contact{padding-bottom:80px}

  /* proof */
  .proof-strip{grid-template-columns:repeat(2,1fr)}
  .proof-cell{border-right:none;border-bottom:1px solid var(--border)}
  .proof-cell:nth-child(odd){border-right:1px solid var(--border)}
  .proof-cell:last-child,.proof-cell:nth-last-child(2){border-bottom:none}
  .proof-num{font-size:30px}

  /* expertise */
  .exp-grid{grid-template-columns:1fr}
  .exp-card{padding:24px 20px}

  /* skill */
  .skill-groups{grid-template-columns:1fr}
  .skill-group-card{padding:22px 18px}

  /* projects */
  .proj-body{grid-template-columns:1fr;gap:14px}
  .proj-actions{flex-direction:row;align-items:center;padding-top:0}
  .proj-title{font-size:17px}
  .proj-desc{font-size:13px}
  .case-inner{grid-template-columns:1fr}
  .case-col{border-right:none;border-bottom:1px solid var(--border)}
  .case-col:last-child{border-bottom:none}

  /* philosophy */
  .phi-header{padding:28px 22px 22px}
  .phi-list{padding:0 22px}
  .phi-item{grid-template-columns:1fr;gap:8px;padding:24px 0}
  .phi-num{display:none}
  .phi-desc{grid-column:1}
  .phi-title{font-size:15px}
  .phi-desc{font-size:13px}
  .phi-arch{padding:24px 22px}

  /* process */
  .process-grid{grid-template-columns:1fr}
  .process-card{padding:24px 20px}

  /* terminal */
  .term-layout{grid-template-columns:1fr;gap:36px}
  .term-body{min-height:220px;max-height:280px}

  /* contact */
  .contact-left,.contact-right{padding:32px 24px}
  .contact-heading{font-size:clamp(26px,6vw,40px)}
  .contact-sub{font-size:14px}

  /* footer */
  .footer-inner{flex-direction:column;align-items:flex-start;gap:10px}
}

/* ═══════════════════════════════════════════════
   RESPONSIVE — 6.5" Phones 430px
═══════════════════════════════════════════════ */
@media(max-width:430px){
  :root{--pad:16px}

  /* nav */
  #nav{width:calc(100% - 24px);left:12px}
  .nav-brand{font-size:11px;padding:5px 10px}

  /* hero */
  #hero{padding:90px var(--pad) 64px;min-height:auto}
  .hero-avail{font-size:9px;padding:5px 12px;gap:7px}
  .hero-title{font-size:clamp(30px,8.5vw,44px);line-height:1.06}
  .hero-title .line-grad{font-size:clamp(18px,5vw,26px)!important}
  .hero-sub{font-size:13.5px;margin-bottom:28px}
  .hero-btns{flex-direction:column;width:100%;gap:10px}
  .btn-purple,.btn-ghost{width:100%;justify-content:center;padding:13px 20px;font-size:14px}
  .hero-stats{justify-content:space-between;gap:0;width:100%;margin-top:28px}
  .hero-stat{flex:1;text-align:center}
  .hero-stat-num{font-size:22px}
  .hero-stat-label{font-size:10px}
  .code-card{border-radius:14px}
  /* FIX 7: tighten code card padding on smallest screens, overflow already handled */
  .code-body{font-size:10.5px;padding:14px 16px;line-height:1.75}
  .code-card-bar{padding:10px 14px}
  .cc-filename{font-size:9px}

  /* sections spacing */
  #about,#proof,#expertise,#arsenal,#projects,#philosophy,#process,#terminal-section,#contact{padding-bottom:64px}

  /* section headings */
  .section-heading{font-size:clamp(24px,6.5vw,34px)}
  .section-eyebrow{font-size:9px;letter-spacing:.1em}
  .section-eyebrow::before,.section-eyebrow::after{width:14px}

  /* about */
  .about-body{font-size:13.5px}
  .timeline{padding-left:18px}
  .tl-dot{left:-23px;width:8px;height:8px}
  .tl-year{font-size:10px}
  .tl-title{font-size:13px}
  .tl-desc{font-size:12px}
  .about-link{font-size:12px;padding:7px 14px}
  .glass{padding:22px 18px!important}

  /* proof */
  .proof-strip{grid-template-columns:1fr 1fr}
  .proof-cell{padding:24px 18px}
  .proof-num{font-size:26px}
  .proof-label{font-size:11px}

  /* expertise */
  .exp-card{padding:20px 16px;border-radius:16px}
  .exp-icon{width:36px;height:36px;border-radius:10px;margin-bottom:12px}
  .exp-icon svg{width:16px;height:16px}
  .exp-title{font-size:14px;margin-bottom:8px}
  .exp-desc{font-size:12px;line-height:1.6}
  .exp-num{margin-bottom:12px}

  /* arsenal */
  .skill-group-card{padding:18px 16px;border-radius:16px}
  .skg-label{font-size:9px}
  .sk-name{font-size:12px;min-width:90px}
  .sk-pct{font-size:9px}
  .stag{font-size:10px;padding:4px 10px}

  /* projects */
  .proj-top-file{font-size:9px}
  .proj-card{border-radius:16px}
  .proj-body{padding:20px 16px 16px}
  .proj-index{font-size:9px}
  .proj-title{font-size:16px}
  .proj-desc{font-size:12px;line-height:1.55}
  .ptag{font-size:9px;padding:3px 9px}
  .proj-gh-btn{font-size:11px;padding:7px 13px}
  .expand-btn{font-size:9px}
  .case-col{padding:16px 18px}
  .case-lbl{font-size:9px}
  .case-txt{font-size:12px}

  /* philosophy */
  .phi-box{border-radius:18px}
  .phi-header{padding:24px 18px 18px}
  .phi-list{padding:0 18px}
  .phi-item{padding:20px 0;gap:6px}
  .phi-title{font-size:14px}
  .phi-desc{font-size:12px;line-height:1.6}
  .phi-arch{padding:18px}
  .arch-label{font-size:9px}
  .anode{font-size:10px;padding:7px 12px}
  .aarrow{font-size:11px;margin:0 5px}

  /* process */
  .process-card{padding:20px 16px;border-radius:16px}
  .step-num{font-size:9px}
  .step-title{font-size:13px}
  .step-desc{font-size:12px}

  /* terminal */
  .terminal{border-radius:14px}
  .term-bar{padding:10px 14px}
  .term-title{font-size:9px}
  .term-body{padding:14px;font-size:11px;min-height:200px;max-height:250px;line-height:1.8}
  .cpill{font-size:10px;padding:5px 10px}
  #term-in{font-size:16px}

  /* contact */
  .contact-wrap{border-radius:18px}
  .contact-left,.contact-right{padding:24px 18px}
  .contact-heading{font-size:clamp(22px,6vw,34px);letter-spacing:-.03em}
  .contact-sub{font-size:13px}
  .cch{padding:13px 16px;border-radius:12px}
  .cch-icon{width:32px;height:32px;border-radius:8px}
  .cch-icon svg{width:13px;height:13px}
  .cch-lbl{font-size:9px}
  .cch-val{font-size:13px}
  .cpanel-block{margin-bottom:22px}
  .cp-lbl{font-size:9px}
  .cp-val{font-size:13px}

  /* footer */
  #footer{padding:22px 0}
  .footer-brand,.footer-copy{font-size:11px}
  .footer-links a{font-size:10px}
}

/* ═══════════════════════════════════════════════
   RESPONSIVE — Small phones 375px
═══════════════════════════════════════════════ */
@media(max-width:375px){
  .hero-title{font-size:28px}
  .hero-title .line-grad{font-size:17px!important}
  .section-heading{font-size:22px}
  .proof-strip{grid-template-columns:1fr}
  .proof-cell:nth-child(odd){border-right:none}
  .proof-cell{border-bottom:1px solid var(--border)!important}
  .proof-cell:last-child{border-bottom:none!important}
  .hero-stats{flex-wrap:wrap;justify-content:center;gap:16px 28px}
}

/* ── Disable 3D tilt on touch ── */
@media(pointer:coarse){
  .exp-card,.process-card,.proof-cell,.skill-group-card,.code-card,.proj-card{
    transform:none!important;
  }
}

/* ── tilt-inner — inner content layer for 3D depth parallax ── */
.tilt-inner{
  position:relative;
  transform:translateZ(0px);
  transition:transform .08s linear;
  border-radius:inherit;
}

/* ── Code card — prevent blur from compositing layer ── */
.code-card{
  will-change:auto;
  -webkit-font-smoothing:antialiased;
  image-rendering:crisp-edges;
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
  /* FIX 8: ensure code card never bleeds outside its parent */
  max-width:100%;
  overflow:hidden;
}
.code-body{
  transform:translateZ(0);
  -webkit-font-smoothing:subpixel-antialiased;
}

/* ── Proof cell — numbers stay crisp, no tilt-inner involved ── */
.proof-num{
  font-size:38px;font-weight:900;letter-spacing:-.05em;margin-bottom:6px;
  background:linear-gradient(135deg,var(--text) 0%,var(--purple3) 100%);
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
  transition:filter .3s;
}
.proof-cell:hover .proof-num{
  filter:drop-shadow(0 0 16px rgba(139,92,246,.6));
}

/* ── Shine overlay on cards ── */
.exp-card,.process-card,.proof-cell,.code-card{
  --mx:50%;--my:50%;
}
.exp-card::after,.process-card::after,.proof-cell::after{
  content:'';
  position:absolute;inset:0;border-radius:inherit;
  background:radial-gradient(120px circle at var(--mx) var(--my), rgba(255,255,255,.07), transparent 70%);
  opacity:0;transition:opacity .3s;pointer-events:none;z-index:1;
}
.exp-card:hover::after,.process-card:hover::after,.proof-cell:hover::after{ opacity:1 }

/* ── Ripple keyframe ── */
@keyframes rippleAnim{
  to{ transform:scale(1); opacity:0; }
}

/* ── Scroll-reveal: from-left and from-right variants ── */
.reveal-left { opacity:0;transform:translateX(-32px);transition:opacity .7s cubic-bezier(.22,.61,.36,1),transform .7s cubic-bezier(.22,.61,.36,1) }
.reveal-right{ opacity:0;transform:translateX( 32px);transition:opacity .7s cubic-bezier(.22,.61,.36,1),transform .7s cubic-bezier(.22,.61,.36,1) }
.reveal-left.visible,.reveal-right.visible{ opacity:1;transform:none }

/* ── Skill bar shimmer ── */
@keyframes shimmerBar{
  0%  { background-position:200% 0 }
  100%{ background-position:-200% 0 }
}
.sk-fill.shimmer{
  background:linear-gradient(90deg,var(--violet),var(--purple),var(--purple3),var(--purple),var(--violet));
  background-size:200% 100%;
  animation:shimmerBar 1.8s ease forwards;
}

/* ── Section scroll progress lines ── */
.section-line{
  display:block;width:0;height:1px;
  background:linear-gradient(90deg,var(--purple),var(--indigo));
  margin-bottom:18px;
  transition:width 1s cubic-bezier(.22,.61,.36,1);
  box-shadow:0 0 8px rgba(139,92,246,.5);
}
.section-line.active{ width:48px }

/* ── Perspective wrapper needed for tilt ── */
.exp-grid,.process-grid,.proof-strip,.projects-list{
  perspective:1200px;
}
</style>
</head>
<body>

<!-- Background orbs -->
<div class="orb orb-1" aria-hidden="true"></div>
<div class="orb orb-2" aria-hidden="true"></div>
<div class="orb orb-3" aria-hidden="true"></div>

<div id="progress-bar"></div>

<!-- ═══ NAV ═══ -->
<header id="nav">
  <div class="nav-pill">
    <span class="nav-brand">H.AHA</span>
    <a href="#hero">Home</a>
    <a href="#about">About</a>
    <a href="#expertise">Build</a>
    <a href="#arsenal">Stack</a>
    <a href="#projects">Projects</a>
    <a href="#philosophy">Philosophy</a>
    <a href="#contact">Contact</a>
    <a href="mailto:haideralhajahmed2@gmail.com?subject=Freelance%20Inquiry%20%E2%80%94%20From%20Portfolio&body=Hi%20Haider%2C%0A%0AI%20came%20across%20your%20portfolio%20and%20I'm%20interested%20in%20working%20with%20you.%0A%0A" class="nav-cta">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      Hire me
    </a>
    <button class="nav-ham" id="ham" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</header>
<div id="mob-menu">
  <a href="#hero">Home</a>
  <a href="#about">About</a>
  <a href="#expertise">What I Build</a>
  <a href="#arsenal">Tech Stack</a>
  <a href="#projects">Projects</a>
  <a href="#philosophy">Philosophy</a>
  <a href="#contact">Contact</a>
</div>

<!-- ═══ HERO ═══ -->
<section id="hero">
  <div class="hero-glow" aria-hidden="true"></div>
  <div class="hero-ring" aria-hidden="true"></div>
  <div class="hero-ring hero-ring2" aria-hidden="true"></div>
  <div class="hero-inner">
    <!-- Left -->
    <div class="hero-left">
      <div class="hero-avail">
        <span class="avail-dot"></span>
        AVAILABLE FOR FREELANCE — HOMS, SYRIA / GMT+3
      </div>
      <h1 class="hero-title">
        <span class="line-grad" style="font-size:clamp(26px,3.5vw,48px);letter-spacing:-.02em;margin-bottom:2px">Haider Al-Haj Ahmed</span>
        <span class="line-white">Backend Engineer</span>
        <span class="line-white">building systems</span>
        <span class="line-white">that <span class="gradient">scale.</span></span>
      </h1>
      <p class="hero-sub">Laravel specialist and backend architect. I build clean REST APIs, robust data layers, and production-grade PHP systems. Every endpoint is a contract — I write contracts that don't break.</p>
      <div class="hero-btns">
        <a href="#projects" class="btn-purple">
          View Projects
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="mailto:haideralhajahmed2@gmail.com" class="btn-ghost">Get in touch</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="4">0</span>+</div>
          <div class="hero-stat-label">Production projects</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="60">0</span>+</div>
          <div class="hero-stat-label">API endpoints shipped</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span data-count="5">0</span></div>
          <div class="hero-stat-label">Laravel versions (8→13)</div>
        </div>
      </div>
    </div>
    <!-- Right: code card -->
    <div class="hero-right">
      <div class="code-card-wrap">
        <div class="float-badge fb-1">⚡ Laravel 13</div>
        <div class="float-badge fb-2">🔐 Sanctum Auth</div>
        <div class="float-badge fb-3">✦ PHP 8+</div>
        <div class="code-card">
          <div class="code-card-bar">
            <div class="cc-dots"><span></span><span></span><span></span></div>
            <span class="cc-filename">AppointmentController.php</span>
          </div>
          <div class="code-body"><span class="cm">// Conflict-safe booking with pessimistic lock</span>
<span class="ck">public function</span> <span class="cf">store</span>(StoreRequest <span class="cv">$request</span>)
{
    <span class="cv">$this</span>-><span class="cf">authorize</span>(<span class="cs">'create'</span>, Appointment::<span class="ck">class</span>);

    <span class="ck">return</span> DB::<span class="cf">transaction</span>(<span class="ck">function</span> () <span class="ck">use</span> (<span class="cv">$request</span>) {
        <span class="cv">$slot</span>  = TimeSlot::<span class="cf">lockForUpdate</span>()
            -><span class="cf">findOrFail</span>(<span class="cv">$request</span>-><span class="cf">integer</span>(<span class="cs">'slot_id'</span>));

        <span class="cf">throw_if</span>(<span class="cv">$slot</span>->is_booked, ConflictException::<span class="ck">class</span>);

        <span class="cv">$appt</span> = Appointment::<span class="cf">create</span>(<span class="cv">$request</span>-><span class="cf">validated</span>());
        <span class="cv">$slot</span>-><span class="cf">markBooked</span>();

        <span class="cf">dispatch</span>(<span class="ck">new</span> <span class="cn">SendReminderJob</span>(<span class="cv">$appt</span>));

        <span class="ck">return</span> AppointmentResource::<span class="cf">make</span>(<span class="cv">$appt</span>)
            -><span class="cf">response</span>()-><span class="cf">setStatusCode</span>(<span class="cs">201</span>);
    });
}</div>
          <div class="code-footer">
            <span class="badge-green">Tests passing · 100% coverage</span>
            <span class="badge-purple">Laravel 13</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-line" aria-hidden="true">
    <div class="scroll-line-bar"></div>
    <span>Scroll</span>
  </div>
</section>

<!-- ═══ TICKER ═══ -->
<div id="ticker" aria-hidden="true">
  <div class="ticker-track">
    <span class="ticker-item"><span class="dot"></span>Laravel REST APIs</span>
    <span class="ticker-item"><span class="dot"></span>Sanctum Auth</span>
    <span class="ticker-item"><span class="dot"></span>Eloquent ORM</span>
    <span class="ticker-item"><span class="dot"></span>MySQL Schema Design</span>
    <span class="ticker-item"><span class="dot"></span>Livewire Interfaces</span>
    <span class="ticker-item"><span class="dot"></span>PHP 8+ Features</span>
    <span class="ticker-item"><span class="dot"></span>SOLID Principles</span>
    <span class="ticker-item"><span class="dot"></span>Clean Architecture</span>
    <span class="ticker-item"><span class="dot"></span>Queued Jobs & Events</span>
    <span class="ticker-item"><span class="dot"></span>JSON:API Conventions</span>
    <span class="ticker-item"><span class="dot"></span>Domain Modeling</span>
    <span class="ticker-item"><span class="dot"></span>Service Layer Pattern</span>
    <!-- duplicate for seamless loop -->
    <span class="ticker-item"><span class="dot"></span>Laravel REST APIs</span>
    <span class="ticker-item"><span class="dot"></span>Sanctum Auth</span>
    <span class="ticker-item"><span class="dot"></span>Eloquent ORM</span>
    <span class="ticker-item"><span class="dot"></span>MySQL Schema Design</span>
    <span class="ticker-item"><span class="dot"></span>Livewire Interfaces</span>
    <span class="ticker-item"><span class="dot"></span>PHP 8+ Features</span>
    <span class="ticker-item"><span class="dot"></span>SOLID Principles</span>
    <span class="ticker-item"><span class="dot"></span>Clean Architecture</span>
    <span class="ticker-item"><span class="dot"></span>Queued Jobs & Events</span>
    <span class="ticker-item"><span class="dot"></span>JSON:API Conventions</span>
    <span class="ticker-item"><span class="dot"></span>Domain Modeling</span>
    <span class="ticker-item"><span class="dot"></span>Service Layer Pattern</span>
  </div>
</div>

<!-- ═══ ABOUT ═══ -->
<section id="about">
  <div class="container">
    <div class="about-grid">
      <div class="reveal">
        <div class="section-eyebrow">01 / ABOUT</div>
        <h2 class="section-heading" style="margin-bottom:28px">Backend systems<br>built for the <span class="gradient">long run.</span></h2>
        <p class="about-body">I'm a Software Engineering student at <strong>Homs University</strong> and a freelance backend developer. My work sits at the intersection of precision engineering and clean design: APIs that are a pleasure to consume, schemas that don't break under load, and code that a future developer can actually read.</p>
        <p class="about-body">Before code, I was a <strong>freelance translator</strong> — a career defined by precision and structured thinking. An API contract is a translation problem: turning business intent into machine-readable form without losing meaning. Those instincts now drive every system I architect.</p>
        <p class="about-body">Whether it's a solo architecture decision or a collaborative domain model, my goal stays constant: <strong>fewer bugs, more clarity, better outcomes.</strong></p>
        <div class="about-links">
          <a href="https://github.com/Haider-Haj-Ahmed" target="_blank" class="about-link">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
            GitHub
          </a>
          <a href="https://t.me/haider_cz" target="_blank" class="about-link">Telegram</a>
          <a href="https://instagram.com/haider_cz" target="_blank" class="about-link">Instagram</a>
          <a href="mailto:haideralhajahmed2@gmail.com" class="about-link">Email</a>
        </div>
      </div>
      <div class="reveal d2">
        <div class="glass" style="padding:32px">
          <div class="section-eyebrow" style="margin-bottom:20px">JOURNEY</div>
          <div class="timeline">
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">PRESENT</div>
              <div class="tl-title">Freelance Backend Developer</div>
              <div class="tl-desc">Building production-ready Laravel APIs for clients across healthcare, job markets, social platforms and tourism. Sole architect on multiple systems.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">ONGOING</div>
              <div class="tl-title">Software Engineering @ Homs University</div>
              <div class="tl-desc">Deep-diving into CS fundamentals, algorithms, and systems design — applying theory directly to production problems.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot dim"></div>
              <div class="tl-year">EARLIER</div>
              <div class="tl-title">Freelance Translator</div>
              <div class="tl-desc">Precision and structured communication as a professional career. The same discipline now drives every API design decision.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot dim"></div>
              <div class="tl-year">ORIGIN</div>
              <div class="tl-title">Fell in love with building things</div>
              <div class="tl-desc">The moment I realized elegant code and elegant prose share the same underlying logic.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PROOF POINTS ═══ -->
<section id="proof">
  <div class="container">
    <div class="proof-strip reveal">
      <div class="proof-cell">
        <div class="proof-num"><span data-count="4">0</span>+</div>
        <div class="proof-label">Production systems shipped as sole architect</div>
      </div>
      <div class="proof-cell">
        <div class="proof-num"><span data-count="60">0</span>+</div>
        <div class="proof-label">REST API endpoints following JSON:API conventions</div>
      </div>
      <div class="proof-cell">
        <div class="proof-num"><span data-count="5">0</span></div>
        <div class="proof-label">Laravel major versions worked across (8 → 13)</div>
      </div>
      <div class="proof-cell">
        <div class="proof-num"><span data-count="100">0</span>%</div>
        <div class="proof-label">Projects with scoped auth and versioned endpoints</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ EXPERTISE ═══ -->
<section id="expertise">
  <div class="container">
    <div class="expertise-header reveal">
      <div class="section-eyebrow">02 / WHAT I BUILD</div>
      <h2 class="section-heading">The systems I <span class="gradient">specialize in.</span></h2>
    </div>
    <div class="exp-grid">

      <div class="exp-card glass-hover reveal">
        <div class="exp-glow"></div>
        <div class="exp-num">01</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h7"/></svg></div>
        <div class="exp-title">REST API Architecture</div>
        <div class="exp-desc">Versioned, resource-oriented APIs with Sanctum auth, throttling, scoped token abilities, and JSON:API-compliant response shapes. Built to be consumed by mobile, web, and third-party clients without surprises.</div>
      </div>

      <div class="exp-card glass-hover reveal d1">
        <div class="exp-glow"></div>
        <div class="exp-num">02</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
        <div class="exp-title">Domain Modeling & ORM</div>
        <div class="exp-desc">Eloquent schema design reflecting the real domain. Normalized tables, soft deletes, polymorphic relationships, scoped queries, and observer patterns that keep business logic where it belongs.</div>
      </div>

      <div class="exp-card glass-hover reveal d2">
        <div class="exp-glow"></div>
        <div class="exp-num">03</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div class="exp-title">Auth & Authorization</div>
        <div class="exp-desc">Sanctum token management, OTP verification flows, policy-based authorization, and role-gated endpoints. Secure by design — not an afterthought bolted on at the end.</div>
      </div>

      <div class="exp-card glass-hover reveal d1">
        <div class="exp-glow"></div>
        <div class="exp-num">04</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="3" y1="15" x2="21" y2="15"/><line x1="9" y1="3" x2="9" y2="21"/></svg></div>
        <div class="exp-title">Background Jobs & Queues</div>
        <div class="exp-desc">Queued jobs, events, and scheduled tasks that keep request cycles lean. Reminders, notifications, and heavy processing happen asynchronously — reliably, without blocking responses.</div>
      </div>

      <div class="exp-card glass-hover reveal d2">
        <div class="exp-glow"></div>
        <div class="exp-num">05</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <div class="exp-title">Livewire Interfaces</div>
        <div class="exp-desc">Dynamic server-side components with real-time feedback, inline validation, and zero JavaScript complexity. Full-stack Laravel without leaving PHP — fast to build, easy to maintain.</div>
      </div>

      <div class="exp-card glass-hover reveal d3">
        <div class="exp-glow"></div>
        <div class="exp-num">06</div>
        <div class="exp-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg></div>
        <div class="exp-title">Clean Architecture</div>
        <div class="exp-desc">SOLID principles, service layers, repository patterns, and strict separation of concerns. Code that a junior can navigate and a senior can respect — because the next person matters.</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ ARSENAL ═══ -->
<section id="arsenal">
  <div class="container">
    <div class="arsenal-header reveal">
      <div class="section-eyebrow">03 / TECH STACK</div>
      <h2 class="section-heading">Tools I trust <span class="gradient">in production.</span></h2>
    </div>
    <div class="skill-groups reveal d1">
      <div class="skill-group-card glass">
        <div class="skg-label">Core Backend</div>
        <div class="skill-row"><span class="sk-name">Laravel</span><div class="sk-track"><div class="sk-fill" data-w="95"></div></div><span class="sk-pct">95%</span></div>
        <div class="skill-row"><span class="sk-name">PHP 8+</span><div class="sk-track"><div class="sk-fill" data-w="90"></div></div><span class="sk-pct">90%</span></div>
        <div class="skill-row"><span class="sk-name">REST APIs</span><div class="sk-track"><div class="sk-fill" data-w="88"></div></div><span class="sk-pct">88%</span></div>
        <div class="skill-row"><span class="sk-name">Livewire</span><div class="sk-track"><div class="sk-fill" data-w="82"></div></div><span class="sk-pct">82%</span></div>
      </div>
      <div class="skill-group-card glass">
        <div class="skg-label">Data & Storage</div>
        <div class="skill-row"><span class="sk-name">MySQL</span><div class="sk-track"><div class="sk-fill" data-w="80"></div></div><span class="sk-pct">80%</span></div>
        <div class="skill-row"><span class="sk-name">Eloquent ORM</span><div class="sk-track"><div class="sk-fill" data-w="88"></div></div><span class="sk-pct">88%</span></div>
        <div class="skill-row"><span class="sk-name">Schema Design</span><div class="sk-track"><div class="sk-fill" data-w="84"></div></div><span class="sk-pct">84%</span></div>
        <div class="skill-row"><span class="sk-name">Clean Code</span><div class="sk-track"><div class="sk-fill" data-w="87"></div></div><span class="sk-pct">87%</span></div>
      </div>
    </div>
    <div class="reveal d2" style="margin-top:16px">
      <div class="glass" style="padding:28px">
        <div class="skg-label" style="margin-bottom:16px">Architecture, Principles & Tools</div>
        <div class="tag-cloud">
          <span class="stag accent">OOP</span><span class="stag accent">MVC</span><span class="stag accent">SOLID</span><span class="stag accent">Clean Code</span>
          <span class="stag">DRY</span><span class="stag">SoC</span><span class="stag">Repository Pattern</span><span class="stag">Service Layer</span>
          <span class="stag">Event-Driven</span><span class="stag">Queues</span><span class="stag">Sanctum</span><span class="stag">Horizon</span>
          <span class="stag">Postman</span><span class="stag">Git / GitHub</span><span class="stag">Railway</span><span class="stag">Blade Templates</span>
          <span class="stag">Soft Deletes</span><span class="stag">Pessimistic Locking</span><span class="stag">JSON:API</span><span class="stag">Throttling</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PROJECTS ═══ -->
<section id="projects">
  <div class="container">
    <div class="projects-header">
      <div class="reveal">
        <div class="section-eyebrow">04 / PROJECTS</div>
        <h2 class="section-heading">Selected work<br>from <span class="gradient">production.</span></h2>
      </div>
      <a href="https://github.com/Haider-Haj-Ahmed" target="_blank" class="btn-ghost reveal">
        View all on GitHub
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
      </a>
    </div>
    <div class="projects-list">

      <!-- 01 -->
      <div class="proj-card reveal">
        <div class="proj-top-bar"><div class="cc-dots"><span></span><span></span><span></span></div><span class="proj-top-file">laravel-blog-api / DashboardController.php</span></div>
        <div class="proj-body">
          <div>
            <div class="proj-index">01 / PROJECT</div>
            <div class="proj-title">TechTalk API</div>
            <div class="proj-desc">A scalable content and auth platform with OTP verification, multi-state post management (draft/published), nested @mention comments, and a personalized feed algorithm based on user interactions.</div>
            <div class="proj-tags">
              <span class="ptag ptag-v">Laravel 12</span><span class="ptag ptag-v">Sanctum</span><span class="ptag ptag-g">MySQL</span><span class="ptag ptag-g">OTP Auth</span><span class="ptag ptag-g">Feed Algorithm</span>
            </div>
            <button class="expand-btn" onclick="toggleCase(this)">Case study ▾</button>
          </div>
          <div class="proj-actions">
            <a href="https://github.com/Haider-Haj-Ahmed/laravel-blog-api" target="_blank" class="proj-gh-btn">
              <svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
              GitHub ↗
            </a>
          </div>
        </div>
        <div class="proj-case">
          <div class="case-inner">
            <div class="case-col"><div class="case-lbl">Challenge</div><div class="case-txt">Build a secure social platform backend with auth, multi-state post management, and a recommendation engine without ML infrastructure.</div></div>
            <div class="case-col"><div class="case-lbl">Approach</div><div class="case-txt">Sanctum with OTP two-factor, CRUD across draft/published states, personalized feed from interaction scores, nested comments with @mention resolution.</div></div>
            <div class="case-col"><div class="case-lbl">Outcome</div><div class="case-txt">Sole backend architect. Clean API with strict SoC, 3 GitHub stars from the community.</div></div>
          </div>
        </div>
      </div>

      <!-- 02 -->
      <div class="proj-card reveal d1">
        <div class="proj-top-bar"><div class="cc-dots"><span></span><span></span><span></span></div><span class="proj-top-file">worknetsyr-api / JobController.php</span></div>
        <div class="proj-body">
          <div>
            <div class="proj-index">02 / PROJECT</div>
            <div class="proj-title">WorkNetSYR API</div>
            <div class="proj-desc">Job-market API connecting professionals with project owners in Syria — the backend powering the "Forsa" mobile app. Co-developed with high-level abstractions and rigorous software engineering methodology.</div>
            <div class="proj-tags">
              <span class="ptag ptag-v">Laravel</span><span class="ptag ptag-v">REST API</span><span class="ptag ptag-g">MySQL</span><span class="ptag ptag-g">Notifications</span><span class="ptag ptag-g">Applications</span>
            </div>
            <button class="expand-btn" onclick="toggleCase(this)">Case study ▾</button>
          </div>
          <div class="proj-actions">
            <a href="https://github.com/Haider-Haj-Ahmed/worknetsyr-api" target="_blank" class="proj-gh-btn">
              <svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
              GitHub ↗
            </a>
          </div>
        </div>
        <div class="proj-case">
          <div class="case-inner">
            <div class="case-col"><div class="case-lbl">Challenge</div><div class="case-txt">Bridge Syria's skilled workforce to project owners via a mobile app — no existing digital infrastructure to build on.</div></div>
            <div class="case-col"><div class="case-lbl">Approach</div><div class="case-txt">Co-developed backend with high-level abstractions. Auth, job posting, application flows, and notification pipelines with scalability as first-class constraint.</div></div>
            <div class="case-col"><div class="case-lbl">Outcome</div><div class="case-txt">Production-ready, scalable codebase delivered through rigorous methodology. Foundation for the Forsa mobile app.</div></div>
          </div>
        </div>
      </div>

      <!-- 03 -->
      <div class="proj-card reveal d2">
        <div class="proj-top-bar"><div class="cc-dots"><span></span><span></span><span></span></div><span class="proj-top-file">dental-clinic / AppointmentController.php</span></div>
        <div class="proj-body">
          <div>
            <div class="proj-index">03 / PROJECT</div>
            <div class="proj-title">Dental Clinic API</div>
            <div class="proj-desc">Full clinic management REST API: patients, appointments with conflict-safe booking, odontogram charting, treatment plans, billing, inventory, and queued reminders. ~60+ endpoints. Sole architect.</div>
            <div class="proj-tags">
              <span class="ptag ptag-v">Laravel 13</span><span class="ptag ptag-v">Sanctum</span><span class="ptag ptag-g">MySQL</span><span class="ptag ptag-g">Queues</span><span class="ptag ptag-g">Soft Deletes</span><span class="ptag ptag-g">Locking</span>
            </div>
            <button class="expand-btn" onclick="toggleCase(this)">Case study ▾</button>
          </div>
          <div class="proj-actions">
            <a href="https://github.com/Haider-Haj-Ahmed/dental-clinic" target="_blank" class="proj-gh-btn">
              <svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
              GitHub ↗
            </a>
          </div>
        </div>
        <div class="proj-case">
          <div class="case-inner">
            <div class="case-col"><div class="case-lbl">Challenge</div><div class="case-txt">Dental practices need a backend handling appointments, clinical charting, billing, and recalls without monolithic overhead or double-booking.</div></div>
            <div class="case-col"><div class="case-lbl">Approach</div><div class="case-txt">Versioned API (v1) with scoped Sanctum tokens, pessimistic locking for slot reservation, soft-delete throughout, dedicated modules for charting, invoices, inventory.</div></div>
            <div class="case-col"><div class="case-lbl">Outcome</div><div class="case-txt">~60 endpoints, JSON:API conventions, throttling, mobile-first auth. Production-grade clinical system.</div></div>
          </div>
        </div>
      </div>

      <!-- 04 -->
      <div class="proj-card reveal d3">
        <div class="proj-top-bar"><div class="cc-dots"><span></span><span></span><span></span></div><span class="proj-top-file">syriana / TourGuideController.php</span></div>
        <div class="proj-body">
          <div>
            <div class="proj-index">04 / PROJECT</div>
            <div class="proj-title">Syriana Tourism Platform</div>
            <div class="proj-desc">Full-stack Laravel + Livewire tourism platform connecting tourists with local guides and showcasing Syria's cultural and natural heritage. Built with Blade templates and server-side real-time interactivity.</div>
            <div class="proj-tags">
              <span class="ptag ptag-v">Laravel</span><span class="ptag ptag-v">Livewire</span><span class="ptag ptag-g">Blade</span><span class="ptag ptag-g">MySQL</span><span class="ptag ptag-g">Full-Stack</span>
            </div>
            <button class="expand-btn" onclick="toggleCase(this)">Case study ▾</button>
          </div>
          <div class="proj-actions">
            <a href="https://github.com/Haider-Haj-Ahmed/syriana" target="_blank" class="proj-gh-btn">
              <svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
              GitHub ↗
            </a>
          </div>
        </div>
        <div class="proj-case">
          <div class="case-inner">
            <div class="case-col"><div class="case-lbl">Challenge</div><div class="case-txt">Build a full-stack tourism discovery platform connecting tourists with verified local guides and surfacing Syria's cultural sites through an engaging UI.</div></div>
            <div class="case-col"><div class="case-lbl">Approach</div><div class="case-txt">Laravel + Livewire for zero-JS dynamic interactions. Blade for SEO-friendly rendering. Guide profiles, tour listings, and booking flows as first-class features.</div></div>
            <div class="case-col"><div class="case-lbl">Outcome</div><div class="case-txt">Full-stack platform with server-side interactivity, clean architecture, and a user-facing interface ready for real tourism use cases.</div></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ PHILOSOPHY ═══ -->
<section id="philosophy">
  <div class="container">
    <div class="phi-box reveal">
      <div class="phi-header">
        <div class="section-eyebrow">05 / ENGINEERING PHILOSOPHY</div>
        <h2 class="section-heading" style="margin-top:12px">How I approach<br>backend <span class="gradient">engineering.</span></h2>
      </div>
      <div class="phi-list">
        <div class="phi-item">
          <div class="phi-num">01</div>
          <div class="phi-title">An API is a contract, not a convenience.</div>
          <div class="phi-desc">Every endpoint I ship is a promise to the clients consuming it. Versioning, consistent error shapes, and predictable resource structures aren't optional extras — they're the baseline for systems that scale without breaking everything downstream.</div>
        </div>
        <div class="phi-item">
          <div class="phi-num">02</div>
          <div class="phi-title">Business logic belongs in the domain, not the controller.</div>
          <div class="phi-desc">Controllers that do too much are technical debt in disguise. Keep them thin: validate input, delegate to a service or action class, return a resource. The domain model handles the decisions. This makes testing, refactoring, and onboarding dramatically cheaper.</div>
        </div>
        <div class="phi-item">
          <div class="phi-num">03</div>
          <div class="phi-title">The database is not a detail — it's the foundation.</div>
          <div class="phi-desc">Schema decisions made early compound forever. I think carefully about normalization, index strategy, soft-delete implications, and constraint placement before writing the first migration. A clean schema is a gift to every query that follows.</div>
        </div>
        <div class="phi-item">
          <div class="phi-num">04</div>
          <div class="phi-title">Security is a first-class feature, not a final checklist.</div>
          <div class="phi-desc">Scoped token abilities, policy-based authorization, and pessimistic locking on critical paths aren't security theatre. They reflect a genuine model of who is allowed to do what, designed in from the start — not bolted on after a breach.</div>
        </div>
        <div class="phi-item">
          <div class="phi-num">05</div>
          <div class="phi-title">Code you can read is code you can maintain.</div>
          <div class="phi-desc">Clever code that's impossible to understand is a liability. I write for the next developer (often myself, six months later): meaningful names, small focused methods, and comments that explain why — not what.</div>
        </div>
      </div>
      <div class="phi-arch">
        <div class="arch-label">TYPICAL SYSTEM ARCHITECTURE</div>
        <div class="arch-nodes">
          <div class="anode light">Mobile / Web Client</div><div class="aarrow">→</div>
          <div class="anode blue">API Gateway (Sanctum)</div><div class="aarrow">→</div>
          <div class="anode light">Controller</div><div class="aarrow">→</div>
          <div class="anode blue">Service / Action</div><div class="aarrow">→</div>
          <div class="anode light">Eloquent + MySQL</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PROCESS ═══ -->
<section id="process">
  <div class="container">
    <div class="process-header reveal">
      <div class="section-eyebrow">06 / PROCESS</div>
      <h2 class="section-heading">How a project actually <span class="gradient">gets built.</span></h2>
    </div>
    <div class="process-grid">
      <div class="process-card glass-hover reveal">
        <div class="step-num">01 — DISCOVERY</div>
        <div class="step-title">Understand the domain</div>
        <div class="step-desc">Map business entities, their relationships, and key operations before writing a single line. A domain model on paper prevents a broken schema in production.</div>
      </div>
      <div class="process-card glass-hover reveal d1">
        <div class="step-num">02 — DESIGN</div>
        <div class="step-title">API contract first</div>
        <div class="step-desc">Draft endpoint list, response shapes, and auth model before implementation. Surfaces misunderstandings early and gives mobile/web teams something to mock against immediately.</div>
      </div>
      <div class="process-card glass-hover reveal d2">
        <div class="step-num">03 — BUILD</div>
        <div class="step-title">Ship in working slices</div>
        <div class="step-desc">Features built vertically: migration to endpoint, testable in isolation. No partially-built modules waiting on other modules — every commit leaves the system in a shippable state.</div>
      </div>
      <div class="process-card glass-hover reveal d3">
        <div class="step-num">04 — HARDEN</div>
        <div class="step-title">Validate, secure, document</div>
        <div class="step-desc">Request validation, authorization policies, throttling, and Postman collections. Production-grade means someone else can pick this up and run it — not just me.</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ TERMINAL ═══ -->
<section id="terminal-section">
  <div class="container">
    <div class="term-layout">
      <div class="term-intro reveal">
        <div class="section-eyebrow">07 / INTERACTIVE CLI</div>
        <h2 class="section-heading" style="font-size:clamp(26px,3vw,40px);margin-top:12px">Ask the <span class="gradient">terminal.</span></h2>
        <p>Not a fan of scrolling? Type a command and get straight to the information you need.</p>
        <div class="cmd-pills">
          <button class="cpill" onclick="runCmd('whois')">whois</button>
          <button class="cpill" onclick="runCmd('projects')">projects</button>
          <button class="cpill" onclick="runCmd('skills')">skills</button>
          <button class="cpill" onclick="runCmd('contact')">contact</button>
          <button class="cpill" onclick="runCmd('philosophy')">philosophy</button>
          <button class="cpill" onclick="runCmd('laravel')">laravel</button>
          <button class="cpill" onclick="runCmd('process')">process</button>
          <button class="cpill" onclick="runCmd('help')">help</button>
          <button class="cpill" onclick="runCmd('clear')">clear</button>
        </div>
      </div>
      <div class="reveal d2">
        <div class="terminal">
          <div class="term-bar">
            <div class="cc-dots"><span></span><span></span><span></span></div>
            <span class="term-title">haider@portfolio — zsh</span>
          </div>
          <div class="term-body">
            <div id="term-out">
              <p><span class="tg">haider@portfolio</span> <span class="td">~</span></p>
              <p><span class="tc">Welcome to Haider Al-Haj Ahmed's portfolio.</span></p>
              <p><span class="td">Type </span><span class="tp">help</span><span class="td"> to see available commands.</span></p>
            </div>
            <div class="term-ps">
              <span class="ps1">❯</span>
              <input id="term-in" type="text" placeholder="Type a command..." spellcheck="false" autocomplete="off">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ CONTACT ═══ -->
<section id="contact">
  <div class="container">
    <div class="contact-wrap reveal">
      <div class="contact-glow" aria-hidden="true"></div>
      <div class="contact-inner">
        <div class="contact-left">
          <div class="section-eyebrow">08 / CONTACT</div>
          <p style="font-family:var(--mono);font-size:11px;color:var(--text3);letter-spacing:.1em;margin-top:12px;margin-bottom:6px">HAIDER AL-HAJ AHMED</p>
          <h2 class="contact-heading">Let's build<br><span class="gradient">something real.</span></h2>
          <p class="contact-sub">Open to freelance backend projects, API consulting, and technical collaboration. If you have a system that needs to scale cleanly, let's talk.</p>
          <div class="contact-channels">
            <a href="mailto:haideralhajahmed2@gmail.com" class="cch">
              <div class="cch-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
              <div><div class="cch-lbl">EMAIL</div><div class="cch-val">haideralhajahmed2@gmail.com</div></div>
              <span class="cch-arrow">→</span>
            </a>
            <a href="https://github.com/Haider-Haj-Ahmed" target="_blank" class="cch">
              <div class="cch-icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg></div>
              <div><div class="cch-lbl">GITHUB</div><div class="cch-val">Haider-Haj-Ahmed</div></div>
              <span class="cch-arrow">→</span>
            </a>
            <a href="https://t.me/haider_cz" target="_blank" class="cch">
              <div class="cch-icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.16.18-.357.295-.6.295l.213-3.053 5.56-5.023c.24-.213-.054-.333-.373-.12l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.537-.194 1.006.131.833.94z"/></svg></div>
              <div><div class="cch-lbl">TELEGRAM</div><div class="cch-val">@haider_cz</div></div>
              <span class="cch-arrow">→</span>
            </a>
            <a href="https://wa.me/963932938041" target="_blank" class="cch">
              <div class="cch-icon"><svg viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .06 5.435.058 12.002a11.9 11.9 0 001.591 5.947L0 24l6.336-1.663a11.93 11.93 0 005.709 1.455h.005c6.554 0 11.89-5.435 11.893-12.003a11.82 11.82 0 00-3.487-8.412z"/></svg></div>
              <div><div class="cch-lbl">WHATSAPP</div><div class="cch-val">+963 932 938 041</div></div>
              <span class="cch-arrow">→</span>
            </a>
            <a href="https://instagram.com/haider_cz" target="_blank" class="cch">
              <div class="cch-icon"><svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></div>
              <div><div class="cch-lbl">INSTAGRAM</div><div class="cch-val">@haider_cz</div></div>
              <span class="cch-arrow">→</span>
            </a>
          </div>
        </div>
        <div class="contact-right">
          <div class="cpanel-block">
            <div class="cp-lbl">CURRENT STATUS</div>
            <div class="avail-badge"><span class="avail-dot" style="width:8px;height:8px"></span> Available for work</div>
          </div>
          <hr class="cpanel-divider">
          <div class="cpanel-block">
            <div class="cp-lbl">LOCATION</div>
            <div class="cp-val">Homs, Syria / GMT+3</div>
          </div>
          <hr class="cpanel-divider">
          <div class="cpanel-block">
            <div class="cp-lbl">SPECIALIZATION</div>
            <div class="cp-tags">
              <span class="stag accent">Laravel APIs</span>
              <span class="stag accent">Backend Architecture</span>
              <span class="stag">PHP Systems</span>
              <span class="stag">MySQL Design</span>
              <span class="stag">Livewire</span>
            </div>
          </div>
          <hr class="cpanel-divider">
          <div class="cpanel-block">
            <div class="cp-lbl">RESPONSE TIME</div>
            <div class="cp-val" style="font-size:14px">Usually within 24 hours</div>
          </div>
          <hr class="cpanel-divider">
          <div class="cpanel-block">
            <div class="cp-lbl">IDEAL PROJECTS</div>
            <div style="font-size:13px;color:var(--text2);line-height:1.75;margin-top:6px">REST API builds, Laravel system architecture, domain modeling, backend consulting — anything where clean code and scalable design are the priority.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer id="footer">
  <div class="container">
    <div class="footer-inner">
      <span class="footer-brand">H.AHA · haideralhajahmed2@gmail.com</span>
      <span class="footer-copy">© 2026 Haider Al-Haj Ahmed · Built with Laravel & Blade</span>
      <div class="footer-links">
        <a href="https://github.com/Haider-Haj-Ahmed" target="_blank">GitHub</a>
        <a href="https://t.me/haider_cz" target="_blank">Telegram</a>
        <a href="https://instagram.com/haider_cz" target="_blank">Instagram</a>
      </div>
    </div>
  </div>
</footer>

<!-- ═══════════════════════════════════════════════
     SCRIPTS
═══════════════════════════════════════════════ -->
<script>
/* ═══════════════════════════════════════════════════════════
   HAIDER AL-HAJ AHMED PORTFOLIO — INTERACTIVE LAYER v3
   Scroll effects · 3D tilt · Parallax · Hover · Mobile-safe
═══════════════════════════════════════════════════════════ */

const IS_TOUCH = window.matchMedia('(pointer: coarse)').matches;
const IS_REDUCED = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isMobile   = () => window.innerWidth <= 768;

/* ════════════════════════════════════════
   1. PROGRESS BAR
════════════════════════════════════════ */
const pb = document.getElementById('progress-bar');
window.addEventListener('scroll', () => {
  const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
  pb.style.width = (p * 100) + '%';
}, { passive: true });

/* ════════════════════════════════════════
   2. NAV — hamburger + active + fade-on-scroll-down
════════════════════════════════════════ */
const navEl = document.getElementById('nav');
const ham   = document.getElementById('ham');
const mob   = document.getElementById('mob-menu');

ham.addEventListener('click', () => {
  const open = mob.classList.toggle('open');
  const spans = ham.querySelectorAll('span');
  spans[0].style.transform = open ? 'rotate(45deg) translate(4px,5px)' : '';
  spans[1].style.opacity   = open ? '0' : '1';
  spans[2].style.transform = open ? 'rotate(-45deg) translate(4px,-5px)' : '';
});
mob.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  mob.classList.remove('open');
  ham.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = '1'; });
}));

// Active section highlight
const navLinks = document.querySelectorAll('.nav-pill > a:not(.nav-cta)');
const secObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      navLinks.forEach(a => {
        a.classList.remove('active');
        if (a.getAttribute('href') === '#' + e.target.id) a.classList.add('active');
      });
    }
  });
}, { threshold: 0.3 });
document.querySelectorAll('section[id]').forEach(s => secObs.observe(s));

// Nav fade/scale on scroll down
let lastY = 0;
window.addEventListener('scroll', () => {
  const sy     = window.scrollY;
  const mobile = isMobile();
  const base   = mobile ? '' : 'translateX(-50%)';
  if (sy > lastY && sy > 120) {
    navEl.style.opacity   = '0.65';
    navEl.style.transform = mobile ? 'translateY(-4px) scale(0.97)' : 'translateX(-50%) translateY(-4px) scale(0.97)';
  } else {
    navEl.style.opacity   = '1';
    navEl.style.transform = base;
  }
  lastY = sy <= 0 ? 0 : sy;
}, { passive: true });

/* ════════════════════════════════════════
   3. SCROLL REVEAL — fade + slide up
════════════════════════════════════════ */
const ro = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      ro.unobserve(e.target);
    }
  });
}, { threshold: 0.07, rootMargin: '0px 0px -30px 0px' });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => ro.observe(el));

/* ════════════════════════════════════════
   4. SECTION LINE ACTIVATIONS
════════════════════════════════════════ */
const lineObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    const line = e.target.querySelector('.section-line');
    if (line) line.classList.toggle('active', e.isIntersecting);
  });
}, { threshold: 0.2 });
document.querySelectorAll('section[id]').forEach(s => lineObs.observe(s));

/* ════════════════════════════════════════
   5. STAGGER GRID CHILDREN
════════════════════════════════════════ */
if (!IS_REDUCED) {
  const stObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      e.target.querySelectorAll(':scope > *').forEach((child, i) => {
        setTimeout(() => {
          child.style.opacity   = '1';
          child.style.transform = 'none';
        }, i * 100);
      });
      stObs.unobserve(e.target);
    });
  }, { threshold: 0.08 });

  document.querySelectorAll('.exp-grid, .process-grid, .projects-list, .proof-strip, .skill-groups').forEach(grid => {
    grid.querySelectorAll(':scope > *').forEach(child => {
      child.style.opacity    = '0';
      child.style.transform  = 'translateY(28px)';
      child.style.transition = 'opacity .65s cubic-bezier(.22,.61,.36,1), transform .65s cubic-bezier(.22,.61,.36,1)';
    });
    stObs.observe(grid);
  });
}

/* ════════════════════════════════════════
   6. PARALLAX — hero layers + orbs
════════════════════════════════════════ */
function parallaxTick() {
  if (IS_TOUCH || IS_REDUCED) return;
  const sy = window.scrollY;

  // Only move the RIGHT side card — never touch text elements to avoid overlap
  const heroCard = document.querySelector('.code-card-wrap');
  const heroGlow = document.querySelector('.hero-glow');
  if (heroCard) heroCard.style.transform = `translateY(${sy * .07}px)`;
  if (heroGlow) heroGlow.style.transform = `translate(-50%, calc(-60% + ${sy * .12}px))`;

  // Orbs drift slowly — pure atmosphere, no layout impact
  const orb1 = document.querySelector('.orb-1');
  const orb2 = document.querySelector('.orb-2');
  const orb3 = document.querySelector('.orb-3');
  if (orb1) orb1.style.transform = `translateY(${sy * .04}px)`;
  if (orb2) orb2.style.transform = `translateY(${-sy * .03}px)`;
  if (orb3) orb3.style.transform = `translate(-50%, calc(-50% + ${sy * .025}px))`;
}
window.addEventListener('scroll', parallaxTick, { passive: true });

/* ════════════════════════════════════════
   7. 3D CARD TILT
════════════════════════════════════════ */
function initTilt(selector, cfg = {}) {
  if (IS_TOUCH || IS_REDUCED) return;
  const { tilt = 10, lift = 14, useInner = true } = cfg;

  document.querySelectorAll(selector).forEach(card => {
    let inner = null;
    if (useInner) {
      if (!card.querySelector('.tilt-inner')) {
        inner = document.createElement('div');
        inner.className = 'tilt-inner';
        while (card.firstChild) inner.appendChild(card.firstChild);
        card.appendChild(inner);
      } else {
        inner = card.querySelector('.tilt-inner');
      }
      card.style.transformStyle = 'preserve-3d';
    }
    card.style.willChange = 'transform';

    card.addEventListener('mousemove', e => {
      const r  = card.getBoundingClientRect();
      const cx = r.left + r.width  / 2;
      const cy = r.top  + r.height / 2;
      const dx = (e.clientX - cx) / (r.width  / 2);
      const dy = (e.clientY - cy) / (r.height / 2);
      const rx = -dy * tilt;
      const ry =  dx * tilt;

      card.style.transition = 'box-shadow .15s, border-color .15s';
      card.style.transform  = `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) translateZ(${lift}px)`;

      if (inner) {
        inner.style.transition = 'transform .08s linear';
        inner.style.transform  = `translateZ(${lift + 6}px) translate(${dx * -7}px, ${dy * -7}px)`;
      }

      card.style.boxShadow = `
        ${-ry * 2.5}px ${rx * 2.5}px 50px rgba(0,0,0,.55),
        0 0 50px rgba(139,92,246,${0.07 + Math.abs(dx * dy) * 0.18}),
        inset 0 1px 0 rgba(255,255,255,.07)
      `;
      card.style.borderColor = `rgba(139,92,246,${0.22 + Math.abs(dx * dy) * 0.32})`;

      const mx = ((e.clientX - r.left) / r.width  * 100).toFixed(1);
      const my = ((e.clientY - r.top)  / r.height * 100).toFixed(1);
      card.style.setProperty('--mx', mx + '%');
      card.style.setProperty('--my', my + '%');
    });

    card.addEventListener('mouseleave', () => {
      card.style.transition  = 'transform .5s cubic-bezier(.22,.61,.36,1), box-shadow .4s, border-color .35s';
      card.style.transform   = '';
      card.style.boxShadow   = '';
      card.style.borderColor = '';
      if (inner) {
        inner.style.transition = 'transform .5s cubic-bezier(.22,.61,.36,1)';
        inner.style.transform  = 'translateZ(0px) translate(0,0)';
      }
    });
  });
}

initTilt('.exp-card',         { tilt: 9,  lift: 16, useInner: true  });
initTilt('.process-card',     { tilt: 8,  lift: 12, useInner: true  });
initTilt('.skill-group-card', { tilt: 4,  lift: 7,  useInner: true  });
initTilt('.code-card',        { tilt: 5,  lift: 10, useInner: false });

// Project cards — wider, so gentler tilt
if (!IS_TOUCH && !IS_REDUCED) {
  document.querySelectorAll('.proj-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r   = card.getBoundingClientRect();
      const cx  = r.left + r.width  / 2;
      const cy  = r.top  + r.height / 2;
      const dx  = (e.clientX - cx) / (r.width  / 2);
      const dy  = (e.clientY - cy) / (r.height / 2);
      const rx  = -dy * 4;
      const ry  =  dx * 4;
      card.style.transition   = 'box-shadow .15s, border-color .15s';
      card.style.transform    = `perspective(1400px) rotateX(${rx}deg) rotateY(${ry}deg) translateZ(6px)`;
      card.style.borderColor  = `rgba(139,92,246,${0.18 + Math.abs(dx * dy) * 0.25})`;
      card.style.boxShadow    = `0 ${10 + Math.abs(rx) * 2}px 60px rgba(0,0,0,.45), 0 0 40px rgba(139,92,246,${0.05 + Math.abs(dx*dy)*.1})`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transition  = 'transform .5s cubic-bezier(.22,.61,.36,1), box-shadow .4s, border-color .35s';
      card.style.transform   = '';
      card.style.borderColor = '';
      card.style.boxShadow   = '';
    });
  });
}

/* ════════════════════════════════════════
   8. GLASS SHINE — mouse-track radial
════════════════════════════════════════ */
if (!IS_TOUCH) {
  document.querySelectorAll('.glass:not(.code-card)').forEach(el => {
    el.addEventListener('mousemove', e => {
      const r  = el.getBoundingClientRect();
      const mx = ((e.clientX - r.left) / r.width  * 100).toFixed(1);
      const my = ((e.clientY - r.top)  / r.height * 100).toFixed(1);
      el.style.background = `radial-gradient(circle at ${mx}% ${my}%, rgba(255,255,255,.075), rgba(255,255,255,.03) 55%)`;
    });
    el.addEventListener('mouseleave', () => { el.style.background = ''; });
  });
}

/* ════════════════════════════════════════
   9. MAGNETIC BUTTONS — subtle pull
════════════════════════════════════════ */
if (!IS_TOUCH && !IS_REDUCED) {
  document.querySelectorAll('.btn-purple, .btn-ghost, .nav-cta').forEach(btn => {
    btn.addEventListener('mousemove', e => {
      const r  = btn.getBoundingClientRect();
      const dx = e.clientX - (r.left + r.width  / 2);
      const dy = e.clientY - (r.top  + r.height / 2);
      btn.style.transform = `translate(${dx * 0.22}px, ${dy * 0.22}px)`;
    });
    btn.addEventListener('mouseleave', () => {
      btn.style.transition = 'transform .4s cubic-bezier(.22,.61,.36,1)';
      btn.style.transform  = '';
      setTimeout(() => { btn.style.transition = ''; }, 400);
    });
  });
}

/* ════════════════════════════════════════
   10. RIPPLE — click burst
════════════════════════════════════════ */
function addRipple(el) {
  if (el.dataset.ripple) return;
  el.dataset.ripple = '1';
  const prev = el.style.position;
  if (!prev || prev === 'static') el.style.position = 'relative';
  el.style.overflow = 'hidden';
  el.addEventListener('click', e => {
    const r    = el.getBoundingClientRect();
    const size = Math.max(r.width, r.height) * 2.4;
    const rip  = document.createElement('span');
    rip.style.cssText = `
      position:absolute;border-radius:50%;pointer-events:none;
      width:${size}px;height:${size}px;
      left:${e.clientX - r.left - size/2}px;
      top:${e.clientY  - r.top  - size/2}px;
      background:rgba(139,92,246,.22);
      transform:scale(0);
      animation:rippleAnim .65s cubic-bezier(.22,.61,.36,1) forwards;
      z-index:9;
    `;
    el.appendChild(rip);
    setTimeout(() => rip.remove(), 700);
  });
}
document.querySelectorAll('.btn-purple, .btn-ghost, .nav-cta, .cch, .about-link, .proj-gh-btn, .cpill, .anode').forEach(addRipple);

/* ════════════════════════════════════════
   11. SKILL BARS — staggered + shimmer
════════════════════════════════════════ */
const skObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.querySelectorAll('.sk-fill[data-w]').forEach((b, i) => {
      setTimeout(() => {
        b.style.width = b.dataset.w + '%';
        b.classList.add('shimmer');
        setTimeout(() => b.classList.remove('shimmer'), 2200);
      }, i * 140);
    });
    skObs.unobserve(e.target);
  });
}, { threshold: 0.25 });
document.querySelectorAll('.skill-group-card').forEach(g => skObs.observe(g));

/* ════════════════════════════════════════
   12. COUNT-UP — eased cubic
════════════════════════════════════════ */
const coObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (!e.isIntersecting) return;
    const el = e.target, target = +el.dataset.count;
    let start = null;
    const step = ts => {
      if (!start) start = ts;
      const p    = Math.min((ts - start) / 1400, 1);
      const ease = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.floor(ease * target);
      if (p < 1) requestAnimationFrame(step);
      else el.textContent = target;
    };
    requestAnimationFrame(step);
    coObs.unobserve(el);
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(el => coObs.observe(el));

/* ════════════════════════════════════════
   13. SECTION HEADINGS — word cascade
════════════════════════════════════════ */
if (!IS_REDUCED) {
  document.querySelectorAll('.section-heading').forEach(h => {
    if (h.dataset.split) return;
    h.dataset.split = '1';

    const walker = document.createTreeWalker(h, NodeFilter.SHOW_TEXT);
    const nodes  = [];
    let node;
    while ((node = walker.nextNode())) nodes.push(node);

    nodes.forEach(tn => {
      const words = tn.textContent.split(/(\s+)/);
      const frag  = document.createDocumentFragment();
      let   wi    = 0;
      words.forEach(w => {
        if (/^\s+$/.test(w)) {
          frag.appendChild(document.createTextNode(w));
        } else {
          const span = document.createElement('span');
          span.style.cssText = `display:inline-block;opacity:0;transform:translateY(16px);transition:opacity .5s ${wi * 55}ms ease,transform .5s ${wi * 55}ms cubic-bezier(.22,.61,.36,1)`;
          span.textContent = w;
          frag.appendChild(span);
          wi++;
        }
      });
      tn.parentNode.replaceChild(frag, tn);
    });

    const wObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        e.target.querySelectorAll('span').forEach(s => {
          s.style.opacity   = '1';
          s.style.transform = 'none';
        });
        wObs.unobserve(e.target);
      });
    }, { threshold: 0.4 });
    wObs.observe(h);
  });
}

/* ════════════════════════════════════════
   14. HERO NAME — glow on load
════════════════════════════════════════ */
const heroName = document.querySelector('.hero-title .line-grad');
if (heroName && !IS_REDUCED) {
  setTimeout(() => {
    heroName.style.transition = 'filter .6s ease';
    heroName.style.filter     = 'drop-shadow(0 0 40px rgba(139,92,246,.85))';
    setTimeout(() => {
      heroName.style.filter = 'drop-shadow(0 0 16px rgba(139,92,246,.35))';
    }, 1100);
  }, 700);
}

/* ════════════════════════════════════════
   15. TICKER — pause on hover
════════════════════════════════════════ */
const tickerEl = document.getElementById('ticker');
if (tickerEl) {
  const track = tickerEl.querySelector('.ticker-track');
  tickerEl.addEventListener('mouseenter', () => { if (track) track.style.animationPlayState = 'paused'; });
  tickerEl.addEventListener('mouseleave', () => { if (track) track.style.animationPlayState = 'running'; });
}

/* ════════════════════════════════════════
   17. CONTACT CHANNELS — icon glow
════════════════════════════════════════ */
document.querySelectorAll('.cch').forEach(ch => {
  const icon = ch.querySelector('.cch-icon');
  ch.addEventListener('mouseenter', () => {
    if (icon) { icon.style.background = 'rgba(139,92,246,.28)'; icon.style.borderColor = 'rgba(139,92,246,.4)'; }
  });
  ch.addEventListener('mouseleave', () => {
    if (icon) { icon.style.background = ''; icon.style.borderColor = ''; }
  });
});

/* ════════════════════════════════════════
   18. TIMELINE DOTS — stagger pulse
════════════════════════════════════════ */
const tlObs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (!e.isIntersecting) return;
    e.target.querySelectorAll('.tl-dot').forEach((dot, i) => {
      setTimeout(() => {
        dot.style.transition = 'transform .3s ease, box-shadow .3s ease';
        dot.style.transform  = 'scale(1.6)';
        setTimeout(() => { dot.style.transform = ''; }, 320);
      }, i * 220);
    });
    tlObs.unobserve(e.target);
  });
}, { threshold: 0.3 });
document.querySelectorAll('.timeline').forEach(tl => tlObs.observe(tl));

/* ════════════════════════════════════════
   19. TAG HOVER — glow pop
════════════════════════════════════════ */
document.querySelectorAll('.stag, .ptag').forEach(tag => {
  tag.addEventListener('mouseenter', () => { tag.style.boxShadow = '0 0 16px rgba(139,92,246,.38)'; });
  tag.addEventListener('mouseleave', () => { tag.style.boxShadow = ''; });
});

/* ════════════════════════════════════════
   20. SCROLL-DRIVEN ORB COLOR
════════════════════════════════════════ */
if (!IS_REDUCED) {
  const sections   = [...document.querySelectorAll('section[id]')];
  const orbPalette = [
    [109,40,217],[99,102,241],[139,92,246],
    [76,29,149],[109,40,217],[124,58,237],
    [79,70,229],[139,92,246],[109,40,217],[124,58,237],
  ];
  const colorObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const idx   = sections.indexOf(e.target);
      const c     = orbPalette[idx] || orbPalette[0];
      const orb1  = document.querySelector('.orb-1');
      if (orb1) {
        orb1.style.transition = 'background 1.6s ease';
        orb1.style.background = `radial-gradient(circle,rgba(${c[0]},${c[1]},${c[2]},.24),transparent 70%)`;
      }
    });
  }, { threshold: 0.4 });
  sections.forEach(s => colorObs.observe(s));
}

/* ════════════════════════════════════════
   21. CASE STUDY TOGGLE
════════════════════════════════════════ */
function toggleCase(btn) {
  const card = btn.closest('.proj-card');
  const cs   = card?.querySelector('.proj-case');
  if (!cs) return;
  const open = cs.classList.toggle('open');
  btn.textContent = open ? 'Case study ▴' : 'Case study ▾';
}

/* ════════════════════════════════════════
   22. TERMINAL
════════════════════════════════════════ */
const termOut = document.getElementById('term-out');
const termIn  = document.getElementById('term-in');
const CMDS = {
  help:       () => `<span class="tc">Commands:</span> <span class="tp">whois · skills · projects · contact · laravel · php · mysql · philosophy · process · clear</span>`,
  whois:      () => `<span class="tw">Haider Al-Haj Ahmed</span> <span class="td">—</span> Backend Engineer & Laravel Specialist<br><span class="td">Student @ Homs University · Former translator turned systems architect</span>`,
  skills:     () => `<span class="tc">Core:</span> <span class="tp">Laravel 95% · PHP 90% · REST APIs 88% · Livewire 82% · MySQL 80%</span><br><span class="tc">Principles:</span> SOLID · OOP · MVC · Clean Code · SoC · DRY`,
  projects:   () => `<span class="tp">01</span> TechTalk API       <span class="td">→</span> Social platform · OTP auth · feed algorithm<br><span class="tp">02</span> WorkNetSYR API     <span class="td">→</span> Job market · Forsa mobile app backbone<br><span class="tp">03</span> Dental Clinic API  <span class="td">→</span> ~60 endpoints · charting · billing · queues<br><span class="tp">04</span> Syriana Platform   <span class="td">→</span> Laravel + Livewire tourism full-stack`,
  contact:    () => `<span class="tc">Email:</span>    <span class="tp">haideralhajahmed2@gmail.com</span><br><span class="tc">GitHub:</span>   <span class="tp">github.com/Haider-Haj-Ahmed</span><br><span class="tc">Telegram:</span> <span class="tp">@haider_cz</span><br><span class="tc">WhatsApp:</span> <span class="tp">+963 932 938 041</span>`,
  laravel:    () => `<span class="tp">Laravel</span> — PHP's most elegant framework.<br>Routing, Eloquent ORM, Sanctum auth, Queues, Horizon, Events.<br>Used from v8 through v13 in production systems.`,
  php:        () => `<span class="tp">PHP 8+</span> — Typed properties, enums, fibers, match, readonly.<br>Modern OOP throughout. No cowboy code.`,
  mysql:      () => `<span class="tp">MySQL</span> — Schema design, normalized tables, index strategy, pessimistic locking.<br>Eloquent ORM on top, raw queries when precision demands it.`,
  philosophy: () => `<span class="tc">1.</span> An API is a contract, not a convenience.<br><span class="tc">2.</span> Business logic in the domain, not the controller.<br><span class="tc">3.</span> The database is not a detail — it's the foundation.<br><span class="tc">4.</span> Security is a first-class feature.<br><span class="tc">5.</span> Code you can read is code you can maintain.`,
  process:    () => `<span class="tp">01 DISCOVER</span> <span class="td">→</span> Understand the domain before touching code<br><span class="tp">02 DESIGN</span>   <span class="td">→</span> API contract before implementation<br><span class="tp">03 BUILD</span>    <span class="td">→</span> Vertical slices, always shippable<br><span class="tp">04 HARDEN</span>  <span class="td">→</span> Validation, auth, throttling, docs`,
  clear: null,
};
function addLine(html) {
  const p = document.createElement('p');
  p.innerHTML = html;
  termOut.appendChild(p);
  termOut.parentElement.scrollTop = termOut.parentElement.scrollHeight;
}
function runCmd(cmd) {
  addLine(`<span class="tg">❯</span> <span class="tw">${cmd}</span>`);
  if (cmd === 'clear') { termOut.innerHTML = ''; return; }
  const fn = CMDS[cmd];
  if (fn) addLine(fn());
  else addLine(`<span class="tr">command not found: ${cmd}</span> — type <span class="tp">help</span>`);
}
termIn.addEventListener('keydown', e => {
  if (e.key !== 'Enter') return;
  const cmd = termIn.value.trim().toLowerCase();
  termIn.value = '';
  if (cmd) runCmd(cmd);
});

/* ════════════════════════════════════════
   23. RESIZE HANDLER
════════════════════════════════════════ */
window.addEventListener('resize', () => {
  navEl.style.transform = isMobile() ? '' : 'translateX(-50%)';
}, { passive: true });

</script>
</body>
</html>