@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">
                    <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editPost', array($posts->id)) }}"
                    enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!--text Fielad for Post Title-->

                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title" class="col-md-4 control-label" required>Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" 
                                value="{{$posts-> post_title }}">

                                @if ($errors-> has ('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors -> first ('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                <!--textarea for Post Body--> 
                        <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                            <label for="post_body" class="col-md-4 control-label" required >Post Body</label>

                            <div class="col-md-6">
                                <textarea id="email" rows="7" class="form-control" name="post_body" required="">{{ $posts-> post_body}}</textarea>

                                @if ( $errors-> has ('post_body'))
                                    <span class="help-block">
                                        <strong>{{ $errors -> first('post_body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-md-4 control-label">Category</label>
                             

                             <!--for combobox that selects from DB-->
                            <div class="col-md-6">
                                <select id="category_id" type="category_id" class="form-control" name="category_id"
                                    required="" >
                                        <option value="{{ $category->id}}">{{$category->category}}</option>
                                        @if (count($categories) > 0)
                                           @foreach ($categories -> all() as $category)
                                                <option value="{{ $category->id}}">{{$category->category}}</option>


                                           @endforeach

                                        @endif
                                    </select>

                                @if ($errors -> has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors -> first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           

                           <!--image selection-->
                         <div class="form-group{{ $errors->has('post_image') ? ' has-error' : '' }}">
                            <label for="post_image" class="col-md-4 control-label">Featured Image</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control" name="post_image">

                                @if ($errors-> has('post_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors -> first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            

                            <!--Button to submit/Publish Post-->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    <i class="fa fa-btn fa-user"></i> update Post
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
