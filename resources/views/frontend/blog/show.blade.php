@extends('frontend.master')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Blog Details</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-four style-five">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="single-blog.html"><img src="images/blog/5.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="single-blog.html"><h5>A LESSON IN SURGERY PREPAREDNESS - FROM HURRICANE SEASON</h5></a>
                            <span>By Donult Trump / 02 January 2018</span>
                            <p>Interfaces Holisticly predominate elitslate extensible testing procedures reliable tell and supply chains engage. top-line web services.Dramatically consectetur adi pisi cing elit, sed do eiusmod tempor lines exercitationemut labore love life’s sweetest reward Let it flow it floats back to you. <br>
                            Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet conlites sectetur adipisci quia suthagara lukuthea satham non numquam eius modi tempra. incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                            <div class="text">
                                <p>
                                    Incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosamincidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments-area">
                    <div class="sec-title">
                        <h6>Comments (3)</h6>
                    </div>
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/1.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Jacky Chan<span>April 06, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sequi praesentium, veritatis nulla quam at exercitationem? Nesciunt molestiae neque modi.</p>
                        </div>
                    </div>
                    <div class="comment reply-comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/2.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Robben Oti<span>April 07, 2018</span></h6>
                            <a href="#"><h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, a! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, obcaecati!</p>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="image-holder">
                            <figure>
                                <img src="images/blog/3.png" alt="">
                            </figure>
                        </div>
                        <div class="image-text">
                            <h6>Chang Lingma<span>May 12, 2018</span></h6>
                            <h5><i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae possimus suscipit esse quia sapiente obcaecati consequuntur dolor sequi adipisci unde!</p>
                        </div>
                    </div>
                </div>
                <div class="form-area">
                    <div class="sec-title">
                        <h6>Leave A Comment</h6>
                    </div>
                    <form id="contact_form" name="contact_form" class="default-form">
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Your Review"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group form-bottom">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="post" action="index.html">
                            <input type="search" name="search" placeholder="Enter to Search" required="">
                        </form>
                    </div>
                    <div class="categorise-menu">
                        <div class="text-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="categorise-list">
                            <li><a href="#">Pulmonary <span>(12)</span></a></li>
                            <li><a href="#">Neurology <span>(22)</span></a></li>
                            <li><a href="#">X - Ray <span>(18)</span></a></li>
                            <li><a href="#">Cardiogram <span>(32)</span></a></li>
                            <li><a href="#">Diagnostic <span>(21)</span></a></li>
                        </ul>
                    </div>
                    <div class="tag-list">
                        <div class="text-title">
                            <h6>Tags</h6>
                        </div>
                        <a href="#">Dental</a><a href="#">Root</a>
                        <a href="#">Clean</a><a href="#">Rehabilitation</a>
                        <a href="#">Surgery</a><a href="#">Doctor</a><a href="#">Pediatric</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
@endsection
