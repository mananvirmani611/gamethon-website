$(".show-more-1").click(function() {
  if ($(".text-1").hasClass("show-more-height-1")) {
    $(this).text("(View Less)");
  } else {
    $(this).text("Know More");
  }

  $(".text-1").toggleClass("show-more-height-1");
});
