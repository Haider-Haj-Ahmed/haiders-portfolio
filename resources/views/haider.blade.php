<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev. Haider Al-Haj Ahmed | Backend Architect</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root {
            --c: #00f0ff;
            --v: #bd00ff;
            --bg: #030308;
            --glass: rgba(255, 255, 255, 0.04);
            --glass2: rgba(255, 255, 255, 0.08);
            --border: rgba(255, 255, 255, 0.08);
            --border2: rgba(0, 240, 255, 0.3);
            --text: #e2e8f0;
            --muted: #64748b;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            cursor: none;
            -webkit-tap-highlight-color: transparent;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Custom cursor */
        #cursor {
            position: fixed;
            width: 12px;
            height: 12px;
            background: var(--c);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width .2s, height .2s;
            mix-blend-mode: screen;
        }
        #cursor-ring {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 1px solid rgba(0, 240, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: width .3s, height .3s, border-color .3s;
            mix-blend-mode: screen;
        }
        @media (pointer: coarse) {
            #cursor,
            #cursor-ring {
                display: none;
            }
            body {
                cursor: auto;
            }
            .btn-primary,
            .btn-ghost,
            .hex-card,
            .proj-card,
            .stat-card,
            .phi-card,
            .c-link,
            button,
            a,
            .case-btn,
            #term-in {
                cursor: pointer;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 4px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--c), var(--v));
            border-radius: 4px;
        }

        /* Sections */
        section {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 40px;
        }

        /* CANVAS */
        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: rgba(3, 3, 8, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 50px;
            transition: all .4s;
            white-space: nowrap;
            max-width: 95vw;
        }
        nav a {
            color: var(--muted);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 6px 14px;
            border-radius: 50px;
            transition: all .3s;
            flex-shrink: 0;
        }
        nav a:hover,
        nav a.active {
            color: var(--c);
            background: rgba(0, 240, 255, 0.08);
        }
        nav .brand {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            color: var(--c);
            margin-right: 8px;
            flex-shrink: 0;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Progress bar */
        #progress {
            position: fixed;
            left: 0;
            top: 0;
            width: 3px;
            height: 100%;
            z-index: 200;
            background: rgba(255, 255, 255, 0.05);
            pointer-events: none;
        }
        #progress-fill {
            width: 100%;
            height: 0%;
            background: linear-gradient(180deg, var(--c), var(--v));
            transition: height .1s;
            border-radius: 0 0 3px 3px;
            box-shadow: 0 0 10px var(--c);
        }

        /* Content layer */
        .layer {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Glass card */
        .glass {
            background: var(--glass);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 40px;
        }

        /* ─── HERO ─── */
        #hero {
            padding: 0;
            overflow: hidden;
        }
        .hero-inner {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
            padding: 0 40px;
            min-height: 100vh;
        }
        .hero-left {
            display: flex;
            flex-direction: column;
            gap: 0;
        }
        .hero-eyebrow {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: var(--c);
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeUp .8s .2s forwards;
        }
        .hero-title {
            font-size: clamp(44px, 6vw, 80px);
            font-weight: 900;
            line-height: 1.05;
            letter-spacing: -3px;
            margin-bottom: 24px;
            opacity: 0;
            animation: fadeUp .8s .4s forwards;
        }
        .hero-title .line1 {
            display: block;
            background: linear-gradient(135deg, #fff 0%, rgba(255, 255, 255, 0.75) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-title .line2 {
            display: block;
            background: linear-gradient(135deg, var(--c), var(--v));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 0 30px rgba(0, 240, 255, 0.4));
        }
        .hero-sub {
            font-size: 16px;
            color: var(--muted);
            max-width: 440px;
            margin-bottom: 40px;
            line-height: 1.7;
            opacity: 0;
            animation: fadeUp .8s .6s forwards;
        }
        .hero-btns {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeUp .8s .8s forwards;
        }
        .btn-primary {
            padding: 14px 32px;
            background: linear-gradient(135deg, var(--c), var(--v));
            border: none;
            border-radius: 50px;
            color: #000;
            font-weight: 700;
            font-size: 14px;
            cursor: none;
            letter-spacing: .5px;
            transition: all .3s;
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.3);
            white-space: nowrap;
        }
        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 0 50px rgba(0, 240, 255, 0.5);
        }
        .btn-ghost {
            padding: 14px 32px;
            background: transparent;
            border: 1px solid var(--border2);
            border-radius: 50px;
            color: var(--c);
            font-weight: 600;
            font-size: 14px;
            cursor: none;
            letter-spacing: .5px;
            transition: all .3s;
            white-space: nowrap;
        }
        .btn-ghost:hover {
            background: rgba(0, 240, 255, 0.08);
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.2);
        }

        /* Hero photo */
        .hero-right {
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: fadeUp .8s .5s forwards;
        }
        .photo-wrap {
            position: relative;
            width: 360px;
            height: 360px;
            flex-shrink: 0;
        }
        .photo-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 50%;
            display: block;
            position: relative;
            z-index: 2;
        }
        .photo-ring {
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--c), var(--v), var(--c));
            z-index: 1;
            animation: spinRing 6s linear infinite;
        }
        .photo-inner {
            position: absolute;
            inset: 4px;
            border-radius: 50%;
            overflow: hidden;
            z-index: 2;
            background: var(--bg);
        }
        .photo-glow-c {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(0, 240, 255, 0.2);
            filter: blur(50px);
            bottom: -40px;
            left: -40px;
            z-index: 0;
            animation: drift 8s ease-in-out infinite;
        }
        .photo-glow-v {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: rgba(189, 0, 255, 0.15);
            filter: blur(50px);
            top: -30px;
            right: -30px;
            z-index: 0;
            animation: drift 10s ease-in-out infinite reverse;
        }
        .photo-badge {
            position: absolute;
            z-index: 5;
            background: rgba(3, 3, 8, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--border2);
            border-radius: 12px;
            padding: 8px 14px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--c);
            white-space: nowrap;
            animation: floatBadge 4s ease-in-out infinite;
            pointer-events: none;
        }
        .badge-laravel {
            bottom: -16px;
            right: -20px;
            animation-delay: 0s;
        }
        .badge-api {
            top: 20px;
            right: -36px;
            animation-delay: -2s;
            border-color: rgba(189, 0, 255, 0.4);
            color: var(--v);
        }
        .badge-php {
            bottom: 40px;
            left: -36px;
            animation-delay: -1s;
        }
        .badge-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: currentColor;
            display: inline-block;
            margin-right: 6px;
            animation: pulse-dot 1.5s infinite;
        }

        .scroll-hint {
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            opacity: .4;
            animation: bounce 2s infinite;
            z-index: 10;
        }
        .scroll-hint span {
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-family: 'JetBrains Mono', monospace;
        }
        .scroll-arrow {
            width: 1px;
            height: 40px;
            background: linear-gradient(180deg, var(--c), transparent);
            margin: 0 auto;
        }

        /* Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
            animation: drift 15s ease-in-out infinite;
        }
        .orb1 {
            width: 500px;
            height: 500px;
            background: rgba(0, 240, 255, 0.07);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }
        .orb2 {
            width: 400px;
            height: 400px;
            background: rgba(189, 0, 255, 0.06);
            bottom: -100px;
            left: -100px;
            animation-delay: -7s;
        }

        /* ─── ABOUT ─── */
        #about {
            background: transparent;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }
        .about-tag {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            color: var(--c);
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }
        .about-title {
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            letter-spacing: -2px;
            margin-bottom: 24px;
            line-height: 1.1;
        }
        .about-body {
            color: var(--muted);
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 14px;
        }
        .about-body strong {
            color: var(--text);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 28px;
        }
        .stat-card {
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 18px;
            text-align: center;
            transition: all .3s;
        }
        .stat-card:hover {
            border-color: var(--border2);
            transform: translateY(-4px);
        }
        .stat-num {
            font-size: 32px;
            font-weight: 900;
            background: linear-gradient(135deg, var(--c), var(--v));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: 'JetBrains Mono', monospace;
        }
        .stat-label {
            font-size: 11px;
            color: var(--muted);
            margin-top: 4px;
            letter-spacing: .5px;
        }
        .timeline {
            position: relative;
            padding-left: 24px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 1px;
            background: linear-gradient(180deg, var(--c), var(--v), transparent);
        }
        .tl-item {
            position: relative;
            margin-bottom: 28px;
        }
        .tl-dot {
            position: absolute;
            left: -28px;
            top: 4px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--c);
            box-shadow: 0 0 15px var(--c);
        }
        .tl-year {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--c);
            letter-spacing: 2px;
            margin-bottom: 4px;
        }
        .tl-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 4px;
        }
        .tl-desc {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.5;
        }

        /* ─── ARSENAL ─── */
        #arsenal {
            background: transparent;
        }
        .section-header {
            text-align: center;
            margin-bottom: 56px;
        }
        .section-tag {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            color: var(--c);
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .section-title {
            font-size: clamp(28px, 4vw, 52px);
            font-weight: 800;
            letter-spacing: -2px;
            line-height: 1.1;
        }
        .hex-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
        }
        .hex-card {
            position: relative;
            width: 155px;
            padding: 22px 14px;
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 20px;
            text-align: center;
            cursor: none;
            transition: all .4s;
            overflow: hidden;
        }
        .hex-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 0%, rgba(0, 240, 255, 0.1), transparent 70%);
            opacity: 0;
            transition: .4s;
        }
        .hex-card:hover::before {
            opacity: 1;
        }
        .hex-card:hover {
            border-color: var(--border2);
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 20px 60px rgba(0, 240, 255, 0.15);
        }
        .hex-icon {
            font-size: 36px;
            margin-bottom: 10px;
            display: block;
        }
        .hex-name {
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 8px;
        }
        .hex-bar {
            width: 100%;
            height: 3px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 5px;
        }
        .hex-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--c), var(--v));
            border-radius: 3px;
            width: 0;
            transition: width 1.5s cubic-bezier(.22, .61, .36, 1);
        }
        .hex-pct {
            font-size: 11px;
            color: var(--c);
            font-family: 'JetBrains Mono', monospace;
        }
        .hex-desc {
            font-size: 11px;
            color: var(--muted);
            margin-top: 6px;
            line-height: 1.4;
        }
        .hex-glow {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--c);
            opacity: 0;
            filter: blur(25px);
            transition: .4s;
        }
        .hex-card:hover .hex-glow {
            opacity: .15;
        }

        /* ─── PROJECTS ─── */
        #projects {
            background: transparent;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }
        .proj-card {
            position: relative;
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 32px;
            cursor: none;
            transition: all .4s;
            overflow: hidden;
        }
        .proj-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at var(--mx, 50%) var(--my, 50%), rgba(0, 240, 255, 0.06), transparent 60%);
            opacity: 0;
            transition: .3s;
            pointer-events: none;
        }
        .proj-card:hover::after {
            opacity: 1;
        }
        .proj-card:hover {
            border-color: rgba(0, 240, 255, 0.25);
            transform: translateY(-6px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
        }
        .proj-num {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--muted);
            letter-spacing: 2px;
            margin-bottom: 12px;
        }
        .proj-title {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 8px;
            letter-spacing: -.5px;
            word-break: break-word;
        }
        .proj-desc {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .proj-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }
        .tag {
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 600;
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: .5px;
            white-space: nowrap;
        }
        .tag-c {
            background: rgba(0, 240, 255, 0.1);
            color: var(--c);
            border: 1px solid rgba(0, 240, 255, 0.2);
        }
        .tag-v {
            background: rgba(189, 0, 255, 0.1);
            color: var(--v);
            border: 1px solid rgba(189, 0, 255, 0.2);
        }
        .tag-g {
            background: rgba(255, 255, 255, 0.05);
            color: var(--muted);
            border: 1px solid var(--border);
        }
        .proj-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }
        .proj-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--c);
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
            flex-shrink: 0;
        }
        .proj-link:hover {
            gap: 10px;
        }
        .proj-link svg {
            width: 16px;
            height: 16px;
        }
        .case-btn {
            background: none;
            border: none;
            color: var(--muted);
            font-size: 12px;
            cursor: none;
            font-family: 'JetBrains Mono', monospace;
            transition: .3s;
            letter-spacing: .5px;
            flex-shrink: 0;
        }
        .case-btn:hover {
            color: var(--c);
        }
        .case-study {
            max-height: 0;
            overflow: hidden;
            transition: max-height .6s cubic-bezier(.22, .61, .36, 1);
        }
        .case-study.open {
            max-height: 300px;
        }
        .case-body {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
            display: grid;
            gap: 12px;
        }
        .case-row h4 {
            font-size: 11px;
            color: var(--c);
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 1px;
            margin-bottom: 4px;
            text-transform: uppercase;
        }
        .case-row p {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.6;
        }
        .proj-accent {
            position: absolute;
            top: 0;
            left: 32px;
            right: 32px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--c), transparent);
            opacity: .6;
        }
        .proj-card:nth-child(2) .proj-accent {
            background: linear-gradient(90deg, transparent, var(--v), transparent);
        }

        /* ─── PHILOSOPHY ─── */
        #philosophy {
            background: transparent;
        }
        .phi-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }
        .phi-card {
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 26px;
            transition: all .4s;
            position: relative;
            overflow: hidden;
        }
        .phi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, var(--c), var(--v));
            opacity: 0;
            transition: .4s;
        }
        .phi-card:hover {
            border-color: rgba(0, 240, 255, 0.2);
            transform: translateX(6px);
        }
        .phi-card:hover::before {
            opacity: 1;
        }
        .phi-icon {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .phi-title {
            font-weight: 700;
            font-size: 15px;
            margin-bottom: 6px;
        }
        .phi-desc {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }
        .arch-flow {
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 28px;
            text-align: center;
            overflow-x: auto;
        }
        .arch-label {
            font-size: 11px;
            color: var(--muted);
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 2px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .arch-nodes {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            flex-wrap: wrap;
            row-gap: 10px;
            min-width: fit-content;
        }
        .arch-node {
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 12px;
            font-family: 'JetBrains Mono', monospace;
            font-weight: 600;
            transition: .3s;
            white-space: nowrap;
        }
        .arch-node:hover {
            transform: scale(1.06);
        }
        .arch-node.c {
            background: rgba(0, 240, 255, 0.1);
            border: 1px solid rgba(0, 240, 255, 0.3);
            color: var(--c);
        }
        .arch-node.v {
            background: rgba(189, 0, 255, 0.1);
            border: 1px solid rgba(189, 0, 255, 0.3);
            color: var(--v);
        }
        .arch-arrow {
            margin: 0 8px;
            color: var(--muted);
            font-size: 16px;
        }

        /* ─── TERMINAL ─── */
        #terminal-section {
            background: transparent;
            min-height: auto;
            padding: 80px 40px;
        }
        .terminal {
            background: #0a0a0f;
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
            max-width: 700px;
            width: 100%;
        }
        .term-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 20px;
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--border);
        }
        .term-dots {
            display: flex;
            gap: 6px;
        }
        .term-dots span {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        .term-dots span:nth-child(1) {
            background: #ff5f57;
        }
        .term-dots span:nth-child(2) {
            background: #febc2e;
        }
        .term-dots span:nth-child(3) {
            background: #28c840;
        }
        .term-title {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            color: var(--muted);
            margin-left: 8px;
        }
        .term-body {
            padding: 22px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            min-height: 240px;
            max-height: 320px;
            overflow-y: auto;
        }
        #term-out {
            margin-bottom: 12px;
            line-height: 2;
            word-break: break-word;
        }
        #term-out p {
            animation: termLine .15s ease-out;
        }
        .term-prompt {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .term-caret {
            color: var(--c);
        }
        #term-in {
            background: none;
            border: none;
            outline: none;
            color: #fff;
            font-family: 'JetBrains Mono', monospace;
            font-size: 16px;
            flex: 1;
            caret-color: var(--c);
            min-width: 60px;
        }
        #term-in::placeholder {
            color: var(--muted);
            opacity: .6;
        }

        /* ─── CONTACT ─── */
        #contact {
            background: transparent;
            min-height: auto;
            padding: 80px 40px;
        }
        .contact-title {
            font-size: clamp(32px, 5vw, 64px);
            font-weight: 900;
            letter-spacing: -3px;
            margin-bottom: 16px;
            text-align: center;
        }
        .contact-sub {
            color: var(--muted);
            font-size: 16px;
            text-align: center;
            margin-bottom: 48px;
        }
        .contact-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
        }
        .c-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 22px;
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 14px;
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            cursor: none;
            transition: all .3s;
            white-space: nowrap;
        }
        .c-link:hover {
            transform: translateY(-4px);
            border-color: var(--border2);
            background: rgba(0, 240, 255, 0.06);
            color: var(--c);
            box-shadow: 0 10px 40px rgba(0, 240, 255, 0.15);
        }
        .c-link svg {
            width: 18px;
            height: 18px;
            opacity: .7;
        }
        .c-link:hover svg {
            opacity: 1;
        }
        .footer-note {
            text-align: center;
            margin-top: 50px;
            font-size: 12px;
            color: var(--muted);
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 1px;
        }

        /* ─── ANIMATIONS ─── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes bounce {
            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }
            50% {
                transform: translateX(-50%) translateY(8px);
            }
        }
        @keyframes drift {
            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -20px) scale(1.05);
            }
            66% {
                transform: translate(-20px, 30px) scale(.95);
            }
        }
        @keyframes termLine {
            from {
                opacity: 0;
                transform: translateX(-8px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes spinRing {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        @keyframes floatBadge {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }
        @keyframes pulse-dot {
            0%,
            100% {
                opacity: 1;
            }
            50% {
                opacity: .3;
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity .8s cubic-bezier(.22, .61, .36, 1), transform .8s cubic-bezier(.22, .61, .36, 1);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-d1 {
            transition-delay: .1s;
        }
        .reveal-d2 {
            transition-delay: .2s;
        }
        .reveal-d3 {
            transition-delay: .3s;
        }
        .reveal-d4 {
            transition-delay: .4s;
        }

        /* ══════════════════════════════════════
               RESPONSIVE DESIGN
           ══════════════════════════════════════ */

        /* ── Tablet (769px – 1024px) ── */
        @media (min-width: 769px) and (max-width: 1024px) {
            .hero-inner {
                gap: 40px;
            }
            .photo-wrap {
                width: 280px;
                height: 280px;
            }
            .photo-glow-c {
                width: 150px;
                height: 150px;
                bottom: -30px;
                left: -30px;
            }
            .photo-glow-v {
                width: 130px;
                height: 130px;
                top: -20px;
                right: -20px;
            }
            .badge-laravel {
                bottom: -14px;
                right: -16px;
                font-size: 10px;
                padding: 6px 10px;
            }
            .badge-api {
                top: 14px;
                right: -28px;
                font-size: 10px;
                padding: 6px 10px;
            }
            .badge-php {
                bottom: 32px;
                left: -28px;
                font-size: 10px;
                padding: 6px 10px;
            }
            .hex-card {
                width: 140px;
                padding: 18px 10px;
            }
            .hex-icon {
                font-size: 30px;
            }
            .hex-name {
                font-size: 12px;
            }
            .about-grid {
                gap: 30px;
            }
            .projects-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        /* ── Large Phones / Phone Landscape (481px – 768px) ── */
        @media (max-width: 768px) {
            section {
                padding: 90px 20px 60px;
            }
            #terminal-section,
            #contact {
                padding: 60px 20px;
            }

            /* Nav — compact scrollable */
            nav {
                left: 10px;
                right: 10px;
                transform: none;
                justify-content: flex-start;
                padding: 8px 12px;
                gap: 4px;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                border-radius: 40px;
            }
            nav::-webkit-scrollbar {
                display: none;
            }
            nav a {
                font-size: 11px;
                padding: 5px 10px;
            }
            nav .brand {
                font-size: 11px;
                margin-right: 4px;
                padding: 5px 10px;
            }

            /* Hero stacks vertically — photo on top */
            .hero-inner {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 0 20px;
                padding-top: 90px;
                text-align: center;
                min-height: 100vh;
            }
            .hero-left {
                order: 2;
                align-items: center;
            }
            .hero-right {
                order: 1;
            }
            .hero-title {
                font-size: clamp(36px, 10vw, 56px);
                letter-spacing: -2px;
            }
            .hero-sub {
                font-size: 15px;
                text-align: center;
                max-width: 100%;
            }
            .hero-btns {
                justify-content: center;
            }
            .btn-primary,
            .btn-ghost {
                padding: 12px 24px;
                font-size: 13px;
            }

            /* Photo sizing */
            .photo-wrap {
                width: 220px;
                height: 220px;
            }
            .photo-glow-c {
                width: 120px;
                height: 120px;
                bottom: -20px;
                left: -20px;
                filter: blur(40px);
            }
            .photo-glow-v {
                width: 100px;
                height: 100px;
                top: -16px;
                right: -16px;
                filter: blur(40px);
            }
            .badge-laravel {
                bottom: -10px;
                right: -12px;
                font-size: 9px;
                padding: 5px 8px;
                border-radius: 10px;
            }
            .badge-api {
                top: 8px;
                right: -22px;
                font-size: 9px;
                padding: 5px 8px;
                border-radius: 10px;
            }
            .badge-php {
                bottom: 22px;
                left: -18px;
                font-size: 9px;
                padding: 5px 8px;
                border-radius: 10px;
            }
            .badge-dot {
                width: 5px;
                height: 5px;
                margin-right: 4px;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
            }
            .stat-card {
                padding: 14px 8px;
            }
            .stat-num {
                font-size: 26px;
            }
            .stat-label {
                font-size: 10px;
            }
            .phi-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            .arch-nodes {
                gap: 4px;
            }
            .arch-node {
                padding: 8px 10px;
                font-size: 10px;
            }
            .arch-arrow {
                margin: 0 4px;
                font-size: 14px;
            }
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .proj-card {
                padding: 24px 20px;
            }
            .proj-accent {
                left: 20px;
                right: 20px;
            }
            .hex-grid {
                gap: 14px;
            }
            .hex-card {
                width: 130px;
                padding: 16px 8px;
                border-radius: 16px;
            }
            .hex-icon {
                font-size: 28px;
            }
            .hex-name {
                font-size: 11px;
            }
            .hex-pct {
                font-size: 10px;
            }
            .hex-desc {
                font-size: 10px;
            }
            .glass {
                padding: 24px 20px;
            }
            .timeline {
                padding-left: 20px;
            }
            .tl-dot {
                left: -24px;
                width: 8px;
                height: 8px;
            }
            .tl-item {
                margin-bottom: 22px;
            }
            .section-header {
                margin-bottom: 36px;
            }
            .contact-links {
                gap: 10px;
            }
            .c-link {
                padding: 11px 16px;
                font-size: 13px;
                border-radius: 12px;
            }
            .c-link svg {
                width: 16px;
                height: 16px;
            }
            .terminal {
                border-radius: 16px;
            }
            .term-body {
                padding: 16px;
                font-size: 12px;
                min-height: 200px;
                max-height: 260px;
            }
            #term-in {
                font-size: 16px;
            }
            .scroll-hint {
                bottom: 20px;
            }
            .scroll-arrow {
                height: 30px;
            }
            .orb1 {
                width: 300px;
                height: 300px;
                top: -60px;
                right: -60px;
            }
            .orb2 {
                width: 250px;
                height: 250px;
                bottom: -60px;
                left: -60px;
            }
        }

        /* ── Small Phones / 6.5-inch screens (320px – 480px) ── */
        @media (max-width: 480px) {
            section {
                padding: 80px 14px 50px;
            }
            #terminal-section,
            #contact {
                padding: 50px 14px;
            }

            nav {
                left: 6px;
                right: 6px;
                top: 12px;
                padding: 7px 10px;
                gap: 2px;
                border-radius: 36px;
            }
            nav a {
                font-size: 10px;
                padding: 4px 7px;
            }
            nav .brand {
                font-size: 10px;
                padding: 4px 7px;
                margin-right: 2px;
            }

            .hero-inner {
                padding: 0 10px;
                padding-top: 80px;
                gap: 30px;
                min-height: 100vh;
            }
            .hero-eyebrow {
                font-size: 10px;
                letter-spacing: 2px;
                margin-bottom: 14px;
            }
            .hero-title {
                font-size: clamp(30px, 11vw, 42px);
                letter-spacing: -1.5px;
                margin-bottom: 16px;
            }
            .hero-sub {
                font-size: 13px;
                margin-bottom: 28px;
                line-height: 1.6;
            }
            .hero-btns {
                gap: 10px;
            }
            .btn-primary,
            .btn-ghost {
                padding: 10px 18px;
                font-size: 12px;
                border-radius: 40px;
            }

            /* Photo — smaller for 6.5" screens (~390–430px) */
            .photo-wrap {
                width: 170px;
                height: 170px;
            }
            .photo-ring {
                inset: -3px;
            }
            .photo-inner {
                inset: 3px;
            }
            .photo-glow-c {
                width: 80px;
                height: 80px;
                bottom: -14px;
                left: -14px;
                filter: blur(30px);
            }
            .photo-glow-v {
                width: 70px;
                height: 70px;
                top: -10px;
                right: -10px;
                filter: blur(30px);
            }
            .badge-laravel {
                bottom: -8px;
                right: -8px;
                font-size: 8px;
                padding: 4px 6px;
                border-radius: 8px;
            }
            .badge-api {
                top: 4px;
                right: -16px;
                font-size: 8px;
                padding: 4px 6px;
                border-radius: 8px;
            }
            .badge-php {
                bottom: 16px;
                left: -14px;
                font-size: 8px;
                padding: 4px 6px;
                border-radius: 8px;
            }
            .badge-dot {
                width: 4px;
                height: 4px;
                margin-right: 3px;
            }

            .about-title {
                font-size: 24px;
                letter-spacing: -1px;
            }
            .about-body {
                font-size: 13px;
                line-height: 1.7;
            }
            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 6px;
            }
            .stat-card {
                padding: 12px 6px;
                border-radius: 12px;
            }
            .stat-num {
                font-size: 22px;
            }
            .stat-label {
                font-size: 9px;
                letter-spacing: .3px;
            }
            .glass {
                padding: 20px 16px;
                border-radius: 18px;
            }
            .timeline {
                padding-left: 16px;
            }
            .tl-dot {
                left: -19px;
                width: 7px;
                height: 7px;
            }
            .tl-year {
                font-size: 10px;
            }
            .tl-title {
                font-size: 13px;
            }
            .tl-desc {
                font-size: 11px;
            }
            .tl-item {
                margin-bottom: 18px;
            }

            .section-header {
                margin-bottom: 28px;
            }
            .section-tag {
                font-size: 10px;
                letter-spacing: 2px;
            }
            .section-title {
                font-size: 24px;
                letter-spacing: -1px;
            }

            /* Hex grid — 2 per row */
            .hex-grid {
                gap: 10px;
            }
            .hex-card {
                width: calc(50% - 8px);
                max-width: 150px;
                min-width: 120px;
                padding: 14px 6px;
                border-radius: 14px;
            }
            .hex-icon {
                font-size: 24px;
                margin-bottom: 6px;
            }
            .hex-name {
                font-size: 10px;
                margin-bottom: 6px;
            }
            .hex-bar {
                height: 2px;
                margin-bottom: 4px;
            }
            .hex-pct {
                font-size: 9px;
            }
            .hex-desc {
                font-size: 9px;
                margin-top: 4px;
            }

            .projects-grid {
                gap: 16px;
            }
            .proj-card {
                padding: 20px 16px;
                border-radius: 18px;
            }
            .proj-accent {
                left: 16px;
                right: 16px;
            }
            .proj-title {
                font-size: 17px;
            }
            .proj-desc {
                font-size: 12px;
                line-height: 1.5;
            }
            .proj-tags {
                gap: 5px;
            }
            .tag {
                font-size: 9px;
                padding: 3px 8px;
            }
            .proj-footer {
                gap: 8px;
            }
            .proj-link {
                font-size: 11px;
                gap: 4px;
            }
            .proj-link svg {
                width: 14px;
                height: 14px;
            }
            .case-btn {
                font-size: 10px;
            }

            .phi-card {
                padding: 18px 14px;
                border-radius: 16px;
            }
            .phi-icon {
                font-size: 22px;
            }
            .phi-title {
                font-size: 13px;
            }
            .phi-desc {
                font-size: 11px;
                line-height: 1.5;
            }

            .arch-flow {
                padding: 18px 12px;
                border-radius: 16px;
            }
            .arch-label {
                font-size: 10px;
                letter-spacing: 1px;
                margin-bottom: 14px;
            }
            .arch-nodes {
                gap: 2px;
                row-gap: 6px;
            }
            .arch-node {
                padding: 6px 8px;
                font-size: 9px;
                border-radius: 8px;
            }
            .arch-arrow {
                margin: 0 2px;
                font-size: 12px;
            }

            .terminal {
                border-radius: 14px;
            }
            .term-header {
                padding: 10px 14px;
                gap: 8px;
            }
            .term-dots span {
                width: 10px;
                height: 10px;
            }
            .term-dots {
                gap: 4px;
            }
            .term-title {
                font-size: 10px;
            }
            .term-body {
                padding: 14px;
                font-size: 11px;
                min-height: 180px;
                max-height: 240px;
                line-height: 1.8;
            }
            #term-in {
                font-size: 16px;
            }
            #term-out {
                line-height: 1.7;
            }

            .contact-title {
                font-size: 26px;
                letter-spacing: -1.5px;
            }
            .contact-sub {
                font-size: 13px;
                margin-bottom: 32px;
            }
            .contact-links {
                gap: 8px;
            }
            .c-link {
                padding: 10px 14px;
                font-size: 12px;
                border-radius: 10px;
                gap: 6px;
            }
            .c-link svg {
                width: 14px;
                height: 14px;
            }
            .footer-note {
                margin-top: 36px;
                font-size: 10px;
                letter-spacing: .5px;
            }

            .scroll-hint {
                bottom: 14px;
                gap: 4px;
            }
            .scroll-hint span {
                font-size: 9px;
                letter-spacing: 2px;
            }
            .scroll-arrow {
                height: 24px;
            }
            .orb1 {
                width: 200px;
                height: 200px;
                top: -40px;
                right: -40px;
                filter: blur(50px);
            }
            .orb2 {
                width: 180px;
                height: 180px;
                bottom: -40px;
                left: -40px;
                filter: blur(50px);
            }

            /* Progress bar thinner on small screens */
            #progress {
                width: 2px;
            }
        }

        /* ── Extra small screens (320px – 370px) ── */
        @media (max-width: 370px) {
            .photo-wrap {
                width: 140px;
                height: 140px;
            }
            .photo-glow-c {
                width: 60px;
                height: 60px;
                bottom: -10px;
                left: -10px;
                filter: blur(25px);
            }
            .photo-glow-v {
                width: 50px;
                height: 50px;
                top: -8px;
                right: -8px;
                filter: blur(25px);
            }
            .badge-laravel {
                bottom: -6px;
                right: -6px;
                font-size: 7px;
                padding: 3px 5px;
                border-radius: 6px;
            }
            .badge-api {
                top: 2px;
                right: -12px;
                font-size: 7px;
                padding: 3px 5px;
                border-radius: 6px;
            }
            .badge-php {
                bottom: 12px;
                left: -10px;
                font-size: 7px;
                padding: 3px 5px;
                border-radius: 6px;
            }
            .badge-dot {
                width: 3px;
                height: 3px;
                margin-right: 2px;
            }
            .hero-title {
                font-size: 26px;
                letter-spacing: -1px;
            }
            .hero-eyebrow {
                font-size: 9px;
                letter-spacing: 1.5px;
            }
            .hero-sub {
                font-size: 12px;
            }
            .btn-primary,
            .btn-ghost {
                padding: 8px 14px;
                font-size: 11px;
            }
            .hex-card {
                width: calc(50% - 6px);
                max-width: 130px;
                min-width: 105px;
                padding: 12px 4px;
            }
            .hex-icon {
                font-size: 20px;
            }
            .hex-name {
                font-size: 9px;
            }
            .hex-pct {
                font-size: 8px;
            }
            .hex-desc {
                font-size: 8px;
            }
            .stat-num {
                font-size: 18px;
            }
            .stat-label {
                font-size: 8px;
            }
            .stat-card {
                padding: 10px 4px;
            }
            .c-link {
                padding: 8px 10px;
                font-size: 11px;
                gap: 4px;
            }
            .c-link svg {
                width: 12px;
                height: 12px;
            }
            nav a {
                font-size: 9px;
                padding: 3px 5px;
            }
            nav .brand {
                font-size: 9px;
                padding: 3px 5px;
            }
            nav {
                padding: 6px 8px;
                gap: 1px;
            }
        }
    </style>
