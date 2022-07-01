<section id="banner-login" class="container u-full-width">

    <div class="four columns">
        <div class="home-banking-wrapper" style="background: #b21f17;">
            <p align="center" style="font-weight: bold; font-size: 18px;">Home Banking Login</p>
            <!--login form -->
            <form class="login" target="_top" autocomplete="off" name="pgLogin" method="post" action="https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.accountaccess.DoLogin">

                <div class="tooltip">
                    <label for="memberID">Member ID</label>
                    <input type="text" name="AcctNum" placeholder="Account Number" maxlength="20" autofocus="" tabindex="1" aria-label="Account Number Field" id="memberID">

                </div>
                <label for="passwordID">Password</label>
                <input name="Pin" value="" maxlength="20" placeholder="Password" tabindex="2" type="password" aria-label="Password Field" autocomplete="current-password" id="passwordID">
                <input value="Login" name="btnOK" class="account2" tabindex="3" type="submit" aria-label="Login">
                <input name="txPin" value="" type="hidden">
            </form>
            <!-- end login form -->

            <p class="forgot-pass"><a id="forgotpasswordLink1" href="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=forgotpassword'); return false;">Forget your password?</a></p>

            <button class="become-a-member" id="newMemLink1" href="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=signup'); return false;" style="white-space: normal;">Enroll in Home Banking</button>
            <button class="become-a-member" id="newMemLink2" href="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=newmem'); return false;">Become a Member</button>
        </div>
    </div>
    <div class="eight columns" style="width: 69.333333%; margin-left: 0;">
        <div id="slider" class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>



                    <li data-transition="notransition" data-slotamount="1000" data-masterspeed="300" data-thumb="../images/slider/Web Banner Gas Cash.png">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="../images/slider/Web Banner Gas Cash.png" data-transition="notransition" alt="Home Equity Line of Credit">

                        <!-- THE CAPTIONS IN THIS SLDIE -->
                        <div class="caption large_text sfb" data-x="100" data-y="140" data-speed="500" data-start="1000" data-easing="easeOutExpo">Finance your Auto Loan through CGR and get $75 Gas Cash**</div>

                        <div class="caption randomrotate" data-x="100" data-y="200" data-speed="600" data-start="1700" data-easing="easeOutExpo"><a href="https://www.cgrcu.org/promo/finance-auto-loan.php"><img src="https://www.cgrcu.org/images/slider/learn-more.jpg" alt="Learn More Button"></a></div>
                    </li>



                </ul>
            </div>

            <script type="text/javascript">
                var tpj = jQuery;
                tpj.noConflict();

                tpj(document).ready(function() {

                    if (tpj.fn.cssOriginal != undefined)
                        tpj.fn.css = tpj.fn.cssOriginal;

                    tpj(".fullwidthbanner").revolution({
                        delay: 5000,
                        startwidth: 1280,
                        startheight: 500,

                        onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                        thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                        thumbHeight: 50,
                        thumbAmount: 3,

                        hideThumbs: 0,
                        navigationType: "bullet", // bullet, thumb, none
                        navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none

                        navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                        navigationHAlign: "center", // Vertical Align top,center,bottom
                        navigationVAlign: "bottom", // Horizontal Align left,center,right
                        navigationHOffset: 30,
                        navigationVOffset: 30,

                        soloArrowLeftHalign: "left",
                        soloArrowLeftValign: "center",
                        soloArrowLeftHOffset: 20,
                        soloArrowLeftVOffset: 0,

                        soloArrowRightHalign: "right",
                        soloArrowRightValign: "center",
                        soloArrowRightHOffset: 20,
                        soloArrowRightVOffset: 0,

                        touchenabled: "on", // Enable Swipe Function : on/off
                        stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                        stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                        hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                        hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                        hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value

                        fullWidth: "on",
                        shadow: 0 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
                    });
                });
            </script>

        </div>
        <!--end slider-->
    </div>
</section>
<!---end banner login-->