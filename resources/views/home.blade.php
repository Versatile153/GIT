<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <!--
    - favicon
  -->

  <style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--imperial-red_12: hsla(357, 86%, 57%, 0.12);
--pacific-blue_12: hsla(188, 78%, 41%, 0.12);
--davys-gray_12: hsla(210, 9%, 31%, 0.12);
--imperial-red: hsl(357, 86%, 57%);
--sonic-sliver: hsl(0, 0%, 47%);
--pacific-blue: hsl(188, 78%, 41%);
--blue-ryb_12: hsla(220, 100%, 50%, 0.12);
--space-cadet: hsl(220, 41%, 20%);
--eerie-black: hsl(214, 10%, 13%);
--davys-gray: hsl(210, 9%, 31%);
--emerald_12: hsla(144, 62%, 53%, 0.12);
--cool-gray: hsl(225, 11%, 59%);
--cultured: hsl(225, 20%, 96%);
--blue-ryb: hsl(220, 100%, 50%);
--black_08: hsla(0, 0%, 0%, 0.06);
--black_12: hsla(0, 0%, 0%, 0.12);
--coral_12: hsla(15, 100%, 65%, 0.12);
--sunglow: hsl(44, 100%, 61%);
--emerald: hsl(144, 62%, 53%);
--onyx-2: hsl(210, 10%, 23%);
--coral: hsl(15, 100%, 65%);
--white: hsl(0, 0%, 100%);
--onyx: hsl(207, 8%, 21%);

/**
 * typography
 */

--ff-vietnam: "Be Vietnam Pro", sans-serif;

--fs-1: 1.563rem;
--fs-2: 1.5rem;
--fs-3: 1.25rem;
--fs-4: 1.078rem;
--fs-5: 1rem;
--fs-6: 0.938rem;
--fs-7: 0.875rem;
--fs-8: 0.844rem;
--fs-9: 0.813rem;
--fs-10: 0.769rem;

--fw-500: 500;
--fw-600: 600;

/**
 * transition
 */

--transition: 0.25s ease;
--cubic-out: cubic-bezier(0.45, 0.85, 0.5, 1);
--cubic-in: cubic-bezier(0.5, 0, 0.50, 0.95);

/**
 * radius
 */

--radius-6: 6px;

/**
 * shadow
 */

--shadow-1: 0 12px 20px hsla(210, 10%, 23%, 0.07);
--shadow-2: 0 2px 10px hsla(0, 0%, 0%, 0.04);
--shadow-3: 0 2px 20px var(--black_08);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*, *::before, *::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a { text-decoration: none; }

a,
img,
span,
data,
time,
input,
button,
span.icon { display: block; }

button {
font: inherit;
background: none;
border: none;
cursor: pointer;
text-align: left;
}

html {
font-family: var(--ff-vietnam);
scroll-behavior: smooth;
}

body {
padding-block-start: 72px;
background: var(--cultured);
}

:focus-visible {
outline: 2px solid var(--onyx);
outline-offset: 1px;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background: hsl(0, 0%, 95%); }

