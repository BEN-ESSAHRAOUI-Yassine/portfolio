@extends('layouts.app')

@section('title', 'Yassine Ben Essahraoui | Portfolio')

@section('content')
<div x-data="themeApp()" x-init="init()" :class="dark ? 'dark' : ''" x-cloak>
<style>
:root{--bg:#f8fafc;--card:#ffffff;--text:#0f172a;--muted:#64748b;--accent:#2563eb;}
.dark{--bg:#0b1220;--card:rgba(255,255,255,.06);--text:#e5e7eb;--muted:#94a3b8;--accent:#38bdf8;}
body{background:var(--bg);color:var(--text);font-family:Inter,system-ui,sans-serif} .wrap{max-width:1100px;margin:auto;padding:24px}
.card{background:var(--card);border:1px solid rgba(148,163,184,.15);border-radius:22px;padding:24px;backdrop-filter:blur(10px)}
.btn{display:inline-block;padding:12px 18px;border-radius:14px;text-decoration:none;font-weight:600}
.btn-primary{background:var(--accent);color:#fff}.btn-light{border:1px solid rgba(148,163,184,.25);color:var(--text)}
.grid{display:grid;gap:20px}.g2{grid-template-columns:repeat(auto-fit,minmax(280px,1fr))}
.small{color:var(--muted);font-size:14px}.section{padding:28px 0}.hero{padding:56px 0}.badge{padding:6px 10px;border-radius:999px;background:rgba(37,99,235,.12);display:inline-block}
nav{display:flex;justify-content:space-between;align-items:center;padding:10px 0;position:sticky;top:0;background:var(--bg)}
a{color:inherit} h1{font-size:52px;line-height:1.05;margin:10px 0} h2{font-size:30px;margin:0 0 14px} h3{margin:0 0 10px}
@media(max-width:700px){h1{font-size:38px}}
</style>

<div class="wrap">
<nav x-data="{open:false}">
<div><strong>YBE</strong></div>
<div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">
<a href="#projects">Projects</a>
<a href="#experience">Experience</a><button class="btn btn-light" @click="lang = lang==='en' ? 'fr' : 'en'" x-text="lang==='en' ? 'FR' : 'EN'"></button>
<a href="#contact">Contact</a>
<button class="btn btn-light" @click="toggle()" x-text="dark ? 'Simple Theme' : 'WOW Theme'"></button>
</div>
</nav>

<section class="hero">
<div class="grid g2" style="align-items:center">
<span class="badge">4+ Years Professional Experience</span>
<h1>Yassine Ben Essahraoui</h1>
<p style="font-size:22px">Full Stack Developer • Laravel • PHP • Automation • Telecom Solutions</p>
<div style="display:flex;gap:8px;flex-wrap:wrap;margin:10px 0"><span class="badge">Laravel</span><span class="badge">Telecom</span><span class="badge">Automation</span><span class="badge">IT Support</span><span class="badge">Problem Solver</span></div>
<p class="small">I build web applications and internal tools that improve workflows, automate repetitive tasks, and solve real operational problems.</p>
<p class="small" x-text="text"></p><div style="margin-top:20px;display:flex;gap:12px;flex-wrap:wrap">
<a class="btn btn-primary" href="#projects">View Projects</a>
<a class="btn btn-light" :href="currentCV()" download onclick="trackCV()">Download CV</a>
</div>
</div><div class="card"><h2>Quick Stats</h2><p><strong x-text="stats.years"></strong>+ Years Experience</p><p><strong x-text="stats.projects"></strong>+ Projects & Tools</p><p class="small">Telecom • Web • Automation</p></div></div></section>

<section class="section">
<div class="card">
<h2>About Me</h2>
<p>I am a full stack developer with strong real-world experience in telecom operations and process automation. I created internal tools using VBA, AutoLISP and Python before focusing on modern web development with Laravel.</p>
</div>
</section>

<section class="section" id="experience">
<h2>Experience</h2>
<p class="small">Shareable Modes: /developer • /telecom • /it-support • /automation</p>
<div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:16px">
<button class="btn btn-light" @click="mode='dev'">Development</button>
<button class="btn btn-light" @click="mode='telecom'">Telecom</button>
<button class="btn btn-light" @click="mode='it'">IT Support</button>
<button class="btn btn-light" @click="mode='auto'">Automation</button>
</div>
<div x-show="mode==='dev'" class="grid g2">
<div class="card"><h3>Developer Profile</h3><p>Laravel, PHP, MySQL, Git, responsive UI, internal tools and business applications.</p></div>
<div class="card"><h3>Projects Focus</h3><p>Web apps, CRUD systems, dashboards, automation platforms.</p></div>
</div>
<div x-show="mode==='telecom'" class="grid g2">
<div class="card"><h3>Optical Telecom</h3><p class="small">Référent BE FTTH • 2022 — 2024</p><p>FTTH studies, planning, GIS, AutoCAD, client deliverables, team support.</p></div>
<div class="card"><h3>ID2S Telecom</h3><p class="small">Chargé d'études FTTH • 2020 — 2022</p><p>Field coordination, quality control, operators projects, reporting.</p></div>
</div>
<div x-show="mode==='it'" class="grid g2">
<div class="card"><h3>IT Support</h3><p>Hardware maintenance, Windows/Linux deployment, users support, troubleshooting.</p></div>
<div class="card"><h3>Networks</h3><p>LAN cabling, switches, routers, systems reliability.</p></div>
</div>
<div x-show="mode==='auto'" class="grid g2">
<div class="card"><h3>Industrial Automation</h3><p>PLC systems, supervision, diagnostics, process optimization.</p></div>
<div class="card"><h3>Electrical Maintenance</h3><p>Industrial troubleshooting, preventive maintenance, safety compliance.</p></div>
</div>
</section>

<section class="section" id="projects">
<h2>Projects</h2>
<div class="grid g2">
<div class="card"><h3>GameCafé Manager</h3><p>Reservation and session management web application.</p><p class="small">PHP • MySQL • JavaScript</p></div>
<div class="card"><h3>Personal Blog</h3><p>Laravel MVC blog with CRUD, search, filters and authentication.</p><p class="small">Laravel • Blade • Tailwind</p></div>
<div class="card"><h3>Telecom Automation Suite</h3><p>Internal tools for FTTH engineering teams: Excel→DXF, AutoCAD scripts, GIS processing.</p><p class="small">VBA • Python • AutoLISP</p></div>
</div>
</section>

<section class="section">
<h2>Skills</h2>
<div class="grid g2">
<div class="card"><strong>Web</strong><p>HTML, CSS, JavaScript, PHP, Laravel, MySQL</p></div>
<div class="card"><strong>Automation</strong><p>VBA, Python, AutoLISP</p></div>
<div class="card"><strong>Tools</strong><p>Git, GitHub, Jira, Agile, Composer, VS Code</p></div>
<div class="card"><strong>Domain</strong><p>FTTH, GIS, Process Optimization</p></div>
</div>
</section>

<section class="section">
<h2>Testimonials</h2>
<div class="grid g2">
<div class="card"><p>"Reliable, autonomous and solution-oriented."</p><p class="small">Former Colleague</p></div>
<div class="card"><p>"Strong technical mindset with real operational understanding."</p><p class="small">Project Environment Feedback</p></div>
</div>
</section>

<section class="section">
<h2>Latest Insights</h2>
<div class="grid g2">
<div class="card"><h3>How Automation Saved Engineering Time</h3><p class="small">A short article section for SEO and credibility.</p></div>
<div class="card"><h3>Why Laravel Is Great for Internal Tools</h3><p class="small">Share your expertise and attract recruiters.</p></div>
</div>
</section>

<section class="section" id="contact">
<div class="card">
<h2>Let's Work Together • Available for Opportunities</h2>
<p>Email: ybenessahraoui@gmail.com</p>
<p>LinkedIn • GitHub • CV Download</p>
</div>
</section>

<section class="section">
<h2>Featured Projects</h2>
<div class="grid g2">
<div class="card"><img src="/images/gamecafe.jpg" style="width:100%;border-radius:16px;margin-bottom:12px"><h3>GameCafé Manager</h3><p>Live reservations dashboard with modern UX.</p></div>
<div class="card"><img src="/images/blog.jpg" style="width:100%;border-radius:16px;margin-bottom:12px"><h3>Personal Blog</h3><p>SEO-ready Laravel blog platform.</p></div>
</div>
</section>

<section class="section">
<div class="card">
<h2>Contact Me</h2>
<form method="POST" action="/contact" style="display:grid;gap:12px">
@csrf
<input name="name" required placeholder="Your Name" style="padding:12px;border-radius:12px;border:1px solid #cbd5e1">
<input type="email" name="email" required placeholder="Your Email" style="padding:12px;border-radius:12px;border:1px solid #cbd5e1">
<textarea name="message" required placeholder="Your Message" rows="5" style="padding:12px;border-radius:12px;border:1px solid #cbd5e1"></textarea>
<button class="btn btn-primary">Send Message</button>
</form>
</div>
</section>
</div>
<footer class="wrap small" style="padding-bottom:40px">© 2026 Yassine Ben Essahraoui • Built with Laravel • Optimized for Recruiters</footer>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Person","name":"Yassine Ben Essahraoui","jobTitle":"Full Stack Developer","email":"ybenessahraoui@gmail.com"}</script>

<script>
function trackCV(){localStorage.setItem('cv_downloaded','1');localStorage.setItem('last_mode',document.body.innerText.includes('Developer')?'dev':'other')}
function themeApp(){return{dark:false,lang:'en',mode:'dev',text:'',words:['Laravel Developer','Automation Builder','Problem Solver'],i:0,j:0,stats:{years:0,projects:0},init(){this.dark=localStorage.getItem('theme')==='dark';const p=window.location.pathname.replace('/','');if(p==='telecom')this.mode='telecom';if(p==='it-support')this.mode='it';if(p==='automation')this.mode='auto';this.type();this.count()},toggle(){this.dark=!this.dark;localStorage.setItem('theme',this.dark?'dark':'light')},currentCV(){if(this.mode==='telecom')return '/cv-telecom.pdf';if(this.mode==='it')return '/cv-it.pdf';if(this.mode==='auto')return '/cv-automation.pdf';return '/cv-dev.pdf'},type(){setInterval(()=>{let w=this.words[this.i];this.text=w.slice(0,this.j++);if(this.j>w.length+1){this.i=(this.i+1)%this.words.length;this.j=0;}},120)},count(){let a=setInterval(()=>{if(this.stats.years<4)this.stats.years++;if(this.stats.projects<12)this.stats.projects++;if(this.stats.years>=4&&this.stats.projects>=12)clearInterval(a)},80)}}}
</script>
</div>
@endsection
