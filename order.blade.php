@extends('../main')

@section('content')
<div id="petunjukModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel">Petunjuk</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="text-center">
<img src="{{ $kategori->petunjuk }}" width="335px">
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 mt-2 mb-2">
<div class="row">
<div class="col-12">
<div class="card mb-3">
<div class="card-body">
<img src="{{ $kategori->thumbnail }}" alt="" class="shadow rounded mx-auto mb-2 d-lg-block d-none " width="150">
<div class="text-center">
<img src="{{ $kategori->thumbnail }}" alt="" class="shadown rounded mb-2 d-lg-none text-center" width="30%">
</div>
<div class="row">
<div class="col">
<h3 style="text-align: center">{{ $kategori->nama }}</h3>
<div class="strip-primary"></div>
<br>
</p><p>Top Up {{ $kategori->nama }}</p>
<ol>
@if($kategori->kode == "mobile-legends")
<li>Masukkan UID (SERVER) Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  @elseif($kategori->kode == "telkomsel" ||$kategori->kode == "xl" ||$kategori->kode == "smartfren" ||$kategori->kode == "indosat" ||$kategori->kode == "tri" ||$kategori->kode == "axis" ||$kategori->kode == "byu")
  <li>Masukkan Nomor Telepon Anda</li>
  <li>Pilih Nominal Pulsa</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Pulsa masuk ke nomor Anda.</li>
  @elseif($kategori->kode == "shopepay" ||$kategori->kode == "dana" ||$kategori->kode == "link-aja" ||$kategori->kode == "gopay" ||$kategori->kode == "ovo" ||$kategori->kode == "brizzi" ||$kategori->kode == "isaku" ||$kategori->kode == "doku" ||$kategori->kode == "sakuku" ||$kategori->kode == "maxim" ||$kategori->kode == "bukalapak" ||$kategori->kode == "mtix")
  <li>Masukkan Nomor Telepon Anda</li>
  <li>Pilih Nominal Saldo</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Saldo masuk ke nomor Anda.</li>
  @elseif($kategori->kode == "genshin-impact")
  <li>Masukkan ID &amp; Server Anda</li>
  <li>Pilih Nominal Genesis Crystal</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Genesis Crystal {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "point-blank")
  <li>Masukkan ID PB Anda</li>
  <li>Pilih Nominal PB Cash</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga PB Cash masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "aov")
  <li>Masukkan Open ID (Wajib Bind FB)</li>
  <li>Pilih Nominal Voucher</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Voucher {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "call-of-duty")
  <li>Masukkan Open ID (Wajib Bind FB)</li>
  <li>Pilih Nominal CP</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga CP {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "valorant")
  <li>Masukkan ID Riot Anda</li>
  <li>Pilih Nominal Valorant Point</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Valorant Point masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "pubg")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga UC {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "apex-legends")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Gold {{ $kategori->nama }} masuk ke akun Anda.</li>
  
   @elseif($kategori->kode == "free-fire")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "tof")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Tanium {{ $kategori->nama }} masuk ke akun Anda.</li>
  
   @elseif($kategori->kode == "ragnarok-m")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Big Cat Coins {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "sausageman")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Candy masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "muorigin3")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "muorigin2")
  <li>Masukkan UID (SERVER) Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "lightofthel")
  <li>Masukkan ID &amp; Server Anda</li>
  <li>Pilih Nominal Crystal</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Crystal {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "omegalegend")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Gold {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "lords-mobile")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "tom-jerry-chase")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "hyperfront")
  <li>Masukkan UID Anda</li>
  <li>Pilih Nominal TopUp Star Quartz</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Star Quartz {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "betheking")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Gold {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "marvel-super-war")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp Star Credits</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Star Credits {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "life-after")
  <li>Masukkan UserID dan Server Anda</li>
  <li>Pilih Nominal TopUp Credits</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Credits {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "dragon-raja")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp Coupons</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Coupons {{ $kategori->nama }} masuk ke akun Anda.</li>
  
   @elseif($kategori->kode == "onepuchman")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp Coupons</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Coupons {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "laplace")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp Spirals</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Spirals {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "saint-seiya-awakening")
  <li>Masukkan UserID Anda</li>
  <li>Pilih Nominal TopUp Coupons</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Coupons {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "mobile-legend")
  <li>Masukkan UID (SERVER) Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Diamond {{ $kategori->nama }} masuk ke akun Anda.</li>
  
  @elseif($kategori->kode == "life-after")
  <li>Masukkan UserID & Server Anda</li>
  <li>Pilih Nominal TopUp</li>
  <li>Pilih Metode Pembayaran</li>
  <li>Tulis Nomor WhatsApp Sesuai Petunjuk!</li>
  <li>Klik Beli &amp; lakukan Pembayaran</li>
  <li>Tunggu Hingga Credit masuk ke akun Anda.</li>
@endif

