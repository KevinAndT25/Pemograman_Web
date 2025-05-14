<?php
  $current = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav class="navbar navbar-custom randd d-flex justify-content-between align-items-center">
  <div class="text-white fs-4 fw-bold">KEVIN</div>
  <div class="d-flex">
    <a class="nav-link <?= $current == 'index' ? 'active' : '' ?>" href="index.php">HOME</a>
    <a class="nav-link <?= $current == 'about' ? 'active' : '' ?>" href="about.php">ABOUT</a>
    <a class="nav-link <?= $current == 'study' ? 'active' : '' ?>" href="study.php">STUDY</a>
  </div>
</nav>

<style>
  .navbar-custom {
    background-color: var(--primary-dark);
    padding: 15px 40px;
  }

  .navbar-custom .nav-link {
    color: white;
    font-weight: bold;
    position: relative;
    padding: 8px 16px;
    margin-left: 15px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
    text-decoration: none;
  }

  .navbar-custom .nav-link:hover {
    background-color: var(--light);
  }

  .navbar-custom .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 10%;
    width: 80%;
    height: 3px;
    background-color: white;
    border-radius: 2px;
  }

  /* Random Navbar */
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

  .randd a:hover {
    color: #A6A6A6;
  }

  .randd a::after {
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

</style>