</head>
<body>

<canvas id="bg-canvas"></canvas>
<div id="cursor"></div>
<div id="cursor-ring"></div>
<div id="progress"><div id="progress-fill"></div></div>

<nav>
    <span class="brand">H.AHA</span>
    <a href="#hero">Home</a>
    <a href="#about">About</a>
    <a href="#arsenal">Arsenal</a>
    <a href="#projects">Projects</a>
    <a href="#philosophy">Philosophy</a>
    <a href="#contact">Contact</a>
</nav>

<!-- ═══ HERO ═══ -->
<section id="hero">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>

    <div class="hero-inner">
        <!-- LEFT: text -->
        <div class="hero-left">
            <p class="hero-eyebrow">Backend Architect &amp; Software Engineer</p>
            <h1 class="hero-title">
                <span class="line1">Haider</span>
                <span class="line2">Al-Haj Ahmed</span>
            </h1>
            <p class="hero-sub">Building scalable, elegant backend systems with Laravel. Turning complex problems into clean, maintainable code.</p>
            <div class="hero-btns">
                <button class="btn-primary" onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'})">View Projects</button>
                <button class="btn-ghost" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Get In Touch</button>
            </div>
        </div>

        <!-- RIGHT: photo -->
        <div class="hero-right">
            <div class="photo-wrap">
                <div class="photo-glow-c"></div>
                <div class="photo-glow-v"></div>
                <div class="photo-ring"></div>
                <div class="photo-inner">
                    <img src="/haider3.jpeg" alt="Haider Al-Haj Ahmed" class="photo-img">
                </div>
                <!-- floating badges -->
                <div class="photo-badge badge-laravel"><span class="badge-dot"></span>Laravel Expert</div>
                <div class="photo-badge badge-api"><span class="badge-dot"></span>REST APIs</div>
                <div class="photo-badge badge-php"><span class="badge-dot"></span>PHP 8+</div>
            </div>
        </div>
    </div>

    <div class="scroll-hint">
        <div class="scroll-arrow"></div>
        <span>Scroll</span>
    </div>
