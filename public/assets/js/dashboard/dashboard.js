$(document).ready((function(){"use strict";var e=$("#time_range"),t=moment(),a=t.clone().startOf("week"),n=t.clone().endOf("week");$(window).on("load",(function(){loadIncomeExpenseReport(a.format("YYYY-MM-D  H:mm:ss"),n.format("YYYY-MM-D  H:mm:ss"))})),e.on("apply.daterangepicker",(function(e,t){a=t.startDate.format("YYYY-MM-D  H:mm:ss"),n=t.endDate.format("YYYY-MM-D  H:mm:ss"),loadIncomeExpenseReport(a,n)})),window.cb=function(t,a){e.find("span").html(t.format("MMM D, YYYY")+" - "+a.format("MMM D, YYYY"))},cb(a,n);var o=moment().startOf("month").subtract(1,"days"),r=moment().startOf("month"),s=moment().endOf("month");e.daterangepicker({startDate:a,endDate:n,opens:"left",showDropdowns:!0,autoUpdateInput:!1,ranges:{Today:[moment(),moment()],"This Week":[moment().startOf("week"),moment().endOf("week")],"Last Week":[moment().startOf("week").subtract(7,"days"),moment().startOf("week").subtract(1,"days")],"This Month":[r,s],"Last Month":[o.clone().startOf("month"),o.clone().endOf("month")]}},cb),window.loadIncomeExpenseReport=function(e,t){$.ajax({type:"GET",url:incomeExpenseReportUrl,dataType:"json",data:{start_date:e,end_date:t},cache:!1}).done(prepareReport)},window.prepareReport=function(e){$("#daily-work-report").html("");var t=e.data,a=0,n=0;if($.each(e.data.incomeTotal,(function(){a+=this})),$.each(e.data.expenseTotal,(function(){n+=this})),0===n&&0===a)return $("#income-expense-report-container").html(""),$("#income-expense-report-container").append('<div align="center" class="no-record">No Records Found</div>'),!0;$("#income-expense-report-container").html(""),$("#income-expense-report-container").append('<canvas id="daily-work-report"></canvas>');var o={labels:t.date,datasets:[{label:"Total Income",backgroundColor:"rgba(0,255,0,0.6)",data:t.incomeTotal},{label:"Total Expense",backgroundColor:"rgba(255,0,0,0.6)",data:t.expenseTotal}]},r=document.getElementById("daily-work-report").getContext("2d");r.canvas.style.height="400px",r.canvas.style.width="100%",window.myBar=new Chart(r,{type:"bar",data:o,options:{title:{display:!0,text:income_and_expense_reports},tooltips:{enabled:!0,mode:"single",callbacks:{label:function(e,t){var a=t.datasets[e.datasetIndex].label,n=t.datasets[e.datasetIndex].data[e.index];return a+": "+addCommas(n)}}},elements:{rectangle:{borderWidth:1,borderColor:"rgb(0, 0, 0, 0.1)"}},responsive:!1,scales:{xAxes:[{ticks:{autoSkip:!1}}],yAxes:[{ticks:{callback:function(e){return e/1e3+"k"}},scaleLabel:{display:!0,labelString:"Revenues (In "+currentCurrencyName+")"}}]}}})}}));