<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Page Title</title>
</head>

<body>
    <div class='position-absolute top-50 start-50 translate-middle'>
        <button id='button' class='btn btn-primary btn-lg' onclick='mulai()'> Nah terus klik ini :) </button>
        <div id='iloveyou' style='display: none;'>
            <h2 class='text-center'>Aku sayang kamu<br>&#10084;&#65039;</h2>
        </div>
    </div>

    <audio loop="true">
        <source src="lagudinda.mp3" type="audio/mpeg">
        Browsermu tidak mendukung tag audio
    </audio>
    <h3>
        ^^ klik play dulu dong</h3>

    <span id='hati' class='fixed-bottom text-center my-3' onclick='hati()'></span>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script src="https://www.cssscript.com/demo/confetti-falling-animation/confetti.js"></script>
    <script type="text/javascript">
    const author = 'dinda';
    document.getElementById('hati').innerHTML = `Made with &#10084;&#65039; by ${author}`;
    const swals = Swal.mixin({
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
    });
    async function mulai() {
        await swals.fire('Hai cen!', 'Apa kabar?', 'question');
        await swals.fire(
            'Semoga kamu sedang dalam keadaan yg baik ya.. Kalaupun lagi ga baik, semoga dengan adanya hari ini bisa bikin kamu jadi membaik sedikit. Agak maksa ya buat harus baik baik aja haha padahal normal juga jadi manusia yg lg ga baik baik aja. Anyways..'
        );
        await swals.fire(
            'Yang pertama jelas aku mau menyampaikan banyak maaf karena melalui ini, aku mungkin aja bisa bikin kamu jadi ga baik baik aja. Melalui ini juga nyali aku ada ga ada sebenernya alias takut jg bikin kmu nantinya jadi marah sm aku krn aku masih gangguin kamu. Maafin aku ya...',
            'question');
        var {
            value: nama
        } = await swals.fire({
            title: 'Masukin nama kamu dulu',
            input: 'text',
            showCancelButton: true,
        });
        if (nama) {
            var {
                isConfirmed: sayang
            } = await swals.fire({
                title: `${nama} maafin aku ya?`,
                confirmButtonText: 'Iya',
                cancelButtonText: 'Gamau males',
                showCancelButton: true,
            });
            if (sayang) {
                await swals.fire(`Thankyou for your forgive me!`);
                await swals.fire(
                    `Yang kedua aku mau nyampein selamat buat kamu yang kali ini beneran udah 21+ HAHAHA. Selamat karena udah berhasil melalui 21th kehidupan, semoga ditahun ini kamu bisa lebih kuat dan legowo karena katanya semakin dewasa harus semakin banyak legowonya`
                );
                await swals.fire(
                    `Semoga juga ditahun ini dan tahun-tahun yg akan datang banyak yg tercapai/terwujud dalam kesemogaan kamu sebelumnya alias satu persatu keinginan dan cita-cita kamu terkabul, tercapai, dan terwujud.`
                );
                await swals.fire(
                    `Mumpung masih hari spesial jadi mari perbanyak "semoga"nya walaupun di hari-hari biasanya jg bisa aja berdoa tp kali ini khusyuson aku ngedoain kamu agar panjang umur, dilancarkan rejekinya, dan sehat serta bahagia.`
                );
                await swals.fire(
                    `Makasih yaa udah baca sampe akhir.. Tp sbntar, masih ada lagi yg mau aku sampein..`);
                await swals.fire(
                    `Karena dari tadi isinya harapan terus, kali ini isinya perayaan rasa syukur. Yap, rasa syukur ini perlu dirayakan. Bersyukur atas kehadiran kamu di hidup aku yang membawa banyak pelajaran, salah satunya adalah..`
                );
                await swals.fire(
                    `Perpisahan kemarin. Bukan, bukan aku mau bahas lagi. Tapi aku mau ngasih tau ke kamu perihal pelajaran yang aku dapatkan dari cerita kemarin. Bahwa aku baru sadar kalau kesempurnaan itu diciptakan bersama, bukan ada dengan sendirinya.`
                );
                await swals.fire(
                    'Aku yang pernah bilang ke kamu kalo ada bbrpa sifat kmu yang blm bisa aku terima. Seharusnya bukan soal bisa diterima/engga, tapi soal mau melengkapi/engga biar bisa jadi sempurna. Karena pasti ada juga sifat-sifat di aku yang bikin kamu kesel tp kmu pendem dan kmu yakin serta mau melengkapi'
                );
                await swals.fire(
                    'Yap, seharusnya kurang lebih begitu. Tapi karena nasi suda menjadi bubur, apalah daya~ Walaupun sebenernya bubur rasanya enak juga, apalagi kalau diaduk tapi ga pake kacang. Kriuk'
                );
                await swals.fire(
                    'Oke lanjut. Yap, terima kasih atas demikian. Dengan adanya hikmah ini, aku bisa lebih mawas diri nantinya. Entah nanti dengan pasangan baru aku/ kamu dengan pasangan baru kamu/ dengan kita yang baru.'
                );
                await swals.fire('Et, kita yg baru? Begimane ni maksudnya?');
                await swals.fire(
                    'Yap, tepat. Udah sebulan aku berusaha lupain kamu, tapi tetep gabisa. Gila lu, pake pelet apasih?'
                );
                var {
                    isConfirmed: kamu
                } = await swals.fire({
                    title: `Kalau kamu gimana? Udah bisa lupain aku?`,
                    confirmButtonText: 'Belum nih hehe',
                    cancelButtonText: 'Udah',
                    showCancelButton: true,
                });
                if (kamu) {
                    await swals.fire(
                        `Sama dong kita hahaha. Kalau gitu kayanya enak ni kalau ketemu langsung buat ngobrol. Mau gak? Kalau mau aku tunggu di kafe .... malem ini paling telat jam 9 malem ya, lebih dari itu aku udah pulang dan mungkin bisa dilanjut via wa atau ketemu dilain hari`
                    );
                    if (kangen) {
                        await swals.fire(`Huhu iya ${author} juga kangen ${nama} :((`);
                        await swals.fire('Terakhir deh, Sumpah');
                        await swals.fire('Coba klik ikon hati di paling bawah dong');
                    } else {
                        //gak kangen
                    }
                }
            } else {
                //gak sayang
            }
        } else {

        }
    }

    function hati() {
        document.getElementById('button').style = 'display: none';
        document.getElementById('iloveyou').style = '';
        startConfetti();
    }
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>