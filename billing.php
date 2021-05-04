<?php
 $bil_start=20;
 $bil_end=19;
 $start_date=date_create_from_format("j-n-Y","2-4-2018");
 $end_date=date_create_from_format("j-n-Y","24-5-2019");
 $cycle=0;
 
 while($start_date<=$end_date)
 {
 $sd_value=date_timestamp_get($start_date);
 if(getdate($sd_value)[mday]==$bil_end)
 $cycle++;
 date_modify($start_date,"+1 days");
 }
 
 $ed_value=date_timestamp_get($end_date);
 if(getdate($ed_value)[mday]!=$bil_end)
 $cycle++;
 
 echo "Total Billing Cycles: $cycle";
?>
