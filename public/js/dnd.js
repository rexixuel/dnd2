/** 

custom scripts for team dimaunahan project

**/
$(document).ready(function(){

	if (!($('.boxFile').files))
	{
		$('.fileMeta').hide();
		$('.fileMeta-buttons').hide();		
	}

	$('.boxFile').change(function (){		
		$('#filePathLabel').text(this.files.length + ' file(s) selected' );
		
		$('.fileMeta').hide();
		$('.fileMeta.clone').remove();
		$('.fileMeta-buttons').hide();
		$('.fileTitle').remove();
		$('.alert').remove();
		
		var $numOfFiles = this.files.length;

		var $x = 0;
		var $fileMeta = $('.fileMeta');
		
		$('.fileMeta').show();
		$('.fileMeta-buttons').show();

		$x++;

		if($numOfFiles > 1)
		{			
			do{								
				$fileMeta.clone().appendTo('.input-container').addClass('clone').prepend('<div class="panel-heading fileTitle"><strong>' + this.files[$x].name + '</strong></div>');
				
				$fileMetaClone = $('.fileMeta.clone');				
				
				$x++;				
			}while($x < $numOfFiles)

		}
		// prepend original last to avoid cloning first title multiple times
		$fileMeta.prepend('<div class="panel-heading fileTitle"><strong>' + this.files[0].name + '</strong></div>');
	});
});

