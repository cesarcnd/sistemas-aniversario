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

	setInterval(function(){debugger;
		var href_video = $('#video_camera .camera_link').attr('href');
		var href_photo = $('#photo_camera .camera_link').attr('href');
		console.info(href_video);
		$('#video .video_href').attr('href',href_video);
		$('#image .photo_href').attr('href',href_photo);
	},10);
});