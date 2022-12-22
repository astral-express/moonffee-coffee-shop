export function intersection_observer() {
  // if a pixel of an element that has hidden class is on the screen, add class show
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
