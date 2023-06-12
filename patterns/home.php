<?php
/**
 * Title: Home
 * Slug: quincy-prototype/home
 * Categories: query
 * Keywords: home
 * Block Types: core/template/front-page
 */
?>

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<section id="feature" class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":0,"postType":"report","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
    <div class="wp-block-query"><!-- wp:post-template {"align":"full"} -->
        <!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isDark":false,"align":"center","className":"alignfull","style":{"color":{}}} -->
        <div class="wp-block-cover aligncenter is-light alignfull"><span aria-hidden="true"
                class="wp-block-cover__background has-background-dim"></span>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
                <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
                        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%">
                            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-white-background-color has-background"
                                style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                                <!-- wp:post-terms {"term":"product_type","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"backgroundColor":"secondary","textColor":"white"} /-->

                                <!-- wp:post-title {"isLink":true} /-->

                                <!-- wp:post-excerpt /-->

                                <!-- wp:post-author {"showAvatar":false,"byline":"","isLink":true} /-->

                                <!-- wp:post-date {"isLink":true} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column" id="feature"></div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained","contentSize":""}} -->
<section id="about"
    class="wp-block-group has-white-color has-primary-background-color has-text-color has-background has-link-color"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:heading {"level":1,"textColor":"base","fontFamily":"noto-serif"} -->
            <h1 class="wp-block-heading has-base-color has-text-color has-noto-serif-font-family">What is<br>the Quincy
                Institute?</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:paragraph {"textColor":"base","fontFamily":"dm-sans"} -->
            <p class="has-base-color has-text-color has-dm-sans-font-family"><em><strong>As a research
                        institution</strong>, we expose the dangerous consequences of an overly militarized American
                    foreign policy and present an alternative approach that promotes local ownership and resolution of
                    local issues.</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"base","fontFamily":"dm-sans"} -->
            <p class="has-base-color has-text-color has-dm-sans-font-family">Learn more about the Quincy Institute.</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-link-color"><!-- wp:paragraph {"fontFamily":"dm-sans"} -->
                <p class="has-dm-sans-font-family"><a href="https://quincyinst.test/our-principles/" data-type="page"
                        data-id="1116">Our Principles</a></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontFamily":"dm-sans"} -->
                <p class="has-dm-sans-font-family"><a href="https://quincyinst.test/our-principles/" data-type="page"
                        data-id="1116">Our Principles</a></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontFamily":"dm-sans"} -->
                <p class="has-dm-sans-font-family"><a href="https://quincyinst.test/our-principles/" data-type="page"
                        data-id="1116">Our Principles</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<section id="spotlight" class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:heading {"fontFamily":"noto-serif"} -->
    <h2 class="wp-block-heading has-noto-serif-font-family">Quincy Spotlight</h2>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":1,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"product_type":[370,518,827]}},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query">
        <!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary","textColor":"white"} -->
        <!-- wp:post-terms {"term":"product_type","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"backgroundColor":"secondary","textColor":"white"} /-->

        <!-- wp:post-featured-image {"isLink":true} /-->

        <!-- wp:group {"className":"post-body","layout":{"type":"constrained"}} -->
        <div class="wp-block-group post-body"><!-- wp:post-title {"isLink":true} /-->

            <!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

            <!-- wp:post-date /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"fontSize":"large"} -->
        <p class="has-text-align-center has-link-color has-large-font-size"><a
                href="https://quincyinst.test/all-reports/" data-type="page" data-id="11270">All Reports &amp;
                Briefs</a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained","contentSize":""}} -->
