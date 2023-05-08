<?php 
session_start();
session_destroy();
header("Cache-Control: private, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Fri, 4 Jun 2010 12:00:00 GMT");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
    <style> 
      html {
  height: 100%;
  width:100%;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  
}

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1998px 155px #FFF , 619px 1626px #FFF , 495px 445px #FFF , 1762px 99px #FFF , 1097px 1072px #FFF , 894px 1154px #FFF , 428px 507px #FFF , 682px 1823px #FFF , 1729px 178px #FFF , 1678px 1393px #FFF , 1799px 976px #FFF , 923px 1412px #FFF , 41px 215px #FFF , 38px 73px #FFF , 574px 341px #FFF , 1495px 1092px #FFF , 566px 594px #FFF , 1840px 131px #FFF , 804px 1510px #FFF , 1902px 708px #FFF , 1562px 1581px #FFF , 1937px 1551px #FFF , 532px 1562px #FFF , 1202px 886px #FFF , 1936px 1715px #FFF , 22px 1854px #FFF , 1594px 1443px #FFF , 290px 101px #FFF , 1807px 245px #FFF , 530px 1165px #FFF , 948px 581px #FFF , 1110px 1502px #FFF , 1463px 1888px #FFF , 672px 909px #FFF , 358px 1120px #FFF , 1828px 1429px #FFF , 670px 995px #FFF , 1518px 1684px #FFF , 919px 1379px #FFF , 1661px 645px #FFF , 1782px 421px #FFF , 766px 1879px #FFF , 177px 1266px #FFF , 1048px 1168px #FFF , 91px 441px #FFF , 1869px 157px #FFF , 196px 1439px #FFF , 854px 1522px #FFF , 1283px 1088px #FFF , 1622px 932px #FFF , 568px 1071px #FFF , 383px 1170px #FFF , 978px 742px #FFF , 1047px 848px #FFF , 240px 1574px #FFF , 1282px 792px #FFF , 168px 1992px #FFF , 559px 298px #FFF , 343px 1396px #FFF , 875px 1896px #FFF , 1054px 1598px #FFF , 487px 1135px #FFF , 988px 216px #FFF , 1440px 187px #FFF , 754px 152px #FFF , 243px 128px #FFF , 833px 614px #FFF , 469px 1519px #FFF , 1411px 1267px #FFF , 711px 254px #FFF , 812px 1266px #FFF , 471px 586px #FFF , 1900px 359px #FFF , 1242px 124px #FFF , 906px 1230px #FFF , 1583px 28px #FFF , 723px 82px #FFF , 1549px 1578px #FFF , 1357px 402px #FFF , 1529px 1028px #FFF , 1218px 524px #FFF , 183px 212px #FFF , 1182px 372px #FFF , 855px 1027px #FFF , 351px 54px #FFF , 833px 1610px #FFF , 177px 765px #FFF , 230px 227px #FFF , 1430px 130px #FFF , 1203px 433px #FFF , 246px 643px #FFF , 1355px 1179px #FFF , 1717px 1044px #FFF , 1165px 1923px #FFF , 878px 859px #FFF , 299px 1033px #FFF , 676px 270px #FFF , 878px 1765px #FFF , 357px 1380px #FFF , 1771px 1198px #FFF , 1401px 957px #FFF , 72px 831px #FFF , 305px 1238px #FFF , 1001px 502px #FFF , 1690px 1479px #FFF , 1132px 1304px #FFF , 1981px 889px #FFF , 1420px 1959px #FFF , 1775px 921px #FFF , 1119px 1789px #FFF , 55px 1825px #FFF , 71px 1598px #FFF , 1224px 974px #FFF , 1943px 240px #FFF , 875px 1940px #FFF , 941px 1494px #FFF , 1040px 102px #FFF , 1592px 1582px #FFF , 1743px 58px #FFF , 1176px 1800px #FFF , 1212px 53px #FFF , 814px 1935px #FFF , 1323px 1115px #FFF , 277px 159px #FFF , 1253px 1696px #FFF , 383px 74px #FFF , 1043px 499px #FFF , 1562px 1105px #FFF , 1169px 1725px #FFF , 1455px 265px #FFF , 1159px 820px #FFF , 1329px 1866px #FFF , 1174px 1931px #FFF , 853px 1471px #FFF , 14px 41px #FFF , 779px 1397px #FFF , 161px 377px #FFF , 1641px 328px #FFF , 1338px 186px #FFF , 363px 1763px #FFF , 36px 535px #FFF , 1118px 1062px #FFF , 830px 1992px #FFF , 887px 386px #FFF , 684px 1200px #FFF , 1674px 734px #FFF , 587px 1360px #FFF , 1340px 363px #FFF , 1927px 1092px #FFF , 630px 300px #FFF , 1347px 966px #FFF , 1057px 1714px #FFF , 342px 1815px #FFF , 1065px 1906px #FFF , 1301px 1944px #FFF , 424px 670px #FFF , 1679px 760px #FFF , 946px 793px #FFF , 1213px 559px #FFF , 1765px 714px #FFF , 1221px 1261px #FFF , 1530px 1581px #FFF , 1691px 917px #FFF , 567px 792px #FFF , 621px 2000px #FFF , 607px 952px #FFF , 1635px 1403px #FFF , 1357px 1198px #FFF , 1006px 1955px #FFF , 376px 201px #FFF , 411px 158px #FFF , 402px 86px #FFF , 528px 829px #FFF , 1526px 1919px #FFF , 994px 844px #FFF , 1216px 73px #FFF , 1903px 1049px #FFF , 233px 147px #FFF , 923px 675px #FFF , 534px 1013px #FFF , 914px 139px #FFF , 373px 1678px #FFF , 367px 309px #FFF , 826px 877px #FFF , 231px 1725px #FFF , 919px 1671px #FFF , 670px 764px #FFF , 1001px 887px #FFF , 1704px 1524px #FFF , 20px 139px #FFF , 1948px 261px #FFF , 1002px 1070px #FFF , 979px 974px #FFF , 984px 415px #FFF , 656px 290px #FFF , 525px 217px #FFF , 1077px 212px #FFF , 94px 1876px #FFF , 1326px 486px #FFF , 1757px 793px #FFF , 167px 1869px #FFF , 931px 1944px #FFF , 545px 303px #FFF , 521px 759px #FFF , 1874px 1256px #FFF , 404px 21px #FFF , 1821px 704px #FFF , 1877px 1878px #FFF , 1122px 1671px #FFF , 1151px 1133px #FFF , 1744px 1251px #FFF , 1702px 1495px #FFF , 512px 1192px #FFF , 1687px 1721px #FFF , 1580px 1463px #FFF , 669px 1746px #FFF , 1906px 175px #FFF , 1853px 1151px #FFF , 228px 691px #FFF , 178px 749px #FFF , 1634px 1337px #FFF , 1256px 598px #FFF , 1615px 1916px #FFF , 1199px 1223px #FFF , 1646px 324px #FFF , 1212px 163px #FFF , 533px 876px #FFF , 1266px 1304px #FFF , 1553px 966px #FFF , 1472px 1634px #FFF , 1265px 1863px #FFF , 964px 669px #FFF , 77px 1567px #FFF , 595px 1743px #FFF , 744px 1466px #FFF , 1804px 1545px #FFF , 1639px 534px #FFF , 925px 1618px #FFF , 1752px 44px #FFF , 781px 54px #FFF , 1214px 532px #FFF , 860px 636px #FFF , 1248px 1636px #FFF , 1228px 2000px #FFF , 1705px 322px #FFF , 164px 1690px #FFF , 1006px 588px #FFF , 715px 971px #FFF , 276px 179px #FFF , 1074px 298px #FFF , 844px 1415px #FFF , 146px 605px #FFF , 1351px 1698px #FFF , 328px 119px #FFF , 583px 1736px #FFF , 747px 1345px #FFF , 1657px 1784px #FFF , 995px 829px #FFF , 1265px 269px #FFF , 1173px 1037px #FFF , 721px 1530px #FFF , 1164px 911px #FFF , 516px 1871px #FFF , 820px 966px #FFF , 1022px 477px #FFF , 1163px 1487px #FFF , 239px 1317px #FFF , 1492px 1035px #FFF , 579px 226px #FFF , 401px 523px #FFF , 560px 347px #FFF , 570px 1979px #FFF , 1082px 668px #FFF , 1141px 836px #FFF , 386px 440px #FFF , 146px 1529px #FFF , 1618px 827px #FFF , 1038px 1883px #FFF , 1376px 1422px #FFF , 1664px 1946px #FFF , 736px 975px #FFF , 644px 1871px #FFF , 650px 1482px #FFF , 457px 1063px #FFF , 1621px 133px #FFF , 893px 219px #FFF , 757px 197px #FFF , 212px 1677px #FFF , 787px 212px #FFF , 133px 594px #FFF , 1466px 1329px #FFF , 130px 1341px #FFF , 1332px 1058px #FFF , 454px 1323px #FFF , 1582px 221px #FFF , 350px 1768px #FFF , 1188px 779px #FFF , 788px 183px #FFF , 1920px 1946px #FFF , 589px 500px #FFF , 732px 1589px #FFF , 1088px 1522px #FFF , 1375px 1289px #FFF , 1952px 494px #FFF , 924px 1024px #FFF , 26px 1620px #FFF , 1370px 404px #FFF , 1287px 1761px #FFF , 1985px 982px #FFF , 1463px 1789px #FFF , 177px 371px #FFF , 1524px 1818px #FFF , 912px 1896px #FFF , 112px 712px #FFF , 784px 648px #FFF , 1796px 1914px #FFF , 1893px 1184px #FFF , 761px 781px #FFF , 427px 1803px #FFF , 896px 933px #FFF , 428px 960px #FFF , 1109px 1067px #FFF , 1286px 1434px #FFF , 130px 1007px #FFF , 626px 98px #FFF , 988px 452px #FFF , 860px 138px #FFF , 959px 1299px #FFF , 219px 1848px #FFF , 431px 803px #FFF , 602px 1263px #FFF , 1727px 1023px #FFF , 1993px 743px #FFF , 1252px 966px #FFF , 1664px 1662px #FFF , 1217px 224px #FFF , 1422px 161px #FFF , 1481px 1537px #FFF , 1588px 813px #FFF , 1412px 650px #FFF , 1696px 1172px #FFF , 1452px 314px #FFF , 1162px 782px #FFF , 61px 1131px #FFF , 675px 634px #FFF , 997px 1323px #FFF , 183px 168px #FFF , 953px 810px #FFF , 1091px 1207px #FFF , 1103px 794px #FFF , 847px 759px #FFF , 527px 1214px #FFF , 481px 658px #FFF , 416px 507px #FFF , 1814px 1947px #FFF , 1922px 813px #FFF , 1790px 1759px #FFF , 13px 1763px #FFF , 1514px 1940px #FFF , 993px 946px #FFF , 1415px 196px #FFF , 130px 638px #FFF , 1585px 1448px #FFF , 1915px 1064px #FFF , 6px 2px #FFF , 330px 755px #FFF , 1470px 629px #FFF , 1312px 1376px #FFF , 617px 312px #FFF , 1847px 1686px #FFF , 1440px 1699px #FFF , 1513px 772px #FFF , 486px 1347px #FFF , 1529px 147px #FFF , 1236px 1102px #FFF , 409px 1961px #FFF , 713px 119px #FFF , 217px 1732px #FFF , 268px 218px #FFF , 684px 36px #FFF , 14px 1187px #FFF , 1748px 1626px #FFF , 1875px 1814px #FFF , 273px 704px #FFF , 391px 1033px #FFF , 312px 1398px #FFF , 768px 1725px #FFF , 1098px 199px #FFF , 1303px 593px #FFF , 937px 1647px #FFF , 122px 1904px #FFF , 289px 1313px #FFF , 1445px 109px #FFF , 1125px 1226px #FFF , 416px 1324px #FFF , 1687px 1813px #FFF , 654px 469px #FFF , 810px 1578px #FFF , 825px 1922px #FFF , 1640px 1322px #FFF , 1179px 750px #FFF , 1511px 534px #FFF , 936px 1879px #FFF , 382px 659px #FFF , 1422px 1502px #FFF , 1766px 1115px #FFF , 634px 383px #FFF , 1528px 1522px #FFF , 1318px 1586px #FFF , 50px 1627px #FFF , 1886px 1958px #FFF , 949px 1787px #FFF , 1424px 86px #FFF , 1891px 1652px #FFF , 649px 31px #FFF , 17px 1162px #FFF , 9px 1623px #FFF , 634px 1236px #FFF , 583px 1330px #FFF , 396px 1316px #FFF , 1107px 1731px #FFF , 1319px 988px #FFF , 1534px 1832px #FFF , 41px 871px #FFF , 1183px 1240px #FFF , 409px 272px #FFF , 470px 509px #FFF , 637px 651px #FFF , 1840px 1096px #FFF , 1067px 1634px #FFF , 521px 1136px #FFF , 164px 1106px #FFF , 137px 363px #FFF , 1071px 555px #FFF , 105px 129px #FFF , 812px 1728px #FFF , 280px 1981px #FFF , 278px 1400px #FFF , 1925px 805px #FFF , 1663px 59px #FFF , 1687px 292px #FFF , 737px 313px #FFF , 902px 504px #FFF , 1496px 589px #FFF , 132px 643px #FFF , 291px 1204px #FFF , 860px 306px #FFF , 236px 1189px #FFF , 574px 1334px #FFF , 1860px 1387px #FFF , 1042px 980px #FFF , 272px 1282px #FFF , 369px 309px #FFF , 818px 563px #FFF , 1474px 536px #FFF , 1894px 406px #FFF , 470px 53px #FFF , 164px 1988px #FFF , 202px 845px #FFF , 498px 494px #FFF , 1384px 1839px #FFF , 501px 86px #FFF , 1330px 364px #FFF , 1820px 932px #FFF , 1982px 896px #FFF , 729px 1446px #FFF , 1675px 1145px #FFF , 1705px 1186px #FFF , 249px 277px #FFF , 11px 726px #FFF , 1874px 44px #FFF , 760px 1923px #FFF , 1040px 974px #FFF , 647px 246px #FFF , 410px 1880px #FFF , 103px 927px #FFF , 126px 84px #FFF , 1587px 36px #FFF , 1479px 545px #FFF , 1638px 1579px #FFF , 1953px 1585px #FFF , 487px 291px #FFF , 1197px 763px #FFF , 1656px 646px #FFF , 1063px 1587px #FFF , 359px 1988px #FFF , 1672px 1275px #FFF , 81px 244px #FFF , 5px 919px #FFF , 85px 695px #FFF , 1841px 1234px #FFF , 257px 1740px #FFF , 29px 252px #FFF , 235px 699px #FFF , 596px 819px #FFF , 1530px 1989px #FFF , 345px 1505px #FFF , 805px 261px #FFF , 960px 1886px #FFF , 1921px 746px #FFF , 628px 348px #FFF , 401px 1170px #FFF , 1608px 858px #FFF , 692px 301px #FFF , 1176px 233px #FFF , 285px 237px #FFF , 302px 300px #FFF , 1660px 1955px #FFF , 1550px 187px #FFF , 1009px 1578px #FFF , 1611px 1761px #FFF , 1718px 1952px #FFF , 1470px 1669px #FFF , 1269px 385px #FFF , 17px 1570px #FFF , 1003px 102px #FFF , 3px 1848px #FFF , 1616px 381px #FFF , 1423px 1548px #FFF , 134px 652px #FFF , 1883px 84px #FFF , 246px 1011px #FFF , 1161px 1754px #FFF , 964px 455px #FFF , 1845px 1842px #FFF , 378px 18px #FFF , 1341px 1345px #FFF , 1424px 1407px #FFF , 1337px 372px #FFF , 998px 894px #FFF , 19px 714px #FFF , 1615px 432px #FFF , 855px 479px #FFF , 371px 1043px #FFF , 1437px 770px #FFF , 1910px 1468px #FFF , 1898px 691px #FFF , 1949px 73px #FFF , 860px 1423px #FFF , 1788px 1031px #FFF , 1783px 1132px #FFF , 740px 416px #FFF , 97px 771px #FFF , 1467px 433px #FFF , 1644px 643px #FFF , 1475px 1412px #FFF , 637px 26px #FFF , 136px 225px #FFF , 455px 282px #FFF , 965px 464px #FFF , 1447px 127px #FFF , 264px 659px #FFF , 1644px 1762px #FFF , 1779px 1143px #FFF , 1739px 1693px #FFF , 1215px 1954px #FFF , 1605px 240px #FFF , 1617px 401px #FFF , 1015px 577px #FFF , 1235px 969px #FFF , 438px 323px #FFF , 1571px 736px #FFF , 1855px 640px #FFF , 696px 120px #FFF , 920px 1851px #FFF , 178px 1905px #FFF , 714px 1080px #FFF , 1244px 1721px #FFF , 208px 1369px #FFF , 43px 182px #FFF , 1859px 464px #FFF , 151px 1040px #FFF , 1022px 1488px #FFF , 520px 1440px #FFF , 1227px 621px #FFF , 1283px 1118px #FFF , 531px 113px #FFF , 172px 301px #FFF , 946px 516px #FFF , 325px 1135px #FFF , 766px 1723px #FFF , 178px 155px #FFF , 1520px 1016px #FFF , 308px 703px #FFF , 1952px 967px #FFF , 1125px 1950px #FFF , 1658px 1698px #FFF , 1607px 28px #FFF , 1105px 265px #FFF , 24px 1409px #FFF , 322px 1121px #FFF , 973px 305px #FFF , 1307px 601px #FFF , 1706px 1798px #FFF , 1602px 63px #FFF , 1424px 1767px #FFF , 802px 64px #FFF , 172px 1842px #FFF , 1729px 1590px #FFF , 600px 179px #FFF , 614px 1248px #FFF , 165px 529px #FFF , 1234px 844px #FFF , 1146px 394px #FFF , 774px 1608px #FFF , 751px 1436px #FFF , 839px 1251px #FFF , 1360px 542px #FFF , 588px 1711px #FFF , 51px 89px #FFF , 428px 1661px #FFF , 899px 1432px #FFF , 154px 85px #FFF , 1504px 1016px #FFF , 455px 980px #FFF , 1078px 858px #FFF , 387px 1478px #FFF , 711px 579px #FFF , 83px 698px #FFF , 724px 1064px #FFF , 1422px 1745px #FFF , 1026px 30px #FFF , 940px 1917px #FFF , 448px 891px #FFF , 964px 1575px #FFF , 1996px 420px #FFF , 1987px 765px #FFF , 629px 1487px #FFF , 1785px 922px #FFF , 11px 1287px #FFF , 1945px 1356px #FFF , 1605px 607px #FFF , 455px 763px #FFF , 85px 1195px #FFF , 1421px 103px #FFF , 1797px 104px #FFF , 669px 132px #FFF , 1112px 1382px #FFF , 1370px 1252px #FFF , 669px 1504px #FFF , 848px 1894px #FFF , 1373px 1707px #FFF , 372px 1408px #FFF , 1699px 13px #FFF , 1453px 950px #FFF , 1794px 895px #FFF , 1728px 803px #FFF , 113px 591px #FFF , 1705px 1299px #FFF , 995px 1537px #FFF , 1574px 394px #FFF , 645px 1025px #FFF , 171px 383px #FFF , 1878px 1484px #FFF , 1190px 896px #FFF , 265px 641px #FFF , 1709px 954px #FFF , 768px 1212px #FFF , 1420px 768px #FFF , 996px 30px #FFF , 269px 180px #FFF , 77px 314px #FFF , 1968px 584px #FFF , 783px 1899px #FFF , 832px 353px #FFF , 975px 32px #FFF , 770px 1948px #FFF , 1234px 203px #FFF , 441px 1769px #FFF , 164px 1055px #FFF , 823px 1280px #FFF , 798px 973px #FFF , 1619px 1370px #FFF , 1454px 1927px #FFF , 401px 1201px #FFF , 143px 431px #FFF , 772px 862px #FFF , 816px 1346px #FFF , 682px 1020px #FFF , 1131px 1335px #FFF , 73px 568px #FFF , 1887px 577px #FFF , 1930px 769px #FFF , 1439px 1997px #FFF , 188px 334px #FFF , 210px 1444px #FFF , 1640px 1626px #FFF , 975px 1795px #FFF , 1285px 1848px #FFF , 903px 1339px #FFF , 563px 84px #FFF , 258px 1273px #FFF , 1055px 306px #FFF , 1252px 302px #FFF , 1394px 1611px #FFF , 187px 98px #FFF , 401px 1660px #FFF , 1178px 27px #FFF , 1009px 1897px #FFF , 383px 143px #FFF;
  animation: animStar 50s linear infinite;
}
#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1998px 155px #FFF , 619px 1626px #FFF , 495px 445px #FFF , 1762px 99px #FFF , 1097px 1072px #FFF , 894px 1154px #FFF , 428px 507px #FFF , 682px 1823px #FFF , 1729px 178px #FFF , 1678px 1393px #FFF , 1799px 976px #FFF , 923px 1412px #FFF , 41px 215px #FFF , 38px 73px #FFF , 574px 341px #FFF , 1495px 1092px #FFF , 566px 594px #FFF , 1840px 131px #FFF , 804px 1510px #FFF , 1902px 708px #FFF , 1562px 1581px #FFF , 1937px 1551px #FFF , 532px 1562px #FFF , 1202px 886px #FFF , 1936px 1715px #FFF , 22px 1854px #FFF , 1594px 1443px #FFF , 290px 101px #FFF , 1807px 245px #FFF , 530px 1165px #FFF , 948px 581px #FFF , 1110px 1502px #FFF , 1463px 1888px #FFF , 672px 909px #FFF , 358px 1120px #FFF , 1828px 1429px #FFF , 670px 995px #FFF , 1518px 1684px #FFF , 919px 1379px #FFF , 1661px 645px #FFF , 1782px 421px #FFF , 766px 1879px #FFF , 177px 1266px #FFF , 1048px 1168px #FFF , 91px 441px #FFF , 1869px 157px #FFF , 196px 1439px #FFF , 854px 1522px #FFF , 1283px 1088px #FFF , 1622px 932px #FFF , 568px 1071px #FFF , 383px 1170px #FFF , 978px 742px #FFF , 1047px 848px #FFF , 240px 1574px #FFF , 1282px 792px #FFF , 168px 1992px #FFF , 559px 298px #FFF , 343px 1396px #FFF , 875px 1896px #FFF , 1054px 1598px #FFF , 487px 1135px #FFF , 988px 216px #FFF , 1440px 187px #FFF , 754px 152px #FFF , 243px 128px #FFF , 833px 614px #FFF , 469px 1519px #FFF , 1411px 1267px #FFF , 711px 254px #FFF , 812px 1266px #FFF , 471px 586px #FFF , 1900px 359px #FFF , 1242px 124px #FFF , 906px 1230px #FFF , 1583px 28px #FFF , 723px 82px #FFF , 1549px 1578px #FFF , 1357px 402px #FFF , 1529px 1028px #FFF , 1218px 524px #FFF , 183px 212px #FFF , 1182px 372px #FFF , 855px 1027px #FFF , 351px 54px #FFF , 833px 1610px #FFF , 177px 765px #FFF , 230px 227px #FFF , 1430px 130px #FFF , 1203px 433px #FFF , 246px 643px #FFF , 1355px 1179px #FFF , 1717px 1044px #FFF , 1165px 1923px #FFF , 878px 859px #FFF , 299px 1033px #FFF , 676px 270px #FFF , 878px 1765px #FFF , 357px 1380px #FFF , 1771px 1198px #FFF , 1401px 957px #FFF , 72px 831px #FFF , 305px 1238px #FFF , 1001px 502px #FFF , 1690px 1479px #FFF , 1132px 1304px #FFF , 1981px 889px #FFF , 1420px 1959px #FFF , 1775px 921px #FFF , 1119px 1789px #FFF , 55px 1825px #FFF , 71px 1598px #FFF , 1224px 974px #FFF , 1943px 240px #FFF , 875px 1940px #FFF , 941px 1494px #FFF , 1040px 102px #FFF , 1592px 1582px #FFF , 1743px 58px #FFF , 1176px 1800px #FFF , 1212px 53px #FFF , 814px 1935px #FFF , 1323px 1115px #FFF , 277px 159px #FFF , 1253px 1696px #FFF , 383px 74px #FFF , 1043px 499px #FFF , 1562px 1105px #FFF , 1169px 1725px #FFF , 1455px 265px #FFF , 1159px 820px #FFF , 1329px 1866px #FFF , 1174px 1931px #FFF , 853px 1471px #FFF , 14px 41px #FFF , 779px 1397px #FFF , 161px 377px #FFF , 1641px 328px #FFF , 1338px 186px #FFF , 363px 1763px #FFF , 36px 535px #FFF , 1118px 1062px #FFF , 830px 1992px #FFF , 887px 386px #FFF , 684px 1200px #FFF , 1674px 734px #FFF , 587px 1360px #FFF , 1340px 363px #FFF , 1927px 1092px #FFF , 630px 300px #FFF , 1347px 966px #FFF , 1057px 1714px #FFF , 342px 1815px #FFF , 1065px 1906px #FFF , 1301px 1944px #FFF , 424px 670px #FFF , 1679px 760px #FFF , 946px 793px #FFF , 1213px 559px #FFF , 1765px 714px #FFF , 1221px 1261px #FFF , 1530px 1581px #FFF , 1691px 917px #FFF , 567px 792px #FFF , 621px 2000px #FFF , 607px 952px #FFF , 1635px 1403px #FFF , 1357px 1198px #FFF , 1006px 1955px #FFF , 376px 201px #FFF , 411px 158px #FFF , 402px 86px #FFF , 528px 829px #FFF , 1526px 1919px #FFF , 994px 844px #FFF , 1216px 73px #FFF , 1903px 1049px #FFF , 233px 147px #FFF , 923px 675px #FFF , 534px 1013px #FFF , 914px 139px #FFF , 373px 1678px #FFF , 367px 309px #FFF , 826px 877px #FFF , 231px 1725px #FFF , 919px 1671px #FFF , 670px 764px #FFF , 1001px 887px #FFF , 1704px 1524px #FFF , 20px 139px #FFF , 1948px 261px #FFF , 1002px 1070px #FFF , 979px 974px #FFF , 984px 415px #FFF , 656px 290px #FFF , 525px 217px #FFF , 1077px 212px #FFF , 94px 1876px #FFF , 1326px 486px #FFF , 1757px 793px #FFF , 167px 1869px #FFF , 931px 1944px #FFF , 545px 303px #FFF , 521px 759px #FFF , 1874px 1256px #FFF , 404px 21px #FFF , 1821px 704px #FFF , 1877px 1878px #FFF , 1122px 1671px #FFF , 1151px 1133px #FFF , 1744px 1251px #FFF , 1702px 1495px #FFF , 512px 1192px #FFF , 1687px 1721px #FFF , 1580px 1463px #FFF , 669px 1746px #FFF , 1906px 175px #FFF , 1853px 1151px #FFF , 228px 691px #FFF , 178px 749px #FFF , 1634px 1337px #FFF , 1256px 598px #FFF , 1615px 1916px #FFF , 1199px 1223px #FFF , 1646px 324px #FFF , 1212px 163px #FFF , 533px 876px #FFF , 1266px 1304px #FFF , 1553px 966px #FFF , 1472px 1634px #FFF , 1265px 1863px #FFF , 964px 669px #FFF , 77px 1567px #FFF , 595px 1743px #FFF , 744px 1466px #FFF , 1804px 1545px #FFF , 1639px 534px #FFF , 925px 1618px #FFF , 1752px 44px #FFF , 781px 54px #FFF , 1214px 532px #FFF , 860px 636px #FFF , 1248px 1636px #FFF , 1228px 2000px #FFF , 1705px 322px #FFF , 164px 1690px #FFF , 1006px 588px #FFF , 715px 971px #FFF , 276px 179px #FFF , 1074px 298px #FFF , 844px 1415px #FFF , 146px 605px #FFF , 1351px 1698px #FFF , 328px 119px #FFF , 583px 1736px #FFF , 747px 1345px #FFF , 1657px 1784px #FFF , 995px 829px #FFF , 1265px 269px #FFF , 1173px 1037px #FFF , 721px 1530px #FFF , 1164px 911px #FFF , 516px 1871px #FFF , 820px 966px #FFF , 1022px 477px #FFF , 1163px 1487px #FFF , 239px 1317px #FFF , 1492px 1035px #FFF , 579px 226px #FFF , 401px 523px #FFF , 560px 347px #FFF , 570px 1979px #FFF , 1082px 668px #FFF , 1141px 836px #FFF , 386px 440px #FFF , 146px 1529px #FFF , 1618px 827px #FFF , 1038px 1883px #FFF , 1376px 1422px #FFF , 1664px 1946px #FFF , 736px 975px #FFF , 644px 1871px #FFF , 650px 1482px #FFF , 457px 1063px #FFF , 1621px 133px #FFF , 893px 219px #FFF , 757px 197px #FFF , 212px 1677px #FFF , 787px 212px #FFF , 133px 594px #FFF , 1466px 1329px #FFF , 130px 1341px #FFF , 1332px 1058px #FFF , 454px 1323px #FFF , 1582px 221px #FFF , 350px 1768px #FFF , 1188px 779px #FFF , 788px 183px #FFF , 1920px 1946px #FFF , 589px 500px #FFF , 732px 1589px #FFF , 1088px 1522px #FFF , 1375px 1289px #FFF , 1952px 494px #FFF , 924px 1024px #FFF , 26px 1620px #FFF , 1370px 404px #FFF , 1287px 1761px #FFF , 1985px 982px #FFF , 1463px 1789px #FFF , 177px 371px #FFF , 1524px 1818px #FFF , 912px 1896px #FFF , 112px 712px #FFF , 784px 648px #FFF , 1796px 1914px #FFF , 1893px 1184px #FFF , 761px 781px #FFF , 427px 1803px #FFF , 896px 933px #FFF , 428px 960px #FFF , 1109px 1067px #FFF , 1286px 1434px #FFF , 130px 1007px #FFF , 626px 98px #FFF , 988px 452px #FFF , 860px 138px #FFF , 959px 1299px #FFF , 219px 1848px #FFF , 431px 803px #FFF , 602px 1263px #FFF , 1727px 1023px #FFF , 1993px 743px #FFF , 1252px 966px #FFF , 1664px 1662px #FFF , 1217px 224px #FFF , 1422px 161px #FFF , 1481px 1537px #FFF , 1588px 813px #FFF , 1412px 650px #FFF , 1696px 1172px #FFF , 1452px 314px #FFF , 1162px 782px #FFF , 61px 1131px #FFF , 675px 634px #FFF , 997px 1323px #FFF , 183px 168px #FFF , 953px 810px #FFF , 1091px 1207px #FFF , 1103px 794px #FFF , 847px 759px #FFF , 527px 1214px #FFF , 481px 658px #FFF , 416px 507px #FFF , 1814px 1947px #FFF , 1922px 813px #FFF , 1790px 1759px #FFF , 13px 1763px #FFF , 1514px 1940px #FFF , 993px 946px #FFF , 1415px 196px #FFF , 130px 638px #FFF , 1585px 1448px #FFF , 1915px 1064px #FFF , 6px 2px #FFF , 330px 755px #FFF , 1470px 629px #FFF , 1312px 1376px #FFF , 617px 312px #FFF , 1847px 1686px #FFF , 1440px 1699px #FFF , 1513px 772px #FFF , 486px 1347px #FFF , 1529px 147px #FFF , 1236px 1102px #FFF , 409px 1961px #FFF , 713px 119px #FFF , 217px 1732px #FFF , 268px 218px #FFF , 684px 36px #FFF , 14px 1187px #FFF , 1748px 1626px #FFF , 1875px 1814px #FFF , 273px 704px #FFF , 391px 1033px #FFF , 312px 1398px #FFF , 768px 1725px #FFF , 1098px 199px #FFF , 1303px 593px #FFF , 937px 1647px #FFF , 122px 1904px #FFF , 289px 1313px #FFF , 1445px 109px #FFF , 1125px 1226px #FFF , 416px 1324px #FFF , 1687px 1813px #FFF , 654px 469px #FFF , 810px 1578px #FFF , 825px 1922px #FFF , 1640px 1322px #FFF , 1179px 750px #FFF , 1511px 534px #FFF , 936px 1879px #FFF , 382px 659px #FFF , 1422px 1502px #FFF , 1766px 1115px #FFF , 634px 383px #FFF , 1528px 1522px #FFF , 1318px 1586px #FFF , 50px 1627px #FFF , 1886px 1958px #FFF , 949px 1787px #FFF , 1424px 86px #FFF , 1891px 1652px #FFF , 649px 31px #FFF , 17px 1162px #FFF , 9px 1623px #FFF , 634px 1236px #FFF , 583px 1330px #FFF , 396px 1316px #FFF , 1107px 1731px #FFF , 1319px 988px #FFF , 1534px 1832px #FFF , 41px 871px #FFF , 1183px 1240px #FFF , 409px 272px #FFF , 470px 509px #FFF , 637px 651px #FFF , 1840px 1096px #FFF , 1067px 1634px #FFF , 521px 1136px #FFF , 164px 1106px #FFF , 137px 363px #FFF , 1071px 555px #FFF , 105px 129px #FFF , 812px 1728px #FFF , 280px 1981px #FFF , 278px 1400px #FFF , 1925px 805px #FFF , 1663px 59px #FFF , 1687px 292px #FFF , 737px 313px #FFF , 902px 504px #FFF , 1496px 589px #FFF , 132px 643px #FFF , 291px 1204px #FFF , 860px 306px #FFF , 236px 1189px #FFF , 574px 1334px #FFF , 1860px 1387px #FFF , 1042px 980px #FFF , 272px 1282px #FFF , 369px 309px #FFF , 818px 563px #FFF , 1474px 536px #FFF , 1894px 406px #FFF , 470px 53px #FFF , 164px 1988px #FFF , 202px 845px #FFF , 498px 494px #FFF , 1384px 1839px #FFF , 501px 86px #FFF , 1330px 364px #FFF , 1820px 932px #FFF , 1982px 896px #FFF , 729px 1446px #FFF , 1675px 1145px #FFF , 1705px 1186px #FFF , 249px 277px #FFF , 11px 726px #FFF , 1874px 44px #FFF , 760px 1923px #FFF , 1040px 974px #FFF , 647px 246px #FFF , 410px 1880px #FFF , 103px 927px #FFF , 126px 84px #FFF , 1587px 36px #FFF , 1479px 545px #FFF , 1638px 1579px #FFF , 1953px 1585px #FFF , 487px 291px #FFF , 1197px 763px #FFF , 1656px 646px #FFF , 1063px 1587px #FFF , 359px 1988px #FFF , 1672px 1275px #FFF , 81px 244px #FFF , 5px 919px #FFF , 85px 695px #FFF , 1841px 1234px #FFF , 257px 1740px #FFF , 29px 252px #FFF , 235px 699px #FFF , 596px 819px #FFF , 1530px 1989px #FFF , 345px 1505px #FFF , 805px 261px #FFF , 960px 1886px #FFF , 1921px 746px #FFF , 628px 348px #FFF , 401px 1170px #FFF , 1608px 858px #FFF , 692px 301px #FFF , 1176px 233px #FFF , 285px 237px #FFF , 302px 300px #FFF , 1660px 1955px #FFF , 1550px 187px #FFF , 1009px 1578px #FFF , 1611px 1761px #FFF , 1718px 1952px #FFF , 1470px 1669px #FFF , 1269px 385px #FFF , 17px 1570px #FFF , 1003px 102px #FFF , 3px 1848px #FFF , 1616px 381px #FFF , 1423px 1548px #FFF , 134px 652px #FFF , 1883px 84px #FFF , 246px 1011px #FFF , 1161px 1754px #FFF , 964px 455px #FFF , 1845px 1842px #FFF , 378px 18px #FFF , 1341px 1345px #FFF , 1424px 1407px #FFF , 1337px 372px #FFF , 998px 894px #FFF , 19px 714px #FFF , 1615px 432px #FFF , 855px 479px #FFF , 371px 1043px #FFF , 1437px 770px #FFF , 1910px 1468px #FFF , 1898px 691px #FFF , 1949px 73px #FFF , 860px 1423px #FFF , 1788px 1031px #FFF , 1783px 1132px #FFF , 740px 416px #FFF , 97px 771px #FFF , 1467px 433px #FFF , 1644px 643px #FFF , 1475px 1412px #FFF , 637px 26px #FFF , 136px 225px #FFF , 455px 282px #FFF , 965px 464px #FFF , 1447px 127px #FFF , 264px 659px #FFF , 1644px 1762px #FFF , 1779px 1143px #FFF , 1739px 1693px #FFF , 1215px 1954px #FFF , 1605px 240px #FFF , 1617px 401px #FFF , 1015px 577px #FFF , 1235px 969px #FFF , 438px 323px #FFF , 1571px 736px #FFF , 1855px 640px #FFF , 696px 120px #FFF , 920px 1851px #FFF , 178px 1905px #FFF , 714px 1080px #FFF , 1244px 1721px #FFF , 208px 1369px #FFF , 43px 182px #FFF , 1859px 464px #FFF , 151px 1040px #FFF , 1022px 1488px #FFF , 520px 1440px #FFF , 1227px 621px #FFF , 1283px 1118px #FFF , 531px 113px #FFF , 172px 301px #FFF , 946px 516px #FFF , 325px 1135px #FFF , 766px 1723px #FFF , 178px 155px #FFF , 1520px 1016px #FFF , 308px 703px #FFF , 1952px 967px #FFF , 1125px 1950px #FFF , 1658px 1698px #FFF , 1607px 28px #FFF , 1105px 265px #FFF , 24px 1409px #FFF , 322px 1121px #FFF , 973px 305px #FFF , 1307px 601px #FFF , 1706px 1798px #FFF , 1602px 63px #FFF , 1424px 1767px #FFF , 802px 64px #FFF , 172px 1842px #FFF , 1729px 1590px #FFF , 600px 179px #FFF , 614px 1248px #FFF , 165px 529px #FFF , 1234px 844px #FFF , 1146px 394px #FFF , 774px 1608px #FFF , 751px 1436px #FFF , 839px 1251px #FFF , 1360px 542px #FFF , 588px 1711px #FFF , 51px 89px #FFF , 428px 1661px #FFF , 899px 1432px #FFF , 154px 85px #FFF , 1504px 1016px #FFF , 455px 980px #FFF , 1078px 858px #FFF , 387px 1478px #FFF , 711px 579px #FFF , 83px 698px #FFF , 724px 1064px #FFF , 1422px 1745px #FFF , 1026px 30px #FFF , 940px 1917px #FFF , 448px 891px #FFF , 964px 1575px #FFF , 1996px 420px #FFF , 1987px 765px #FFF , 629px 1487px #FFF , 1785px 922px #FFF , 11px 1287px #FFF , 1945px 1356px #FFF , 1605px 607px #FFF , 455px 763px #FFF , 85px 1195px #FFF , 1421px 103px #FFF , 1797px 104px #FFF , 669px 132px #FFF , 1112px 1382px #FFF , 1370px 1252px #FFF , 669px 1504px #FFF , 848px 1894px #FFF , 1373px 1707px #FFF , 372px 1408px #FFF , 1699px 13px #FFF , 1453px 950px #FFF , 1794px 895px #FFF , 1728px 803px #FFF , 113px 591px #FFF , 1705px 1299px #FFF , 995px 1537px #FFF , 1574px 394px #FFF , 645px 1025px #FFF , 171px 383px #FFF , 1878px 1484px #FFF , 1190px 896px #FFF , 265px 641px #FFF , 1709px 954px #FFF , 768px 1212px #FFF , 1420px 768px #FFF , 996px 30px #FFF , 269px 180px #FFF , 77px 314px #FFF , 1968px 584px #FFF , 783px 1899px #FFF , 832px 353px #FFF , 975px 32px #FFF , 770px 1948px #FFF , 1234px 203px #FFF , 441px 1769px #FFF , 164px 1055px #FFF , 823px 1280px #FFF , 798px 973px #FFF , 1619px 1370px #FFF , 1454px 1927px #FFF , 401px 1201px #FFF , 143px 431px #FFF , 772px 862px #FFF , 816px 1346px #FFF , 682px 1020px #FFF , 1131px 1335px #FFF , 73px 568px #FFF , 1887px 577px #FFF , 1930px 769px #FFF , 1439px 1997px #FFF , 188px 334px #FFF , 210px 1444px #FFF , 1640px 1626px #FFF , 975px 1795px #FFF , 1285px 1848px #FFF , 903px 1339px #FFF , 563px 84px #FFF , 258px 1273px #FFF , 1055px 306px #FFF , 1252px 302px #FFF , 1394px 1611px #FFF , 187px 98px #FFF , 401px 1660px #FFF , 1178px 27px #FFF , 1009px 1897px #FFF , 383px 143px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 1914px 1956px #FFF , 723px 1964px #FFF , 1085px 1883px #FFF , 1738px 329px #FFF , 1677px 1913px #FFF , 156px 472px #FFF , 1818px 1691px #FFF , 1721px 666px #FFF , 1218px 435px #FFF , 1002px 1239px #FFF , 1285px 1442px #FFF , 1015px 41px #FFF , 362px 1818px #FFF , 489px 245px #FFF , 169px 1783px #FFF , 236px 166px #FFF , 1144px 1299px #FFF , 8px 1103px #FFF , 894px 1302px #FFF , 1104px 1716px #FFF , 589px 1260px #FFF , 1592px 1356px #FFF , 951px 117px #FFF , 1343px 1670px #FFF , 1897px 263px #FFF , 1001px 1912px #FFF , 1320px 441px #FFF , 268px 1534px #FFF , 24px 1260px #FFF , 1264px 1821px #FFF , 1252px 1913px #FFF , 1104px 910px #FFF , 1649px 968px #FFF , 735px 531px #FFF , 1108px 258px #FFF , 115px 1120px #FFF , 1279px 1144px #FFF , 626px 444px #FFF , 1684px 1248px #FFF , 35px 1500px #FFF , 35px 106px #FFF , 137px 1688px #FFF , 1830px 314px #FFF , 310px 1537px #FFF , 1356px 562px #FFF , 521px 1164px #FFF , 13px 184px #FFF , 746px 211px #FFF , 1210px 1523px #FFF , 561px 1081px #FFF , 1361px 785px #FFF , 1697px 499px #FFF , 1088px 929px #FFF , 329px 1944px #FFF , 1144px 1498px #FFF , 372px 1334px #FFF , 852px 1013px #FFF , 21px 1585px #FFF , 511px 533px #FFF , 1303px 887px #FFF , 1946px 1086px #FFF , 996px 823px #FFF , 153px 205px #FFF , 1532px 834px #FFF , 1561px 1935px #FFF , 287px 638px #FFF , 1231px 47px #FFF , 1507px 755px #FFF , 15px 233px #FFF , 764px 573px #FFF , 1436px 1215px #FFF , 1939px 1306px #FFF , 94px 1047px #FFF , 684px 1587px #FFF , 42px 1708px #FFF , 486px 1246px #FFF , 339px 919px #FFF , 1261px 1790px #FFF , 1248px 1286px #FFF , 1020px 1484px #FFF , 837px 480px #FFF , 769px 479px #FFF , 1537px 1485px #FFF , 15px 1058px #FFF , 245px 1242px #FFF , 1571px 1535px #FFF , 1299px 1031px #FFF , 1708px 1288px #FFF , 1279px 1412px #FFF , 1504px 610px #FFF , 1221px 1674px #FFF , 1953px 130px #FFF , 1893px 1310px #FFF , 1396px 757px #FFF , 1776px 1830px #FFF , 524px 1523px #FFF , 1589px 1755px #FFF , 973px 270px #FFF , 1734px 1443px #FFF , 165px 934px #FFF , 871px 610px #FFF , 1039px 768px #FFF , 283px 1582px #FFF , 672px 843px #FFF , 1031px 997px #FFF , 1251px 488px #FFF , 1001px 999px #FFF , 303px 1273px #FFF , 1142px 438px #FFF , 10px 1020px #FFF , 1608px 981px #FFF , 1327px 1872px #FFF , 486px 663px #FFF , 133px 1127px #FFF , 1686px 1922px #FFF , 1603px 189px #FFF , 1321px 850px #FFF , 453px 654px #FFF , 1389px 1180px #FFF , 1932px 501px #FFF , 1600px 1287px #FFF , 1894px 996px #FFF , 1998px 297px #FFF , 1878px 1461px #FFF , 875px 153px #FFF , 210px 889px #FFF , 84px 436px #FFF , 1097px 179px #FFF , 1738px 610px #FFF , 145px 373px #FFF , 891px 254px #FFF , 235px 1110px #FFF , 1458px 1664px #FFF , 928px 1594px #FFF , 364px 20px #FFF , 974px 1828px #FFF , 215px 1249px #FFF , 645px 941px #FFF , 1286px 228px #FFF , 850px 554px #FFF , 978px 1963px #FFF , 1818px 1174px #FFF , 1338px 1344px #FFF , 529px 1053px #FFF , 222px 59px #FFF , 1844px 344px #FFF , 344px 1294px #FFF , 222px 158px #FFF , 35px 423px #FFF , 1496px 305px #FFF , 1750px 1467px #FFF , 1px 1277px #FFF , 61px 999px #FFF , 1884px 1960px #FFF , 1688px 1789px #FFF , 1942px 573px #FFF , 69px 983px #FFF , 1011px 991px #FFF , 1707px 1530px #FFF , 845px 1510px #FFF , 1899px 1533px #FFF , 634px 121px #FFF , 383px 626px #FFF , 640px 624px #FFF , 633px 758px #FFF , 450px 83px #FFF , 1735px 1308px #FFF , 727px 1753px #FFF , 16px 398px #FFF , 1093px 1876px #FFF , 460px 750px #FFF , 1743px 740px #FFF , 669px 1837px #FFF , 754px 1425px #FFF , 539px 1063px #FFF , 1427px 1982px #FFF , 1747px 276px #FFF , 926px 1542px #FFF , 766px 1657px #FFF , 1213px 180px #FFF , 270px 720px #FFF , 968px 501px #FFF , 1678px 433px #FFF , 1482px 659px #FFF , 1639px 428px #FFF , 1368px 1148px #FFF , 348px 169px #FFF , 188px 1344px #FFF , 1072px 1471px #FFF , 1873px 1655px #FFF , 795px 1866px #FFF , 69px 895px #FFF , 1159px 1532px #FFF , 907px 1207px #FFF , 555px 12px #FFF , 195px 325px #FFF , 992px 552px #FFF , 1981px 693px #FFF , 1029px 1397px #FFF , 1446px 1554px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 1914px 1956px #FFF , 723px 1964px #FFF , 1085px 1883px #FFF , 1738px 329px #FFF , 1677px 1913px #FFF , 156px 472px #FFF , 1818px 1691px #FFF , 1721px 666px #FFF , 1218px 435px #FFF , 1002px 1239px #FFF , 1285px 1442px #FFF , 1015px 41px #FFF , 362px 1818px #FFF , 489px 245px #FFF , 169px 1783px #FFF , 236px 166px #FFF , 1144px 1299px #FFF , 8px 1103px #FFF , 894px 1302px #FFF , 1104px 1716px #FFF , 589px 1260px #FFF , 1592px 1356px #FFF , 951px 117px #FFF , 1343px 1670px #FFF , 1897px 263px #FFF , 1001px 1912px #FFF , 1320px 441px #FFF , 268px 1534px #FFF , 24px 1260px #FFF , 1264px 1821px #FFF , 1252px 1913px #FFF , 1104px 910px #FFF , 1649px 968px #FFF , 735px 531px #FFF , 1108px 258px #FFF , 115px 1120px #FFF , 1279px 1144px #FFF , 626px 444px #FFF , 1684px 1248px #FFF , 35px 1500px #FFF , 35px 106px #FFF , 137px 1688px #FFF , 1830px 314px #FFF , 310px 1537px #FFF , 1356px 562px #FFF , 521px 1164px #FFF , 13px 184px #FFF , 746px 211px #FFF , 1210px 1523px #FFF , 561px 1081px #FFF , 1361px 785px #FFF , 1697px 499px #FFF , 1088px 929px #FFF , 329px 1944px #FFF , 1144px 1498px #FFF , 372px 1334px #FFF , 852px 1013px #FFF , 21px 1585px #FFF , 511px 533px #FFF , 1303px 887px #FFF , 1946px 1086px #FFF , 996px 823px #FFF , 153px 205px #FFF , 1532px 834px #FFF , 1561px 1935px #FFF , 287px 638px #FFF , 1231px 47px #FFF , 1507px 755px #FFF , 15px 233px #FFF , 764px 573px #FFF , 1436px 1215px #FFF , 1939px 1306px #FFF , 94px 1047px #FFF , 684px 1587px #FFF , 42px 1708px #FFF , 486px 1246px #FFF , 339px 919px #FFF , 1261px 1790px #FFF , 1248px 1286px #FFF , 1020px 1484px #FFF , 837px 480px #FFF , 769px 479px #FFF , 1537px 1485px #FFF , 15px 1058px #FFF , 245px 1242px #FFF , 1571px 1535px #FFF , 1299px 1031px #FFF , 1708px 1288px #FFF , 1279px 1412px #FFF , 1504px 610px #FFF , 1221px 1674px #FFF , 1953px 130px #FFF , 1893px 1310px #FFF , 1396px 757px #FFF , 1776px 1830px #FFF , 524px 1523px #FFF , 1589px 1755px #FFF , 973px 270px #FFF , 1734px 1443px #FFF , 165px 934px #FFF , 871px 610px #FFF , 1039px 768px #FFF , 283px 1582px #FFF , 672px 843px #FFF , 1031px 997px #FFF , 1251px 488px #FFF , 1001px 999px #FFF , 303px 1273px #FFF , 1142px 438px #FFF , 10px 1020px #FFF , 1608px 981px #FFF , 1327px 1872px #FFF , 486px 663px #FFF , 133px 1127px #FFF , 1686px 1922px #FFF , 1603px 189px #FFF , 1321px 850px #FFF , 453px 654px #FFF , 1389px 1180px #FFF , 1932px 501px #FFF , 1600px 1287px #FFF , 1894px 996px #FFF , 1998px 297px #FFF , 1878px 1461px #FFF , 875px 153px #FFF , 210px 889px #FFF , 84px 436px #FFF , 1097px 179px #FFF , 1738px 610px #FFF , 145px 373px #FFF , 891px 254px #FFF , 235px 1110px #FFF , 1458px 1664px #FFF , 928px 1594px #FFF , 364px 20px #FFF , 974px 1828px #FFF , 215px 1249px #FFF , 645px 941px #FFF , 1286px 228px #FFF , 850px 554px #FFF , 978px 1963px #FFF , 1818px 1174px #FFF , 1338px 1344px #FFF , 529px 1053px #FFF , 222px 59px #FFF , 1844px 344px #FFF , 344px 1294px #FFF , 222px 158px #FFF , 35px 423px #FFF , 1496px 305px #FFF , 1750px 1467px #FFF , 1px 1277px #FFF , 61px 999px #FFF , 1884px 1960px #FFF , 1688px 1789px #FFF , 1942px 573px #FFF , 69px 983px #FFF , 1011px 991px #FFF , 1707px 1530px #FFF , 845px 1510px #FFF , 1899px 1533px #FFF , 634px 121px #FFF , 383px 626px #FFF , 640px 624px #FFF , 633px 758px #FFF , 450px 83px #FFF , 1735px 1308px #FFF , 727px 1753px #FFF , 16px 398px #FFF , 1093px 1876px #FFF , 460px 750px #FFF , 1743px 740px #FFF , 669px 1837px #FFF , 754px 1425px #FFF , 539px 1063px #FFF , 1427px 1982px #FFF , 1747px 276px #FFF , 926px 1542px #FFF , 766px 1657px #FFF , 1213px 180px #FFF , 270px 720px #FFF , 968px 501px #FFF , 1678px 433px #FFF , 1482px 659px #FFF , 1639px 428px #FFF , 1368px 1148px #FFF , 348px 169px #FFF , 188px 1344px #FFF , 1072px 1471px #FFF , 1873px 1655px #FFF , 795px 1866px #FFF , 69px 895px #FFF , 1159px 1532px #FFF , 907px 1207px #FFF , 555px 12px #FFF , 195px 325px #FFF , 992px 552px #FFF , 1981px 693px #FFF , 1029px 1397px #FFF , 1446px 1554px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 931px 1405px #FFF , 942px 554px #FFF , 1745px 1983px #FFF , 1914px 1039px #FFF , 638px 549px #FFF , 49px 544px #FFF , 1739px 780px #FFF , 1582px 1014px #FFF , 1441px 68px #FFF , 74px 1027px #FFF , 409px 1476px #FFF , 1374px 186px #FFF , 1656px 18px #FFF , 1319px 1695px #FFF , 547px 1774px #FFF , 868px 1798px #FFF , 223px 31px #FFF , 1367px 683px #FFF , 1109px 1543px #FFF , 1776px 915px #FFF , 73px 1967px #FFF , 868px 1436px #FFF , 699px 880px #FFF , 26px 1909px #FFF , 1224px 324px #FFF , 821px 1981px #FFF , 1445px 875px #FFF , 1873px 169px #FFF , 1445px 1164px #FFF , 474px 987px #FFF , 267px 976px #FFF , 1504px 545px #FFF , 530px 111px #FFF , 55px 60px #FFF , 1779px 659px #FFF , 716px 1303px #FFF , 1869px 808px #FFF , 863px 989px #FFF , 755px 423px #FFF , 342px 1936px #FFF , 43px 488px #FFF , 100px 833px #FFF , 211px 223px #FFF , 1977px 1970px #FFF , 1551px 290px #FFF , 1859px 1014px #FFF , 172px 71px #FFF , 1509px 1532px #FFF , 1294px 1418px #FFF , 87px 1764px #FFF , 1198px 1798px #FFF , 1095px 1046px #FFF , 1026px 1237px #FFF , 1468px 773px #FFF , 35px 290px #FFF , 1774px 400px #FFF , 1px 1013px #FFF , 901px 1105px #FFF , 1998px 890px #FFF , 159px 1981px #FFF , 1350px 351px #FFF , 836px 1360px #FFF , 1622px 1137px #FFF , 417px 768px #FFF , 1833px 1888px #FFF , 1589px 954px #FFF , 1130px 1578px #FFF , 1574px 1027px #FFF , 1999px 684px #FFF , 959px 1012px #FFF , 1286px 718px #FFF , 1552px 1976px #FFF , 293px 1198px #FFF , 854px 911px #FFF , 1346px 1628px #FFF , 1833px 121px #FFF , 628px 1429px #FFF , 974px 1324px #FFF , 1042px 1352px #FFF , 1654px 309px #FFF , 4px 38px #FFF , 1245px 860px #FFF , 805px 1798px #FFF , 1455px 1961px #FFF , 1867px 1120px #FFF , 1891px 107px #FFF , 873px 1606px #FFF , 1803px 1952px #FFF , 1133px 1400px #FFF , 237px 96px #FFF , 495px 945px #FFF , 445px 684px #FFF , 1962px 634px #FFF , 242px 1032px #FFF , 1763px 173px #FFF , 1041px 1571px #FFF , 1462px 377px #FFF , 980px 42px #FFF , 1154px 1496px #FFF , 332px 1504px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 931px 1405px #FFF , 942px 554px #FFF , 1745px 1983px #FFF , 1914px 1039px #FFF , 638px 549px #FFF , 49px 544px #FFF , 1739px 780px #FFF , 1582px 1014px #FFF , 1441px 68px #FFF , 74px 1027px #FFF , 409px 1476px #FFF , 1374px 186px #FFF , 1656px 18px #FFF , 1319px 1695px #FFF , 547px 1774px #FFF , 868px 1798px #FFF , 223px 31px #FFF , 1367px 683px #FFF , 1109px 1543px #FFF , 1776px 915px #FFF , 73px 1967px #FFF , 868px 1436px #FFF , 699px 880px #FFF , 26px 1909px #FFF , 1224px 324px #FFF , 821px 1981px #FFF , 1445px 875px #FFF , 1873px 169px #FFF , 1445px 1164px #FFF , 474px 987px #FFF , 267px 976px #FFF , 1504px 545px #FFF , 530px 111px #FFF , 55px 60px #FFF , 1779px 659px #FFF , 716px 1303px #FFF , 1869px 808px #FFF , 863px 989px #FFF , 755px 423px #FFF , 342px 1936px #FFF , 43px 488px #FFF , 100px 833px #FFF , 211px 223px #FFF , 1977px 1970px #FFF , 1551px 290px #FFF , 1859px 1014px #FFF , 172px 71px #FFF , 1509px 1532px #FFF , 1294px 1418px #FFF , 87px 1764px #FFF , 1198px 1798px #FFF , 1095px 1046px #FFF , 1026px 1237px #FFF , 1468px 773px #FFF , 35px 290px #FFF , 1774px 400px #FFF , 1px 1013px #FFF , 901px 1105px #FFF , 1998px 890px #FFF , 159px 1981px #FFF , 1350px 351px #FFF , 836px 1360px #FFF , 1622px 1137px #FFF , 417px 768px #FFF , 1833px 1888px #FFF , 1589px 954px #FFF , 1130px 1578px #FFF , 1574px 1027px #FFF , 1999px 684px #FFF , 959px 1012px #FFF , 1286px 718px #FFF , 1552px 1976px #FFF , 293px 1198px #FFF , 854px 911px #FFF , 1346px 1628px #FFF , 1833px 121px #FFF , 628px 1429px #FFF , 974px 1324px #FFF , 1042px 1352px #FFF , 1654px 309px #FFF , 4px 38px #FFF , 1245px 860px #FFF , 805px 1798px #FFF , 1455px 1961px #FFF , 1867px 1120px #FFF , 1891px 107px #FFF , 873px 1606px #FFF , 1803px 1952px #FFF , 1133px 1400px #FFF , 237px 96px #FFF , 495px 945px #FFF , 445px 684px #FFF , 1962px 634px #FFF , 242px 1032px #FFF , 1763px 173px #FFF , 1041px 1571px #FFF , 1462px 377px #FFF , 980px 42px #FFF , 1154px 1496px #FFF , 332px 1504px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 300;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}

