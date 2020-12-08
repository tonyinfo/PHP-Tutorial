
<h1>PHP Date and time</h1>
<p>The PHP date and time functions are part of the PHP core. You do not need any special installation to use these functions.</p>
<p>You may have to set your local time during the PHP installation or change later. Here are some of the important function of the Date and time function:</p>
<p>The syntax for date is: date(format,timestamp);</p>
<p>Here are some characters that are commonly used for times:</p>
    • H - 24-hour format of an hour (00 to 23)</br>
    • h - 12-hour format of an hour with leading zeros (01 to 12)</br>
    • i - Minutes with leading zeros (00 to 59)</br>
    • s - Seconds with leading zeros (00 to 59)</br>
    • a - Lowercase Ante meridian and Post meridian (am or pm)</br>
<p>Example of today's time format:</p>


 <?php
  echo "Today is " .date("d/m/Y") . "<br>";
  echo "Today is " .date("d.m.Y") . "<br>";
  echo "Today is " .date("d-m-Y") . "<br>";
  echo "Today is " .date("l") . "<br>";
  echo "Time is " .date("H:i:s") . "<br>";
  ?>
