@extends('master')
@section('title') Cart Details @endsection


@section('product-content')
<section id="product-detail">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('website') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Cart Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Cart Products</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/') }}website/assets/images/products/20.webp" class="product-img-2"alt="product img">
                                    </td>
                                    <td>{{ Str::limit('Off-White Odsy-1000 Men Half T-Shirt',30) }}</td>
                                    <td>
                                        <input type="number" class="form-control cart-quantity" min="1" value="1" max="10">
                                    </td>
                                    <td>৳1250.00</td>
                                    <td>৳2000</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="javascript:;" class="ms-3 bg-danger text-white"><i class='bx bx-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('/') }}website/assets/images/products/01.png" class="product-img-2"alt="product img">
                                    </td>
                                    <td>{{ Str::limit('Off-White Odsy-1000 Men Half T-Shirt',30) }}</td>
                                    <td>
                                        <input type="number" class="form-control cart-quantity" min="1" value="1" max="10">
                                    </td>
                                    <td>৳1250.00</td>
                                    <td>৳2000</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="javascript:;" class="ms-3 bg-danger text-white"><i class='bx bx-trash'></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Order Summary</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" style="border-bottom-width: 0px">
                            <tbody>
                                <tr>
                                    <td>Subtotal (2 items)</td>
                                    <td class="float-end">৳ 2000</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td class="float-end">- ৳ 00</td>
                                </tr>
                                {{-- <tr>
                                    <td><input type="text" placeholder="Enter Voucher Code" class="form-control"></td>
                                    <td class="float-end"><button class="btn own-btn">
                                        <span class="text">Apply</span> 
                                    </button></td>
                                </tr> --}}
                                <tr>
                                    <td>Total</td>
                                    <td class="float-end">৳ 2000</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ route('checkout') }}" class="own-btn btn">
                                            Proceed To Checkout (2)
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

