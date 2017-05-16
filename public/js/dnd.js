/** 

custom scripts for team dimaunahan project

**/

$(document).on('click', '.fileLink', function (event){
		$fileMetadataIndex = $(this).data('index');				

		$fileMetadata = '<div class="form"> <div class="form-horizontal fileMetaFields fileMetaFields' + $fileMetadataIndex + '"> <div class="form-group">'
                                    +'<label class="col-sm-4 control-label" for="title" name="titleLabel[]" id="titleLabel"> Title </label>' 
                                    +'<div class="col-sm-8">' 
                                        +'<input class="form-control" type="text" name="title['+$fileMetadataIndex+']" id="title" autocomplete value="'
                                         + $('.boxFile')[0].files[$fileMetadataIndex].name +' "/>'
                                    +'</div>' 
                                +'</div>' 
                                +'<div class="form-group">' 
                                    +'<label class="col-sm-4 control-label" for="author" name="authorLabel[]" id="authorLabel"> Author </label>'
                                    +'<div class="col-sm-8">'
                                        +'<input class="form-control" type="text" name="author['+$fileMetadataIndex+']" id="author" autocomplete />'
                                    +'</div>'
                                +'</div>'                  
                                +'<div class="form-group">' 
                                    +'<label class="col-sm-4 control-label" for="pages" name="pagesLabel[]" id="pagesLabel"> # of Pages </label>' 
                                    +'<div class="col-sm-8">' 
                                        +'<input class="form-control" type="number" name="pages['+$fileMetadataIndex+']" id="pages" min="1" value="1" />' 
                                    +'</div>' 
                                +'</div>'                                                           

                                +'<div class="form-group">' 
                                    +'<label class="col-sm-4 control-label" for="tags" name="tagsLabel[]" id="tagsLabel"> Tags </label>' 
                                    +'<div class="col-sm-8">' 
                                        +'<input class="form-control" type="text" name="tags['+$fileMetadataIndex+']" id="tags" />' 
                                    +'</div>' 
                                +'</div>'
                                +'<div class="form-group">' 
                                    +'<label class="col-sm-4 control-label" for="description" name="descriptionLabel" id="descriptionLabel"> Description </label>'
                                    +'<div class="col-sm-8">' 
                                        +'<textarea name="description['+$fileMetadataIndex+']" id="description" placeholder="Enter brief desciption for module">'+'</textarea>' 
                                    +'</div>' 
                                +'</div>'
                             +'</div> </div>';
		                // + $('.boxFile')[0].files[$fileMetadataIndex].name + '"/></div></div></div>';

		
		$('.fileMetaFields').hide();
		if($("div").hasClass('fileMetaFields' + $fileMetadataIndex))
		{
			$('.fileMetaFields' + $fileMetadataIndex).show();
		}
		else
		{
			$('.fileMetadata').append($fileMetadata);				
			$('.fileMetaFields' + $fileMetadataIndex).show();
		}
		
		
	});
$(document).ready(function(){
	$("#studentNumber").mask("9999-99999", {placeholder:"0"});		
	$('#deleteWarning').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget); // Button that triggered the modal
	  var title = button.data('title'); // Extract title from data-* attributes
	  
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this);
	  if(button.val() == "deleteSelected")
	  {
	  	var id = $('.moduleChecked:checkbox:checked').val();
		title = title + " " + $('.moduleChecked:checkbox:checked').length + "File(s)";
		var selectedIds = [];
		$('.moduleChecked:checkbox:checked').each(function () {		
		  	selectedIds.push($(this).val())
		});
	  	modal.find('#deleteId').val(selectedIds);
	  }
	  else
	  {
	     var id = button.data('id'); // Extract id from data-* attributes
	     modal.find('#deleteId').val(id);	  	
	  }
	  

	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  modal.find('#deleteWarningMessage').text(title + ' shall be deleted from server. Are you sure you want to continue?' );
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
		$('.fileMeta').find('#fileTitle').text(this.files[0].name);


		$fileMeta.find('.thumbnail').find('.fileLink').data("index", $x);		
        $x++;

		if($numOfFiles > 1)
		{			
			do{								
				
				$fileMeta.clone().appendTo('.thumbnailGrid').addClass('clone clone' + $x).find('.fileLink').data("index", $x).find('#fileTitle').text(this.files[$x].name)			
				$fileMetaClone = $('.fileMeta.clone');
				
				$x++;				
			}while($x < $numOfFiles)

		}
		// prepend original last to avoid cloning first title multiple times
		// $('.fileName').text(this.files[0].name);
	});
});

