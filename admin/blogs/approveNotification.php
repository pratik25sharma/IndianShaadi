<?php

    $mail_body = '<!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    
    <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
        <tr><td height="20" align="center" valign="bottom" bgcolor="#F0F0F0">&nbsp;</td></tr>
        <tr><td height="20" align="center" valign="bottom" bgcolor="#F0F0F0">&nbsp;</td></tr>
        <tr>
            <td height="150" align="center" valign="bottom" bgcolor="#F0F0F0">
                <table width="600" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td height="70" align="left" valign="middle" bgcolor="#b22c3c">&nbsp;</td>
                        <td height="70" align="left" valign="middle" bgcolor="#b22c3c"><img src="images/logo.png" width="100" alt=""/></td>
                        <td height="70" width="30" bgcolor="#b22c3c">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="30" bgcolor="#FFFFFF">&nbsp;</td>
                        <td width="540" align="center" valign="middle" bgcolor="#FFFFFF"><img src="images/thankyou.png" width="300" height="227" alt=""/></td>
                        <td width="30" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF"><p style="color: #999; font-size: 16px; padding: 25px 0; font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;">For submitting your valuable blog.<br><br>
                        You will be pleased to know that your blog has been approved, Click "your blog" to check you blog.
                        </p></td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="http://weddingmart.co.in/pinnacle/rishtey/blog_list.php" target="_blank" style="display:inline-block; width: 150px; height: 50px; background:#b22c3c; color:#fff; line-height:50px; text-decoration:none; font-size:14px;  font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;"">Your Blog</a></td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
          <td height="20" align="center" valign="bottom" bgcolor="#F0F0F0">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" align="center" valign="bottom" bgcolor="#F0F0F0">&nbsp;</td>
        </tr>
      </tbody>
    </table>
    </body>';

    $mailTo = "pratik25sharma@gmail.com";
    $subject = 'Blog Approved';
    mail($mailTo, $subject, $mail_body);

?>

