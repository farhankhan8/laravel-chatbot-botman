$(document).ready((function(){"use strict";$("#type,#filter_status").select2({width:"100%"});var e=$("#enquiriesTable").DataTable({processing:!0,serverSide:!0,order:[[0,"desc"]],ajax:{url:enquiryUrl,data:function(e){e.status=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[5],orderable:!1,className:"text-center",width:"4%"},{targets:[6],orderable:!1,className:"text-center",width:"8%"},{targets:[0],width:"20%"},{targets:[1,2],width:"15%"},{searchable:!0,orderable:!0,targets:2}],columns:[{data:"full_name",name:"full_name"},{data:"email",name:"email"},{data:function(e){return console.log(e),e.enquiry_type},name:"type"},{data:function(e){return e},render:function(e){return null===e.created_at?"N/A":moment(e.created_at).utc().format("Do MMM, Y h:mm A")},name:"created_at"},{data:function(e){return null===e.viewed_by?"Not viewed":e.user.full_name},name:"user.first_name"},{data:function(e){var t=0==e.status?"":"checked",a=[{id:e.id,checked:t}];return prepareTemplateRender("#enquiryStatusTemplate",a)},name:"status"},{data:function(e){var t=enquiryShowUrl+"/"+e.id,a=[{id:e.id,url:t}];return prepareTemplateRender("#enquiryActionTemplate",a)},name:"user.last_name"}],fnInitComplete:function(){$("#filter_status").change((function(){$("#enquiriesTable").DataTable().ajax.reload(null,!0)}))}});$(document).on("change",".status",(function(e){var t=$(e.currentTarget).data("id");updateStatus(t)})),window.updateStatus=function(t){$.ajax({url:enquiryUrl+"/"+ +t+"/active-deactive",method:"post",cache:!1,success:function(t){t.success&&e.ajax.reload(null,!1)}})}}));