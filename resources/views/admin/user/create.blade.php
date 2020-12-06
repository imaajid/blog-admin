@extends('admin.layouts.app')


@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tittle</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="col lg-6">



                            <div class="form-group">
                                <label for="tittle">Tittles</label>
                                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="tittle">
                            </div>
                            <div class="form-group">
                                <label for="subtittle">Sub Tittles</label>
                                <input type="text" class="form-control" id="subtittle" name="subtittle" placeholder="subtittle">
                            </div>
                            <div class="form-group">
                                <label for="slug">slug Tittles</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
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
                                    <input type="checkbox" name="status"> Publish
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
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form>
                                    <textarea class="textarea" name="body" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
