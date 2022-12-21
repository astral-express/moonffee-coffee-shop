// Show-hide password eye icon
export function password_toggle_icon() {
  $("#show_hide_password span").on("click", function () {
    if ($("#show_hide_password input").attr("type") == "text") {
      $("#show_hide_password input").attr("type", "password");
      $("#show_hide_password #eye").addClass("fa-eye-slash");
      $("#show_hide_password #eye").removeClass("fa-eye");
    } else if ($("#show_hide_password input").attr("type") == "password") {
      $("#show_hide_password input").attr("type", "text");
      $("#show_hide_password #eye").removeClass("fa-eye-slash");
      $("#show_hide_password #eye").addClass("fa-eye");
    }
  });
}

// Show-hide password checkbox for inputs
export function password_toggle_checkbox() {
  $("#show_hide_password_checkbox").change(function () {
    if (this.checked)
      $("#show_hide_password_form .show_hide_password").attr("type", "text");
    else
      $("#show_hide_password_form .show_hide_password").attr(
        "type",
        "password"
      );
  });
}
