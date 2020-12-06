@extends('admin.layouts.app')
@section('headSection')

    <link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">

@endsection

@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tittle</h3>
                </div>
            @include('include/messages')
            <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="box-body">
                        <div class="col lg-6">
                            <div class="form-group">
                                <label for="tittle">Tittles</label>
                                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="tittle" value="{{ $post->tittle }}">
                            </div>
                            <div class="form-group">
                                <label for="subtittle">Sub Tittles</label>
                                <input type="text" class="form-control" id="subtittle" name="subtittle" placeholder="subtittle" value="{{ $post->subtittle }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">slug Tittles</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $post->slug }}">
                            </div>

                        </div>
                        <div class="col lg-6">
                            <div class="form-group">
                                <label for="image">File input</label>
                                <input type="file" name="image" id="image">

                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" value="1" @if( $post->status == 1) checked @endif> Publish
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Bootstrap WYSIHTML5
                                    <small>Simple and fast</small>
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>

                            <div class="form-group">
                                <label>Select Tags</label>
                                <select class="form-control select2 " multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">

                                    @foreach($tags as $tag)

                                        <option value="{{ $tag->id }}"
                                                @foreach ($post->tags as $postTag)
                                                @if ($postTag->id == $tag->id)
                                                selected
                                            @endif
                                            @endforeach
                                        >{{ $tag->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2 " multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                                @foreach ($post->categories as $postCategory)
                                                @if ($postCategory->id == $category->id)
                                                selected
                                            @endif
                                            @endforeach
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- /.box-header -->
                            <div class="box-body pad">
                            <textarea  name="body" id="editor1"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="categories[]">
                                {{$post->body}}
                            </textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                        </div>
                    </div>

                </form>
            </div>

        </section>

        <!-- Main content -->


        <!-- /.box -->


    </div>
    <!-- /.col-->
    </div>
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
@section('footerSection');

<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}" ></script>

<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>


<script>
    $(document).ready(function(){
        $(".select2").select2();
    });
</script>

@endsection
