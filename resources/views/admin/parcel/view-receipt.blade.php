<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>invoice - {{ $appSetting->website_name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('admin/invoice/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel=icon href="{{ asset('uploads/favicon/'.$appSetting->favicon) }}" sizes="20x20" type="image/png">
    <style type="text/css">
        body {
            margin-top: 20px;
            background-color: #f7f7ff;
        }

        #invoice {
            padding: 0px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #0757FE;
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #FA4318
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid red;
            background: #e7f2ff;
            padding: 10px;
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,
        .invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: red;
            font-size: 1.2em
        }

        .invoice table .qty,
        .invoice table .total,
        .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #0757FE;
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #0757FE;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0);
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .invoice table tfoot tr:last-child td {
            color: red;
            font-size: 1.4em;
            border-top: 1px solid #FA4318
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice>div:last-child {
                page-break-before: always
            }
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid red;
            background: #e7f2ff;
            padding: 10px;
        }
    </style>

<style>
    div.gallery {
      margin: 5px;
      border: 0px solid #ccc;
      float: left;
      width: 180px;
    }
    
    div.gallery:hover {
      border: 0px solid #777;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
</style>
</head>

<body>
    <div class="container">
        <div class="card">

            <div class="card-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <div class="text-end">
                            <button type="button" onclick="window.print()" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                            <!-- <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as
                                PDF</button> -->
                        </div>
                        <hr>
                    </div>
                    <div class="invoice overflow-auto">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">
                                    <div class="col">
                                        <a href="index">
                                            <img src="{{ asset('uploads/favicon/'.$appSetting->favicon) }}" width="80" alt>
                                        </a>
                                    </div>
                                    <div class="col company-details">
                                        <div class="col">
                                            <a href="javascript:;">
                                                <img src="{{ asset('uploads/images/index.png') }}" width="150" alt>
                                            </a>
                                            <h4>{{ $parcel->tracking_id }}</h4>
                                        </div>
                                        
                                        <h2 class="name" >
                                            <a style="color: red;" target="_blank" href="javascript:;">
                                                {{ $appSetting->website_name }} <span style="color:
                                            </a>
                                        </h2>
                                        
                                        <div>{{ $appSetting->address }}</div>
                                        
                                        <div><a style="color: #0757FE;" href="" class="__cf_email__"
                                                >{{ $appSetting->email }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">INVOICE FROM:</div>
                                        <h4 class="to">Name: {{ $parcel->sender_name }}</h4>
                                        <div class="address">Address: {{ $parcel->sender_address }}</div>
                                        <div class="email"><a style="color: red;"
                                                href=""><span class="__cf_email__">Email: {{ $parcel->sender_contact }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col invoice-details">
                                        <div class="text-gray-light">INVOICE TO:</div>
                                        <h4 class="to">Name: {{ $parcel->reci_name }}</h4>
                                        <div class="address">Address: {{ $parcel->reci_address }}</div>
                                        <div class="email"><a style="color: red;"
                                                href=""><span class="__cf_email__">Email: {{ $parcel->reci_contact }}</span></a>
                                        </div>
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Status: {{ $parcel->status }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="no">Departure Date: <br> {{ $parcel->dep_date }}</td>
                                            <td class="text-left" width="20">
                                            Pickup Date: <br>{{ $parcel->pickup_date }}  
                                            </td>
                                            <td class="unit">Delivery Date: <br>{{ $parcel->exp_date }}</td>
                                            <td class="qty">Branch Processed: <br>{{ $parcel->branch_pro }} </td>
                                            <td class="total">Pickup Branch: <br>{{ $parcel->pickup_branch }}</td>
                                        </tr>
                                        <tr>
                                            <td class="no">Total Price: ${{ $parcel->total_price }}<br></td>
                                            <td class="text-left">
                                            Carrier: <br>{{ $parcel->carrier_no }}
                                            </td>
                                            <td class="unit">Quantity: <br>{{ $packages->quantity }}</td>
                                            <td class="qty">Package Type: <br>{{ $packages->type }}</td>
                                            <td class="total">Width: <br>{{ $packages->width }}</td>
                                        </tr>
                                        <tr>
                                            <td class="no">Height: <br>{{ $packages->height }}</td>
                                            <td class="text-left">
                                            Weight: <br>{{ $packages->weight }}
                                            </td>
                                            <td class="unit">Length: <br>{{ $packages->length }}</td>
                                            <td class="qty"></td>
                                            <td class="total"></td>
                                        </tr>
                                         
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                                <table>
                                    @if ($parcel->images)
                                @foreach ($parcel->images as $image)
                                    <div class="gallery">
                                        <img src="{{ asset('uploads/parcel/'.$image->image) }}" style="width:80px;height:80px" class="me-4 border responsive" alt="">
                                    </div>    
                                @endforeach
                            
                            @endif
                                </table>
                                <br><br>
                                <div class="thanks"></div>
                                <div class="notices">
                                    <div>NOTICE:</div>
                                    <div class="notice">{{ $packages->description }}</div>
                                </div>
                            </main>
                            <footer>© Copyright 2024 {{ $appSetting->website_name }}, All right reserved.
                            </footer>
                        </div>

                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('admin/invoice/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('admin/invoice/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
