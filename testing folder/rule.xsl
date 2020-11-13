<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
  
<xsl:template match="/"> 
 <html>
 <body> 
  <h1 align="center">Users details</h1> 
   <table border="3" align="center" > 
   <tr bgcolor="aqua"> 
    <th>Name</th> 
    <th>journal</th> 
    <th>email</th> 
    <th>phone</th> 
   </tr> 
    <xsl:for-each select="student/s"> 
   <tr> 
    <td  bgcolor="pale-red"><xsl:value-of select="name"/></td> 
    <td><xsl:value-of select="journal"/></td> 
    <td><xsl:value-of select="email"/></td> 
    <td><xsl:value-of select="phone"/></td> 
   </tr> 
    </xsl:for-each> 
    </table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 