<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
            </head>
            <body>
                <h2 align="center">Employee Information</h2>
                <table border="1" align="center" cellpadding="5">
                    <tr>
                        <th>Post</th>
                        <th>Salary</th>
                        <th>Gender</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <xsl:for-each select="TU/Employee">
                        <tr>
                            <td><xsl:value-of select="Post"/></td>
                            <td><xsl:value-of select="Salary"/></td>
                            <td><xsl:value-of select="Gender"/></td>
                            <td><xsl:value-of select="Username"/></td>
                            <td><xsl:value-of select="Password"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>