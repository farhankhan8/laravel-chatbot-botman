(()=>{"use strict";$(document).ready((function(){$("#patientId, #caseId, #doctorId,#paymentMode").select2({width:"100%"}),$("#appointmentDate").datetimepicker(DatetimepickerDefaults({format:"YYYY-MM-DD HH:mm:ss",useCurrent:!0,sideBySide:!0})),lastVisit&&($("#patientId").val(lastVisit).trigger("change"),$("#patientId").attr("disabled",!0)),isEdit?($("#patientId").attr("disabled",!0),$("#patientId").trigger("change"),$("#appointmentDate").data("DateTimePicker").minDate($("#appointmentDate").val())):$("#appointmentDate").data("DateTimePicker").minDate(new Date),$("#createOpdPatientForm, #editOpdPatientDepartmentForm").submit((function(){$("#patientId").attr("disabled",!1),$("#btnSave").attr("disabled",!0)}))})),$("#patientId").on("change",(function(){""!==$(this).val()&&$.ajax({url:patientCasesUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(t){0!==t.data.length?($("#caseId").empty(),$("#caseId").removeAttr("disabled"),$.each(t.data,(function(t,a){$("#caseId").append($("<option></option>").attr("value",t).text(a))}))):$("#caseId").prop("disabled",!0)}}),$("#caseId").empty(),$("#caseId").prop("disabled",!0)})),$("#doctorId").on("change",(function(){""!==$(this).val()&&$.ajax({url:doctorOpdChargeUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(t){0!==t.data.length?$("#standardCharge").val(t.data[0].standard_charge):$("#standardCharge").val(0)}})}))})();