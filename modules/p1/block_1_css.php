<?php
$style.= "
<style>
.post_block_1.".$unique_css_class."  article {
    display: block;
}

.post_block_1.".$unique_css_class." a {
    color: #337ab7;
    text-decoration: none;
}
.post_block_1.".$unique_css_class." .post_block_title a{
	display:block !important;
}
.post_block_1.".$unique_css_class." a:focus,
.post_block_1.".$unique_css_class." a:hover {
    color: #23527c;
    text-decoration: underline;
}

.post_block_1.".$unique_css_class." a:focus {
    outline: dotted thin;
    outline: -webkit-focus-ring-color auto 5px;
    outline-offset: -2px;
}

.post_block_1.".$unique_css_class." h4,
.post_block_1.".$unique_css_class." h5 {
    margin-top: 10px;
    margin-bottom: 10px;
}


.post_block_1.".$unique_css_class." h5 {
    font-size: 14px;
}

.post_block_1.".$unique_css_class." p {
    margin: 0 0 10px;
}

.post_block_1.".$unique_css_class." .margin-bottom-20 {
    margin-bottom: 20px;
}

.post_block_1.".$unique_css_class." p {
    color: #707070;
}
.post_block_1.".$unique_css_class." a,
.post_block_1.".$unique_css_class." a:hover {
    text-decoration: none;
    transition: all .32s ease-in-out;
    -webkit-transition: all .32s ease-in-out;
    -moz-transition: all .32s ease-in-out;
    -o-transition: all .32s ease-in-out;
}

.post_block_1.".$unique_css_class." a {
    color: #333;
}

.post_block_1.".$unique_css_class." img {
    max-width: 100%;
}

.post_block_1.".$unique_css_class." h4,
.post_block_1.".$unique_css_class." h5 {
    color: #333;
    margin: 0;
}

.post_block_1.".$unique_css_class." .small-title {
    font-weight: 700;
    text-transform: uppercase;
}

.post_block_1.".$unique_css_class." h4 {
    letter-spacing: -.025em;
}

.post_block_1.".$unique_css_class." h4 {
    font-size: 22px;
    line-height: 26px;
}

.post_block_1.".$unique_css_class." h5 {
    font-size: 16px;
    line-height: 20px;
    letter-spacing: -.030em;
}

.post_block_1.".$unique_css_class." ul {
    padding: 0;
}

.post_block_1.".$unique_css_class." .small-title {
    font-size: 10px;
    letter-spacing: .1em;
    line-height: 18px;
    color: #333;
    margin-bottom: 5px;
}

.post_block_1.".$unique_css_class." .no-padding {
    padding: 0;
}

.post_block_1.".$unique_css_class." article {
    border-bottom: none;
    padding-bottom: 15px;
    margin-bottom: 20px;
}

.post_block_1.".$unique_css_class." article .post-excerpt {
    padding: 9px 0;
}

.post_block_1.".$unique_css_class." article .meta {
    margin-top: 2px;
}

.post_block_1.".$unique_css_class." article .post-excerpt p {
    margin-top: 3px;
}

.post_block_1.".$unique_css_class." .meta span {
    font-size: 12px;
    color: #999;
}

.post_block_1.".$unique_css_class." .meta span.comment i {
    margin-left: 5px;
}

.post_block_1.".$unique_css_class." article.style2 {
    padding-bottom: 30px;
    margin-bottom: 20px;
}

.post_block_1.".$unique_css_class." article.style2 .post-excerpt {
    padding: 0;
    margin: 0;
}

.post_block_1.".$unique_css_class." .mini-posts .col-md-4 {
    padding-right: 5px;
}

.post_block_1.".$unique_css_class." .mini-posts .meta span {
    color: #787878;
    margin: -8px 0 0;
    display: block;
}

.post_block_1.".$unique_css_class." .mini-posts article {
    border-bottom: none;
    padding-bottom: 0;
}

.post_block_1.".$unique_css_class." .article-home {
    border-bottom: none;
    padding-bottom: 0;
}

.post_block_1.".$unique_css_class." .play_md {
    background: url(".esc_url(plugins_url('the_wfnews').'/modules/images/video.png').") center no-repeat;
    top: 50%;
}

.post_block_1.".$unique_css_class." .style-alt {
    border-bottom: none;
    padding-bottom: 0;
}

.post_block_1.".$unique_css_class." .play_md {
    background-size: cover;
    position: absolute;
    left: 50%;
    right: auto;
    z-index: 7777;
    border-radius: 50%;
    transform: translate(-50%, -50%);
}

