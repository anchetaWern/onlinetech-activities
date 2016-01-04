$('#add-person').click(function(){
   var name = $('#name').val();
   $('<li>' + name +  '</li>').appendTo('#people');
});

$('#people').on('click', 'li', function(){
	$(this).remove();
});


var total_boxes = $('.box').length;
var index = 0;
var interval = setInterval(function(){
  $('.box').eq(index);
  index += 1;
  if(index == total_boxes){
    index = 0;
  }
}, 500);

//clearInterval(interval); //for stopping the interval