</ol><br />
<p align="center"><font size="4" color="#338f80"><strong>PROSES 1 MENIT </br>
LAYANAN INI AKTIF 24 JAM</font></p></strong>
</div>
</div>
</div>
</div>
<div class="card shadow d-sm-none d-md-block d-none d-sm-block">
<div class="card-header bg-dark">
<h5 class="card-title text-light">Game Lainya</h5>
</div>
<div class="card-body">
<div class="col mb-2">
<div class="card flex-row flex-wrap bg-light">
<div class="card-header border-0">
<a href="/game/genshin-impact" class="stretched-link">
<img src="/assets/thumbnail/genshin-min.png" height="50px">
</a>
</div>
<div class="card-body">
<b>Genshin Impact</b><br>
</div>
</div>
</div>
<div class="col mb-2">
<div class="card flex-row flex-wrap bg-light">
<div class="card-header border-0">
<a href="/game/mobile-legends" class="stretched-link">
<img src="/assets/thumbnail/mlbb_tile.jpg" height="50px">
</a>
</div>
<div class="card-body">
<b>Mobile Legend</b><br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 mt-2 mb-2">
<form>
<div class="row">
<div class="col">
<div class="card">
<div class="card-header bg-dark">
<h5 class="card-title text-light">Lengkapi Data </h5>
</div>
<div class="card-body">
<div id="form_order">
<div class="row row-cols row-cols-md">
  @if($kategori->tipe == "game" || $kategori->tipe =="gift" || $kategori->tipe == "ewallet" || $kategori->tipe == "app")
  @if($kategori->server_id && $kategori->kode != "life-after" && $kategori->kode != "genshin-impact" &&
$kategori->kode != "ragnarok-m" &&
$kategori->kode != "hyperfront" &&
$kategori->kode != "betheking" &&
$kategori->kode != "tof")
<div class="col-lg-6">
  <div class="form-group mb-3">
      <label for="ID ML">ID</label>
      <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
  </div>
</div>
<div class="col-lg-6">
  <div class="form-group mb-3">
      <label for="Server">Server</label>
      <input class="form-control" placeholder="Masukkan Server" type="text" name="Server" id="zone" required>
  </div>
