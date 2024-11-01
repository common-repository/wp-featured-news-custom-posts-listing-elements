<?php
$style.= "
<style>
.post_block_2.".$unique_css_class." .h1 {
	margin-top: 20px;
	margin-bottom: 10px;
}
.post_block_2.".$unique_css_class." .post_block_title a{
	display:block !important;
}
.post_block_2.".$unique_css_class." .small-title {
	font-size: 10px;
	letter-spacing: 0.10em;
	font-weight: bold;
	line-height: 18px;
	color: #333333;
	margin-bottom: 5px;
	text-transform: uppercase;
}

.post_block_2.".$unique_css_class." .text-white {
	color: #fff;
}

.post_block_2.".$unique_css_class." article {
	border-bottom: none;
	padding-bottom: 15px;
	margin-bottom: 20px;
}

.post_block_2.".$unique_css_class." article .post-excerpt {
	padding: 9px 0;
}

.post_block_2.".$unique_css_class." article .meta {
	margin-top: 2px;
}

.post_block_2.".$unique_css_class." article .post-excerpt p {
	margin-top: 12px;
}

.post_block_2.".$unique_css_class." .meta span {
	font-size: 12px;
	color: #999999;
}

.post_block_2.".$unique_css_class." .meta span.comment i {
	margin-left: 5px;
}

.post_block_2.".$unique_css_class." article.style2 {
	padding-bottom: 30px;
	margin-bottom: 20px;
}

.post_block_2.".$unique_css_class." article.style2 .post-excerpt {
	padding: 0;
	margin: 0;
}

.post_block_2.".$unique_css_class." article.style3 {
	padding-bottom: 30px;
	overflow: hidden;
}

.post_block_2.".$unique_css_class." article.style3 a {
	overflow: hidden;
	display: inline;
	width: 100%;
	position: relative;
	color: #fff;
}

.post_block_2.".$unique_css_class." article.style3 .meta .author img {
	margin-right: 6px;
}

.post_block_2.".$unique_css_class." article.style3 .meta .comment {
	margin-left: 6px;
}

.post_block_2.".$unique_css_class." article.style3 .post-thumb {
	position: relative;
}

.post_block_2.".$unique_css_class." article.style3 .post-excerpt {
	position: absolute;
	bottom: 0;
	left: 0;
	padding: 20px;
	z-index: 11;
}

.post_block_2.".$unique_css_class." article.style3 .meta span,
.post_block_2 article.style3 .meta {
	color: #fff;
}

.post_block_2.".$unique_css_class." article.style3 h3 {
	font-weight: 300;
	margin: 7px 0 3px;
}

.post_block_2.".$unique_css_class." article.style3 .cat {
	position: absolute;

	color: #fff;
	z-index: 11;
}

