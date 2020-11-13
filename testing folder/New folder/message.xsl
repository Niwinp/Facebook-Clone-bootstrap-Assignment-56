<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
  
<xsl:template match="/"> 
 <html>
 <body> 
  <h1 align="center">Message</h1> 
   <table border="3" align="center" > 
   <tr bgcolor="aqua"> 
    <th>From</th> 
    <th>To</th> 
    
   </tr> 
    <xsl:for-each select="messages/message"> 
   <tr> 
    <td  bgcolor="pale-red"><xsl:value-of select="from"/></td> 
    <td><xsl:value-of select="to"/></td> 
    
   </tr> 
    </xsl:for-each> 
    </table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 