</section>

<!-- ═══ ABOUT ═══ -->
<section id="about">
    <div class="layer">
        <div class="about-grid">
            <div class="reveal">
                <p class="about-tag">&gt; whois.about</p>
                <h2 class="about-title">Passionate about<br><span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">clean systems</span></h2>
                <p class="about-body">I'm a Software Engineering student at <strong>Homs University</strong> and a freelance backend developer. My journey started with a passion for translating complex ideas into maintainable, elegant code.</p>
                <p class="about-body">As a former freelance translator, I learned that <strong>precision and structure matter</strong> — the same principles I now apply to architecting robust backend systems with Laravel.</p>
                <div class="stats-grid">
                    <div class="stat-card reveal reveal-d1"><div class="stat-num" data-target="3">0</div><div class="stat-label">Projects</div></div>
                    <div class="stat-card reveal reveal-d2"><div class="stat-num" data-target="200">0</div><div class="stat-label">API Endpoints</div></div>
                    <div class="stat-card reveal reveal-d3"><div class="stat-num" data-target="10">0</div><div class="stat-label">Technologies</div></div>
                </div>
            </div>
            <div class="reveal reveal-d2">
                <div class="glass" style="padding:30px">
                    <p class="about-tag">&gt; cd ./journey</p>
                    <div class="timeline" style="margin-top:20px">
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-year">PRESENT</div>
                            <div class="tl-title">Freelance Backend Developer</div>
                            <div class="tl-desc">Building production-ready Laravel APIs for clients across multiple domains.</div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-dot" style="background:var(--v);box-shadow:0 0 15px var(--v)"></div>
                            <div class="tl-year">ONGOING</div>
                            <div class="tl-title">Software Engineering @ Homs University</div>
                            <div class="tl-desc">Deep-diving into CS fundamentals, algorithms and systems design.</div>
                        </div>
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-year">EARLIER</div>
                            <div class="tl-title">Freelance Translator</div>
                            <div class="tl-desc">Developed precision and structured thinking — now applied to code architecture.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ ARSENAL ═══ -->
