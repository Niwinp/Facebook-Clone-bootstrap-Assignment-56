<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
  
<xsl:template match="/"> 
 <html>
 <body> 
  <h1 align="center">Profile</h1> 
   <table border="3" align="center" > 
   <tr bgcolor="red"> 
    <th>NAME</th> 
    <th>STATUS</th>
    <th>ACTIVE</th>
    <th>JOINED ON</th> 
    
   </tr> 
    <xsl:for-each select="profiles/p"> 
   <tr> 
    <td  bgcolor="pale-red"><xsl:value-of select="name"/></td> 
    <td><xsl:value-of select="status"/></td> 
	<td><xsl:value-of select="active"/></td> 
	<td><xsl:value-of select="joined_fb"/></td> 
    
   </tr> 
    </xsl:for-each> 
    </table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 