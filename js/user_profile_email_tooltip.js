// Email verification warning
export function user_profile_email_tooltip() {
  $(document).ready(function () {
    $(".btnTooltip").tooltip({
      delay: { show: 500, hide: 100 },
      title: "<strong>Click to verify your email!</strong>",
      html: true,
    });
  });
}
