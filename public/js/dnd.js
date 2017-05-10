/** 

custom scripts for team dimaunahan project

**/
$(document).ready(function(){
	
	$('#deleteWarning').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget); // Button that triggered the modal
	  var title = button.data('title'); // Extract title from data-* attributes
	  var id = button.data('id'); // Extract id from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this);
	  modal.find('#deleteWarningMessage').text(title + ' shall be deleted from server. Are you sure you want to continue?' );
	  modal.find('#deleteId').val(id);
	})
	
	
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
				$fileMeta.clone().appendTo('.panelGrid').addClass('clone').prepend('<div class="panel-heading fileTitle"><strong>' + this.files[$x].name + '</strong></div>');
				
				$fileMetaClone = $('.fileMeta.clone');				
				
				$x++;				
			}while($x < $numOfFiles)

		}
		// prepend original last to avoid cloning first title multiple times
		$fileMeta.prepend('<div class="panel-heading fileTitle"><strong>' + this.files[0].name + '</strong></div>');
	});
});

