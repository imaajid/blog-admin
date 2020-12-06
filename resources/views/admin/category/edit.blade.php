@extends('admin.layouts.app')

@section('main-content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">CategoryTittle</h3>
                </div>
            @include('include/messages')

            <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('category.update',$category->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="form-group">
                                <label for="tag tittle">category Tittles</label>
                                <input type="text" class="form-control" id="tittle" name="name" placeholder="tag tittle" value="{{ $category->name }}">
                            </div>

                            <div class="form-group">
                                <label for="slug">slug Tittles</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $category->slug }}">
                            </div>

                            <!-- /.box-header -->


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
                            </div>
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
