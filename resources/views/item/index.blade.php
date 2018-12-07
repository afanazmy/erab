@extends('layouts.master')

@section('content')
    <!-- Breadcomb area Start-->
    	<div class="breadcomb-area" style="margin-top: 3em">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    					<div class="breadcomb-list">
    						<div class="row">
    							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    								<div class="breadcomb-wp">
    									<div class="breadcomb-icon">
    										<i class="fa fa-user"></i>
    									</div>
    									<div class="breadcomb-ctn">
    										<h2>Item</h2>
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! </p>
    									</div>
    								</div>
    							</div>
    							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
    								<div class="breadcomb-report">
    									<a href="{!! route('item.create') !!}" class="btn btn-success notika-btn-success waves-effect">Add Item</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Breadcomb area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>List Item</h2>
                            {{-- <p>Jika ada data yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal</p> --}}
                            {{-- <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="notika-icon notika-close"></i>
                                    </span>
                                </button> Jika ada data kepanitiaan yang ingin diubah silahkan hubungi Sekretaris Umum / Sekretaris Jenderal
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Item Name</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($items)
                                        @foreach ($items as $key => $item)
                                            <tr>
                                                <td>{{ $item->category }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->unit }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td style="text-align: center">
                                                    <a href="{!! route('item.edit',['id'=>$item->id]) !!}" class="btn btn-lightgreen lightgreen-icon-notika waves-effect"><i class="notika-icon notika-menus"></i></a>
                                                    <a href="{!! route('item.destroy',['id'=>$item->id]) !!}" class="btn btn-danger danger-icon-notika waves-effect"><i class="notika-icon notika-close"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Item Name</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
@endsection

@section('script')
    <script type="text/javascript">
    (function ($) {
    "use strict";

    $(document).ready(function() {
         $('#data-table-basic').DataTable();
    });

    })(jQuery);
    </script>
@endsection
