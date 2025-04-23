const myObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      if (entry.target.classList.contains('hidden-right')) {
        entry.target.classList.add('show-right');
      } else if (entry.target.classList.contains('hidden-up')) {
        entry.target.classList.add('show-up');
      } else if (entry.target.classList.contains('hidden-down')) {
        entry.target.classList.add('show-down');
      } else {
        entry.target.classList.add('show');
      }
      // ❌ Não remove a classe quando sai da tela
      myObserver.unobserve(entry.target); // para animar só uma vez
    }
  });
});

const elements = document.querySelectorAll('.hidden, .hidden-right, .hidden-up, .hidden-down');
elements.forEach((el) => myObserver.observe(el));