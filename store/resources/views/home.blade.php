@extends('layout')

@section('home')
 <!-- Page Content -->
 <main class="page-main">
    <div class="block fullwidth full-nopad bottom-space">
        <div class="container">
            <!-- Main Slider -->
            <div class="mainSlider" data-thumb="true" data-thumb-width="230" data-thumb-height="100">
                <div class="sliderLoader">بارگذاری...</div>
                <!-- Slider main container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide" data-thumb="images/slider/slide-02-thumb.png"
                             data-href="http://google.com" data-target="_blank">
                            <!-- _blank or _self ( _self is default )-->
                            <div class="wrapper">
                                <figure><img src="images/slider/slide-02.jpg" alt=""></figure>
                                <div class="text2-1 animate" data-animate="flipInY" data-delay="0"> سیکو</div>
                                <div class="text2-2 animate" data-animate="bounceIn" data-delay="500"> فصل فروش
                                </div>
                                <div class="text2-3 animate" data-animate="bounceIn" data-delay="1000">مارک
                                    محبوب
                                </div>
                                <div class="text2-4 animate" data-animate="rubberBand" data-delay="1500"> 70%
                                </div>
                                <div class="text2-5 animate" data-animate="hinge" data-delay="2000"> حراج</div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-01-thumb.png">
                            <div class="wrapper">
                                <figure><img src="images/slider/slide-01.jpg" alt=""></figure>
                                <div class="caption animate" data-animate="fadeIn">

                                    <div class="text2 animate" data-animate="bounceInLeft" data-delay="500">
                                        <strong>مجموعه</strong> جدید
                                    </div>
                                    <div class="text3 animate" data-animate="bounceInLeft" data-delay="1500">
                                        فشن <strong>زنانه</strong></div>
                                    <div class="animate" data-animate="fadeIn" data-delay="2000">
                                        <!-- coolbutton -->
                                        <a href="#" class="cool-btn"
                                           style="-webkit-clip-path: url(#coolButton); clip-path: url(#coolButton);">
                                            <span>بیشتر</span> </a>
                                        <svg class="clip-svg">
                                            <defs>
                                                <clipPath id="coolButton" clipPathUnits="objectBoundingBox">
                                                    <polygon points="0 .18, .99 .15, .91 .85, .07 .8"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <!-- // coolbutton -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-03-thumb.png">
                            <div class="wrapper">
                                <figure><img src="images/slider/slide-03.jpg" alt=""></figure>

                                <div class="text3-2 animate" data-animate="bounceInDown" data-delay="500">
                                    خیابان پر از فشن
                                </div>

                                <div class="text3-4 animate" data-animate="bounceIn" data-delay="1500"> شهر فشن
                                </div>

                                <a href="#" class="text3-6 animate" data-animate="rubberBand" data-delay="2500">
                                    خرید کنید </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-04-thumb.png">
                            <div class="wrapper">
                                <figure><img src="images/slider/slide-04.jpg" alt=""></figure>
                                <div class="text4-1 animate" data-animate="bounceInLeft" data-delay="0">تابستان
                                </div>

                                <div class="text4-3 animate" data-animate="bounceInUp" data-delay="1000">خرید
                                    مایو با تخفیف
                                </div>
                                <a href="#" class="text4-4 animate" data-animate="bounceInLeft"
                                   data-delay="1500">خریدکنید</a>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- pagination thumbs -->
                    <div class="swiper-pagination-thumbs">
                        <div class="thumbs-wrapper">
                            <div class="thumbs"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Slider -->
        </div>
    </div>
