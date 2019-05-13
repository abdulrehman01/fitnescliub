
<!DOCTYPE html>
<html lang="en">
<head>
<title>BMI Calculator (Body Mass Index) - Adult Men, Women, Teens & Kids</title>
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-51423016-1', 'halls.md');
  ga('send', 'pageview');
</script>
 
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '919660061435205');
fbq('track', "PageView");</script>
 
</head>
<BODY onKeyPress="microsoftKeyPress()" style="background-image:url(images/banner4.jpg);color:white">
<h1 align="center" style="color:white">BMI Calculator</h1>
<table border="0" align="center">
</table>
<p align="center" style="color:white">This <b>bmi calculator</b> calculates <b>body
mass index</b> from your Weight and Height</p>
<form method="POST" action="">
<table border="6" align="center" style="visibility:.8pc" class="pink"><tr><td>
<table border="0">
<tr>
<td width="20"></td>
<td width="50">Weight</td>
<td> <input type="text" name="wt" size="4">
<select name="wu" size="1" onChange="poundsAndKilos(this.form)">
<option selected>pounds</option>
<option>kilograms</option>
</select> </td>
<td><em><font size="3">can&nbsp; convert<br>
lbs to kg</font></em></td>
</tr>
<tr>
<td></td>
<td>Height</td>
<td colspan="2"> <input type="text" name="ht" size="4">
<select name="hu" size="1" onChange="inchesCm(this.form)">
<option selected>inches</option>
<option>cm</option>
</select>
&nbsp;or <select name="htf" size="1" onChange="feetAndInches(this.form)">
<option value="1">1'</option>
<option value="2">2'</option>
<option value="3">3'</option>
<option value="4">4' </option>
<option value="5" selected>5' </option>
<option value="6">6' </option>
<option value="7">7' </option>
</select><select name="hti" size="1" onChange="feetAndInches(this.form)">
<option value="0">0'' </option>
<option value="1">1'' </option>
<option value="2">2'' </option>
<option value="3">3'' </option>
<option value="4">4'' </option>
<option value="5">5'' </option>
<option value="6" selected>6'' </option>
<option value="7">7'' </option>
<option value="8">8'' </option>
<option value="9">9'' </option>
<option value="10">10'' </option>
<option value="11">11'' </option>
</select></td>
</tr>
</table>
<table border="0">
<tr>
<td width="150" align="center"><input name="button" onclick="CalcIt(this.form)" type="button" value="Calculate" style="margin-top:6px;">&nbsp;results:</td>
<td>
<table border="1" cellpadding="4">
<tr>
<td align="right"><b>Body Mass Index</b>:&nbsp;</td>
<td>
<input maxLength="5" name="bmi" size="5" type="text">
kg/m<sup><small>2</small></sup></td>
</tr>
</table>
</td>
</tr>
</table>
</td></tr></table>
&nbsp;
<table border="0" width="100%">
<tr>
<td width="34%">
<table border="6" align="center" class="pink">
<tr>
<td>
<table border="0" width="100%">
<tr>
<td align="left" width="20">&nbsp;</td>
<td align="right">Age:&nbsp;</td>
<td align="left" colspan="2">
<input type="text" name="Years" size="4">&nbsp;years&nbsp;(&nbsp;<select size="1" name="AgeCat" onChange="SetAge(this.form)">
<option>70 + years</option>
<option>60 - 69 yrs</option>
<option>50 - 59 yrs</option>
<option>40 - 49 yrs</option>
<option>30 - 39 yrs</option>
<option>20 - 29 yrs</option>
<option>18 - 19 yrs</option>
<option>17 yrs</option>
<option>16 yrs</option>
<option>15 yrs</option>
<option>14 yrs</option>
<option>13 yrs</option>
<option>12 yrs</option>
<option>11 yrs</option>
<option>10 yrs</option>
<option>9 yrs</option>
<option>8 yrs</option>
<option>7 yrs</option>
<option>6 yrs</option>
<option>5 yrs</option>
<option>4 yrs</option>
<option>3 yrs</option>
<option>2 yrs</option>
<option>1.5 yrs</option>
<option>1 yrs</option>
<option selected>Adult</option>
<option>Child</option>
</select>&nbsp;)
</td>
</tr>
<tr>
<td align="left">&nbsp;</td>
<td align="right">Gender:&nbsp;</td>
<td align="left">
<select size="1" name="Gender" onChange="CalcIt(this.form)">
<option selected>Male</option>
<option>Female</option> </select>
</td>
<td><input name="button1" onclick="CalcIt(this.form)" type="button" value="re-calculate"></td>
<td align="right">&nbsp;</td>
</tr>
</table>
</td></tr>
</table>
</td>
</tr>
</table>

</div>  
</div>  
 
<script language="JavaScript" SRC="http://halls.md/body-mass-index/bmi3.js" TYPE="text/javascript" defer></script>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="http://halls.md/js/pastels.js"></script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></BODY>
</HTML>