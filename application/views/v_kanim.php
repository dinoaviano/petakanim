
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
    <title>Data Sebaran Kantor Imigrasi</title>
    <link rel="icon" type="image/png" href="http://www.imigrasi.go.id/templates/dirjen_imigrasi/favicon.ico">
    <!-- Bagian css -->
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/ilmudetil.css"> -->
    <link rel="stylesheet" href="assets/ammap/ammap.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/OrgChart-master/demo/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/OrgChart-master/demo/css/jquery.orgchart.css">
    <link rel="stylesheet" href="assets/OrgChart-master/demo/css/style.css">

    <script src="assets/js/jquery-1.10.1.min.js"></script>
    <script src="assets/ammap/ammap.js" type="text/javascript"></script>
    <script src="assets/ammap/maps/js/indonesiaLow.js" type="text/javascript"></script>
    <script src="assets/ammap/maps/js/indonesiaHigh.js" type="text/javascript"></script>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script src="assets/OrgChart-master/demo/js/jquery.min.js"></script>
    <script src="assets/OrgChart-master/dist/js/jquery.orgchart.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
    <!-- <script src="assets/js/script.js"></script> -->
    <style>
    /*#container {
        height: 500px; 
        max-width: 1366px; 
        margin: 0 auto; 
    }*/
    html,body {
      font-family: 'Roboto';
      font-size: 12px;
      width: 100%;
      height: 100%;
      margin: 0px;
    }

    #chartdiv {
      width: 110%;
      height:110%;
    }

    #info {
      padding: 10px;
      width: 90%;
      background-color: #dedede;
    }
    #info p {
      margin: 5px;
    }
    text{
        fill:black;
    }
    #mapdiv{
        margin-top:-30%;
        width: 100%;
        height: 80%;
    }
    .navbar-header img{
      height: 70pt;
      padding: 10pt 10pt 0 10pt;
      float: left;
      /*margin-bottom: -20pt;*/
    }
    #txt{
      color:white;
      font-family: Roboto;
      width: 200%;
    }
    .ammapDescriptionWindow {
      min-width: 500pt;
      max-height: 250pt;
      margin-left:-300pt;
      background-color: #ccc;
      padding: 15%;
      border-radius: 5px;
      font-family: "Segoe UI";
      opacity: 0.95;
      overflow: auto;
      font-size: 12pt;
      border: 2px solid white;
      padding: 10px;
      border-radius: 25px;
      color:black;
    }
    .ammapDescriptionTitle {
      font-weight: bold;
      font-size: 12px;
      margin-bottom: 10px;
    }
    #imgBagan{
      width: 80%;
    }

    </style>
    <script src="assets/js/highmaps.js"></script>
    <script src="assets/js/id-all.js"></script>
    <script src="assets/js/exporting.js"></script>     
