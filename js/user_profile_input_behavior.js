// Disable submit message button if text area is empty
export function user_delete_message_input() {
  $("#submitMessageBtn").attr("disabled", true);
  $("textarea").on("keyup", function () {
    var textarea_value = $("#userMsgArea").val();
    if (textarea_value != "") $("#submitMessageBtn").attr("disabled", false);
    else $("#submitMessageBtn").attr("disabled", true);
  });
}

// Disable verify btn if input area is empty
export function user_code_input() {
  $("#submitVerCodeBtn").attr("disabled", true);
  $("#verCodeInput").on("keyup", function () {
    var text_value = $("#verCodeInput").val();
    if (text_value != "") $("#submitVerCodeBtn").attr("disabled", false);
    else $("#submitVerCodeBtn").attr("disabled", true);
  });
}
