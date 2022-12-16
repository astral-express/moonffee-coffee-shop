// Sidebar for user profile
export function profile_navbar() {
  const currentURL = window.location.href;
  const sideBarItem = document.querySelectorAll(".profile-navbar-link");
  const sideBarLength = sideBarItem.length;
  for (let i = 0; i < sideBarLength; i++) {
    if (sideBarItem[i].href === currentURL) {
      sideBarItem[i].className =
        "profile-navbar-link list-group-item list-group-item-action active";
    }
  }
}