<section id="arsenal">
    <div class="layer">
        <div class="section-header reveal">
            <p class="section-tag">&gt; cat.arsenal</p>
            <h2 class="section-title">My <span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Tech Stack</span></h2>
        </div>
        <div class="hex-grid">
            <div class="hex-card reveal reveal-d1" data-pct="95"><div class="hex-glow"></div><span class="hex-icon">⚙️</span><div class="hex-name">Laravel</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">95%</div><div class="hex-desc">Expert in robust APIs &amp; apps</div></div>
            <div class="hex-card reveal reveal-d2" data-pct="90"><div class="hex-glow" style="background:var(--v)"></div><span class="hex-icon">🐘</span><div class="hex-name">PHP</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">90%</div><div class="hex-desc">OOP, MVC, PHP 8+ features</div></div>
            <div class="hex-card reveal reveal-d3" data-pct="85"><div class="hex-glow"></div><span class="hex-icon">⚡</span><div class="hex-name">Livewire</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">85%</div><div class="hex-desc">Dynamic server-side interfaces</div></div>
            <div class="hex-card reveal reveal-d4" data-pct="80"><div class="hex-glow" style="background:var(--v)"></div><span class="hex-icon">📦</span><div class="hex-name">MySQL</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">80%</div><div class="hex-desc">Schema design & Eloquent ORM</div></div>
            <div class="hex-card reveal reveal-d1" data-pct="88"><div class="hex-glow"></div><span class="hex-icon">🔀</span><div class="hex-name">REST APIs</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">88%</div><div class="hex-desc">JSON:API, versioned endpoints</div></div>
            <div class="hex-card reveal reveal-d2" data-pct="78"><div class="hex-glow" style="background:var(--v)"></div><span class="hex-icon">🧩</span><div class="hex-name">Clean Code</div><div class="hex-bar"><div class="hex-fill"></div></div><div class="hex-pct">78%</div><div class="hex-desc">SOLID, DRY, SoC principles</div></div>
        </div>
    </div>
