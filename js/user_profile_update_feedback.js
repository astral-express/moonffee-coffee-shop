// Profile update success feedback
export function profile_update_success() {
  $(document).ready(function () {
    setTimeout(function () {
      $("#updated").fadeOut("slow");
    }, 5000);
  });
}

// Profile update fail feedback
export function profile_update_failed() {
  $(document).ready(function () {
    setTimeout(function () {
      $("#failed").fadeOut("slow");
    }, 5000);
  });
}
