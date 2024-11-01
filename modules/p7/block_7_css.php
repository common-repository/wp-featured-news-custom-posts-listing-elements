<?php
$style.= "
<style>
.post_block_7.".$unique_css_class." .small-title-no-vc{
	display:inline-block;
}
.post_block_7.".$unique_css_class." .post_block_title a{
	display:block !important;
}
.post_block_7.".$unique_css_class." .small-title-no-vc a{
    font-size: inherit !important;
}
.post_block_7.".$unique_css_class." .margin-bottom-15 {
	margin-bottom: 15px !important;
}
.post_block_7.".$unique_css_class." .small-title {
	font-weight: 700;
	text-transform: uppercase;
}

.post_block_7.".$unique_css_class." .small-title {
	font-size: 10px;
	letter-spacing: .1em;
	line-height: 18px;
	color: #333;
	margin-bottom: 5px;
}

.post_block_7.".$unique_css_class." .no-padding {
	padding: 0 !important;
}

.post_block_7.".$unique_css_class." article {
	border-bottom: none;
	padding-bottom: 15px;
	margin-bottom: 20px;
}

.post_block_7.".$unique_css_class." article .post-excerpt {
	padding: 9px 0;
}

.post_block_7.".$unique_css_class." article .meta {
	margin-top: 2px;
}

.post_block_7.".$unique_css_class." .meta span {
	font-size: 12px;
	color: #999;
}

.post_block_7.".$unique_css_class." .meta span.comment i {
	margin-left: 5px;
}

.post_block_7.".$unique_css_class." .blog-single .meta span {
	font-size: 14px;
}

.post_block_7.".$unique_css_class." .blog-single .meta span i {
	margin-right: 3px;
}

.post_block_7.".$unique_css_class." .blog-single .meta .comment {
	margin-left: 6px;
}

.post_block_7.".$unique_css_class." .article-home {
	border-bottom: none;
	padding-bottom: 0;
}

.post_block_7.".$unique_css_class." .margin-bottom-15 {
	margin-bottom: 15px;
}

.post_block_7.".$unique_css_class." .style-alt {
	border-bottom: none;
	padding-bottom: 0!important;
}

.post_block_7.".$unique_css_class." h4 {
	text-transform: capitalize;
}

.post_block_7.".$unique_css_class." .blog-single h4 {
	padding: 10px 0;
}

.post_block_7.".$unique_css_class." article:last-child {
	border-bottom: none;
}

.post_block_7.".$unique_css_class." .meta span a {
	color: #F26262;
}

.post_block_7.".$unique_css_class." .bg-img {
	transition: all .25s ease-in-out;
}

.post_block_7.".$unique_css_class." .bg-img {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
	width: 100%;
}

.post_block_7.".$unique_css_class." .bg-img:hover {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
	overflow: hidden;
}

.post_block_7.".$unique_css_class." .beforegeneralstyle,
.post_block_7.".$unique_css_class." .generalstyle {
	overflow: hidden;
	height: 231px;
	width: 100%;
}

.post_block_7.".$unique_css_class." .generalstyle {
	border-bottom: none;
	position: relative;
	display: inline-block;
	vertical-align: top;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
}

.post_block_7.".$unique_css_class." .beforegeneralstyle {
	margin-bottom: 12px!important;
}

.post_block_7.".$unique_css_class." .generalstyle {
	margin-bottom: 0;
}

@media only screen and (min-width:768px) and (max-width:991px) {
.post_block_7.".$unique_css_class." 	.beforegeneralstyle,
.post_block_7.".$unique_css_class." 	.generalstyle {
		height: 185px!important;
	}
.post_block_7.".$unique_css_class." 	h4 {
		font-size: 18px;
	}
}

@media only screen and (min-width:420px) and (max-width:767px) {
.post_block_7.".$unique_css_class." 	.article-home .beforegeneralstyle,
.post_block_7.".$unique_css_class." 	.article-home .generalstyle {
		height: 380px!important;
	}
}

@media only screen and (min-width:280px) and (max-width:767px) {
.post_block_7.".$unique_css_class." 	.small-title {
		margin-top: 13px;
	}
.post_block_7.".$unique_css_class." 	h4 {
		font-size: 18px;
	}
}

.post_block_7.".$unique_css_class." .post_block_7.".$unique_css_class." .article-home {
	padding-bottom: 0!important;
	margin-bottom: 0!important;
}

.post_block_7.".$unique_css_class." .small-title-no-vc.cat a,
.post_block_7.".$unique_css_class." .small-title-no-vc.cat a:hover {
	color: #fff!important;
	text-transform: none;
	font-size: 9px;
	padding: 0;
}

.post_block_7.".$unique_css_class."  .small-title.cat {
	background: 0 0;
	padding: 0!important;
}

.post_block_7.".$unique_css_class."  .small-title-no-vc.cat {
	margin-left: 0;
	margin-right: 4px;
	margin-bottom: 0;
}

.post_block_7.".$unique_css_class."  .post-excerpt .small-title-no-vc.cat {
	padding: 5px;
}

.post_block_7.".$unique_css_class." .small-title-no-vc.cat {
	margin-left: 0;
	margin-right: 4px;
	background-color: #F26262;
	margin-bottom: 0;
}

.post_block_7.".$unique_css_class." .post-excerpt .small-title.cat {
	background: 0 0;
	padding: 0!important;
}

.post_block_7.".$unique_css_class." .small-title-no-vc.cat:hover,
.post_block_7.".$unique_css_class." .small-title.cat:hover {
	opacity: .85;
}

.post_block_7.".$unique_css_class." .post-excerpt .small-title.cat,
.post_block_7.".$unique_css_class." .post-excerpt .small-title.cat a,
.post_block_7.".$unique_css_class." .post-excerpt .small-title.cat a:hover,
.post_block_7.".$unique_css_class." .small-title.cat {
	color: #fff;
}
</style>
";