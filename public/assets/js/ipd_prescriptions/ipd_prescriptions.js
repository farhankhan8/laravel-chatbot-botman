$(document).ready((function(){"use strict";var e="#tblIpdPrescription";$(e).DataTable({processing:!0,serverSide:!0,order:[[0,"desc"]],ajax:{url:ipdPrescriptionUrl,data:function(e){e.id=ipdPatientDepartmentId}},columnDefs:[{targets:[2],className:"text-center",orderable:!1,width:"8%"},{targets:"_all",defaultContent:"N/A"}],columns:[{data:function(e){return'<a href="javascript:void(0)" class="viewIpdPrescription" data-pres-id="'+e.id+'">'+e.patient.ipd_number+"</a>"},name:"patient.ipd_number"},{data:function(e){return e},render:function(e){return null===e.created_at?"N/A":moment(e.created_at).format("Do MMM, Y")},name:"created_at"},{data:function(e){var t=[{id:e.id}];return prepareTemplateRender("#ipdPrescriptionActionTemplate",t)},name:"id"}]}),$(document).on("click",".delete-prescription-btn",(function(t){var i=$(t.currentTarget).data("id");deleteItem(ipdPrescriptionUrl+"/"+i,e,"IPD Prescription")}));var t=function(e){$(e).select2({placeholder:"Select Category",width:"100%"})};t(".categoryId"),$(document).on("click","#addPrescriptionItem, #addPrescriptionItemOnEdit",(function(){var e=parseInt($(this).data("edit"))?"#editIpdPrescriptionItemTemplate":"#ipdPrescriptionItemTemplate",r=parseInt($(this).data("edit"))?".edit-ipd-prescription-item-container":".ipd-prescription-item-container",n={medicineCategories,uniqueId},d=prepareTemplateRender(e,n);$(r).append(d),t(".categoryId"),uniqueId++,i(parseInt($(this).data("edit")))}));var i=function(e){var i=e?"#editIpdPrescriptionItemTemplate":"#ipdPrescriptionItemTemplate",r=e?".edit-ipd-prescription-item-container":".ipd-prescription-item-container",n=e?".edit-prescription-item-number":".prescription-item-number",d=1;if($(r+">tr").each((function(){$(this).find(n).text(d),d++})),d-1==0){var o={medicineCategories,uniqueId},a=prepareTemplateRender(i,o);$(r).append(a),t(".categoryId"),uniqueId++}};$(document).on("click",".deleteIpdPrescription, .deleteIpdPrescriptionOnEdit",(function(){$(this).parents("tr").remove(),i(parseInt($(this).data("edit")))})),$(document).on("change",".categoryId",(function(e,t){var i=$(document).find("[data-medicine-id='"+$(this).data("id")+"']");""!==$(this).val()&&$.ajax({url:medicinesListUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(e){0!==e.data.length?(i.empty(),i.removeAttr("disabled"),$(".medicineId").select2({width:"100%"}),$.each(e.data,(function(e,t){i.append($("<option></option>").attr("value",e).text(t))})),void 0!==t&&i.val(t.medicineId).trigger("change.select2")):i.prop("disabled",!0)}}),i.empty(),i.prop("disabled",!0)})),$(document).on("submit","#addIpdPrescriptionForm",(function(t){t.preventDefault();var i=jQuery(this).find("#btnIpdPrescriptionSave");i.button("loading");var r={formSelector:$(this),url:ipdPrescriptionCreateUrl,type:"POST",tableSelector:e};newRecord(r,i,"#addIpdPrescriptionModal")})),$(document).on("click",".edit-prescription-btn",(function(e){if(!ajaxCallIsRunning){ajaxCallInProgress();var t=$(e.currentTarget).data("id");renderPrescriptionData(t)}})),window.renderPrescriptionData=function(e){$.ajax({url:ipdPrescriptionUrl+"/"+e+"/edit",type:"GET",success:function(e){if(e.success){var t=e.data.ipdPrescription,i=e.data.ipdPrescriptionItems;$("#ipdEditPrescriptionId").val(t.id),$("#editHeaderNote").val(t.header_note),$("#editFooterNote").val(t.footer_note),$.each(i,(function(e,t){$("#addPrescriptionItemOnEdit").trigger("click");var i=uniqueId-1;$(document).find("[data-id='"+i+"']").val(t.category_id).trigger("change",[{medicineId:t.medicine_id}]),$(document).find("[data-dosage-id='"+i+"']").val(t.dosage),$(document).find("[data-instruction-id='"+i+"']").val(t.instruction)}));var r=1;$(".edit-ipd-prescription-item-container>tr").each((function(){$(this).find(".prescription-item-number").text(r),r++})),$("#editIpdPrescriptionModal").modal("show"),ajaxCallCompleted()}},error:function(e){manageAjaxErrors(e)}})},$(document).on("submit","#editIpdPrescriptionForm",(function(t){t.preventDefault();var i=jQuery(this).find("#btnEditIpdPrescriptionSave");i.button("loading");var r=$("#ipdEditPrescriptionId").val(),n=ipdPrescriptionUrl+"/"+r,d={formSelector:$(this),url:n,type:"POST",tableSelector:e};editRecord(d,i,"#editIpdPrescriptionModal")})),$(document).on("click",".viewIpdPrescription",(function(){$.ajax({url:ipdPrescriptionUrl+"/"+$(this).data("pres-id"),type:"get",beforeSend:function(){screenLock()},success:function(e){$("#ipdPrescriptionViewData").html(e),$("#showIpdPrescriptionModal").modal("show"),ajaxCallCompleted()},complete:function(){screenUnLock()}})})),$(document).on("click",".printPrescription",(function(){var e=document.getElementById("DivIdToPrint"),t=window.open("","Print-Window");t.document.open(),t.document.write('<html><link href="'+bootstarpUrl+'" rel="stylesheet" type="text/css"/><body onload="window.print()">'+e.innerHTML+"</body></html>"),t.document.close(),setTimeout((function(){t.close()}),10)})),$("#addIpdPrescriptionModal").on("hidden.bs.modal",(function(){resetModalForm("#addIpdPrescriptionForm","#validationErrorsBox"),$("#ipdPrescriptionTbl").find("tr:gt(1)").remove(),$(".categoryId").val(""),$(".categoryId").trigger("change")})),$("#editIpdPrescriptionModal").on("hidden.bs.modal",(function(){$("#editIpdPrescriptionTbl").find("tr:gt(0)").remove()}))}));