<?php
$Link = array();
$Link[] = 'http://vnexpress.net/ListFile/Weather/Sonla.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Haiphong.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Hanoi.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Vinh.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Danang.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Nhatrang.xml';
$Link[] = 'http://vnexpress.net/ListFile/Weather/Pleicu.xml';
$Link[] = 'http://www.24h.com.vn/guest/RSS/';
$id = isset($_GET['id'])?intval($_GET['id']):0;
$content =  file_get_contents($Link[$id]);
$p = xml_parser_create();
xml_parse_into_struct($p, $content, $xml);
xml_parser_free($p);
?>
<img src="http://static.24h.com.vn/images/2014/small-icon/390.png/<?php echo $xml[1]['value']; ?>" align="left" />
<img src="http://vnexpress.net/Images/Weather/<?php echo $xml[3]['value']; ?>" align="left" />
<img src="http://vnexpress.net/Images/Weather/<?php echo $xml[5]['value']; ?>" align="left" />
<img src="images/c.gif" align="left" /><p><br />
<br /><br />
<?php echo $xml[13]['value']; ?></p>