</div>
@elseif($kategori->kode == "life-after")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="">Pilih Server</option>
                                                        <option value="miskatown">Miska Town</option>
                                                        <option value="sandcastle">Sand Castle</option>
                                                        <option value="mouthswamp">Mouth Swamp</option>
                                                        <option value="redwoodtown">Red Wood Town</option>
                                                        <option value="obelisk">Oblisk</option>
                                                        <option value="fallforest">Fall Forest</option>
                                                        <option value="mountsnow">Mount Snow</option>
                                                        <option value="nancycity">Nancy City</option>
                                                        <option value="charlestown">Charles Town</option>
                                                        <option value="snowhighlands">Snow High Lands</option>
                                                        <option value="santopany">Santopany</option>
                                                        <option value="levincity">Levin City</option>
                                                        <option value="newland">New Land</option>
                                                        <option value="milestone">Mile Stone</option>
                                                        <option value="twinislands">Twin Island</option>
                                                        <option value="500007">ChaosOutpost (NA)</option>
                                                        <option value="500008">IronStride (NA)</option>
                                                        <option value="520007">ChaosCity (SEA)</option>
                                                        <option value="520008">TwinIslands (SEA)</option>
                                                        <option value="520009">HopeWall (SEA)</option>
                                                        <option value="500009">CrystalthornSea (NA)</option>
                                                        <option value="520010">LabyrinthSea (SEA)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "tof")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="">Pilih Server</option>
    <option value="Southeast Asia-Osillron">Southeast Asia-Osillron</option>
    <option value="Southeast Asia-Mistilteinn">Southeast Asia-Mistilteinn</option>
    <option value="Southeast Asia-Illyrians">Southeast Asia-Illyrians</option>
    <option value="Southeast Asia-Florione">Southeast Asia-Florione</option>
    <option value="Southeast Asia-Animus">Southeast Asia-Animus</option>
    <option value="Southeast Asia-Gumi Gumi">Southeast Asia-Gumi Gumi</option>
    <option value="Southeast Asia-Oryza">Southeast Asia-Oryza</option>
    <option value="Southeast Asia-Saeri">Southeast Asia-Saeri</option>
    <option value="Southeast Asia-Phantasia">Southeast Asia-Phantasia</option>
    <option value="Southeast Asia-Mechafield">Southeast Asia-Mechafield</option>
    <option value="Southeast Asia-Ethereal Dream">Southeast Asia-Ethereal Dream</option>
    <option value="Southeast Asia-Odyssey">Southeast Asia-Odyssey</option>
    <option value="Southeast Asia-Aestral-Noa">Southeast Asia-Aestral-Noa</option>
    <option value="Southeast Asia-Chandra">Southeast Asia-Chandra</option>
    <option value="Southeast Asia-Aeria">Southeast Asia-Aeria</option>
    <option value="Southeast Asia-Scarlet">Southeast Asia-Scarlet</option>
    <option value="Southeast Asia-Fantasia">Southeast Asia-Fantasia</option>
    <option value="Southeast Asia-Stardust">Southeast Asia-Stardust</option>
    <option value="Southeast Asia-Arcania">Southeast Asia-Arcania</option>
    <option value="Southeast Asia-Valhalla">Southeast Asia-Valhalla</option>
    <option value="North America-Lunalite">North America-Lunalite</option>
    <option value="North America-Sol-III">North America-Sol-III</option>
    <option value="North America-Lighthouse">North America-Lighthouse</option>
    <option value="North America-Silver Bridge">North America-Silver Bridge</option>
    <option value="North America-The Glades">North America-The Glades</option>
    <option value="North America-Nightfall">North America-Nightfall</option>
    <option value="North America-Frontier">North America-Frontier</option>
    <option value="North America-Libera">North America-Libera</option>
    <option value="North America-Solaris">North America-Solaris</option>
    <option value="North America-Freedom-Oasis">North America-Freedom-Oasis</option>
    <option value="North America-The Worlds Between">North America-The Worlds Between</option>
    <option value="North America-Radiant">North America-Radiant</option>
    <option value="North America-Tempest">North America-Tempest</option>
    <option value="North America-New Era">North America-New Era</option>
    <option value="North America-Observer">North America-Observer</option>
    <option value="North America-Starlight">North America-Starlight</option>
    <option value="North America-Myriad">North America-Myriad</option>
    <option value="North America-Oumuamua">North America-Oumuamua</option>
    <option value="North America-Eternium Phantasy">North America-Eternium Phantasy</option>
    <option value="North America-Azure Plane">North America-Azure Plane</option>
    <option value="North America-Nirvana">North America-Nirvana</option>
    <option value="Europe-Magia Przygoda Aida">Europe-Magia Przygoda Aida</option>
    <option value="Europe-Transport Hub">Europe-Transport Hub</option>
    <option value="Europe-The Lumina">Europe-The Lumina</option>
    <option value="Europe-Lycoris">Europe-Lycoris</option>
    <option value="Europe-Ether">Europe-Ether</option>
    <option value="Europe-Olivine">Europe-Olivine</option>
    <option value="Europe-Iter">Europe-Iter</option>
    <option value="Europe-Aimanium">Europe-Aimanium</option>
    <option value="Europe-Alintheus">Europe-Alintheus</option>
    <option value="Europe-Andoes">Europe-Andoes</option>
    <option value="Europe-Anomora">Europe-Anomora</option>
    <option value="Europe-Astora">Europe-Astora</option>
    <option value="Europe-Valstamm">Europe-Valstamm</option>
    <option value="Europe-Blumous">Europe-Blumous</option>
    <option value="Europe-Celestialrise">Europe-Celestialrise</option>
    <option value="Europe-Cosmos">Europe-Cosmos</option>
    <option value="Europe-Dyrnwyn">Europe-Dyrnwyn</option>
    <option value="Europe-Elypium">Europe-Elypium</option>
    <option value="Europe-Excalibur">Europe-Excalibur</option>
    <option value="Europe-Espoir IV">Europe-Espoir IV</option>
    <option value="Europe-Estrela">Europe-Estrela</option>
    <option value="Europe-Ex Nihilor">Europe-Ex Nihilor</option>
    <option value="Europe-Futuria">Europe-Futuria</option>
    <option value="Europe-Hephaestus">Europe-Hephaestus</option>
    <option value="Europe-Midgard">Europe-Midgard</option>
    <option value="Europe-Kuura">Europe-Kuura</option>
    <option value="Europe-Lyramiel">Europe-Lyramiel</option>
    <option value="Europe-Magenta">Europe-Magenta</option>
    <option value="Europe-Omnium Prime">Europe-Omnium Prime</option>
    <option value="Europe-Turmus">Europe-Turmus</option>
    <option value="South America-Corvus">South America-Corvus</option>
    <option value="South America-Calodesma Seven">South America-Calodesma Seven</option>
    <option value="South America-Columba">South America-Columba</option>
    <option value="South America-Tiamat">South America-Tiamat</option>
    <option value="South America-Orion">South America-Orion</option>
    <option value="South America-Luna Azul">South America-Luna Azul</option>
    <option value="South America-Hope">South America-Hope</option>
    <option value="South America-Tanzanite">South America-Tanzanite</option>
    <option value="South America-Antlia">South America-Antlia</option>
    <option value="South America-Pegasus">South America-Pegasus</option>
    <option value="South America-Phoenix">South America-Phoenix</option>
    <option value="South America-Centaurus">South America-Centaurus</option>
    <option value="South America-Cepheu">South America-Cepheu</option>
    <option value="South America-Cygnus">South America-Cygnus</option>
    <option value="South America-Grus">South America-Grus</option>
    <option value="South America-Hydra">South America-Hydra</option>
    <option value="South America-Lyra">South America-Lyra</option>
    <option value="South America-Ophiuchus">South America-Ophiuchus</option>
    <option value="Asia-Pacific-Cocoaiteruyo">Asia-Pacific-Cocoaiteruyo</option>
    <option value="Asia-Pacific-Food Fighter">Asia-Pacific-Food Fighter</option>
    <option value="Asia-Pacific-Gomap">Asia-Pacific-Gomap</option>
    <option value="Asia-Pacific-Yggdrasil">Asia-Pacific-Yggdrasil</option>
    <option value="Asia-Pacific-Daybreak">Asia-Pacific-Daybreak</option>
    <option value="Asia-Pacific-Adventure">Asia-Pacific-Adventure</option>
    <option value="Asia-Pacific-Eden">Asia-Pacific-Eden</option>
    <option value="Asia-Pacific-Fate">Asia-Pacific-Fate</option>
    <option value="Asia-Pacific-Nova">Asia-Pacific-Nova</option>
    <option value="Asia-Pacific-Ruby">Asia-Pacific-Ruby</option>
    <option value="Asia-Pacific-Babel">Asia-Pacific-Babel</option>
    <option value="Asia-Pacific-Pluto">Asia-Pacific-Pluto</option>
    <option value="Asia-Pacific-Sushi">Asia-Pacific-Sushi</option>
    <option value="Asia-Pacific-Venus">Asia-Pacific-Venus</option>
    <option value="Asia-Pacific-Galaxy">Asia-Pacific-Galaxy</option>
    <option value="Asia-Pacific-Memory">Asia-Pacific-Memory</option>
    <option value="Asia-Pacific-Oxygen">Asia-Pacific-Oxygen</option>
    <option value="Asia-Pacific-Sakura">Asia-Pacific-Sakura</option>
    <option value="Asia-Pacific-Seeker">Asia-Pacific-Seeker</option>
    <option value="Asia-Pacific-Shinya">Asia-Pacific-Shinya</option>
    <option value="Asia-Pacific-Stella">Asia-Pacific-Stella</option>
    <option value="Asia-Pacific-Uranus">Asia-Pacific-Uranus</option>
    <option value="Asia-Pacific-Utopia">Asia-Pacific-Utopia</option>
    <option value="Asia-Pacific-Jupiter">Asia-Pacific-Jupiter</option>
    <option value="Asia-Pacific-Sweetie">Asia-Pacific-Sweetie</option>
    <option value="Asia-Pacific-Atlantis">Asia-Pacific-Atlantis</option>
    <option value="Asia-Pacific-Takoyaki">Asia-Pacific-Takoyaki</option>
    <option value="Asia-Pacific-Mars">Asia-Pacific-Mars</option>
    </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "genshin-impact")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="">Pilih Server</option>
                                                        <option value="america">America</option>
                                                        <option value="europe">Europa</option>
                                                        <option value="asia">Asia</option>
                                                        <option value="tw_hk_mo">TW_HK_MO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @elseif($kategori->kode == "betheking")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                    <option value="Asia-S1">
