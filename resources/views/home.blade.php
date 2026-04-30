@extends('layouts.app')

@section('title', 'Yassine Ben Essahraoui | Portfolio')

@section('content')
<div x-data="themeApp()" x-init="init()" :class="dark ? 'dark' : ''" x-cloak>

<style>
/* ===== ROOT ===== */
:root{
--bg:#f8fafc;
--text:#0f172a;
--card:#ffffff;
--muted:#64748b;
--accent:#2563eb;
}

/* ===== WOW MODE ===== */
.dark{
--bg:#020617;
--text:#e2e8f0;
--card:rgba(255,255,255,0.05);
--muted:#94a3b8;
--accent:#22c55e;
}

/* ===== GLOBAL ===== */
body{
background:var(--bg);
color:var(--text);
font-family:Inter,system-ui;
overflow-x:hidden;
}

/* ===== ANIMATED BACKGROUND (WOW) ===== */
.dark body{
background: radial-gradient(circle at 20% 20%, rgba(34,197,94,0.15), transparent),
radial-gradient(circle at 80% 0%, rgba(56,189,248,0.15), transparent),
#020617;
}

/* ===== LAYOUT ===== */
.wrap{max-width:1200px;margin:auto;padding:40px 20px}
.grid{display:grid;gap:30px}
.g2{grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}

/* ===== NAV ===== */
nav{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:40px;
padding:14px 20px;
border-radius:16px;
background:rgba(255,255,255,0.6);
backdrop-filter:blur(10px);
}
.dark nav{
background:rgba(255,255,255,0.05);
border:1px solid rgba(255,255,255,0.1);
}

nav a{
opacity:.7;
}
nav a:hover{opacity:1}

/* ===== BUTTONS ===== */
.btn{
padding:10px 16px;
border-radius:10px;
font-weight:600;
cursor:pointer;
transition:.2s;
}
.btn-primary{
background:var(--accent);
color:#fff;
box-shadow:0 0 20px rgba(34,197,94,.4);
}
.btn-light{
border:1px solid rgba(255,255,255,0.2);
background:transparent;
}

/* ===== HERO ===== */
.hero{
padding:80px 0;
}

/* ===== TERMINAL CARD ===== */
.terminal{
background:rgba(0,0,0,0.6);
border-radius:16px;
padding:20px;
font-family:monospace;
color:#22c55e;
border:1px solid rgba(255,255,255,0.1);
box-shadow:0 0 40px rgba(34,197,94,0.2);
}

/* ===== CARDS ===== */
.card{
background:var(--card);
padding:20px;
border-radius:16px;
border:1px solid rgba(255,255,255,0.1);
transition:.3s;
}
.card:hover{
transform:translateY(-6px);
box-shadow:0 20px 40px rgba(0,0,0,0.2);
}

/* ===== TYPO ===== */
h1{
font-size:60px;
font-weight:800;
}
h2{
font-size:30px;
margin-bottom:20px;
}
.small{
color:var(--muted);
}

/* ===== BADGES ===== */
.badge{
padding:6px 10px;
border-radius:999px;
background:rgba(34,197,94,0.2);
}

/* ===== SECTION ===== */
.section{
padding:60px 0;
border-bottom:1px solid rgba(255,255,255,0.05);
}
</style>

<div class="wrap">

<!-- NAV -->
<nav>
<div><strong>YBE</strong></div>
<div style="display:flex;gap:12px">
<a href="#projects">Projects</a>
<a href="#experience">Experience</a>

<button class="btn btn-light"
@click="lang = lang==='en' ? 'fr' : 'en'"
x-text="lang==='en' ? 'FR' : 'EN'"></button>

<button class="btn btn-primary"
@click="toggle()"
x-text="dark ? 'Simple' : 'WOW'"></button>
</div>
</nav>

<!-- HERO -->
<section class="hero">
<div class="grid g2">

<div>
<span class="badge">4+ Years Experience</span>

<h1>Yassine</h1>
<h1 style="color:var(--accent)">Ben Essahraoui</h1>

<p class="small" style="margin:20px 0">
Full Stack Developer • Laravel • Automation • Telecom Solutions
</p>

<div style="display:flex;gap:10px;flex-wrap:wrap">
<span class="badge">Laravel</span>
<span class="badge">Automation</span>
<span class="badge">Telecom</span>
</div>

<p class="small" x-text="text"></p>

<div style="margin-top:20px">
<a class="btn btn-primary" href="#projects">View Projects</a>
</div>
</div>

<!-- TERMINAL -->
<div class="terminal">
<pre>
const developer = {
 name: "Yassine",
 stack: ["Laravel","PHP","Automation"],
 experience: "4+ years",
 status: "Available"
}
</pre>
</div>

</div>
</section>

<!-- EXPERIENCE -->
<section class="section" id="experience">
<h2>Experience</h2>

<div style="display:flex;gap:10px;margin-bottom:20px">
<button class="btn btn-light" @click="mode='dev'">Dev</button>
<button class="btn btn-light" @click="mode='telecom'">Telecom</button>
<button class="btn btn-light" @click="mode='it'">IT</button>
</div>

<div class="grid g2">
<div class="card">
<h3>Developer</h3>
<p>Laravel, PHP, automation tools.</p>
</div>
<div class="card">
<h3>Telecom</h3>
<p>FTTH engineering & GIS tools.</p>
</div>
</div>
</section>

<!-- PROJECTS -->
<section class="section" id="projects">
<h2>Projects</h2>

<div class="grid g2">
<div class="card">
<h3>GameCafé Manager</h3>
<p>Reservation system</p>
</div>

<div class="card">
<h3>Laravel Blog</h3>
<p>Full CRUD system</p>
</div>
</div>
</section>

</div>

<footer class="wrap small">© 2026 Yassine</footer>

@verbatim
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Person","name":"Yassine"}
</script>
@endverbatim

<script>
function themeApp(){
return{
dark:true,
lang:'en',
mode:'dev',
text:'',
words:['Laravel Dev','Automation Builder','Problem Solver'],
i:0,j:0,

init(){
this.type()
},

toggle(){
this.dark=!this.dark
},

type(){
setInterval(()=>{
let w=this.words[this.i]
this.text=w.slice(0,this.j++)
if(this.j>w.length){
this.i=(this.i+1)%this.words.length
this.j=0
}
},100)
}
}
}
</script>

</div>
@endsection