$(document).ready(function(){var e=function(){var e='<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8629542769595128" data-ad-slot="1421908493" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';$(".texto-nota p:first").after(e)},i=function(){var e=$("body").css("background-image").replace("url(","").replace(")","").replace("'","").replace('"',"");windowHeight=$(window).height(),contentHeight=$("html").height();var i=new Image;i.onload=function(){{var e=this.height;this.width}ratio=(e-windowHeight)/(contentHeight-windowHeight),$("body").attr("data-stellar-background-ratio",ratio),$("body").stellar()},i.src=e},t=function(){var e=window.innerWidth>0?window.innerWidth:screen.width;$(".flickr a").remove(),e>=768&&979>=e&&$(".flickr").flickrush({limit:20,id:"124559478@N06",random:!0}),e>979&&$(".flickr").flickrush({limit:12,id:"124559478@N06",random:!0}),e>640&&767>=e&&$(".flickr").flickrush({limit:16,id:"124559478@N06",random:!0}),e>480&&640>=e&&$(".flickr").flickrush({limit:14,id:"124559478@N06",random:!0}),e>320&&480>=e&&$(".flickr").flickrush({limit:15,id:"124559478@N06",random:!0}),320>=e&&$(".flickr").flickrush({limit:12,id:"124559478@N06",random:!0})},n=function(){$(".news").bxSlider({speed:600,touchEnabled:!0,nextSelector:".breaking>.controls .next",prevSelector:".breaking>.controls .prev",pager:!1,infiniteLoop:!0,adaptiveHeight:!0,auto:!0,pause:4e3});window.innerWidth>0?window.innerWidth:screen.width;$(".post-slider .slides").bxSlider({speed:1e3,touchEnabled:!0,pager:!1,infiniteLoop:!0,nextSelector:".post-slider .controls .next",prevSelector:".post-slider .controls .prev",fadeText:!0,auto:!0,pause:8e3})};$(window).load(function(){var o=window.innerWidth>0?window.innerWidth:screen.width;o>767&&i(),e(),t(),n()}),$(".form-search .search-query").focusin(function(){$(this).parent().find(".btn").css("borderLeft","1px solid #0091ff")}),$(".form-search .search-query").focusout(function(){$(this).parent().find(".btn").css("borderLeft","1px solid #ddd")}),$("#menu-button").on("click",function(e){e.preventDefault(),$("ul.menu").slideToggle()}),$("#header-menu-button").on("click",function(e){e.preventDefault(),$("header nav>ul").slideToggle()})});