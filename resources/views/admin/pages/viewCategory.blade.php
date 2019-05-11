@extends('admin.admin_master')
@section('content')
	<div class="row-fluid">
        <div class="span12">
        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget red">
            <div class="widget-title">
                <h4>All Category</h4>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered" id="sample_1">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th class="hidden-phone">Category Name</th>
                        <th class="hidden-phone">Status</th>
                        <th class="hidden-phone">created at</th>
                        <th class="hidden-phone">Updated at</th>
                        <th class="hidden-phone">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($result as $single_cat)
                        <tr class="odd gradeX">
                            <td>{{ $single_cat->category_id }}</td>
                            <td class="hidden-phone">{{ $single_cat->category_name }}</td>
                            <td class="hidden-phone">
                                <?php 
                                    if ($single_cat->publication_status == '1') {
                                        echo "Published";
                                    }else{
                                        echo "Unpublished";
                                    }
                                ?>
                            </td>
                            <td class="center hidden-phone">{{ $single_cat->created_at }}</td>
                            <td class="center hidden-phone">{{ $single_cat->updated_at }}</td>
                            <td class="hidden-phone">
                            	<p>
                                    @if($single_cat->publication_status == '1')
                                    <a href="{{ URL::to('unpublish_category/'.$single_cat->category_id) }}" class="btn  btn-danger"><i class="icon-thumbs-down"></i></a>
                                    @else
                                    <a href="{{ URL::to('publish_category/'.$single_cat->category_id) }}" class="btn  btn-primary"><i class="icon-thumbs-up"></i></a>
                                    @endif
                            		<a href="" class="btn  btn-primary"><i class="icon-edit"></i></a>
                            		<a href="{{ URL::to('/delete_category/'.$single_cat->category_id) }}" class="btn  btn-danger"><i class="icon-trash"></i></a>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE widget-->
        </div>
    </div>
@endsection