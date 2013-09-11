<?php /* --- */
print "<?xml version=\"1.0\" encoding=\"windows-1251\" ?>
<rss version=\"2.0\" >
<channel>
<title>$titel RSS</title>
<link>$turl</link>
<description>$titel - news.</description>
<language>en</language>
<copyright>$titel (C) $godik</copyright>
<docs>$turl/rss.xml</docs>
<managingEditor>$adminmail</managingEditor>
<ttl>600</ttl>
<item>
<title>$d1d[0]</title>
<link>$turl/site_$d1d[8].html</link>
<description>$d1d[4]
</description>
<author>$adminmail</author>
<category domain=\"$turl/$d1d[2]-0.html/\">Category $d1d[2]</category>
<pubDate>$d1d[5]  +0300</pubDate>
</item>

        </channel>
</rss>"
?>