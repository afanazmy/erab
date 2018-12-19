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
                                    <h2>Add Project</h2>
                                    <p>Hi <strong>{{ Auth::user()->name }}</strong>! </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="{{ route('project') }}" class="btn btn-default notika-btn-default waves-effect">Back</a>
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

    </div>
</div>
<!-- Form Examples area End-->

<!-- Normal Table area Start-->
<div class="normal-table-area">
    <div class="container">
        <form class="" action="{!! route('project.store') !!}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Project Data</h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Project Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="project-name" class="form-control input-sm" placeholder="Project Name" name="name" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="col-lg-12" style="margin-bottom: 2em">
                            <div class="col-lg-6">
                                <div class="basic-tb-hd">
                                    <h2>Selected Item</h2>
                                    <!-- <p>Add Classes (<code>.table-striped</code>) to any table row within the tbody</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-example-int form-horizental">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-3 col-sm-3 col-xs-12">

                                            </div>
                                            <div class="col-lg-2 col-md-7 col-sm-7 col-xs-12">
                                                <div class="nk-int-st">
                                                    <button type="button" class="btn btn-info notika-btn-info" data-toggle="modal" data-target="#myModalone">Add Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Category</th>
                                        <th>Unit</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Sub Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    <tr>
                                        <td colspan="7" id="no-data" style="text-align: center">No data</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" style="text-align: center">Total</th>
                                        <th id="total" colspan="2" class="number">0</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <button type="submit" id="submit" class="btn btn-success notika-btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal fade" id="myModalone" role="dialog">
            <div class="modal-dialog modals-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_item_clicked">
                        <input type="hidden" id="item_clicked_name">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Item Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <div class="bootstrap-select fm-cmp-mg">
                                                <select class="selectpicker" id="item_id" name="item_id" data-live-search="true">
                                                    <option value="" selected disabled>Select Item</option>
                                                    @foreach ($items as $key => $item)
                                                    <option class="item-option" data-id="{{ $item->id }}" value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Category</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="category" class="form-control input-sm" placeholder="Category Name" name="category" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Unit</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" id="unit" class="form-control input-sm" placeholder="Unit" name="unit" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Quantity</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="number" id="quantity" class="form-control input-sm" placeholder="Quantity" name="quantity" writeable>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm horizontal-label">Price</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="number" id="price" class="form-control input-sm number" placeholder="Item Price" name="price" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int form-horizental">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                    <label class="hrzn-fm horizontal-label">Sub Total</label>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="nk-int-st">
                                        <input type="number" id="subtotal" class="form-control input-sm number" placeholder="Sub Total" name="subtotal" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="add-button" class="btn btn-default" data-dismiss="modal">Add Item</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Normal Table area End-->
@endsection

@section('script')
<script type="text/javascript">
    (function($) {
        "use strict";

        $(document).ready(function() {
            $('#data-table-basic').DataTable();
        });

    })(jQuery);
</script>

<script type="text/javascript">
    var total = 0;
    $(document).ready(function() {
        $('#item_id').on('change', function(e) {
            var id = $(this).val();

            $.get("/api/item/" + id, function(data) {
                $('#id_item_clicked').val(data.result.id);
                $('#item_clicked_name').val(data.result.name);
                $('#category').val(data.result.category);
                $('#unit').val(data.result.unit);
                $('#price').val(data.result.price);
            });

            var subtotal = $('#price').val() * $('#quantity').val();
            $('#subtotal').val(subtotal);

            $('.number').number(true, 2, ',', '.');
        });

        $('#quantity').on('keyup', function(e) {
            var subtotal = $('#price').val() * $('#quantity').val();
            $('#subtotal').val(subtotal);
            $('.number').number(true, 2, ',', '.');
        });

        $('#add-button').on('click', function functionName() {
            total += parseInt($('#subtotal').val());
            var markup = '<tr class="row-item"><input type="hidden" name="item_id[]" value="' + $('#id_item_clicked').val() + '"><input type="hidden" name="quantity[]" value="' + $('#quantity').val() + '"><td>' + $(
                    '#item_clicked_name').val() +
                '</td><td>' + $('#category').val() + '</td><td>' + $('#unit').val() + '</td><td>' + $('#quantity').val() + '</td><td class="number">' + $('#price').val() + '</td><td class="number">' + $('#subtotal').val() +
                '</td><td><button type="button" data-subtotal="' + $('#subtotal').val() + '" class="btn btn-danger danger-icon-notika waves-effect delete-item"><i class="notika-icon notika-close"></i></button></td></tr>';
            $('#no-data').hide();
            $('#table-body').append(markup);
            $('#total').html(total);
            $('.number').number(true, 2, ',', '.');
        });

        $('#submit').on('click', function() {
            var count_row = $('#table-body tr').size();
            if (count_row == 1 && $('#project-name').val() != '') {
                swal({
                    "timer": 5000,
                    "title": "Error",
                    "text": "Please select an item",
                    "showConfirmButton": true,
                    "type": "error"
                });
                event.preventDefault();
            }
        })
    });

    $(document).on('click', '.delete-item', function() {
        $(this).parent().parent().remove();
        var count_row = $('#table-body tr').size();
        total -= parseInt($(this).data('subtotal'));
        $('#total').html(total);
        $('.number').number(true, 2, ',', '.');
        if (count_row == 1) {
            $('#no-data').show();
        }
    });
</script>
@endsection