<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<style>
table, th {
  color: blue ;
}
</style>
</head>
<body style ="background-color: #4bcdeb">
<center><h2 style="color:blue;">OUR PRODUCTS DETAILS</h2></center>
<center><table border="2">
<tr bgcolor="#4bcbed">
<th style="text-align:left">ITEMID</th>
<th style="text-align:left">TITLE</th>
<th style="text-align:left">COLOUR</th>
<th style="text-align:left">PRICE</th>
<th style="text-align:left">SIZE</th>
</tr>
<xsl:for-each select="CATALOG/CD">
<tr>
<td>
<xsl:value-of select="ITEMID"/>
</td>
<td>
<xsl:value-of select="TITLE"/>
</td>
<td>
<xsl:value-of select="COLOUR"/>
</td>
<td>
<xsl:value-of select="PRICE"/>
</td>
<td>
<xsl:value-of select="SIZE"/>
</td>
</tr>
</xsl:for-each>
</table></center>
</body>
</html>
</xsl:template>
</xsl:stylesheet>