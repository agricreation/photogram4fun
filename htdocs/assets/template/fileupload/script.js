$('.file-uploader').on('dragover dragenter', function() {
	$(this).addClass('is-dragover');
}).on('dragleave dragend drop', function() {
	$(this).removeClass('is-dragover');
});

$(function() {
	var dropzoneCounter = 0;
	
	$('.file-uploader').on('dragenter', function(){
		dropzoneCounter++;
		var $this= $(this);
		$this.addClass('is-dragover');
		var $myID = $(this).attr("id");
		if($myID == "fuploader2") {
			$(this).addClass('is-wrong-filetype');
			var $fileErrorText = $(this).find($('.drop-cta')).data('file-type-error');
			console.log( $fileErrorText );
			$(this).find('.drop-cta').text( $fileErrorText );
			$(this).find('.icon-container').append('<span class="text-danger fas fa-times-circle"></span>');
		}

	});

	$('.file-uploader').bind('dragleave', function(){
		dropzoneCounter--;
		if (dropzoneCounter === 0) {
			$(this).removeClass('is-dragover');
			if($(this).is('.is-wrong-filetype')) {
				$(this).removeClass('is-wrong-filetype');
				$(this).find('.text-danger').remove();
			}
		}
	});

	$('.file-uploader').bind('drop', function(){
		dropzoneCounter = 0;
		$(this).removeClass('is-dragover ');
	});
});