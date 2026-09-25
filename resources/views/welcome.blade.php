<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Structure Lock — patented steel joist bracing that installs in 30 seconds. UBC-tested, seismic certified, trusted by engineers and school districts. New site launching soon.">
    <meta name="theme-color" content="#1f2428">
    <meta property="og:title" content="Structure Lock — Steel Joist Bracing | Coming Soon">
    <meta property="og:description" content="Seismic-certified steel bracing that installs in 30 seconds. Stronger than wood blocking. Get notified at launch.">
    <meta property="og:type" content="website">
    <title>Structure Lock — Steel Joist Bracing | Coming Soon</title>
    <link rel="icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script type="application/ld+json">
    {{ Js::from(['@context' => 'https://schema.org', '@type' => 'Organization', 'name' => 'Alliance Structural Product Sales Corp.', 'brand' => 'Structure Lock', 'telephone' => '+1-604-842-5133', 'email' => 'sales@structurelock.com', 'url' => 'https://structurelock.com']) }}
    </script>
    <style>
        :root {
            --ink: #1f2428;
            --charcoal: #3a3a3a;
            --body: #4b4f58;
            --muted: #82888f;
            --line: rgba(31,36,40,.12);
            --orange: #cf7a1c;
            --orange-deep: #a96112;
            --orange-soft: rgba(207,122,28,.09);
            --paper: #faf8f4;
            --cool: #eef2f4;
            --card: #ffffff;
            --sans: 'Inter', system-ui, -apple-system, 'Segoe UI', sans-serif;
            --cond: 'Barlow Condensed', 'Arial Narrow', sans-serif;
            --radius: 4px;
            --shadow: 0 18px 50px -22px rgba(31,36,40,.35);
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            background: var(--card);
            color: var(--body);
            font-family: var(--sans);
            font-size: 16px;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; }

        .topbar {
            background: var(--ink);
            color: rgba(255,255,255,.82);
            font-size: 11.5px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
        }
        .topbar-inner {
            width: min(1200px, calc(100% - 48px));
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 9px 0;
        }
        .topbar strong { color: #f3b45a; font-weight: 700; }
        .topbar a { color: #fff; text-decoration: none; border-bottom: 1px solid rgba(255,255,255,.35); }
        .topbar a:hover { border-color: #fff; }

        header.site {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(255,255,255,.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--line);
        }
        .nav {
            width: min(1200px, calc(100% - 48px));
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 14px 0;
        }
        .brand { display: inline-flex; align-items: center; gap: 12px; text-decoration: none; }
        .brand img { height: 26px; width: auto; display: block; }
        .brand-text { display: flex; flex-direction: column; line-height: 1.05; }
        .brand-text strong { font-family: var(--cond); font-size: 22px; font-weight: 700; letter-spacing: .01em; color: var(--ink); text-transform: uppercase; }
        .brand-text small { font-size: 10px; letter-spacing: .16em; color: var(--muted); text-transform: uppercase; font-weight: 600; }
        .nav-links { display: flex; align-items: center; gap: 26px; font-size: 13px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--charcoal); }
        .nav-links a { text-decoration: none; opacity: .8; }
        .nav-links a:hover { opacity: 1; color: var(--orange-deep); }
        .nav-cta { display: inline-flex; align-items: center; gap: 10px; background: var(--ink); color: #fff; text-decoration: none; font-size: 13px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase; padding: 12px 20px; border-radius: var(--radius); }
        .nav-cta:hover { background: var(--orange); }
        .nav-cta span.dot { width: 7px; height: 7px; border-radius: 50%; background: #4ade80; }

        .shell { width: min(1200px, calc(100% - 48px)); margin: 0 auto; }

        .hero {
            position: relative;
            overflow: clip;
            background:
                radial-gradient(circle at 85% 8%, rgba(207,122,28,.12), transparent 26rem),
                radial-gradient(circle at 5% 95%, rgba(31,36,40,.07), transparent 24rem),
                linear-gradient(var(--paper), #fff);
        }
        .hero::before {
            position: absolute; inset: 0;
            background: linear-gradient(rgba(31,36,40,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(31,36,40,.05) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: linear-gradient(to bottom, black, transparent 78%);
            content: "";
            pointer-events: none;
        }
        .hero-grid {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.08fr) minmax(360px, .92fr);
            gap: clamp(36px, 5vw, 72px);
            align-items: start;
            padding: clamp(48px, 7vh, 88px) 0 clamp(44px, 6vh, 72px);
        }
        .eyebrow { display: inline-flex; align-items: center; gap: 12px; margin: 0 0 20px; color: var(--orange-deep); font-size: 11.5px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; }
        .eyebrow::before { width: 34px; height: 2px; background: var(--orange); content: ""; }
        h1 { margin: 0; font-family: var(--cond); font-weight: 600; font-size: clamp(3rem, 6.6vw, 5.6rem); line-height: .94; letter-spacing: -.01em; color: var(--ink); text-transform: uppercase; text-wrap: balance; }
        h1 em { color: var(--orange); font-style: normal; position: relative; }
        .lede { max-width: 560px; margin: 22px 0 0; font-size: clamp(1rem, 1.3vw, 1.14rem); color: var(--body); }
        .lede strong { color: var(--ink); }

        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 30px; }
        .btn { display: inline-flex; align-items: center; justify-content: center; gap: 10px; min-height: 52px; padding: 0 26px; font-size: 13.5px; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; text-decoration: none; border-radius: var(--radius); transition: transform .18s ease, background .18s ease, border-color .18s ease; }
        .btn-primary { background: var(--orange); color: #fff; box-shadow: 0 12px 26px -14px rgba(207,122,28,.7); }
        .btn-primary:hover { background: var(--orange-deep); transform: translateY(-2px); }
        .btn-secondary { border: 1px solid var(--line); background: #fff; color: var(--ink); }
        .btn-secondary:hover { border-color: var(--ink); transform: translateY(-2px); }
        .micro { margin: 14px 0 0; font-size: 13px; color: var(--muted); }
        .micro a { color: var(--ink); font-weight: 600; }

        .proof { display: grid; grid-template-columns: repeat(3, 1fr); margin-top: 36px; border: 1px solid var(--line); background: rgba(255,255,255,.8); border-radius: var(--radius); overflow: hidden; }
        .proof div { padding: 18px 20px; }
        .proof div + div { border-left: 1px solid var(--line); }
        .proof b { display: block; font-family: var(--cond); font-size: 32px; line-height: 1; color: var(--ink); }
        .proof span { display: block; margin-top: 6px; font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: var(--muted); }

        .trusted { margin-top: 26px; border-top: 1px solid var(--line); padding-top: 18px; }
        .trusted p { margin: 0 0 10px; font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--muted); }
        .logos { display: flex; flex-wrap: wrap; gap: 10px 22px; align-items: center; font-size: 13.5px; font-weight: 600; color: var(--charcoal); }
        .logos span { display: inline-flex; align-items: center; gap: 8px; }
        .logos i { width: 6px; height: 6px; background: var(--orange); display: inline-block; transform: rotate(45deg); }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-top: 4px solid var(--orange);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: clamp(26px, 3.4vw, 38px);
            position: sticky;
            top: 92px;
        }
        .card-top { display: flex; align-items: flex-start; justify-content: space-between; gap: 16px; }
        .card h2 { margin: 0; font-family: var(--cond); font-size: clamp(1.8rem, 2.8vw, 2.4rem); line-height: 1; text-transform: uppercase; color: var(--ink); }
        .pill { flex-shrink: 0; display: inline-flex; align-items: center; gap: 8px; background: var(--orange-soft); border: 1px solid rgba(207,122,28,.3); color: var(--orange-deep); font-size: 11px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; padding: 7px 11px; border-radius: 999px; white-space: nowrap; }
        .pill i { width: 7px; height: 7px; border-radius: 50%; background: var(--orange); animation: pulse 2s infinite; }
        .card > p { margin: 14px 0 0; font-size: 15px; }
        .checklist { list-style: none; margin: 20px 0 0; padding: 18px; background: var(--paper); border: 1px dashed rgba(31,36,40,.2); border-radius: var(--radius); display: grid; gap: 10px; font-size: 14px; color: var(--charcoal); }
        .checklist li { display: flex; gap: 10px; align-items: flex-start; }
        .checklist svg { flex-shrink: 0; margin-top: 3px; }
        form.notify { margin-top: 20px; }
        form.notify label { display: block; font-size: 12px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--ink); margin-bottom: 8px; }
        .field { display: flex; gap: 10px; }
        .field input { flex: 1; min-width: 0; height: 52px; padding: 0 15px; border: 1px solid rgba(31,36,40,.2); border-radius: var(--radius); font-size: 15px; font-family: var(--sans); background: #fff; color: var(--ink); }
        .field input:focus { outline: 3px solid rgba(207,122,28,.25); border-color: var(--orange); }
        .field button { height: 52px; padding: 0 22px; border: 0; border-radius: var(--radius); background: var(--ink); color: #fff; font-size: 13px; font-weight: 700; letter-spacing: .05em; text-transform: uppercase; cursor: pointer; white-space: nowrap; }
        .field button:hover { background: var(--orange); }
        .form-note { margin: 12px 0 0; font-size: 12.5px; color: var(--muted); }
        .form-note.success { color: #1e7a2f; font-weight: 600; background: #eaf6ec; border: 1px solid #bfe0c4; padding: 10px 12px; border-radius: var(--radius); }
        .form-note.error { color: #a93226; font-weight: 600; background: #fdecea; border: 1px solid #f3c1bb; padding: 10px 12px; border-radius: var(--radius); }
        .card-contact { margin-top: 20px; padding-top: 18px; border-top: 1px solid var(--line); display: grid; gap: 8px; font-size: 14px; }
        .card-contact a { color: var(--ink); font-weight: 700; text-decoration: none; }
        .card-contact a:hover { color: var(--orange-deep); }
        .card-contact small { color: var(--muted); }

        section.block { padding: clamp(48px, 7vh, 84px) 0; }
        section.band { background: var(--ink); color: rgba(255,255,255,.78); }
        .kicker { margin: 0; color: var(--orange); font-size: 11.5px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; display: flex; align-items: center; gap: 12px; }
        .kicker::before { width: 30px; height: 2px; background: var(--orange); content: ""; }
        .band .kicker { color: #f3b45a; }
        h2.section-title { margin: 14px 0 0; font-family: var(--cond); font-size: clamp(2rem, 4vw, 3.2rem); line-height: .95; text-transform: uppercase; color: var(--ink); max-width: 16ch; text-wrap: balance; }
        .band h2.section-title { color: #fff; }
        .section-sub { margin: 16px 0 0; max-width: 62ch; font-size: 1.02rem; }
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 34px; }
        .feature { border: 1px solid var(--line); border-radius: var(--radius); background: #fff; padding: 26px 24px; position: relative; overflow: hidden; }
        .feature::after { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 3px; background: linear-gradient(90deg, var(--orange), transparent); opacity: 0; transition: opacity .2s ease; }
        .feature:hover::after { opacity: 1; }
        .feature:hover { box-shadow: var(--shadow); transform: translateY(-2px); }
        .feature { transition: transform .2s ease, box-shadow .2s ease; }
        .icon { width: 44px; height: 44px; border-radius: 8px; background: var(--ink); color: #fff; display: grid; place-items: center; margin-bottom: 18px; }
        .icon.amber { background: var(--orange); }
        .feature h3 { margin: 0; font-family: var(--cond); font-size: 1.55rem; line-height: 1; text-transform: uppercase; color: var(--ink); }
        .feature p { margin: 10px 0 0; font-size: 14.5px; }

        .split { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(28px, 4vw, 56px); margin-top: 34px; align-items: start; }
        table.compare { width: 100%; border-collapse: collapse; background: #fff; border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; font-size: 14.5px; }
        table.compare th, table.compare td { text-align: left; padding: 14px 16px; border-bottom: 1px solid var(--line); }
        table.compare thead th { background: var(--paper); font-size: 12px; letter-spacing: .08em; text-transform: uppercase; color: var(--ink); }
        table.compare tr:last-child th, table.compare tr:last-child td { border-bottom: 0; }
        table.compare td.yes { color: #1e7a2f; font-weight: 700; }
        table.compare td.no { color: #a93226; }
        .apps { display: grid; gap: 12px; }
        .app { display: flex; gap: 14px; align-items: flex-start; border: 1px solid var(--line); background: #fff; border-radius: var(--radius); padding: 18px; }
        .app b { display: block; color: var(--ink); font-size: 15px; }
        .app p { margin: 4px 0 0; font-size: 14px; }
        .app .n { flex-shrink: 0; width: 34px; height: 34px; border-radius: 50%; background: var(--orange-soft); border: 1px solid rgba(207,122,28,.35); color: var(--orange-deep); font-weight: 800; display: grid; place-items: center; font-size: 14px; }

        .quote { border-left: 4px solid var(--orange); padding: 6px 0 6px 28px; margin-top: 30px; max-width: 900px; }
        .quote blockquote { margin: 0; font-family: var(--cond); font-size: clamp(1.6rem, 3vw, 2.4rem); line-height: 1.08; font-weight: 500; color: #fff; text-transform: uppercase; text-wrap: balance; }
        .quote figcaption { margin-top: 14px; font-size: 13px; letter-spacing: .08em; text-transform: uppercase; color: rgba(255,255,255,.6); font-weight: 600; }

        .cta-band { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 22px; border: 1px solid rgba(255,255,255,.16); background: rgba(255,255,255,.05); border-radius: 8px; padding: clamp(24px, 3vw, 36px); margin-top: 34px; }
        .cta-band h3 { margin: 0; font-family: var(--cond); font-size: clamp(1.6rem, 2.6vw, 2.2rem); text-transform: uppercase; color: #fff; line-height: 1; }
        .cta-band p { margin: 8px 0 0; font-size: 14.5px; color: rgba(255,255,255,.7); }
        .cta-band .row { display: flex; flex-wrap: wrap; gap: 12px; }
        .btn-light { background: #fff; color: var(--ink); }
        .btn-light:hover { transform: translateY(-2px); }
        .btn-outline { border: 1px solid rgba(255,255,255,.35); color: #fff; }
        .btn-outline:hover { border-color: #fff; transform: translateY(-2px); }

        footer.site { border-top: 1px solid var(--line); background: #fff; }
        .foot { display: grid; grid-template-columns: 1.2fr .8fr .8fr; gap: 28px; padding: 40px 0 28px; }
        .foot h4 { margin: 0 0 12px; font-size: 12px; letter-spacing: .12em; text-transform: uppercase; color: var(--ink); }
        .foot p, .foot a { font-size: 14px; }
        .foot a { text-decoration: none; color: var(--body); }
        .foot a:hover { color: var(--orange-deep); }
        .foot ul { list-style: none; margin: 0; padding: 0; display: grid; gap: 8px; }
        .legal { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 10px; padding: 18px 0 24px; border-top: 1px solid var(--line); font-size: 13px; color: var(--muted); }

        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(207,122,28,.5); } 70% { box-shadow: 0 0 0 7px rgba(207,122,28,0); } 100% { box-shadow: 0 0 0 0 rgba(207,122,28,0); } }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition-duration: .01ms !important; animation-duration: .01ms !important; }
        }
        @media (max-width: 960px) {
            .nav-links { display: none; }
            .hero-grid { grid-template-columns: 1fr; }
            .card { position: static; max-width: 620px; }
            .grid-3 { grid-template-columns: 1fr; }
            .split { grid-template-columns: 1fr; }
            .foot { grid-template-columns: 1fr; }
        }
        @media (max-width: 600px) {
            .topbar-inner, .nav, .shell { width: min(100% - 32px, 560px); }
            .topbar-inner { font-size: 10px; }
            .nav-cta { padding: 10px 14px; font-size: 12px; }
            .proof { grid-template-columns: 1fr; }
            .proof div + div { border-left: 0; border-top: 1px solid var(--line); }
            .field { flex-direction: column; }
            .actions .btn { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="topbar-inner">
            <span><strong>New website in progress</strong> &nbsp;·&nbsp; UBC-tested · Patented · Made in North America</span>
            <span><a href="tel:+16048425133">+1 604 842 5133</a></span>
        </div>
    </div>

    <header class="site">
        <nav class="nav" aria-label="Primary">
            <a class="brand" href="/" aria-label="Structure Lock home">
                <img src="https://structurelock.com/wp-content/uploads/2022/08/structurelocklogosmall-1-368x25-1-1.png" alt="Structure Lock" onerror="this.style.display='none'">
                <span class="brand-text">
                    <strong>Structure Lock</strong>
                    <small>Steel Joist Bracing</small>
                </span>
            </a>
            <div class="nav-links">
                <a href="#why">Why Structure Lock</a>
                <a href="#compare">Compared</a>
                <a href="#contact">Contact</a>
            </div>
            <a class="nav-cta" href="tel:+16048425133"><span class="dot" aria-hidden="true"></span> Get a quote</a>
        </nav>
    </header>

    <section class="hero">
        <div class="shell hero-grid">
            <div>
                <p class="eyebrow">Patented &middot; UBC seismic-certified &middot; Code-compliant</p>
                <h1>Steel joist bracing that installs in <em>30 seconds</em></h1>
                <p class="lede">The seismic-certified retrofit brace trusted by engineers, contractors, and the <strong>BC Ministry of Education</strong>. <strong>Stronger than wood blocking</strong> — no shrinkage, splitting, or squeak. Our full site is being rebuilt; we are still quoting and shipping.</p>

                <div class="actions">
                    <a class="btn btn-primary" href="tel:+16048425133">Get a quote in 24 hours &rarr;</a>
                    <a class="btn btn-secondary" href="mailto:sales@structurelock.com?subject=Structure%20Lock%20quote%20request">Email our team</a>
                </div>
                <p class="micro">Prefer email? <a href="mailto:sales@structurelock.com">sales@structurelock.com</a> · Mon–Fri, Pacific Time</p>

                <div class="proof" aria-label="Key facts">
                    <div><b>30 sec</b><span>Typical install time</span></div>
                    <div><b>UBC</b><span>Seismic lab certified</span></div>
                    <div><b>100%</b><span>Code-compliant steel</span></div>
                </div>

                <div class="trusted">
                    <p>Specified and trusted by</p>
                    <div class="logos" aria-label="Customer types">
                        <span><i></i>BC Ministry of Education</span>
                        <span><i></i>Structural engineers</span>
                        <span><i></i>School seismic retrofits</span>
                        <span><i></i>Commercial contractors</span>
                    </div>
                </div>
            </div>

            <aside class="card" id="notify">
                <div class="card-top">
                    <h2>Get notified at launch</h2>
                    <span class="pill"><i aria-hidden="true"></i> Coming soon</span>
                </div>
                <p>We are rebuilding structurelock.com with specs, drawings, and case studies. Leave your email and we will notify you the moment it is live.</p>

                <ul class="checklist">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#1f2428"/><path d="M5 8.2l2 2 4-4.4" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Launch alert — one email, no spam
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#1f2428"/><path d="M5 8.2l2 2 4-4.4" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Spec sheets and install guides first
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#1f2428"/><path d="M5 8.2l2 2 4-4.4" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Still quoting now — under 24 hours
                    </li>
                </ul>

                <form class="notify" action="{{ route('subscribe.store') }}" method="post">
                    @csrf
                    <label for="email">Work email</label>
                    <div class="field">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" aria-label="Email address" autocomplete="email" required>
                        <button type="submit">Notify me</button>
                    </div>
                </form>
                @if ($errors->has('email'))
                    <p class="form-note error">{{ $errors->first('email') }}</p>
                @elseif (session('status'))
                    <p class="form-note success">{{ session('status') }}</p>
                @else
                    <p class="form-note">We only email at launch. No newsletters, no sharing.</p>
                @endif

                <div class="card-contact" id="contact">
                    <small>Need a quote today? Talk to a human:</small>
                    <span><a href="tel:+16048425133">+1 604 842 5133</a> &nbsp;·&nbsp; <a href="mailto:sales@structurelock.com">sales@structurelock.com</a></span>
                </div>
            </aside>
        </div>
    </section>

    <section class="block" id="why">
        <div class="shell">
            <p class="kicker">Why Structure Lock</p>
            <h2 class="section-title">Engineered to replace wood blocking — permanently</h2>
            <p class="section-sub">Wood shrinks, splits, and squeaks. Structure Lock is a patented adjustable steel brace that locks joists in place, speeds up inspection, and holds its strength for the life of the building.</p>

            <div class="grid-3">
                <article class="feature">
                    <div class="icon amber" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
                    </div>
                    <h3>30-second install</h3>
                    <p>One brace, one adjustment, locked. No cutting, no shimming, no callbacks. Crews move bay to bay in seconds.</p>
                </article>
                <article class="feature">
                    <div class="icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3>Seismic certified</h3>
                    <p>Tested at the University of British Columbia and trusted in school seismic retrofits across BC. Code-compliant steel throughout.</p>
                </article>
                <article class="feature">
                    <div class="icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 12h4l2-7 4 14 2-7h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3>Silent and stable</h3>
                    <p>Steel does not shrink or split with moisture and seasons. Floors stay tight and quiet — no movement, no squeak.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="block" id="compare" style="padding-top:0">
        <div class="shell">
            <p class="kicker">Honest comparison</p>
            <h2 class="section-title">Steel vs. wood blocking</h2>
            <div class="split">
                <table class="compare" aria-label="Structure Lock versus wood blocking">
                    <thead>
                        <tr><th scope="col">Criteria</th><th scope="col">Structure Lock</th><th scope="col">Wood blocking</th></tr>
                    </thead>
                    <tbody>
                        <tr><th scope="row">Install time</th><td class="yes">~30 seconds</td><td class="no">Cut + fit + nail</td></tr>
                        <tr><th scope="row">Seismic tested</th><td class="yes">UBC lab certified</td><td class="no">Not rated</td></tr>
                        <tr><th scope="row">Shrink / split / squeak</th><td class="yes">None — steel</td><td class="no">Common over time</td></tr>
                        <tr><th scope="row">Adjustable retrofit</th><td class="yes">Yes, locks to fit</td><td class="no">Custom-cut each bay</td></tr>
                        <tr><th scope="row">Inspection</th><td class="yes">Fast, uniform</td><td class="no">Variable</td></tr>
                    </tbody>
                </table>
                <div class="apps">
                    <div class="app"><span class="n">1</span><div><b>School seismic upgrades</b><p>Specified for BC school retrofits where certification and speed matter.</p></div></div>
                    <div class="app"><span class="n">2</span><div><b>Floor &amp; roof joist bracing</b><p>Locks open-web and dimensional joists against rotation and lateral movement.</p></div></div>
                    <div class="app"><span class="n">3</span><div><b>Retrofit &amp; remediation</b><p>Adjustable fit for out-of-true existing framing — no reframing required.</p></div></div>
                    <div class="app"><span class="n">4</span><div><b>New commercial builds</b><p>Uniform, inspectable bracing that keeps crews moving.</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <section class="block band">
        <div class="shell">
            <p class="kicker">Field proven</p>
            <h2 class="section-title">Built for the buildings that cannot fail</h2>
            <figure class="quote">
                <blockquote>“Stronger than wood blocking — no shrink, split, or squeak. Installed in seconds, trusted for decades.”</blockquote>
                <figcaption>Structure Lock · Patented steel joist bracing · Made in North America</figcaption>
            </figure>
            <div class="cta-band">
                <div>
                    <h3>Need bracing before the new site launches?</h3>
                    <p>We are quoting within 24 hours. Send your joist spacing and square footage.</p>
                </div>
                <div class="row">
                    <a class="btn btn-light" href="tel:+16048425133">Call +1 604 842 5133</a>
                    <a class="btn btn-outline" href="mailto:sales@structurelock.com?subject=Structure%20Lock%20quote%20request">Email specs</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="site">
        <div class="shell">
            <div class="foot">
                <div>
                    <h4>Structure Lock</h4>
                    <p>Patented steel joist bracing by Alliance Structural Product Sales Corp. UBC-tested, seismic certified, made in North America.</p>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="tel:+16048425133">+1 604 842 5133</a></li>
                        <li><a href="mailto:sales@structurelock.com">sales@structurelock.com</a></li>
                        <li>Mon–Fri · Pacific Time</li>
                    </ul>
                </div>
                <div>
                    <h4>Launch</h4>
                    <ul>
                        <li><a href="#notify">Get notified</a></li>
                        <li><a href="#why">Why steel bracing</a></li>
                        <li><a href="#compare">Steel vs. wood</a></li>
                    </ul>
                </div>
            </div>
            <div class="legal">
                <span>&copy; {{ date('Y') }} Alliance Structural Product Sales Corp. All rights reserved.</span>
                <span>structurelock.com · Rebuilding now</span>
            </div>
        </div>
    </footer>
</body>
</html>
