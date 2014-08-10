$(function(){
	$('#front_camera').camera({
		thumbnails: false,
		height: '36%',
		minHeight: '187px',
		loader: 'bar'
	});
	$('#photo_camera').camera({
		thumbnails: false,
		height: '36%',
		minHeight: '255px',
		loader: 'none',
		navigationHover:false
	});
	$('#video_camera').camera({
		thumbnails: false,
		height: '36%',
		minHeight: '255px',
		loader: 'none',
		pagination:false,
		navigationHover:false
	});

	setInterval(function(){
		var href_video = $('#video_camera .camera_link').attr('href');
		var href_photo = $('#photo_camera .camera_link').attr('href');
		$('#video .video_href').attr('href',href_video);
		$('#image .photo_href').attr('href',href_video);
	},0);

	$('#blq_programming nav div').click(function(){
		$('#blq_programming nav div').removeClass('active');
		$(this).addClass('active');

		$('#blq_programming div.list-item').removeClass('active');
		$('#blq_programming div.list-item').addClass('display-none');
		$('#blq_programming div.item-programming').removeClass('display-none');
		$('#blq_programming div.item-programming').addClass('display-inline');
	});
	$('#blq_informative nav div').click(function(){
		$('#blq_informative nav div').removeClass('active');
		$(this).addClass('active');

		$('#blq_informative div.list-item').removeClass('active');
		$('#blq_informative div.list-item').addClass('display-none');
		$('#blq_informative div.item-informative').removeClass('display-none');
		$('#blq_informative div.item-informative').addClass('display-inline');
	});

	$('#blq_informative nav div.menu').click(function(){
		$('#blq_informative div.list-item').removeClass('display-none');
		$('#blq_informative div.item-informative').removeClass('display-inline');
		$('#blq_informative div.item-informative').addClass('display-none');
		$('#blq_informative div.list-item').addClass('active');
		console.log(this);
	});

	$('#blq_programming nav div.menu').click(function(){
		$('#blq_programming div.list-item').removeClass('display-none');
		$('#blq_programming div.item-programming').removeClass('display-inline');
		$('#blq_programming div.item-programming').addClass('display-none');
		$('#blq_programming div.list-item').addClass('active');
		console.log(this);
	});
});