
<!-- saved from url=(0022)http://www.ccaian.org/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name="keywords" content="Copres-Dz">
<meta name="description" content="Hacked Copres-Dz">
</head><body style="background-image: url(&#39;http://1.bp.blogspot.com/-iuQfcAcl_Ys/TdEfB_cCfEI/AAAAAAAAHzA/zs5PYQog9j8/s1600/black-wallpaper.jpg&#39;)" alink="#993300" background="./Hacked By BARLAMAN_files/p_0001.htm" bgcolor="#333366" link="#0066CC" text="#FFFFFF" vlink="#999999">


<meta http-equiv="Content-Language" content="en-us">

<title>Hacked By BARLAMAN</title>
<link rel="shortcut icon" href="http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/21.gif" "="">


<title>HaCkeD By Copres-Dz</title><owned by="" copres-dz=""><noscript></noscript><!-- --><script type="text/javascript" async="" src="./Hacked By BARLAMAN_files/ga.js"></script><script type="text/javascript" async="" src="./Hacked By BARLAMAN_files/do.htm"></script><script type="text/javascript" src="./Hacked By BARLAMAN_files/p.js"></script><script> 
/*
An object-oriented Typing Text script, to allow for multiple instances.
A script that causes any text inside any text element to be "typed out", one letter at a time. Note that any HTML tags will not be included in the typed output, to prevent them from causing problems. Tested in Firefox v1.5.0.1, Opera v8.52, Konqueror v3.5.1, and IE v6.
Browsers that do not support this script will simply see the text fully displayed from the start, including any HTML tags.

 Functions defined:
  TypingText(element, [interval = 100,] [cursor = "",] [finishedCallback = function(){return}]):
    Create a new TypingText object around the given element.  Optionally
    specify a delay between characters of interval milliseconds.
    cursor allows users to specify some HTML to be appended to the end of
    the string whilst typing.  Optionally, can also be a function which
    accepts the current text as an argument.  This allows the user to
    create a "dynamic cursor" which changes depending on the latest character
    or the current length of the string.
    finishedCallback allows advanced scripters to supply a function
    to be executed on finishing.  The function must accept no arguments.
 
  TypingText.run():
    Run the effect.
 
  static TypingText.runAll():
    Run all TypingText-enabled objects on the page.
*/
 
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;    // Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 20 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);    // We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
    this.currentText = "";
    this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}




</script>
	<style type="text/css">
body {
    padding:0;
    margin:0;
    background-image:url(http://i66.servimg.com/u/f66/14/86/38/04/ground10.gif);
    background-repeat: no-repeat;
    background-position:top;
background-color: black;
color: white;
font: normal 80% Verdana;
margin-top: 0px;
margin-left: 0px;
padding: 0;
margin-right: 0px;
}
 
td{font-family: verdana; font-size: 20pt; color: green}
a{font-family: verdana; font-size: 20pt; color: silver}
/* REMOVE HORIZONTAL SCROLLBAR*/                     
       body {                                
    overflow-x: hidden;                        
    }                                    
/* REMOVE VERTICAL SCROLLBAR*/                    
    body {                                
    overflow-y: hidden;                            
    }	</style>
	</owned><p></p>
<p>
	&nbsp;</p>
<center>
	<div id="example1">
		<p>
			<span style="font-family: comic sans ms,cursive; font-size:36px"><strong>
			<span style="background-color:#808000;">Hacked By BARLAMAN</span></strong></span></p>
		<p>
			<span style="font-family: comic sans ms,cursive; font-size:30px"><strong>
			<span style="background-color:#030303;">Younes Ars </span></strong></span></p>
		<p>
			<b><desinget by="" tooli=""> <font color="#FF0000" face="ACS  Akeek Bold" size="7"><span class="style20"><span lang="en-us">
			&nbsp;</span></span></font> <font face="Comic Sans MS">Todays News 
			Update: you got hacked!</font> </desinget></b></p>
		<p>
			<b><font face="Comic Sans MS">[#] The site is under someone
			 else manage [#]</font><font face="Fixedsys">  !.. _</font><br>
			___________________</b></p>
	</div>
	<p id="example2">
		<b><font face="Comic Sans MS">There is no god but Allah,
		Muhammad is the Messenger of Allah</font></b><br>
		<b><font face="Comic Sans MS"><font color="#C0C0C0"></font><br>
		_ Fuck you admin!<br>
		_ Go to hell<br>
		_ Your Site iS Owned<br>
		_ <font color="#00FFFF">BARLAMAN</font> <font color="#C0C0C0">was</font><font color="#800000"> </font><font color="#FFFF00">
		here</font>!</font></b> /</p>
	<p>
		<b><font face="Fixedsys">__________________</font></b></p>
	<p>
		<br>
		<b><font face="Fixedsys"><font face="Fixedsys"><font face="Comic Sans MS">
		_ We <font color="#FF00FF">Will</font> Never <font color="#00FFFF">Stop</font> 
		Hacking<br>
		_ Its <font color="#FF00FF">not </font>a<font color="#0000FF"> </font> <font color="#008080">
		game</font><br>
		_ <font color="#FFFF00">It's </font>Our <font color="#FF0000">Job</font> </font> </font></font></b></p>
	<p>
	<b><font face="Fixedsys"><font face="Fixedsys"><font face="Comic Sans MS">
		I am a <font color="#FF00FF">Algerian</font> Muslim <font color="#00FFFF">For</font> 
		ever<br>
		<b><font face="Fixedsys"><font face="Fixedsys">___________________</font></font></b></font></font></font></b></p><b><font face="Fixedsys"><font face="Comic Sans MS">
	<p>
		<br>
		<b><font face="Fixedsys"><font face="Fixedsys"><font face="Comic Sans MS">
		_ H4ck3d by <span style="color: #008000">BARLAMAN</span></font></font></font></b></p>
	<p>
	<span style="font-family: &#39;comic sans ms&#39;,cursive; font-weight: 700; background-color: #FF0000">BL9@HOTMAIL.COM</span></p>
	<p>
		<span style="font-family: &#39;comic sans ms&#39;,cursive; font-weight: 700; background-color: #FF0000">
		indonesia security down</span></p>
	<p>
		<b><font face="Fixedsys"><font face="Fixedsys"><font face="Fixedsys"><script type="text/javascript"> 
//Define first typing example:
new TypingText(document.getElementById("example1"));
//Define second typing example (use "slashing" cursor at the end):
new TypingText(document.getElementById("example2"), 70, function(i){
var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length %
ar.length]; });
//Type out examples:
TypingText.runAll();
</script></font></font></font></b></p>

			<i> 















































































































































	<span style="FILTER: blur(add=0,direction=0,strength=0); "> 















































































































































 















































































































































<font style="FONT-SIZE: 8pt" face="Courier New"> 



































































































































<p align="center">
			<font color="#FF0000" face="Tahoma" size="2">
			<a href="http://www.facebook.com/younes.ars">
			<font color="#FF0000"><span style="text-decoration: 
none">Facebook</span></font></a></font></p>
				<p align="center">
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</p><p align="center"><embed src="index838993403.php_files/e158d24aea8f690b18c3649c1fcef14d.swf" height="15" width="20"></p></font></span></i></font></font></b></center></body></html>