::-webkit-scrollbar-thumb { background: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.icon-box { font-variation-settings: 'wght' 300; }

.icon-box .icon { font-size: 22px; }

.h2,
.h3 {
color: var(--onyx-2);
font-weight: var(--fw-600);
}

.h2 { font-size: var(--fs-3); }

.card {
background: var(--white);
position: relative;
padding: 24px;
border-radius: var(--radius-6);
box-shadow: var(--shadow-2);
}

.card-menu-btn {
position: absolute;
top: 16px;
right: 16px;
color: var(--cool-gray);
padding: 6px;
border-radius: var(--radius-6);
}

.card-menu-btn:is(:hover, :focus) { background: var(--black_08); }

.ctx-menu {
background: var(--white);
position: absolute;
top: 55px;
right: 16px;
width: 180px;
padding: 10px 5px;
box-shadow: var(--shadow-1);
border-radius: var(--radius-6);
display: none;
}

.ctx-menu.active { display: block; }

.ctx-menu-btn {
color: var(--color, var(--sonic-sliver));
font-size: var(--fs-6);
display: flex;
justify-content: flex-start;
align-items: center;
width: 100%;
gap: 8px;
padding: 5px 25px;
border-radius: var(--radius-6);
}

.ctx-menu-btn:is(:hover, :focus) {
color: var(--hover-color, var(--eerie-black));
background: var(--black_08);
}

.ctx-menu-btn.red {
--hover-color: var(--imperial-red);
--color: var(--imperial-red);
}

.divider {
height: 1px;
background: var(--bg, var(--black_08));
margin-block: var(--mb, 8px);
}

.card-divider {
--bg: var(--black_12);
--mb: 25px;
}

.section-title-wrapper {
padding-block: 25px;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
align-items: center;
gap: 5px;
}

.section-title {
color: var(--onyx);
font-size: var(--fs-5);
font-weight: var(--fw-600);
}

.btn {
display: flex;
align-items: center;
gap: 5px;
font-size: var(--fs-9);
font-weight: var(--fw-600);
padding: 8px 16px;
border-radius: var(--radius-6);
}

.btn .icon {
font-size: 16px;
font-variation-settings: 'wght' 400;
}

.btn-link { color: var(--blue-ryb); }

.btn-link:is(:hover, :focus) { background: var(--blue-ryb_12); }

.btn-primary {
color: var(--blue-ryb);
border: 1px solid var(--blue-ryb);
transition: var(--transition);
}

.btn-primary:is(:hover, :focus) {
background: var(--blue-ryb);
color: var(--white);
box-shadow: 0 10px 10px -8px var(--blue-ryb);
}

.card-badge {
background: var(--bg, var(--davys-gray_12));
color: var(--color, var(--davys-gray));
font-size: var(--fs-10);
font-weight: var(--fw-600);
width: max-content;
padding: 3px 8px;
border-radius: var(--radius-6);
}

.card-badge.blue {
--bg: var(--blue-ryb_12);
--color: var(--blue-ryb);
}

.card-badge.orange {
--bg: var(--coral_12);
--color: var(--coral);
}

.card-badge.cyan {
--bg: var(--pacific-blue_12);
--color: var(--pacific-blue);
}

.card-badge.red {
--bg: var(--imperial-red_12);
--color: var(--imperial-red);
}

.card-badge.green {
--bg: var(--emerald_12);
--color: var(--emerald);
}

.card-badge.radius-pill { border-radius: 50px; }





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header {
background: var(--white);
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 72px;
padding-block: 20px;
overflow: hidden;
transition: 0.3s var(--cubic-in);
box-shadow: var(--shadow-3);
z-index: 1;
}

.header.active {
height: 370px;
transition: 0.5s var(--cubic-out);
}

.header > .container {
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: var(--fs-1);
font-weight: var(--fw-600);
color: var(--space-cadet);
}

.menu-toggle-btn .icon { font-size: 28px; }

.navbar {
position: absolute;
top: 72px;
left: 0;
width: 100%;
background: var(--white);
opacity: 0;
visibility: hidden;
transition: 0.5s var(--cubic-out);
}

.header.active .navbar {
opacity: 1;
visibility: visible;
}

.navbar-list {
padding-inline: 15px;
margin-bottom: 15px;
}

.navbar-link {
color: var(--onyx);
font-size: var(--fs-6);
font-weight: var(--fw-500);
display: flex;
align-items: center;
gap: 5px;
padding: 10px;
border-radius: var(--radius-6);
}

:is(.navbar-link, .notification, .header-profile):is(:hover, :focus) { background: var(--black_08); }

.navbar-link.active { color: var(--blue-ryb); }

.user-action-list {
padding-inline: 15px;
display: flex;
justify-content: space-between;
align-items: center;
flex-direction: row-reverse;
}

.notification {
color: var(--onyx);
padding: 8px;
border-radius: var(--radius-6);
}

.header-profile {
display: flex;
align-items: center;
gap: 10px;
padding: 10px;
padding-right: 15px;
border-radius: var(--radius-6);
}

.profile-avatar {
overflow: hidden;
border-radius: var(--radius-6);
}

.header :is(.profile-title, .profile-subtitle) { font-size: var(--fs-9); }

.header .profile-title {
color: var(--onyx);
margin-bottom: 2px;
font-weight: var(--fw-600);
}

.header .profile-subtitle {
color: var(--cool-gray);
font-weight: var(--fw-500);
}





/*-----------------------------------*\
#HOME
\*-----------------------------------*/

.article.container { padding: 20px 14px; }

.home {
display: grid;
gap: 25px;
}

.article-title { margin-bottom: 10px; }

.article-subtitle {
color: var(--davys-gray);
font-size: var(--fs-6);
font-weight: var(--fw-500);
margin-bottom: 25px;
}

.profile-card-wrapper {
display: flex;
align-items: center;
flex-wrap: wrap;
gap: 16px;
margin-bottom: 32px;
}

.card-avatar {
overflow: hidden;
border-radius: var(--radius-6);
}

.card-title {
color: var(--onyx);
font-weight: var(--fw-600);
margin-bottom: 5px;
}

.card-subtitle {
color: var(--cool-gray);
font-size: var(--fs-7);
}

.contact-list {
display: flex;
flex-wrap: wrap;
gap: 8px 16px;
}

.contact-link {
color: var(--cool-gray);
font-size: var(--fs-7);
display: flex;
align-items: center;
gap: 5px;
}

.progress-item:not(:last-child) { margin-bottom: 25px; }

.progress-label {
display: flex;
justify-content: space-between;
align-items: center;
}

.progress-title {
color: var(--onyx-2);
font-size: var(--fs-8);
font-weight: var(--fw-500);
}

.progress-data {
color: var(--davys-gray);
font-size: var(--fs-6);
}

.progress-bar {
margin-top: 15px;
width: 100%;
height: 6px;
background: var(--cultured);
border-radius: var(--radius-6);
overflow: hidden;
}

.progress {
width: var(--width, 100%);
height: 100%;
background: var(--bg, var(--onyx));
}

.home .card-wrapper {
display: grid;
gap: 25px;
}

.home .task-card {
display: flex;
align-items: center;
gap: 15px;
}

.home .task-card .card-icon.green {
--background: var(--emerald_12);
--color: var(--emerald);
}

.home .task-card .card-icon.blue {
--background: var(--pacific-blue_12);
--color: var(--pacific-blue);
}

.home .task-card .icon {
font-size: 28px;
color: var(--color);
}

.home .task-card .card-icon {
background: var(--background);
padding: 10px;
border-radius: var(--radius-6);
}

.home .task-card .card-data {
color: var(--onyx-2);
font-size: var(--fs-3);
font-weight: var(--fw-600);
margin-bottom: 5px;
}

.home .task-card .card-text {
color: var(--cool-gray);
font-size: var(--fs-6);
}

.revenue-card .card-title { margin-bottom: 15px; }

.card-price {
color: var(--onyx);
font-size: var(--fs-2);
font-weight: var(--fw-600);
margin-bottom: 12px;
}

.revenue-card .card-text {
color: var(--cool-gray);
font-size: var(--fs-6);
}

.revenue-item {
display: flex;
align-items: center;
gap: 15px;
}

.revenue-item:first-child { margin-bottom: 10px; }

.revenue-item .icon { font-size: 30px; }

.revenue-item .icon.green { color: var(--emerald); }

.revenue-item .icon.red { color: var(--imperial-red); }

.revenue-item-data {
color: var(--onyx);
font-size: var(--fs-6);
font-weight: var(--fw-600);
margin-bottom: 5px;
}

.revenue-item-text {
color: var(--cool-gray);
font-size: var(--fs-9);
}





/*-----------------------------------*\
#PROJECTS
\*-----------------------------------*/

.project-list {
display: grid;
gap: 25px;
}

.project-card .card-date {
color: var(--cool-gray);
font-size: var(--fs-9);
font-weight: var(--fw-500);
margin-bottom: 20px;
}

.project-card .card-title {
color: var(--onyx);
font-size: var(--fs-4);
margin-bottom: 8px;
}

.project-card .card-title > a {
color: inherit;
transition: var(--transition);
}

.project-card .card-title > a:is(:hover, :focus) { color: var(--blue-ryb); }

.project-card .card-badge { margin-bottom: 20px; }

.project-card .card-text {
color: var(--cool-gray);
font-size: var(--fs-7);
line-height: 1.7;
margin-bottom: 15px;
}

.project-card .card-progress-box { margin-bottom: 15px; }

.project-card .progress-title { font-weight: var(--fw-600); }

.project-card .progress-data {
color: var(--onyx);
font-size: var(--fs-9);
font-weight: var(--fw-600);
}

.project-card .progress-bar { margin-top: 10px; }

.card-avatar-list {
display: flex;
justify-content: flex-start;
align-items: center;
}

.card-avatar-item > a {
border: 2px solid var(--white);
border-radius: 50%;
overflow: hidden;
}

.card-avatar-item:not(:first-child) { margin-left: -15px; }





/*-----------------------------------*\
#TASKS
\*-----------------------------------*/

.tasks-item:not(:last-child) { margin-bottom: 10px; }

.tasks .task-card {
display: grid;
gap: 15px;
}

.tasks .card-input {
display: flex;
align-items: flex-start;
gap: 8px;
}

.tasks .card-input > input {
margin-top: 2px;
accent-color: var(--blue-ryb);
}

.tasks .card-input > input:checked { filter: drop-shadow(0 0 2px var(--blue-ryb)); }

.tasks .task-label {
color: var(--davys-gray);
font-size: var(--fs-9);
font-weight: var(--fw-600);
line-height: 1.5;
}

.tasks .card-meta-list {
display: flex;
justify-content: flex-start;
align-items: center;
gap: 15px;
}

.tasks .meta-box {
color: var(--davys-gray);
font-size: var(--fs-9);
font-weight: var(--fw-600);
display: flex;
align-items: center;
gap: 5px;
}

.tasks .btn-primary {
margin-block: 25px;
margin-inline: auto;
}

.tasks .btn-primary .spiner {
padding: 6px;
border: 2px solid var(--blue-ryb);
border-top-color: transparent;
border-radius: 50%;
animation: rotate 0.75s linear infinite;
display: none;
}

.tasks .btn-primary:is(:hover, :focus) .spiner {
border-color: var(--white);
border-top-color: transparent;
}

@keyframes rotate {
0% { transform: rotate(0); }

100% { transform: rotate(1turn); }
}

.tasks .btn-primary.active .spiner { display: block; }





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer {
background: var(--white);
padding-block: 25px;
}

.footer-list {
display: flex;
flex-wrap: wrap;
justify-content: flex-start;
align-items: flex-start;
margin-bottom: 10px;
}

.footer-link,
.copyright {
color: var(--davys-gray);
font-size: var(--fs-6);
line-height: 1.7;
}

.footer-link,
.copyright-link {
display: inline-block;
transition: var(--transition);
}

:is(.footer-link, .copyright-link):is(:hover, :focus) { color: var(--blue-ryb); }

.footer-item:not(:last-child)::after {
content: "-";
color: hsl(0, 0%, 80%);
font-weight: var(--fw-600);
margin-inline: 5px;
}

.copyright-link { color: inherit; }





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for larger than 400px screen
*/

@media (min-width: 400px) {

/**
 * HOME
 */

.revenue-item:first-child { margin-bottom: 0; }

.revenue-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

}





/**
* responsive for larger than 570px screen
*/

@media (min-width: 570px) {

/**
 * REUSED STYLE
 */

.container {
  max-width: 550px;
  margin-inline: auto;
}



/**
 * HEADER
 */

.navbar-list,
.user-action-list { padding-inline: 0; }



/**
 * HOME
 */

.card-price { --fs-2: 1.625rem; }



/**
 * TASKS
 */

.tasks .card-meta-list { justify-content: flex-end; }

}





/**
* responsive for larger than 768px screen
*/

@media (min-width: 768px) {

/**
 * REUSED STYLE
 */

.container { max-width: 700px; }



/**
 * HOME
 */

.progress-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
}

.progress-item:not(:last-child) { margin-bottom: 0; }

.home .card-wrapper { grid-template-columns: 1fr 1fr; }

}