Asia-S1</option>
<option value="Asia-S2">
Asia-S2</option>
<option value="Asia-S3">
Asia-S3</option>
<option value="Asia-S4">
Asia-S4</option>
<option value="Asia-S5">
Asia-S5</option>
<option value="Asia-S6">
Asia-S6</option>
<option value="Asia-S7">
Asia-S7</option>
<option value="Asia-S8">
Asia-S8</option>
<option value="Asia-S9">
Asia-S9</option>
<option value="Asia-S10">
Asia-S10</option>
<option value="Asia-S11">
Asia-S11</option>
<option value="Asia-S12">
Asia-S12</option>
<option value="Asia-S13">
Asia-S13</option>
<option value="Asia-S14">
 Asia-S14</option>
<option value="Asia-S15">
Asia-S15</option>
<option value="Asia-S16">
Asia-S16</option>
<option value="Asia-S17">
Asia-S17</option>
<option value="Asia-S18">
Asia-S18</option>
<option value="Asia-S19">
Asia-S19</option>
<option value="Asia-S20">
Asia-S20</option>
<option value="Asia-S21">
Asia-S21</option>
<option value="Asia-S22">
Asia-S22</option>
<option value="Asia-S23">
Asia-S23</option>
<option value="Asia-S24">
Asia-S24</option>
<option value="Asia-S25">
Asia-S25</option>
<option value="Asia-S26">
Asia-S26</option>
<option value="Asia-S27">
Asia-S27</option>
<option value="Asia-S28">
Asia-S28</option>
<option value="Asia-S29">
Asia-S29</option>
<option value="Asia-S30">
 Asia-S30</option>
<option value="Asia-S31">
Asia-S31</option>
<option value="Asia-S32">
Asia-S32</option>
<option value="Asia-S33">
Asia-S33</option>
<option value="Asia-S34">
Asia-S34</option>
<option value="Asia-S35">
Asia-S35</option>
<option value="Asia-S36">
Asia-S36</option>
<option value="Asia-S37">
Asia-S37</option>
<option value="Asia-S38">
Asia-S38</option>
<option value="Asia-S39">
Asia-S39</option>
<option value="Asia-S40">
Asia-S40</option>
<option value="Asia-S41">
Asia-S41</option>
<option value="Asia-S42">
Asia-S42</option>
<option value="Asia-S43">
Asia-S43</option>
<option value="Asia-S44">
Asia-S44</option>
<option value="Asia-S45">
Asia-S45</option>
<option value="Asia-S46">
Asia-S46</option>
<option value="Asia-S47">
Asia-S47</option>
<option value="Asia-S48">
Asia-S48</option>
<option value="Asia-S49">
Asia-S49</option>
<option value="Asia-S50">
Asia-S50</option>
<option value="Asia-S51">
Asia-S51</option>
<option value="Asia-S52">
Asia-S52</option>
<option value="Asia-S53">
Asia-S53</option>
<option value="Asia-S54">
Asia-S54</option>
<option value="Asia-S55">
Asia-S55</option>
<option value="Asia-S56">
Asia-S56</option>
<option value="Asia-S57">
Asia-S57</option>
<option value="Asia-S58">
Asia-S58</option>
<option value="Asia-S59">
Asia-S59</option>
<option value="Asia-S60">
Asia-S60</option>
<option value="Asia-S61">
Asia-S61</option>
 <option value="Asia-S62">
Asia-S62</option>
<option value="Asia-S63">
Asia-S63</option>
<option value="Asia-S64">
Asia-S64</option>
<option value="Asia-S65">
Asia-S65</option>
<option value="Asia-S66">
Asia-S66</option>
<option value="Asia-S67">
Asia-S67</option>
<option value="Asia-S68">
Asia-S68</option>
<option value="Asia-S69">
Asia-S69</option>
<option value="Asia-S70">
Asia-S70</option>
<option value="Asia-S71">
Asia-S71</option>
<option value="Asia-S72">
Asia-S72</option>
<option value="Asia-S73">
Asia-S73</option>
<option value="Asia-S74">
Asia-S74</option>
<option value="Asia-S75">
Asia-S75</option>
<option value="Asia-S76">
Asia-S76</option>
<option value="Asia-S77">
Asia-S77</option>
 <option value="Asia-S78">
