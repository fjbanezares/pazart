$(function(){

  $.get('footer.html', function(result){
    $result = $(result);
    
    $result.find('.col4').appendTo('#templatemo_bottom');
   // $result.find('script').appendTo('#templatemo_bottom');
  }, 'html');

});