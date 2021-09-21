<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Instance Object Vue.js</title>
</head>

<body>
    <div id="app-latihan-intance-object">
        <p>Nama Saya : {{nama}} </p>
        <p>Umur Saya : {{umur}} Tahun</p>
        <p>Umur anak saya: {{umurAnak1}} Tahun</p>
    </div><br><br>


    <!-- directive : if ,else, loop -->
    <div id="app-directive">
        <div v-if="done">
            <p>Nama Saya : {{nama}} </p>
        </div>
        <div v-else>
            <p><b>Maaf variable donenya = false</b></p>
        </div>
    </div>
    <!-- Tutup directive -->


    <!-- looping / v-for -->
    <div id="app-loop">
        <ul>
            <li v-for="(keys, member) in members">
                {{member}} saya {{keys}}
            </li>
        </ul>
    </div>
    <!-- tutup looping / v-for -->

    <script src="<?= base_url('assets/js/'); ?>vue.js"></script>
    <script>
        var pribadi = {
            nama: "Ardiyanto Putra",
            umur: 30,
            kelamin: "Laki-laki",
            done: false
        }

        var dataVfor = {
            members: {
                nama: "Ardiyanto Putra",
                umur: 37,
                gender: "Laki-laki"
            }
        }

        const vm = new Vue({
            el: '#app-latihan-intance-object',
            data: pribadi,
            computed: {
                umurAnak1: function() {
                    return this.umur - 28;
                }
            }
        });

        const Directive = new Vue({
            el: '#app-directive',
            data: pribadi,
        });

        const Vfor = new Vue({
            el: '#app-loop',
            data: dataVfor
        });
    </script>
</body>

</html>