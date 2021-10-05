(()=>{"use strict";var t="#paymentsReportsTbl";$(t).DataTable({processing:!0,serverSide:!0,order:[[0,"desc"]],ajax:{url:paymentReportUrl,data:function(t){t.account_type=$("#filterPaymentAccount").find("option:selected").val()}},columnDefs:[{targets:[4],className:"text-right"}],columns:[{data:function(t){return t},render:function(t){return null===t.payment_date?"N/A":moment(t.payment_date).format("Do MMM, Y")},name:"payment_date"},{data:"accounts.name",name:"accounts.name"},{data:"pay_to",name:"pay_to"},{data:function(t){return 2==t.accounts.type?"Credit":"Debit"},name:"accounts.type"},{data:function(t){return isEmpty(t.amount)?"N/A":'<p class="cur-margin">'+getCurrentCurrencyClass()+" "+addCommas(t.amount)+"</p>"},name:"amount"}],fnInitComplete:function(){$("#filterPaymentAccount").change((function(){$(t).DataTable().ajax.reload(null,!0)}))}}),$("#filterPaymentAccount").select2({width:"100%"})})();