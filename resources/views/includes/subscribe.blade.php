<section class="newsletter-section">
    <div class="sec-bg" style="background-image: url(assets/images/shape/shape-1.png);"></div>
    <div class="shape-one"><img src="assets/images/shape/shape-2.png" alt=""></div>
    <div class="shape-two"><img src="assets/images/shape/shape-3.png" alt=""></div>
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2>Subscribe To <span>Our Newsletter</span> To Get The Latest Offers.</h2>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-form">
                        <form method="post" action="{{ route('subscribe.newsletter') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email Address" name="email" id="subscription-email" required>
                                <button type="submit" class="theme-btn btn-style-one"><span>Subscribe</span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>            
    </div>        
</section>