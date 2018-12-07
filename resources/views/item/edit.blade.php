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
    										<h2>Add Item</h2>
    										<p>Hi <strong>{{ Auth::user()->name }}</strong>! </p>
    									</div>
    								</div>
    							</div>
    							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
    								<div class="breadcomb-report">
    									<a href="" class="btn btn-default notika-btn-default waves-effect">Back</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Breadcomb area End-->

        <!-- Form Examples area start-->
        <div class="form-example-area">
            <div class="container">
                <div class="row" style="margin-bottom: 5em">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap mg-t-30">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Item Data</h2>
                            </div>
                            <form class="" action="{!! route('item.update', ['id'=>$item->id]) !!}" method="post">
                                {{ csrf_field() }}
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm horizontal-label">Item Name</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Item Name" name="name" value="{{ $item->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm horizontal-label">Category</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Category Name" name="category" value="{{ $item->category }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm horizontal-label">Unit</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control input-sm" placeholder="Unit" name="unit" value="{{ $item->unit }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                <label class="hrzn-fm horizontal-label">Price</label>
                                            </div>
                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <input type="number" class="form-control input-sm" placeholder="Item Price" name="price" value="{{ $item->price }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int mg-t-15">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">

                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Examples area End-->
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