.post_block_1.".$unique_css_class." .play_thumb_48 {
    background: url((".esc_url(plugins_url('the_wfnews').'/modules/images/video.png').") center no-repeat;
    width: 36px;
    height: 36px;
    left: 50%;
    right: auto;
    z-index: 7777;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
}

.post_block_1.".$unique_css_class." .play_thumb_48 {
    background-size: cover;
    top: 48%;
}

.post_block_1.".$unique_css_class." h4,
.post_block_1.".$unique_css_class." h5 {
    text-transform: capitalize;
}

.post_block_1.".$unique_css_class." article:last-child {
    border-bottom: none;
}

.post_block_1.".$unique_css_class." .meta span a,
.post_block_1.".$unique_css_class." .nav-tabs>li.active {
    color: #F26262;
}

.post_block_1.".$unique_css_class." .nav > li > a:hover {
    background-color: transparent;
}


.post_block_1.".$unique_css_class." .bg-img {
    transition: all .25s ease-in-out;
}

.post_block_1.".$unique_css_class." .bg-img {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    width: 100%;
}

.post_block_1.".$unique_css_class." .bg-img:hover {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    transition: all .25s ease-in-out;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    overflow: hidden;
}

.post_block_1.".$unique_css_class." .beforegeneralstyle,
.post_block_1.".$unique_css_class." .generalstyle {
    overflow: hidden;
    height: 231px;
    width: 100%;
}

.post_block_1.".$unique_css_class." .generalstyle,
.post_block_1.".$unique_css_class." .thumbnail {
    border-bottom: none;
    position: relative;
    display: inline-block;
    vertical-align: top;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}

.post_block_1.".$unique_css_class." .beforegeneralstyle {
    margin-bottom: 12px;
}

.post_block_1.".$unique_css_class." .generalstyle {
    margin-bottom: 0;
}

.post_block_1.".$unique_css_class." .beforethumbnail,
.post_block_1.".$unique_css_class." .thumbnail {
    overflow: hidden;
    height: 75px;
}

.post_block_1.".$unique_css_class." .beforethumbnail {
    margin-bottom: 5px;
    width: 100%;
}

.post_block_1.".$unique_css_class." .thumbnail {
    margin-bottom: 0;
    width: 100%;
}

@media only screen and (min-width:768px) and (max-width:991px) {
    .post_block_1.".$unique_css_class."    .beforegeneralstyle,
    .post_block_1.".$unique_css_class."    .generalstyle {
        height: 185px;
    }
    .post_block_1.".$unique_css_class."    .sectiononestyle1 .beforegeneralstyle,
  .post_block_1.".$unique_css_class."   .sectiononestyle1 .generalstyle {
        height: 231px;
    }
    .post_block_1.".$unique_css_class."    .style2 .beforethumbnail,
    .post_block_1.".$unique_css_class."    .style2 .thumbnail {
        height: 100px;
    }
   .post_block_1.".$unique_css_class."   h4 {
        font-size: 18px;
    }
}

@media only screen and (min-width:420px) and (max-width:767px) {
    .post_block_1.".$unique_css_class."  .article-home .beforegeneralstyle,
 .post_block_1.".$unique_css_class."   .article-home .generalstyle,
    .post_block_1.".$unique_css_class."   .beforethumbnail,
    .post_block_1.".$unique_css_class."   .style2 .beforethumbnail,
    .post_block_1.".$unique_css_class."    .style2 .thumbnail,
    .post_block_1.".$unique_css_class."    .thumbnail {
        height: 380px;
    }
.post_block_1.".$unique_css_class." .dropdown-menu.show{
	    transform: translate3d(-100px, 30px, 0px) !important;
}	
	
}

@media only screen and (min-width:280px) and (max-width:419px) {
    .post_block_1.".$unique_css_class."   .beforethumbnail,
    .post_block_1.".$unique_css_class."   .thumbnail {
        height: 185px;
    }
    .post_block_1.".$unique_css_class."  .style2 .beforethumbnail,
    .post_block_1.".$unique_css_class."  .style2 .thumbnail {
        height: 231px;
    }
}

@media only screen and (min-width:280px) and (max-width:767px) {
    .post_block_1.".$unique_css_class."   .mini-posts .meta span {
        margin: 15px 0 0;
    }
    .post_block_1.".$unique_css_class."   .small-title {
        margin-top: 13px;
    }
    .post_block_1.".$unique_css_class."   h4 {
        font-size: 18px;
    }
    .post_block_1.".$unique_css_class."  .mini-posts .col-md-4 {
        padding-right: 15px;
    }
}

.post_block_1.".$unique_css_class." b.next-link:hover,
.post_block_1.".$unique_css_class." b.prev-link:hover {
    background: #F26262;
    color: #fff;
}

.post_block_1.".$unique_css_class." b.next-link,
.post_block_1.".$unique_css_class." b.prev-link {
    padding: 2px 12px;
    border: 1px solid #ddd;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 300;
    cursor: auto;
	font-family: 'Rajdhani', sans-serif;
}

.post_block_1.".$unique_css_class." b.next-link {
    margin: 0 10px 0 15px;
}

.post_block_1.".$unique_css_class." b.next-link,
.post_block_1.".$unique_css_class." b.next-link:hover {
    transition: all .32s ease-in-out;
    -webkit-transition: all .32s ease-in-out;
    -moz-transition: all .32s ease-in-out;
    -o-transition: all .32s ease-in-out;
}

.post_block_1.".$unique_css_class." b.prev-link {
    margin: 0;
}

.post_block_1.".$unique_css_class." b.prev-link:hover a,.post_block_1.".$unique_css_class." b.next-link:hover a {
    color: #fff;
}

.post_block_1.".$unique_css_class." b.prev-link,
.post_block_1.".$unique_css_class." b.prev-link:hover {
    transition: all .32s ease-in-out;
    -webkit-transition: all .32s ease-in-out;
    -moz-transition: all .32s ease-in-out;
    -o-transition: all .32s ease-in-out;
}

.post_block_1.".$unique_css_class." b.next-link.disabled,
.post_block_1.".$unique_css_class." b.next-link.disabled:hover {
    background: #fff;
    color: #ddd;
}

.post_block_1.".$unique_css_class." .tab-content .article-home.sectiononestyle1,
.post_block_1.".$unique_css_class." .tab-content .mini-posts article.style2:last-child {
    margin-bottom: 0;
}

@media only screen and (min-width:768px) and (max-width:991px) {
    .post_block_1.".$unique_css_class."    .vcelement_pagination {
        margin-top: 15px;
    }
}

@media only screen and (min-width:571px) and (max-width:767px) {
    .post_block_1.".$unique_css_class."    .vcelement_pagination {
        margin-top: 0;
        margin-bottom: 15px;
    }
}

@media only screen and (min-width:420px) and (max-width:570px) {
    .post_block_1.".$unique_css_class."  .vcelement_pagination {
        margin-top: 0;
        margin-bottom: 15px;
    }
}

@media only screen and (max-width:419px) {
    .post_block_1.".$unique_css_class."    .vcelement_pagination {
        margin-top: 20px;
        margin-bottom: 10px;
    }
}




@media only screen and (min-width:100px) and (max-width:279px) {

   .post_block_1.".$unique_css_class." .mini-posts .meta span {
        margin: auto;
    }
}

@media only screen and (min-width:570px) and (max-width:600px) {
   .post_block_1.".$unique_css_class."  .vcelement_pagination {
        margin-top: 0;
        padding-top: 0;
    }
}

.post_block_1.".$unique_css_class." .tab-content .generalstyle:after {
    background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .6));
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .6)));
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .6));
    background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .6));
    background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .6));
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .6));
    height: 50%;
    -webkit-transition: all .35s ease;
    -moz-transition: all .35s ease;
    -o-transition: all .35s ease;
    transition: all .35s ease;
    content: '';
    position: absolute;
    top: auto;
    left: 0;
    right: 0;
    bottom: 0;
}

