$(document).on("click",".user-edit",function(){let r=$(this).data("user");$("#editForm").attr("action","/administrator/users/"+r),$.ajax({url:"/administrator/users/"+r,type:"GET",dataType:"json",beforeSend:function(){$("#overlay").show()},success:function(e){$("#edit_name").val(e.name),$("#edit_username").val(e.username),$.get("/administrator/users/"+r+"/getRole",function(o){$("#edit_role").val(o.id),$("#overlay").hide()}).fail(function(o){console.log("Error:",o),$("#overlay").hide()})},error:function(e){console.log("Error:",e),$("#overlay").hide()}})});