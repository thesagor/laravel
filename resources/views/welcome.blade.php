<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Structurelock is building a more considered foundation for the web. Join the launch list.">
    <title>Structurelock — In progress</title>
    <style>
        :root {
            color-scheme: dark;
            --ink: #101315;
            --paper: #e9e5d8;
            --paper-dim: #a7a69d;
            --rule: rgba(233, 229, 216, .17);
            --lime: #c6f36a;
            --coral: #ff795b;
            --panel: #171b1c;
        }

        * { box-sizing: border-box; }
        html { min-height: 100%; }
        body {
            min-height: 100svh;
            margin: 0;
            overflow-x: hidden;
            background: var(--ink);
            color: var(--paper);
            font-family: Arial, Helvetica, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        body::before {
            position: fixed;
            inset: 0;
            z-index: -2;
            background: linear-gradient(rgba(233,229,216,.045) 1px, transparent 1px), linear-gradient(90deg, rgba(233,229,216,.045) 1px, transparent 1px);
            background-size: 42px 42px;
            content: "";
            mask-image: linear-gradient(to bottom, black, transparent 90%);
        }

        body::after {
            position: fixed;
            inset: 0;
            z-index: -1;
            background: radial-gradient(circle at 78% 48%, rgba(198,243,106,.1), transparent 25rem), radial-gradient(circle at 10% 90%, rgba(255,121,91,.08), transparent 22rem);
            content: "";
            pointer-events: none;
        }

        .shell { width: min(1180px, calc(100% - 48px)); min-height: 100svh; margin: 0 auto; display: grid; grid-template-rows: auto 1fr auto; }
        header { display: flex; align-items: center; justify-content: space-between; padding: 30px 0; border-bottom: 1px solid var(--rule); }
        .brand { display: inline-flex; align-items: center; gap: 11px; color: var(--paper); font-size: 13px; font-weight: 700; letter-spacing: .18em; text-transform: uppercase; }
        .brand-mark { width: 25px; height: 25px; display: grid; place-items: center; border: 1px solid var(--lime); color: var(--lime); font: 16px/1 Georgia, serif; transform: rotate(45deg); }
        .brand-mark span { transform: rotate(-45deg); }
        .status { display: flex; align-items: center; gap: 9px; color: var(--paper-dim); font: 10px/1.4 monospace; letter-spacing: .14em; text-transform: uppercase; }
        .status i { width: 7px; height: 7px; border-radius: 50%; background: var(--lime); box-shadow: 0 0 15px var(--lime); }

        main { display: grid; grid-template-columns: minmax(0, 1fr) minmax(360px, .85fr); align-items: center; gap: clamp(42px, 8vw, 120px); padding: clamp(65px, 11vh, 130px) 0 clamp(70px, 12vh, 140px); }
        .eyebrow { display: flex; align-items: center; gap: 12px; margin: 0 0 28px; color: var(--lime); font: 11px/1.4 monospace; letter-spacing: .16em; text-transform: uppercase; }
        .eyebrow::before { width: 34px; height: 1px; background: var(--lime); content: ""; }
        h1 { max-width: 700px; margin: 0; font: 400 clamp(4rem, 9vw, 8.5rem)/.83 Georgia, "Times New Roman", serif; letter-spacing: -.08em; }
        h1 em { color: var(--coral); font-style: italic; }
        .intro { max-width: 470px; margin: 36px 0 0; color: var(--paper-dim); font-size: clamp(1rem, 1.5vw, 1.18rem); line-height: 1.65; }
        .notify { margin-top: 38px; }
        .notify a { display: inline-flex; align-items: center; justify-content: center; min-height: 48px; padding: 0 19px; background: var(--lime); color: var(--ink); font-size: 12px; font-weight: 700; letter-spacing: .04em; text-decoration: none; transition: transform .2s ease, background .2s ease; }
        .notify a:hover { background: #dcff98; transform: translateY(-3px); }
        .notify a:focus-visible { outline: 2px solid var(--coral); outline-offset: 5px; }

        .mechanism { position: relative; min-height: 425px; display: grid; place-items: center; }
        .mechanism::before, .mechanism::after { position: absolute; border: 1px solid var(--rule); border-radius: 50%; content: ""; transform: rotate(-24deg); }
        .mechanism::before { width: 320px; height: 410px; }
        .mechanism::after { width: 410px; height: 320px; transform: rotate(24deg); }
        .plate { position: relative; width: 226px; height: 226px; display: grid; place-items: center; border: 1px solid var(--lime); border-radius: 50%; background: var(--panel); box-shadow: 0 0 75px rgba(198,243,106,.13), inset 0 0 50px rgba(198,243,106,.06); }
        .plate::before { position: absolute; inset: 16px; border: 1px dashed rgba(198,243,106,.5); border-radius: 50%; animation: rotate 28s linear infinite; content: ""; }
        .plate::after { position: absolute; width: 3px; height: 3px; top: 9px; left: calc(50% - 1px); border-radius: 50%; background: var(--coral); box-shadow: 0 0 13px var(--coral); content: ""; }
        .keyhole { position: relative; z-index: 1; width: 44px; height: 66px; border: 2px solid var(--paper); border-radius: 25px 25px 7px 7px; }
        .keyhole::after { position: absolute; width: 10px; height: 28px; bottom: -18px; left: 15px; background: var(--paper); content: ""; }
        .marker { position: absolute; color: var(--paper-dim); font: 10px/1.3 monospace; letter-spacing: .12em; text-transform: uppercase; }
        .marker::before { display: inline-block; width: 5px; height: 5px; margin: 0 8px 2px 0; border-radius: 50%; background: var(--lime); content: ""; }
        .marker.one { top: 12%; right: 4%; }
        .marker.two { bottom: 13%; left: 3%; }
        .marker.three { right: 8%; bottom: 23%; color: var(--coral); }
        .marker.three::before { background: var(--coral); }

        .specs { display: grid; grid-template-columns: repeat(3, 1fr); max-width: 540px; margin-top: 66px; border-top: 1px solid var(--rule); }
        .spec { padding: 14px 15px 0 0; color: var(--paper-dim); font: 10px/1.4 monospace; letter-spacing: .1em; text-transform: uppercase; }
        .spec + .spec { padding-left: 15px; border-left: 1px solid var(--rule); }
        .spec strong { display: block; margin-top: 8px; color: var(--paper); font: 16px/1.1 Georgia, serif; letter-spacing: -.02em; text-transform: none; }
        .manifesto { max-width: 540px; margin: 50px 0 0; padding: 20px 0 0 20px; border-top: 1px solid var(--rule); border-left: 2px solid var(--coral); }
        .manifesto p { margin: 0; color: var(--paper); font: italic clamp(1.25rem, 2vw, 1.65rem)/1.22 Georgia, serif; letter-spacing: -.025em; }
        .manifesto cite { display: block; margin-top: 13px; color: var(--paper-dim); font: 10px/1.4 monospace; letter-spacing: .12em; text-transform: uppercase; }
        footer { display: flex; justify-content: space-between; gap: 20px; padding: 19px 0 25px; border-top: 1px solid var(--rule); color: var(--paper-dim); font: 10px/1.5 monospace; letter-spacing: .1em; text-transform: uppercase; }
        footer span:last-child { color: var(--coral); }
        @keyframes rotate { to { transform: rotate(360deg); } }
        @media (prefers-reduced-motion: reduce) { .plate::before { animation: none; } *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; } }
        @media (forced-colors: active) { .brand-mark, .plate, .plate::before, .mechanism::before, .mechanism::after { border-color: CanvasText; } .notify a { border: 1px solid ButtonText; } }
        @media (max-width: 800px) { main { display: block; padding: 80px 0 70px; } .mechanism { min-height: 360px; margin-top: 65px; transform: scale(.86); } .specs { margin-top: 45px; } }
        @media (max-width: 560px) { .shell { width: min(100% - 32px, 520px); } header { padding: 23px 0; } .status { display: none; } h1 { font-size: clamp(3.7rem, 18vw, 6rem); } .intro { margin-top: 29px; } .notify a { width: 100%; } .mechanism { min-height: 290px; margin: 42px -34px 0; transform: scale(.68); } .specs { grid-template-columns: 1fr; margin-top: 10px; } .spec, .spec + .spec { padding: 13px 0; border-left: 0; border-bottom: 1px solid var(--rule); } footer { display: block; } footer span { display: block; } footer span + span { margin-top: 8px; } }
    </style>
</head>
<body>
    <div class="shell">
        <header>
            <div class="brand"><span class="brand-mark" aria-hidden="true"><span>+</span></span> Structurelock</div>
            <div class="status"><i aria-hidden="true"></i> Build 01 / In progress</div>
        </header>

        <main>
            <section>
                <p class="eyebrow">A stronger foundation is forming</p>
                <h1>A better<br><em>structure</em><br>is coming.</h1>
                <p class="intro">Structurelock is taking shape behind the scenes: thoughtful tools, clear systems, and a little less friction for the people building the web.</p>
                <div class="notify"><a href="mailto:hello@structurelock.ca?subject=Keep%20me%20posted">Keep me posted <span aria-hidden="true">&nbsp;↗</span></a></div>
                <div class="specs" aria-label="Project progress">
                    <div class="spec">Foundation<strong>Set</strong></div>
                    <div class="spec">Systems<strong>Testing</strong></div>
                    <div class="spec">Launch<strong>Soon</strong></div>
                </div>
                <blockquote class="manifesto">
                    <p>“Build the foundation right, and everything that follows has somewhere to stand.”</p>
                    <cite>— The Structurelock principle</cite>
                </blockquote>
            </section>

            <aside class="mechanism" aria-hidden="true">
                <span class="marker one">Foundation</span>
                <span class="marker two">Testing</span>
                <span class="marker three">Launch</span>
                <div class="plate"><div class="keyhole"></div></div>
            </aside>
        </main>

        <footer><span>© {{ date('Y') }} Structurelock</span><span>structurelock.ca / soon</span></footer>
    </div>
</body>
</html>
