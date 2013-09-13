<?php
if(!defined('IN_DISCUZ')){exit('Access Denied');}
define('DZWHM_ROOT',DISCUZ_ROOT.'/source/plugin/host/');
$language=$_POST['language'];
if(!$language||!$_POST[agree]){
?>
<style type="text/css">
.installbtn{
position:absolute;
width:75px;
height:30px;
background-image:url('source/plugin/host/images/install1.gif');
background-repeat:no-repeat;
border:0px;
}
.installbtn:hover{
background-image:url('source/plugin/host/images/install2.gif');

}

</style>
<img src='./source/plugin/host/images/logo.gif'><br/>
&#x60A8;&#x4E00;&#x65E6;&#x5B89;&#x88C5;&#x4E86;DzWHM&#xFF0C;&#x4EE3;&#x8868;&#x60A8;&#x5DF2;&#x9605;&#x8BFB;&#x5E76;&#x540C;&#x610F;&#x63A5;&#x53D7;&#x5176;<a href="http://dzwhm.sourceforge.net/mirror/license.txt" target=_blank>License Agreement</a>:<br/><br/>
<textarea readonly style="width:600px; height:400px;">

&#x4E2D;&#x6587;&#x7248;&#x6388;&#x6743;&#x534F;&#x8BAE; &#x9002;&#x7528;&#x4E8E;&#x4E2D;&#x6587;&#x7528;&#x6237;

&#x7248;&#x6743;&#x6240;&#x6709; (C) 2011&#xFF0C;Fenmu&#x539F;&#x521B;&#x5DE5;&#x4F5C;&#x5BA4;
&#x4FDD;&#x7559;&#x6240;&#x6709;&#x6743;&#x5229;&#x3002;

&#x611F;&#x8C22;&#x60A8;&#x9009;&#x62E9; DzWHM &#x4E3B;&#x673A;&#x4EA7;&#x54C1;&#x3002;&#x5E0C;&#x671B;&#x6211;&#x4EEC;&#x7684;&#x52AA;&#x529B;&#x80FD;&#x4E3A;&#x60A8;&#x63D0;&#x4F9B;&#x4E00;&#x4E2A;&#x9AD8;&#x6548;&#x5FEB;&#x901F;&#x548C;&#x5F3A;&#x5927;&#x7684;&#x670D;&#x52A1;&#x96C6;&#x7FA4;&#x7A7A;&#x95F4;&#x7BA1;&#x7406;&#x89E3;&#x51B3;&#x65B9;&#x6848;&#x3002;

DzWHM &#x82F1;&#x6587;&#x5168;&#x79F0;&#x4E3A; WebHostManager For Discuz! Board&#xFF0C;&#x987E;&#x540D;&#x601D;&#x4E49;,&#x4E2D;&#x6587;&#x5168;&#x79F0;&#x4E3A; Discuz!&#x793E;&#x533A;&#x7F51;&#x5B58;&#x7BA1;&#x7406;&#xFF0C;&#x4EE5;&#x4E0B;&#x7B80;&#x79F0; DzWHM &#x3002;

&#x672C;&#x63D2;&#x4EF6;&#x867D;&#x7136;&#x672A;&#x53D6;&#x5F97;&#x7248;&#x6743;&#x6CE8;&#x518C;&#x53F7;&#x53CA;&#x8BC1;&#x4E66;&#xFF0C;&#x4F46;&#x9075;&#x5FAA;&#x300A;&#x975E;&#x5546;&#x4E1A;&#x5E94;&#x7528;&#x7F72;&#x540D;&#x514D;&#x8D39;&#x6388;&#x6743;&#x300B;&#x548C;&#x201C;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x201D;&#x4E24;&#x79CD;&#x6A21;&#x5F0F;&#xFF1A;

&#x4EE5;&#x4E0B;&#x662F;&#x6388;&#x6743;&#x8BE6;&#x7EC6;&#x5185;&#x5BB9;&#xFF0C;&#x671B;&#x60A8;&#x5728;&#x5B89;&#x88C5;&#x542F;&#x7528;&#x524D;&#x4ED4;&#x7EC6;&#x9605;&#x8BFB;&#x5E76;&#x8BA4;&#x771F;&#x7406;&#x89E3;&#xFF1A;

I &#x534F;&#x8BAE;&#x8BB8;&#x53EF;&#x7684;&#x6743;&#x5229;
    1. &#x60A8;&#x53EF;&#x4EE5;&#x5728;&#x5B8C;&#x5168;&#x9075;&#x5B88;&#x672C;&#x6700;&#x7EC8;&#x7528;&#x6237;&#x6388;&#x6743;&#x534F;&#x8BAE;&#x7684;&#x57FA;&#x7840;&#x4E0A;&#xFF0C;&#x5C06;&#x672C;&#x8F6F;&#x4EF6;&#x5E94;&#x7528;&#x4E8E;&#x975E;&#x5546;&#x4E1A;&#x7528;&#x9014;&#xFF0C;&#x800C;&#x4E0D;&#x5FC5;&#x652F;&#x4ED8;&#x8F6F;&#x4EF6;&#x7248;&#x6743;&#x6388;&#x6743;&#x8D39;&#x7528;&#x3002;
    2. &#x60A8;&#x53EF;&#x4EE5;&#x5728;&#x534F;&#x8BAE;&#x89C4;&#x5B9A;&#x7684;&#x7EA6;&#x675F;&#x548C;&#x9650;&#x5236;&#x8303;&#x56F4;&#x5185;&#x4FEE;&#x6539; DzWHM &#x6E90;&#x4EE3;&#x7801;(&#x5982;&#x679C;&#x88AB;&#x63D0;&#x4F9B;&#x7684;&#x8BDD;)&#x6216;&#x754C;&#x9762;&#x98CE;&#x683C;&#x4EE5;&#x9002;&#x5E94;&#x60A8;&#x7684;&#x7F51;&#x7AD9;&#x8981;&#x6C42;&#xFF0C;&#x4F46;&#x7248;&#x6743;&#x4FE1;&#x606F;&#x5904;&#x7981;&#x6B62;&#x514D;&#x8D39;&#x6388;&#x6743;&#x7528;&#x6237;&#x4FEE;&#x6539;&#xFF0C;&#x5426;&#x5219;&#x5B9A;&#x6027;&#x4E3A;&#x4FB5;&#x6743;&#x3002;
    3. &#x60A8;&#x62E5;&#x6709;&#x4F7F;&#x7528;&#x672C;&#x8F6F;&#x4EF6;&#x6784;&#x5EFA;&#x7684;&#x8BBA;&#x575B;&#x4E2D;&#x5168;&#x90E8;&#x4F1A;&#x5458;&#x8D44;&#x6599;&#x3001;&#x6587;&#x7AE0;&#x53CA;&#x76F8;&#x5173;&#x4FE1;&#x606F;&#x7684;&#x6240;&#x6709;&#x6743;&#xFF0C;&#x5E76;&#x72EC;&#x7ACB;&#x627F;&#x62C5;&#x4E0E;&#x6587;&#x7AE0;&#x5185;&#x5BB9;&#x7684;&#x76F8;&#x5173;&#x6CD5;&#x5F8B;&#x4E49;&#x52A1;&#x3002;
    4. &#x83B7;&#x5F97;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x4E4B;&#x540E;&#xFF0C;&#x60A8;&#x53EF;&#x4EE5;&#x5C06;&#x672C;&#x8F6F;&#x4EF6;&#x5E94;&#x7528;&#x4E8E;&#x5546;&#x4E1A;&#x7528;&#x9014;&#xFF0C;&#x540C;&#x65F6;&#x4F9D;&#x636E;&#x6240;&#x8D2D;&#x4E70;&#x7684;&#x6388;&#x6743;&#x7C7B;&#x578B;&#x4E2D;&#x786E;&#x5B9A;&#x7684;&#x6280;&#x672F;&#x652F;&#x6301;&#x671F;&#x9650;&#x3001;&#x6280;&#x672F;&#x652F;&#x6301;&#x65B9;&#x5F0F;&#x548C;&#x6280;&#x672F;&#x652F;&#x6301;&#x5185;&#x5BB9;&#xFF0C;&#x81EA;&#x8D2D;&#x4E70;&#x65F6;&#x523B;&#x8D77;&#xFF0C;&#x5728;&#x6280;&#x672F;&#x652F;&#x6301;&#x671F;&#x9650;&#x5185;&#x62E5;&#x6709;&#x901A;&#x8FC7;&#x6307;&#x5B9A;&#x7684;&#x65B9;&#x5F0F;&#x83B7;&#x5F97;&#x6307;&#x5B9A;&#x8303;&#x56F4;&#x5185;&#x7684;&#x6280;&#x672F;&#x652F;&#x6301;&#x670D;&#x52A1;&#x3002;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x7528;&#x6237;&#x4EAB;&#x6709;&#x53CD;&#x6620;&#x548C;&#x63D0;&#x51FA;&#x610F;&#x89C1;&#x7684;&#x6743;&#x529B;&#xFF0C;&#x76F8;&#x5173;&#x610F;&#x89C1;&#x5C06;&#x88AB;&#x4F5C;&#x4E3A;&#x9996;&#x8981;&#x8003;&#x8651;&#xFF0C;&#x4F46;&#x6CA1;&#x6709;&#x4E00;&#x5B9A;&#x88AB;&#x91C7;&#x7EB3;&#x7684;&#x627F;&#x8BFA;&#x6216;&#x4FDD;&#x8BC1;&#x3002;

II &#x534F;&#x8BAE;&#x89C4;&#x5B9A;&#x7684;&#x7EA6;&#x675F;&#x548C;&#x9650;&#x5236;
    1. &#x672A;&#x83B7;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x4E4B;&#x524D;&#xFF0C;&#x4E0D;&#x5F97;&#x5C06;&#x672C;&#x8F6F;&#x4EF6;&#x7528;&#x4E8E;&#x5546;&#x4E1A;&#x7528;&#x9014;&#xFF08;&#x5305;&#x62EC;&#x4F46;&#x4E0D;&#x9650;&#x4E8E;&#x4F01;&#x4E1A;&#x7F51;&#x7AD9;&#x3001;&#x7ECF;&#x8425;&#x6027;&#x7F51;&#x7AD9;&#x3001;&#x4EE5;&#x8425;&#x5229;&#x4E3A;&#x76EE;&#x6216;&#x5B9E;&#x73B0;&#x76C8;&#x5229;&#x7684;&#x7F51;&#x7AD9;&#xFF09;&#x3002;&#x8D2D;&#x4E70;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x8BF7;&#x767B;&#x9646;http://www.fen.mu/forum.php?mod=forumdisplay&fid=51 &#x53C2;&#x8003;&#x76F8;&#x5173;&#x8BF4;&#x660E;&#x3002;
    2. &#x4E0D;&#x5F97;&#x5BF9;&#x672C;&#x8F6F;&#x4EF6;&#x6216;&#x4E0E;&#x4E4B;&#x5173;&#x8054;&#x7684;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x8FDB;&#x884C;&#x51FA;&#x79DF;&#x3001;&#x51FA;&#x552E;&#x3001;&#x62B5;&#x62BC;&#x6216;&#x53D1;&#x653E;&#x5B50;&#x8BB8;&#x53EF;&#x8BC1;&#x3002;
    3. &#x65E0;&#x8BBA;&#x5982;&#x4F55;&#xFF0C;&#x5373;&#x65E0;&#x8BBA;&#x7528;&#x9014;&#x5982;&#x4F55;&#x3001;&#x662F;&#x5426;&#x7ECF;&#x8FC7;&#x4FEE;&#x6539;&#x6216;&#x7F8E;&#x5316;&#x3001;&#x4FEE;&#x6539;&#x7A0B;&#x5EA6;&#x5982;&#x4F55;&#xFF0C;&#x53EA;&#x8981;&#x4F7F;&#x7528; DzWHM &#x7684;&#x6574;&#x4F53;&#x6216;&#x4EFB;&#x4F55;&#x90E8;&#x5206;&#xFF0C;&#x672A;&#x7ECF;&#x4E66;&#x9762;&#x8BB8;&#x53EF;&#xFF0C;&#x7CFB;&#x7EDF;&#x4FE1;&#x606F;&#x5904;&#x7684;&#x201C;Powered by DzWHM v***&#x201D;&#x5B57;&#x6837;&#x548C;&#x94FE;&#x63A5;&#x90FD;&#x5FC5;&#x987B;&#x4FDD;&#x7559;&#xFF0C;&#x800C;&#x4E0D;&#x80FD;&#x6E05;&#x9664;&#x6216;&#x4FEE;&#x6539;&#x3002;
    4. &#x7981;&#x6B62;&#x5728; DzWHM &#x7684;&#x6574;&#x4F53;&#x6216;&#x4EFB;&#x4F55;&#x90E8;&#x5206;&#x57FA;&#x7840;&#x4E0A;&#x4EE5;&#x53D1;&#x5C55;&#x4EFB;&#x4F55;&#x6D3E;&#x751F;&#x7248;&#x672C;&#x3001;&#x4FEE;&#x6539;&#x7248;&#x672C;&#x6216;&#x7B2C;&#x4E09;&#x65B9;&#x7248;&#x672C;&#x7528;&#x4E8E;&#x91CD;&#x65B0;&#x5206;&#x53D1;&#x3002;
    5. &#x5982;&#x679C;&#x60A8;&#x672A;&#x80FD;&#x9075;&#x5B88;&#x672C;&#x534F;&#x8BAE;&#x7684;&#x6761;&#x6B3E;&#xFF0C;&#x60A8;&#x7684;&#x6388;&#x6743;&#x5C06;&#x88AB;&#x7EC8;&#x6B62;&#xFF0C;&#x6240;&#x88AB;&#x8BB8;&#x53EF;&#x7684;&#x6743;&#x5229;&#x5C06;&#x88AB;&#x6536;&#x56DE;&#xFF0C;&#x5E76;&#x627F;&#x62C5;&#x76F8;&#x5E94;&#x6CD5;&#x5F8B;&#x8D23;&#x4EFB;&#x3002;

III &#x6709;&#x9650;&#x62C5;&#x4FDD;&#x548C;&#x514D;&#x8D23;&#x58F0;&#x660E;
    1. &#x672C;&#x8F6F;&#x4EF6;&#x53CA;&#x6240;&#x9644;&#x5E26;&#x7684;&#x6587;&#x4EF6;&#x662F;&#x4F5C;&#x4E3A;&#x4E0D;&#x63D0;&#x4F9B;&#x4EFB;&#x4F55;&#x660E;&#x786E;&#x7684;&#x6216;&#x9690;&#x542B;&#x7684;&#x8D54;&#x507F;&#x6216;&#x62C5;&#x4FDD;&#x7684;&#x5F62;&#x5F0F;&#x63D0;&#x4F9B;&#x7684;&#x3002;
    2. &#x7528;&#x6237;&#x51FA;&#x4E8E;&#x81EA;&#x613F;&#x800C;&#x4F7F;&#x7528;&#x672C;&#x8F6F;&#x4EF6;&#xFF0C;&#x60A8;&#x5FC5;&#x987B;&#x4E86;&#x89E3;&#x4F7F;&#x7528;&#x672C;&#x8F6F;&#x4EF6;&#x7684;&#x98CE;&#x9669;&#xFF0C;&#x5728;&#x5C1A;&#x672A;&#x8D2D;&#x4E70;&#x4EA7;&#x54C1;&#x6280;&#x672F;&#x670D;&#x52A1;&#x4E4B;&#x524D;&#xFF0C;&#x6211;&#x4EEC;&#x4E0D;&#x627F;&#x8BFA;&#x63D0;&#x4F9B;&#x4EFB;&#x4F55;&#x5F62;&#x5F0F;&#x7684;&#x6280;&#x672F;&#x652F;&#x6301;&#x3001;&#x4F7F;&#x7528;&#x62C5;&#x4FDD;&#xFF0C;&#x4E5F;&#x4E0D;&#x627F;&#x62C5;&#x4EFB;&#x4F55;&#x56E0;&#x4F7F;&#x7528;&#x672C;&#x8F6F;&#x4EF6;&#x800C;&#x4EA7;&#x751F;&#x95EE;&#x9898;&#x7684;&#x76F8;&#x5173;&#x8D23;&#x4EFB;&#x3002;
    3. Fenmu&#x539F;&#x521B;&#x5DE5;&#x4F5C;&#x5BA4;&#x4E0D;&#x5BF9;&#x4F7F;&#x7528;&#x672C;&#x8F6F;&#x4EF6;&#x6784;&#x5EFA;&#x7684;&#x8BBA;&#x575B;&#x4E2D;&#x7684;&#x6587;&#x7AE0;&#x6216;&#x4FE1;&#x606F;&#x627F;&#x62C5;&#x8D23;&#x4EFB;&#x3002;

&#x6709;&#x5173; DzWHM &#x6700;&#x7EC8;&#x7528;&#x6237;&#x6388;&#x6743;&#x534F;&#x8BAE;&#x3001;&#x5546;&#x4E1A;&#x6388;&#x6743;&#x4E0E;&#x6280;&#x672F;&#x670D;&#x52A1;&#x7684;&#x8BE6;&#x7EC6;&#x5185;&#x5BB9;&#xFF0C;&#x5747;&#x7531; DzWHM &#x5B98;&#x65B9;&#x7F51;&#x7AD9;(www.fen.mu)&#x72EC;&#x5BB6;&#x63D0;&#x4F9B;&#x3002;Fenmu&#x539F;&#x521B;&#x5DE5;&#x4F5C;&#x5BA4;&#x62E5;&#x6709;&#x5728;&#x4E0D;&#x4E8B;&#x5148;&#x901A;&#x77E5;&#x7684;&#x60C5;&#x51B5;&#x4E0B;&#xFF0C;&#x4FEE;&#x6539;&#x6388;&#x6743;&#x534F;&#x8BAE;&#x548C;&#x670D;&#x52A1;&#x4EF7;&#x76EE;&#x8868;&#x7684;&#x6743;&#x529B;&#xFF0C;&#x4FEE;&#x6539;&#x540E;&#x7684;&#x534F;&#x8BAE;&#x6216;&#x4EF7;&#x76EE;&#x8868;&#x5BF9;&#x81EA;&#x6539;&#x53D8;&#x4E4B;&#x65E5;&#x8D77;&#x7684;&#x65B0;&#x6388;&#x6743;&#x7528;&#x6237;&#x751F;&#x6548;&#x3002;

&#x7535;&#x5B50;&#x6587;&#x672C;&#x5F62;&#x5F0F;&#x7684;&#x6388;&#x6743;&#x534F;&#x8BAE;&#x5982;&#x540C;&#x53CC;&#x65B9;&#x4E66;&#x9762;&#x7B7E;&#x7F72;&#x7684;&#x534F;&#x8BAE;&#x4E00;&#x6837;&#xFF0C;&#x5177;&#x6709;&#x5B8C;&#x5168;&#x7684;&#x548C;&#x7B49;&#x540C;&#x7684;&#x6CD5;&#x5F8B;&#x6548;&#x529B;&#x3002;&#x60A8;&#x4E00;&#x65E6;&#x5F00;&#x59CB;&#x5B89;&#x88C5; DzWHM &#xFF0C;&#x5373;&#x88AB;&#x89C6;&#x4E3A;&#x5B8C;&#x5168;&#x7406;&#x89E3;&#x5E76;&#x63A5;&#x53D7;&#x672C;&#x534F;&#x8BAE;&#x7684;&#x5404;&#x9879;&#x6761;&#x6B3E;&#xFF0C;&#x5728;&#x4EAB;&#x6709;&#x4E0A;&#x8FF0;&#x6761;&#x6B3E;&#x6388;&#x4E88;&#x7684;&#x6743;&#x529B;&#x7684;&#x540C;&#x65F6;&#xFF0C;&#x53D7;&#x5230;&#x76F8;&#x5173;&#x7684;&#x7EA6;&#x675F;&#x548C;&#x9650;&#x5236;&#x3002;&#x534F;&#x8BAE;&#x8BB8;&#x53EF;&#x8303;&#x56F4;&#x4EE5;&#x5916;&#x7684;&#x884C;&#x4E3A;&#xFF0C;&#x5C06;&#x76F4;&#x63A5;&#x8FDD;&#x53CD;&#x672C;&#x6388;&#x6743;&#x534F;&#x8BAE;&#x5E76;&#x6784;&#x6210;&#x4FB5;&#x6743;&#xFF0C;&#x6211;&#x4EEC;&#x6709;&#x6743;&#x968F;&#x65F6;&#x7EC8;&#x6B62;&#x6388;&#x6743;&#xFF0C;&#x8D23;&#x4EE4;&#x505C;&#x6B62;&#x635F;&#x5BB3;&#xFF0C;&#x5E76;&#x4FDD;&#x7559;&#x8FFD;&#x7A76;&#x76F8;&#x5173;&#x8D23;&#x4EFB;&#x7684;&#x6743;&#x529B;&#x3002;



--------------------------------------------------


English Version of EULA, for non-Chinese-Speaking Users Only


Copyright (c)2011, Fen.mu Studio.
All Rights Reserved.

IMPORTANT: THIS SOFTWARE END USER LICENSE AGREEMENT("EULA") IS A LEGAL AGREEMENT BETWEEN YOU AND Fen.mu Studio.. READ IT CAREFULLY BEFORE COMPLETING THE INSTALLATION PROCESS AND USING THE SOFTWARE. IT PROVIDES A LICENSE TO USE THE SOFTWARE AND CONTAINS WARRANTY INFORMATION AND LIABILITY DISCLAIMERS. BY INSTALLING AND USING THE SOFTWARE, YOU ARE CONFIRMING YOUR ACCEPTANCE OF THE SOFTWARE AND AGREEING TO BECOME BOUND BY THE TERMS OF THIS AGREEMENT. IF YOU DO NOT AGREE TO BE BOUND BY THESE TERMS, PLEASE DO NOT INSTALL OR USE THE SOFTWARE. YOU MUST ASSUME THE ENTIRE RISK OF USING THIS PROGRAM. ANY LIABILITY OF Fen.mu Studio. WILL BE LIMITED EXCLUSIVELY TO PRODUCT REPLACEMENT OR REFUND OF PURCHASE PRICE BEFORE FIRST INSTALLATION.

1. Definitions
    a. "WebHostManager For Discuz!"("DzWHM" for short) is a web hosting managing system based on Discuz!X plugin framework which is developed by Fen.mu Studio..
    b. "the Software" means "WebHostManager For Discuz!".
    c. "Fen.mu Studio." is the enterprise being responsible for DzWHM product.

2. License Grants
    a. You may use the Software for free for non-commercial use under the License Restrictions.
    b. You may modify the source code(if being provieded) or interface of the Software to fit your website under the License Restrictions.
    c. You have property of all hosting accounts powered by the Software; meanwhile , you need assume all relevant legal duty by yourself.
    d. You may use the Software for commercial use after purchasing the commercial license. Moreover, according to the license you purchased you may get specified term, manner and content of technical support from Fen.mu Studio. Commercial users are prior to submiting ideas and opinions to Fen.mu Studio., but without any guarantee of acceptance.

3. License Restrictions
    a. You may not use the Software for commercial use or profit use, unless you have been licensed to. To purchase the license , please visit http://www.fen.mu/forum.php?mod=forumdisplay&fid=51.
    b. You may not rent, lease, sublicense, sell, assign, pledge the Software and its services.
    c. You may not remove or modify the copyright information and relevant links, such as http://www.fen.mu, in the slidebar of DzWHM's any page without the prior written consent of Fen.mu Studio., no matter how heavily you modified the Software.
    d. You may not modify the Software to create derivative works for redistribution based upon the Software.
    e. In the event that you fail to comply with this EULA, your license will be terminated.

4. LIMITED WARRANTY AND DISCLAIMER
    a. THE SOFTWARE AND THE ACCOMPANYING FILES ARE SOLD "AS IS" AND WITHOUT WARRANTIES AS TO PERFORMANCE OF MERCHANTABILITY OR ANY OTHER WARRANTIED WHETHER EXPRESSED OR IMPLIED.
    b. Fen.mu Studio. is not liable for the content of any message posted on the forums powered by the Software.
    c. You must assume the entire risk of using the Software. ANY LIABILITY OF Fen.mu Studio. WILL BE LIMITED EXCLUSIVELY TO PRODUCT REPLACEMENT, REFUND OF PURCHASE PRICE BEFORE YOUR FIRST INSTALLATION.

5. Official Websites
    a. URL of Fen.mu Studio. is http://www.fen.mu.
    b. URL of DzWHM's mirros is http://dzwhm.sourceforge.net/mirror.
    c. URL of Fen.mu Studio's blog is http://t.97bp.com.

Fen.mu Studio. reserves the right to modify this EULA. DzWHM provides offical information on license and price, Fen.mu Studio. may modify them without notice. Modified license and price list will apply to new licensed users.
</textarea><br/>
<form action='' id='x' method=POST><br/>
 <input type='checkbox' name='agree' value='check'>&#x6211;&#x5DF2;&#x7ECF;&#x8BE6;&#x7EC6;&#x9605;&#x8BFB;&#x5E76;&#x540C;&#x610F;&#x4EE5;&#x4E0A;&#x6761;&#x6B3E;(I have read and agree with the license)<br/><br/>
 &#x9009;&#x62E9;&#x60A8;&#x7684;&#x8BED;&#x8A00;&#x53CA;&#x7F16;&#x7801; Plz Select your language and code set:<br/>
<select name='language'>
<option value=''>&#x8BF7;&#x9009;&#x62E9;&#x8BED;&#x8A00;&#x53CA;&#x7F16;&#x7801;</option>
<option value='Chinese_Simplified_Utf8'>&#x7B80;&#x4F53;&#x4E2D;&#x6587;UTF8</option>
<option value='Chinese_Simplified_Gbk'>&#x7B80;&#x4F53;&#x4E2D;&#x6587;GBK</option>
<option value='Chinese_Traditional_Utf8'>&#x7E41;&#x9AD4;&#x4E2D;&#x6587;UTF8</option>
<option value='Chinese_Traditional_Gbk'>&#x7E41;&#x9AD4;&#x4E2D;&#x6587;GBK</option>
<option value='English_Utf8'>English</option>
<option value='thai_Utf8'>&#x0E44;&#x0E17;&#x0E22;UTF8</option>
<option value='Malay_Utf8'>Malay Utf8</option>
</select>
<br/>
 <input type=submit value='' class="installbtn">
</form>
<?php
$finish = FALSE;
}else{
if(file_exists(DZWHM_ROOT."images/plango.gif"))unlink(DZWHM_ROOT."images/plango.gif");
if($language=='Chinese_Traditional_Utf8'||$language=='Chinese_Traditional_Gbk'){
	rename(DZWHM_ROOT."images/plango_tw.gif",DZWHM_ROOT."images/plango.gif");
}elseif($language=='English_Utf8'){
	rename(DZWHM_ROOT."images/plango_en.gif",DZWHM_ROOT."images/plango.gif");
}elseif($language=='Chinese_Simplified_Utf8'||$language=='Chinese_Simplified_Gbk'){
	rename(DZWHM_ROOT."images/plango_cn.gif",DZWHM_ROOT."images/plango.gif");
}elseif($language=='thai_Utf8'){
	rename(DZWHM_ROOT."images/plango_en.gif",DZWHM_ROOT."images/plango.gif");
}elseif($language=='Malay_Utf8'){
	rename(DZWHM_ROOT."images/plango_en.gif",DZWHM_ROOT."images/plango.gif");
}
$x=file_get_contents(DZWHM_ROOT.'core/includes/main.func.php');
$x=str_replace('Chinese_Simplified_Utf8',$language,$x);
$x=str_replace('Chinese_Traditional_Gbk',$language,$x);
$x=str_replace('English_Utf8',$language,$x);
$x=str_replace('Chinese_Traditional_Utf8',$language,$x);
$x=str_replace('Chinese_Simplified_Gbk',$language,$x);
$x=str_replace('thai_Utf8',$language,$x);
$x=str_replace('Malay_Utf8',$language,$x);
$f=fopen(DZWHM_ROOT.'core/includes/main.func.php','w');
fwrite($f,$x);
fclose($f);
$sql = <<<EOF
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `host_announcements` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `host_kb` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `host_log` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `ip` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `host_plan` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `plan` varchar(500) NOT NULL,
  `space` varchar(500) NOT NULL,
  `traffic` varchar(500) NOT NULL,
  `domains` varchar(500) NOT NULL,
  `subdomains` varchar(500) NOT NULL,
  `ftp` varchar(500) NOT NULL,
  `mysql` varchar(500) NOT NULL,
  `emails` varchar(500) NOT NULL,
  `package` varchar(500) NOT NULL,
  `server` varchar(500) NOT NULL,
  `ads` varchar(500) NOT NULL,
  `open` varchar(500) NOT NULL,
  `reseller` varchar(500) NOT NULL,
  `auto` varchar(500) NOT NULL,
  `hidden` varchar(500) NOT NULL,
  `user` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `monprice` int(11) NOT NULL DEFAULT '0',
  `sixmonprice` int(11) NOT NULL DEFAULT '0',
  `yrprice` int(11) NOT NULL DEFAULT '0',
  `twoyrprice` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `host_server` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `server` varchar(500) NOT NULL,
  `uptime` varchar(500) NOT NULL,
  `ip` varchar(500) NOT NULL,
  `ns1` varchar(500) NOT NULL,
  `ns2` varchar(500) NOT NULL,
  `cp` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `userlogin` varchar(500) NOT NULL,
  `passlogin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `host_setting` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `host_setting` (`id`, `name`, `value`) VALUES
(1, 'general', 'on'),
(2, 'ips', 'on'),
(3, 'admin', '1'),
(4, 'tos', ''),
(5, 'msn', ''),
(6, 'email', 'admin@domain.com'),
(7, 'skype', ''),
(8, 'support', 'on');

CREATE TABLE IF NOT EXISTS `host_tickets` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `urgency` varchar(500) NOT NULL,
  `content` varchar(500) NOT NULL,
  `ticketid` varchar(500) NOT NULL,
  `ttype` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `host_user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `uid` varchar(500) NOT NULL,
  `plan` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `domain` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `date` varchar(18) NOT NULL,
  `aff` varchar(500) NOT NULL,
  `ip` varchar(500) NOT NULL,
  `expiredate` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `host_networkissues`(
`id` MEDIUMINT( 9 ) NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 500 ) NOT NULL ,
`content` VARCHAR( 5000 ) NOT NULL ,
`time` VARCHAR( 500 ) NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = MYISAM ;
EOF;

runquery($sql);
$mcontent ="Some a new site installed DzWHM,its url:".$_SERVER['HTTP_HOST'].",this DzWHM's version is v2.04";
mail('love@pidan.tk',"DzWHM report for ".$_SERVER['HTTP_HOST'],$mcontent); 
file_get_contents('http://stat.fen.mu/?url='.$url.'&ver=v2.04');
$finish = TRUE;
}
?>