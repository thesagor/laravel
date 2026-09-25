<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Structurelock is coming soon.">
    <title>Structurelock — Coming soon</title>
    <style>
        :root {
            color-scheme: dark;
            --ink: #f4f0e8;
            --muted: #9b9a92;
            --line: rgba(244, 240, 232, .16);
            --night: #101211;
            --green: #b7f36b;
            --orange: #ff714b;
        }

        * { box-sizing: border-box; }
        html { min-height: 100%; }
        body {
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
            background: var(--night);
            color: var(--ink);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        body::before {
            position: fixed;
            inset: 0;
            z-index: -2;
            background:
                radial-gradient(circle at 15% 12%, rgba(183, 243, 107, .1), transparent 25rem),
                radial-gradient(circle at 90% 86%, rgba(255, 113, 75, .09), transparent 28rem),
                linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
            background-size: auto, auto, 52px 52px, 52px 52px;
            content: "";
            mask-image: linear-gradient(to bottom, black, transparent 92%);
        }

        .shell {
            width: min(1180px, calc(100% - 48px));
            min-height: 100vh;
            margin: 0 auto;
            display: grid;
            grid-template-rows: auto 1fr auto;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 34px 0;
            border-bottom: 1px solid var(--line);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 11px;
            color: var(--ink);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .brand-mark {
            width: 26px;
            height: 26px;
            display: grid;
            place-items: center;
            border: 1px solid var(--green);
            color: var(--green);
            font-size: 12px;
            line-height: 1;
            transform: rotate(45deg);
        }

        .brand-mark span { transform: rotate(-45deg); }
        .status { color: var(--muted); font: 11px/1.4 ui-monospace, SFMono-Regular, Menlo, monospace; letter-spacing: .11em; text-transform: uppercase; }
        .status i { display: inline-block; width: 7px; height: 7px; margin-right: 8px; border-radius: 50%; background: var(--green); box-shadow: 0 0 14px var(--green); }

        main {
            display: grid;
            grid-template-columns: minmax(0, 1.22fr) minmax(280px, .78fr);
            align-items: center;
            gap: 10vw;
            padding: 9vh 0 11vh;
        }

        .eyebrow { margin: 0 0 25px; color: var(--green); font: 12px/1.4 ui-monospace, SFMono-Regular, Menlo, monospace; letter-spacing: .14em; text-transform: uppercase; }
        h1 { max-width: 720px; margin: 0; font-family: Georgia, "Times New Roman", serif; font-size: clamp(4.3rem, 10vw, 9.5rem); font-weight: 400; letter-spacing: -.075em; line-height: .83; }
        h1 em { color: var(--orange); font-style: italic; }
        .intro { max-width: 480px; margin: 38px 0 0; color: var(--muted); font-size: clamp(1rem, 1.7vw, 1.22rem); line-height: 1.65; }

        .orbital { position: relative; min-height: 390px; display: grid; place-items: center; }
        .orbital::before, .orbital::after { position: absolute; border: 1px solid var(--line); border-radius: 50%; content: ""; transform: rotate(-28deg); }
        .orbital::before { width: 295px; height: 420px; }
        .orbital::after { width: 420px; height: 295px; transform: rotate(28deg); }
        .core { position: relative; width: 174px; height: 174px; display: grid; place-items: center; border: 1px solid var(--green); border-radius: 50%; background: rgba(183,243,107,.07); box-shadow: 0 0 70px rgba(183,243,107,.13), inset 0 0 35px rgba(183,243,107,.08); }
        .core::before { position: absolute; inset: 15px; border: 1px dashed rgba(183,243,107,.42); border-radius: 50%; content: ""; animation: spin 24s linear infinite; }
        .core-label { text-align: center; color: var(--green); font: 11px/1.5 ui-monospace, SFMono-Regular, Menlo, monospace; letter-spacing: .13em; text-transform: uppercase; }
        .core-label strong { display: block; margin-top: 5px; color: var(--ink); font-family: Georgia, serif; font-size: 20px; font-weight: 400; letter-spacing: 0; text-transform: none; }
        .satellite { position: absolute; width: 8px; height: 8px; border-radius: 50%; background: var(--orange); box-shadow: 0 0 18px var(--orange); }
        .satellite.one { top: 16%; right: 11%; }
        .satellite.two { bottom: 15%; left: 9%; width: 5px; height: 5px; background: var(--green); box-shadow: 0 0 16px var(--green); }

        .notify { display: flex; gap: 10px; max-width: 500px; margin-top: 42px; }
        .notify a { display: inline-flex; align-items: center; justify-content: center; min-height: 50px; padding: 0 20px; border: 1px solid var(--green); color: var(--night); background: var(--green); font-size: 13px; font-weight: 700; text-decoration: none; transition: transform .2s, background .2s; }
        .notify a:hover, .notify a:focus-visible { background: #d1ff91; transform: translateY(-2px); }
        .notify a:focus-visible { outline: 2px solid var(--orange); outline-offset: 4px; }

        footer { display: flex; justify-content: space-between; gap: 20px; padding: 20px 0 26px; border-top: 1px solid var(--line); color: var(--muted); font: 11px/1.5 ui-monospace, SFMono-Regular, Menlo, monospace; letter-spacing: .08em; text-transform: uppercase; }
        footer span:last-child { color: var(--orange); }

        @keyframes spin { to { transform: rotate(360deg); } }
        @media (prefers-reduced-motion: reduce) { .core::before { animation: none; } *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; } }
        @media (max-width: 760px) {
            .shell { width: min(100% - 32px, 560px); }
            header { padding: 24px 0; }
            .status { display: none; }
            main { display: block; padding: 13vh 0 9vh; }
            h1 { font-size: clamp(4rem, 19vw, 7rem); }
            .intro { margin-top: 30px; }
            .orbital { min-height: 300px; margin: 50px 0 12px; transform: scale(.78); }
            .notify a { width: 100%; }
            footer { display: block; }
            footer span { display: block; }
            footer span + span { margin-top: 8px; }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header>
            <div class="brand"><span class="brand-mark"><span>+</span></span> Structurelock</div>
            <div class="status"><i></i> Building in public</div>
        </header>

        <main>
            <section>
                <p class="eyebrow">A new foundation is forming</p>
                <h1>Something<br><em>solid</em><br>is coming.</h1>
                <p class="intro">Structurelock is being shaped with care. We are putting the final pieces in place and will be ready to welcome you soon.</p>
                <div class="notify"><a href="mailto:hello@structurelock.ca?subject=Keep%20me%20posted">Keep me posted <span aria-hidden="true">&nbsp;↗</span></a></div>
            </section>

            <aside class="orbital" aria-label="Structurelock is under construction">
                <span class="satellite one"></span>
                <span class="satellite two"></span>
                <div class="core"><div class="core-label">Status<strong>Almost ready</strong></div></div>
            </aside>
        </main>

        <footer><span>© {{ date('Y') }} Structurelock</span><span>structurelock.ca / soon</span></footer>
    </div>
</body>
</html>
