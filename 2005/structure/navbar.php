<?php
  $current = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav class="navbar navbar-custom randd sticky-top shadow-sm d-flex justify-content-between align-items-center">
  <div class="text-white fs-4 fw-bold">KEVIN</div>
  <div class="d-flex">
    <a class="nav-link <?= $current == 'index' ? 'active' : '' ?>" href="index.php">HOME</a>
    <a class="nav-link <?= $current == 'about' ? 'active' : '' ?>" href="about.php">ABOUT</a>
    <a class="nav-link <?= $current == 'study' ? 'active' : '' ?>" href="study.php">STUDY</a>
  </div>
</nav>

<style>
  :root {
    --primary: #161179;
    --primary-dark: #0C0950;
    --light: #261FB3;
    --white: #FFF8F8;
    --hover: #4e4df5;
  }

  .navbar-custom {
    background-color: var(--primary-dark);
    padding: 15px 40px;
    z-index: 9999;
  }

  .navbar-custom .nav-link {
    color: white;
    font-weight: bold;
    font-size: 1.1rem;
    position: relative;
    padding: 10px 18px;
    margin-left: 15px;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
  }

  .navbar-custom .nav-link:hover {
    background: linear-gradient(to right, var(--hover), var(--light));
    color: #fff;
    box-shadow: 0 0 10px var(--hover);
    transform: translateY(-2px);
  }

  .navbar-custom .nav-link.active {
    background-color: var(--light);
    box-shadow: 0 4px 10px rgba(38, 31, 179, 0.4);
    color: #fff;
  }

  .navbar-custom .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 15%;
    width: 70%;
    height: 3px;
    background: white;
    border-radius: 3px;
  }

  /* Tambahan efek shimmer garis bawah */
  .randd a {
    text-decoration: none;
    position: relative;
    transition: color 0.5s ease;
  }

  .randd a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #A6A6A6, transparent);
    background-size: 300% 100%;
    opacity: 0;
    transition: opacity 0.5s;
  }

  .randd a:hover::after {
    opacity: 1;
    animation: shimmer111 2s linear infinite !important;
  }

  @keyframes shimmer111 {
    0% {
      background-position: 200% 0;
    }
    100% {
      background-position: -200% 0;
    }
  }

  /* Sticky behavior */
  .sticky-top {
    position: sticky;
    top: 0;
    width: 100%;
  }

</style>