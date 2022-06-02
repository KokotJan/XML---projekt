<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Kolekcija igara</h2>
  <table border="1">
    <tr bgcolor="#e9000f">
      <th>Naslov</th>
      <th>Žanr</th>
      <th>Godina Izdanja</th>
      <th>Cijena</th>
    </tr>
    <xsl:for-each select="Kolekcija/Igra">
    <tr>
      <td><xsl:value-of select="Naslov"/></td>
      <td><xsl:value-of select="Zanr"/></td>
      <td><xsl:value-of select="GodinaIzdanja"/></td>
      <td><xsl:value-of select="Cijena"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>