</head>
<body background="https://i.pinimg.com/originals/1e/92/c9/1e92c955f5c201bfeef900517617c163.jpg">
      <div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <br>
                <img src="<?php echo base_url('assets/img/kemenkumham.jpg');?>"/>
                 <img src="<?php echo base_url('assets/img/imi.jpg');?>"/>
                 <div id="txt">
                   <span style="font-size: 24pt">SEBARAN KANTOR IMIGRASI SELURUH INDONESIA</span>
                   <br>
                   DIREKTORAT JENDERAL IMIGRASI
                   <br>
                   KEMENTERIAN HUKUM DAN HAM REPUBLIK INDONESIA
                 </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#"/></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      </div> <!-- /row -->
      
  <div id="mapdiv"></div>
  <script>

    var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
    var starSVG = "M20,7.244 L12.809,6.627 L10,0 L7.191,6.627 L0,7.244 L5.455,11.971 L3.82,19 L10,15.272 L16.18,19 L14.545,11.971 L20,7.244 L20,7.244 Z M10,13.396 L6.237,15.666 L7.233,11.385 L3.91,8.507 L8.29,8.131 L10,4.095 L11.71,8.131 L16.09,8.507 L12.768,11.385 L13.764,15.666 L10,13.396 L10,13.396 Z";
    var bagan = "<img id='imgBagan' src='assets/bagan/";
    var map = AmCharts.makeChart( "mapdiv", {
      /**
       * this tells amCharts it's a map
       */
      "type": "map",
      "balloon": {
        "textAlign": "left",
        "borderColor":"red"
      },
      /**
       * create data provider object
       * map property is usually the same as the name of the map file.
       * getAreasFromMap indicates that amMap should read all the areas available
       * in the map data and treat them as they are included in your data provider.
       * in case you don't set it to true, all the areas except listed in data
       * provider will be treated as unlisted.
       */
      "dataProvider": {
        "map": "indonesiaHigh",
        "areas": [
            {
              "id": "TL",
              "alpha": 0,
              "mouseEnabled": false
            },{
              "id": "MY-12",
              "alpha": 0,
              "mouseEnabled": false
            },{
              "id": "MY-13",
              "alpha": 0,
              "mouseEnabled": false
            },{
              "id": "BN",
              "alpha": 0,
              "mouseEnabled": false
            },{
                id: "ID-AC",
                customData: "<b>Provinsi Aceh</b><br>Kantor Imigrasi Kelas I BANDA ACEH<br>Kantor Imigrasi Kelas II LANGSA<br>Kantor Imigrasi Kelas II LHOKSEUMAWE<br>Kantor Imigrasi Kelas II MEULABOH<br>Kantor Imigrasi Kelas II SABANG<br>Kantor Imigrasi Kelas III TAKENGON"
            },{
               id: "ID-SU",
                customData: "<b>Provinsi Sumatera Utara</b><br>Kantor Imigrasi Kelas I Khusus MEDAN<br>Kantor Imigrasi Kelas I POLONIA<br>Kantor Imigrasi Kelas II BELAWAN<br>Kantor Imigrasi Kelas II PEMATANG SIANTAR<br>Kantor Imigrasi Kelas II SIBOLGA<br>Kantor Imigrasi Kelas III TG. BALAI ASAHAN" 
            },{
               id: "ID-RI",
                customData: "<b>Provinsi RIAU</b><br>Kantor Imigrasi Kelas I PEKANBARU<br>Kantor Imigrasi Kelas II BAGAN SIAPI API<br>Kantor Imigrasi Kelas II BENGKALIS<br>Kantor Imigrasi Kelas II DUMAI<br>Kantor Imigrasi Kelas II SELAT PANJANG<br>Kantor Imigrasi Kelas II SIAK<br>Kantor Imigrasi Kelas II TEMBILAHAN" 
            },{
               id: "ID-SB",
                customData: "<b>Provinsi SUMATERA BARAT</b><br>Kantor Imigrasi Kelas I PADANG<br>Kantor Imigrasi Kelas II AGAM"
            },{
               id: "ID-JA",
                customData: "<b>Provinsi JAMBI</b><br>Kantor Imigrasi Kelas I JAMBI<br>Kantor Imigrasi Kelas II KUALA TUNGKAL<br>Kantor Imigrasi Kelas III KERINCI"
            },{
               id: "ID-SS",
                customData: "<b>Provinsi SUMATERA SELATAN</b><br>Kantor Imigrasi Kelas I PALEMBANG<br>Kantor Imigrasi Kelas II MUARA ENIM"
            },{
               id: "ID-BE",
                customData: "<b>Provinsi BENGKULU</b><br>Kantor Imigrasi Kelas I BENGKULU"
            },{
               id: "ID-BB",
                customData: "<b>Provinsi BANGKA BELITUNG</b><br>Kantor Imigrasi Kelas I PANGKAL PINANG<br>Kantor Imigrasi Kelas II TANJUNG PANDAN"
            },{
               id: "ID-KR",
                customData: "<b>Provinsi KEPULAUAN RIAU</b><br>Kantor Imigrasi Kelas I KHUSUS BATAM<br>Kantor Imigrasi Kelas I TANJUNG PINANG<br>Kantor Imigrasi Kelas II BELAKANG PADANG<br>Kantor Imigrasi Kelas II RANAI<br>Kantor Imigrasi Kelas II TANJUNG UBAN<br>Kantor Imigrasi Kelas II TG. BALAI KARIMUN<br>Kantor Imigrasi Kelas III DABO SINGKEP<br>Kantor Imigrasi Kelas III TAREMPA"
            },{
               id: "ID-LA",
                customData: "<b>Provinsi LAMPUNG</b><br>Kantor Imigrasi Kelas I BANDAR LAMPUNG<br>Kantor Imigrasi Kelas III KALIANDA<br>Kantor Imigrasi Kelas III KOTABUMI"
            },{
               id: "ID-BT",
                customData: "<b>Provinsi BANTEN</b><br>Kantor Imigrasi Kelas I SERANG<br>Kantor Imigrasi Kelas I TANGERANG<br>Kantor Imigrasi Kelas II CILEGON"
            },{
               id: "ID-JK",
                customData: "<b>Provinsi DKI JAKARTA</b><br>Kantor Imigrasi Kelas I KHUSUS SOEKARNO HATTA<br>Kantor Imigrasi Kelas I KHUSUS JAKARTA BARAT<br>Kantor Imigrasi Kelas I KHUSUS JAKARTA SELATAN<br>Kantor Imigrasi Kelas I JAKARTA PUSAT<br>Kantor Imigrasi Kelas I JAKARTA TIMUR<br>Kantor Imigrasi Kelas I JAKARTA UTARA<br>Kantor Imigrasi Kelas I TANJUNG PRIOK"
            },{
               id: "ID-JB",
                customData: "<b>Provinsi JAWA BARAT</b><br>Kantor Imigrasi Kelas I BANDUNG<br>Kantor Imigrasi Kelas I BOGOR<br>Kantor Imigrasi Kelas II CIREBON<br>Kantor Imigrasi Kelas II DEPOK<br>Kantor Imigrasi Kelas II KARAWANG<br>Kantor Imigrasi Kelas II SUKABUMI<br>Kantor Imigrasi Kelas II TASIKMALAYA<br>Kantor Imigrasi Kelas II BEKASI"
            },{
               id: "ID-JT",
                customData: "<b>Provinsi JAWA TENGAH</b><br>Kantor Imigrasi Kelas I SEMARANG<br>Kantor Imigrasi Kelas I SURAKARTA<br>Kantor Imigrasi Kelas II CILACAP<br>Kantor Imigrasi Kelas II PATI<br>Kantor Imigrasi Kelas II PEMALANG<br>Kantor Imigrasi Kelas II WONOSOBO"
            },{
               id: "ID-YO",
                customData: "<b>Provinsi Daerah Istimewa YOGYAKARTA</b><br>Kantor Imigrasi Kelas I YOGYAKARTA"
            },{
               id: "ID-JI",
                customData: "<b>Provinsi JAWA TIMUR</b><br>Kantor Imigrasi Kelas I Khusus SURABAYA<br>Kantor Imigrasi Kelas I MALANG<br>Kantor Imigrasi Kelas I TANJUNG PERAK<br>Kantor Imigrasi Kelas II BLITAR<br>Kantor Imigrasi Kelas II JEMBER<br>Kantor Imigrasi Kelas II MADIUN<br>Kantor Imigrasi Kelas III KEDIRI<br>Kantor Imigrasi Kelas III PAMEKASAN"
            },{
               id: "ID-BA",
                customData: "<b>Provinsi BALI</b><br>Kantor Imigrasi Kelas I Khusus NGURAH RAI<br>Kantor Imigrasi Kelas I DENPASAR<br>Kantor Imigrasi Kelas II SINGARAJA"
            },{
               id: "ID-NB",
                customData: "<b>Provinsi NUSA TENGGARA BARAT</b><br>Kantor Imigrasi Kelas I MATARAM<br>Kantor Imigrasi Kelas II SUMBAWA BESAR<br>Kantor Imigrasi Kelas III BIMA"
            },{
               id: "ID-NT",
                customData: "<b>Provinsi NUSA TENGGARA TIMUR</b><br>Kantor Imigrasi Kelas I KUPANG<br>Kantor Imigrasi Kelas II ATAMBUA<br>Kantor Imigrasi Kelas II MAUMERE<br>Kantor Imigrasi Kelas II LABUAN BAJO"
            },{
               id: "ID-KB",
                customData: "<b>Provinsi KALIMANTAN BARAT</b><br>Kantor Imigrasi Kelas I PONTIANAK<br>Kantor Imigrasi Kelas II ENTIKONG<br>Kantor Imigrasi Kelas II SAMBAS<br>Kantor Imigrasi Kelas II SANGGAU<br>Kantor Imigrasi Kelas II SINGKAWANG<br>Kantor Imigrasi Kelas II PUTUSSIBAU"
            },{
               id: "ID-KI",
                customData: "<b>Provinsi KALIMANTAN TIMUR</b><br>Kantor Imigrasi Kelas I BALIKPAPAN<br>Kantor Imigrasi Kelas I SAMARINDA<br>Kantor Imigrasi Kelas II NUNUKAN<br>Kantor Imigrasi Kelas II TARAKAN<br>Kantor Imigrasi Kelas II TANJUNG REDEB"
            },{
               id: "ID-KU",
                customData: "<b>Provinsi KALIMANTAN Utara</b><br>Kantor Imigrasi Kelas II NUNUKAN<br>Kantor Imigrasi Kelas II TARAKAN"
            },{
               id: "ID-KS",
                customData: "<b>Provinsi KALIMANTAN SELATAN</b><br>Kantor Imigrasi Kelas I BANJARMASIN<br>Kantor Imigrasi Kelas II BATULICIN"
            },{
               id: "ID-KT",
                customData: "<b>Provinsi KALIMANTAN TENGAH</b><br>Kantor Imigrasi Kelas I PALANGKARAYA<br>Kantor Imigrasi Kelas II SAMPIT"
            },{
               id: "ID-GO",
                customData: "<b>Provinsi GORONTALO</b><br>Kantor Imigrasi Kelas I GORONTALO"
            },{
               id: "ID-SA",
                customData: "<b>Provinsi SULAWESI UTARA</b><br>Kantor Imigrasi Kelas I MANADO<br>Kantor Imigrasi Kelas II BITUNG<br>Kantor Imigrasi Kelas II TAHUNA<br>Kantor Imigrasi Kelas III KOTAMOBAGU"
            },{
               id: "ID-ST",
                customData: "<b>Provinsi SULAWESI TENGAH</b><br>Kantor Imigrasi Kelas I PALU<br>Kantor Imigrasi Kelas III BANGGAI"
            },{
               id: "ID-SR",
                customData: "<b>Provinsi SULAWESI BARAT</b><br>Kantor Imigrasi Kelas II MAMUJU<br>Kantor Imigrasi Kelas II POLEWALI MANDAR"
            },{
               id: "ID-SN",
                customData: "<b>Provinsi SULAWESI SELATAN</b><br>Kantor Imigrasi Kelas I MAKASSAR<br>Kantor Imigrasi Kelas II PARE PARE<br>Kantor Imigrasi Kelas III PALOPO"
            },{
               id: "ID-SG",
                customData: "<b>Provinsi SULAWESI TENGGARA</b><br>Kantor Imigrasi Kelas I KENDARI<br>Kantor Imigrasi Kelas III BAU-BAU<br>Kantor Imigrasi Kelas III WAKATOBI"
            },{
               id: "ID-MA",
                customData: "<b>Provinsi MALUKU</b><br>Kantor Imigrasi Kelas I AMBON<br>Kantor Imigrasi Kelas II TUAL"
            },{
               id: "ID-MU",
                customData: "<b>Provinsi MALUKU UTARA</b><br>Kantor Imigrasi Kelas I TERNATE<br>Kantor Imigrasi Kelas I TOBELO"
            },{
               id: "ID-PA",
                customData: "<b>Provinsi PAPUA</b><br>Kantor Imigrasi Kelas I JAYAPURA<br>Kantor Imigrasi Kelas I TOBELO<br>Kantor Imigrasi Kelas II BIAK<br>Kantor Imigrasi Kelas II MERAUKE<br>Kantor Imigrasi Kelas III TEMBAGA PURA"
            },{
               id: "ID-PB",
                customData: "<b>Provinsi PAPUA BARAT</b><br>Kantor Imigrasi Kelas II MANOKAWARI<br>Kantor Imigrasi Kelas II SORONG"
            }
        ],
        "images": [ 
            {
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nBanda Aceh",
              "latitude": 5.561513,
              "longitude": 95.333582,
              "title":"Kantor Imigrasi Kelas I\nBanda Aceh",
              "description":"<br>Jl. Tengku M. Daud Beureuh No. 82 Banda Aceh<br>Alamat Sementara: Jl. Mr. Mohd.Hasan No. 186 Batoh Banda Aceh<br>Telp.(0651)-23784<br>Faks.(0651)-23784<br>http://imigrasibandaaceh.org<br>kanim_bandaaceh@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nLANGSA",
              "latitude": 4.475383,
              "longitude": 97.959294,
              "title": "Kantor Imigrasi Kelas II\nLANGSA",
              "description":"Jl. Jend. A. Yani No. 2A Langsa Aceh Timur 24411<br>Telp.(0641)-424194<br>Faks.(0641)-424194<br>imigrasi_langsa@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nLHOKSEUMAWE",
              "label": "Kantor Imigrasi Kelas II\nLHOKSEUMAWE",
              "latitude": 5.177732,
              "longitude": 97.151988,
              "description":"Jl. Pelabuhan No. 5 Puenteut Lhokseumawe 24315<br>Telp.(0645)-43039<br>Faks.(0645)-46751<br>HP.085760002626<br>kanim_lhokseumawe@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nMEULABOH",
              "title": "Kantor Imigrasi Kelas II\nMEULABOH",
              "latitude": 4.134989,
              "longitude": 96.130419,
              "description":"JL. MERDEKA NO.4 MEULABOH KEL. PASAR ACEH, KEC. JOHAN PAHLAWAN, ACEH BARAT, NAD, 23613<br>Telp.(0655)-7551358<br>Faks.(0655)-7551578<br>HP.085270711079<br>kanim_meulaboh@imigrasi.go.id<br>kanim.meulaboh@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 5,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSABANG",
              "title": "Kantor Imigrasi Kelas II\nSABANG",
              "latitude": 5.893377,
              "longitude": 95.317473,
              "description":"Jl. Teuku Umar No. 10 Sabang 23511<br>Telp.(0652)-21343<br>Faks.(0652)-22833<br>HP.081219679064,081362925152<br>imigrasi_sabang@yahoo.co.id<br>http://facebok.com/imigrasisabang<br>twitter : @imigrasisabang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nTAKENGON",
              "title": "Kantor Imigrasi Kelas II\nTAKENGON",
              "latitude": 4.636354,
              "longitude": 96.853298,
              "description":"Jalan Sengeda No.131, Kebayakan<br>Telp.0643-8001104<br>Faks.0643-8001104<br>HP.085372999292<br>kanim_takengon@imigrasi.go.id<br>Fb : imigrasi.takengon"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I Khusus MEDAN",
              "title": "Kantor Imigrasi Kelas I Khusus MEDAN",
              "latitude": 3.591946,
              "longitude": 98.629163,
              "description":"JL. GATOT SUBROTO NO.268A MEDAN 20123<br>Telp.(061)8452112<br>Faks.(061)8455941<br>HP.08116187001 (informasi & pengaduan) - 08116187000 (SMS GATEWAY)<br>kanim_medan@imigrasi.go.id<br>medan.imigrasi.go.id<br>Twitter: @kanimsus_medan<br>Facebook: Kantor Imigrasi Medan"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I\nPOLONIA",
              "title": "\nKantor Imigrasi Kelas I\nPOLONIA",
              "latitude": 3.583781,
              "longitude": 98.679007,
              "description":"JL. MANGKUBUMI NO. 2 RT/RW. 001/009, KEL. AUR, KEC. MEDAN MAIMUN, MEDAN, SUMATERA UTARA 20151<br>Telp.(061)-4533117<br>Faks.(061)-4558488<br>HP.081269286037<br>kanim.polonia@yahoo.com<br>Twitter: @kanimpolonia<br>www.imigrasipolonia.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II BELAWAN",
              "title": "Kantor Imigrasi Kelas II BELAWAN",
              "latitude": 3.782510,
              "longitude": 98.682670,
              "description":"JL. SERMA HANAFIAH NO.1, KEL. BELAWAN I, KEC. MEDAN BELAWAN, MEDAN, SUMATERA UTARA 20411<br>Telp.(061)-6941008<br>Faks.(061)-6941754<br>HP.087869003061<br>kanim_belawan@imigrasi.go.id<br>kanimbelawan@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas II\nPEMATANG SIANTAR",
              "title": "\nKantor Imigrasi Kelas II\nPEMATANG SIANTAR",
              "latitude": 2.971506,
              "longitude": 99.073326,
              "description":"Jl. Raya Medan Km. 11,5 Pematang Siantar, 21154<br>Telp.(0622)-7439110<br>Faks.(0622)-7439111<br>HP.081362298762, email: kanimsiantar@yahoo.co.id<br>kanim_pematangsiantar@imigrasi.go.id<br>http://www.pematangsiantar.imigrasi.go.id/<br>kanim_pematangsiantar@imigrasi.go.id<br>Facebook: http://facebook.com/imigrasi.psiantar<br>twitter: @kanim_siantar"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSIBOLGA",
              "title": "Kantor Imigrasi Kelas II SIBOLGA",
              "latitude": 1.727740,
              "longitude": 98.800369,
              "description":"JL. SISINGAMANGARAJA NO. 477 LINGKUNGAN 3, KEL. AEK PAROMBUNAN, KEC.SIBOLGA SELATAN, SIBOLGA, SUMATERA UTARA, 22533<br>Faks.(0631)-22929<br>Telp.(0631)-21714<br>HP.081364649689,085361190407<br>imigrasi.sibolga@yahoo.co.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III TG. BALAI ASAHAN",
              "title": "Kantor Imigrasi Kelas III TG. BALAI ASAHAN",
              "latitude": 2.949423,
              "longitude": 99.776986,
              "description":"Jl. Jend. Sudirman Km 4,5 Tg. B. Asahan 21369<br>Telp.(0623)-92220, 92078<br>Faks.(0623)-92078<br>HP.085372626422<br>imigrasi-tanjungbalaiasahan.com<br>imigrasi.tanjungbalai@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nPEKANBARU",
              "title": "Kantor Imigrasi Kelas I\nPEKANBARU",
              "latitude": 0.521990,
              "longitude": 101.440784,
              "description":"JL. TERATAI NO. 87 RT/RW.02/02 KEL. PULAU KARAM, KEC. SUKAJADI, PEKANBARU, RIAU 28127<br>Telp.(0761)-21536<br>Faks.(0761)-40393<br>HP.081281720561<br>kanim_pekanbaru@imigrasi.go.id<br>kanimpku@yahoo.co.id<br>http://pekanbaru.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nBAGAN SIAPI API",
              "title": "Kantor Imigrasi Kelas II\nBAGAN SIAPI API",
              "latitude": 2.156502,
              "longitude": 100.811448,
              "description":"JL. GEDUNG NASIONAL NO.78 RT/RW.017/005 KEL.BAGAN BARAT, KEC.BANGKO, BAGAN SIAPI-API, RIAU, 28912<br>Telp.(0767)-21472<br>Faks.(0767)-21160<br>HP.085208755580<br>kanim_bagansiapiapi@yahoo.com<br>kanim.bagansiapiapi@gmail.com<br>http://bagansiapiapi.imigrasi.go.id/"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nBENGKALIS",
              "title": "Kantor Imigrasi Kelas II\nBENGKALIS",
              "latitude": 1.469339,
              "longitude": 102.110149,
              "description":"Jl. Jend. A. Yani No. 04 Bengkalis 28712 (Sementara Rehab Jl. Hang Tuah Bengkalis (fax. 0766-22697)<br>Telp.(0766)-21021; 23102<br>Faks.(0766)-21022<br>HP.081277975388<br>www.imigrasibengkalis.org<br>kanim.bengkalis@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II DUMAI",
              "title": "Kantor Imigrasi Kelas II DUMAI",
              "latitude": 1.681993,
              "longitude": 101.455844,
              "description":"JL. YOS SUDARSO NO.2 RT/RW.003 KEL. BULUH ASAP, KEC. DUMAI TIMUR, DUMAI, RIAU, 28814<br>Telp.(0765)-31280, 33845<br>Faks.(0765)-438112<br>HP.082385706262 (INFORMASI & PENGADUAN)<br>kanim_dumai@imigrasi.go.id<br>humas.imigrasidumai@gmail.com<br>kanimdmi@yahoo.co.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas II\nSELAT PANJANG",
              "title": "\nKantor Imigrasi Kelas II\nSELAT PANJANG",
              "latitude": 1.012643,
              "longitude": 102.709314,
              "description":"Jl. Merdeka No. 150 Selat Panjang 28753<br>Telp.(0763)-31018<br>Faks.(0763)-33818<br>HP.081276051859<br>kanim.selatpanjang@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSIAK",
              "title": "Kantor Imigrasi Kelas II\nSIAK",
              "latitude": 0.801579,
              "longitude": 102.023911,
              "description":"Komplek Perkantoran Tanjung Agung Desa Sei. Mempura Kec.Mempura, Kab.Siak, Riau<br>Telp.(0764)-8001032<br>Faks.(0764)-8001033<br>HP.08127033309<br>kanim2siak@yahoo.com<br>siak.imigrasi.go.id<br>Facebook: imigrasisiak<br>Twitter @imigrasisiak"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nTEMBILAHAN",
              "title": "Kantor Imigrasi Kelas II\nTEMBILAHAN",
              "latitude": -0.321677,
              "longitude": 103.163616,
              "description":"JL. PRAJA SAKTI NO.03 RT/RW.001/005 KEL.TEMBILAHAN HILIR, KEC. TEMBILAHAN, INDRAGIRI HILIR, RIAU, 29213<br>Telp.(0768)-21074; 23969<br>Faks.(0768)-23969; 21700<br>HP.08122288208<br>kanim_tembilahan@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nPADANG",
              "title": "Kantor Imigrasi Kelas I\nPADANG",
              "latitude": -0.915414,
              "longitude": 100.359336,
              "description":"JL. KHATIB SULAIMAN NO.50 RT/RW. 003/007, KEL. LOLONG BELATI, KEC. PADANG UTARA, PADANG, SUMATERA BARAT, 25135<br>Telp.(0751)7055113<br>Faks.(0751)-41900<br>Hotline: (0751) 9762968<br>kanim_padang@imigrasi.go.id<br>padangkanim@yahoo.co.id<br>www.imigrasipadang.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nAGAM",
              "title": "Kantor Imigrasi Kelas II\nAGAM",
              "latitude": -0.287852,
              "longitude": 100.446344,
              "description":"JL. RAYA BUKITTINGGI - PAYAKUMBUH KM.9 KOTO HILALANG KEC. AMPEK ANGKEK KAB. AGAM, BUKIT TINGGI, SUMATERA BARAT<br>Telp.(0752)-628269<br>Faks.(0752)-627598<br>bukittinggi_kanim@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nJAMBI",
              "title": "Kantor Imigrasi Kelas I\nJAMBI",
              "latitude": -1.618717,
              "longitude": 103.574744,
              "description":"JL. ARIEF RAHMAN HAKIM NO.63 RT/RW.28/07, KEL. SIMPANG IV SIPIN, KEC. TELANAIPURA, JAMBI 36124<br>Telp.(0741)-62033, 62214<br>Faks.(0741)-61383<br>HP. 08117431888<br>kanim.jambi@imigrasi.go.id<br>jambi.imigrasi@yahoo.com<br>www.kanimjambi.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nKUALA TUNGKAL",
              "title": "Kantor Imigrasi Kelas II\nKUALA TUNGKAL",
              "latitude": -0.816311,
              "longitude": 103.482241,
              "description":"Jl. Delata Pura Kuala Tungkal, 36551<br>Telp.(0742)-322757<br>Faks.(0742)-21468<br>HP.081367055411<br>imigrasi_tungkal@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nKERINCI",
              "title": "Kantor Imigrasi Kelas II\nKERINCI",
              "latitude": -2.119888,
              "longitude": 101.520199,
              "description":"Jalan Lintas Sungai Penuh, Desa Sanggaran Agung, Kabupaten Kerinci, Kecamatan Danau Kerinci, Kode Pos 37172"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nPALEMBANG",
              "title": "Kantor Imigrasi Kelas I\nPALEMBANG",
              "latitude": -3.012052,
              "longitude": 104.774096,
              "description":"JL. PANGERAN RATU NO.1 RT/RW.015/005 KEL. ULU, KEC. SEBERANG ULU I, PALEMBANG, SUMATERA SELATAN 30252<br>Telp.(0711)-518309<br>Faks.(0711)-519135<br>HP.085264481569<br>imigrasipalembang@yahoo.co.id<br>http://palembang.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nMUARA ENIM",
              "title": "Kantor Imigrasi Kelas II\nMUARA ENIM",
              "latitude": -3.645302,
              "longitude": 103.776941,
              "description":"Jl. Dr. A.K. Ghani Muara Enim<br>Telp.(0734)-421148, 421555<br>Faks.(0734)-421666421148<br>HP.081311347664"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nBENGKULU",
              "title": "Kantor Imigrasi Kelas I\nBENGKULU",
              "latitude": -3.821328,
              "longitude": 102.285515,
              "description":"JL. PEMBANGUNAN NO.23 RT/RW. 08/ 03 KEL.PADANG HARAPAN, KEC.GADING CEMPAKA, BENGKULU 38225<br>Telp.(0736)-21675, 27979<br>Faks.(0736)-341246<br>kanim_bengkulu@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nPANGKAL PINANG",
              "title": "Kantor Imigrasi Kelas I\nPANGKAL PINANG",
              "latitude": -2.092820,
              "longitude": 106.111253,
              "description":"JL. JEND. SUDIRMAN KM. 03, KEL. SELINDUNG BARU, KEC. PANGKALPINANG, KEP. BANGKA BELITUNG 33117<br>Telp.(0717)-424700; 421774<br>Faks.(0717)-424700<br>HP.081995653745<br>kanim_pangkalpinang@imigrasi.go.id<br>pangkalpinang.imigrasi.go.id<br>Twitter: @KanimPgkpinang<br>Facebook: Imigrasi Pangkal Pinang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nTANJUNG PANDAN",
              "title": "Kantor Imigrasi Kelas II\nTANJUNG PANDAN",
              "latitude": -2.746776,
              "longitude": 107.687451,
              "description":"Jl. Jend. Sudirman Km. 6,5 Tg. Pandan 33413<br>Telp.(0719)-22268<br>Faks.(0719)-21814, 22268<br>HP.087899564229"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I KHUSUS BATAM",
              "title": "\nKantor Imigrasi Kelas I KHUSUS BATAM",
              "latitude": 1.127643,
              "longitude": 104.055905,
              "description":"JL. ENGKU PUTRI NO. 3 BATAM CENTRE RT/RW. 02/08, KEL. TELUK TERING, KEC. NONGSA, BATAM, KEPULAUAN RIAU, 29400<br>Telp.(0778)-462068, 462069<br>Faks.(0778)-462070, 462004<br>HP. 081378087020 SMS ANTRIAN: 08127044443 (Cek Antrian)<br>Twitter:@imigrasibatam<br>Facebook: Kantor Imigrasi Batam<br>kanimbatam@yahoo.co.id<br>http://batam.imigrasi.go.Id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I\nTANJUNG PINANG",
              "title": "\nKantor Imigrasi Kelas I\nTANJUNG PINANG",
              "latitude": 0.908804,
              "longitude": 104.467331,
              "description":"JL. JENDERAL A.YANI NO. 31 TANJUNGPINANG, KEPULAUAN RIAU, 29124<br>Telp.(0771)-21073<br>Faks.(0771)-21073<br>HP.081372309393<br>kanim_tgpinang@imigrasi.go.id<br>imigrasi_tanjungpinang@yahoo.co.id<br>imigrasi.tanjungpinang@gmail.com<br>Twitter @kanim_tgpinang<br>http://tanjungpinang.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II BELAKANG PADANG",
              "title": "Kantor Imigrasi Kelas II BELAKANG PADANG",
              "latitude": 1.152916,
              "longitude": 103.893719,
              "description":"JL. HANG TUAH NO.1 KEL.TANJUNG SARI, KEC.BELAKANG PADANG, BATAM, KEPULAUAN RIAU, 29411<br>Telp.(0778)-312690<br>Faks.(0778)-312419<br>HP.081277976168<br>kanim_belakangpadang@imigrasi.go.id<br>belakangpadang.imigrasi.go.id<br>Twitter : @kanim_blkpadang<br>Facebook:  www.facebook.com/imigrasibelakangpadang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nRANAI",
              "title": "Kantor Imigrasi Kelas II\nRANAI",
              "latitude": 3.942412,
              "longitude": 108.389327,
              "description":"JL. DATUK KAYU WAN MOHD BENTENG, RANAI NATUNA, KEPULAUAN RIAU<br>Telp.(0773)-31366<br>Faks.(0773)-31015<br>kanim_ranai@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas II TANJUNG UBAN",
              "title": "\nKantor Imigrasi Kelas II TANJUNG UBAN",
              "latitude": 1.061458,
              "longitude": 104.239378,
              "description":"Jl. Indunsuri No. 9 Tg. Uban 29152<br>Telp.(0771)-81927, 81460<br>Faks.(0771)-81760<br>imigrasitanjunguban.com<br>www.tanjunguban.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nTG. BALAI KARIMUN",
              "title": "Kantor Imigrasi Kelas II\nTG. BALAI KARIMUN",
              "latitude": 0.997937,
              "longitude": 103.414400,
              "description":"JL. JEND. A. YANI NO. 105 RT/RW. 01/04, KEL. SUNGAI LAKAM, TANJUNG BALAI KARIMUN, KEPULAUAN RIAU, 29631<br>Telp.(0777)-22273<br>Faks.(0777)-21230<br>HP.08117098484<br>kanim_tgbalaikarimun@imigrasi.go.id, pengaduan.kanimtbk@gmail.com<br>http://tanjungbalaikarimun.imigrasi.go.id<br>facebook : kantor imigrasi kelas II Tg. Balai Karimun<br>Twitter : @kanim_karimun"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III\nDABO SINGKEP",
              "title": "Kantor Imigrasi Kelas III\nDABO SINGKEP",
              "latitude": -0.485918,
              "longitude": 104.558664,
              "description":"JL. KARTINI, DABO SINGKEP-LINGGA, DABO SINGKEP, KEPULAUAN RIAU<br>Telp.(0776)-21823<br>Faks.(0776)-21182<br>kanim_dabosingkep@imigrasi.go.id"
            },{
               "groupId": "minZoom-2",
               "svgPath": targetSVG,
               "zoomLevel": 4,
               "scale": 0.5,
               "label": "Kantor Imigrasi Kelas III TAREMPA",
               "title": "Kantor Imigrasi Kelas III TAREMPA",
               "latitude": 3.221141,
               "longitude": 106.223897,
               "description":"JL. KARTINI NO. 51 TAREMPA, KEPULAUAN RIAU 29791<br>Telp.(0772)-31028<br>Faks.(0772)-31028<br>HP.082283908326<br>kanim_tarempa@imigrasi.go.id<br>kakanim.tarempa@kemenkumham.go.id<br>www.tarempa.imigrasi.go.id<br>Fb : Kanim Tarempa<br>Twitter : @kanim_tarempa"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I BANDAR LAMPUNG",
              "title": "Kantor Imigrasi Kelas I BANDAR LAMPUNG",
              "latitude": -5.435453,
              "longitude": 105.258701,
              "description":"JL. HJ. HANIAH NO.3 CUT MUTIA RT/RW.021/01 KEL. GULAK GALIK, KEC. TELUK BETUNG UTARA, BANDAR LAMPUNG, LAMPUNG 35214<br>Telp.(0721)- 482828, 482607<br>Faks.(0721)-482607<br>HP.08232371113298<br>kanimbdl@gmail.com<br>twitter: @imigrasilampung"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III KALIANDA",
              "title": "Kantor Imigrasi Kelas III KALIANDA",
              "latitude": -5.685431,
              "longitude": 105.580983,
              "description":"JL. JALAN RADIN INTAN, KALIANDA, KABUPATEN LAMPUNG SELATAN<br>Telp.(0727)-3330003<br>Faks.(0727)-3330004 / 3330005<br><br>imigrasikalianda@yahoo.com<br>www.kalianda.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III KOTABUMI",
              "title": "Kantor Imigrasi Kelas III KOTABUMI",
              "latitude": -4.849324,
              "longitude": 104.909106,
              "description":"JL. TJOKOEL SOEBROTO NO.75 KELAPA TUJUH KOTABUMI<br>Telp.(0724) 21467<br>Faks.(0724) 21467<br>HP.082184890547<br>www.imigrasi-kotabumi.com<br>imigrasi.kotabumi@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I SERANG",
              "title": "Kantor Imigrasi Kelas I SERANG",
              "latitude": -6.106261,
              "longitude": 106.175647,
              "description":"JL. WARUNG JAUD NO. 82 RT/ RW.03/ 11 KEL.KALIGANDU, KEC.SERANG, SERANG, BANTEN 42151<br>Telp.(0254)-209489<br>Faks.(0254)-209440<br>HP.087771200744<br>imigrasi_serang@yahoo.co.id<br>kanim_serang@imigrasi.go.id<br>www.serang.imigrasi.go.id<br>Facebook: imigrasi_serang<br>Twitter: @kanim_serang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I\nTANGERANG",
              "title": "\nKantor Imigrasi Kelas I\nTANGERANG",
              "latitude": -6.182340,
              "longitude": 106.638500,
              "description":"JL. TAMAN MAKAM PAHLAWAN TARUNA NO.10 RT/RW.05/12 KEL.SUKASARI, KEC.TANGERANG, TANGERANG, BANTEN, 15111<br>HOTLINE: (021) 55732580; SMS CENTER: 08118119000<br>Telp.(021)-55790871/72<br>Faks.(021)-55771874<br>HP.081316555144<br>kanim_tanggerang@imigrasi.go.id<br>imigrasitangerang@yahoo.co.id<br>tangerang.imigrasi.go.id<br>twitter: @kanim_tangerang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II CILEGON",
              "title": "Kantor Imigrasi Kelas II CILEGON",
              "latitude": -5.977290,
              "longitude": 106.009000,
              "description":"JL. RAYA MERAK KM. 116 RT/RW.001/002 KEL.RAWA ARUM, KEC.GROGOL, CILEGON, BANTEN, 42436<br>Telp.(0254)-574033<br>Faks.(0254)-572978<br>HP.085945234947<br>kanim.cilegon@gmail.com<br>http://www.imigrasicilegon.or.id/"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I KHUSUS\nSOEKARNO HATTA",
              "title": "Kantor Imigrasi\nKelas I KHUSUS\nSOEKARNO HATTA",
              "latitude": -6.124581,
              "longitude": 106.657269,
              "description":"JL. BANDAR UDARA INTERNASIONAL SOEKARNO HATTA, KEL.PAJANG, KEC.BENDA, TANGERANG, BANTEN, 19110<br>Telp.(021)-5507185 (INFORMASI & PENGADUAN)<br>5507231-32<br>Faks.(021)-5507187 (TU), 5507231<br>HP.087809786678; SMS GATEWAY: 081219191847<br>kanim_soetta@yahoo.com<br>kanim_soekarnohatta@imigrasi.go.id<br>pengaduan_kanimsoetta@yahoo.com<br>soekarnohatta.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nJAKARTA UTARA",
              "title": "Kantor Imigrasi Kelas I\nJAKARTA UTARA",
              "latitude": -6.145282,
              "longitude": 106.893951,
              "description":"JL. BOULEVARD ARTHA GADING BLOK A NO. 5-7, 22-24, KEL.KELAPA GADING BARAT, KEC.KELAPA GADING, JAKARTA UTARA, DKI JAKARTA, 14240<br>Telp.(021)-45850345<br>Faks.(021)-45847160<br>082129294111<br>kanim.jakut@gmail.com; kanimjakut.dki@gmail.com; kanim_jakut@imigrasi.go.id<br>Twitter: @imigrasi_jakut<br>facebook: imigrasi klas I Jakarta Utara<br>http://jakartautara.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I KHUSUS JAKARTA BARAT",
              "latitude": -6.133754,
              "longitude": 106.813733,
              "description":"JL. POS KOTA NO.4 RT/RW.004/006 KEL.PINANGSIA, KEC.TAMAN SARI, JAKARTA BARAT, DKI JAKARTA, 11110<br>Telp.(021)-6904845, 6904795<br>Faks.(021)-6930544<br>HP.082139439599<br>kanim-jakbar@imigrasi.go.id<br>http://jakartabarat.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I\nJAKARTA PUSAT",
              "latitude": -6.153937,
              "longitude": 106.842244,
              "description":"JL. MERPATI BLOK B 12 NO.3, KEL.GUNUNG SAHARI SELATAN, KEC.KEMAYORAN, JAKARTA PUSAT, DKI JAKARTA, 10720<br>Telp.(021)-6541209, 6541211 (Lts), 6541214 (Was), 6541213 (tu)<br>Faks.(021)-6541210<br>HP.08211233884 (informasi & pengaduan) ; 082111087271 (SMS CENTER)08211233884 (Informasi & Pengaduan)<br>kanim_jakpus@imigrasi.go.id<br>kanimjakpus.dki@gmail.com<br>http://jakartapusat.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,              
              "label": "Kantor Imigrasi Kelas I JAKARTA TIMUR",
              "title": "Kantor Imigrasi Kelas I JAKARTA TIMUR",
              "latitude": -6.215247,
              "longitude": 106.881759,
              "description":"JL. BEKASI TIMUR RAYA NO. 169 RT/RW. 08/14 KEL.CIPINANG BESAR UTARA, KEC.JATINEGARA, JAKARTA TIMUR, DKI JAKARTA 13410<br>Telp.(021)-8509104-05; 8503896<br>Faks.(021)-8509105; 8503896<br><br>kanimjajc@yahoo.co.id<br>jakartatimur.imigrasi.go.id<br>Facebook: Kantor Imigrasi Jakarta Timur<br>Twitter: @imigrasi_jaktim"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I KHUSUS\nJAKARTA SELATAN",
              "latitude": -6.256544,
              "longitude": 106.827555,
              "description":"JL. WARUNG BUNCIT RAYA NO.207 RT/RW.001/001 KEL.DUREN TIGA, KEC.PANCORAN, JAKARTA SELATAN, DKI JAKARTA, 12760<br>Telp.(021)79170912, 79170910<br>Faks.(021)-79170907,79170910<br>HP.081319066600<br>kanim_jaksel@imigrasi.go.id<br>http://jakartaselatan.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I TANJUNG PRIOK",
              "title": "Kantor Imigrasi Kelas I TANJUNG PRIOK",
              "latitude": -6.112964,
              "longitude": 106.883671,
              "description":"JL. MELATI 124 A RT/RW. 001/012 KEL.RAWABADAK UTARA, KEC.KOJA, JAKARTA UTARA, DKI JAKARTA, 14230<br>Telp.(021)-43934909<br>Faks.(021)-4352253<br>HP.081285311116<br>Twitter:@kanimpriok<br>kanim.tgpriok.408912@gmail.com<br>kanim_tgpriok@imigrasi.go.id<br>www.tanjungpriok.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nBANDUNG",
              "title": "Kantor Imigrasi Kelas I\nBANDUNG",
              "latitude": -6.899146,
              "longitude": 107.631588,
              "description":"JL. SURAPATI NO.82 RT/RW.09/06 KEL.CIHAURGEULIS, KEC.CIBEUNYING, BANDUNG, JAWA BARAT, 40122<br>Tlp.(022)-7272081, 7563439<br>Faks.(022)-7275294<br>HP.082127392666<br>kanim_bandung@imigrasi.go.id<br>kanim_bandung82@imigrasi.go.id<br><br>http://bandung.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nBOGOR",
              "title": "Kantor Imigrasi Kelas I\nBOGOR",
              "latitude": -6.570192,
              "longitude": 106.803978,
              "description":"Jl. Jend. A. Yani No. 65 Bogor 16161<br>HOTLINE: (0251) 8383275 Telp.(0251)-8338074, 8332870<br>Fax.(0251)-332870<br>kanim_bogor@imigrasi.go.id<br>www.bogor.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II CIREBON",
              "title": "Kantor Imigrasi Kelas II CIREBON",
              "latitude": -6.724869,
              "longitude": 108.521189,
              "description":"JL. SULTAN AGENG TIRTAYASA NO. 51 RT/RW.03/04 KEL.KEDUNGDAWA, KEC.KEDAWUNG, CIREBON, JAWA BARAT, 45153<br>Telp.(0231)-488282<br>Faks.(0231)-488284 - 85<br>HP.082320009000 (SMS GATEWAY); 082111012099<br>kanim_cirebon@imigrasi.go.id<br>fosarkim.kanimcirebon@yahoo.com<br>http://www.cirebon.imigrasi.go.id<br>Twitter: @kanim_cirebon<br>Facebook: kantor imigrasi cirebon"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nDEPOK",
              "title": "Kantor Imigrasi Kelas II\nDEPOK",
              "latitude": -6.424599,
              "longitude": 106.827665,
              "description":"JL. BOULEVARD RAYA, KOMP. PERKANTORAN PEMDA DEPOK, GRAND DEPOK CITY<br>Telp.(021)-77820580Faks.(021)-77820563<br>www.depok.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II KARAWANG",
              "title": "Kantor Imigrasi Kelas II KARAWANG",
              "latitude": -6.301133,
              "longitude": 107.302938,
              "description":"Jl. Ahmad Yani No.18, Karawang 41312<br>Telp.(0267)-400725 - 727<br>Faks.(0267)-400726<br>HP.085770852111 (informasi & pengaduan; SMS CENTER : 08111018171<br>kanim_karawang@imigrasi.go.id<br>kanim2karawang@gmail.com<br>http://karawang.imigrasi.go.id/<br>Facebook: Kanim Karawang<br>Twitter:@imigrasikarawang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSUKABUMI",
              "title": "Kantor Imigrasi Kelas II\nSUKABUMI",
              "latitude": -6.950984,
              "longitude": 106.926278,
              "description":"JL. LINGKAR SELATAN NO.7 RT/RW.04/01 KEL.SUDAJAYAHILIR, KEC.BAROS, SUKABUMI, JAWA BARAT, 43161<br>Telp.(0266)-243900<br>Faks.(0266)-243899<br>HP.08176647798<br>kanim_sukabumi@imigrasi.go.id<br>http://www.sukabumi.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nTASIKMALAYA",
              "title": "Kantor Imigrasi Kelas II\nTASIKMALAYA",
              "latitude": -7.303127,
              "longitude": 108.194110,
              "description":"JL. LETNAN HARUN, KOTA TASIKMALAYA 46151<br>Telp.(0265)-346144<br>Faks.(0265)-346430<br>HP.085318176696<br>pengaduankanimtasikmalaya@gmail.com<br>imigrasitasikmalaya.com<br>twitter : @imigrasitasik"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II BEKASI",
              "title": "Kantor Imigrasi Kelas II BEKASI",
              "latitude": -6.236892,
              "longitude": 106.991156,
              "description":"KOMPLEK GOR BEKASI JL. A. YANI NO. 2 KEL.KAYURINGIN JAYA, KEC.BEKASI BARAT, BEKASI, JAWA BARAT<br>Telp.(021)-88968018<br>Faks.(021)-88968018<br>HP.081380005977<br>kanimbekasi@gmail.com<br>www.imigrasibekasi.com<br>twitter : Kanim Bekasi @kanimbekasi"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nSEMARANG",
              "title": "Kantor Imigrasi Kelas I\nSEMARANG",
              "latitude": -6.988160,
              "longitude": 110.369644,
              "description":"JL. SILIWANGI NO.514 KRAPYAK RT/RW.01/03 KEL. KEMBANG ARUM, KEC. SEMARANG BARAT, SEMARANG, JAWA TENGAH 50148<br>Telp.(024)-7626365; 7623144<br>Faks.(024)-7607461; 7623145; HP.08112785588<br>kanim_semarang@imigrasi.go.id<br>kanim_semarang@yahoo.com<br>www.semarang.imigrasi.go.id<br>Twitter: @kanim_semarang<br>Facebook: Kantor Imigrasi Semarang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I SURAKARTA",
              "title": "Kantor Imigrasi\nKelas I SURAKARTA",
              "latitude": -7.544158,
              "longitude": 110.772153,
              "description":"Jl. Lapangan Adi Sucipto No. 8 Colomadu Surakarta 57174<br>Telp.(0271)-718479<br>Faks.(0271)-719887<br>kanim_surakarta@imigrasi.go.id<br>infokim.surakarta@gmail.com<br>surakarta.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nCILACAP",
              "title": "Kantor Imigrasi Kelas II\nCILACAP",
              "latitude": -7.685605,
              "longitude": 109.044536,
              "description":"Jl. Urip Sumoharjo No.249, Cilacap<br>Telp.(0282)-547779<br>Faks.(0282)-547775<br>Hotline. 082226488000 ; SMS Center 081217000900<br>kanim_cilacap@imigrasi.go.id<br>cilacap.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nPATI",
              "title": "Kantor Imigrasi Kelas II\nPATI",
              "latitude": -6.782892,
              "longitude": 110.985860,
              "description":"Jl. Raya Pati - Kudus KM.7 No.1, Morgorejo, Pati, Jawa Tengah, 59163<br>Telp.(0295)-386278<br>Faks.(0295)-386277<br>HP.08157706444<br>humas.imigrasi.pati@gmail.com<br>www.imigrasi-pati.net"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nPEMALANG",
              "title": "Kantor Imigrasi Kelas II\nPEMALANG",
              "latitude": -6.893743,
              "longitude": 109.423613,
              "description":"JL. PERINTIS KEMERDEKAAN NO.110 KEL.TAMAN, KEC.BEJI, PEMALANG, JAWA TENGAH, 52313<br>Telp.(0284)-325010<br>Faks.(0284)-324219<br>HP.081276739739<br>Email: kanim_pemalang@imigrasi.go.id <br>http://pemalang.imigrasi.go.id <br>Facebook: kantorimigrasipemalang<br>Twitter: @kanimpemalang<br>SMS Gateway. 08112622121"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nWONOSOBO",
              "title": "Kantor Imigrasi Kelas II\nWONOSOBO",
              "latitude": -7.407524,
              "longitude": 109.886987,
              "description":"Jl. Raya Banyumas Km. 5,5 Selomerto, Wonosobo<br>Telp.(0286)-321628<br>Faks.(0286)-325587<br>SMS Gateway 085727844448<br>Informasi dan Pengaduan 082221252656; 085747591115, 08112698859<br>Email: kanim_wonosobo@imigrasi.go.id, kanim.wonosobo@gmail.com<br>Twitter: @kanim_wonosoboFacebook: Kantor Imigrasi Klas II Wonosobo<br>Website: imigrasiwonosobo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nYOGYAKARTA",
              "title": "Kantor Imigrasi Kelas I\nYOGYAKARTA",
              "latitude": -7.783754,
              "longitude": 110.435452,
              "description":"JL. SOLO KM. 10 KEL.MAGUWOHARJO, KEC.DEPOK, SLEMAN, DAERAH ISTIMEWA YOGYAKARTA 55282<br>Telp.(0274)-484370<br>Faks.(0274)-487130<br>HP. 081228381605<br>kanim_yogyakarta@imigrasi.go.id<br>http://imigrasijogja.org<br>Twitter: @imigrasijogja"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas I\nKHUSUS SURABAYA",
              "title": "\nKantor Imigrasi Kelas I\nKHUSUS SURABAYA",
              "latitude": -7.380766,
              "longitude": 112.758306,
              "description":"Jalan Raya Juanda Km.3-4, Sedati-Sidoarjo, Jawa Timur 61253 (MULAI 17 JULI 2017)<br>Telp. (031) 8690534; Faks.(031)-8531926<br>kanim_surabaya@imigrasi.go.id<br>www.imigrasisurabaya.org"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nMALANG",
              "title": "Kantor Imigrasi Kelas I\nMALANG",
              "latitude": -7.931411,
              "longitude": 112.649809,
              "description":"JL. R. PANJI SUROSO NO. 4 RT/RW.01/01 KEL.POLOWIJEN, KEC.BLIMBING, MALANG, JAWA TIMUR 65126<br>Telp.(0341)-491039<br>Faks.(0341)-482233, 487105<br>HP.08113595000<br>kanim_malang@imigrasi.go.id<br>www.imigrasimalang.com<br>Twitter: @imigrasi_malang<br>Facebook: imigrasi.malang"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nTANJUNG PERAK",
              "title": "Kantor Imigrasi Kelas I\nTANJUNG PERAK",
              "latitude": -7.261606,
              "longitude": 112.684472,
              "description":"JL. RAYA DARMO INDAH NO. 21 KEL/KEC. TANDES, SURABAYA, JAWA TIMUR 60186<br>Telp.(031)-7315570; 7345182; 7325734<br>Faks.(021)-7329835HP. 081234333700<br>SMS CARE: 081234 333 700 Twitter: @ImigrasiTgPerak<br>kanim_tgperak@imigrasi.go.id<br>Twitter: @ImigrasiTgPerak<br>www.tanjungperak.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi\nKelas II BLITAR",
              "title": "\nKantor Imigrasi\nKelas II BLITAR",
              "latitude": -8.062395,
              "longitude": 112.070374,
              "description":"JL. RAYA MASTRIP NO.45 RT/RW.03/01, KEL/KEC. SRENGAT, BLITAR, JAWA TIMUR 66152<br>Telp.(0342)-554759; 554760<br>Faks.(0342)-554759; 554760<br>HP.082311723135<br>kanim_blitar@imigrasi.go.id; kanim.blitar@yahoo.co.id<br>http://blitar.imigrasi.go.id<br>twitter: @kanim.blitar"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nJEMBER",
              "title": "Kantor Imigrasi Kelas II\nJEMBER",
              "latitude": -8.178397,
              "longitude": 113.706356,
              "description":"JL. LETJEND. D.I PANJAITAN NO. 47 RT/RW.005/003, KEL/KEC. SUMBERSARI, JEMBER, JAWA TIMUR, 68121<br>Telp.(0331)-335494, 333177<br>Faks.(0331)-333157<br>HP.08123201951<br>kanim_jember@imigrasi.go.id; kanim.jember@gmail.com<br>Twitter: @imigrasijember<br>jember.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nMADIUN",
              "title": "Kantor Imigrasi Kelas II\nMADIUN",
              "latitude": -7.549431,
              "longitude": 111.677000,
              "description":"JL. PANGLIMA SUDIRMAN RT/RW.11/04, KEL. KALIGUNTING KEC. MEJAYAN, MADIUN, JAWA TIMUR, 63153<br>Telp.(0351)-386667 Layanan Pengaduan (0351)7031414<br>Faks.(0351)-386668br>SMS Gateway 085735178999, 0811949850<br>kanim_madiun@imigrasi.go.id<br>http://madiun.imigrasi.go.id<br>kanim.madiun@yahoo.com<br>twitter :@kanim_madiun"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas III\nKEDIRI",
              "title": "Kantor Imigrasi\nKelas III\nKEDIRI",
              "latitude": -7.814785,
              "longitude": 112.033945,
              "description":bagan+"JL IR SUTAMI NO. 16 KEDIRI<br>Telp.0354-688307<br>Faks.0354-688987<br>HP.081233481201<br>imigrasi.kediri@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III\nPAMEKASAN",
              "title": "Kantor Imigrasi Kelas III\nPAMEKASAN",
              "latitude": -7.196890,
              "longitude": 113.471800,
              "description":bagan+"JL RAYA PANGLEGUR, TLANAKAN, PAMEKASAN, JAWA TIMUR<br>Telp. (0324)-336978, 3515188<br>Faks. (0324)-336978, 3515188<br>HP.081939000800, 081939000700<br>kanim.pamekasan@yahoo.com, kanim_pamekasan@imigrasi.go.id<br>www.pamekasan.imigrasi.go.id<br>facebook: kanim pamekasan<br>twitter: @kanim_pamekasan"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nKHUSUS NGURAH RAI",
              "title": "Kantor Imigrasi Kelas I\nKHUSUS NGURAH RAI",
              "latitude": -8.784442,
              "longitude": 115.194316,
              "description":"JL.BY PASS NGURAH RAI NO.300 B, TUBAN, BADUNG, BALI, 80361<br>Telp.(0361)-9351038/(0361)935 7011 (Kantor), 8430870 & 082247510018 (Informasi & Pengaduan), 081237654205 (SMS Gateway), 764993(Bandara)<br>Faks.(0361)-9357011/(0361)9351038<br>HP.08176572757 (Info Layanan Paspor), 081805221485 (Info Layanan Izin Tinggal)<br>kanim_ngurahrai@imigrasi.go.id<br>www.ngurahrai.imigrasi.go.id<br>twitter @imngurahrai"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nDENPASAR",
              "title": "Kantor Imigrasi Kelas I\nDENPASAR",
              "latitude": -8.671729,
              "longitude": 115.230859,
              "description":"JL. D.I. PANJAITAN NO.3 KEL. DANGIN PURI KELOD, KEC. DENPASAR TIMUR, DENPASAR, BALI, 80235<br>Telp.(0361)-227828, 231149, 265030<br>Faks.(0361)-244340<br>HP.081916281381, 081234112012<br>kanim_denpasar@imigrasi.go.id<br>kepegawaian.kanimdps@gmail.com<br>http://denpasar.imigrasi.go.id<br>Facebook:kanim kelas I denpasar"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nSINGARAJA",
              "title": "Kantor Imigrasi Kelas I\nSINGARAJA",
              "latitude": -8.132515,
              "longitude": 115.060935,
              "description":"Jl. Seririt Singaraja Pemaron Singaraja Bali 81151<br>Telp.(0362)-32174<br>Faks.(0362)-31175<br>kanim_singaraja@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nMATARAM",
              "title": "Kantor Imigrasi Kelas I\nMATARAM",
              "latitude": -8.579011,
              "longitude": 116.102479,
              "description":"JL. UDAYANA NO. 2 MATARAM RT/RW.05 KEL. MONJOK BARAT, KEC. SELAPARANG, MATARAM, NTB 83122<br>Telp.(0370)-632520, 633346<br>Faks.(0370)-635285<br>HP.08187908222<br>kanimmataram@imigrasi.go.id<br>www.mataram.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSUMBAWA BESAR",
              "title": "Kantor Imigrasi Kelas II\nSUMBAWA BESAR",
              "latitude": -8.474427,
              "longitude": 117.403630,
              "description":"Jl. Bungur No. 13 Sumbawa Besar NTB 84351<br>Telp.(0371)-626642<br>Faks.(0371)-626641<br>HP.081327007780"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III\nBIMA",
              "title": "Kantor Imigrasi Kelas III\nBIMA",
              "latitude": -8.453900,
              "longitude": 118.728266,
              "description":"Jalan pintu Gerbang Istana Bima"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I\nKUPANG",
              "title": "Kantor Imigrasi Kelas I\nKUPANG",
              "latitude": -10.163683,
              "longitude": 123.577611,
              "description":"Jl. Adi Sucipto, Penfui, Kupang 85119<br>Telp.(0380)-8588033<br>Faks.(0380)-8588034<br>HP.08113860121<br>kanimkupang1@gmail.com<br>Twitter @kanimkupang1"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nATAMBUA",
              "title": "Kantor Imigrasi Kelas II\nATAMBUA",
              "latitude": -9.083460,
              "longitude": 124.897000,
              "description":"JL. ADI SUCIPTO NO.8 ATAMBUA RT/RW.003/001 KEL. MANUMUTIN, KEC. ATAMBUA BARAT, ATAMBUA, NUSA TENGGARA TIMUR, 85711<br>Telp.(0389)-2325064<br>Faks.(0389)-2325068<br>HP.081311230090<br>atambua_kanim@yahoo.co.id<br>http://atambua.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nMAUMERE",
              "title": "Kantor Imigrasi Kelas II\nMAUMERE",
              "latitude": -8.632673,
              "longitude": 122.235789,
              "description":"JL. ADI SUCIPTO NO.24 RT/RW.024/07 KEL. WAIOTI, KEC. ALOK TIMUR, SIKKA, NUSA TENGGARA TIMUR, 86111<br>Telp.(0382)-21150 - 51<br>Faks.(0382)-21180<br>kanim_maumere@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I PONTIANAK",
              "title": "Kantor Imigrasi\nKelas I PONTIANAK",
              "latitude": -0.048737,
              "longitude": 109.340303,
              "description":"JL. LETJEN SUTOYO PONTIANAK NO.122 RT/RW.01/02 KEL. PARIT TOKAYA, KEC. PONTIANAK SELATAN, PONTIANAK, KALIMANTAN BARAT 78121<br>Telp.(0561)-765576<br>Faks.(0561)-734516; 730582<br>HP.08115722330; 08115737117<br>kanim_pontianak@imigrasi.go.id; imigrasi.pontianak@gmail.com<br>www.imigrasipontianak.go.id<br>Facebook: IMIGRASI PONTIANAK<br>Twitter: @kanim_pontianak"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nENTIKONG",
              "title": "Kantor Imigrasi Kelas II\nENTIKONG",
              "latitude": 0.925047,
              "longitude": 110.298673,
              "description":"JL. RAYA ENTIKONG, KABUPATEN SANGGAU, KALIMANTAN BARAT 78557<br>Telp.(0564)-31180<br>Faks.(0564)-31181<br>HP.081286552556<br>kanim_entikong@yahoo.co.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSAMBAS",
              "title": "Kantor Imigrasi Kelas II\nSAMBAS",
              "latitude": 1.354782,
              "longitude": 109.330407,
              "description":"JL. PEMBANGUNAN KEL. DALAM KAUM, KEC. SAMBAS, SAMBAS, KALIMANTAN BARAT, 79462<br>Telp.(0562)-391733<br>Faks.(0562)-393062<br>HP.085721396181<br>mail@sambas.imigrasi.go.id<br>http://sambas.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nSANGGAU",
              "title": "Kantor Imigrasi Kelas II\nSANGGAU",
              "latitude": 0.122266,
              "longitude": 110.597928,
              "description":"JL. SUTAN SYAHRIR NO. 261 RT/RW.10/2 KEL. ILIR KOTA, KEC. KAPUAS, SANGGAU, KALIMANTAN BARAT 78512<br>Telp.(0564)-22885<br>Faks.(0564)-21464<br>HP.081258902010<br>kanim_sanggau@imigrasi.go.id<br>kanimsanggau.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi\nKelas II SINGKAWANG",
              "title": "\nKantor Imigrasi\nKelas II SINGKAWANG",
              "latitude": 0.902064,
              "longitude": 108.978592,
              "description":"JL. FIRDAUS H. RAIS NO.31 RT/RW.43/16 KEL. PASIRAN, KEC. SINGKAWANG BARAT, SINGKAWANG, KALIMANTAN BARAT, 79123<br>Telp.(0562)-631646, 631400<br>Faks.(0562)-633455<br>HP.08126326269<br>Pengaduan: 081952306653<br>kanim_singkawang@imigrasi.go.id; pengaduan@singkawang.imigrasi.go.id<br>http://singkawang.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas III PUTUSSIBAU",
              "title": "Kantor Imigrasi\nKelas III PUTUSSIBAU",
              "latitude": 0.883144,
              "longitude": 112.923372,
              "description":"Jl.gajahmada no.1 Putussibau -Kalimantan Barat<br>Telp. (0567)21231<br>Faks.(0567)21231<br>HP.082353056066/085652389455<br>kanimputussibau@yahoo.co.id; kanimputussibau@gmail.com<br>Fb: kantor imigrasi putussibau<br>Twitter :@kanimputussibau"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I BALIKPAPAN",
              "title": "Kantor Imigrasi\nKelas I BALIKPAPAN",
              "latitude": -1.255848,
              "longitude": 116.925511,
              "description":"JL. JENDERAL SUDIRMAN NO.23 RT/RW.12 KEL. KLANDASAN ILIR, KEC. BALIKPAPAN SELATAN, BALIKPAPAN, KALIMANTAN TIMUR, 76112<br>Telp.(0542)- 421175, 415581, 766886/21175<br>Faks.(0542)-421681<br>HP.0852-08483000<br>kanim_balikpapan@imigrasi.go.id; kanimbalikpapan@yahoo.co.id<br>http://kanimbalikpapan.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I SAMARINDA",
              "title": "Kantor Imigrasi\nKelas I SAMARINDA",
              "latitude": -0.475970,
              "longitude": 117.137160,
              "description":"JL. IR. H. JUANDA NO.45 KEL. AIR HITAM, KEC. SAMARINDA ULU, SAMARINDA, KALIMANTAN TIMUR 75124<br>Telp.(0541)-743945<br>Faks.(0541)-202242<br>http://imigrasisamarinda.org <br>kanim_samarinda@imigrasi.go.id<br>kanimsamarinda@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas II NUNUKAN",
              "title": "Kantor Imigrasi\nKelas II NUNUKAN",
              "latitude": 4.091485,
              "longitude": 117.700006,
              "description":"Jl. Ujang Dewa Sedadap Nunukan Selatan, Nunukan 77482<br>Telp.(0556)-21012<br>Faks.(0556)-21812<br>HP.081348179499<br>kanim.nunukan@imigrasi.go.id; imigrasinunukan409087@gmail.com<br>www.imigrasinunukan.com<br>Facebook: Kantor Imigrasi Nunukan; Twitter: @KanimNunukan"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas II TARAKAN",
              "title": "Kantor Imigrasi\nKelas II TARAKAN",
              "latitude": 3.296567,
              "longitude": 117.629628,
              "description":"JL. SUMATERA NO.01 RT/RW.15 KEL. PAMUSIAN, KEC. TARAKAN TENGA<br>Telp.(0551)-21242,(0551)-31306<br>Faks.(0551)-24745<br>imigrasitarakan@yahoo.co.id<br>http://tarakan.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas III TANJUNG REDEB",
              "title": "Kantor Imigrasi\nKelas III TANJUNG REDEB",
              "latitude": 2.147136,
              "longitude": 117.501734,
              "description":"JL. MANGGA II NO.51 RT/RW.11 KEL. KARANG AMBUN, KEC. TANJUNG REDEB, BERAU, KALIMANTAN TIMUR 77311<br>Telp.(0554)-26750<br>Faks.(0554)-26751<br>HP.082155290900<br>kanim_tanjungredeb@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I BANJARMASIN",
              "title": "Kantor Imigrasi\nKelas I BANJARMASIN",
              "latitude": -3.342693,
              "longitude": 114.620536,
              "description":"Jl. Jend. A. Yani Km. 5 1/2 Banjarmasin 70249<br>Telp.(0511)-3253731<br>Faks.(0511)-3253670<br>kanim_banjarmasin@imigrasi.go.id<br>www.kanim-banjarmasin.org"   
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas II BATULICIN",
              "title": "Kantor Imigrasi\nKelas II BATULICIN",
              "latitude": -3.509858,
              "longitude": 115.945265,
              "description":"Jl. Dharma Praja Gunung Tinggi Kab. Tanah Bumbu, Kalimantan Selatan<br>Telp.(0518)-6070010<br>Faks.(0518)-600011<br>HP.081221331065 ; 08125061832;  SMS GATEWAY: 081297142418<br>kanim_batulicin@imigrasi.go.id<br>batulicin.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I PALANGKARAYA",
              "title": "Kantor Imigrasi\nKelas I PALANGKARAYA",
              "latitude": -2.215307,
              "longitude": 113.918431,
              "description":"JL. G. OBOS NO.10 RT/RW.004/015 KEL. PAHANDUT, KEC. JEKAN RAYA, PALANGKARAYA, KALIMANTAN TENGAH 73111<br>Telp.(0536)-3221869<br>Faks.(0536)-3234977 / 3359555<br>HP.085267001991.<br>kanim_palangkaraya@imigrasi.go.id<br>http://palangkaraya.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I SAMPIT",
              "title": "Kantor Imigrasi\nKelas I SAMPIT",
              "latitude": -2.537085,
              "longitude": 112.941476,
              "description":"JL. CILIK RIWUT RT/RW.021.A/VIII KEL. MENTAWA BARU HULU, KEC. MENTAWA BARU KETAPANG, KOTAWARINGIN TIMUR/SAMPIT, KALIMANTAN TENGAH, 74322<br>Telp.(0531)-21512<br>Faks.(0531)-21512<br>HP.085388508500<br>kanim_sampit@imigrasi.go.id<br>http://sampit.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\NKantor Imigrasi\nKelas I GORONTALO",
              "title": "\NKantor Imigrasi\nKelas I GORONTALO",
              "latitude": 0.564292,
              "longitude": 123.086437,
              "description":"JL. BRIGJEN PIOLA ISA NO.214 KEL. DULOMO SELATAN, KEC. KOTA UTARA, GORONTALO 96123<br>Telp.(0435)-827662; 826249<br>Faks.(0435)-827662<br>HP.081340480374<br>Email: kanim.gorontalo@gmail.com<br>www.gorontalo.imigrasi.go.id<br>Twitter:@Kanim_Gorontalo"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I MANADO",
              "title": "Kantor Imigrasi Kelas I MANADO",
              "latitude": 1.467322,
              "longitude": 124.845634,
              "description":"JL. 17 AGUSTUS KEL.TELING, KEC.WANEA, MANADO, SULAWESI UTARA, 95119<br>Telp.(0431)-841688, 863491<br>Faks.(0431)-841688, 863491<br>HP.082234307111, 081399333521<br>kanim_manado@imigrasi.go.id<br>http://www.manado.imigrasi.go.id<br>Facebook: imigrasimanado<br>Twitter: @imigrasimanado"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "\nKantor Imigrasi Kelas II BITUNG",
              "title": "\nKantor Imigrasi Kelas II BITUNG",
              "latitude": 1.444413,
              "longitude": 125.183540,
              "description":"JL. DR. SAM RATULANGI RT/RW.001/002 KEL. BITUNG BARAT SATU, KEC. MAESA, BITUNG, SULAWESI UTARA 95511<br>Telp.(0438)-31869, 085341672996 (SMS Pengaduan)<br>Faks.(0438)-34410<br>kanim-bitung@imigrasi.go.id<br>www.kanimbitung.org<br>twitter @kanimbitung<br>facebook: www.kanimbitung@yahoo.com<br>email www.kanimbitung@yahoo.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas II TAHUNA",
              "title": "Kantor Imigrasi\nKelas II TAHUNA",
              "latitude": 3.611079,
              "longitude": 125.485497,
              "description":"Jl. Pelabuhan Tahuna<br>Telp.(0432)-24639<br>Faks.(0432)-24639<br>HP.0812288319619"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas III KOTAMOBAGU",
              "title": "Kantor Imigrasi\nKelas III KOTAMOBAGU",
              "latitude": 0.723660,
              "longitude": 124.306353,
              "description":"JL. Veteran No 475 Kel. Matali Kec Kotamobagu Timur, Kota Kotamobagu<br>Telp.(0434)-24474<br>Faks.(0434)-24474<br>HP.085399677790<br>kanim.kotamobagu@gmail.com<br>facebook: Kantor Imigrasi Kotamobagu"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas I PALU",
              "title": "Kantor Imigrasi\nKelas I PALU",
              "latitude": -0.901417,
              "longitude": 119.886736,
              "description":"JL. R.A KARTINI NO.53 PALU RT/RW.001/005 KEL. LOLU UTARA, KEC. PALU SELATAN, PALU, SULAWESI TENGAH 94112<br>Telp.(0451)-421433<br>Faks.(0451)-455279<br>HP.081341016969; 081341022326<br>immigration.palu@gmail.com; infokim.kanimpalu@gmail.com<br>Twitter: @Imigrasi Palu"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas III BANGGAI",
              "title": "Kantor Imigrasi\nKelas III BANGGAI",
              "latitude": -0.938828,
              "longitude": 122.792801,
              "description":""
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi\nKelas II MAMUJU",
              "title": "Kantor Imigrasi\nKelas II MAMUJU",
              "latitude": -2.661649,
              "longitude": 118.853894,
              "description":"Jl. H. Abd. Malik Pattana Endeng-Rangas, Mamuju 91511<br>Telp.(0426)-232540; 232541<br>Faks.(0426)-232540; 232541<br>HP.0811462875 dan 081398198988<br>e-mail: imigrasi_mamuju@yahoo.com<br>website: imigrasimamuju.org<br>SMS : 082343385929<br>  Twitter : @imigrasimamuju"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II\nPOLEWALI MANDAR",
              "title": "Kantor Imigrasi Kelas II\nPOLEWALI MANDAR",
              "latitude": -3.406694,
              "longitude": 119.309793,
              "description":"JL. TRITURA NO. 12,KEL.MADATTE  KEC.POLEWALI KAB,POLEWALI MANDAR KODE POS 91315<br>Telp.(0428)-2412323<br>Faks.(0428)-21456<br>HP.08114223313<br>kanim_polewali@imigrasi.go.id; kanimpolewali@gmail.com<br>    Twitter : @kanimpolewali; FB: Imigrasi Polewali"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I MAKASSAR",
              "title": "Kantor Imigrasi Kelas I MAKASSAR",
              "latitude": -5.121047,
              "longitude": 119.507894,
              "description":"JL. PERINTIS KEMERDEKAAN KM.13 RT/RW.02/07 KEL. KAPASA, KEC. TAMALANREA, MAKASSAR, SULAWESI SELATAN 90243<br>Telp.(0411)-584559<br>Faks.(0411)-584906<br>kanim_makasar@imigrasi.go.id<br>www.makassar.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II PARE PARE",
              "title": "Kantor Imigrasi Kelas II PARE PARE",
              "latitude": -4.032448,
              "longitude": 119.630948,
              "description":"Jl. Jend. Sudirman No. 87 Pare-pare 91122<br>Telp.(0421)-21014<br>Faks.(0421)-22298<br>HP.0421-9759000<br>imigrasi_parepare@ymail.com<br>parepare.imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III PALOPO",
              "title": "Kantor Imigrasi Kelas III PALOPO",
              "latitude": -3.012243,
              "longitude": 120.201534,
              "description":"No. 2,, Jl. Patang II, Tomarundung, Wara Bar., Kota Palopo, Sulawesi Selatan 91913, Indonesia"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I KENDARI",
              "title": "Kantor Imigrasi Kelas I KENDARI",
              "latitude": -4.002720,
              "longitude": 122.498712,
              "description":"JL. JEND. AHMAD YANI NO.101 RT/RW.001/001 KEL. BONGGOEYA, KEC. WUA-WUA, KENDARI, SULAWESI TENGGARA 93117<br>Telp.(0401)-3930851<br>Faks.(0401)-3930350<br>HP 08114001330<br>SMS Pengaduan 08114001331<br>kanim_kendari@imigrasi.go.id<br>infokimkendari@gmail.com<br>www.imigrasikendari.com<br>Facebook: https://www.facebook.com/people/Kantor-Imigrasi-Kendari/100008852681786<br>Twitter: @kanimkendari"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III BAU-BAU",
              "title": "Kantor Imigrasi Kelas III BAU-BAU",
              "latitude": -5.458334,
              "longitude": 122.608622,
              "description":"<div id='chart-container'></div><br>JL. Muh. Husni Thamrin No 32 BAU-BAU<br>Telp.(0402)-2823789<br>Faks.(0402)-2823789<br>HP.081342322218<br>kanim03.baubau@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas III WAKATOBI",
              "title": "Kantor Imigrasi Kelas III WAKATOBI",
              "latitude": -5.355080,
              "longitude": 123.555102,
              "description":"JL. Adhyaksa No.34 , Desa Numana Kec. Wangi-wangi Selatan, Kab.Wakatobi<br>Email: kanimwakatobi@gmail.com<br>HP.081342410115"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I TERNATE",
              "title": "Kantor Imigrasi Kelas I TERNATE",
              "latitude": 0.788068,
              "longitude": 127.377156,
              "description":"JL. SKSD PALAPA NO.338 KEL.KALUMPANG, KEC. TERNATE TENGAH, TERNATE, MALUKU UTARA 97722<br>Telp.(0921)-3121568<br>Faks.(0921)-3125598<br>HP.081356470313<br>kanim_ternate@imigrasi.go.id; imigrasiternate@yahoo.com<br>www.imigrasiternate.wordpress.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I TOBELO",
              "title": "Kantor Imigrasi Kelas I TOBELO",
              "latitude": 1.761253,
              "longitude": 127.986438,
              "description":"JL TERUSAN GALELA/KEMAKMURAN, GORUA SELATAN, TOBELO, MALUT<br>Telp.0924-2706023<br>Faks.0924-2704851<br>HP.082139958066<br>kanim_tobelo@imigrasi.go.id"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I AMBON",
              "title": "Kantor Imigrasi Kelas I AMBON",
              "latitude": -3.707882,
              "longitude": 128.170353,
              "description":"JL. DR. KAYADOE NO.48 A, KEL.KUDAMATI, KEC. NUSANIWE, AMBON, MALUKU, 97118<br>Telp.(0911)-353066<br>Faks.(0911)-343712<br>HP.085254903434<br>imigrasiambon@yahoo.co.id<br>www.kanimambon.webs.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II TUAL",
              "title": "Kantor Imigrasi Kelas II TUAL",
              "latitude": -5.634027,
              "longitude": 132.745161,
              "description":"Jl. Jend. Ahcmad Yani, Tual<br>Telp.(0916)-23678<br>Faks.(0916)-23076<br>kanimtual@ymail.com; ku_kanimtual@rocketmail.com<br>Twitter @kanimtual"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II MANOKWARI",
              "title": "Kantor Imigrasi Kelas II MANOKWARI",
              "latitude": -0.927208,
              "longitude": 134.024164,
              "description":"Jl. Trikora Logpond Arfai, Manokwari, Papua Barat 98315<br>HP.081247221233<br>imigrasi.pengaduan@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II SORONG",
              "title": "Kantor Imigrasi Kelas II SORONG",
              "latitude": -0.879908,
              "longitude": 131.282447,
              "description":"Jl. Masjid Raya HBM Sorong 98416<br>Telp.(0951)-321915<br>Faks.(0951)-321393<br>Twitter:@imigrasi_sorong"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas I JAYAPURA",
              "title": "Kantor Imigrasi Kelas I JAYAPURA",
              "latitude": -2.567296,
              "longitude": 140.701799,
              "description":"JL. PERCETAKAN NEGARA NO.15 RT/RW.03/III, KEL. GURABESI, KEC. JAYAPURA UTARA, JAYAPURA, PAPUA 99111<br>Alamat Sementara: Jalan Masuk Akademi Pariwisata Kelapa Dua Entrop Kode Pos 99224, Jayapura<br>Telp.(0967)-533647<br>Faks.(0967)-534147<br>HP.081248551958<br>kanim_jayapura@imigrasi.go.id; kanim.jayapura@gmail.com<br>Facebook: Kantor Imigrasi Jayapura; Twitter: Kanim.Jayapura"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II BIAK",
              "title": "Kantor Imigrasi Kelas II BIAK",
              "latitude": -1.184359,
              "longitude": 136.081728,
              "description":"Jl. Jend. Sudirman No. 1 Biak 98112<br>Telp.(0981)-25455<br>Faks.(0981)-21109<br>kanimbiak@yahoo.com<br>www.kanim-biak.net"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II MERAUKE",
              "title": "Kantor Imigrasi Kelas II MERAUKE",
              "latitude": -8.491183,
              "longitude": 140.400324,
              "description":"JL. T.M.P TRIKORA NO.88 RT/RW.17/VI KEL. MANDALA, KEC. MERAUKE, MERAUKE, PAPUA 99616<br>Telp.(0971)-321977, 321045<br>Faks.(0971)-321054<br>HP.081341536072<br>Email :kakanim.merauke@gmail.com"
            },{
              "groupId": "minZoom-2",
              "svgPath": targetSVG,
              "zoomLevel": 4,
              "scale": 0.5,
              "label": "Kantor Imigrasi Kelas II TEMBAGA PURA",
              "title": "Kantor Imigrasi Kelas II TEMBAGA PURA",
              "latitude": -4.333916,
              "longitude": 136.999340,
              "description":"Jl. Kantor Utama Pt. Freeport Ind. Tembagapura Biak 98100/C.Heatubun NO.1 TIMIKA PAPUA 99910<br>Telp.(0901)-321168, 322293<br>Faks.(0901)-321168<br>HP.08114911221<br>tembagapura.imigrasi.go.id<br>kanimtembagapura@yahoo.com<br>twitter : @imigrasi_tbgpra"
            }         
        ],
        "getAreasFromMap": true
      },

      /**
       * create areas settings
       * autoZoom set to true means that the map will zoom-in when clicked on the area
       * selectedColor indicates color of the clicked area.
       */
      "areasSettings": {
        "autoZoom": true,
        "balloonText": "[[customData]]",
        "selectedColor": "#2980b9",
        "color" : "#3498db",
        "unlistedAreasAlpha": 0
      },
      "mouseWheelZoomEnabled": true,
      "listeners": [{
        // "event": "descriptionClosed",
        // "method": function(ev) {
        //   ev.chart.selectObject();
        // }
      },{
        "event": "clickMapObject",
        "method": function(event) {
            event.mapObject.validate();
            var nama_kanim = event.mapObject.label.replace("\n"," ");
            nama_kanim = nama_kanim.replace("\n"," ");
            nama_kanim = nama_kanim.replace("\n"," ");
            console.log(nama_kanim);
            var kanim = <?php echo json_encode($query);?>;
            var i=0;

            for(i=0;i<kanim.length;i++){
              bagan = "<img id='imgBagan' src='assets/bagan/"+kanim[i].bagan+"'/><br>";
              if(kanim[i].nama_kanim == nama_kanim){
                if(kanim[i].bagan == null){
                  bagan = "";
                }else{
                  if(bagan==""){
                    bagan = "<img id='imgBagan' src='assets/bagan/"+kanim[i].bagan+"'/><br>";
                  }
                }
                  if(kanim[i].email == null || kanim[i].email == ""){
                    var email = "";
                  }
                  if(kanim[i].web == null || kanim[i].web == ""){
                    var web = "";
                  }else{
                    var web = "<a target='_blank' href='"+kanim[i].web+"'>"+kanim[i].web+"</a>";
                  }
                  if(kanim[i].facebook == null || kanim[i].facebook == ""){
                    var fb = "";
                  }else{
                    var fb = "Facebook: <a target='_blank' href='http://facebook.com/"+kanim[i].facebook+"'>"+kanim[i].facebook+"</a>";
                  }
                  if(kanim[i].twitter == null || kanim[i].twitter == ""){
                    var tw =""; 
                  }else{
                    var tw = "Twitter: <a target='_blank' href='http://twitter.com/"+kanim[i].twitter+"'>"+kanim[i].twitter+"</a>";
                  }
                  var desc = bagan+"<br>"+kanim[i].alamat+"<br>Telp:"+kanim[i].telfon+"<br>Fax:"+kanim[i].faks+"<br>"+kanim[i].hp+"<br>"+email+"<br>"+web+"</br>"+fb+"<br>"+tw; 
                  event.mapObject.description = desc;
                  console.log(desc);
              }
            }
            var element = document.getElementById('imgBagan');
            var element2 = document.getElementsByClassName('ammapDescriptionWindow');
            var style = window.getComputedStyle(element);
            var top = style.getPropertyValue('top');
            console.log(top);
          }
      }]

      /**
       * let's say we want a small map to be displayed, so let's create it
       */
      // "smallMap": {}
    } );
    //zoom listener
    map.addListener( "rendered", function() {
      map.zoomLevel(0);
      revealMapImages();
      map.addListener( "zoomCompleted", revealMapImages );
    } );
    function revealMapImages( event ) {
      var zoomLevel = map.zoomLevel();
      console.log(zoomLevel);
      // alert(event.target.id);
      if ( zoomLevel < 1.7 ) {
        map.hideGroup( "minZoom-2" );
      } else {
        map.showGroup( "minZoom-2" );
        
      }
    }

  </script>
</body>
</html>