<div class="block">
    <div class="container">
                    <!-- Wellcome text -->
                    <div class="text-center bottom-space">
                        <h1 class="size-lg no-padding">به فروشگاه <span class="logo-font custom-color">سیکو</span>
                            خوش آمدید </h1>
                        <div class="line-divider"></div>
                        <p class="custom-color-alt">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                            <br> مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت
                            و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                            بیشتری را برای طراحان رایانه ای .
                        </p>
                    </div>
                    <!-- /Wellcome text -->
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="box style2 bgcolor1 text-center">
                                <div class="box-icon"><i class="icon icon-truck"></i></div>
                                <h3 class = "box-title"> حمل و نقل رایگان </h3>
                                <div class = "box-text"> ارسال رایگان برای همه سفارشات بیش از 199 دلار </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box style2 bgcolor2 text-center">
                                <div class="box-icon"><i class="icon icon-dollar"></i></div>
                                <h3 class = "box-title"> برگشت پول </h3>
                                <div class = "box-text"> 100٪ ضمانت استرداد پول </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box style2 bgcolor3 text-center">
                                <div class="box-icon"><i class="icon icon-help"></i></div>
                                <h3 class="box-title">پشتیبانی آنلاین</h3>
                                <div class="box-text">پشتیبانی سریع خدمات 24/7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block bottom-space">
                <div class="container">
                    <ul class="filters filters-product style2">
                        <li><a href="#" class="filter-label">همه<span class="count"></span></a></li>
                        <li><a href="#" class="filter-label" data-filter=".category1">جدید<span
                                class="count"></span></a>
                        </li>
                        <li><a href="#" class="filter-label" data-filter=".category2">فروش<span
                                class="count"></span></a></li>
                    </ul>
                    <div class="products-grid-wrapper isotope-wrapper">
                        <div class="products-grid isotope four-in-row product-variant-5">
                            <!-- Product Item -->
                            <div class="product-item large colorvariants category2">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-sale"><span>-20%</span></div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <div class="product-item-gallery-main">
                                                <a href="#"><img class="product-image-photo"
                                                                 src="images/products/product-16-c1.jpg" alt=""></a>
                                                <a href="quick-view.html" title="Quick View"
                                                   class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>مشاهده سریع</span></a>
                                            </div>
                                            <!-- /product main photo  -->

                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="wishlist active"> <i
                                                    class="icon icon-heart"></i><span>افزودن به لیست علاقه مندی ها</span>
                                            </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <ul class="color-swatch hidden-xs">
                                                <li class="active">
                                                    <a data-image="images/products/product-16-c1.jpg" href="#"><img
                                                            src="images/colorswatch/color-blue.png" alt="Blue"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-16-c2.jpg" href="#"><img
                                                            src="images/colorswatch/color-grey.png" alt="Gray"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-16-c3.jpg" href="#"><img
                                                            src="images/colorswatch/color-red.png" alt="Red"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-16-c4.jpg" href="#"><img
                                                            src="images/colorswatch/color-violet.png" alt="Violet"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-16-c5.jpg" href="#"><img
                                                            src="images/colorswatch/color-green.png" alt="Green"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Long sleeve overall"
                                                                              href="product.html"
                                                                              class="product-item-link">بافت آستین بلند </a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="old-price">190 تومان</span> <span
                                                    class="special-price">149 تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item large category1">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>جدید</span></div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <!-- product inside carousel -->
                                            <div class="carousel-inside slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <a href="#"><img class="product-image-photo"
                                                                         src="images/products/product-20.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img class="product-image-photo"
                                                                         src="images/products/product-20-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img class="product-image-photo"
                                                                         src="images/products/product-20-2.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <a class="carousel-control next"></a>
                                                <a class="carousel-control prev"></a>
                                            </div>
                                            <!-- /product inside carousel -->
                                            <a href="quick-view.html" title="Quick View"
                                               class="quick-view-link quick-view-btn"> <i
                                                    class="icon icon-eye"></i><span>مشاهده سریع</span></a>
                                            <!-- /product main photo  -->
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به لیست علاقه مندی ها</span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Lace back mini dress"
                                                                              href="product.html"
                                                                              class="product-item-link">لباس مینی پشت توری</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"><span class="price">239 تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید  </span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item previews-3 large category2">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-sale"><span>-20%</span></div>
                                            <!-- /Product Label -->
                                            <div class="product-item-gallery">
                                                <!-- product main photo -->
                                                <div class="product-item-gallery-main">
                                                    <a href="#"><img class="product-image-photo"
                                                                     src="images/products/product-26.jpg" alt=""></a>
                                                    <a href="quick-view.html" title="Quick View"
                                                       class="quick-view-link quick-view-btn"> <i
                                                            class="icon icon-eye"></i><span>مشاهده سریع </span></a>
                                                </div>
                                                <!-- /product main photo  -->
                                            </div>

                                            <!-- Product Actions -->
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقمندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-26.jpg"
                                                                         data-image="images/products/product-26.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-26-1.jpg"
                                                                         data-image="images/products/product-26-1.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-26-2.jpg"
                                                                         data-image="images/products/product-26-2.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Grey T-shirt fashion Sportex"
                                                                              href="product.html"
                                                                              class="product-item-link">تی شرت خاکستری مد Sportex</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="old-price">300 تومان</span> <span
                                                    class="special-price">248 تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item previews-2 large category1 category2">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>جدید</span></div>
                                            <div class="product-item-label label-sale"><span>-20%</span></div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <div class="product-item-gallery-main">
                                                <a href="#"><img class="product-image-photo"
                                                                 src="images/products/product-25.jpg" alt=""></a>
                                                <a href="quick-view.html" title="Quick View"
                                                   class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                            </div>
                                            <!-- /product main photo  -->

                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-25.jpg"
                                                                         data-image="images/products/product-25.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-25-1.jpg"
                                                                         data-image="images/products/product-25-1.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Mesh bodycon dress"
                                                                              href="product.html"
                                                                              class="product-item-link">لباس بدنه مش</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="old-price">290 تومان</span> <span
                                                    class="special-price">299 تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item previews-2 large">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <div class="product-item-gallery">
                                                <!-- product main photo -->
                                                <div class="product-item-gallery-main">
                                                    <a href="#"><img class="product-image-photo"
                                                                     src="images/products/product-18.jpg" alt=""></a>
                                                    <a href="quick-view.html" title="Quick View"
                                                       class="quick-view-link quick-view-btn"> <i
                                                            class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                </div>
                                                <!-- /product main photo  -->
                                            </div>
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-18.jpg"
                                                                         data-image="images/products/product-18.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-18-1.jpg"
                                                                         data-image="images/products/product-18-1.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Backless mini dress"
                                                                              href="product.html"
                                                                              class="product-item-link">لباس مینی پشتی</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="price">89 تومان</span></span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item large category1">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>جدید</span></div>
                                            <!-- /Product Label -->
                                            <div class="product-item-gallery">
                                                <!-- product main photo -->
                                                <div class="product-item-gallery-main">
                                                    <a href="#"><img class="product-image-photo"
                                                                     src="images/products/product-10.jpg" alt=""></a>
                                                    <a href="quick-view.html" title="Quick View"
                                                       class="quick-view-link quick-view-btn"> <i
                                                            class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                </div>
                                                <!-- /product main photo  -->
                                            </div>
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Longline  asymmetric midi skirt"
                                                                              href="product.html"
                                                                              class="product-item-link">دامن میدی نامتقارن بلند</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="price">210تومان</span></span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item previews-3 large category1">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>جدید</span></div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <div class="product-item-gallery-main">
                                                <a href="#"><img class="product-image-photo"
                                                                 src="images/products/product-17.jpg" alt=""></a>
                                                <a href="quick-view.html" title="Quick View"
                                                   class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                <a href="product.html" class="product-item-not-available">
														<span class="vert-wrapper"><span class="vert"><span
                                                                class="text">در دسترس نیست</span></span>
														</span>
                                                </a>
                                            </div>
                                            <!-- /product main photo  -->
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-17.jpg"
                                                                         data-image="images/products/product-17.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-17-1.jpg"
                                                                         data-image="images/products/product-17-1.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-17-2.jpg"
                                                                         data-image="images/products/product-17-2.jpg"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Floral sleeveless dress"
                                                                              href="product.html"
                                                                              class="product-item-link">لباس بدون آستین گل دار</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="price">289 تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item large category2">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-sale"><span>-50%</span></div>
                                            <!-- /Product Label -->
                                            <div class="product-item-gallery">
                                                <!-- product main photo -->
                                                <div class="product-item-gallery-main">
                                                    <a href="#"><img class="product-image-photo"
                                                                     src="images/products/product-27.jpg" alt=""></a>
                                                    <a href="quick-view.html" title="Quick View"
                                                       class="quick-view-link quick-view-btn"> <i
                                                            class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                </div>
                                                <!-- /product main photo  -->
                                            </div>

                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span> </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
                                                    <ul class="social-list">
                                                        <li>
                                                            <a href="#" class="icon icon-google google"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-fancy fancy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"><a title="Athletic T-Shirt"
                                                                              href="product.html"
                                                                              class="product-item-link">تی شرت ورزشی</a></div>
                                            <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                            </div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                    class="price-wrapper"> <span class="old-price">420تومان</span> <span
                                                    class="special-price">210تومان</span> </span>
													</span>
                                            </div>
                                            <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"><i
                                                    class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="block banners-with-pad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <a href="#" class="banner-wrap">
                                <div class="banner style-17 autosize-text image-hover-scale" data-fontratio="4.6">
                                    <img src="images/banners/banner-17.jpg" alt="Banner">
                                    <div class="banner-caption vertb horl">
                                        <div class="vert-wrapper">
                                            <div class="vert">
                                                <div class="text-1">مجموعه مد</div>
                                                <div class="text-2 text-hoverslide" data-hcolor="#ffffff"><span><span
                                                        class="text">زیر شلواری</span><span
                                                        class="hoverbg"></span></span>
                                                </div>
                                                <div class = "text-3"> برای گرفتن یک مثال پیش پا افتاده ، کدام یک از ما هرگز دست به کار نمی شویم
                                                    <br> ورزش بدنی
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#bannerLink" class="banner-wrap">
                                <div class="banner style-18 autosize-text image-hover-scale" data-fontratio="4.6">
                                    <img src="images/banners/banner-18.jpg" alt="Banner">
                                    <div class="banner-caption vertl horl">
                                        <div class="vert-wrapper">
                                            <div class="vert">
                                                <div class = "text-1"> بزرگتر </div>
                                                <div class = "text-2">BRA عالی </div>
                                                <div class = "banner-btn text-hoverslide" data-hcolor = "# fff"> <span> <span
                                                        class = "text"> پیشنهادات ویژه </span> <span class = "hoverbg"> </span> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="#bannerLink" class="banner-wrap">
                                <div class="banner style-19 autosize-text image-hover-scale" data-fontratio="4.6">
                                    <img src="images/banners/banner-19.jpg" alt="Banner">
                                    <div class="banner-caption vertb horl">
                                        <div class="vert-wrapper">
                                            <div class="vert">
                                                <div class = "text-1"> شب مد </div>
                                                <div class = "text-2"> وارد شد </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#bannerLink" class="banner-wrap">
                                <div class="banner style-20 autosize-text image-hover-scale" data-fontratio="4.6">
                                    <img src="images/banners/banner-20.jpg" alt="Banner">
                                    <div class="banner-caption vertb horr">
                                        <div class="vert-wrapper">
                                            <div class="vert">
                                                <div class = "text-1"> همیشه به روز <span class = "text-corner"> </span>
                                                </div>
                                                <div class = "text-2"> پوشاک شهری </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Blog Carousel -->
                            <div class="title">
                                <h2>از وبلاگ</h2>
                                <div class="carousel-arrows"></div>
                            </div>
                            <!-- Blog Carousel Item -->
                            <div class="blog-carousel">
                                <div class="blog-item">
                                    <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                                                                      src="images/blog/blog-1.jpg"
                                                                                      alt="From Blog"> </a>
                                    <div class="blog-item-info">
                                        <a href="blog.html" class="blog-item-title">علورم ایپسوم متن ساختگی </a>
                                        <div class="blog-item-teaser">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                        </div>
                                        <div class="blog-item-links"><span class="pull-right"> <span><a href="#"
                                                                                                       class="readmore">مشاهده بیشتر</a></span> </span>
                                            <span class="pull-left"> <span> نویسنده:<a href="#">ادمین</a></span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Blog Carousel Item -->
                                <!-- Blog Carousel Item -->
                                <div class="blog-item">
                                    <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                                                                      src="images/blog/blog-2.jpg"
                                                                                      alt="From Blog"> </a>
                                    <div class="blog-item-info">
                                        <a href="blog.html" class="blog-item-title">لورم ایپسوم متن ساختگی</a>
                                        <div class="blog-item-teaser">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                        </div>
                                        <div class="blog-item-links"><span class="pull-right"> <span><a href="#"
                                                                                                       class="readmore">مشاهده بیشتر </a></span> </span>
                                            <span class="pull-left"> <span>  نویسنده: <a href="#">ادمین</a></span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Blog Carousel Item -->
                                <!-- Blog Carousel Item -->
                                <div class="blog-item">
                                    <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                                                                      src="images/blog/blog-3.jpg"
                                                                                      alt="From Blog"> </a>
                                    <div class="blog-item-info">
                                        <a href="blog.html" class="blog-item-title">ورم ایپسوم متن ساختگی</a>
                                        <div class="blog-item-teaser">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                        </div>
                                        <div class="blog-item-links"><span class="pull-right"> <span><a href="#"
                                                                                                       class="readmore">مشاهده بیشتر </a></span> </span>
                                            <span class="pull-right"> <span>نویسنده:  <a href="#">ادمین</a></span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Blog Carousel Item -->
                                <!-- Blog Carousel Item -->
                                <div class="blog-item">
                                    <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                                                                      src="images/blog/blog-4.jpg"
                                                                                      alt="From Blog"> </a>
                                    <div class="blog-item-info">
                                        <a href="blog.html" class="blog-item-title">لورم ایپسوم متن ساختگی با</a>
                                        <div class="blog-item-teaser">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                        </div>
                                        <div class="blog-item-links"><span class="pull-right"> <span><a href="#"
                                                                                                       class="readmore">مشاهده بیشتر </a></span> </span>
                                            <span class="pull-right"><span>نویسنده:  <a href="#">ادمین</a></span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Blog Carousel Item -->
                            </div>
                            <!-- /Blog Carousel -->
                        </div>
                        <div class="col-md-6">
                            <!-- Deal Carousel -->
                            <div class="title">
                                <h2 class="custom-color">معامله روز</h2>
                                <div class="toggle-arrow"></div>
                                <div class="carousel-arrows"></div>
                            </div>
                            <div class="collapsed-content">
                                <div class="deal-carousel-2 products-grid product-variant-5">
                                    <!-- Product Item -->
                                    <div class="product-item large">
                                        <div class="product-item-inside">
                                            <div class="product-item-info">
                                                <!-- Product Photo -->
                                                <div class="product-item-photo">
                                                    <!-- product main photo -->
                                                    <div class="product-item-gallery-main">
                                                        <a href="#"><img class="product-image-photo"
                                                                         src="images/products/product-19.jpg"
                                                                         alt=""></a>
                                                        <a href="quick-view.html" title="Quick View"
                                                           class="quick-view-link quick-view-btn"> <i
                                                                class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                    </div>
                                                    <!-- /product main photo  -->
                                                    <!-- Product Label -->
                                                    <div class="product-item-label label-new"><span>جدید</span></div>
                                                    <!-- /Product Label -->
                                                    <!-- Product Actions -->
                                                    <a href="#" title="Add to Wishlist" class="wishlist active"> <i
                                                            class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span>
                                                    </a>
                                                    <div class="product-item-actions">
                                                        <div class="share-button toBottom">
                                                            <span class="toggle"></span>
                                                            <ul class="social-list">
                                                                <li>
                                                                    <a href="#" class="icon icon-google google"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-fancy fancy"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-pinterest pinterest"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-twitter-logo twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-facebook-logo facebook"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /Product Actions -->
                                                    <!-- product carousel -->
                                                    <div class="product-item-gallery-previews-wrapper">
                                                        <div class="product-item-gallery-previews">
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-19.jpg"
                                                                                 data-image="images/products/product-19.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-19-1.jpg"
                                                                                 data-image="images/products/product-19-1.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-19-2.jpg"
                                                                                 data-image="images/products/product-19-2.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-19-3.jpg"
                                                                                 data-image="images/products/product-19-3.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-arrows"></div>
                                                    </div>
                                                    <!-- /product carousel -->
                                                    <ul class="color-swatch hidden-xs">
                                                        <li class="active">
                                                            <a data-image="images/products/product-19.jpg" href="#"><img
                                                                    src="images/colorswatch/color-yellow.png"
                                                                    alt="Yellow"></a>
                                                        </li>
                                                        <li>
                                                            <a data-image="images/products/product-19-c1.jpg"
                                                               href="#"><img src="images/colorswatch/color-blue.png"
                                                                             alt="Blue"></a>
                                                        </li>
                                                        <li>
                                                            <a data-image="images/products/product-19-c2.jpg"
                                                               href="#"><img src="images/colorswatch/color-red.png"
                                                                             alt="Red"></a>
                                                        </li>
                                                        <li>
                                                            <a data-image="images/products/product-19-c3.jpg"
                                                               href="#"><img src="images/colorswatch/color-grey.png"
                                                                             alt="Grey"></a>
                                                        </li>
                                                        <li>
                                                            <a data-image="images/products/product-19-c4.jpg"
                                                               href="#"><img src="images/colorswatch/color-green.png"
                                                                             alt="Green"></a>
                                                        </li>
                                                        <li>
                                                            <a data-image="images/products/product-19-c5.jpg"
                                                               href="#"><img src="images/colorswatch/color-violet.png"
                                                                             alt="Violet"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Product Photo -->
                                                <!-- Product Details -->
                                                <div class="product-item-details">
                                                    <div class="product-item-name"><a title="Cover up tunic"
                                                                                      href="product.html"
                                                                                      class="product-item-link">لباس را بپوشانید</a></div>
                                                    <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                    </div>
                                                    <div class="price-box"> <span class="price-container"> <span
                                                            class="price-wrapper"> <span
                                                            class="price">110 تومان</span></span>
															</span>
                                                    </div>
                                                    <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i></div>
                                                    <button class="btn add-to-cart" data-product="789123"><i
                                                            class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                                </div>
                                                <!-- /Product Details -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Item -->
                                    <!-- Product Item -->
                                    <div class="product-item large">
                                        <div class="product-item-inside">
                                            <div class="product-item-info">
                                                <!-- Product Photo -->
                                                <div class="product-item-photo">
                                                    <!-- Product Label -->
                                                    <div class="product-item-label label-new"><span>جدید</span></div>
                                                    <!-- /Product Label -->
                                                    <div class="product-item-gallery">
                                                        <!-- product main photo -->
                                                        <div class="product-item-gallery-main">
                                                            <a href="#"><img class="product-image-photo"
                                                                             src="images/products/product-13.jpg"
                                                                             alt=""></a>
                                                            <a href="quick-view.html" title="Quick View"
                                                               class="quick-view-link quick-view-btn"> <i
                                                                    class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                        </div>
                                                        <!-- /product main photo  -->
                                                    </div>
                                                    <!-- Product Actions -->
                                                    <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                            class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span>
                                                    </a>
                                                    <div class="product-item-actions">
                                                        <div class="share-button toBottom">
                                                            <span class="toggle"></span>
                                                            <ul class="social-list">
                                                                <li>
                                                                    <a href="#" class="icon icon-google google"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-fancy fancy"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-pinterest pinterest"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-twitter-logo twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-facebook-logo facebook"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /Product Actions -->
                                                </div>
                                                <!-- /Product Photo -->
                                                <!-- Product Details -->
                                                <div class="product-item-details">
                                                    <div class="product-item-name"><a
                                                            title="Style Dome Men's Solid Red Color" href="product.html"
                                                            class="product-item-link">سبک گنبد مردانه رنگ قرمز یکدست</a></div>
                                                    <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                    </div>
                                                    <div class="price-box"> <span class="price-container"> <span
                                                            class="price-wrapper"><span
                                                            class="price">359 تومان</span> </span>
															</span>
                                                    </div>
                                                    <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i></div>
                                                    <button class="btn add-to-cart" data-product="789123"><i
                                                            class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                                </div>
                                                <!-- /Product Details -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Item -->
                                    <!-- Product Item -->
                                    <div class="product-item previews-3 large">
                                        <div class="product-item-inside">
                                            <div class="product-item-info">
                                                <!-- Product Photo -->
                                                <div class="product-item-photo">
                                                    <!-- Product Label -->
                                                    <div class="product-item-label label-new"><span>جدید</span></div>
                                                    <div class="product-item-label label-sale"><span>-20%</span></div>
                                                    <!-- /Product Label -->
                                                    <!-- product main photo -->
                                                    <div class="product-item-gallery-main">
                                                        <a href="#"><img class="product-image-photo"
                                                                         src="images/products/product-11-1.jpg" alt=""></a>
                                                        <a href="quick-view.html" title="Quick View"
                                                           class="quick-view-link quick-view-btn"> <i
                                                                class="icon icon-eye"></i><span>مشاهده بیشتر</span></a>
                                                    </div>
                                                    <!-- /product main photo  -->
                                                    <!-- Product Actions -->
                                                    <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                            class="icon icon-heart"></i><span>افزودن به علاقه مندی ها </span>
                                                    </a>
                                                    <div class="product-item-actions">
                                                        <div class="share-button toBottom">
                                                            <span class="toggle"></span>
                                                            <ul class="social-list">
                                                                <li>
                                                                    <a href="#" class="icon icon-google google"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="icon icon-fancy fancy"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-pinterest pinterest"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-twitter-logo twitter"></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                       class="icon icon-facebook-logo facebook"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /Product Actions -->
                                                    <!-- product carousel -->
                                                    <div class="product-item-gallery-previews-wrapper">
                                                        <div class="product-item-gallery-previews">
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-11.jpg"
                                                                                 data-image="images/products/product-11.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-11-1.jpg"
                                                                                 data-image="images/products/product-11-1.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#"><img src="images/products/product-11-2.jpg"
                                                                                 data-image="images/products/product-11-2.jpg"
                                                                                 alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-arrows"></div>
                                                    </div>
                                                    <!-- /product carousel -->
                                                </div>
                                                <!-- /Product Photo -->
                                                <!-- Product Details -->
                                                <div class="product-item-details">
                                                    <div class="product-item-name"><a title="Boyfriend Shorts Denim"
                                                                                      href="product.html"
                                                                                      class="product-item-link">دوست پسر شلوار جین</a></div>
                                                    <div class="product-item-description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                    </div>
                                                    <div class="price-box"> <span class="price-container"> <span
                                                            class="price-wrapper"> <span
                                                            class="old-price">190تومان</span> <span
                                                            class="special-price">149تومان</span> </span>
															</span>
                                                    </div>
                                                    <div class="product-item-rating"><i class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i><i
                                                            class="icon icon-star-fill"></i></div>
                                                    <button class="btn add-to-cart" data-product="789123"><i
                                                            class="icon icon-cart"></i><span>افزودن به سبد خرید</span></button>
                                                </div>
                                                <!-- /Product Details -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Product Item -->
                                </div>
                            </div>
                            <!-- /Deal Carousel -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="block fullwidth full-nopad">
                <div class="container">
                    <div id="instafeed" class="instagramm-feed-full"></div>
                    <div class="instagramm-title">Instagram Feed</div>
                </div>
            </div>
        </main>
        <!-- /Page Content -->
        @endsection
