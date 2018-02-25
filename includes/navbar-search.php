<?php
/*
Navbar search form
==================

If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.

Then you can insert the Search Widget into the sidebar.
*/
?>

<!--
<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search_div">
		<input type="text" name="tt" id="tt" class="header_searchtext" value="站內搜尋"
		onfocus="cleartext(this)" onblur="resettext(this)">
	</div>
</form>
-->
<style>

input[type="text"] {  /* 4 + 5 */
	font-family: 'Noto Serif CJK TC', 'Noto Serif CJK', 'Source Han Serif TC', 'Source Han Serif', source-han-serif-sc, serif;
	width: 19vw;
  height: 3vh;
	font-weight: 400;
	font-size: 0.8em; /* 5 */
	border-radius: 3px;
	letter-spacing: 0.1em;
	color: rgba(180, 180, 180, 1);
  margin-left: 53.1875vw;
	border: 1px solid #fff;
	padding: 0 1vw 0 0;
}

</style>
<div>
	<input type="text" name="tt" id="tt" style="text-align:right; " value ="站內搜尋"
	onFocus="if(this.value==this.defaultValue) this.value=''" onBlur="if(this.value=='') this.value=this.defaultValue">
</div>

<script>
function clearDefault(t){
		if (t.value == t.defaultValue) t.value="";
}
function recallDefault(t){
	  if (t.value == "") t.value = t.defaultValue;
}
</script>
