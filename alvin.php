run.php

<? php
// FB: MANGGALA FEBRI VALENTINO
echo  " Masukkan UserId / Uid: " ;
$ uid  	=  trim ( fgets ( STDIN ));
echo  " Masukkan N ID: " ;
$ n  	=  trim ( fgets ( STDIN ));
echo  " Masukkan Jumlah Suntik: " ;
$ jumlah 	=  trim ( fgets ( STDIN ));
echo  " SetSleep: " ;
$ wait 	=  trim ( fgets ( STDIN ));
    $ i = 0 ;
sementara ( $ i < $ jumlah ) {
			tidur ( $ wait );
			$ i ++ ;
			flush ();
			
		$ news 		= 	news ( $ uid , $ n );
		$ video 		= 	video ( $ uid , $ n );
		$ share 		= 	share ( $ uid , $ n );
		$ code 		= 	code ( $ uid , $ n );
		$ klik 		= 	klik ( $ uid , $ n );
	echo  " TASK NEWS   $ news \ n " ;
	echo  " TASK VIDEO $ video \ n " ;
	echo  " TASK SHARE $ share \ n " ;
	echo  " TASK CODE   $ code \ n " ;
	echo  " TASK KLIK   $ klik \ n " ;
	
	}
 berita fungsi ( $ uid , $ n ) {
		$ rand  =  rand ( 1 , 9999 );
		$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://ai.caping.co.id/v2/event/news/view/ $ rand " );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers  =  array ();
				$ headers [] =  " Cookie: u = $ uid ; n = $ n " ;
				$ headers [] =  " Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ result  =  curl_exec ( $ ch );
	kembali  $ hasil ;
}
 video fungsi ( $ uid , $ n ) {
		$ rand  =  rand ( 1 , 9999 );
		$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://ai.caping.co.id/v2/event/video/view/ $ rand " );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers  =  array ();
					$ headers [] =  " Cookie: u = $ uid ; n = $ n " ;
					$ headers [] =  " Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ result  =  curl_exec ( $ ch );
	kembali  $ hasil ;
}
 share fungsi ( $ uid , $ n ) {
		$ rand  =  rand ( 1 , 9999 );
		$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://ai.caping.co.id/v2/event/share/news/ $ rand " );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers  =  array ();
					$ headers [] =  " Cookie: u = $ uid ; n = $ n " ;
					$ headers [] =  " Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ result  =  curl_exec ( $ ch );
	kembali  $ hasil ;
}
 kode fungsi ( $ uid , $ n ) {
		$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://ai.caping.co.id/v2/event/share/code " );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
				$ headers  =  array ();
					$ headers [] =  " Cookie: u = $ uid ; n = $ n " ;
					$ headers [] =  " Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ result  =  curl_exec ( $ ch );
	kembali  $ hasil ;
}
function  klik ( $ uid , $ n ) {
		$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://ai.caping.co.id/v2/event/share/click/push " );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , 0 );
			$ headers  =  array ();
					$ headers [] =  " Cookie: u = $ uid ; n = $ n " ;
					$ headers [] =  " Agen-Pengguna: Mozilla / 5.0 (Linux; Android 6.0.1; Redmi 3S Build / MMB29M; wv) AppleWebKit / 537.36 (KHTML, seperti Gecko) Versi / 4.0 Chrome / 66.0.3359.126 Mobile Safari / 537.36 ; CapingNews / 4.1.4 " ;
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ headers );
		$ result  =  curl_exec ( $ ch );
	kembali  $ hasil ;
