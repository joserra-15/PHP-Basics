<?php
  //Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
  $yearMonthDay = date('Y-m-d');
  echo $yearMonthDay;
  //Get the current date in any format
  echo date('d-m-Y');
  //Get the current day
  echo date('d');
  //Get the current month in numerical format (1-12)
  echo date('m');
  //Get the current minute with leading zeros (00 - 59)
  echo date('i');
?>