</section>

<!-- ═══ PROJECTS ═══ -->
<section id="projects">
    <div class="layer">
        <div class="section-header reveal">
            <p class="section-tag">&gt; ls.projects</p>
            <h2 class="section-title">Featured <span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Work</span></h2>
        </div>
        <div class="projects-grid">
            <div class="proj-card reveal reveal-d1">
                <div class="proj-accent"></div>
                <p class="proj-num">01 / PROJECT</p>
                <h3 class="proj-title">TechTalk API</h3>
                <p class="proj-desc">A scalable content &amp; auth platform with OTP verification and a personalized feed algorithm.</p>
                <div class="proj-tags"><span class="tag tag-c">Laravel 12</span><span class="tag tag-v">Sanctum</span><span class="tag tag-g">MySQL</span></div>
                <div class="proj-footer">
                    <a href="https://github.com/Haider-Haj-Ahmed/laravel-blog-api.git" target="_blank" class="proj-link">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <button class="case-btn" onclick="toggleCase(this)">case study ▼</button>
                </div>
                <div class="case-study"><div class="case-body">
                        <div class="case-row"><h4>Problem</h4><p>Build a secure backend for a social platform with auth, post management, and a recommendation engine.</p></div>
                        <div class="case-row"><h4>Solution</h4><p>Laravel Sanctum for token-based auth with OTP, CRUD with draft state, personalized feed based on user interactions.</p></div>
                        <div class="case-row"><h4>Result</h4><p>Sole backend developer. Clean, maintainable API with strict separation of concerns.</p></div>
                    </div></div>
            </div>
            <div class="proj-card reveal reveal-d2">
                <div class="proj-accent"></div>
                <p class="proj-num">02 / PROJECT</p>
                <h3 class="proj-title">WorkNetSYR API</h3>
                <p class="proj-desc">A job-market API connecting professionals with project owners in Syria — backbone of the "Forsa" mobile app.</p>
                <div class="proj-tags"><span class="tag tag-v">Laravel</span><span class="tag tag-c">REST API</span><span class="tag tag-g">MySQL</span></div>
                <div class="proj-footer">
                    <a href="https://github.com/Haider-Haj-Ahmed/worknetsyr-api.git" target="_blank" class="proj-link">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <button class="case-btn" onclick="toggleCase(this)">case study ▼</button>
                </div>
                <div class="case-study"><div class="case-body">
                        <div class="case-row"><h4>Problem</h4><p>Bridge talented professionals and project owners for a mobile app serving the Syrian job market.</p></div>
                        <div class="case-row"><h4>Solution</h4><p>Co-developed backend with high-level abstractions and advanced software engineering principles.</p></div>
                        <div class="case-row"><h4>Result</h4><p>Production-ready, scalable codebase delivered through rigorous methodology.</p></div>
                    </div></div>
            </div>
            <div class="proj-card reveal reveal-d3">
                <div class="proj-accent"></div>
                <p class="proj-num">03 / PROJECT</p>
                <h3 class="proj-title">Dental Clinic API</h3>
                <p class="proj-desc">Comprehensive REST API: appointments, patient records, odontogram charting, billing, and inventory.</p>
                <div class="proj-tags"><span class="tag tag-c">Laravel 13</span><span class="tag tag-v">Sanctum</span><span class="tag tag-g">MySQL</span></div>
                <div class="proj-footer">
                    <a href="https://github.com/Haider-Haj-Ahmed/dental-clinic.git" target="_blank" class="proj-link">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                    </a>
                    <button class="case-btn" onclick="toggleCase(this)">case study ▼</button>
                </div>
                <div class="case-study"><div class="case-body">
                        <div class="case-row"><h4>Problem</h4><p>Dental practices need a robust backend handling appointments, clinical charting, billing and recalls without monolithic overhead.</p></div>
                        <div class="case-row"><h4>Solution</h4><p>Versioned API (v1) with Sanctum tokens, scoped abilities, soft-delete, queued reminders, and dedicated modules for charting, invoices, and inventory.</p></div>
                        <div class="case-row"><h4>Result</h4><p>Sole architect. ~60+ endpoints following JSON:API conventions, throttling, and mobile-first auth flow.</p></div>
                    </div></div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ PHILOSOPHY ═══ -->
