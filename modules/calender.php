function($f3,$params) {
               $calender_year = $f3->get('DB')->exec('select * from calender where jahr like ? order by datum ASC', $params['year']);
               #sorts table content into month 
               for ($i = 0; $i < count($calender_year) ; $i++) {
                   #format date of date_created
                   $datetime = DateTime::createFromFormat(
                       'd.m.Y',
                       $calender_year[$i]['date']
                   );
                   if (strpos($datetime->format('m'),'01') !== false) {
                       $january[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'02') !== false) {
                       $february[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'03') !== false) {
                       $march[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'04') !== false) {
                       $april[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'05') !== false) {
                       $may[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'06') !== false) {
                       $june[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'07') !== false) {
                       $july[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'08') !== false) {
                       $august[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'09') !== false) {
                       $september[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'10') !== false) {
                       $october[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'11') !== false) {
                       $november[] = $calender_year[$i];
                   } elseif (strpos($datetime->format('m'),'12') !== false) {
                       $december[] = $calender_year[$i];
                   }
		}
               $f3->set('january',$january);
               $f3->set('february',$february);
               $f3->set('march',$march);
               $f3->set('april',$april);
               $f3->set('may',$may);
               $f3->set('june',$june);
               $f3->set('july',$july);
               $f3->set('august',$august);
               $f3->set('september',$september);
               $f3->set('october',$october);
               $f3->set('november',$november);
               $f3->set('december',$december);
	       $f3->set('year',$params['year']);
