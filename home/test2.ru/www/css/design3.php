<?php /* --- */
print "<html>
<head>
<title>$titles</title>
<meta name=\"title\" content=\"$titles\">
<meta name=\"Robots\" content=\"index,follow\">
<meta name=\"Resource-type\" content=\"document\">
<META content=\"text/html; charset=windows-1251\" http-equiv=Content-Type>
<META HTTP-EQUIV=\"PRAGMA\" CONTENT=\"NO-CACHE\">
<meta HTTP-EQUIV=\"cache-control\" CONTENT=\"no-cache\">
<link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
<LINK href=\"css/$colorsite.css\" rel=stylesheet type=text/css>

</HEAD>

<BODY BGCOLOR=\"#cccccc\" TEXT=\"#000000\" LINK=\"#0000ff\" VLINK=\"#800080\" ALINK=\"#ff0000\" leftMargin=0 topMargin=0>$topfiksdiz
 <table class=ramabot width=\"100%\" cellspacing=\"0\"  cellPadding=00 bgcolor=\"#30577F\">
        <tr>
<TD background=\"images/bg02.png\" class=top width=139>
<IMG SRC=\"images/bg01.png\">
</TD>

<td  background=\"images/bg02.png\" class=top  BGCOLOR=\"#00274F\" valign=middle align=right>
<IMG SRC=\"images/bg03.png\">
</TD>

<td  class=top width=200 HEIGHT=78 BGCOLOR=\"#00274F\" valign=middle align=right>
<IMG SRC=\"images/bg04.png\">
</TD>
        </TR>
</TABLE>

 <TABLE border=0 cellPadding=0 cellSpacing=0  width=100% HEIGHT=17>
 <TR>
 <TD class=top ALIGN=\"CENTER\" background=\"images/bg05.png\" BGCOLOR=\"#FFFFFF\"><IMG SRC=\"images/bg05.png\">
 </TD>
 </TR></TABLE>


<TABLE border=\"0\" BGCOLOR=\"#FFFFFF\" cellPadding=\"14\" cellSpacing=\"0\"  width=\"100%\">


<TR>
<TD class=navl WIDTH=\"170\" ALIGN=\"left\" VALIGN=\"TOP\"  class=top>

<!-- start left -->

 <BR>
$searchmenu
<p>
$zaprosmenu

<!-- end left -->

</TD>

<TD ALIGN=\"CENTER\" VALIGN=\"TOP\" class=top>

<!-- start center -->
<DIV ALIGN=\"JUSTIFY\">
<P>
<p>$telo</p><BR>$komm<BR><p>$paga</p>

</DIV>

<!-- end center -->

</TD>

<TD class=navr WIDTH=\"170\" VALIGN=\"TOP\" BGCOLOR=\"#ffffff\" CELLPADDING=\"8\" CELLSPACING=\"8\" class=top>

<!-- start right -->
<BR>
<H3>$ling[6]:</H3>
<A href=\"$turl/\">$ling[0]</A>
<A href=\"$turl/page_9990.html\">$ling[1]</A>
<A href=\"$turl/guestbook.html\">$ling[2]</A>
<A href=\"$turl/sitemap.html\">$ling[3]</A>
<A href=\"$turl/contact.html\">$ling[4]</A>
<A href=\"$turl/links.html\">$ling[5]</A>
$categorymenu
$glossarymenu

<div align=\"center\">
</div>


<!-- end right -->
</TD>


</TR>
</TABLE>


 <TABLE class=ramabot border=0 cellPadding=4 cellSpacing=0  width=100%><TR><TD class=top ALIGN=\"CENTER\"><a href=$turl/>$titel&copy; $godik</a></TD></TR></TABLE>

 $botfiksdiz
</BODY></HTML>";
?>