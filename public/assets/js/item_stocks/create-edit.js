(()=>{"use strict";$(document).ready((function(){if($("#itemCategory, #items").select2({width:"100%"}),isEdit){$(".price-input").trigger("input"),setTimeout((function(){$("#itemCategory").trigger("change")}),300);var t=$("#previewImage").attr("src").split(".").pop().toLowerCase();"pdf"==t?$("#previewImage").attr("src",pdfDocumentImageUrl):"docx"!=t&&"doc"!=t||$("#previewImage").attr("src",docxDocumentImageUrl)}})),$("#itemCategory").on("change",(function(){""!==$(this).val()&&$.ajax({url:itemsUrl,type:"get",dataType:"json",data:{id:$(this).val()},success:function(t){0!==t.data.length?($("#items").empty(),$("#items").removeAttr("disabled"),$.each(t.data,(function(t,e){$("#items").append($("<option></option>").attr("value",t).text(e))})),isEdit&&($("#items").val(itemId).trigger("change.select2"),isEdit=!1)):$("#items").prop("disabled",!0)}}),$("#items").empty(),$("#items").prop("disabled",!0)})),$(document).on("change","#attachment",(function(){var t=isValidDocument($(this));isEmpty(t)||0==t||displayDocument(this,"#previewImage",t)})),window.isValidDocument=function(t){var e=$(t).val().split(".").pop().toLowerCase();return-1==$.inArray(e,["png","jpg","jpeg","pdf","doc","docx"])?($(t).val(""),UnprocessableInputError("result"),!1):e}})();