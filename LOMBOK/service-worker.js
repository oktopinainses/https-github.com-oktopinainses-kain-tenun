(function() {
  'use strict';

  // TODO 2.1 - Cache static assets on install
  	var	CACHE_NAME	=	'LOMBOK';
	var	urlsToCache	=	[
		'.',
		'index.php','style1.css','berita_lobar.php','berita_loteng.php','berita_lotim.php',
		'berita_lout.php','berita_tampil.php',	'berita1.php','berita2.php','berita3.php',
		'berita4.php','cerita_berita.php','contact.php','edit_berita.php','edit_lobar.php',
		'edit_loteng.php','edit_lotim.php','edit_lout.php','hapus_berita.php','hapus_lobar.php',
		'hapus_loteng.php','hapus_lotim.php','hapus_lout.php','isi_berita.php','isi_lobar.php',
		'isi_loteng.php','isi_lotim.php','isi_lout.php','koneksi.php','lobar_tampil.php','lobar1.php',
		'lobar2.php','lobar3.php','loteng_tampil.php','loteng1.php','lotim_tampil.php','lotim1.php',
		'lotim2.php','lotim3.php','lout_tampil.php','lout1.php','lout2.php','lout3.php','simpan_berita.php',
		'simpan_lobar.php','simpan_loteng.php','simpan_lotim.php','simpan_lout.php','tampil_lobar.php',
		'tampil_lotim.php','tampil_loteng.php','tampil_lout.php','templat.php','service-worker.js',
		'lombok.sgl'
		
];
self.addEventListener('install',	function(event)	{
		event.waitUntil(
				caches.open(CACHE_NAME)
				.then(function(cache)	{
						return	cache.addAll(urlsToCache);
				})
		);
});
  // TODO 2.2 - Fetch from the cache
 self.addEventListener('fetch',	function(event)	{
		event.respondWith(
				caches.match(event.request)
				.then(function(response)	{
						return	response	||	fetchAndCache(event.request);
				})
		);
});
function	fetchAndCache(url)	{
		return	fetch(url)
		.then(function(response)	{
				//	Check	if	we	received	a	valid	response
				if	(!response.ok)	{
						throw	Error(response.statusText);
				}
				return	caches.open(CACHE_NAME)
				.then(function(cache)	{
						cache.put(url,	response.clone());
						return	response;
				});
		})
		.catch(function(error)	{
				console.log('Request	failed:',	error);
				//	You	could	return	a	custom	offline	404	page	here
		});
}

})();
