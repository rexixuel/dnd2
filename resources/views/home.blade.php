@extends('layouts.app',['title'=>'test page'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    
                            <div class="fileMetaFields fileMetaFields form-horizontal"> 
                                <div class="form-group {{ $errors->has('title.0') ? ' has-error' : '' }} ">
                                    <label class="col-sm-3 control-label" for="title" name="titleLabel[]" id="titleLabel"> Title </label> 
                                    <div class="col-sm-9"> 
                                        <input class="form-control" type="text" name="title[]" id="title" autocomplete 
                                        value="' + $('.boxFile').files[0].name +' "/>
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label class="col-sm-3 control-label" for="author" name="authorLabel[]" id="authorLabel"> Author </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="author[]" id="author" required autocomplete />
                                    </div>
                                </div>                  
                                <div class="form-group"> 
                                    <label class="col-sm-3 control-label" for="pages" name="pagesLabel[]" id="pagesLabel"> # of Pages</label> 
                                    <div class="col-sm-9"> 
                                        <input class="form-control" type="number" name="pages[]" id="pages" min="1" value="1" /> 
                                    </div> 
                                </div>                                                           

                                <div class="form-group"> 
                                    <label class="col-sm-3 control-label" for="tags" name="tagsLabel[]" id="tagsLabel">  Tags </label> 
                                    <div class="col-sm-9"> 
                                        <input class="form-control" type="text" name="tags[]" id="tags" /> 
                                    </div> 
                                </div>                                                           

                                <div class="form-group"> 
                                    <label class="col-sm-3 control-label" for="description" name="descriptionLabel" id="descriptionLabel">  Description </label> 
                                    <div class="col-sm-9"> 
                                        <textarea name="description[]" id="description" placeholder="Enter brief desciption for module"> </textarea> 
                                    </div> 
                                </div> 
                            </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
