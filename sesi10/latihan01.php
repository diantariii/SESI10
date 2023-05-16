<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>

    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>

         <div>
            NAMA
            <input type="text" name="txNAMA">
        </div>

         <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>

         <div>
            JURUSAN
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIP">TI-PAR</option>
                <option value="SK">SK</option>
            </select>
        </div>

        <div>
            HOBI
            <input type="checkbox" name="musik">Musik
            <input type="checkbox" name="tari">Tari
            <input type="checkbox" name="baca">Membaca
            <input type="checkbox" name="tidur">Tidur
            <input type="checkbox" name="jogging">Jogging
            <input type="checkbox" name="lari">Lari
            <input type="checkbox" name="nangis">Menangis
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("musik").checked;
            let hobi_tari = f.namedItem("tari").checked;
            let hobi_baca = f.namedItem("baca").checked;
            let hobi_tidur = f.namedItem("tidur").checked;
            let hobi_jogging = f.namedItem("jogging").checked;
            let hobi_lari = f.namedItem("lari").checked;
            let hobi_nangis = f.namedItem("nangis").checked;
            //document.getElementById().innerHTML="";
            //document.write();
            //alert();
            console.log("NIM: "+nim); 
            console.log("NAMA: "+nama);
            console.log("Jenis Kelamin: "+jk);
            console.log("Jurusan: "+jurusan);
            console.log("Hobi: "+hobi_musik);
            console.log("Hobi: "+hobi_tari);
            console.log("Hobi: "+hobi_baca);
            console.log("Hobi: "+hobi_tidur);
            console.log("Hobi: "+hobi_jogging);
            console.log("Hobi: "+hobi_lari);
            console.log("Hobi: "+hobi_nangis);
            return false;
        }
    </script>
</body>
</html>