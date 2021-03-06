@extends('layouts.template')

@section('css')

@endsection

@section('main')
<main>
    <!-- 輪播區塊 -->
    <section id="carousel">
        <!-- Slider main container -->
        <div class="swiper" id="myswiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560629_e29b336a_carousel-item-3.jpg?1630560629"
                        class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                    <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560626_10e78076_carousel-item-2.jpg?1630560626"
                        class="d-block w-100" alt="...">
                </div>
                <div class="swiper-slide">
                    <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560629_3be7dc3f_carousel-item-1.jpg?1630560629"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- 服務介紹區塊 -->
    <section id="service" class="py-5">
        <div class="container-lg d-flex flex-column justify-content-center align-items-center py-5 my-5">
            <h1>Raw Denim Heirloom Man Braid</h1>
            <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice
                poutine, ramps microdosing banh mi pug.</p>
            <div class="cards-l3 d-flex flex-column flex-md-row justify-content-center align-items-center mb-5">
                <div class="card d-flex justify-content-center align-items-center mx-2 mt-3">
                    <div class="icon-a rounded-circle d-flex align-items-center justify-content-center  color-a mb-3">
                        <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560629_40595f7d_show_about_image_1.jpg?1630560629"
                            alt="">
                    </div>
                    <!-- <i class="fas fa-user-circle fa-5x color-a mb-3"></i> -->
                    <p>嚴選的天然食材</p>
                    <span>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice poutine, ramps microdosing banh mi pug VHS try-hard.</span>
                    <a href="" class=" color-a  text-decoration-none mt-3">Learn More <svg fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="card  d-flex justify-content-center align-items-center mx-2 mt-3">
                    <div class="icon-a rounded-circle d-flex align-items-center justify-content-center  color-a mb-3">
                        <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560630_b8c7cd8f_show_about_image_2.jpg?1630560630"
                            alt="">
                    </div>
                    <!-- <i class="fas fa-user-circle fa-5x color-a mb-3"></i> -->
                    <p>有溫度的甜點</p>
                    <span>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice
                        poutine, ramps microdosing banh mi pug VHS try-hard.</span>
                    <a href="" class=" color-a  text-decoration-none mt-3">Learn More <svg fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg></a>
                </div>
                <div class="card  d-flex justify-content-center align-items-center mx-2 mt-3">
                    <div class="icon-a rounded-circle d-flex align-items-center justify-content-center  color-a mb-3">
                        <img src="//cdn1.cybassets.com/s/files/12991/theme/40198/assets/img/1630560626_47c1aadf_show_about_image_3.jpg?1630560626"
                            alt="">
                    </div>
                    <!-- <i class="fas fa-user-circle fa-5x color-a mb-3"></i> -->
                    <p>網路訂購新鮮製作</p>
                    <span>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                        juice
                        poutine, ramps microdosing banh mi pug VHS try-hard.</span>
                    <a href="" class="color-a  text-decoration-none mt-3">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <button type="button" class=" btn btn-primary backgroundcolor-a size-a">Button</button>
        </div>
    </section>

    <!-- 照片牆 -->
    <section id="photowall" class="py-5">
        <div class="container">
            <div class="textarea-c  d-flex mb-5 flex-column flex-lg-row">
                <h1 class="w-25">Master Cleanse Reliac Heirloom</h1>
                <p class="w-75 ">
                    Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies
                    heirloom.
                </p>
            </div>
            <div class="imgs d-flex ">
                <div class="left-img w-50  d-flex flex-wrap">
                    <img class="w-50 p-2" src="./img/500.jpeg" alt="">
                    <img class="w-50 p-2" src="./img/501.jpeg" alt="">
                    <img class="w-100 p-2" src="./img/600.jpeg" alt="">
                </div>
                <div class="right-img w-50 d-flex flex-wrap">
                    <img class="w-100 p-2" src="./img/601.jpeg" alt="">
                    <img class="w-50 p-2" src="./img/504.jpeg" alt="">
                    <img class="w-50 p-2" src="./img/502.jpeg" alt="">

                </div>
            </div>
        </div>
    </section>

    <!-- 產品 -->
    <section id="product" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-5 offset-1">
                    <img class="w-100" src="./img/logo01.jpeg" alt="">
                </div>
                <form class="col-5" action="/cart" method="get">
                    <div class="hightlight-product-type">鐵盒手工餅乾</div>
                    <div class="hightlight-product-name">純手工製作 無添加防腐劑 低糖無負擔</div>
                    <div class="hightlight-product-review d-flex">
                        <div class="five-star d-flex align-items-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="reviews mx-2">4 Reviews</div>
                        <div class="share d-flex align-items-center">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-weixin"></i>
                        </div>
                    </div>
                    <p class="my-3">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                        taximy
                        chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                        Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over,
                        neutra jean shorts keytar banjo tattooed umami cardigan.</p>

                    <div class="d-flex align-items-center">
                        <span>Color</span>
                        <div class="color-group">
                            <!-- 1. 選擇到對應的 radio 要變成指定的顏色 -->
                            <!-- 2. 產生一個 label ，根據 "for" 及 input 的 "id"做配對，選擇到 label 時等於選到該 input -->
                            <!-- 3. 把 input 跟 label 包在一起 -->
                            <!-- 4. 把 input 寫偽元素做出假的選擇框 -->
                            <!-- 5. 把 label 做成被選擇後的模樣，透明度設為 0 -->
                            <!-- 6. 當 input 被選擇到時，找到旁邊(用兄弟選擇器)的 label 將透明度改為 1 -->
                            <input name="color" id="red" type="radio" class="color-radio" checked>
                            <label for="red" class="color-label" style="background-color: red;"></label>
                        </div>
                        <div class="color-group">
                            <input name="color" id="green" type="radio" class="color-radio ml-1">
                            <label for="green" class="color-label" style="background-color: green;"></label>
                        </div>
                        <div class="color-group">
                            <input name="color" id="blue" type="radio" class="color-radio">
                            <label for="blue" class="color-label" style="background-color: blue;"></label>
                        </div>

                        <label for="size" class="ml-2 mr-2">Size</label>
                        <select name="size" id="size" class="form-control w-auto">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">add cart</button>
                </form>
            </div>
        </div>
    </section>

    <!-- 地圖 -->
    <section id="map" class="py-5">
        <div class="container">
            <div class="feedback" id="contact-us">
                <h3>Feedback</h3>
                <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <form action="/mypath" method="get">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5144.5286637917025!2d120.72041640819057!3d24.251181804202698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2877808fa5ca752d!2z5LiK55uK6LOH6KiK!5e0!3m2!1szh-TW!2stw!4v1638500984310!5m2!1szh-TW!2stw"
            width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>
</main>
@endsection

@section('js')

@endsection
