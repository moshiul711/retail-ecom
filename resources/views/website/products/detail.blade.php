@extends('master')
@section('title')
    Nest Shaped Chair
@endsection

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
                        <li class="breadcrumb-item active" aria-current="page">Products Details</li>
                        <li class="breadcrumb-item active" aria-current="page">Nest Shaped Chair</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="row g-0">
                <div class="col-md-4 border-end">
                    <img id="mainImage" src="{{ asset('/') }}website/assets/images/products/13.png" class="img-fluid"
                        alt="...">
                    <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                        <div class="col">
                            <img src="{{ asset('/') }}website/assets/images/products/20.webp" width="70"
                                class="border rounded cursor-pointer" onclick="changeImage(this)" alt="">
                        </div>
                        <div class="col">
                            <img src="{{ asset('/') }}website/assets/images/products/11.png" width="70"
                                class="border rounded cursor-pointer" onclick="changeImage(this)" alt="">
                        </div>
                        <div class="col">
                            <img src="{{ asset('/') }}website/assets/images/products/14.png" width="70"
                                class="border rounded cursor-pointer" onclick="changeImage(this)" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">Off-White Odsy-1000 Men Half T-Shirt</h4>
                        <div class="d-flex gap-3 py-3">
                            <div class="cursor-pointer">
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-warning'></i>
                                <i class='bx bxs-star text-secondary'></i>
                            </div>
                            <div>0 reviews</div>
                            <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div>
                            <div class="text-primary"><i class='bx bx-cube-alt align-middle'></i> 134 Stock</div>
                        </div>
                        <div class="mb-3">
                            <span class="price h4">৳149.00</span>
                            <span class="text-muted price h4 text-decoration-line-through ps-5">৳149.00</span>
                            <span class="btn btn-danger btn-sm price h4 ms-5">10% Off</span>
                        </div>
                        
                        <p class="card-text fs-6">Virgil Abloh’s Off-White is a streetwear-inspired collection that
                            continues to break away from the conventions of mainstream fashion. Made in Italy, these black
                            and brown Odsy-1000 low-top sneakers.</p>
                        <dl class="row">
                            <dt class="col-sm-3">Model#</dt>
                            <dd class="col-sm-9">Odsy-1000</dd>

                            <dt class="col-sm-3">Color</dt>
                            <dd class="col-sm-9">Brown</dd>

                            <dt class="col-sm-3">Origin</dt>
                            <dd class="col-sm-9">Russia, USA, and Europe </dd>
                        </dl>
                        <div class="row ">
                            <div class="col">
                                <label class="form-label">Quantity: </label>
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="input-group input-spinner">
                                            <input type="number" class="form-control" value="1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-outline-primary w-100">
                                            <span class="text">Add to cart</span> 
                                            <i class='bx bxs-cart-alt'></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                            aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                                </div>
                                <div class="tab-title"> Product Description </div>
                            </div>
                        </a>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab"
                            aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                                </div>
                                <div class="tab-title">Reviews</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                            retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                            Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                            terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                            american apparel, butcher voluptate nisi.</p>
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                            retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                            Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                            terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                            american apparel, butcher voluptate nisi.</p>
                    </div>
                    
                    <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
                            retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft
                            beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever
                            gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you
                            probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu
                            synth chambray yr.</p>
                    </div>
                </div>
            </div>

        </div>


        <h6 class="text-uppercase mb-0">Related Product</h6>
        <hr />
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5 product-grid">
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/01.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Light Grey Headphone</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳240</span><span>৳199</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/02.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Black Cover iPhone 8</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳179</span><span>৳110</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/20.webp" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                        class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/03.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/04.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/01.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Light Grey Headphone</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳240</span><span>৳199</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/02.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Black Cover iPhone 8</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳179</span><span>৳110</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/20.webp" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/03.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/') }}website/assets/images/products/04.png" class="img-fluid"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title">Men Hand Watch</h6>
                                <div class="cursor-pointer my-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                    <i class="bx bxs-star text-secondary"></i>
                                </div>
                                <div class="clearfix">
                                    <p class="mb-0 float-start fw-bold"><span
                                            class="me-2 text-decoration-line-through text-secondary">৳150</span><span>৳120</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
