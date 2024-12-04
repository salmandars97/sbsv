<p style="text-align:left;border-top: 1px solid #eee;background-color:#fff!important;float:left;width:100%;margin:0;line-height:50px;padding:13px 0px;color:#555!important;font-size:17px!important;display:block!important;opacity:1!important;visibility:visible!important;">
<i class="fa fa-copyright" style="margin-left:30px;"></i> Copyright. All rights reserved | <a href="https://ontent" style="color:#555!important;display:inline-block!important;opacity:1!important;visibility:visible!important;">StepbyStep Immigration Services Inc.</a>
<a class="back-to-top" href="https://display: inline;"><i class="fa fa-arrow-up"></i></a>
</p>
<!-- Globe [END] -->
<script>
//Back to Top
jQuery(document).ready(function() {
  $('#selectnav1').on('change',function(){
    var value = $(this).val();
    location.href = value; //or .php, etc. This will go to a page called en.html
  });
var offset = 220;
var duration = 500;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.back-to-top').fadeIn(duration);
} else {
jQuery('.back-to-top').fadeOut(duration);
}
});
jQuery('.back-to-top').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;
})
});
</script>
