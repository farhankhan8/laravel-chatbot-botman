(()=>{"use strict";$("#noticeBoardsTable").DataTable({processing:!0,serverSide:!0,order:[[1,"desc"]],ajax:{url:noticeBoardUrl},columnDefs:[{targets:[2],orderable:!1,className:"text-center",width:"8%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="'+(noticeBoardUrl+"/"+e.id)+'">'+e.title+"</a>"},name:"title"},{data:function(e){return e},render:function(e){return null===e.created_at?"N/A":moment(e.created_at).format("Do MMM, Y h:mm A")},name:"created_at"},{data:function(e){var t=noticeBoardUrl+"/"+e.id,a=[{id:e.id,url:t+"/edit"}];return prepareTemplateRender("#noticeBoardActionTemplate",a)},name:"id"}]});$(document).on("click",".delete-btn",(function(e){var t=$(e.currentTarget).data("id");deleteItem(noticeBoardUrl+"/"+t,"#noticeBoardsTable","Notice Board")}))})();