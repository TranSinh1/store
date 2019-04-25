$(document).ready(function(){
 	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
 	function getDataDoughnut(year)
 	{
 		$.ajax({
	 		url: 'home-admin/getdata-doughnut/'+year,
	 		method: 'get',
	 		success:function(rp) {
			 	var ctx = document.getElementById('doughnutChart');
				var myChart = new Chart(ctx, {
			    type: 'doughnut',
			    data: {
			    	datasets: [{
			        	data: [rp.delivered, rp.processing, rp.waiting],
			        	backgroundColor: [
					    'red',
					    'blue',
					    'yellow',
					],
			    	}],
			    	
				    labels: [
				        'Đã giao hàng',
					    'Đang giao hàng',
					    'Chưa xử lý',
				    ]

				},
				options: {
						responsive: true,
						legend: {
							position: 'top',
						},
						title: {
							display: true,
							text: 'Thống kê hóa đơn năm '+year
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
			});
 		}
 	})
 	}

 	getDataDoughnut($('#year').val());
 	
 	$('#year').change(function() {
 		year = $(this).val();
 		getDataDoughnut(year);
 		getDataLine(year);
 	});

 	function getDataLine(year)
 	{
 		$.ajax({
 			url: 'home-admin/getdata-line/'+year,
 			method: 'get',
 			success:function(rp) {
 				console.log(rp)
 				new Chart(document.getElementById("lineChart"), {
				 type: 'line',
				 data: {
				    labels: [1,2,3,4,5,6,7,8,9,10,11,12],
				    datasets: [
				    	{ 
					        data: [rp[1],rp[2],rp[3],rp[4],rp[5],rp[6],rp[7],rp[8],rp[9],rp[10],rp[11],rp[12]],
					        borderColor: "#3e95cd",
					        fill: false
				      	},
				    ]
				  },
				  options: {
				    title: {
				      display: true,
				      text: 'Biểu đồ thống kê số tiền bán được trong năm '+year,
				    }
				  }
				});
 			}
 		})
 	}
 	getDataLine($('#year').val());
});	
