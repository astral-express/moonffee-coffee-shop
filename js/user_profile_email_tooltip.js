// if email isn't verified, display warning button with tooltip on hover
export function user_profile_email_tooltip() {
  $(".btnTooltip").tooltip({
    delay: { show: 500, hide: 100 },
    title: "<strong>Click to verify your email!</strong>",
    html: true,
  });
}
