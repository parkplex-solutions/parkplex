<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkplex Solutions — Coming Soon</title>
    <meta name="description" content="Parkplex Solutions website is under construction. We'll be live soon.">
    <style>
        :root {
            --bg: #ffffff;
            --bg-accent: #f4f7ff;
            --text: #12172b;
            --muted: #5b6478;
            --accent: #4f7cff;
            --accent-2: #8a5cff;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { height: 100%; }
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 24px;
            position: relative;
            overflow: hidden;
        }

        /* Animated background blobs */
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.35;
            z-index: 0;
            animation: float 12s ease-in-out infinite;
        }
        .blob-1 {
            width: 420px;
            height: 420px;
            top: -120px;
            left: -100px;
            background: var(--accent);
            animation-delay: 0s;
        }
        .blob-2 {
            width: 360px;
            height: 360px;
            bottom: -140px;
            right: -100px;
            background: var(--accent-2);
            animation-delay: -4s;
        }
        .blob-3 {
            width: 260px;
            height: 260px;
            top: 40%;
            left: 60%;
            background: var(--bg-accent);
            opacity: 0.6;
            animation-delay: -8s;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -40px) scale(1.08); }
            66% { transform: translate(-25px, 25px) scale(0.95); }
        }

        .container {
            max-width: 640px;
            position: relative;
            z-index: 1;
            animation: rise 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
        }
        @keyframes rise {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .logo {
            font-size: clamp(2rem, 6vw, 3rem);
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            animation: rise 0.9s 0.05s cubic-bezier(0.16, 1, 0.3, 1) both;
        }
        .logo span {
            background: linear-gradient(90deg, var(--accent), var(--accent-2));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .tagline {
            font-size: 1rem;
            color: var(--muted);
            margin-bottom: 40px;
            animation: rise 0.9s 0.1s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border: 1px solid rgba(79, 124, 255, 0.35);
            background: var(--bg-accent);
            border-radius: 999px;
            color: var(--accent);
            font-size: 0.8rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 28px;
            animation: rise 0.9s 0.15s cubic-bezier(0.16, 1, 0.3, 1) both;
        }
        .badge .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            animation: pulse 1.6s ease-in-out infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.5; }
        }

        h1 {
            font-size: clamp(1.5rem, 4vw, 2.25rem);
            font-weight: 600;
            margin-bottom: 16px;
            animation: rise 0.9s 0.2s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        p.desc {
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 40px;
            animation: rise 0.9s 0.25s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .progress {
            max-width: 320px;
            margin: 0 auto 40px;
            height: 6px;
            border-radius: 999px;
            background: var(--bg-accent);
            overflow: hidden;
            animation: rise 0.9s 0.3s cubic-bezier(0.16, 1, 0.3, 1) both;
        }
        .progress-bar {
            height: 100%;
            width: 40%;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--accent), var(--accent-2));
            animation: loading 2.2s ease-in-out infinite;
        }
        @keyframes loading {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(120%); }
            100% { transform: translateX(280%); }
        }

        footer {
            margin-top: 8px;
            color: var(--muted);
            font-size: 0.85rem;
            animation: rise 0.9s 0.35s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @media (max-width: 480px) {
            .blob-1, .blob-2, .blob-3 { filter: blur(50px); opacity: 0.25; }
            .container { max-width: 100%; }
            .badge { font-size: 0.7rem; padding: 6px 14px; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
            }
        }
    </style>
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    <div class="container">
        <div class="badge"><span class="dot"></span>Under Construction</div>
        <div class="logo">Parkplex <span>Solutions</span></div>
        <h1>Our website is coming soon</h1>
        <p class="desc">We're working hard to bring you a brand new experience. Thank you for your patience — check back soon.</p>
        <div class="progress"><div class="progress-bar"></div></div>
        <footer>&copy; {{ date('Y') }} Parkplex Solutions. All rights reserved.</footer>
    </div>
</body>
</html>
