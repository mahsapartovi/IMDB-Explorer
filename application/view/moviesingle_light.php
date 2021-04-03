<?php include('Layouts/header.php');?>
<!-- moviesingle_light16:30-->
<body>
<!-- Cooment popup -->
<div class="login-wrapper"  id="comment-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>نوشتن نظرسنجی</h3>
        <form method="post" action="#">
            <div class="row">

                <!-- textarea -->
                <label for="username-2">
                    متن نظرسنجی
                    <input type="text" name="username" id="username" placeholder="موضوع نظرسنجی" required="required" style="height: 50px;" />
                    <textarea type="text" name="username" id="username-2" placeholder="لطفا نظر خود را در این قسمت وارد کنید" required="required" ></textarea>
                </label>
                <!-- /textarea -->
            </div>
            <div class="row">
                <button type="submit">ثبت‌ نظر</button>
            </div>
        </form>
    </div>
</div>
<!--  END Cooment popup -->
<div class="buster-light">
    <div class="hero mv-single-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h1> movie listing - list</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie-single movie_single">
        <div class="container bodydirection">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="movie-single-ct main-content">
                        <div class="social-btn">
                            <h1 class="bd-hd">طعم گیلاس </h1>
                        </div>
                        <div class="movie-rate">
                            <div class="rate">
                                <i class="ion-android-star"></i>
                                <p><span>8.1</span> /10<br>
                                    <span class="rv">56 امتیاز</span>
                                </p>
                            </div>
                            <div class="rate-star">
                                <p> به فیلم امتیاز بده:</p>
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                            <div><a href="#" class="parent-btn" onmouseover="toggleBg(this,'red')" onmouseout="toggleBg(this)"><i class="ion-heart"></i> افزودن به لیست علاقه مندی ها</a></div>
                        </div>
                        <div class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">معرفی فیلم</a></li>
                                    <li><a href="#cast">  عوامل فیلم </a></li>
                                    <li><a href="#reviews">نظرات</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="overview" class="tab active">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-12 col-sm-12">
                                                <div class="sb-it">
                                                    <h6>کارگردان: </h6>
                                                    <p><a href="#">Joss Whedon</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>نویسنده: </h6>
                                                    <p><a>Joss Whedon,</a> <a href="#">Stan Lee</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>ستارگان: </h6>
                                                    <p><a href="#">Robert Downey Jr,</a> <a href="#">Chris Evans,</a> <a href="#">Mark Ruffalo,</a><a href="#"> Scarlett Johansson</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>ژانر:</h6>
                                                    <p><a href="#">Action, </a> <a href="#"> Sci-Fi,</a> <a href="#">Adventure</a></p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>جوایز:</h6>
                                                    <p>برنده نخل طلایی جشنواره کن ۱۹۹۷</p>
                                                    <p>نامزد جایزه شاهرخ نقره‌ای انجمن منتقدان فیلم آرژانتین ۱۹۹۷</p>
                                                    <p>برنده جایزهٔ بهترین فیلم خارجی زبان انجمن منتقدان فیلم بوستون ۱۹۹۷</p>
                                                    <p>نامزد بهترین فیلم جشنواره بین‌المللی فیلم تلورید ۱۹۹۷</p>
                                                    <p>برنده جایزه بهترین فیلم خارجی زبان انجمن ملی منتقدان فیلم ۱۹۹۸</p>
                                                    <P>برنده جایزه ویژه جشنواره بین‌المللی فیلم استانبول ۱۹۹۹</P>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>تاریخ انتشار:</h6>
                                                    <p>May 1, 2015 (U.S.A)</p>
                                                </div>
                                                <div class="sb-it">
                                                    <h6>زمان فیلم:</h6>
                                                    <p>141 min</p>
                                                </div>
                                                <div class="ads">
                                                    <img src="<?php $this->asset('image/uploads/ads1.png') ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <p>طعم گیلاس فیلم ایرانی در سبک مینیمالیستی به کارگردانی و نویسندگی عباس کیارستمی در سال ۱۳۷۶ است.

                                                    فیلم دربارهٔ مردی است که در حومهٔ شهر تهران، با اتوموبیلش دنبال کسی می‌گردد که تقاضای پردردسر او را در ازای دریافت ۲۰۰ هزار تومان پول انجام دهد. کیارستمی برای طعم گیلاس جایزهٔ نخل طلا جشنواره فیلم کن ۱۹۹۷ را به دست آورد. این دست‌آورد یکی از مهم‌ترین جوایز تاریخ سینمای ایران است. کیارستمی در مورد این فیلم گفت: «تفاوت و شباهت کار ما کارگردان‌ها با روان‌شناسان در این است که کارگردان، در سطح جامعه معضلات را می‌بیند و نقطهٔ درد را نشان می‌دهد ولی همان‌جا رها می‌کند و از اینجا به‌بعد، حیطهٔ او نیست. این جامعهٔ روانپزشکی است که پس از تشخیص، به درمان درد هم می‌پردازد.»</p>
                                                <div class="title-hd-sm">
                                                    <h4>فیلم ها و عکس ها</h4>

                                                </div>
                                                <div class="mvsingle-item ov-item">
                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="<?php $this->asset('image/uploads/image11.jpg') ?>" ><img src="<?php $this->asset('image/uploads/image1.jpg') ?>" alt=""></a>
                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="<?php $this->asset('image/uploads/image21.jpg') ?>" ><img src="<?php $this->asset('image/uploads/image2.ipg') ?>" alt=""></a>
                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="<?php $this->asset('image/uploads/image31.jpg') ?>" ><img src="<?php $this->asset('image/uploads/image3.jpg') ?>" alt=""></a>
                                                    <div class="vd-it">
                                                        <img class="vd-img" src="<?php $this->asset('image/uploads/image4.png') ?>" alt="">
                                                        <a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="<?php $this->asset('image/uploads/play-vd.png') ?>" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>عوامل</h4>

                                                </div>
                                                <!-- movie cast -->
                                                <div class="mvcast-item">
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast1.jpg') ?>" alt="">
                                                            <a href="#">Robert Downey Jr.</a>
                                                        </div>
                                                        <p>...  Robert Downey Jr.</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast2.ppg') ?>" alt="">
                                                            <a href="#">Chris Hemsworth</a>
                                                        </div>
                                                        <p>...  Thor</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast3.jpg') ?>" alt="">
                                                            <a href="#">Mark Ruffalo</a>
                                                        </div>
                                                        <p>...  Bruce Banner/ Hulk</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast4.jpg') ?>" alt="">
                                                            <a href="#">Chris Evans</a>
                                                        </div>
                                                        <p>...  Steve Rogers/ Captain America</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast5.jpg') ?>" alt="">
                                                            <a href="#">Scarlett Johansson</a>
                                                        </div>
                                                        <p>...  Natasha Romanoff/ Black Widow</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast6.jpg') ?>" alt="">
                                                            <a href="#">Jeremy Renner</a>
                                                        </div>
                                                        <p>...  Clint Barton/ Hawkeye</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast7.jpeg') ?>" alt="">
                                                            <a href="#">James Spader</a>
                                                        </div>
                                                        <p>...  Ultron</p>
                                                    </div>
                                                    <div class="cast-it">
                                                        <div class="cast-left">
                                                            <img src="<?php $this->asset('image/uploads/cast9.jpg') ?>" alt="">
                                                            <a href="#">Don Cheadle</a>
                                                        </div>
                                                        <p>...  James Rhodes/ War Machine</p>
                                                    </div>
                                                </div>
                                                <div class="title-hd-sm">
                                                    <h4>نظرات کاربران</h4>
                                                    <a href="#" class="time">مشاهده همه ی 56 تا نظر <i class="ion-ios-arrow-right"></i></a>
                                                </div>
                                                <!-- movie user review -->
                                                <div class="mv-user-review-item">
                                                    <h3>از نظر من بهترین فیلم سال بود!</h3>
                                                    <p class="time">
                                                        17 December 2016 by <a href="#"> hawaiipierson</a>
                                                    </p>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="reviews" class="tab review">
                                        <div class="row">
                                            <div class="rv-hd">
                                                <div class="div">

                                                    <h2>طعم گیلاس</h2>
                                                </div>

                                                <li class="btn commentLink"><a href="#" class="redbtn">نوشتن نظرسنجی</a></li>
                                            </div>
                                            <div class="mv-user-review-item">
                                                <div class="user-infor ">
                                                    <img src="<?php $this->asset('image/avatar.png') ?>" alt="">
                                                    <div style="margin-right: 20px;">
                                                        <h3>از نظر من بهترین فیلم سال بود!</h3>

                                                        <p class="time">
                                                            در تاریخ7تیر توسط <p style="font-size: small;">رکسانا میرزایی</p>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                            </div>
                                            <div class="topbar-filter">
                                                <label>مشاهده ها در صفحه:</label>
                                                <select style="padding-right: 50px;">
                                                    <option value="range">5 مشاهده </option>
                                                    <option value="saab">10 مشاهده </option>
                                                </select>
                                                <div class="pagination2">
                                                    <span>صفحه1 از 6:</span>
                                                    <a class="active" style="padding-left: 15px;" href="#">1</a>
                                                    <a href="#">2</a>
                                                    <a href="#">3</a>
                                                    <a href="#">4</a>
                                                    <a href="#">5</a>
                                                    <a href="#">6</a>
                                                    <a href="#"><i class="ion-arrow-right-b"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cast" class="tab">
                                        <div class="row">
                                            <h3>عوامل فیلم</h3>

                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4> کارگردان ها و اعتبار نویسنده ها</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JW</h4>
                                                        <a href="#">Joss Whedon</a>
                                                    </div>
                                                    <p>...  کارگردان</p>
                                                </div>
                                            </div>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>کارگردان ها و اعتبار نویسنده ها</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>SL</h4>
                                                        <a href="#">Stan Lee</a>
                                                    </div>
                                                    <p>...  (based on Marvel comics)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JK</h4>
                                                        <a href="#">Jack Kirby</a>
                                                    </div>
                                                    <p>...  (based on Marvel comics)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JS</h4>
                                                        <a href="#">Joe Simon</a>
                                                    </div>
                                                    <p>...  (کاراکتر درست شده توسط : Captain America)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JS</h4>
                                                        <a href="#">Joe Simon</a>
                                                    </div>
                                                    <p>...  (کاراکتر درست شده توسط :Thanos)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>RT</h4>
                                                        <a href="#">Roy Thomas</a>
                                                    </div>
                                                    <p>...  (کاراکتر درست شده توسط : Ultron, Vision)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JB</h4>
                                                        <a href="#">John Buscema</a>
                                                    </div>
                                                    <p>...  (کاراکتر درست شده توسط :Ultron, Vision )</p>
                                                </div>
                                            </div>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>عوامل</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="../../public/image/uploads/cast1.jpg" alt="">
                                                        <a href="#">Robert Downey Jr.</a>
                                                    </div>
                                                    <p>...  Robert Downey Jr.</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast1.jpg') ?>" alt="">
                                                        <a href="#">Chris Hemsworth</a>
                                                    </div>
                                                    <p>...  Thor</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast2.jpg') ?>" alt="">
                                                        <a href="#">Mark Ruffalo</a>
                                                    </div>
                                                    <p>...  Bruce Banner/ Hulk</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast3.jpg') ?>" alt="">
                                                        <a href="#">Chris Evans</a>
                                                    </div>
                                                    <p>...  Steve Rogers/ Captain America</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast4.jpg') ?>" alt="">
                                                        <a href="#">Scarlett Johansson</a>
                                                    </div>
                                                    <p>...  Natasha Romanoff/ Black Widow</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast5.jpg') ?>" alt="">
                                                        <a href="#">Jeremy Renner</a>
                                                    </div>
                                                    <p>...  Clint Barton/ Hawkeye</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast6.jpg') ?>" alt="">
                                                        <a href="#">James Spader</a>
                                                    </div>
                                                    <p>...  Ultron</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <img src="<?php $this->asset('image/uploads/cast7.jpg') ?>" alt="">
                                                        <a href="#">Don Cheadle</a>
                                                    </div>
                                                    <p>...  James Rhodes/ War Machine</p>
                                                </div>
                                            </div>
                                            <!-- //== -->
                                            <div class="title-hd-sm">
                                                <h4>تهیه کننده</h4>
                                            </div>
                                            <div class="mvcast-item">
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>VA</h4>
                                                        <a href="#">Victoria Alonso</a>
                                                    </div>
                                                    <p>...  تهیه کننده اصلی</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>MB</h4>
                                                        <a href="#">Mitchel Bell</a>
                                                    </div>
                                                    <p>...   تهیه کننده (as Mitch Bell)</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JC</h4>
                                                        <a href="#">Jamie Christopher</a>
                                                    </div>
                                                    <p>...  کمک تهیه کننده</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>LD</h4>
                                                        <a href="#">Louis D’Esposito</a>
                                                    </div>
                                                    <p>...   تهیه کننده اصلیr</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JF</h4>
                                                        <a href="#">Jon Favreau</a>
                                                    </div>
                                                    <p>...  تهیه کننده اصلی</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>KF</h4>
                                                        <a href="#">Kevin Feige</a>
                                                    </div>
                                                    <p>...  تهیه کننده </p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>AF</h4>
                                                        <a href="#">Alan Fine</a>
                                                    </div>
                                                    <p>...   تهیه کننده اصلی</p>
                                                </div>
                                                <div class="cast-it">
                                                    <div class="cast-left">
                                                        <h4>JF</h4>
                                                        <a href="#">Jeffrey Ford</a>
                                                    </div>
                                                    <p>... کمک تهیه کننده </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="movie-img sticky-sb">
                        <img src="<?php $this->asset('image/طعم گیلاس.jpg') ?>" alt="">
                        <div class="movie-btn">
                            <div class="btn-transform transform-vertical red">
                                <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> تماشای تریلر </a></div>
                                <div><a href="https://www.youtube.com/embed/o-0hcF97wy0" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- moviesingle_light16:30-->
<?php include('Layouts/footer.php');?>
</html>
