// Profile update success feedback
export function profile_update_success() {
  setTimeout(function () {
    $("#updated").fadeOut("slow");
  }, 5000);
}

// Profile update fail feedback
export function profile_update_failed() {
  setTimeout(function () {
    $("#failed").fadeOut("slow");
  }, 5000);
}
