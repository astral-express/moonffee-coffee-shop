export function intersection_observer() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  const hiddenElem = document.querySelectorAll(".hidden");
  hiddenElem.forEach((el) => observer.observe(el));
}
