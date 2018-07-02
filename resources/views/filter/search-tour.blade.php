@extends('layout.main')
@section('page_title','Search Tour')
@section('main-content')
<style type="text/css">
    .filter-tabcard .nav-tabs {  width: 50%; margin-left:auto; margin-right: auto; } 
    .filter-tabcard .nav-tabs > li.active > a, .filter-tabcard .nav-tabs > li.active > a:focus, .filter-tabcard .nav-tabs > li.active > a:hover {color: #fff; background: #EC2424; border: none; box-shadow: 0 0px 5px rgba(112, 112, 112, 0.3); transform: scale(1.005); } <!--กด-->
    .filter-tabcard .nav-tabs > li > a { border: none; color: #515050; background: #fff;  } <!--ยังไม่ได้กด--> 
    .filter-tabcard .nav-tabs > li.active > a,.filter-tabcard .nav-tabs > li > a:hover { border: none;  color: #fff !important; background: #EC2424; }
    .filter-tabcard .nav-tabs > li > a::after { content: ""; background: #F58A1F; height: 3px; position: absolute; width: 100%; left: 0px; bottom: -8px; transition: all 250ms ease 0s; transform: scale(0); }
    .filter-tabcard .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    .filter-tabcard .tab-nav > li > a::after { background: #5a4080 none repeat scroll 0% 0%; color: #fff; }
    .filter-tabcard .tab-pane { padding: 15px 0; }
    .filter-tabcard .tab-content {
        padding:10px; 
        height: auto; 
        /*width: 880px;*/ 
        border-radius: 10px;         
        border: 2px solid #F58A1F;
        margin-left: 50px;
        margin-right: 50px;
        margin-top:  25px;
        margin-bottom: 25px;
    }
    .filter-tabcard .nav-tabs > l   i  {width:20%; text-align:center;  }
    .filter-tabcard .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 2px 0px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }

    .filter-tabcard .nav-tabs > li > a {
        color: #515050;
        border-left: 1px solid #fff;        
    }

    @media all and (max-width:724px){
        /*        .filter-tabcard .nav-tabs{
                    width: 300px;
                }*/
        .nav-tabs > li > a > span {display:none;}	
        .nav-tabs > li > a {padding: 0px 0px;}
    }

    .filter-tabcard{
        margin-top: 40px;
    }

    .btn-ratepreice{
        border-radius: 8px;
        width: auto;
        margin: 0 5px 0 5px;
        color: #fff;
        background-color: #F58A1F;
        border-color: #F58A1F;
        font-size: 20px;
    }

    .pull-right{
        margin-left: 10px;
        line-height: 1;
        font-size: 20px;
    }

    .price{
        font-size: 20px;
        font-weight: 600;
        color: #1D1D1D;
        padding-right: 10px;
    }

    .dropdown-pos .dropdown-menu{
        width: 100%;
        text-align: center;
    }

    .dropdown-pos{
        /*    text-align: center;
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;*/
    }

    .alert-danger{ background-color: rgba(248,115,0,0.6); }
    .alert { border: 0px solid transparent; }

    .filter-pickdate{
        padding-top: 10px;
        position: relative; 
    }

    .filter-pickdate i {
        position: absolute; 
        bottom: 12px; 
        right: 12px; 
        top: auto; 
        cursor: pointer;
        color: black;
    }

</style>

<style>
    .page-sidebar .sidebar-title{
        border-top-color: #ea1c24;
    }

</style>




<!-- HEADING PAGE -->
<section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
        </div>
    </div>
</section>
<!-- END / HEADING PAGE -->


<section class="filter-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-top">
                    <select class="awe-select">
                        <option>Best Match</option>
                        <option>Best Rate</option>
                    </select>
                </div>
            </div>
        </div>       

        <!--                    กลาง-->
        <div class="col-md-6 col-md-push-3">                       
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container tour-local-wrapper local-nav swiper-container-horizontal swiper-container-free-mode">
                        <div class="swiper-wrapper tour-local-nav" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide local-nav-item swiper-slide-active" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่นราคาถูก</a>
                            </div>
                            <div class="swiper-slide local-nav-item swiper-slide-next" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์โตเกียว</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่นฟุกุโอกะ</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์วันปีใหม่ญี่ปุ่น</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญุ่ปุ่น ตุลาคม</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น การบินไทย</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น ฤดูใบไม้ผลิ</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์วันปีใหม่ญี่ปุ่น</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญุ่ปุ่น ตุลาคม</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น การบินไทย</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น ฤดูใบไม้ผลิ</a>
                            </div>                                   
                        </div>
                        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-button-prev swiper-button-disabled"><i class="fa fa-angle-left"></i></div>
                    </div>
                </div>                           
            </div>

            <div class="filter-page__content">
                <div id="card_area" class="filter-item-wrapper">
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1515569125-d5bfe76b8efc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=16576be7bfdd968382c6db561f1db63d&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ทัวร์ฮ่องกง เกาะลันเตา วัดโป่วหลิน วัดแชกงหมิว นั่งรถรางพีคแทรม ยอดเขาวิคตรอเรีย พีค สวนสนุกดิสนีย์แลนด์เต็มวัน</a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 2 วัน 1 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/tigerair.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00001
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿12,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b66e9d835de3873a86d1cec996a1af06&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ปักกิ่ง กำแพงเมืองจีนด่านจีหย่งกวน พระราชวังต้องห้ามกู้กง </a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 5 วัน 3 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/thai_airway.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00002
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿8,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b66e9d835de3873a86d1cec996a1af06&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ปักกิ่ง กำแพงเมืองจีนด่านจีหย่งกวน พระราชวังต้องห้ามกู้กง </a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 5 วัน 3 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/thai_airway.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00002
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿8,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b66e9d835de3873a86d1cec996a1af06&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ปักกิ่ง กำแพงเมืองจีนด่านจีหย่งกวน พระราชวังต้องห้ามกู้กง </a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 5 วัน 3 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/thai_airway.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00002
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿8,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b66e9d835de3873a86d1cec996a1af06&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ปักกิ่ง กำแพงเมืองจีนด่านจีหย่งกวน พระราชวังต้องห้ามกู้กง </a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 5 วัน 3 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/thai_airway.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00002
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿8,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="trip-item">
                        <div class="item-media">
                            <div class="image-cover">
                                <img src="https://images.unsplash.com/photo-1504109586057-7a2ae83d1338?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b66e9d835de3873a86d1cec996a1af06&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                            <!--                                        <div class="trip-icon">
                                                                        <img src="images/trip.jpg" alt="">
                                                                    </div>-->
                        </div>
                        <div class="item-body">
                            <div class="item-title">
                                <h2>
                                    <a href="#">ปักกิ่ง กำแพงเมืองจีนด่านจีหย่งกวน พระราชวังต้องห้ามกู้กง </a>
                                </h2>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li><i class="far fa-clock"></i> 5 วัน 3 คืน</li>
                                    <li><i class="far fa-calendar"></i> ช่วงเวลา เม.ย. - ส.ค.</li>
                                </ul>
                            </div>
                            <div class="item-footer">
                                <div class="item-rate">
                                    <div class="card-airline">
                                        <img alt="Tigerair" src="../images/airline/thai_airway.png" title="">
                                    </div>
                                </div>
                                <div class="item-icon">
                                    <div class="pass">รหัสทัวร์&nbsp</div>#00002
                                </div>
                            </div>
                        </div>
                        <div class="item-price-more">
                            <div class="price">
                                ราคา
                                <ins>
                                    <span class="amount">฿8,000</span>
                                </ins>
                                <!--                                            <del>
                                                                                <span class="amount">$200</span>
                                                                            </del>-->

                            </div>
                            <a href="#" class="awe-btn">จองทัวร์นี้</a>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>


                <!-- PAGINATION -->
                <!--                <div class="page__pagination">
                                    <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                                    <span class="current">1</span>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                                </div>-->

                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination" id="search_tour_pager"></ul>
                    </div>
                </div>
                <!-- END / PAGINATION -->
            </div>
        </div>

        <!--                    bar ซ้าย-->
        <div class="col-md-3 col-md-pull-6">
            <div class="page-sidebar">
                <div class="sidebar-title hidden-xs">
                    <h3>ทัวร์ขายดี :</h3>
                    <!--                                <div class="clear-filter">
                                                        <a href="#">Clear all</a>
                                                    </div>-->
                </div>
                <div class="left-bar1">
                    <div class="box-content hidden-xs">
                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1519882189396-71f93cb4714b?ixlib=rb-0.3.5&s=0b977d67f187eec17eb555555ef59a6d&auto=format&fit=crop&w=500&q=60" 
                                             alt="ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการและขอพรวัดนาริตะและวัดอาซากุสะ" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการ...</a>
                                    </h6>
                                    <div class="peroid">เริ่มเดินทาง 21 มิ.ย. 61</div>
                                    <div class="price"><span>14,900</span> บาท</div>
                                </div>                                        
                            </div>
                        </div>

                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1519882189396-71f93cb4714b?ixlib=rb-0.3.5&s=0b977d67f187eec17eb555555ef59a6d&auto=format&fit=crop&w=500&q=60" 
                                             alt="ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการและขอพรวัดนาริตะและวัดอาซากุสะ" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการ...</a>
                                    </h6>
                                    <div class="peroid">เริ่มเดินทาง 21 มิ.ย. 61</div>
                                    <div class="price"><span>14,900</span> บาท</div>
                                </div>                                        
                            </div>
                        </div>

                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1519882189396-71f93cb4714b?ixlib=rb-0.3.5&s=0b977d67f187eec17eb555555ef59a6d&auto=format&fit=crop&w=500&q=60" 
                                             alt="ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการและขอพรวัดนาริตะและวัดอาซากุสะ" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ทัวร์ญี่ปุ่น โอไดบะ ขึ้นภูเขาไฟฟูจิ ชมทุ่งดอกลาเวนเดอร์ นมัสการ...</a>
                                    </h6>
                                    <div class="peroid">เริ่มเดินทาง 21 มิ.ย. 61</div>
                                    <div class="price"><span>14,900</span> บาท</div>
                                </div>                                        
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sidebar-title hidden-xs">
                    <h3>ทัวร์แนะนำ :</h3>         
                </div>
                <div class="left-bar2">
                    <div class="box-content hidden-xs">
                        <div class="swiper-wrapper tour-local-nav" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่นราคาถูก</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์โตเกียว</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่นฟุกุโอกะ</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์วันปีใหม่ญี่ปุ่น</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญุ่ปุ่น ตุลาคม</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น การบินไทย</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น ฤดูใบไม้ผลิ</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์วันปีใหม่ญี่ปุ่น</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญุ่ปุ่น ตุลาคม</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น การบินไทย</a>
                            </div>
                            <div class="swiper-slide local-nav-item" style="margin-right: 10px;">
                                <a href="" title="" class="">ทัวร์ญี่ปุ่น ฤดูใบไม้ผลิ</a>
                            </div>                                   
                        </div> 
                    </div>
                </div>    

                <div class="sidebar-title">
                    <h3><i class="fas fa-filter"></i> คัดกรอง :</h3>      
                </div>         

                <div class="left-bar3">
                    <div class="box-content">
                        <div class="filter-bar">    
                            <div class="filter-price">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="fas fa-exchange-alt"></i> กำหนดช่วงราคา</span>
                                </div>     
                                <div class="textpricesm"><span id="price_from">0</span> ถึง <span id="price_to">80,000</span> บาท</div>
                                <input id="price" data-slider-id='priceSlider' type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> 
                            </div>

                            <hr>

                            <div class="filter-route">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="far fa-map"></i> เส้นทาง</span>
                                </div>
                                <div id="filter-route">
                                    <div class="option-all">
                                        <label for="route_all" class="label-cbx">
                                            <input id="route_all" type="checkbox" class="invisible" checked>
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span>แสดงทั้งหมด</span>
                                        </label>
                                    </div>
                                    @foreach ($routeList as $route)
                                    <div class="option">
                                        <label for="route_{{ $route->r_id }}" class="label-cbx">
                                            <input id="route_{{$route->r_id }}" value="{{ $route->r_name }}" type="checkbox" class="route_checkbox invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">{{ $route->r_name }}</span>
                                            <span class="count">({{$route->r_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                    </div>
                                    @endforeach
                                    <div id="expandToggleRoute" class="expand-toggle"><a href="javascript:void(0)" id="loadMoreRoute">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a></div>                                                                                      
                                </div>
                            </div>

                            <hr>

                            <div class="filter-date">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="far fa-calendar-alt"></i> วันเดินทาง ไป-กลับ</span>
                                </div>
                                <div class='filter-pickdate'>
                                    <input type="text" id="date_picker" placeholder="กรุณาเลือกวันเดินทาง ไป - กลับ" class="form-control">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                </div>
                                <!--            เว้นไว้ใส่ปฎิทิน-->
                                <div id="filter-date">
                                    <div class="option-all">
                                        <label for="holiday_all" class="label-cbx">
                                            <input id="holiday_all" type="checkbox" class="invisible" checked>
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span>แสดงทั้งหมด</span>
                                        </label>
                                    </div>
                                    @foreach ($holidayList as $holiday)
                                    <div class="option">
                                        <label for="holiday_{{ $holiday->holiday_id }}" class="label-cbx">
                                            <input id="holiday_{{ $holiday->holiday_id }}" value="{{ $holiday->start_date }}||{{ $holiday->end_date }}" type="checkbox" class="holiday_checkbox invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">{{ $holiday->holiday_name }}</span>
                                            <span class="clear"></span>
                                        </label>
                                    </div>
                                    @endforeach

                                </div>
                                <div id="expandToggleHoliday" class="expand-toggle"><a href="javascript:void(0)" id="loadMoreHoliday">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a></div>
                            </div>

                            <hr>

                            <div class="filter-month">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="far fa-calendar-check"></i> เดือน</span>
                                </div>
                                <div id="filter-month">
                                    <div class="option-all">
                                        <label for="month_all" class="label-cbx">
                                            <input id="month_all" type="checkbox" class="invisible" checked>
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span>แสดงทั้งหมด</span>
                                        </label>
                                    </div>
                                    @foreach ($monthList as $month)
                                    <div class="option">
                                        @if ($month->m_month === 1)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible month_checkbox">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">มกราคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 2)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">กุมภาพันธ์</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 3)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">มีนาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 4)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">เมษายน</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 5)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">พฤษภาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 6)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">มิถุนายน</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 7)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">กรกฎาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 8)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">สิงหาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 9)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">กันยายน</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 10)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">ตุลาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 11)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">พฤศจิกายน</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @elseif ($month->m_month === 12)
                                        <label for="month_{{ $month->m_month }}" class="label-cbx">
                                            <input id="month_{{ $month->m_month }}" value="{{ $month->m_month }}" type="checkbox" class="invisible">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">ธันวาคม</span>
                                            <span class="count">({{$month->m_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                        @endif
                                    </div>
                                    @endforeach

                                </div>
                                <div id="expandToggleMonth" class="expand-toggle"><a href="javascript:void(0)" id="loadMoreMonth">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a></div>
                            </div>

                            <hr>

                            <div class="filter-countdate">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="far fa-clock"></i> จำนวนวัน</span>
                                </div>
                                <div id="filter-countdate">
                                    <div class="option-all">
                                        <label for="day_all" class="label-cbx">
                                            <input id="day_all" type="checkbox" class="invisible" checked>
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span>แสดงทั้งหมด</span>
                                        </label>
                                    </div>
                                    @foreach ($dayList as $day)
                                    <div class="option">
                                        <label for="day_{{ $day->duration }}" class="label-cbx">
                                            <input id="day_{{ $day->duration }}" type="checkbox" class="invisible days_checkbox">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">{{ $day->duration }} วัน</span>
                                            <span class="count">({{$day->sum}})</span>
                                            <span class="clear"></span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                <div id="expandToggleDates" class="expand-toggle"><a href="javascript:void(0)" id="loadMoreDates">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a></div>
                            </div>

                            <hr>

                            <div class="filter-airline">
                                <div class='filter-header'>
                                    <span class='filter-header-text'><i class="far fa-paper-plane"></i> สายการบิน</span>
                                </div>
                                <div id="filter-airline">
                                    <div class="option-all">
                                        <label for="airline_all" class="label-cbx">
                                            <input id="airline_all" type="checkbox" class="invisible" checked>
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span>แสดงทั้งหมด</span>
                                        </label>
                                    </div>
                                    @foreach ($airlineList as $airline)
                                    <div class="option">
                                        <label for="airline_{{ $airline->a_id }}" class="label-cbx">
                                            <input id="airline_{{ $airline->a_id }}" type="checkbox" class="invisible airline_checkbox">
                                            <div class="checkbox">
                                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                                                <polyline points="4 11 8 15 16 6"></polyline>
                                                </svg>
                                            </div>
                                            <span class="name">{{ $airline->a_name }}</span>
                                            <span class="count">({{$airline->a_num}})</span>
                                            <span class="clear"></span>
                                        </label>
                                    </div>
                                    @endforeach

                                </div>
                                <div id="expandToggleAirline" class="expand-toggle"><a href="javascript:void(0)" id="loadMoreAirline">ดูเพิ่มเติม <i class="fas fa-caret-down"></i></a></div>
                            </div>


                            <!--                            end filter-bar-->                                                                           
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        <!--                    bar ขวา-->
        <div class="col-md-3">
            <div class="page-sidebar">
                <div class="sidebar-title hidden-xs">
                    <h3><i class="fas fa-certificate"></i> ไฮไลท์ยอดนิยม</h3>
                </div>
                <div class="right-bar">
                    <div class="box-content hidden-xs">
                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1516464488897-e67174edf7e7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=05e319452c7a94849374b80813bcf118&auto=format&fit=crop&w=500&q=60" 
                                             alt="" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ออนเซน (48)</a>
                                    </h6>
                                </div>                                        
                            </div>
                        </div>

                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1511543865714-5a5a5ce51a94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=af1dad982f43aeb20daf60a966268317&auto=format&fit=crop&w=500&q=60" 
                                             alt="" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ขาปูยักษ์ (31)</a>
                                    </h6>
                                </div>                                        
                            </div>
                        </div>

                        <div class="tour-left-bar-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="" title="">
                                        <img class="media-object lazy" src="https://images.unsplash.com/photo-1527650285468-3301061c3a5d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e19ffc9b9bb4dbfa12f57c6830944198&auto=format&fit=crop&w=500&q=60" 
                                             alt="" style="display: inline-block;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">
                                        <a href="" title="">ภูเขาไฟฟูจิ (40)</a>
                                    </h6>
                                </div>                                        
                            </div>
                        </div>

                    </div>    
                </div>
            </div>
        </div>

    </div>
</section>




@stop

@section('footer_scripts')

<script type="text/javascript" src="{{ asset('js/filter/search-tour.js') }}"></script>

@endsection