$("input:checkbox").on('click', function() {
  var $box = $(this);
  var other = "input:checkbox";

  $(other).prop("checked", false).removeAttr('name');
  $box.prop("checked", true).attr('name', 'status');
  
});