/**
* responsive for larger than 992px screen
*/

@media (min-width: 992px) {

/**
 * REUSED STYLE
 */

.container { max-width: 950px; }



/**
 * HEADER
 */

.menu-toggle-btn { display: none; }

.header {
  height: unset;
  padding-block: 10px;
}

.header.active { height: unset; }

.navbar {
  all: unset;
  flex-grow: 1;
}

.navbar .container { display: flex; }

.navbar-list {
  margin-bottom: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 10px;
  margin-inline: auto;
}

.user-action-list {
  flex-direction: row;
  gap: 20px;
}



/**
 * HOME
 */

.article.container { padding-block: 35px; }

.home { grid-template-columns: 1.25fr 0.75fr 1fr; }

.home .card-wrapper { grid-template-columns: 1fr; }

.progress-list { align-items: flex-end; }



/**
 * PROJECTS
 */

.project-list { grid-template-columns: repeat(3, 1fr); }



/**
 * TASKS
 */

.tasks .task-card {
  grid-template-columns: 1fr 0.5fr 0.5fr;
  align-items: center;
}



/**
 * FOOTER
 */

.footer-list { margin-bottom: 0; }

.footer .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

}





/**
* responsive for larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * REUSED STYLE
 */

.container { max-width: 1150px; }



