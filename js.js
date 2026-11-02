<script>
  const logos = document.querySelectorAll('.client-logo');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.2 });

  logos.forEach(logo => observer.observe(logo));
</script>
