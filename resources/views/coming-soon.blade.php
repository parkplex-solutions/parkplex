<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkplex Solutions — Coming Soon</title>
    <meta name="description" content="Parkplex Solutions website is under construction. We'll be live soon.">
    <style>
        :root {
            --bg: #0b0f19;
            --bg-accent: #141b2d;
            --text: #f5f6fa;
            --muted: #8b93a7;
            --accent: #4f7cff;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html, body {
            height: 100%;
        }
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, Arial, sans-serif;
            background: radial-gradient(circle at top, var(--bg-accent), var(--bg));
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 24px;
        }
        .container {
            max-width: 640px;
        }
        .logo {
            font-size: clamp(2rem, 6vw, 3rem);
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }
        .logo span {
            color: var(--accent);
        }
        .tagline {
            font-size: 1rem;
            color: var(--muted);
            margin-bottom: 40px;
        }
        .badge {
            display: inline-block;
            padding: 8px 20px;
            border: 1px solid var(--accent);
            border-radius: 999px;
            color: var(--accent);
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 28px;
        }
        h1 {
            font-size: clamp(1.5rem, 4vw, 2.25rem);
            font-weight: 600;
            margin-bottom: 16px;
        }
        p.desc {
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        footer {
            margin-top: 48px;
            color: var(--muted);
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="badge">Under Construction</div>
        <div class="logo">Parkplex <span>Solutions</span></div>
        <h1>Our website is coming soon</h1>
        <p class="desc">We're working hard to bring you a brand new experience. Thank you for your patience — check back soon.</p>
        <footer>&copy; {{ date('Y') }} Parkplex Solutions. All rights reserved.</footer>
    </div>
</body>
</html>
