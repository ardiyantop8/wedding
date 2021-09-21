<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Vue dengan CDN</title>
</head>
<body>
<div id="latihan1">
	<h1>Nama Saya : {{ name }}</h1>
	<h1>Umur Saya : {{ age }}</h1>
	<h1>Alamat Saya : {{ user.address }}</h1>
	<button class="btn btn-sm btn-info" v-on:click="KlikSaya"> Tekan Perlahan</button>
</div>

<script src="<?= base_url('assets/js/') ;?>vue.js"></script>
<script type="text/javascript">
	var app = new Vue({
		el 			: '#latihan1',
		components	: {

		},
		data 		: {
			name	: 'Ardiyanto Putra',
			age		: '27 tahun',
			user	: {
				address	: 'Jln Kalimati rt 02/rw 03 no 06 kelurahan kedaung kaliangke'
			}
		},
		mounted(){
			this.changeName()

		},
		methods: {
			KlikSaya() {
				this.name = this.age
				this.showAlert()
			},
			showAlert() {
				alert('Nama sekarang berubah menjadi ' + this.name)
			},
			changeName() {
				this.name = "Ardi putra gaming genshin"
			}

		}
	})
</script>    
</body>
</html>