Asia-S78</option>
<option value="Asia-S79">
Asia-S79</option>
<option value="Asia-S80">
Asia-S80</option>
<option value="Asia-S81">
Asia-S81</option>
<option value="Asia-S82">
Asia-S82</option>
<option value="Asia-S83">
Asia-S83</option>
<option value="Asia-S84">
Asia-S84</option>
<option value="Asia-S85">
Asia-S85</option>
<option value="Asia-S86">
Asia-S86</option>
<option value="Asia-S87">
Asia-S87</option>
<option value="Asia-S88">
Asia-S88</option>
<option value="Asia-S89">
Asia-S89</option>
<option value="Asia-S90">
Asia-S90</option>
<option value="Asia-S91">
Asia-S91</option>
<option value="Asia-S92">
Asia-S92</option>
<option value="Asia-S93">
Asia-S93</option>
 <option value="Asia-S94">
Asia-S94</option>
<option value="Asia-S95">
Asia-S95</option>
<option value="Asia-S96">
Asia-S96</option>
<option value="Asia-S97">
Asia-S97</option>
<option value="Asia-S98">
Asia-S98</option>
<option value="Asia-S99">
Asia-S99</option>
<option value="Asia-S100">
Asia-S100</option>
<option value="Asia-S101">
Asia-S101</option>
<option value="Asia-S102">
Asia-S102</option>
<option value="Asia-S103">
Asia-S103</option>
<option value="Asia-S104">
Asia-S104</option>
<option value="Asia-S105">
Asia-S105</option>
<option value="Asia-S106">
Asia-S106</option>
<option value="Asia-S107">
Asia-S107</option>
<option value="Asia-S108">
Asia-S108</option>
<option value="Asia-S109">
Asia-S109</option>
 <option value="Asia-S110">
Asia-S110</option>
<option value="Asia-S111">
Asia-S111</option>
<option value="Asia-S112">
Asia-S112</option>
<option value="Asia-S113">
Asia-S113</option>
<option value="Asia-S114">
Asia-S114</option>
<option value="Asia-S115">
Asia-S115</option>
<option value="Asia-S116">
Asia-S116</option>
<option value="Asia-S117">
Asia-S117</option>
<option value="Asia-S118">
Asia-S118</option>
<option value="Asia-S119">
Asia-S119</option>
<option value="Asia-S120">
Asia-S120</option>
<option value="Asia-S121">
Asia-S121</option>
<option value="Asia-S122">
Asia-S122</option>
<option value="Asia-S123">
Asia-S123</option>
<option value="Asia-S124">
Asia-S124</option>
<option value="Asia-S125">
Asia-S125</option>
<option value="Asia-S126">
Asia-S126</option>
<option value="Asia-S127">
Asia-S127</option>
                                                </select>
                                            </div>
                                        </div>
                                        @elseif($kategori->kode == "hyperfront")
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="ID ML">ID</label>
                                                <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Server">Server</label>
                                                <select class="form-select" id="zone">
                                                    <option value="">Pilih Server</option>
                                                    <option value="sea">SEA</option>
                                                </select>
                                            </div>
                                        </div>
                                        @elseif($kategori->kode == "ragnarok-m")
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="ID ML">ID</label>
                                                    <input class="form-control" placeholder="Masukkan ID" type="text" name="ID ML" id="user_id" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label for="Server">Server</label>
                                                    <select class="form-select" id="zone">
                                                        <option value="">Pilih Server</option>
                                                        <option value="eternal_love">Eternal Love</option>
                                                        <option value="midnight_party">Midnight Party</option>
                                                        <option value="memory_of_faith">Memory Of Faith</option>
                                                    </select>
                                                </div>
                                            </div>
                                        @elseif($kategori->kode == "telkomsel" || $kategori->kode == "xl" ||$kategori->kode == "smartfren" ||$kategori->kode == "indosat" ||$kategori->kode == "tri" ||$kategori->kode == "axis" ||$kategori->kode == "byu")
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="IDML">Masukkan Nomor</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Nomor Tujuan" id="user_id">
                                            </div>
                                        </div>
                                        
                                        @elseif($kategori->kode == "shopepay" || $kategori->kode == "dana" ||$kategori->kode == "link-aja" ||$kategori->kode == "gopay" ||$kategori->kode == "ovo" ||$kategori->kode == "brizzi" ||$kategori->kode == "isaku" ||$kategori->kode == "doku" ||$kategori->kode == "sakuku" ||$kategori->kode == "maxim" ||$kategori->kode == "bukalapak" ||$kategori->kode == "mtix")
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="IDML">Masukkan Nomor</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Nomor Tujuan" id="user_id">
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="IDML">ID</label>
                                                <input type="text" class="form-control" placeholder="Masukkan ID" id="user_id">
                                            </div>
                                        </div>
                                        @endif
                                        @elseif($kategori->tipe == "joki")
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="ID ML">Email</label>
                                                <input class="form-control" placeholder="Masukkan Email" type="text" name="ID ML" id="user_id" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Server">Password</label>
                                                <input class="form-control" placeholder="Masukkan Password" type="text" name="Server" id="zone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="ID ML">Req Hero</label>
                                                <input class="form-control" placeholder="Minimal 3 hero" type="text" name="req" id="req" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label for="Server">Login</label>
                                                <select class="form-control" id="login">
                                                    <option value="">Login Via</option>
                                                    <option value="moonton">Moonton</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="tiktok">Tiktok</option>
                                                    <option value="vk">VK</option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        @endif
</div>
</div>
<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#petunjukModal">Petunjuk</button>
</div>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col">
<div class="card">
  <div class="card-header bg-dark">
