document.querySelectorAll('.collapse-exclusive input[type="radio"]').forEach((input) => {
    input.addEventListener('change', () => {
      document.querySelectorAll('.collapse-exclusive').forEach((c) =>
        c.classList.remove('active-collapse')
      );
      if (input.checked) {
        input.parentElement.classList.add('active-collapse');
      }
    });
});