@keyframes lights {
  0% {
    color: hsl(216, 40%, 80%);
    text-shadow:
      0 0 1em hsla(320, 100%, 50%, 0.2),
      0 0 0.125em hsla(320, 100%, 60%, 0.3),
      -1em -0.125em 0.5em hsla(40, 100%, 60%, 0),
      1em 0.125em 0.5em hsla(200, 100%, 60%, 0);
  }
  
  30% { 
    color: hsl(216, 80%, 90%);
    text-shadow:
      0 0 1em hsla(320, 100%, 50%, 0.5),
      0 0 0.125em hsla(320, 100%, 60%, 0.5),
      -0.5em -0.125em 0.25em hsla(40, 100%, 60%, 0.2),
      0.5em 0.125em 0.25em hsla(200, 100%, 60%, 0.4);
  }
  
  40% { 
    color: hsl(216, 100%, 95%);
    text-shadow:
      0 0 1em hsla(320, 100%, 50%, 0.5),
      0 0 0.125em hsla(320, 100%, 90%, 0.5),
      -0.25em -0.125em 0.125em hsla(40, 100%, 60%, 0.2),
      0.25em 0.125em 0.125em hsla(200, 100%, 60%, 0.4);
  }
  
  70% {
    color: hsl(216, 80%, 90%);
    text-shadow:
      0 0 1em hsla(320, 100%, 50%, 0.5),
      0 0 0.125em hsla(320, 100%, 60%, 0.5),
      0.5em -0.125em 0.25em hsla(40, 100%, 60%, 0.2),
      -0.5em 0.125em 0.25em hsla(200, 100%, 60%, 0.4);
  }
  
  100% {
    color: hsl(216, 40%, 80%);
    text-shadow:
      0 0 1em hsla(320, 100%, 50%, 0.2),
      0 0 0.125em hsla(320, 100%, 60%, 0.3),
      1em -0.125em 0.5em hsla(40, 100%, 60%, 0),
      -1em 0.125em 0.5em hsla(200, 100%, 60%, 0);
  }
  
}
h2.effect{
  margin: auto;
  font-size: 5rem;
  font-weight: 400;
  animation: lights 5s 750ms linear infinite;
}
   </style>