<h5 class="card-title text-light">Pilih Nominal</h5>
</div>
<div class="card-body">
<div id="tempatNominal">
  <div class="row row-cols-2">
    @foreach($nominal as $nom)
    <div class="col-lg-4 mt-3">
      <div class="list-group h-100">
        <input type="radio" name="nominal" id="{{ $nom->id }}" value="{{ $nom->id }}" data-type="diamond">
      <label for="{{ $nom->id }}" class="list-group-item h-100">
      <div class="row">
      <div class="col">
      <div class="row">
      <div class="col nama-layanan-form">{{ $nom->layanan }}</div>
      </div>
      <div class="row">
      <div class="col nominal-price">Rp {{ $nom->harga }}</div>
      </div>
      </div>
      <div class="col-lg-3 col-1 m-auto">
      <img src="{{ $nom->product_logo }}" width="32px" style=" top: -1500%;right: 5%;" alt="">
      </div>
      </div>
      </label>
      </div>
      </div>
     @endforeach
   </div>
   </div>
  </div>
   </div>
 </div>
 </div>
  @if($kategori->kolom_jumlah)
 <div class="row mt-3">
  <div class="col">
   <div class="card">
   <div class="card-header bg-dark">
         <h5 class="card-title text-light">Masukkan Jumlah (Star/Point)</h5>
      </div>
         <div class="card-body">
         <div id="tempatNominal">
             <div class="form-group mb-3">
                 <input class="form-control" placeholder="" type="number" id="jumlah" required>
             </div>
         </div>
     </div>
 </div>
</div>
  </div>    
   @endif                
  <div class="row mt-3">
  <div class="col">

<div class="card">
<div class="card-header bg-dark">
<h5 class="card-title text-light">Pilih Metode Pembayaran</h5>
</div>
<div class="card-body">
<div class="area-list-payment-method">

<div class="child-box payment-drawwer">
<div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
<div class="left">
<b>
<i class="fas fa-landmark"></i>
<!--Transfer Bank </b>-->
<!--</div>-->
<!--<div class="right"></div>-->
<!--</div>-->
<!--<div class="button-action-payment" style="display:none;">-->
<!--<ul>-->
<!--<li>-->
<!--  <input type="radio" name="pembayaran" id="bcatf" value="bcatf">-->
  
<!--<label for="bcatf" class="payment-item">-->
<!--<div class="info-top">-->
<!--<div>-->
<!--<img src="/assets/bca1.png">-->
<!--</div>-->
<!--<b id="BCATF"></b>-->
<!--</div>-->
<!--<div class="info-bottom"> BANK BCA<br>Pengecekan Membutuhkan Waktu 1-10 Menit</div>-->
<!--</label>-->
<!--</li>-->
<!--</ul>-->
<!--</div>-->
<!--<div class="short-payment-support-info" onclick="openPaymentDrawer(this)">-->
<!--<img src="/assets/bcap.png" alt="" class="m-1" style="border-radius: 1px">-->
<!--<a class="open-button-action-payment">-->
<!--<i class="fas fa-chevron-down"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="child-box payment-drawwer">-->
<!--<div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">-->
<!--<div class="left">-->
<!--<b>-->
<!--<i class="far fa-credit-card"></i>-->
Virtual Account </b>
</div>
<div class="right"></div>
</div>
<div class="button-action-payment" style="display:none;">
<ul>
<li>
  <input type="radio" name="pembayaran" id="bcava" value="bca">
<label for="bcava" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/bca1.png">
</div>
<b id="BCA"></b>
</div>
<div class="info-bottom"> BCA Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="bniva" value="bni">
<label for="bniva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/bni1.png">
</div>
<b id="BNI"></b>
</div>
<div class="info-bottom"> BNI Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="mandiriva" value="mandiri">
<label for="mandiriva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/mandiri1.png">
</div>
<b id="MANDIRI"></b>
</div>
<div class="info-bottom"> Mandiri Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="briva" value="bri">
<label for="briva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/bri1.png">
</div>
<b id="BRI"></b>
</div>
<div class="info-bottom"> BRI Virtual Account<br>Proses Otomatis</div>
</label>
</li>
 <li>
<input type="radio" name="pembayaran" id="cimbva" value="cimb">
<label for="cimbva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/cimb1.png">
</div>
<b id="CIMB"></b>
</div>
<div class="info-bottom"> CIMB Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="bsiva" value="bsi">
<label for="bsiva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/bsi.webp">
</div>
<b id="BSI"></b>
</div>
<div class="info-bottom"> BSI Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="muamalatva" value="bmi">
<label for="muamalatva" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/mualamat1.png">
</div>
<b id="MUAMALAT"></b>
</div>
<div class="info-bottom"> Muamalat Virtual Account<br>Proses Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="permatava" value="permata">
<label for="permatava" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/permata1.png">
</div>
<b id="PERMATA"></b>
</div>
<div class="info-bottom"> PERMATA Virtual Account<br>Proses Otomatis</div>
</label>
</li>
</ul>
</div>
<div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
<img src="/assets/bcap.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/bnip.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/mandirip.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/brip.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/cimbp.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/bsip.png" alt="" class="m-1" style="border-radius: 1px">
  <img src="/assets/permatap.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/mualamatp.png" alt="" class="m-1" style="border-radius: 1px">
<a class="open-button-action-payment">
<i class="fas fa-chevron-down"></i>
</a>
</div>
</div>
<div class="child-box payment-drawwer">
<div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
<div class="left">
<b>
<i class="fas fa-store"></i>
Convenience Store </b>
</div>
<div class="right"></div>
</div>
<div class="button-action-payment" style="display:none;">
<ul>
<li>
  <input type="radio" name="pembayaran" id="alfamart" value="alfamart">
<label for="alfamart" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/alfa1.png">
</div>
<b id="ALFAMART"></b>
</div>
<div class="info-bottom"> Alfamart<br>Biaya tambahan Rp4.347 dikasir</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="indomaret" value="indomaret">
<label for="indomaret" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/indo1.png">
</div>
<b id="INDOMARET"></b>
</div>

