$(function() {
  $("header").velocity({ opacity: [1, 0], paddingTop: ["25%", "18%"],},
    { duration: 1200 });

  $("article").velocity({ opacity:[1,0]},
    { duration: 1200 });

  $("li").velocity("transition.slideLeftIn", 
    { stagger: 150 })
    .delay(150)
    .velocity({ opacity: 1 }, 250);
});