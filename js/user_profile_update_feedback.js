// feedback for successful profile update
export function profile_update_success() {
  setTimeout(function () {
    $("#updated").fadeOut("slow");
  }, 5000);
}

// feedback for unsuccessful profile update
export function profile_update_failed() {
  setTimeout(function () {
    $("#failed").fadeOut("slow");
  }, 5000);
}
