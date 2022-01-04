@extends('layout.template')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/productshop.css') }}">
@endsection

@section('main')
    <main>
        <div class='container-fluid'>
            <div class="card mx-auto col-md-3 col-10 mt-5">
                <img class='mx-auto w-100' src="{{ asset('img/smcake08.jpg') }}" height="auto" />

                <div class="card-body text-center mx-auto">
                    <div class='cvp'>
                        <h4 class="card-title font-weight-bold">九入小塔禮盒</h4>
                        <p class="card-text">$520</p>
                        <h5>小塔禮盒 - 送禮自用兩相宜</h5>
                        <h6>年節送禮，精緻又得體
                            多種口味一次擁有
                            滿足視覺與味覺的雙饗宴
                            還不趕快提前預訂起來
                            與家人朋友一起分享吧~</h6>
                        <a href="#" class="btn details px-auto">庫存數量(1)</a><br />
                        <a href="#" class="btn cart px-auto">加入購物車</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')

@endsection
