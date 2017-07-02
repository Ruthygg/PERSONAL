// *************************************************
// datelastmod.js   Display Date Format: 31 Mar 2000
// © Pat Drummond  www.patdrummond.org
// *************************************************
function date_ddmmmyyyy(date)
{
  var d = date.getDate();
  var m = date.getMonth() + 1;
  var y = date.getYear();
  var mmm =
    ( 1==m)?'Jan':( 2==m)?'Feb':(3==m)?'Mar':
    ( 4==m)?'Apr':( 5==m)?'May':(6==m)?'Jun':
    ( 7==m)?'Jul':( 8==m)?'Aug':(9==m)?'Sep':
    (10==m)?'Oct':(11==m)?'Nov':'Dec';
  return "" +
    (d<10?"0"+d:d) + " " + mmm + " " + (y<1000?1900+y:y);
}
// GET LAST MODIFIED DATE OF THIS WEB PAGE
function date_lastmod()
{
  var lmd = document.lastModified;
  var s   = "Unknown";
  var d1;
  // check if valid date
  if(0 != (d1=Date.parse(lmd)))
  { s = "" + date_ddmmmyyyy(new Date(d1)); }
  return "January-2013";
}

