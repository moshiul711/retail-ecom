
<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('product-content'); ?>
    <section id="product-detail">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('website')); ?>"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <form action="" method="get">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Delivery Details</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label for="input13" class="form-label">Full Name</label>
                                    <div class="position-relative input-icon">
                                        <input required type="text" class="form-control" id="input13"
                                            placeholder="Full Name" name="name">
                                        <span class="position-absolute top-50 translate-middle-y"><i
                                                class='bx bx-user'></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="input15" class="form-label">Phone</label>
                                    <div class="position-relative input-icon">
                                        <input required type="tel" class="form-control" id="input15"
                                            placeholder="Phone" name="phone">
                                        <span class="position-absolute top-50 translate-middle-y"><i
                                                class='bx bx-phone-call'></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="input16" class="form-label">Email</label>
                                    <div class="position-relative input-icon">
                                        <input required type="email" class="form-control" id="input16"
                                            placeholder="Email" name="email">
                                        <span class="position-absolute top-50 translate-middle-y"><i
                                                class='bx bx-envelope'></i></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="input19" class="form-label">Division</label>
                                    <select id="input19" class="form-select" required name="division">
                                        <option selected>Choose Division...</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="input19" class="form-label">District</label>
                                    <select id="input19" class="form-select" required name="district">
                                        <option selected>Choose District...</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="input19" class="form-label">Thana</label>
                                    <select id="input19" class="form-select" required name="thana">
                                        <option selected>Choose Thana...</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="input23" class="form-label">Address</label>
                                    <textarea class="form-control" id="input23" placeholder="Address ..." rows="3" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Order Details</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="checkout-products">
                                <div class="row border-bottom mb-1">
                                    <div class="col-2">
                                        <img src="<?php echo e(asset('/')); ?>website/assets/images/products/20.webp"
                                            class="product-img-2" alt="product img">
                                    </div>
                                    <div class="col-10">
                                        <a href="<?php echo e(route('product.detail', [1, 'Nest Shaped Chair'])); ?>"
                                            class="text-dark fw-bold">
                                            <p style="margin-bottom: 0rem">Off-White Odsy-1000 Men Half T-Shirt</p>
                                        </a>
                                        <p style="margin-bottom: 0rem">Price: ৳ 2000</p>
                                        <p style="margin-bottom: 0rem">Quantity: 1</p>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Subtotal (4 Products)</td>
                                            <td class="float-end">৳ 2000</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Charge</td>
                                            <td class="float-end">৳ 20</td>
                                        </tr>
                                        <tr>
                                            <td>Discount</td>
                                            <td class="float-end">- ৳ 00</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" placeholder="Enter Voucher Code"
                                                    class="form-control"></td>
                                            <td class="float-end"><button class="btn own-btn">
                                                    <span class="text">Apply</span>
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="float-end">৳ 2000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <h6 class="card-header px-0">Payment Info</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="col-lg-12 pl-0">
                                                    <div class="form-check form-check-success pb-2">
                                                        <input class="form-check-input" required type="radio"
                                                            name="payment_type" value="cod" id="flexRadioSuccess">
                                                        <label class="form-check-label" for="flexRadioSuccess">
                                                            <img src="https://watchzonebd.com/cod_e.png" width="250"
                                                                alt="">
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-primary pt-2">
                                                        <input class="form-check-input" required type="radio"
                                                            name="payment_type" value="online" id="flexRadioprimary">
                                                        <label class="form-check-label" for="flexRadioprimary">
                                                            <img src="<?php echo e(asset('/')); ?>website/assets/images/icons/payment-online.webp" width="250"
                                                                alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="input24" required>
                                        <label class="form-check-label" for="input24">
                                            I have read and agree to WSC's
                                            <a href="">Terms & Conditions</a>,
                                            <a href="">Privacy Policy</a>, &
                                            <a href="">Return & Refund Policy</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="own-btn btn">
                                        Complete Order(2)
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\rocker-ecom\resources\views/website/checkout/index.blade.php ENDPATH**/ ?>