.post_block_1.".$unique_css_class." .generalstyle:after {
    content: none;
}

.post_block_1.".$unique_css_class." .small-title-no-vc.cat a,
.post_block_1.".$unique_css_class." .small-title-no-vc.cat a:hover {
    color: #fff;
    text-transform: none;
    padding: 0;
}

.post_block_1.".$unique_css_class." .vc_column_container .small-title.cat {
    background: 0 0;
    padding: 0;
}

.post_block_1.".$unique_css_class." .vc_column_container .small-title-no-vc.cat {
    margin-left: 0;
    margin-right: 4px;
    margin-bottom: 0;
}

.post_block_1.".$unique_css_class." .vc_column_container .post-excerpt .small-title-no-vc.cat {
    padding: 4px 8px 3px;
}

.post_block_1.".$unique_css_class." .small-title-no-vc.cat {
    margin-left: 0;
    margin-right: 4px;
    background-color: #F26262;
    margin-bottom: 0;
    padding: 3px 8px;
}

.post_block_1.".$unique_css_class." .post-excerpt .small-title.cat {
	display: inline-flex;
    padding: 0;
	
}

.post_block_1.".$unique_css_class." .small-title-no-vc.cat:hover,
.small-title.cat:hover {
    opacity: .85;
}

.post_block_1.".$unique_css_class." .post-excerpt .small-title.cat,
.post_block_1.".$unique_css_class." .post-excerpt .small-title.cat a,
.post_block_1.".$unique_css_class." .post-excerpt .small-title.cat a:hover,
.post_block_1.".$unique_css_class." .small-title.cat {
    color: #fff;
}

