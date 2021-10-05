(()=>{"use strict";var e=$("#categoriesTable").DataTable({processing:!0,serverSide:!0,order:[[0,"asc"]],ajax:{url:categoriesUrl,data:function(e){e.is_active=$("#filter_status").find("option:selected").val()}},columnDefs:[{targets:[2],orderable:!1,className:"text-center",width:"8%"},{targets:[1],orderable:!1,className:"text-center",width:"8%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="'+(categoriesUrl+"/"+e.id)+'">'+e.name+"</a>"},name:"name"},{data:function(e){var a=0===e.is_active?"":"checked",t=[{id:e.id,checked:a}];return prepareTemplateRender("#categoryActiveTemplate",t)},name:"is_active"},{data:function(e){var a=[{id:e.id}];return prepareTemplateRender("#categoryActionTemplate",a)},name:"id"}],fnInitComplete:function(){$("#filter_status").change((function(){$("#categoriesTable").DataTable().ajax.reload(null,!0)}))}});$(document).on("submit","#addNewForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnSave");a.button("loading"),$.ajax({url:categoryCreateUrl,type:"POST",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#addModal").modal("hide"),$("#categoriesTable").DataTable().ajax.reload(null,!1))},error:function(e){printErrorMessage("#validationErrorsBox",e)},complete:function(){a.button("reset")}})})),$(document).on("submit","#editForm",(function(e){e.preventDefault();var a=jQuery(this).find("#btnEditSave");a.button("loading");var t=$("#category_id").val();$.ajax({url:categoriesUrl+"/"+t,type:"put",data:$(this).serialize(),success:function(e){e.success&&(displaySuccessMessage(e.message),$("#editModal").modal("hide"),$("#categoriesTable").DataTable().ajax.reload(null,!1))},error:function(e){UnprocessableInputError(e)},complete:function(){a.button("reset")}})})),$("#addModal").on("hidden.bs.modal",(function(){resetModalForm("#addNewForm","#validationErrorsBox")})),$("#editModal").on("hidden.bs.modal",(function(){resetModalForm("#editForm","#editValidationErrorsBox")})),window.renderData=function(e){$.ajax({url:categoriesUrl+"/"+e+"/edit",type:"GET",success:function(e){if(e.success){var a=e.data;$("#category_id").val(a.id),$("#edit_name").val(a.name),1===a.is_active?$("#edit_is_active").prop("checked",!0):$("#edit_is_active").prop("checked",!1),$("#editModal").modal("show"),ajaxCallCompleted()}},error:function(e){manageAjaxErrors(e)}})},$(document).on("click",".edit-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var a=$(e.currentTarget).data("id");renderData(a)}})),$(document).on("click",".delete-btn",(function(e){var a=$(e.currentTarget).data("id");deleteItem(categoriesUrl+"/"+a,"#categoriesTable","Medicine Category")})),$(document).on("change",".is-active",(function(e){var a=$(e.currentTarget).data("id");activeDeActiveCategory(a)})),window.activeDeActiveCategory=function(a){$.ajax({url:categoriesUrl+"/"+a+"/active-deactive",method:"post",cache:!1,success:function(a){a.success&&e.ajax.reload(null,!1)}})}})();