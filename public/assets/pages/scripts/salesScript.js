var TableDatatablesResponsive=function(){
	var e=function(){
		var e = $("#salesTable");
		e.dataTable({
			language:{
						aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},
						emptyTable:"No data available in table",
						info:"Showing _START_ to _END_ of _TOTAL_ entries",
						infoEmpty:"No entries found",
						infoFiltered:"(filtered1 from _MAX_ total entries)",
						lengthMenu:"_MENU_ entries",
						search:"Search:",
						zeroRecords:"No matching records found"
					},
					"bLengthChange": false,
					buttons:[{extend:"print",className:"btn dark btn-outline"},{extend:"pdf",className:"btn green btn-outline"},{extend:"csv",className:"btn purple btn-outline "}],
					responsive:{details:{}},
					order:[[0,"asc"]],
					lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],
					pageLength:10,
					dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})},
					t = function(){
						var e = $("#sample_2");
						e.dataTable({language:{aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},emptyTable:"No data available in table",info:"Showing _START_ to _END_ of _TOTAL_ entries",infoEmpty:"No entries found",infoFiltered:"(filtered1 from _MAX_ total entries)",lengthMenu:"_MENU_ entries",search:"Search:",zeroRecords:"No matching records found"},buttons:[{extend:"print",className:"btn dark btn-outline"},{extend:"pdf",className:"btn green btn-outline"},{extend:"csv",className:"btn purple btn-outline "}],responsive:{details:{type:"column",target:"tr"}},columnDefs:[{className:"control",orderable:!1,targets:0}],order:[1,"asc"],lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],pageLength:10,pagingType:"bootstrap_extended",dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})},n=function(){var e=$("#sample_3");e.dataTable({language:{aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},emptyTable:"No data available in table",info:"Showing _START_ to _END_ of _TOTAL_ entries",infoEmpty:"No entries found",infoFiltered:"(filtered1 from _MAX_ total entries)",lengthMenu:"_MENU_ entries",search:"Search:",zeroRecords:"No matching records found"},buttons:[{extend:"print",className:"btn default"},{extend:"pdf",className:"btn default"},{extend:"csv",className:"btn default"}],responsive:{details:{}},order:[[0,"asc"]],lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],pageLength:10,dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})},o=function(){var e=$("#sample_4");e.dataTable({language:{aria:{sortAscending:": activate to sort column ascending",sortDescending:": activate to sort column descending"},emptyTable:"No data available in table",info:"Showing _START_ to _END_ of _TOTAL_ entries",infoEmpty:"No entries found",infoFiltered:"(filtered1 from _MAX_ total entries)",lengthMenu:"_MENU_ entries",search:"Search:",zeroRecords:"No matching records found"},buttons:[{extend:"print",className:"btn default"},{extend:"pdf",className:"btn default"},{extend:"csv",className:"btn default"}],responsive:{details:{}},order:[[0,"asc"]],lengthMenu:[[5,10,15,20,-1],[5,10,15,20,"All"]],pageLength:10,dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"})};return{init:function(){jQuery().dataTable&&(e(),t(),n(),o())}}}();jQuery(document).ready(function(){TableDatatablesResponsive.init()});