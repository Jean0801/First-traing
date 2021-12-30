@extends('layout.template')

@section('css')
    <style>
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

    </style>
@endsection

@section('main')
    <main>
        <div class="container mt-5">
            <h2>全部商品</h2>
            <div class="px-lg-5">
                <div class="row">
                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset('/img/smcake08.jpg') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5><a href="#" class="text-dark">九入小塔禮盒</a></h5>
                                <p class="small text-muted mb-0">外縣市不可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal">$520</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/cake-strawberry.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">法式草莓費雪蛋糕</a></h5>
                                <p class="small text-muted mb-0">外縣市不可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">$350~</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/pai-lemon.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">蔓越莓起司檸檬派</a></h5>
                                <p class="small text-muted mb-0">外縣市不可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        $450~</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/cake-coco.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">榛果奶酒可可蛋糕</a></h5>
                                <p class="small text-muted mb-0">外縣市可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-success px-3 rounded-pill font-weight-normal">$820~</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/smcake02.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">青檸檬生乳酪4吋</a></h5>
                                <p class="small text-muted mb-0">外縣市可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">$280</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/smcake03.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">雙橙生乳酪4吋</a></h5>
                                <p class="small text-muted mb-0">外縣市可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        $280</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/smcake11.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">法式提拉米蘇4吋</a></h5>
                                <p class="small text-muted mb-0">外縣市可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-info px-3 rounded-pill font-weight-normal">$280</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/smcake05.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">混血巧克力蛋糕4吋</a></h5>
                                <p class="small text-muted mb-0">外縣市可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        $350</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/cake-redvelvet.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">薰衣草伯爵紅絲絨</a></h5>
                                <p class="small text-muted mb-0">外縣市不可宅配</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal">$820~</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/dp01.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">生日蠟燭</a></h5>
                                <p class="small text-muted mb-0">銀色、霧紫色</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">$80</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm">
                            <img src="./AB-img/dp06.jpg" alt="" class="img-fluid card-img-top img-other">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">彩色蠟燭</a></h5>
                                <p class="small text-muted mb-0">多種款式</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        $40</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="./AB-img/dp04.jpg" alt=""
                                class="img-fluid card-img-top img-other">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">生日快樂插卡</a></h5>
                                <p class="small text-muted mb-0">帽子造型設計插卡</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">加入購物車</span></p>
                                    <div class="badge badge-success px-3 rounded-pill font-weight-normal">$20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                </div>
                <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')

@endsection
