$(function () {
	//按回车键获取到文本框的值
	$('#headerGet').on('keydown', function (e) {
		if (e.keyCode == 13) {
			var param = $(this).val();
			
			getData(param);
		}
	});

	function getData(city) {
		city = city || "北京";
		$.ajax({
			type: "get",
			url: "http://v.juhe.cn/weather/index",
			data: {
				format:2,
				cityname:city,
				key:"39506771d07f5e07c2f88d563695bd6d"
			},
			dataType: "jsonp",
			jsonp: "callback",
			success: function (response) {
				console.log(response);
				var html = template('tmplt', response.result);
				$('#ulLists').html(html);
			}
		});
	}

});