<div class="info-bottom"> Indomaret<br>Biaya tambahan Rp4.686 dikasir</div>
</label>
</li>
</ul>
</div>
<div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
<img src="/assets/alfap.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/indop.png" alt="" class="m-1" style="border-radius: 1px">
<a class="open-button-action-payment">
<i class="fas fa-chevron-down"></i>
</a>
</div>
</div>
<div class="child-box payment-drawwer">
<div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
<div class="left">
<b>
<i class="fas fa-wallet"></i>
E-Wallet </b>
</div>
<div class="right"></div>
</div>
<div class="button-action-payment" style="display:none;">
<ul>
<li>
  <input type="radio" name="pembayaran" id="qris" value="qris">
<label for="qris" class="payment-item">
<div class="info-top">
 <div>
<img src="/assets/qris1.png">
</div>
<b id="QRIS"></b>
</div>
<div class="info-bottom">All Bank & All E-Wallet<br>Dicek Otomatis</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="gopay" value="gopay">
<label for="gopay" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/gopay1.png">
</div>
<b id="GOPAY"></b>
</div>
<div class="info-bottom">GoPay<br>Dicek Setiap 3 Menit</div>
</label>
</li>
<li>
  <input type="radio" name="pembayaran" id="ovo" value="ovo">
<label for="ovo" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/ovo.png">
</div>
<b id="OVO"></b>
</div>
<div class="info-bottom">OVO<br>Dicek Setiap 3 Menit</div>
</label>
</li>
</ul>
</div>
<div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
<img src="/assets/qrisp.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/gopayp.png" alt="" class="m-1" style="border-radius: 1px">
<img src="/assets/ovop.png" alt="" class="m-1" style="border-radius: 1px">
<img src="https://www.ourastore.com/assets/img/logos/Dana.png" alt="" class="m-1" style="background-color: white; border-radius: 3px; border: 1px solid white;">
<img src="https://www.ourastore.com/assets/img/logos/Shopeepay.png" alt="" class="m-1" style="background-color: white; border-radius: 3px; border: 1px solid white;"> 
<img src="https://www.ourastore.com/assets/img/logos/Linkaja.png" alt="" class="m-1" style="background-color: white; border-radius: 3px; border: 1px solid white;"> 
<a class="open-button-action-payment">
<i class="fas fa-chevron-down"></i>
</a>
</div>
</div>

<div class="child-box payment-drawwer">
<div class="header short-payment-support-info-head" onclick="openPaymentDrawer(this)">
<div class="left">
<b>
<i class="fa fa-check-circle"></i>
Saldo </b>
</div>
<div class="right"></div>
</div>
<div class="button-action-payment" style="display:none;">
<ul>
<li>
  @auth
    <input type="radio" name="pembayaran" id="saldo" value="Saldo">
  @endauth
  
  @guest
  <input type="radio" name="pembayaran" id="saldo" value="Saldo" disabled>
  @endguest
<label for="saldo" class="payment-item">
<div class="info-top">
<div>
<img src="/assets/saldo.png">
</div>
<b id="SALDO"></b>
</div>
<div class="info-bottom"> Saldo<br>Login untuk menggunakan saldo</div>
</label>
</li>
</ul>
</div>
<div class="short-payment-support-info" onclick="openPaymentDrawer(this)">
<img src="/assets/saldo.png" alt="" class="m-1" style="border-radius: 1px">
<a class="open-button-action-payment">
<i class="fas fa-chevron-down"></i>
</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col">
<div class="card">
<div class="card-header bg-dark">
<h5 class="card-title text-light">Kode Promo</h5>
</div>
<div class="card-body">
<div class="hstack gap-2">
<input class="form-control me-auto" type="text" id="voucher" name="voucher" placeholder="Masukan kode Promo">
<button type="button" class="btn btn-secondary btn-xl" id="check">Gunakan</button>
</div>
<p class="text-muted mb-2">
Jika tidak mempunyai kode promo abaikan saja
</p>
</div>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col">
<div class="card">
<div class="card-header bg-dark">
<h5 class="card-title text-light">Nomor Whatsapp</h5>
</div>
<div class="card-body">
<div class="form-group mb-3">
<label for="phone">Masukan Nomor Whatsapp</label>
<input class="form-control" placeholder="08xxxxxxxxxx" type="number" name="nomor" id="nomor" required="">
</div>
</div>
</div>
</div>
</div>
<div class="row mt-3 mb-5">
<div class="col-lg-12 clearfix">
<input type="hidden" id="apikey" name="apikey" value="">
<input type="hidden" name="product_name" id="product_name" value="Mobile Legends">
<input type="hidden" name="product_id" id="product_id" value="1">
<div class="w-100">
    <!--< <div class="g-recaptcha" data-sitekey="{{ ENV('CAPTCHA_SITE_KEY') }}"></div> -->
<button class="btn btn-primary w-100 btn-lg" type="button" id="order">
<i class="fas fa-cart-arrow-down"></i> Order Now </button>
</div>
</div>
</div>

</div>
</form>
</div>
</div>
</div> 
</div>

