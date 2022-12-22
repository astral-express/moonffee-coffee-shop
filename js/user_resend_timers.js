// resend timer for the code
export function code_resend_timer() {
  $("#resendCodeBtn").attr("disabled", true);
  var timeLeft = 5;
  var resendTimer = setInterval(function () {
    if (timeLeft <= 0) {
      clearInterval(resendTimer);
      $("#countdown").html("");
      $("#resendCodeBtn").attr("disabled", false);
    } else {
      $("#countdown").html("in " + timeLeft + "s");
    }
    timeLeft -= 1;
  }, 1000);
}

// same resend timer for a different elem
export function code_resend_timer_for_pwd_reset() {
  $("#resendEmailLinkBtn").attr("disabled", true);
  var timeLeft = 5;
  var resendTimer = setInterval(function () {
    if (timeLeft <= 0) {
      clearInterval(resendTimer);
      $("#countdown").html("");
      $("#resendEmailLinkBtn").attr("disabled", false);
    } else {
      $("#countdown").html("in " + timeLeft + "s");
    }
    timeLeft -= 1;
  }, 1000);
}