<section id="program-areas"
    class="wp-block-group has-white-color has-primary-background-color has-text-color has-background has-link-color"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:heading {"level":1,"textColor":"base","fontFamily":"noto-serif"} -->
            <h1 class="wp-block-heading has-base-color has-text-color has-noto-serif-font-family">Research at the Quincy
                Institute</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontFamily":"dm-sans"} -->
            <p class="has-dm-sans-font-family">Lorem ipsum dolor sit amet consectetur. Eros integer metus imperdiet
                libero in lectus tincidunt dui tincidunt.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:paragraph {"textColor":"base","fontFamily":"dm-sans"} -->
            <p class="has-base-color has-text-color has-dm-sans-font-family"><em><strong>OUR RESERACH LOREM
                        IPSUM<br></strong></em>Lorem ipsum dolor sit amet consectetur. Eros integer metus imperdiet
                libero in lectus tincidunt dui tincidunt.</p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:tag-cloud {"taxonomy":"category","smallestFontSize":"1.5rem","largestFontSize":"1.5rem"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"screen","layout":{"type":"constrained"}} -->
<section id="events" class="wp-block-group has-screen-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:heading {"textAlign":"center","fontFamily":"noto-serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-noto-serif-font-family">Events</h2>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query"><!-- wp:post-template {"className":"has-background has-white-background-color"} -->
        <!-- wp:group {"tagName":"article","layout":{"type":"flex","orientation":"vertical"}} -->
        <article class="wp-block-group">
            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|type"}}}}} /-->

            <!-- wp:post-date /-->
        </article>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"fontSize":"large"} -->
        <p class="has-text-align-center has-link-color has-large-font-size"><a href="/events/">All Events</a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|1","bottom":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"tertiary","textColor":"white","layout":{"type":"constrained"}} -->
<section id="in-news"
    class="wp-block-group has-white-color has-tertiary-background-color has-text-color has-background has-link-color"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--1);padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:heading {"textAlign":"center","fontFamily":"noto-serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-noto-serif-font-family">Experts in the News</h2>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":0,"postType":"expert","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"product_type":[]},"parents":[]},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query"><!-- wp:post-template {"backgroundColor":"primary"} -->
        <!-- wp:post-featured-image {"isLink":true} /-->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|1","left":"var:preset|spacing|1"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div id="post-body" class="wp-block-group"
            style="padding-top:0;padding-right:var(--wp--preset--spacing--1);padding-left:var(--wp--preset--spacing--1)">
            <!-- wp:post-title {"isLink":true} /-->

            <!-- wp:post-date /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontSize":"large"} -->
        <p class="has-text-align-center has-link-color has-large-font-size"><a href="/experts-in-the-news/"
                data-type="URL" data-id="/experts-in-the-news/">All Experts in the News</a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"layout":{"type":"constrained"}} -->
<section id="topics" class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:heading {"textAlign":"center","fontFamily":"noto-serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-noto-serif-font-family">Other Topics</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada felis
        justo, ut accumsan mauris facilisis in. Vestibulum nisl libero, aliquet sit amet lacus quis, ullamcorper varius
        lectus. Integer euismod mi in orci rhoncus vestibulum. Donec dictum odio sed enim molestie, vitae gravida magna
        pretium.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tag-cloud {"numberOfTags":24,"smallestFontSize":"1.25rem","largestFontSize":"1.25rem","align":"center"} /-->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"fontSize":"large"} -->
        <p class="has-text-align-center has-link-color has-large-font-size"><a
                href="https://quincyinst.test/all-reports/" data-type="page" data-id="11270">All Reports &amp;
                Briefs</a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|70","bottom":"var:preset|spacing|40","left":"var:preset|spacing|80"}}},"backgroundColor":"secondary","textColor":"white","layout":{"type":"constrained"}} -->
<section id="donate"
    class="wp-block-group has-white-color has-secondary-background-color has-text-color has-background has-link-color"
    style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"level":3,"fontFamily":"noto-serif"} -->
    <h3 class="wp-block-heading has-noto-serif-font-family">Help us achieve a world where peace is the norm and war the
        exception.</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontFamily":"dm-sans"} -->
    <p class="has-dm-sans-font-family">The Quincy Institute is a transpartisan “action tank” and communications project,
        established to challenge the decades-long obsession of U.S. foreign policy decision makers with global military
        dominance and war.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                href="https://quincyinst.test/donations/">Donate</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}}},"layout":{"type":"constrained"}} -->
