$(function() {
  
  $("h2,img").velocity({ top: 50 , opacity : [1, 0] } , "swing");

  $("h1").velocity({ top: 50 , opacity : [1, 0],  }  , "swing");
  
  $("header").velocity({
    backgroundColorAlpha: 0.1,
    colorRed: "10%",
    colorBlue: "+=10",
    colorAlpha: 0.15,
    borderWidth: "2em"
  });


// $("li").velocity({
//     opacity: function() { return Math.random() }
// });
// $("li").velocity({
//   translateX: function(i, total) { 
//       /* Generate translateX's end value. */
//       return i * 10;
//   }
// });
  
  setInterval(function() {
    $("li").velocity("transition.slideLeftIn", { stagger: 250 })
      .delay(250)
      .velocity({ opacity: 0 }, 250)
  } , 2000);

});
