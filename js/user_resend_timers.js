// Resend timer for the code
export function code_resend_timer() {
  $("#resendCodeBtn").attr("disabled", true);
  var timeleft = 5;
  var resendTimer = setInterval(function () {
    if (timeleft <= 0) {
      clearInterval(resendTimer);
      $("#countdown").html("");
      $("#resendCodeBtn").attr("disabled", false);
    } else {
      $("#countdown").html("in " + timeleft + "s");
    }
    timeleft -= 1;
  }, 1000);
}

export function code_resend_timer_for_pwd_reset() {
  $("#resendEmailLinkBtn").attr("disabled", true);
  var timeleft = 5;
  var resendTimer = setInterval(function () {
    if (timeleft <= 0) {
      clearInterval(resendTimer);
      $("#countdown").html("");
      $("#resendEmailLinkBtn").attr("disabled", false);
    } else {
      $("#countdown").html("in " + timeleft + "s");
    }
    timeleft -= 1;
  }, 1000);
}