<section id="subscribe" class="wp-block-group"
    style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
    <!-- wp:heading {"fontFamily":"noto-serif"} -->
    <h2 class="wp-block-heading has-noto-serif-font-family">America “goes not abroad, in search of monsters to destroy.”
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Lorem ipsum messaging messaging</p>
    <!-- /wp:paragraph -->

    <!-- wp:yikes-inc-easy-forms/easy-forms-block {"form_id":"1","form":{"custom_fields":[],"custom_notifications":"","custom_styles":"","custom_template":0,"error_messages":{"success":"","success-single-optin":"","success-resubscribed":"","general-error":"","already-subscribed":"","update-link":"","email-subject":"","email-body":"Greetings,\r\n\r\nA request has been made to update your Mailchimp account profile information. To do so please use the following link: [link]Update Mailchimp Profile Info[/link]\r\n\r\nIf you did not request this update, please disregard this email.\r\n\r\n\u0026nbsp;\r\n\r\nThis email was sent from: [url]\r\n\r\n\u0026nbsp;\r\n\r\n\u0026nbsp;\r\n\u003cp style=\u0022font-size: 13px; margin-top: 5em;\u0022\u003e\u003cem\u003eThis email was generated by the \u003ca href=\u0022http://www.wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/\u0022 target=\u0022_blank\u0022 rel=\u0022noopener\u0022\u003eEasy Forms for Mailchimp\u003c/a\u003e plugin, created by \u003ca href=\u0022http://www.yikesinc.com\u0022 target=\u0022_blank\u0022 rel=\u0022noopener\u0022\u003eYIKES Inc.\u003c/a\u003e\u003c/em\u003e\u003c/p\u003e","update-email-success":"","update-email-failure":""},"fields":{"EMAIL":{"label":"Email Address","type":"email","merge":"EMAIL","position":"1","id":"0","placeholder":"Email Address","default":"","description":"","additional-classes":"mc_embed_signup","hide-label":"1"}},"form_description":"Stay on top of how the world of foreign affairs is changing with our weekly newsletter.","form_name":"Newsletter","form_settings":{"yikes-easy-mc-form-class-names":"mc-field-group","yikes-easy-mc-inline-form":"0","yikes-easy-mc-submit-button-type":"text","yikes-easy-mc-submit-button-text":"Submit","yikes-easy-mc-submit-button-image":"","yikes-easy-mc-submit-button-classes":"button button__rounded","yikes-easy-mc-form-schedule":"0","yikes-easy-mc-form-restriction-start":1591238280,"yikes-easy-mc-form-restriction-end":1591238280,"yikes-easy-mc-form-restriction-pending-message":"Signup is not yet open, and will be available on June 3, 2020 at 10:36PM. Please come back then to signup.","yikes-easy-mc-form-restriction-expired-message":"This signup for this form ended on June 4, 2020 at 10:36PM.","yikes-easy-mc-form-login-required":"0","yikes-easy-mc-form-restriction-login-message":"You need to be logged in to sign up for this mailing list."},"id":1,"impressions":382303,"list_id":"5f148d0656","optin_settings":{"optin":"1","update_existing_user":"1","send_update_email":"1"},"redirect_page":"1923","redirect_user_on_submit":"0","submission_settings":{"ajax":"1","redirect_on_submission":"0","redirect_page":"1923","hide_form_post_signup":"0","custom_redirect_url":"","redirect_new_window":"0","replace_interests":"1"},"submissions":583},"form_description":"Stay on top of how the world of foreign affairs is changing with our weekly newsletter.","inline":true,"form_title":"Newsletter","submit_button_text":"Submit"} /-->
</section>
<!-- /wp:group -->