<section id="philosophy">
    <div class="layer">
        <div class="section-header reveal">
            <p class="section-tag">&gt; how.build</p>
            <h2 class="section-title">Engineering <span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Philosophy</span></h2>
        </div>
        <div class="phi-grid">
            <div class="phi-card reveal reveal-d1"><div class="phi-icon">🧩</div><div class="phi-title">Object-Oriented Programming</div><div class="phi-desc">I model real-world entities using classes, inheritance, and polymorphism to keep code modular and extensible.</div></div>
            <div class="phi-card reveal reveal-d2"><div class="phi-icon">📂</div><div class="phi-title">MVC Architecture</div><div class="phi-desc">Separation of concerns is non-negotiable. Controllers handle requests, models encapsulate data, views present it cleanly.</div></div>
            <div class="phi-card reveal reveal-d3"><div class="phi-icon">🧹</div><div class="phi-title">Clean Code</div><div class="phi-desc">Readability, meaningful names, and small focused functions make my codebase a pleasure to maintain and extend.</div></div>
            <div class="phi-card reveal reveal-d4"><div class="phi-icon">🔗</div><div class="phi-title">Separation of Concerns</div><div class="phi-desc">Each application layer has a single responsibility, ensuring scalability, testability, and long-term maintainability.</div></div>
        </div>
        <div class="arch-flow reveal">
            <div class="arch-label">Typical System Architecture</div>
            <div class="arch-nodes">
                <div class="arch-node c">Client</div><div class="arch-arrow">→</div>
                <div class="arch-node v">API Gateway</div><div class="arch-arrow">→</div>
                <div class="arch-node c">App Logic</div><div class="arch-arrow">→</div>
                <div class="arch-node v">Service Layer</div><div class="arch-arrow">→</div>
                <div class="arch-node c">Database</div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ TERMINAL ═══ -->
