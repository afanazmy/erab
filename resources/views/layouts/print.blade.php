<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Rancangan Anggaran Biaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('notika/') !!}img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{!! asset('notika/css/bootstrap.min.css') !!}">
    <!-- Bootstrap CSS -->

    {{-- <link rel="stylesheet" href="{!! asset('notika/css/style.css') !!}"> --}}
    <style media="print">
        html {
            padding: 20px
        }
    </style>

</head>

<body>

    <div class="search-engine-area">
        <div class="">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="contact-hd search-hd-eg">
                            <img src="{!! asset('treviso/images/ERAB.png') !!}" style="width:300px; max-width:300px;">
                            <br>
                            <br>

                        </div>
                        <div class="search-eg-table" style="margin-bottom: 3em; margin-top: 2em">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Created at</th>
                                        <th>Created by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $project->name }}</td>
                                        <td>
                                            {{ Carbon\Carbon::parse($project->created_at)->toFormattedDateString() }}
                                        </td>
                                        <td>{{ $project->user->name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="search-eg-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Unit</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project->items as $item)
                                    <tr class="item">
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ number_format($item->price,0,".",".") }}</td>
                                        <td>{{ $item->pivot->quantity }}</td>
                                        <td class="text-right">
                                            {{ number_format($item->price * $item->pivot->quantity,0,".",".") }}
                                        </td>
                                    </tr>
                                    @php
                                    $total += $item->price * $item->pivot->quantity;
                                    @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-center">Total</th>
                                        <th class="text-right">
                                            {{ number_format($total,0,".",".") }}
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>