



<script type="text/javascript">
        
    var sourceId = [
        @foreach($medialinks as $linkSource)
        [ {{$linkSource -> id}}],
        @endforeach
    ];
   
     
     var clicked=false;

  sourceId.forEach(function(index, value){
    $('#' + value).click(function() {
switch (value) {


  case 1:
          if(clicked==false && value == 1) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/9bSbYzPPWJI" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;

    case 2:
    
          if(clicked==false && value == 2) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ctYSoc8H7nc" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 3:
 
          if(clicked==false && value == 3) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/6aYdMInJQAk" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 4:
          if(clicked==false && value == 4) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/JeMWbdOwBDM" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 5:
          if(clicked==false && value == 5) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/bc31RTxbXcI" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 6:
          if(clicked==false && value == 6) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/hZrmM4xCXrQ" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 7:
          if(clicked==false && value == 7) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/kIRyv_fEHJY" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;


 case 8:
          if(clicked==false && value == 8) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/8U-VVGQ6M74" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;



case 9:
          if(clicked==false && value == 9) {
  $('.container2').empty().append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/SCSB7X_-ZSw" class="screen" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

}
break;
default:
$('.container2').empty();
break;




}
  
});





});
      </script>

          

<script>


    var imageWidth = 300;
       
    $(".video-thumbs").width($(".vidImage").length*imageWidth);
       
    </script>