<style>

  /* ---- reset ---- */ body{ margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:absolute; width: 100%; height: 100%; background-color: #ffffff; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #000000; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }
</style>

<script>
  particlesJS("particles-js", {"particles":{"number":{"value":307,"density":{"enable":true,"value_area":800}},"color":{"value":"#000000"},"shape":{"type":"edge","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#000000","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":1119.552179128349,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":133.64327774312954,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>


<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">  

        <link rel="stylesheet" href="StyleCards.css"/>
  
  
</head>

<body >  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
            <div class="container px-5">
            <h1 class="navbar-brand" style="font-size:40px; font-weight:bold;">StudyBuddy</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
        <header class="bg-dark py-5"  id="bgcolor">
            <div class="container px-5" >
                <div class="row gx-5 justify-content-center" >
                    <div class="col-lg-6">
                        <div class="text-center my-5" >
                        <h2 class="effect" style="font-weight:bold;">Welcome To Study Buddy</h2>
                            <h2 class="effect" style="font-weight:bold;">Let's Get Started!</h2>
                            <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                 <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a> -->
                                <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="py-5 border-bottom" >
        <script src="particles.js"></script>
        <script src="app.js"></script>
            <div class="container px-5 my-5 px-5 ">
                <div class="text-center mb-5 " >
                    <h1 class="fw-bolder" style="font-weight=bold; text-shadow: 0 0 3px #0d6efd">Select Your Role</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        
                        <div class="card mb-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-book-fill" style="font-size:30px; height:3rem; color:#0d6efd"></i></div>
                                    <div class="ms-4">
                                        <h4 class="mb-1" style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;">Student</h4><br>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="UserLogin.php">LogIn</a>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="RegisterUser.php">SignUp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-body p-4 ">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-award-fill" style="font-size:30px; height:3rem; color:#0d6efd;"></i></div>
                                    <div class="ms-4">
                                        <h4 class="mb-1"  style="color:#1c5cb9; font-size:30px; font-weight:bold; text-decoration:none;">Mentor</h4><br>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="MentorLogin.php">LogIn</a>
                                        <a class="btn btn-primary btn-lg px-3 me-sm-3" href="RegisterMentor.php">SignUp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
          
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
</body>






</html>



<div class="category-name" >Creators</div> <br/>
            
        <div class="card-category-1" style="width: 80%;margin-left: 10%;">
            
            <div class="basic-card basic-card-light" style="justify-content:center">
                <div class="card-content" style="margin-left: 20%;padding:0%">
                    <span class="card-title">Shruti Bilolikar</span>
                    <p class="card-text">
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. -->
                    </p>
                    <hr>
                    <div class="row-lg-2 ">
                    <a href="https://github.com/ShrutiBilolikar"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-github" style="color:black"></i></div></a>
                    <a href="https://www.linkedin.com/in/shruti-bilolikar-04659422b/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-linkedin" style="color:black"></i></div></a>
                    <a href="https://www.instagram.com/shruti_8403/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-instagram" style="color:black"></i></div></a>
        </div>
                </div>

                
            </div>

            <div class="basic-card basic-card-light" style="justify-content:center">
                <div class="card-content" style="margin-left: 20%;padding:0%">
                    <span class="card-title">Radhika Gupta</span>
                    <p class="card-text">
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. -->
                    </p>
                    <hr>
                    <div class="row-lg-2 ">
                    <a href="https://github.com/radhikag970"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-github" style="color:black"></i></div></a>
                    <a href="https://www.linkedin.com/in/radhika-gupta-24814623a/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-linkedin" style="color:black"></i></div></a>
                    <a href="https://www.instagram.com/radhikag970/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-instagram" style="color:black"></i></div></a>
        </div>
                </div>

                
            </div>

            <div class="basic-card basic-card-light" style="justify-content:center">
                <div class="card-content" style="margin-left: 20%;padding:0%">
                    <span class="card-title">Viraj Jagtap</span>
                    <p class="card-text">
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. -->
                    </p>
                    <hr>
                    <div class="row-lg-2 ">
                    <a href="https://github.com/VirajJagtap001"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-github" style="color:black"></i></div></a>
                    <a href="https://www.linkedin.com/in/viraj-jagtap-3768a0223/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-linkedin" style="color:black"></i></div></a>
                    <a href="https://www.instagram.com/viraj__vrj/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-instagram" style="color:black"></i></div></a>
        </div>
                </div>

                
            </div>

            <div class="basic-card basic-card-light" style="justify-content:center">
                <div class="card-content" style="margin-left: 20%;padding:0%">
                    <span class="card-title">Kaushik Mullick</span>
                    <p class="card-text">
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. -->
                    </p>
                    <hr>
                    <div class="row-lg-2 ">
                    <a href="https://github.com/Cromyl"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-github" style="color:black"></i></div></a>
                    <a href="https://www.linkedin.com/in/kaushik-mullick-0b575b217/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-linkedin" style="color:black"></i></div></a>
                    <a href="https://www.instagram.com/kaushik.mullick/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-instagram" style="color:black"></i></div></a>
        </div>
                </div>

                
            </div>

            <div class="basic-card basic-card-light" style="justify-content:center">
                <div class="card-content" style="margin-left: 20%;padding:0%">
                    <span class="card-title">Soumik Karmakar</span>
                    <p class="card-text">
                        <!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. -->
                    </p>
                    <hr>
                    <div class="row-lg-2 ">
                    <a href="https://github.com/KarmaKar6"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-github" style="color:black"></i></div></a>
                    <a href="#!"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-linkedin" style="color:black"></i></div></a>
                    <a href="https://www.instagram.com/soumikkr6/"><div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-instagram" style="color:black"></i></div></a>
        </div>
                </div>

                
            </div>
            
        </div>
        
        <br/>