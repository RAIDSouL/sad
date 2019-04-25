<?php $client = new GuzzleHttp\Client(['headers' => ['Teamup-Token' => 'b3599f06270e7573e706cd1078f92249368ecd11d3a06d1da242641de81fd6a8']]);
$sdate = '2019-04-25';
$edate = '2019-04-25';
$result = $client->get('https://teamup.com/ksg7y4nwkfp7q6xyio/events?startDate='.$sdate.'&endDate='.$edate);
date_default_timezone_set("Asia/Bangkok");
print $result->getBody();
