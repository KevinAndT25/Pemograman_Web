<footer class="footer-custom mt-auto py-4 text-white text-center">
  <p class="mb-3">©<strong>2024/2025</strong> Kevin Andhika | 2311532005</p>

  <!-- Social media placeholders -->
  <div>
    <button class="footer-icon btn btn-sm btn-outline-light" onclick="window.open('https://www.youtube.com/@kevinandhika7093', '_blank')">
      <i class="fa-brands fa-youtube"></i></button> ▪ 
    <button class="footer-icon btn btn-sm btn-outline-light" onclick="window.open('https://github.com/KevinAndT25', '_blank')">
      <i class="fa-brands fa-github"></i></button> ▪ 
    <button class="footer-icon btn btn-sm btn-outline-light" onclick="window.open('https://www.instagram.com/kev.llamyx_a?igsh=MTFrbTJnaXdrNjdmOA==', '_blank')">
      <i class="fa-brands fa-instagram"></i></button> ▪ 
    <button class="footer-icon btn btn-sm btn-outline-light" onclick="copyToClipboard('techmankevin@gmail.com')">
      <i class="fa-solid fa-envelope"></i></button> ▪
    <button class="footer-icon btn btn-sm btn-outline-light" onclick="copyToClipboard('081371507944')">
      <i class="fa-solid fa-phone"></i></button>
  </div>
</footer>

<style>
  .footer-custom {
    background-color: var(--primary-dark);
  }

  .footer-link, .footer-icon {
    color: white;
    text-decoration: none;
    margin: 0 6px;
    font-weight: 500;
    cursor: pointer;
    transition: transform 0.25s ease, color 0.25s ease;
    display: inline-block;
  }

  .footer-link:hover, .footer-icon:hover {
    color: var(--primary);
    text-decoration: none;
    transform: scale(1.2);
  }
</style>