.post_block_2.".$unique_css_class." article.style3 .bg-img {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." article.style3:hover .bg-img {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." .overlay {
	background: #000;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
	z-index: 5;
	transition: none;
}

.post_block_2.".$unique_css_class." .overlay-02 {
	opacity: 0.15;
}

.post_block_2.".$unique_css_class." .margin-bottom-15 {
	margin-bottom: 15px;
}

.post_block_2.".$unique_css_class." .style-alt {
	border-bottom: none;
	padding-bottom: 0px;
}

.post_block_2.".$unique_css_class." h3,
.post_block_2.".$unique_css_class." .h1 {
	text-transform: capitalize;
}

.post_block_2.".$unique_css_class." article:last-child {
	border-bottom: none;
}

.post_block_2.".$unique_css_class." .meta span a {
	color: #F26262;
}

.post_block_2.".$unique_css_class." .style3 {
	overflow: hidden;
}

.post_block_2.".$unique_css_class." .style3 a {
	overflow: hidden;
	display: inline;
	width: 100%;
	position: relative;
	color: #fff;
}

.post_block_2.".$unique_css_class." .style3 .meta .author img {
	margin-right: 6px;
}

.post_block_2.".$unique_css_class." .style3 .meta .comment {
	margin-left: 6px;
}

.post_block_2.".$unique_css_class." .style3 .post-thumb {
	position: relative;
}

.post_block_2.".$unique_css_class." .style3 .post-excerpt {
	position: absolute;
	bottom: 0;
	left: 0;
	padding: 20px;
	z-index: 11;
}

.post_block_2.".$unique_css_class." .style3 .meta span,
.post_block_2.".$unique_css_class." .style3 .meta {
	color: #fff;
}

.post_block_2.".$unique_css_class." .style3 h3 {
	font-weight: 300;
	margin: 7px 0 3px;
}

.post_block_2.".$unique_css_class." .style3 .cat {
	position: absolute;

	color: #fff;
	z-index: 11;
}

.post_block_2.".$unique_css_class." .style3 .bg-img {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." .style3:hover .bg-img {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." .style3 {
	overflow: hidden;
}

.post_block_2.".$unique_css_class." .style3 a {
	overflow: hidden;
	display: inline;
	width: 100%;
	position: relative;
	color: #fff;
}

.post_block_2.".$unique_css_class." .style3 .meta .author img {
	margin-right: 6px;
}

.post_block_2.".$unique_css_class." .style3 .meta .comment {
	margin-left: 6px;
}

.post_block_2.".$unique_css_class." .style3 .post-thumb {
	position: relative;
}

.post_block_2.".$unique_css_class." .style3 .post-excerpt {
	position: absolute;
	bottom: 0;
	left: 0;
	padding: 20px;
	z-index: 11;
}

.post_block_2.".$unique_css_class." .style3 .meta span,
.post_block_2.".$unique_css_class." .style3 .meta {
	color: #fff;
}

.post_block_2.".$unique_css_class." .style3 h3 {
	font-weight: 300;
	margin: 7px 0 3px;
}

.post_block_2.".$unique_css_class." .style3 .cat {
	position: absolute;

	color: #fff;
	z-index: 11;
}

.post_block_2.".$unique_css_class." .style3 .bg-img {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." .style3:hover .bg-img {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
}

.post_block_2.".$unique_css_class." .bg-img {
	transform: scale(1);
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
	width: 100%;
}

.post_block_2.".$unique_css_class." .bg-img:hover {
	transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transition: all .25s ease-in-out;
	-webkit-transition: all .25s ease-in-out;
	-moz-transition: all .25s ease-in-out;
	-o-transition: all .25s ease-in-out;
	overflow: hidden;
}

.post_block_2.".$unique_css_class." .beforethumbnail148 {
	margin-bottom: 5px;
	overflow: hidden;
	width: 100%;
	height: 148px;
}

.post_block_2.".$unique_css_class." .thumbnail148 {
	overflow: hidden;
	margin-bottom: 0px;
	border-bottom: none;
	height: 148px;
	position: relative;
	width: 100%;
	display: inline-block;
	vertical-align: top;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
}

.post_block_2.".$unique_css_class." .beforeonecollargestyle {
	margin-bottom: 25px;
	overflow: hidden;
	width: 100%;
	height: 380px;
}

.post_block_2.".$unique_css_class." .onecollargestyle {
	overflow: hidden;
	margin-bottom: 0px;
	border-bottom: none;
	height: 380px;
	position: relative;
	width: 100%;
	display: inline-block;
	vertical-align: top;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
}

@media only screen and (min-width: 420px) and (max-width: 767px) {
	.post_block_2.".$unique_css_class." .style2 .beforethumbnail148,
	.post_block_2.".$unique_css_class." .style2 .thumbnail148,
	.post_block_2.".$unique_css_class." .style3 .beforeonecollargestyle,
	.post_block_2.".$unique_css_class." .style3 .onecollargestyle {
		height: 380px;
	}
}

@media only screen and (min-width: 280px) and (max-width: 419px) {
	.post_block_2.".$unique_css_class." article.style3 .meta span,
	.post_block_2.".$unique_css_class." article.style3 .meta {
		display: none;
	}
}

@media only screen and (min-width: 280px) and (max-width: 419px) {
	.post_block_2.".$unique_css_class." .style2 .beforethumbnail148,
	.post_block_2.".$unique_css_class." .style2 .thumbnail148,
	.post_block_2.".$unique_css_class." .style3 .beforeonecollargestyle,
	.post_block_2.".$unique_css_class." .style3 .onecollargestyle {
		height: 231px;
	}
}

@media only screen and (min-width: 280px) and (max-width: 767px) {
	.post_block_2.".$unique_css_class." .small-title {
		margin-top: 13px;
	}
	.post_block_2.".$unique_css_class." article.style3 h3 {
		margin: 7px 0 10px;
		line-height: 26px;
	}
}

@media only screen and (min-width: 280px) and (max-width: 419px) {
	.post_block_2.".$unique_css_class."	.h1 {
		font-size: 16px;
		line-height: 24px;
	}
	.post_block_2.".$unique_css_class."	.style3.style-alt .post-excerpt h3 a {
		line-height: 24px;
		font-size: 18px;
	}
}

@media only screen and (min-width: 420px) and (max-width: 600px) {
	.post_block_2.".$unique_css_class." .post-excerpt h3.h1.text-white {
		font-size: 20px;
		line-height: 24px;
	}
	.post_block_2.".$unique_css_class." .h1 {
		font-size: 16px;
		line-height: 24px;
	}
	.post_block_2.".$unique_css_class." .style3.style-alt .post-excerpt h3 a {
		line-height: 24px;
		font-size: 18px;
	}
}

@media only screen and (min-width: 601px) and (max-width: 768px) {
	.post_block_2.".$unique_css_class." .post-excerpt h3.h1.text-white {
		font-size: 20px;
		line-height: 26px;
	}
	.post_block_2.".$unique_css_class." .h1 {
		font-size: 16px;
		line-height: 24px;
	}
	.post_block_2.".$unique_css_class." .style3.style-alt .post-excerpt h3 a {
		line-height: 18px;
		font-size: 26px;
	}
}

.post_block_2.".$unique_css_class." .style2:last-child {
	padding-bottom: 0;
	margin-bottom: 0;
}

.post_block_2.".$unique_css_class." .overlay {
	display: none;
}

.post_block_2.".$unique_css_class." .onecollargestyle:after {
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .60));
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .60)));
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .60));
	background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .60));
	background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .60));
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .60));
	top: auto;
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

