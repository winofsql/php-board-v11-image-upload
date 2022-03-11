<style>

/* IFRAME で表示する */
html,body {
	height: 100%;
}

body {
	margin: 0;
}
#bbs {
	padding: 16px;
	width: 100%;
	background-color: #e0e0e0;
}
#extend {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: calc( 100% - 4px );
	border: solid 2px #c0c0c0;
}

/* PC 用 */
@media screen and ( min-width:480px ) {

	#bbs {
		height: <?= $view_head_height - 60 ?>px;
	}

	#extend {
		height: calc( 100% - <?= $view_head_height - 60 ?>px - 2px );
	}

}
/* スマホ 用 */
@media screen and ( max-width:479px ) {

	#bbs {
		height: <?= $view_head_height ?>px;
	}

	#extend {
		height: calc( 100% - <?= $view_head_height ?>px - 2px );
	}
}
</style>