<section id="terminal-section">
    <div class="layer" style="display:flex;flex-direction:column;align-items:center;gap:36px">
        <div class="section-header reveal" style="margin-bottom:0">
            <p class="section-tag">&gt; interactive.cli</p>
            <h2 class="section-title">Try the <span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Terminal</span></h2>
        </div>
        <div class="terminal reveal">
            <div class="term-header">
                <div class="term-dots"><span></span><span></span><span></span></div>
                <div class="term-title">haider@portfolio ~ — zsh</div>
            </div>
            <div class="term-body">
                <div id="term-out">
                    <p style="color:var(--c)">Welcome to Haider Al-Haj Ahmed's portfolio.</p>
                    <p style="color:var(--muted)">Type <span style="color:var(--v);font-weight:700">help</span> to see available commands.</p>
                </div>
                <div class="term-prompt">
                    <span class="term-caret">❯</span>
                    <input id="term-in" type="text" placeholder="Type a command..." spellcheck="false">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ CONTACT ═══ -->
<section id="contact">
    <div class="layer">
        <div class="orb orb1" style="opacity:.4"></div>
        <div class="orb orb2" style="opacity:.4"></div>
        <div style="position:relative;z-index:2;width:100%">
            <p class="about-tag" style="text-align:center;margin-bottom:16px">&gt; connect.now</p>
            <h2 class="contact-title reveal">Let's <span style="background:linear-gradient(135deg,var(--c),var(--v));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">build</span> together.</h2>
            <p class="contact-sub reveal">Open for freelance projects and collaborations.</p>
            <div class="contact-links reveal">
                <a href="mailto:haideralhajahmed2@gmail.com" class="c-link"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>Email</a>
                <a href="https://github.com/Haider-Haj-Ahmed" target="_blank" class="c-link"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.21 11.39.6.11.79-.26.79-.58v-2.23c-3.34.72-4.03-1.42-4.03-1.42-.55-1.39-1.33-1.76-1.33-1.76-1.09-.75.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 016.01 0c2.29-1.55 3.3-1.23 3.3-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.19.69.8.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>GitHub</a>
                <a href="https://instagram.com/haider_cz" target="_blank" class="c-link"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0 10.163c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>Instagram</a>
                <a href="https://t.me/haider_cz" target="_blank" class="c-link"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.16.18-.357.295-.6.295l.213-3.053 5.56-5.023c.24-.213-.054-.333-.373-.12l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.537-.194 1.006.131.833.94z"/></svg>Telegram</a>
                <a href="https://wa.me/0932938041" target="_blank" class="c-link"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .06 5.435.058 12.002a11.9 11.9 0 001.591 5.947L0 24l6.336-1.663a11.93 11.93 0 005.709 1.455h.005c6.554 0 11.89-5.435 11.893-12.003a11.82 11.82 0 00-3.487-8.412z"/></svg>WhatsApp</a>
            </div>
            <div class="footer-note reveal" style="margin-top:48px">
                <p>Built with ❤️ &amp; Laravel · Haider Al-Haj Ahmed · 2025</p>
            </div>
        </div>
    </div>
</section>