.post_block_2.".$unique_css_class." .onecollargestyle:after {
	height: 40%;
}

.post_block_2.".$unique_css_class." .h1 {
	margin-top: 10px;
}

.post_block_2.".$unique_css_class." .meta .author img {
	display: none;
}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat {
	margin-left: 2px;
	margin-right: 2px;
	background-color: #F26262;
	margin-bottom: 4px;
	padding:5px;

}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat a,
.post_block_2.".$unique_css_class." .small-title-no-vc.cat a:hover {
	color: #fff;
	font-size: 10px;
	padding: 3px 8px;
}


.post_block_2.".$unique_css_class."  .small-title.cat {
	background: transparent;
}

.post_block_2.".$unique_css_class." article.style3 .cat {
	position: absolute;

	color: #fff;
	z-index: 11;
	width: intrinsic;
	width: -moz-max-content;
	width: -webkit-max-content;
}

.post_block_2.".$unique_css_class."   .small-title-no-vc.cat {
	margin-left: 0;
	margin-right: 4px;
	margin-bottom: 0;
}

.post_block_2.".$unique_css_class." .post-excerpt .small-title-no-vc.cat {

}

.post_block_2.".$unique_css_class." article.style3 .cat {
	position: absolute;

	color: #fff;
	z-index: 11;
	width: intrinsic;
	width: -moz-max-content;
	width: -webkit-max-content;
}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat {
	margin-left: 0;
	margin-right: 4px;
	background-color: #F26262;
	margin-bottom: 0;

}

.post_block_2.".$unique_css_class." .style3 .cat {
	width: intrinsic;
	width: -moz-max-content;
	width: -webkit-max-content;
}

.post_block_2.".$unique_css_class." .post-excerpt .small-title.cat {
	background: transparent;

}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat:hover {
	opacity: .85;
}

.post_block_2.".$unique_css_class." .small-title.cat:hover {
	opacity: .85;
}

.post_block_2.".$unique_css_class." .small-title.cat {
	color: #fff;
}
.post_block_2.".$unique_css_class." .small-title.cat a{
	font-size:inherit;
}
.post_block_2.".$unique_css_class." .small-title.cat a:hover{
	font-size:inherit;
}
.post_block_2.".$unique_css_class." .post-excerpt .small-title.cat {
	color: #fff;
}

.post_block_2.".$unique_css_class." .post-excerpt .small-title.cat a {
	color: #fff;
}

