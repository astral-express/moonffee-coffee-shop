export function back_to_top() {
  var pageURI = $(location).attr("pathname");
  switch (pageURI) {
    case "/index.php":
      btn_back_to_top();
      break;
    case "/shop.php":
      btn_back_to_top();
      break;
  }

  function btn_back_to_top() {
    var btn = $("#back_to_top_btn");
    $(window).scroll(function () {
      if ($(window).scrollTop() > 280) {
        btn.show("fast");
      } else btn.hide("fast");
    });

    btn.click(function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
}