/**
 * HEADER
 */

.navbar-list { gap: 25px; }



/**
 * HOME
 */

.card-price { --fs-2: 1.780rem; }

}
  </style>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;900&display=swap"
    rel="stylesheet">

  <!--
    - material icon link
  -->
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />

</head>

<body>

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="container">

      <h1>
        <a href="#" class="logo">Dashboard</a>
      </h1>

      <button class="menu-toggle-btn icon-box" data-menu-toggle-btn aria-label="Toggle Menu">
        <span class="material-symbols-rounded  icon">menu</span>
      </button>

      <nav class="navbar">
        <div class="container">

          <ul class="navbar-list">

            <li>
              <a href="#" class="navbar-link active icon-box">
                <span class="material-symbols-rounded  icon">grid_view</span>

                <span>Home</span>
              </a>
            </li>

            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">folder</span>

                <span>Projects</span>
              </a>
            </li>

            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">list</span>

                <span>Tasks</span>
              </a>
            </li>

            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">bar_chart</span>

                <span>Reports</span>
              </a>
            </li>

            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">settings</span>

                <span>Settings</span>
              </a>
            </li>

          </ul>

          <ul class="user-action-list">

            <li>
              <a href="#" class="notification icon-box">
                <span class="material-symbols-rounded  icon">notifications</span>
              </a>
            </li>

            <li>


                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}


                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </a>
            </li>

          </ul>

        </div>
      </nav>

    </div>
  </header>





  <main>
    <article class="container article">

    <p class=" article-title" style="background: rgb(2, 2, 33); padding:2rem; color:white;">{{ Auth::user()->name }}, you are here because you are an admin</p>





      <section class="home">

        <div class="card profile-card">

          <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
            <span class="material-symbols-rounded  icon">more_horiz</span>
          </button>

          <ul class="ctx-menu">

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                <span class="ctx-menu-text">Edit</span>
              </button>
            </li>

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">cached</span>

                <span class="ctx-menu-text">Refresh</span>
              </button>
            </li>

            <li class="divider"></li>

            <li class="ctx-item">
              <button class="ctx-menu-btn red icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">delete</span>

                <span class="ctx-menu-text">Deactivate</span>
              </button>
            </li>

          </ul>

          <div class="profile-card-wrapper">

            <figure class="card-avatar">
              <img src="data:image/png;base64,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" alt="Elizabeth Foster" width="48" height="48">
            </figure>

            <div>
              <p class="card-title">{{ Auth::user()->name }}</p>

              <p class="card-subtitle">Chikamadu Admin</p>
            </div>

          </div>

          <ul class="contact-list">

            <li>
              <a href="mailto:ceze46321@gmail" class="contact-link icon-box">
                <span class="material-symbols-rounded  icon">mail</span>

                <p class="text">Ceze46321@gmail.com</p>
              </a>
            </li>

            <li>
              <a href="tel:07026912508" class="contact-link icon-box">
                <span class="material-symbols-rounded  icon">call</span>

                <p class="text">07026912508</p>
              </a>
            </li>

          </ul>

          <div class="divider card-divider"></div>

          <ul class="progress-list">

            <li class="progress-item">

              <div class="progress-label">
                <p class="progress-title">Project Completion</p>

                <data class="progress-data" value="85">85%</data>
              </div>

              <div class="progress-bar">
                <div class="progress" style="--width: 85%; --bg: var(--blue-ryb);"></div>
              </div>

            </li>

            <li class="progress-item">

              <div class="progress-label">
                <p class="progress-title">Overall Rating</p>

                <data class="progress-data" value="7.5">7.5</data>
              </div>

              <div class="progress-bar">
                <div class="progress" style="--width: 75%; --bg: var(--coral);"></div>
              </div>

            </li>

          </ul>

        </div>

        <div class="card-wrapper">

          <div class="card task-card">

            <div class="card-icon icon-box green">
              <span class="material-symbols-rounded  icon">task_alt</span>
            </div>

            <div>
              <data class="card-data" value="21">21</data>

              <p class="card-text">Projects completed Completed</p>
            </div>

          </div>

          <div class="card task-card">

            <div class="card-icon icon-box blue">
              <span class="material-symbols-rounded  icon">drive_file_rename_outline</span>
            </div>

            <div>
              <data class="card-data" value="21">21</data>

              <p class="card-text">Progress Inprogress</p>
            </div>

          </div>

        </div>

        <div class="card revenue-card">

          <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
            <span class="material-symbols-rounded  icon">more_horiz</span>
          </button>

          <ul class="ctx-menu">

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                <span class="ctx-menu-text">Edit</span>
              </button>
            </li>

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">cached</span>

                <span class="ctx-menu-text">Refresh</span>
              </button>
            </li>

          </ul>

          <p class="card-title">Revenue</p>

          <data class="card-price" value="2100">$2,100</data>

          <p class="card-text">Last Week</p>

          <div class="divider card-divider"></div>

          <ul class="revenue-list">

            <li class="revenue-item icon-box">

              <span class="material-symbols-rounded  icon  green">trending_up</span>

              <div>
                <data class="revenue-item-data" value="15">15%</data>

                <p class="revenue-item-text">Prev Week</p>
              </div>

            </li>

            <li class="revenue-item icon-box">

              <span class="material-symbols-rounded  icon  red">trending_down</span>

              <div>
                <data class="revenue-item-data" value="10">10%</data>

                <p class="revenue-item-text">Prev Month</p>
              </div>

            </li>

          </ul>

        </div>

      </section>


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <div class="container shadow py-4 my3">
        <div class="row justify-content-center">
            <!-- Form 1 -->
            <div class="col-md-4">
                <form method="post" action="{{ route('content.update', $content->id) }}"enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-white" style="background: rgb(2, 2, 33);">Section one</h3>
                    <div class="form-group">
                        <label for="heading1">Heading 1</label>
                        <input type="text" class="form-control" value="{{$content->heading1 ?? '' }}" id="heading1" name="heading1">
                    </div>

                    <div class="form-group">
                        <label for="heading2">Heading 2</label>
                        <input type="text" class="form-control"  value="{{$content->heading2 ?? '' }}" id="heading2" name="heading2">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content"    name="content" rows="4">{{$content->content ?? '' }}"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" style="background: rgb(2, 2, 33);" class="btn text-white">Update</button>
                </form>
            </div>

            <!-- Form 2 -->
            <div class="col-md-4">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-white" style="background: rgb(2, 2, 33);">Section two</h3>
                    <div class="form-group">
                        <label for="heading1">Heading 1</label>
                        <input type="text" class="form-control" id="heading1" name="heading1">
                    </div>
                    <div class="form-group">
                        <label for="heading2">Heading 2</label>
                        <input type="text" class="form-control" id="heading2" name="heading2">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" style="background: rgb(2, 2, 33);" class="btn btn text-white">Update</button>
                </form>
            </div>

            <!-- Form 3 -->
            <div class="col-md-4">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-white"style="background: rgb(2, 2, 33);">Section three</h3>
                    <div class="form-group">
                        <label for="heading1">Heading 1</label>
                        <input type="text" class="form-control" id="heading1" name="heading1">
                    </div>
                    <div class="form-group">
                        <label for="heading2">Heading 2</label>
                        <input type="text" class="form-control" id="heading2" name="heading2">
                    </div>
                    <div class="form-group">
                        <label for="heading2">Section three</label>
                        <input type="text" class="form-control" id="heading2" name="heading2">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn text-white"style="background: rgb(2, 2, 33);">Update</button>
                </form>
            </div>
        </div>
    </div>
      <!--
        - #TASKS
      -->

      <section class="tasks">

        <div class="section-title-wrapper">
          <h2 class="section-title">Tasks</h2>

          <button class="btn btn-link icon-box">
            <span>View All</span>

            <span class="material-symbols-rounded  icon" aria-hidden="true">arrow_forward</span>
          </button>
        </div>

        <ul class="tasks-list">

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-1" id="task-1">

                <label for="task-1" class="task-label">
                  Draft the new contract document for sales team
                </label>
              </div>

              <div class="card-badge cyan radius-pill">Today 10pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>3/7</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="21">21</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge red">High</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-2" id="task-2">

                <label for="task-2" class="task-label">
                  iOS App home page design
                </label>
              </div>

              <div class="card-badge cyan radius-pill">Today 5pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>10/11</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="5">5</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge orange">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-3" id="task-3">

                <label for="task-3" class="task-label">
                  Enable analytics tracking
                </label>
              </div>

              <div class="card-badge radius-pill">Tomorrow 5pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>5/11</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="7">7</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge orange">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-4" id="task-4">

                <label for="task-4" class="task-label">
                  Kanban board design
                </label>
              </div>

              <div class="card-badge radius-pill">Sep 11, 3pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>0/5</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="3">3</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge green">Low</div>
                </li>

              </ul>

            </div>
          </li>

        </ul>

        <button class="btn btn-primary" data-load-more>
          <span class="spiner"></span>

          <span>Load More</span>
        </button>

      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="footer-list">

        <li class="footer-item">
          <a href="#" class="footer-link">About</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Privacy</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Terms</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Developers</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Support</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Careers</a>
        </li>

      </ul>

      <p class="copyright">
        &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
      </p>

    </div>
  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
<script>
    'use strict';


/**
 * toggle active class on header
 * when clicked nav-toggle-btn
 */

const header = document.querySelector("[data-header]");
const navToggleBtn = document.querySelector("[data-menu-toggle-btn]");

navToggleBtn.addEventListener("click", function () {
  header.classList.toggle("active");
});



/**
 * toggle ctx-menu when click on card-menu-btn
 */

const menuBtn = document.querySelectorAll("[data-menu-btn]");

for (let i = 0; i < menuBtn.length; i++) {
  menuBtn[i].addEventListener("click", function () {
    this.nextElementSibling.classList.toggle("active");
  });
}



/**
 * load more btn loading spin toggle
 */

const loadMoreBtn = document.querySelector("[data-load-more]");

loadMoreBtn.addEventListener("click", function () {
  this.classList.toggle("active");
});
</script>
</body>

</html>