.post_block_2.".$unique_css_class." .post-excerpt .small-title.cat a:hover {
	color: #fff;
}

.post_block_2.".$unique_css_class." .h1 {
	letter-spacing: -0.03em;
}

.post_block_2.".$unique_css_class." .meta span,
.post_block_2.".$unique_css_class." .meta span a {
	text-transform: uppercase;
	letter-spacing: .5px;
	margin-bottom: 10px;
	line-height: 30px;
}

.post_block_2.".$unique_css_class." .style2 .small-title.cat {
	text-transform: uppercase;
	display: flex;
	letter-spacing: 0;
	margin-bottom: 10px;
}
.post_block_2.".$unique_css_class." .style2 .small-title-no-vc.cat{
	margin-top:0;
}
.post_block_2.".$unique_css_class." .small-title-no-vc.cat,
.post_block_2.".$unique_css_class." .post-thumb .small-title.cat {
	margin-top: 10px;
}

.post_block_2.".$unique_css_class." .post-thumb .small-title.cat .small-title-no-vc.cat {
	margin-top: 0;
}

.post_block_2.".$unique_css_class." .small-title.cat a,
.post_block_2.".$unique_css_class." .small-title.cat a:hover {
	text-transform: uppercase;
	letter-spacing: 0;
}

.post_block_2.".$unique_css_class." h3 b {
	letter-spacing: -0.03em;
}

.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3.h1,
.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3.h1 a,
.post_block_2.".$unique_css_class." .post-excerpt h3 a {
	letter-spacing: -0.03em;
	text-transform: none;
	color: #1b1d25;
}

.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3.h1,
.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3.h1 a,
.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3,
.post_block_2.".$unique_css_class." .post-thumb .post-excerpt h3 a {
	color: #fff;
}

.post_block_2.".$unique_css_class." article .post-excerpt p {
	color: #666;
	text-align: left;
	margin-bottom: 10px;
}

.post_block_2.".$unique_css_class." .vc_col-sm-8 .post-thumb:not(.fontsizing) .post-excerpt h3.h1,
.post_block_2.".$unique_css_class." .vc_col-sm-8 .post-thumb:not(.fontsizing) .post-excerpt h3.h1 a {
	color: #fff;
}

.post_block_2.".$unique_css_class." .beforethumbnail148,
.post_block_2.".$unique_css_class." .thumbnail148 {
	height: 200px;
}

.post_block_2.".$unique_css_class." .post-thumb .small-title {
	font-size: 11px;
}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat,
.post_block_2.".$unique_css_class." .small-title.cat .small-title-no-vc.cat {
	background: #f26262;
}

.post_block_2.".$unique_css_class." .small-title.cat a:hover {
	color: #fff;
}

.post_block_2.".$unique_css_class." .title_style_5 h3 b:after {
	background: #f7f7f7;
}

.post_block_2.".$unique_css_class." .meta span a:hover {
	color: #F26262;
}

.post_block_2.".$unique_css_class." .cat a:hover {
	color: #F26262;
}

.post_block_2.".$unique_css_class." .small-title-no-vc.cat a:hover,
.post_block_2.".$unique_css_class." .small-title.cat .small-title-no-vc.cat a:hover {
	color: #fff;
}

@media only screen and (max-width: 991px) {
	.post_block_2.".$unique_css_class." .home p {
		font-size: 12px;
		line-height: 16px;
	}
	.post_block_2.".$unique_css_class." .meta span,
	.post_block_2.".$unique_css_class." .meta span a {
		line-height: 24px;
	}
}

.post_block_2.".$unique_css_class." .loadmorebtn {
	border-radius: 0;
	display: block;
	text-align: center;
	font-size: 11px;
	font-weight: 200;
	letter-spacing: 0;
	cursor: pointer;
	padding: 1px 0;
	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;
	width: 100px;
	margin: 0 auto;
	border: 1px solid #ddd;
	margin-top: 30px;
	color: #787878;
}

.post_block_2.".$unique_css_class." .loadmorebtn:hover {
	background-color: #F26262;
	color: #fff;
	border: none;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.post_block_2.".$unique_css_class." .loadmorebtn {
		width: 100px;
	}
}

.post_block_2.".$unique_css_class." .loadmorebtn {
	margin-bottom: 10px;
	line-height: 30px;
}
</style>
";