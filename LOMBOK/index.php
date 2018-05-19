<?php include_once ('templat.php'); ?>
<script>
 if ('serviceWorker' in navigator) {
navigator.serviceWorker.register('service-worker.js')
.then(function(registration) {
console.log('Registered:', registration);
})
.catch(function(error) {
console.log('Registration failed: ', error);
});
}
</script>