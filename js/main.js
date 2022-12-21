import { intersection_observer } from "./intersection_observer.js";
import { profile_navbar } from "./user_profile_navbar.js";
import {
  profile_update_success,
  profile_update_failed,
} from "./user_profile_update_feedback.js";
import {
  password_toggle_icon,
  password_toggle_checkbox,
} from "./user_pwd_visibility_toggle.js";
import {
  user_delete_message_input,
  user_code_input,
} from "./user_profile_input_behavior.js";
import { user_profile_email_tooltip } from "./user_profile_email_tooltip.js";
import {
  code_resend_timer,
  code_resend_timer_for_pwd_reset,
} from "./user_resend_timers.js";
import { back_to_top } from "./back_to_top.js";
import { user_shop_cart } from "./user_shop_cart.js";

$(document).ready(function () {
  // Elem anim on screen appearance
  intersection_observer();
  // Sidebar for user profile
  profile_navbar();
  // Profile update feedback
  profile_update_success();
  profile_update_failed();
  // Show-hide password
  password_toggle_icon();
  password_toggle_checkbox();
  // Disable submit message button if text area is empty
  user_delete_message_input();
  user_code_input();
  // User email tooltip
  user_profile_email_tooltip();
  // Resend code timer
  code_resend_timer();
  code_resend_timer_for_pwd_reset();
  // Back to top button
  back_to_top();
  // Cart shop
  user_shop_cart();
});
