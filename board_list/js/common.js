$(function(){
  $('.dat_edit_bt').on('click', function(){
    var obj = $(this).closest('.dap_lo').find('.dat_edit');
    obj.css("display", "block");
    obj.dialog({
      modal: true,
      width: 650,
      height: 200,
      title: "댓글 수정"
    });
  });
  
  $('.dat_delete_bt').on('click', function(){
    var obj = $(this).closest('.dap_lo').find('.dat_delete');
    obj.dialog({
      modal: true,
      width: 400,
      title: "댓글 삭제확인"
    });
  });
})