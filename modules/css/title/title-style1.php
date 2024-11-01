<?php
$style.= "
<style>
 .post-block.".$unique_css_class." h3 b,.post-block.".$unique_css_class."  h4 b { font-weight: 400; }
 .post-block.".$unique_css_class." .titleh3 b { font-weight: 400; }
 .post-block.".$unique_css_class." .pull-right .nav-tabs {
    padding-top: 5px;
}
.post-block.".$unique_css_class."  .titleh3.margin-bottom-20{
	margin-bottom: 23px !important;
	font-size: 16px;
    line-height: 36px;
    position: relative;
    padding: 0 0 0 20px;
    border: 1px solid rgba(0,0,0,.06);
    height: 40px;
	color: #F26262;
	text-transform: uppercase;
}
 .post-block.".$unique_css_class." .titleh3.margin-bottom-20:before {
    height: 100%;
    top: 0;
    margin-top: 0;
    background: #F26262;
	content: '';
    position: absolute;
    left: 0;
    width: 5px;
	display: inline-block;
}
 .post-block.".$unique_css_class." .home_sec_one_addon_1 .pull-right,  .home_sec_two_addon_1 .pull-right {
    margin-top: 3px !important;
}
.post-block.".$unique_css_class."  h3.margin-bottom-15{
	margin-bottom: 23px !important;
	font-size: 16px;
    line-height: 36px;
    position: relative;
    padding: 0 0 0 20px;
    border: 1px solid rgba(0,0,0,.06);
    height: 40px;
	color: #F26262;
	text-transform: uppercase;
}
 .post-block.".$unique_css_class." h3.margin-bottom-15:before {
    height: 100%;
    top: 0;
    margin-top: 0;
    background: #F26262;
	content: '';
    position: absolute;
    left: 0;
    width: 5px;
	display: inline-block;
}
 .post-block.".$unique_css_class." h4.margin-bottom-15{
	margin-bottom: 23px !important;
	font-size: 16px;
    line-height: 36px;
    position: relative;
    padding: 0 0 0 20px;
    border: 1px solid rgba(0,0,0,.06);
    height: 40px;
	color: #F26262;
	text-transform: uppercase;
}
 .post-block.".$unique_css_class." h4.margin-bottom-15:before {
    height: 100%;
    top: 0;
    margin-top: 0;
    background: #F26262;
	content: '';
    position: absolute;
    left: 0;
    width: 5px;
	display: inline-block;
}
</style>
";
if($heading_border_color){
$style.= "
<style>
.post-block.".$unique_css_class." h4.margin-bottom-15:before {
    background: ".$heading_border_color." !important;
}
</style>
";
}