@media only screen and (max-width:767px) and (min-width:280px) {
.post_block_1.".$unique_css_class."    .mini-posts .meta span {
        margin: 0;
    }
}

.post_block_1.".$unique_css_class." .play_md,
.post_block_1.".$unique_css_class." .play_thumb_48 {
    opacity: 0;
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
}

.post_block_1.".$unique_css_class." article:hover .play_md,
.post_block_1.".$unique_css_class." article:hover .play_thumb_48 {
    opacity: 1;
}

.post_block_1.".$unique_css_class." .meta span,
.post_block_1.".$unique_css_class." .meta span a {
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 10px;
}

.post_block_1.".$unique_css_class." .small-title.cat {
    text-transform: uppercase;
    padding: 0 10px;
    letter-spacing: 0;
    margin-bottom: 10px;
}

.post_block_1.".$unique_css_class." .small-title-no-vc.cat {
    margin-top: 10px;
}

.post_block_1.".$unique_css_class." .small-title.cat a,
.post_block_1.".$unique_css_class." .small-title.cat a:hover {
    text-transform: uppercase;
    letter-spacing: 0;
}

.post_block_1.".$unique_css_class." .post-excerpt h4 a,
.post_block_1.".$unique_css_class." .post-excerpt h5 a,
.post_block_1.".$unique_css_class." .titleh3 .nav.nav-tabs li a {
    letter-spacing: -0.03em;
    text-transform: none;
    color: #1b1d25;
}

.post_block_1.".$unique_css_class." .titleh3 .nav.nav-tabs li a {
    font-weight: 600;
    font-size: 14px;
}

.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h5,
.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h5 a,
.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h4,
.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h4 a {
    font-size: inherit;
    line-height: 1 ;
}

.post_block_1.".$unique_css_class." .post-excerpt h4,
.post_block_1.".$unique_css_class." .post-excerpt h4 a {
    font-size: 22px;
    line-height: 1;
}

.post_block_1.".$unique_css_class." .post-excerpt h5,
.post_block_1.".$unique_css_class." .post-excerpt h5 a {
    font-size: 22px;
    line-height: 1;
    font-weight: 600;
}

.post_block_1.".$unique_css_class." .post-excerpt h5 {
    margin-top: 3px;
}

.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h5 {
    margin-top: 0;
}

.post_block_1.".$unique_css_class." article .post-excerpt p {
    color: #666;
    text-align: left;
    margin-bottom: 10px;
}

@media only screen and (max-width: 767px) {
.post_block_1.".$unique_css_class."  .post-excerpt h5,
 .post_block_1.".$unique_css_class."    .post-excerpt h5 a,
.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h5,
.post_block_1.".$unique_css_class." .mini-posts .post-excerpt h5 a {
        font-weight: 700;
        font-size: 20px;
        line-height: 25px;
    }
.post_block_1.".$unique_css_class."  .post-excerpt h5 {
        margin-bottom: 20px;
    }
}

.post_block_1.".$unique_css_class." .nav-link.active{
    padding: 0px 15px;
    background-color: transparent;
    color: #f26262;
}
.post_block_1.".$unique_css_class." .dropdown-item.active{
    background-color:transparent;
    color: #f26262;
}
.post_block_1.".$unique_css_class." .dropdown.active .nav-link.dropdown-toggle{
    background-color:transparent;
    color: #f26262;
}

.post_block_1.".$unique_css_class." .nav-item a{padding: 0px 15px; line-height: 30px; font-size: initial;}

.post_block_1.".$unique_css_class." .row{
	width:100%;
}
</style>
";