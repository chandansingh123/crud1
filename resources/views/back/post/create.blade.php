@extends('back.layouts.master')
@section('contents')
  @if (count($categories) > 0)
       <section class="content-header">
      <h1>
        Add New Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Add New Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-9">

              <div class="box">
                            
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif --}}
                  <!-- form start -->
                  <form role="form" action="{{route('posts.store')}}" method="post">
                  @csrf
                    <div class="box-body">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{old('title')}}" placeholder="Enter Title here" id="title" class="form-control">
                      </div>
                     
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="10" class="form-control">{{old('description')}}</textarea>
                      </div>
                          <div class="form-group">
                      <label>Categories</label>
                       @foreach ($categories as $category)
                      <div class="radio">
                      <div class="box-body">
                          <label>
                            <input type="radio" name="category" id="category-1" value="{{ $category->id }}">
                            {{ $category->title }}
                          </label>
                      </div>
                  @endforeach
                    </div>
                    </div>

                
                    
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button class="btn btn-primary" type="submit">Submit</button>
                      <button class="btn btn-primary" type="cancel">cancel</button>
                    </div>
                    
                  </form>
                </div>
          </div>
          <div class="col-md-3">
              {{--  <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Publish</h3>
                  </div>
                  <div class="box-body">
                      <div class="form-group">
                        <label for="published_at">Publish date</label>
                        <input type="text" class="form-control">
                      </div>
                  </div>
                  <div class="box-footer clearfix">
                      <div class="pull-left">
                          <a href="#" class="btn btn-default">Save Draft</a>
                      </div>
                      <div class="pull-right">
                          <a href="#" class="btn btn-primary">Publish</a>
                      </div>
                  </div>
              </div>  --}}
              {{--  <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Category</h3>
                  </div>  --}}
                  {{--  @foreach ($categories as $category)
                      <div class="radio">
                  <div class="box-body">
                          <label>
                            <input type="radio" name="category" id="category-1" value="option1">
                            {{ $category->title }}
                          </label>
                      </div>
                  @endforeach  --}}
                  {{--  </div>
              </div>  --}}
              

              <div class="form-group">
                  <div class="box-header with-border">
                      <h3 class="box-title">Category</h3>
                  </div>
               
                    </div>
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  @else
     <p>You must have atleast one Category</p>
    <p> <a href="{{ route('categories.index') }}"> create a category</p>
 @endif
@endsection