<script>
    // ── Cursor ──
    const cur = document.getElementById('cursor'),
        ring = document.getElementById('cursor-ring');
    let mx = window.innerWidth / 2,
        my = window.innerHeight / 2,
        rx = mx,
        ry = my;
    document.addEventListener('mousemove', e => {
        mx = e.clientX;
        my = e.clientY;
        cur.style.left = mx + 'px';
        cur.style.top = my + 'px';
    });
    (function lerpRing() {
        rx += (mx - rx) * .12;
        ry += (my - ry) * .12;
        ring.style.left = rx + 'px';
        ring.style.top = ry + 'px';
        requestAnimationFrame(lerpRing);
    })();
    document.querySelectorAll('a,button,.hex-card,.proj-card,.stat-card,.phi-card').forEach(el => {
        el.addEventListener('mouseenter', () => {
            cur.style.width = '6px';
            cur.style.height = '6px';
            ring.style.width = '60px';
            ring.style.height = '60px';
            ring.style.borderColor = 'rgba(0,240,255,0.8)';
        });
        el.addEventListener('mouseleave', () => {
            cur.style.width = '12px';
            cur.style.height = '12px';
            ring.style.width = '40px';
            ring.style.height = '40px';
            ring.style.borderColor = 'rgba(0,240,255,0.5)';
        });
    });

    // ── Progress bar ──
    const pf = document.getElementById('progress-fill');
    window.addEventListener('scroll', () => {
        pf.style.height = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight) *
            100) + '%';
    }, { passive: true });

    // ── Navbar active ──
    const navLinks = document.querySelectorAll('nav a');
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                navLinks.forEach(a => {
                    a.classList.remove('active');
                    if (a.getAttribute('href') === '#' + e.target.id) a.classList.add(
                        'active');
                });
            }
        });
    }, { threshold: .4 });
    document.querySelectorAll('section').forEach(s => io.observe(s));

    // ── Scroll reveal ──
    const ro = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                ro.unobserve(e.target);
            }
        });
    }, { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

    // ── Skill bars ──
    const bo = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.querySelector('.hex-fill').style.width = e.target.dataset.pct + '%';
                bo.unobserve(e.target);
            }
        });
    }, { threshold: .3 });
    document.querySelectorAll('.hex-card').forEach(c => bo.observe(c));

    // ── Stats counter ──
    const co = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const el = e.target,
                target = +el.dataset.target;
            let start = null;
            const step = ts => {
                if (!start) start = ts;
                const p = Math.min((ts - start) / 1500, 1);
                el.textContent = Math.floor(p * target) + (p >= 1 && target > 3 ? '+' : '');
                if (p < 1) requestAnimationFrame(step);
                else el.textContent = target + (target > 3 ? '+' : '');
            };
            requestAnimationFrame(step);
            co.unobserve(el);
        });
    }, { threshold: .5 });
    document.querySelectorAll('.stat-num').forEach(el => co.observe(el));

    // ── Case studies ──
    function toggleCase(btn) {
        const cs = btn.closest('.proj-card').querySelector('.case-study');
        const open = cs.classList.toggle('open');
        btn.textContent = 'case study ' + (open ? '▲' : '▼');
    }

    // ── Project card mouse glow ──
    document.querySelectorAll('.proj-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const r = card.getBoundingClientRect();
            card.style.setProperty('--mx', ((e.clientX - r.left) / r.width * 100) + '%');
            card.style.setProperty('--my', ((e.clientY - r.top) / r.height * 100) + '%');
        });
    });

    // ── Terminal ──
    const termOut = document.getElementById('term-out'),
        termIn = document.getElementById('term-in');
    const cmds = {
        help: `Available: <span style="color:var(--c)">whois · skills · projects · contact · laravel · php · mysql · livewire · oop · mvc · api · clear</span>`,
        whois: `Haider Al-Haj Ahmed — Software Engineer & Backend Developer.<br>Studies at Homs University · Building scalable systems with Laravel.`,
        skills: `Core: <span style="color:var(--c)">Laravel · PHP · Livewire · MySQL · REST APIs</span><br>Principles: OOP · MVC · Clean Code · Separation of Concerns`,
        projects: `<span style="color:var(--c)">01</span> TechTalk API — Social platform with auth & personalized feeds<br><span style="color:var(--v)">02</span> WorkNetSYR API — Job market connector (Forsa app)<br><span style="color:var(--c)">03</span> Dental Clinic API — Full clinic management system`,
        contact: `Email: <span style="color:var(--c)">haideralhajahmed2@gmail.com</span><br>GitHub: github.com/Haider-Haj-Ahmed<br>Telegram & Instagram: <span style="color:var(--v)">haider_cz</span>`,
        laravel: `Laravel — PHP web framework with elegant syntax. Routing, auth, caching & queues. My primary weapon for robust, maintainable APIs.`,
        php: `PHP 8+ — Modern server-side language. Typed properties, enums, fibers, match expressions. Clean OOP throughout.`,
        mysql: `MySQL — World's most popular RDBMS. Normalized schemas, optimized queries, Eloquent ORM.`,
        livewire: `Livewire — Full-stack Laravel framework. Dynamic interfaces without leaving PHP. Seamless AJAX & DOM updates.`,
        oop: `Object-Oriented Programming — Classes, inheritance, polymorphism. Modular, reusable, maintainable software.`,
        mvc: `Model-View-Controller — Non-negotiable separation of concerns. Controllers → requests, Models → data, Views → presentation.`,
        api: `REST API — Stateless, resource-oriented, HTTP-standard. Versioned APIs following JSON:API conventions.`,
        clear: null
    };

    function addLine(html, color = '#94a3b8') {
        const p = document.createElement('p');
        p.style.color = color;
        p.innerHTML = html;
        termOut.appendChild(p);
        termOut.parentElement.scrollTop = termOut.parentElement.scrollHeight;
    }
    termIn.addEventListener('keydown', e => {
        if (e.key !== 'Enter') return;
        const cmd = termIn.value.trim().toLowerCase();
        termIn.value = '';
        if (!cmd) return;
        addLine(
            `<span style="color:var(--c)">❯</span> <span style="color:#fff">${cmd}</span>`);
        if (cmd === 'clear') {
            termOut.innerHTML = '';
            return;
        }
        if (cmds[cmd] != null) addLine(cmds[cmd]);
        else addLine(
            `<span style="color:#f87171">Command not found: ${cmd}</span> — type <span style="color:var(--v)">help</span> for options`
        );
    });

    // ── Background Canvas ──
    (function() {
        const canvas = document.getElementById('bg-canvas');
        const ctx = canvas.getContext('2d');
        let W = canvas.width = window.innerWidth,
            H = canvas.height = window.innerHeight;
        let mouseX = W / 2,
            mouseY = H / 2;
        window.addEventListener('resize', () => {
            W = canvas.width = window.innerWidth;
            H = canvas.height = window.innerHeight;
        });
        window.addEventListener('mousemove', e => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        const N = 100;
        const pts = Array.from({ length: N }, () => ({
            x: Math.random() * W,
            y: Math.random() * H,
            vx: (Math.random() - .5) * .3,
            vy: (Math.random() - .5) * .3,
            r: Math.random() * 1.5 + .5,
            c: Math.random() > .5 ? 'rgba(0,240,255,' : 'rgba(189,0,255,',
            o: Math.random() * .35 + .08
        }));
        const glyphs = '01{}[]<>/;:=&&||=>'.split('');
        const floaters = Array.from({ length: 20 }, () => ({
            x: Math.random() * W,
            y: Math.random() * H,
            vy: Math.random() * .5 + .15,
            ch: glyphs[Math.floor(Math.random() * glyphs.length)],
            o: Math.random() * .12 + .04,
            sz: Math.random() * 7 + 10
        }));

        function draw() {
            ctx.clearRect(0, 0, W, H);
            // mouse glow
            const g = ctx.createRadialGradient(mouseX, mouseY, 0, mouseX, mouseY, 280);
            g.addColorStop(0, 'rgba(0,240,255,0.025)');
            g.addColorStop(1, 'transparent');
            ctx.fillStyle = g;
            ctx.fillRect(0, 0, W, H);
            // connections
            for (let i = 0; i < N; i++)
                for (let j = i + 1; j < N; j++) {
                    const dx = pts[i].x - pts[j].x,
                        dy = pts[i].y - pts[j].y,
                        d = Math.hypot(dx, dy);
                    if (d < 110) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(0,240,255,${(1-d/110)*.05})`;
                        ctx.lineWidth = .5;
                        ctx.moveTo(pts[i].x, pts[i].y);
                        ctx.lineTo(pts[j].x, pts[j].y);
                        ctx.stroke();
                    }
                }
            // particles
            pts.forEach(p => {
                const dx = mouseX - p.x,
                    dy = mouseY - p.y,
                    d = Math.hypot(dx, dy);
                if (d < 180) { p.vx += dx / d * .018;
                    p.vy += dy / d * .018; }
                p.vx *= .98;
                p.vy *= .98;
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0) p.x = W;
                if (p.x > W) p.x = 0;
                if (p.y < 0) p.y = H;
                if (p.y > H) p.y = 0;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = p.c + p.o + ')';
                ctx.fill();
            });
            // glyphs
            floaters.forEach(f => {
                f.y += f.vy;
                if (f.y > H + 20) f.y = -20;
                ctx.font = `${f.sz}px 'JetBrains Mono',monospace`;
                ctx.fillStyle = `rgba(0,240,255,${f.o})`;
                ctx.fillText(f.ch, f.x, f.y);
            });
            requestAnimationFrame(draw);
        }
        draw();
    })();
</script>
</body>
</html>