@push('script-lib')
<script type="text/javascript">
function openPaymentDrawer(elem) {
    var $this = $(elem);


    $('.payment-drawwer').not(this).each(function() {
        var $parents = $(this);
        $parents.find('.button-action-payment').slideUp(function() {
            $parents.removeClass('active');
        });

        $parents.find('.short-payment-support-info').find('img').slideDown();
        $parents.find('.short-payment-support-info').find('i').removeClass('fa-chevron-up').addClass(
            'fa-chevron-down');
    });

    var $parents = $this.parents('.child-box');

    if (!$parents.find('.button-action-payment').is(":hidden")) {
        $parents.find('.button-action-payment').slideUp(function() {
            $parents.removeClass('active');
        });

        $parents.find('.short-payment-support-info').find('img').slideDown();
        $parents.find('.short-payment-support-info').find('.fa-chevron-up').removeClass('fa-chevron-up').addClass(
            'fa-chevron-down');

    } else {
        $parents.find('.button-action-payment').slideDown(function() {
            $parents.addClass('active');
        });
        $parents.find('.short-payment-support-info').find('img').slideUp();
        $parents.find('.short-payment-support-info').find('.fa-chevron-down').addClass('fa-chevron-up').removeClass(
            'fa-chevron-down');

    }
}
        </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("input[type='radio'][name='pembayaran']").change(function() {
        if ($(this).is(":checked")) {

            $("li.active").removeClass("active")
            $(this).parent('li').addClass("active")

        }
    })
    
        $("input[type=radio][name=nominal]").change(function() {
            var nominal = $("input[name='nominal']:checked").val();

            if (nominal) {
                $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": nominal
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    }
                })
            }
        });
        
        @if($kategori->kolom_jumlah)
        $("#jumlah").change(function(){
            var layanan = $("input[name='nominal']:checked").val();
            var jumlah = $("#jumlah").val();
            
            if (layanan) {
                $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": layanan,
                        "jumlah": $("#jumlah").val()
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    }
                })
            }
        })
        @endif        
        $("#order").on("click", function() {
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var email = $("input[name='email']").val();
            var voucher = $("#voucher").val();
            $.ajax({
                url: "<?php echo route('ajax.confirm-data') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                //  'captcha': grecaptcha.getResponse(),
                    'email': email,
                    'voucher': voucher,
                    @if($kategori->tipe == "joki")
                    'reqHero': $("#req").val(),
                    'login': $("#login option:selected").val(),
                    @endif
                    @if($kategori->kolom_jumlah)
                    'jumlah': $("#jumlah").val(),
                    @endif
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function(res) {
                    if (res.status == true) {
                        Swal.fire({
                            background: '#fff',
                            color: '#000',
                            titleText: 'Data Pembeli',
                            html: `${res.data}`,
                            showCancelButton: true,
                            confirmButtonText: 'Lanjutkan Pembelian',
                            cancelButtonText: 'Batal',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                                var email = $("input[name='email']").val();
                                $.ajax({
                                    url: "<?php echo route('order') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        'email': email,
                                        'voucher': voucher,
                                        @if($kategori->tipe == "joki")
                                        'reqHero': $("#req").val(),
                                        'login': $("#login option:selected").val(),
                                        @endif
                                        @if($kategori->kolom_jumlah)
                                        'jumlah': $("#jumlah").val()
                                        @endif
                                    },
                                    success: function(resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                background: '#fff',
                                                color: '#000'
                                            });
                                            window.location = `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                background: '#fff',
                                                color: '#000'
                                            });
                                            $("#order").removeClass("disabled");
                                        }
                                    },
                                   beforeSend: function(){
                                        Swal.fire({
                                            icon: "info",
                                            title: "Mohon Tunggu",
                                            background: '#fff',
                                            color: '#000',
                                            showConfirmButton: false,
                                            allowOutsideClick: false,
                                        });
                                        $("#order").addClass("disabled");
                                    },                                    
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.data,
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    }
                },
                error: function(e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#fff',
                            color: '#000'
                        });
                    }
                }
            })
        })
        
        $("#check").on("click", function(){
            var voucher = $("#voucher").val();
            var service = $("input[name='nominal']:checked").val();
            $.ajax({
                url: "<?php echo route('check.voucher') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    "_token": "<?php echo csrf_token(); ?>",
                    "voucher": voucher,
                    "service": service
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function (res){
                    Swal.fire({
                        icon: "info",
                        title: res.message,
                        background: '#fff',
                        color: '#000',
                        showConfirmButton: true,
                        allowOutsideClick: true,
                    });                   
                    
                    if(res.harga){
                        changeHarga(res.harga);
                    }
                },
                error: function(e){
                    Swal.fire({
                        title: 'Oops...',
                        text: e.responseJSON.message,
                        icon: 'error',
                        background: '#fff',
                        color: '#000'
                    });                    
                }
            }) 
        });
        
    });
    function changeHarga(harga)
    {
        $("#OVO").html(harga);
        $("#GOPAY").html(harga);
        $("#PERMATA").html(harga);
        $("#CIMBVA").html(harga);
        $("#BSIVA").html(harga);
        $("#BNI").html(harga);
        $("#BRI").html(harga);
        $("#MANDIRI").html(harga);
        $("#BCA").html(harga);
        $("#ALFAMART").html(harga);
        $("#INDOMARET").html(harga);
        $("#ALFAMIDI").html(harga);
        $("#MANDIRIVA").html(harga);
        $("#OVOS").html(harga);
        $("#QRIS").html(harga);
        $("#MYBVA").html(harga);
        $("#SMSVA").html(harga);
        $("#CIMB").html(harga);
        $("#OVO").html(harga);
        $("#SHOPEEPAY").html(harga);
        $("#BSS").html(harga);
        $("#LINKAJA").html(harga);
        $("#DANA").html(harga);
        $("#SALDO").html(harga);
        $("#QRISD").html(harga);
        $("#BCATF").html(harga);
        $("#BSI").html(harga);  
        $("#MUAMALAT").html(harga);  
    }
</script>
@endpush
@endsection

