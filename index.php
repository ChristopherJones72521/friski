<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Get Friski</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#carousel_ul li:first').before($('#carousel_ul li:last'));

      $('#right_scroll img').click(function(){
          var item_width = $('#carousel_ul li').outerWidth() + 10;
          var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
          $('#carousel_ul').animate({'left' : left_indent},{queue:false, duration:500},function(){
              $('#carousel_ul li:last').after($('#carousel_ul li:first'));
              $('#carousel_ul').css({'left' : '-210px'});
          });
      });

      $('#left_scroll img').click(function(){
          var item_width = $('#carousel_ul li').outerWidth() + 10;
          var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;

          $('#carousel_ul').animate({'left' : left_indent},{queue:false, duration:500},function(){
            $('#carousel_ul li:first').before($('#carousel_ul li:last'));
            $('#carousel_ul').css({'left' : '-210px'});
          });
        });
      });
    </script>
  </head>
  <body>
    <div id="carousel_container">
      <div id="inner_carousel">
        <ul id="carousel_ul">
          <li><img src="https://i.imgur.com/e0ge0uJ.jpg" /></li>
          <li><img src="https://i.imgur.com/JO77kLU.jpg" /></li>
          <li><img src="https://i.imgur.com/SbnP0og.jpg" /></li>
        </ul>
      </div>
    </div>
    <div id="login">

    </div>
  </body>
</html>
