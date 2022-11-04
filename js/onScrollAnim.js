function reveal() {
  let reveals = document.querySelectorAll(".reveal");

  for (let i = 0; i < reveals.length; i++) {
    let windowHeight = window.innerHeight;
    let elementTop = reveals[i].getBoundingClientRect().top;
    let elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

// function navbar() {
//   let navbar = document.querySelectorAll(".header-transparent");

//   for (let i = 0; i < navbar.length; i++) {
//     let windowHeight = window.innerHeight;
//     let elementTop = navbar[i].getBoundingClientRect().top;
//     let elementVisible = 2;

//     if (elementTop < windowHeight - elementVisible) {
//       navbar[i].classList.add("header-scroll");
//     } else {
//       navbar[i].classList.remove("header-scroll");
//     }
//   }
// }

window.addEventListener("scroll", reveal);
reveal();
