<?php include("header.php"); ?>

<div id="appartements-plans" class="content">
    <div class="full-img" id="img-plans"></div>

    <div class="w1280" id="gf">
        <div id="facade-fix"></div>
        <div id="general-facade">
            <div>
                <div id="facade-w">
                    <?php include("imgs/facade_all.svg"); ?>
                </div>

                <div id="facade-help">
                    <button class="fh-btn" id="prev" onclick="gal(0)">&lt;</button>
                    <img id="gi1" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/700/asud.jpg" alt="">
                    <img id="gi2" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/700/anord.jpg" alt="" class="ab">
                    <img id="gi3" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/700/bsud.jpg" alt="" class="ab">
                    <img id="gi4" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/700/master-side.jpg" alt="" class="ab">
                    <button class="fh-btn" id="next" onclick="gal(1)">&gt;</button>
                    <button id="show-img" onclick="showImg()"></button>
                </div>
            </div>
        </div>
    </div>      

    <div class="w1920" id="gf2">
        <div id="filters">

            <div id="statuses">
                <span><span class="x-libre" style="margin-right: 5px;">L</span><span style="margin-right: 15px;">Disponible</span></span>
                <span><span class="x-reserve" style="margin-right: 5px;">R</span><span style="margin-right: 15px;">Réservé</span></span>
                <span><span class="x-vendu" style="margin-right: 5px;">V</span><span style="margin-right: 15px;">Vendu</span></span>
            </div>  
            <div class="filters">
                <div class="f-statuses">
                    <h4>Status</h4>
                    <div><input type="checkbox" name="f-status-1" id="f-status-1" checked><label for="f-status-1">✕</label>Disponible</div>
                    <div><input type="checkbox" name="f-status-2" id="f-status-2" checked><label for="f-status-2">✕</label>Réservé</div>
                    <div><input type="checkbox" name="f-status-3" id="f-status-3" checked><label for="f-status-3">✕</label>Vendu</div>
                </div><div class="f-etage">
                <h4>Étage</h4>
                <div><input type="checkbox" name="f-etage-0" id="f-etage-0" checked><label for="f-etage-0">✕</label>Rez-de-chaussée</div>
                <div><input type="checkbox" name="f-etage-1" id="f-etage-1" checked><label for="f-etage-1">✕</label>1er étage</div>
                <div><input type="checkbox" name="f-etage-2" id="f-etage-2" checked><label for="f-etage-2">✕</label>2ème étage</div>
                <div><input type="checkbox" name="f-etage-3" id="f-etage-3" checked><label for="f-etage-3">✕</label>3ème étage</div>
                <div><input type="checkbox" name="f-etage-4" id="f-etage-4" checked><label for="f-etage-4">✕</label>4ème étage</div>
                </div><div class="f-pieces">
                <h4>Typologie</h4>
                <div><input type="checkbox" name="f-piece-1" id="f-piece-1" checked><label for="f-piece-1">✕</label>1 pièce</div>
                <div><input type="checkbox" name="f-piece-2" id="f-piece-2" checked><label for="f-piece-2">✕</label>2 pièces</div>
                <div><input type="checkbox" name="f-piece-3" id="f-piece-3" checked><label for="f-piece-3">✕</label>3 pièces</div>
                <div><input type="checkbox" name="f-piece-4" id="f-piece-4" checked><label for="f-piece-4">✕</label>4 pièces</div>
                <div><input type="checkbox" name="f-piece-5" id="f-piece-5" checked><label for="f-piece-5">✕</label>5 pièces</div>
                </div>
            </div>
        </div>
        <div id="facade-table">
        
<div id="tablepress-1_wrapper" class="dataTables_wrapper no-footer"><table id="tablepress-1" class="tablepress tablepress-id-1 dataTable no-footer" role="grid">
<thead>
<tr class="row-1 odd" role="row"><th class="column-1 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Bien: activate to sort column ascending" style="width: 44px;">Bien</th><th class="column-2 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 55px;">Status</th><th class="column-3 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Étage: activate to sort column ascending" style="width: 51px;">Étage</th><th class="column-4 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Pièces: activate to sort column ascending" style="width: 55px;">Pièces</th><th class="column-5 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Surfaceintérieure: activate to sort column ascending" style="width: 77px;">Surface<br>intérieure</th><th class="column-6 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Balcon: activate to sort column ascending" style="width: 58px;">Balcon</th><th class="column-7 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Jardin: activate to sort column ascending" style="width: 54px;">Jardin</th><th class="column-8 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Terrasse: activate to sort column ascending" style="width: 68px;">Terrasse</th><th class="column-9 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Surfacepondérée: activate to sort column ascending" style="width: 75px;">Surface<br>pondérée</th><th class="column-10 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Orient.: activate to sort column ascending" style="width: 64px;">Orient.</th><th class="column-11 sorting" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Plans: activate to sort column ascending" style="width: 49px;">Plans</th></tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even" role="row">
	<td class="column-1">A001</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">45,10</td><td class="column-6">-</td><td class="column-7">18,50</td><td class="column-8">10,80</td><td class="column-9">49,70</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(1)">Plan</button></td>
</tr><tr class="row-3 odd" role="row">
	<td class="column-1">A002</td><td class="column-2">Disponible</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">41,70</td><td class="column-6">-</td><td class="column-7">38,70</td><td class="column-8">10,80</td><td class="column-9">46,43</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(2)">Plan</button></td>
</tr><tr class="row-4 even" role="row">
	<td class="column-1">A003</td><td class="column-2">Disponible</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">41,90</td><td class="column-6">-</td><td class="column-7">35,90</td><td class="column-8">10,80</td><td class="column-9">46,63</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(3)">Plan</button></td>
</tr><tr class="row-5 odd" role="row">
	<td class="column-1">A004</td><td class="column-2">Disponible</td><td class="column-3">Rez</td><td class="column-4">4</td><td class="column-5">98,40</td><td class="column-6">-</td><td class="column-7">373,00</td><td class="column-8">21,40</td><td class="column-9">107,82</td><td class="column-10">Nord/Ouest</td><td class="column-11"><button onclick="plans(4)">Plan</button></td>
</tr><tr class="row-6 even" role="row">
	<td class="column-1">A005</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">-</td><td class="column-7">51,90</td><td class="column-8">10,80</td><td class="column-9">47,02</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(5)">Plan</button></td>
</tr><tr class="row-7 odd" role="row">
	<td class="column-1">A006</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">-</td><td class="column-7">67,10</td><td class="column-8">10,80</td><td class="column-9">47,02</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(6)">Plan</button></td>
</tr><tr class="row-8 even" role="row">
	<td class="column-1">A007</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">41,50</td><td class="column-6">-</td><td class="column-7">31,90</td><td class="column-8">10,80</td><td class="column-9">46,22</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(7)">Plan</button></td>
</tr><tr class="row-9 odd" role="row">
	<td class="column-1">A008</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">2</td><td class="column-5">51,70</td><td class="column-6">-</td><td class="column-7">55,60</td><td class="column-8">26,30</td><td class="column-9">63,00</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(8)">Plan</button></td>
</tr><tr class="row-10 even" role="row">
	<td class="column-1">A009</td><td class="column-2">Réservé</td><td class="column-3">Rez</td><td class="column-4">3</td><td class="column-5">66,30</td><td class="column-6">-</td><td class="column-7">71,60</td><td class="column-8">22,60</td><td class="column-9">77,60</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(9)">Plan</button></td>
</tr><tr class="row-11 odd" role="row">
	<td class="column-1">A101</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">45,10</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">48,40</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(10)">Plan</button></td>
</tr><tr class="row-12 even" role="row">
	<td class="column-1">A102</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">41,70</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,00</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(11)">Plan</button></td>
</tr><tr class="row-13 odd" role="row">
	<td class="column-1">A103</td><td class="column-2">Disponible</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">41,90</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,20</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(12)">Plan</button></td>
</tr><tr class="row-14 even" role="row">
	<td class="column-1">A104</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">4</td><td class="column-5">98,40</td><td class="column-6">16,30</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">106,55</td><td class="column-10">Nord/Ouest</td><td class="column-11"><button onclick="plans(13)">Plan</button></td>
</tr><tr class="row-15 odd" role="row">
	<td class="column-1">A105</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(14)">Plan</button></td>
</tr><tr class="row-16 even" role="row">
	<td class="column-1">A106</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(15)">Plan</button></td>
</tr><tr class="row-17 odd" role="row">
	<td class="column-1">A107</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">41,50</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">44,80</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(16)">Plan</button></td>
</tr><tr class="row-18 even" role="row">
	<td class="column-1">A108</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">2</td><td class="column-5">51,70</td><td class="column-6">14,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">59,15</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(17)">Plan</button></td>
</tr><tr class="row-19 odd" role="row">
	<td class="column-1">A109</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">3</td><td class="column-5">78,70</td><td class="column-6">23,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">90,25</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(18)">Plan</button></td>
</tr><tr class="row-20 even" role="row">
	<td class="column-1">A201</td><td class="column-2">Réservé</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">45,10</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">48,40</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(19)">Plan</button></td>
</tr><tr class="row-21 odd" role="row">
	<td class="column-1">A202</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">41,70</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,00</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(20)">Plan</button></td>
</tr><tr class="row-22 even" role="row">
	<td class="column-1">A203</td><td class="column-2">Disponible</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">41,90</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,20</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(21)">Plan</button></td>
</tr><tr class="row-23 odd" role="row">
	<td class="column-1">A204</td><td class="column-2">Disponible</td><td class="column-3">2ème</td><td class="column-4">4</td><td class="column-5">98,40</td><td class="column-6">16,30</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">106,55</td><td class="column-10">Nord/Ouest</td><td class="column-11"><button onclick="plans(22)">Plan</button></td>
</tr><tr class="row-24 even" role="row">
	<td class="column-1">A205</td><td class="column-2">Disponible</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(23)">Plan</button></td>
</tr><tr class="row-25 odd" role="row">
	<td class="column-1">A206</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(24)">Plan</button></td>
</tr><tr class="row-26 even" role="row">
	<td class="column-1">A207</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">41,50</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">44,80</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(25)">Plan</button></td>
</tr><tr class="row-27 odd" role="row">
	<td class="column-1">A208</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">2</td><td class="column-5">51,70</td><td class="column-6">14,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">59,15</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(26)">Plan</button></td>
</tr><tr class="row-28 even" role="row">
	<td class="column-1">A209</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">3</td><td class="column-5">78,70</td><td class="column-6">23,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">90,25</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(27)">Plan</button></td>
</tr><tr class="row-29 odd" role="row">
	<td class="column-1">A301</td><td class="column-2">Vendu</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">45,10</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">48,40</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(28)">Plan</button></td>
</tr><tr class="row-30 even" role="row">
	<td class="column-1">A302</td><td class="column-2">Réservé</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">41,70</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,00</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(29)">Plan</button></td>
</tr><tr class="row-31 odd" role="row">
	<td class="column-1">A303</td><td class="column-2">Réservé</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">41,90</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,20</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(30)">Plan</button></td>
</tr><tr class="row-32 even" role="row">
	<td class="column-1">A304</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">4</td><td class="column-5">98,40</td><td class="column-6">16,30</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">106,55</td><td class="column-10">Nord/Ouest</td><td class="column-11"><button onclick="plans(31)">Plan</button></td>
</tr><tr class="row-33 odd" role="row">
	<td class="column-1">A305</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(32)">Plan</button></td>
</tr><tr class="row-34 even" role="row">
	<td class="column-1">A306</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(33)">Plan</button></td>
</tr><tr class="row-35 odd" role="row">
	<td class="column-1">A307</td><td class="column-2">Vendu</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">41,50</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">44,80</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(34)">Plan</button></td>
</tr><tr class="row-36 even" role="row">
	<td class="column-1">A308</td><td class="column-2">Réservé</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">51,70</td><td class="column-6">14,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">59,15</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(35)">Plan</button></td>
</tr><tr class="row-37 odd" role="row">
	<td class="column-1">A309</td><td class="column-2">Réservé</td><td class="column-3">3ème</td><td class="column-4">3</td><td class="column-5">78,70</td><td class="column-6">23,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">90,25</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(36)">Plan</button></td>
</tr><tr class="row-38 even" role="row">
	<td class="column-1">A401</td><td class="column-2">Réservé</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">45,10</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">48,40</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(37)">Plan</button></td>
</tr><tr class="row-39 odd" role="row">
	<td class="column-1">A402</td><td class="column-2">Réservé</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">41,70</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,00</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(38)">Plan</button></td>
</tr><tr class="row-40 even" role="row">
	<td class="column-1">A403</td><td class="column-2">Réservé</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">41,90</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,20</td><td class="column-10">Ouest</td><td class="column-11"><button onclick="plans(39)">Plan</button></td>
</tr><tr class="row-41 odd" role="row">
	<td class="column-1">A404</td><td class="column-2">Vendu</td><td class="column-3">4ème</td><td class="column-4">4</td><td class="column-5">98,40</td><td class="column-6">16,30</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">106,55</td><td class="column-10">Nord/Ouest</td><td class="column-11"><button onclick="plans(40)">Plan</button></td>
</tr><tr class="row-42 even" role="row">
	<td class="column-1">A405</td><td class="column-2">Vendu</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(41)">Plan</button></td>
</tr><tr class="row-43 odd" role="row">
	<td class="column-1">A406</td><td class="column-2">Vendu</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">42,30</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">45,60</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(42)">Plan</button></td>
</tr><tr class="row-44 even" role="row">
	<td class="column-1">A407</td><td class="column-2">Disponible</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">41,50</td><td class="column-6">6,60</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">44,80</td><td class="column-10">Est</td><td class="column-11"><button onclick="plans(43)">Plan</button></td>
</tr><tr class="row-45 odd" role="row">
	<td class="column-1">A408</td><td class="column-2">Disponible</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">51,70</td><td class="column-6">14,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">59,15</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(44)">Plan</button></td>
</tr><tr class="row-46 even" role="row">
	<td class="column-1">A409</td><td class="column-2">Vendu</td><td class="column-3">4ème</td><td class="column-4">3</td><td class="column-5">78,70</td><td class="column-6">23,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">90,25</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(45)">Plan</button></td>
</tr><tr class="row-47 odd" role="row">
	<td class="column-1">B001</td><td class="column-2">Disponible</td><td class="column-3">Rez</td><td class="column-4">4</td><td class="column-5">107,50</td><td class="column-6">-</td><td class="column-7">357,30</td><td class="column-8">45,80</td><td class="column-9">126,38</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(46)">Plan</button></td>
</tr><tr class="row-48 even" role="row">
	<td class="column-1">B002</td><td class="column-2">Disponible</td><td class="column-3">Rez</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">-</td><td class="column-7">80,70</td><td class="column-8">18,30</td><td class="column-9">86,18</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(47)">Plan</button></td>
</tr><tr class="row-49 odd" role="row">
	<td class="column-1">B003</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">-</td><td class="column-7">98,00</td><td class="column-8">18,30</td><td class="column-9">86,18</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(48)">Plan</button></td>
</tr><tr class="row-50 even" role="row">
	<td class="column-1">B004</td><td class="column-2">Vendu</td><td class="column-3">Rez</td><td class="column-4">3</td><td class="column-5">77,20</td><td class="column-6">-</td><td class="column-7">217,00</td><td class="column-8">36,80</td><td class="column-9">93,10</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(49)">Plan</button></td>
</tr><tr class="row-51 odd" role="row">
	<td class="column-1">B005</td><td class="column-2">Réservé</td><td class="column-3">Rez</td><td class="column-4">1</td><td class="column-5">25,10</td><td class="column-6">-</td><td class="column-7">46,10</td><td class="column-8">10,50</td><td class="column-9">28,60</td><td class="column-10">Nord</td><td class="column-11"><button onclick="plans(50)">Plan</button></td>
</tr><tr class="row-52 even" role="row">
	<td class="column-1">B101</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">4</td><td class="column-5">107,50</td><td class="column-6">22,20</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">118,60</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(51)">Plan</button></td>
</tr><tr class="row-53 odd" role="row">
	<td class="column-1">B102</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">17,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">86,75</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(52)">Plan</button></td>
</tr><tr class="row-54 even" role="row">
	<td class="column-1">B103</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">17,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">86,75</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(53)">Plan</button></td>
</tr><tr class="row-55 odd" role="row">
	<td class="column-1">B104</td><td class="column-2">Vendu</td><td class="column-3">1er</td><td class="column-4">3</td><td class="column-5">77,20</td><td class="column-6">22,20</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">88,30</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(54)">Plan</button></td>
</tr><tr class="row-56 even" role="row">
	<td class="column-1">B105</td><td class="column-2">Réservé</td><td class="column-3">1er</td><td class="column-4">1</td><td class="column-5">25,10</td><td class="column-6">-</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">25,10</td><td class="column-10">Nord</td><td class="column-11"><button onclick="plans(55)">Plan</button></td>
</tr><tr class="row-57 odd" role="row">
	<td class="column-1">B201</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">4</td><td class="column-5">107,50</td><td class="column-6">22,20</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">118,60</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(56)">Plan</button></td>
</tr><tr class="row-58 even" role="row">
	<td class="column-1">B202</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">17,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">86,75</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(57)">Plan</button></td>
</tr><tr class="row-59 odd" role="row">
	<td class="column-1">B203</td><td class="column-2">Réservé</td><td class="column-3">2ème</td><td class="column-4">3</td><td class="column-5">77,80</td><td class="column-6">17,90</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">86,75</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(58)">Plan</button></td>
</tr><tr class="row-60 even" role="row">
	<td class="column-1">B204</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">3</td><td class="column-5">77,20</td><td class="column-6">22,20</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">88,30</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(59)">Plan</button></td>
</tr><tr class="row-61 odd" role="row">
	<td class="column-1">B205</td><td class="column-2">Vendu</td><td class="column-3">2ème</td><td class="column-4">1</td><td class="column-5">25,10</td><td class="column-6">-</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">25,10</td><td class="column-10">Nord</td><td class="column-11"><button onclick="plans(60)">Plan</button></td>
</tr><tr class="row-62 even" role="row">
	<td class="column-1">B301</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">5</td><td class="column-5">134,90</td><td class="column-6">29,00</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">149,40</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(61)">Plan</button></td>
</tr><tr class="row-63 odd" role="row">
	<td class="column-1">B302</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">51,20</td><td class="column-6">12,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">57,25</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(62)">Plan</button></td>
</tr><tr class="row-64 even" role="row">
	<td class="column-1">B303</td><td class="column-2">Disponible</td><td class="column-3">3ème</td><td class="column-4">2</td><td class="column-5">51,20</td><td class="column-6">12,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">57,25</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(63)">Plan</button></td>
</tr><tr class="row-65 odd" role="row">
	<td class="column-1">B304</td><td class="column-2">Réservé</td><td class="column-3">3ème</td><td class="column-4">4</td><td class="column-5">104,50</td><td class="column-6">29,00</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">119,00</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(64)">Plan</button></td>
</tr><tr class="row-66 even" role="row">
	<td class="column-1">B305</td><td class="column-2">Vendu</td><td class="column-3">3ème</td><td class="column-4">1</td><td class="column-5">25,10</td><td class="column-6">-</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">25,10</td><td class="column-10">Nord</td><td class="column-11"><button onclick="plans(65)">Plan</button></td>
</tr><tr class="row-67 odd" role="row">
	<td class="column-1">B401</td><td class="column-2">Réservé</td><td class="column-3">4ème</td><td class="column-4">5</td><td class="column-5">134,90</td><td class="column-6">29,00</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">149,40</td><td class="column-10">Sud/Est</td><td class="column-11"><button onclick="plans(66)">Plan</button></td>
</tr><tr class="row-68 even" role="row">
	<td class="column-1">B402</td><td class="column-2">Réservé</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">51,20</td><td class="column-6">12,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">57,25</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(67)">Plan</button></td>
</tr><tr class="row-69 odd" role="row">
	<td class="column-1">B403</td><td class="column-2">Disponible</td><td class="column-3">4ème</td><td class="column-4">2</td><td class="column-5">51,20</td><td class="column-6">12,10</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">57,25</td><td class="column-10">Sud</td><td class="column-11"><button onclick="plans(68)">Plan</button></td>
</tr><tr class="row-70 even" role="row">
	<td class="column-1">B404</td><td class="column-2">Disponible</td><td class="column-3">4ème</td><td class="column-4">4</td><td class="column-5">104,50</td><td class="column-6">29,00</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">119,00</td><td class="column-10">Sud/Ouest</td><td class="column-11"><button onclick="plans(69)">Plan</button></td>
</tr><tr class="row-71 odd" role="row">
	<td class="column-1">B405</td><td class="column-2">Vendu</td><td class="column-3">4ème</td><td class="column-4">1</td><td class="column-5">25,10</td><td class="column-6">-</td><td class="column-7">-</td><td class="column-8">-</td><td class="column-9">25,10</td><td class="column-10">Nord</td><td class="column-11"><button onclick="plans(70)">Plan</button></td>
</tr></tbody>
</table></div>
        </div>
    </div>

    <div id="morebox" aria-hidden="true">
        <div id="morebox-data">
            <div class="close">&#10006;</div>
            <div id="info-bordered">
                <div id="info-table">
                    <div id="lot-name"></div>
                    <div><span class="static-info">Étage</span><span id="etage"></span></div>
                    <div><span class="static-info">Pièces</span><span id="pieces"></span></div>
                    <div><span class="static-info">Surface</span><span id="surface"></span></div>
                    <div><span class="static-info">Balcon</span><span id="balcons"></span></div>
                    <div><span class="static-info">Jardin</span><span id="jardin"></span></div>
                    <div><span class="static-info">Terrasse</span><span id="terrasse"></span></div>
                    <div><span class="static-info">Surface pondérée</span><span id="terrasseB"></span></div>
                    <div><span class="static-info">Orientation</span><span id="surfaceB"></span></div>
                </div><div id="info-plan">
                <img src="">
                </div><div id="info-form">
                <p>Pour recevoir votre lien de téléchargement, merci de nous communiquer les informations suivantes:</p>

                <div role="form" class="wpcf7" id="wpcf7-f104-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="104">
<input type="hidden" name="_wpcf7_version" value="5.3.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f104-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<p><label> Prénom* <span class="wpcf7-form-control-wrap first_name"><input type="text" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Nom* <span class="wpcf7-form-control-wrap surname"><input type="text" name="surname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Adresse E-mail* <span class="wpcf7-form-control-wrap sender"><input type="email" name="sender" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span><br>
</label><label> N° de téléphone* <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Adresse* <span class="wpcf7-form-control-wrap address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> NPA* <span class="wpcf7-form-control-wrap postcode"><input type="text" name="postcode" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Lieu*<span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br>
</label><label> Pays* <span class="wpcf7-form-control-wrap country">
			<select class="" id="country" name="country" required="required" aria-invalid="false" aria-required="true">
				<option selected="selected" value="CH">Suisse</option>
			<option value="">Choisissez votre pays</option>
			<optgroup label="Europe">
				<option value="AL">Albanie</option>
				<option value="DE">Allemagne</option>
				<option value="AD">Andorre</option>
				<option value="AN">Antilles Néerlandaises</option>
				<option value="AT">Autriche</option>
				<option value="BY">Belarus</option>
				<option value="BE">Belgique</option>
				<option value="BA">Bosnie-Herzégovine</option>
				<option value="BG">Bulgarie</option>
				<option value="CY">Chypre</option>
				<option value="HR">Croatie</option>
				<option value="CW">Curacao</option>
				<option value="DK">Danemark</option>
				<option value="ES">Espagne</option>
				<option value="EE">Estonie</option>
				<option value="FO">Feroë (Iles)</option>
				<option value="FI">Finlande</option>
				<option value="FR">France</option>
				<option value="GI">Gibraltar</option>
				<option value="GD">Grenade</option>
				<option value="GL">Groënland</option>
				<option value="GR">Grêce</option>
				<option value="GP">Guadeloupe</option>
				<option value="GG">Guernesey</option>
				<option value="GF">Guyane Francaise</option>
				<option value="HU">Hongrie</option>
				<option value="IE">Irlande</option>
				<option value="IS">Islande</option>
				<option value="IT">Italie</option>
				<option value="JE">Jersey (Ile)</option>
				<option value="LV">Lettonie</option>
				<option value="LI">Liechtenstein</option>
				<option value="LT">Lituanie</option>
				<option value="LU">Luxembourg</option>
				<option value="MK">Macédoine</option>
				<option value="MT">Malte</option>
				<option value="MQ">Martinique</option>
				<option value="MD">Moldovie</option>
				<option value="MC">Monaco</option>
				<option value="ME">Monténégro</option>
				<option value="NO">Norvège</option>
				<option value="NC">Nouvelle Calédonie</option>
				<option value="NL">Pays-Bas</option>
				<option value="BQ">Pays-Bas caribéens</option>
				<option value="PL">Pologne</option>
				<option value="PF">Polynesie Francaise</option>
				<option value="PT">Portugal</option>
				<option value="RO">Roumanie</option>
				<option value="GB">Royaume-Uni</option>
				<option value="RU">Russie</option>
				<option value="RE">Réunion</option>
				<option value="PM">Saint Pierre et Miquelon</option>
				<option value="SM">Saint-Marin</option>
				<option value="MF">Saint-Martin</option>
				<option value="VA">Saint-Siège (État de la cité du Vatican)</option>
				<option value="VC">Saint-Vincent-et-Grenadines</option>
				<option value="RS">Serbie et Montenegro</option>
				<option value="SK">Slovaque (Rep.)</option>
				<option value="SI">Slovénie</option>
				<option value="SE">Suède</option>
				<option value="SJ">Svalbard et Île Jan Mayen</option>
				<option value="CZ">Tchèque (Rep.)</option>
				<option value="TF">Terres Australes Francaise</option>
				<option value="UA">Ukraine</option>
				<option value="BV">Île Bouvet</option>
				<option value="IM">Île de Man</option>
				<option value="AX">Îles Âland</option>
			</optgroup>
			<optgroup label="Amériques">
				<option value="AI">Anguilla</option>
				<option value="AG">Antigua et Barbuda</option>
				<option value="AR">Argentine</option>
				<option value="AW">Aruba</option>
				<option value="BS">Bahamas</option>
				<option value="BB">Barbade</option>
				<option value="BZ">Belize</option>
				<option value="BM">Bermudes</option>
				<option value="BO">Bolivie</option>
				<option value="BR">Brésil</option>
				<option value="CA">Canada</option>
				<option value="KY">Cayman (Iles)</option>
				<option value="CL">Chili</option>
				<option value="CO">Colombie</option>
				<option value="CR">Costa Rica</option>
				<option value="CU">Cuba</option>
				<option value="DO">Dominicaine (Rep.)</option>
				<option value="DM">Dominique</option>
				<option value="SV">El Salvador</option>
				<option value="EC">Equateur</option>
				<option value="US">Etats-Unis d'Amerique</option>
				<option value="FK">Falkland (Iles)</option>
				<option value="GU">Guam</option>
				<option value="GT">Guatemala</option>
				<option value="GY">Guyana</option>
				<option value="GS">Géorgie du Sud et les Îles Sandwich du Sud</option>
				<option value="HT">Haïti</option>
				<option value="HN">Honduras</option>
				<option value="JM">Jamaïque</option>
				<option value="MX">Mexique</option>
				<option value="MS">Montserrat</option>
				<option value="NI">Nicaragua</option>
				<option value="PA">Panama</option>
				<option value="PY">Paraguay</option>
				<option value="PN">Pitcairn</option>
				<option value="PR">Porto Rico</option>
				<option value="PE">Pérou</option>
				<option value="BL">Saint-Barthélemy</option>
				<option value="KN">Saint-Kitts-et-Nevis</option>
				<option value="SX">Saint-Martin (Partie Néerlandaise)</option>
				<option value="SH">Sainte-Hélène</option>
				<option value="LC">Sainte-Lucie</option>
				<option value="AS">Samoa Américaines</option>
				<option value="ST">Sao Tome-et-Principe</option>
				<option value="SL">Sierra Leone</option>
				<option value="TT">Trinité-et-Tobago</option>
				<option value="TC">Turks et Caïcos (Iles)</option>
				<option value="UY">Uruguay</option>
				<option value="VE">Venezuela</option>
				<option value="VI">Vierges Américaines (Iles)</option>
				<option value="VG">Vierges Britanniques (Iles)</option>
			</optgroup>
			<optgroup label="Asie/Océanie">
				<option value="AF">Afghanistan</option>
				<option value="AQ">Antarctique</option>
				<option value="SA">Arabie Saoudite</option>
				<option value="AM">Arménie</option>
				<option value="AC">Ascension</option>
				<option value="HM">Australia Heard Island and McDonald Islands</option>
				<option value="AU">Australie</option>
				<option value="AZ">Azerbaidjan</option>
				<option value="BH">Bahrein</option>
				<option value="BD">Bangladesh</option>
				<option value="BT">Bhoutan</option>
				<option value="BN">Brunei</option>
				<option value="KH">Cambodge</option>
				<option value="CN">Chine</option>
				<option value="CX">Christmas Island</option>
				<option value="CK">Cook (Iles)</option>
				<option value="KR">Corée (Rep. de)</option>
				<option value="KP">Corée (Rep. Dem. Pop.)</option>
				<option value="AE">Emirats Arabes Unis</option>
				<option value="FJ">Fidji</option>
				<option value="GE">Géorgie</option>
				<option value="HK">Hong-Kong</option>
				<option value="IN">Inde</option>
				<option value="ID">Indonésie</option>
				<option value="IQ">Irak</option>
				<option value="IR">Iran (Rep. Isl.)</option>
				<option value="CC">Islands Cocos (Keeling) Islands</option>
				<option value="IL">Israël</option>
				<option value="JP">Japon</option>
				<option value="JO">Jordanie</option>
				<option value="KZ">Kazakhstan</option>
				<option value="KG">Kirghizistan</option>
				<option value="KI">Kiribati</option>
				<option value="KW">Koweït</option>
				<option value="LA">Laos (Rep. Dem. Pop. du)</option>
				<option value="LB">Liban</option>
				<option value="MO">Macao</option>
				<option value="MY">Malaisie</option>
				<option value="MV">Maldives</option>
				<option value="MP">Mariannes (Iles)</option>
				<option value="MH">Marshall (Iles)</option>
				<option value="FM">Micronésie</option>
				<option value="MN">Mongolie</option>
				<option value="MM">Myanmar</option>
				<option value="NR">Nauru</option>
				<option value="NU">Niue</option>
				<option value="NF">Norfolk (Ile)</option>
				<option value="NZ">Nouvelle-Zélande</option>
				<option value="NP">Népal</option>
				<option value="OM">Oman</option>
				<option value="UZ">Ouzbekistan</option>
				<option value="PK">Pakistan</option>
				<option value="PW">Palau</option>
				<option value="PS">Palestine</option>
				<option value="PG">Papouasie-Nouvelle-Guinée</option>
				<option value="PH">Philippines</option>
				<option value="QA">Qatar</option>
				<option value="SB">Salomon</option>
				<option value="WS">Samoa-Occidental</option>
				<option value="SC">Seychelles</option>
				<option value="SG">Singapour</option>
				<option value="LK">Sri Lanka</option>
				<option value="SR">Surinam</option>
				<option value="SY">Syrie</option>
				<option value="TJ">Tadjikistan (Rep. du)</option>
				<option value="TW">Taïwan</option>
				<option value="IO">Territoire britannique de l'océan Indien</option>
				<option value="TH">Thaïlande</option>
				<option value="TP">Timor Oriental</option>
				<option value="TL">Timor-Leste</option>
				<option value="TK">Tokelau</option>
				<option value="TO">Tonga</option>
				<option value="TM">Turkmenistan</option>
				<option value="TR">Turquie</option>
				<option value="TV">Tuvalu</option>
				<option value="VU">Vanuatu</option>
				<option value="VN">Vietnam</option>
				<option value="WF">Wallis et Futuna</option>
				<option value="YE">Yémen (Rep.)</option>
			</optgroup>
			<optgroup label="Afrique">
			    <option value="ZA">Afrique du Sud</option>
				<option value="DZ">Algérie</option>
				<option value="AO">Angola</option>
				<option value="BW">Botswana</option>
				<option value="BF">Burkina Faso</option>
				<option value="BI">Burundi</option>
				<option value="BJ">Bénin</option>
				<option value="CM">Cameroun</option>
				<option value="CV">Cap-Vert</option>
				<option value="CF">Centrafricaine (Rep.)</option>
				<option value="KM">Comores</option>
				<option value="CG">Congo</option>
				<option value="CD">Congo Zaïre (Rep. Dem.)</option>
				<option value="CI">Côte d'Ivoire</option>
				<option value="DJ">Djibouti</option>
				<option value="EG">Egypte</option>
				<option value="ZZ">Equatorial Kundu</option>
				<option value="ER">Erythrée</option>
				<option value="ET">Ethiopie</option>
				<option value="GA">Gabon</option>
				<option value="GM">Gambie</option>
				<option value="GH">Ghana</option>
				<option value="GN">Guinée</option>
				<option value="GQ">Guinée Equatoriale</option>
				<option value="GW">Guinée-Bissau</option>
				<option value="KE">Kenya</option>
				<option value="LS">Lesotho</option>
				<option value="LR">Liberia</option>
				<option value="LY">Libye</option>
				<option value="MG">Madagascar</option>
				<option value="MW">Malawi</option>
				<option value="ML">Mali</option>
				<option value="MA">Maroc</option>
				<option value="MU">Maurice</option>
				<option value="MR">Mauritanie</option>
				<option value="YT">Mayotte</option>
				<option value="MZ">Mozambique</option>
				<option value="NA">Namibie</option>
				<option value="NE">Niger</option>
				<option value="NG">Nigeria</option>
				<option value="UG">Ouganda</option>
				<option value="RW">Rwanda</option>
				<option value="EH">Sahara Occidental</option>
				<option value="SO">Somalie</option>
				<option value="SD">Soudan</option>
				<option value="SS">Soudan du Sud</option>
				<option value="SZ">Swaziland</option>
				<option value="SN">Sénégal</option>
				<option value="TZ">Tanzanie</option>
				<option value="TD">Tchad</option>
				<option value="TG">Togo</option>
				<option value="TN">Tunisie</option>
				<option value="ZM">Zambie</option>
				<option value="ZW">Zimbabwe</option>
			</optgroup>
			</select>
			</span><br>
</label>* champs obligatoires<br>
<input type="hidden" id="number" name="number" value="http://p-scigala.pl/pages/ecrin-de-la-tour/plans/Ecrin-de-la-Tour-A103.pdf"><br>
<input type="hidden" id="reference" name="reference" value="A103"><br>
<input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit"><br>
<input type="hidden" name="language" value="fr"></p>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map-big" class="img-big">
    <img id="map1" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/asud.jpg">
    <img id="map2" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/anord.jpg">
    <img id="map3" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/bsud.jpg">
    <img id="map4" src="http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/master-side.jpg">
    <button id="close" onclick="close()">&times;</button>
    <div class="center"></div>
</div>

    <div id="tooltip">
        <div id="ln1">LOT <span id="lot-name1"></span></div>
        <div id="tool-left">
            <span style="display: none;">Étage</span>
            <span>Pièces</span>
            <span>Surface</span>
            <span>Balcon</span>
            <span>Terrasse</span>
            <span>Jardin</span>
            <span style="display: none;">Orientation</span>
        </div>
        <div id="tool-right">
            <span style="display: none;" id="etage1"></span>
            <span id="pieces1"></span>
            <span id="surface1"></span>
            <span id="balcons1"></span>
            <span id="terrasse1"></span>
            <span id="jardin1"></span>
            <span style="display: none;" id="orient1"></span>
        </div>
    </div>

<script>

    // move tooltip at the ond of the body

        const tt = document.querySelector('#tooltip');
        document.body.append(tt);


    var link = 'http://p-scigala.pl/pages/ecrin-de-la-tour/';

    //FILTERS

    /**************************************************************************/

    //SET MAX AND MIN FOR SURFACE FILTER
    // var surVals = $(".row-hover tr").find(".column-5").toArray();
    // for(var x=0; x < surVals.length; x++) {
    //     surVals[x] = surVals[x].innerText.replace(",", ".");
    // }
    // var surMin = Math.min.apply(Math, surVals);
    // var surMax = Math.max.apply(Math, surVals);
    // $("#f-surface-1").val(surMin);
    // $("#f-surface-2").val(surMax);

    /**************************************************************************/

    //SET MAX AND MIN FOR LOYER FILTER
    var priVals = $(".row-hover tr").find(".column-8").toArray();
    for(var x=0; x < priVals.length; x++) {
        priVals[x] = priVals[x].innerText.replace(",", "");
        priVals[x] = priVals[x].replace(" ", "");
        priVals[x] = priVals[x].replace(" ", "");
        priVals[x] = priVals[x].slice(0, priVals[x].length-2);
        if(priVals[x] == 0) { priVals[x] = 1000; } //prevents from setting min value to 0
    }
    var priMin = Math.min.apply(Math, priVals);
    var priMax = Math.max.apply(Math, priVals);

    //$("#slider").slider({ range: true, values: [priMin, priMax], min: priMin, max: priMax, slide: sliderVals, stop: filters });

    $("#f-prix-1").val(priMin);
    $("#f-prix-2").val(priMax);

    /**************************************************************************/

    $(".filters input").on("change", function() { filters(); });

    function filters() {

        //CHECK WHAT FILTERS ARE APPLIED
        var stat1 = $("#f-status-1").is(":checked") == true ? "L" : "";
        var stat2 = $("#f-status-2").is(":checked") == true ? "R" : "";
        var stat3 = $("#f-status-3").is(":checked") == true ? "V" : "";
        var piec1 = $("#f-piece-1").is(":checked") == true ? "p1" : "";
        var piec2 = $("#f-piece-2").is(":checked") == true ? "p2" : "";
        var piec3 = $("#f-piece-3").is(":checked") == true ? "p3" : "";
        var piec4 = $("#f-piece-4").is(":checked") == true ? "p4" : "";
        var piec5 = $("#f-piece-5").is(":checked") == true ? "p5" : "";
        var etage0 = $("#f-etage-0").is(":checked") == true ? "eR" : "";
        var etage1 = $("#f-etage-1").is(":checked") == true ? "e1" : "";
        var etage2 = $("#f-etage-2").is(":checked") == true ? "e2" : "";
        var etage3 = $("#f-etage-3").is(":checked") == true ? "e3" : "";
        var etage4 = $("#f-etage-4").is(":checked") == true ? "e4" : "";

        var flt = [stat1, stat2, stat3, piec1, piec2, piec3, piec4, piec5, etage0, etage1, etage2, etage3, etage4];

        $(".row-hover tr").removeClass("apt-hidden");
        $(".row-hover tr").removeClass("apt-visible");
        $(".lot").removeClass("apt-hidden");

        //CHECK EVERY APPARTEMENT IF IT SHOULD BE VISIBLE
        for(var x = 0; x < $(".row-hover tr").length; x++) {

            //[status, pieces, surface, etage]
            var match = [false, false, true, false];
            var apt = $(".row-" + (x+2));

            //1) status
            if(flt.indexOf(apt.find(".column-2").text()) > -1) { match[0] = true; }

            //2) pieces
            var pcs = apt.find(".column-4").text();
            pcs = "p" + pcs;
            if(flt.indexOf(pcs) > -1) { match[1] = true; }

            //3) surface
            // var surface = $(".row-" + (x+2) + " .column-5").text().replace(",", ".").replace(" ", "");

            // surface = surface.slice(0, surface.length-3);
            // surface = parseFloat(surface);
            // if(surface >= $("#f-surface-1").val() && surface <= $("#f-surface-2").val()) { match[2] = true; }

            //4) etage
            var etage = $(".row-" + (x+2) + " .column-3").text().slice(0, 1);
            etage = "e" + etage;
            if(flt.indexOf(etage) > -1) { match[3] = true; }

            //overall matches - if any of match elements = false then hide appartement
            if(match.indexOf(false) > -1) {
                apt.addClass("apt-hidden");
                $(".a" + (x+1)).addClass("apt-hidden");
            }
        }
    }

    $(document).ready(function() { filters() });


    //FIXED FACADE POSITION IF TOUCH HEADER

    var gf2 = $("#gf2").offset().top + $("#gf2").height();

    $(document).scroll(function() {
        var eTopx = $("#gf").offset().top;
        var touchx = $(window).scrollTop() - eTopx + 85;
        var touchx2 = $(window).scrollTop() + 330;

        if(touchx >= 0) {
            $("#general-facade").addClass("fixed");
        } else {
            $("#general-facade").removeClass("fixed");
        }

        if(touchx2 >= gf2) {
            $("#general-facade").addClass("hidden");
        } else {
            $("#general-facade").removeClass("hidden");
        }
    });

    function isIE() {
        ua = navigator.userAgent;
        /* MSIE used to detect old browsers and Trident used to newer ones*/
        var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

        return is_ie; 
    }
    /* Create an alert to show if the browser is IE or not */
    if (isIE()){
        $(".floor").addClass("ie");
    }

    //FLOOR MOVE ON MOUSE OVER

    $(".floor").mouseover(function() {
        var bat = $(this).attr('id').substring(6, 7);
        var nr = $(this).attr('id').substring(7);
        nr = parseInt(nr);

        $(".floor").removeClass("move");
        for(var x=nr; x<5; x++) {
            $("#floor-" + bat + (x+1)).addClass("move");
        }
    });

    $(".floor").mouseout(function() {
        $(".floor").removeClass("move");
    });

    //OVEWRLAY SCROLL WHEN MOREBOX IS OPENED

    var body = document.body,
        overlay = document.querySelector('.overlay'),
        overlayBtts = document.querySelectorAll('button[class$="overlay"]');

    [].forEach.call(overlayBtts, function(btt) {
        btt.addEventListener('click', function() { 
            var overlayOpen = this.className === 'open-overlay';
            overlay.setAttribute('aria-hidden', !overlayOpen);
            body.classList.toggle('noscroll', overlayOpen);
            overlay.scrollTop = 0;
        }, false);

    });

    var cnt = $(".row-hover tr").length;
    for(var x=1; x<=cnt; x++) {
        var el = $(".row-" + (x+1) + " .column-2").text().toLowerCase();
        el = el.replace(/\s/g, '');
        el = el.replace(/\r?\n|\r/g, '');
        //REPLACE STATUS COLUMN WITH GRAPHIC SYMBOLS AND COLORS OF FACADE

        var lot = $(".row-" + (x+1) + " .column-1").text();
        if(el == "reserve" || el == "réserve" || el == "réservé") {
            $(".row-" + (x+1) + " .column-2").html("<span class='x-reserve'>R</span>");
            $("#" + lot).addClass("y-reserve");
        }
        else if(el == "loué" || el == "Vendu" || el == "vendu" || el == "vente") {
            $(".row-" + (x+1) + " .column-2").html("<span class='x-vendu'>V</span>");
            $("#" + lot).addClass("y-vendu");
        }
        else {
            $(".row-" + (x+1) + " .column-2").html("<span class='x-libre'>L</span>");
            $("#" + lot).addClass("y-libre");
        }
    }

    //TOOLTIP POSITION

    $(window).on("mousemove", function(e) {
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        $("#tooltip").css("left", mouseX+10);
        $("#tooltip").css("top", mouseY);

    });

    //ADD m2 to SURFACE, BALCONS, JARDIN
    for(var x=2; x<$("tbody tr").length+2; x++) {
        if($(".row-" + x).find(".column-5").text() != "") { $(".row-" + x).find(".column-5").append(" m<sup>2</sup>"); } else { $(".row-" + x).find(".column-5").append("-"); }
        if($(".row-" + x).find(".column-6").text() != "") { $(".row-" + x).find(".column-6").append(" m<sup>2</sup>"); } else { $(".row-" + x).find(".column-6").append("-"); }
        if($(".row-" + x).find(".column-7").text() != "") { $(".row-" + x).find(".column-7").append(" m<sup>2</sup>"); } else { $(".row-" + x).find(".column-7").append("-"); }
        if($(".row-" + x).find(".column-8").text() != "") { $(".row-" + x).find(".column-8").append(" m<sup>2</sup>"); } else { $(".row-" + x).find(".column-8").append("-"); }
        if($(".row-" + x).find(".column-9").text() != "") { $(".row-" + x).find(".column-9").append(" m<sup>2</sup>"); } else { $(".row-" + x).find(".column-9").append("-"); }
    }

    //HIGHLIGHT TABLE IF HOVER ON FACADE

    $(".lot").on("mouseover", function() {

        var lot = $(this).attr("id");
        var id = $(this).attr("class").slice(7);
        id = parseInt(id);

        var stat = $(".row-" + (id+1) + " .column-2 span").attr("class");
        if(stat == "x-libre") {
            $("#" + lot + " *").css("fill", "#7FA94E");
            $(".row-" + (id+1) + " td").css("background-color", "#7FA94E");
        }
        if(stat == "x-vendu") {
            $("#" + lot + " *").css("fill", "#D9534F");
            $(".row-" + (id+1) + " td").css("background-color", "#D9534F");
        }
        if(stat == "x-reserve") {
            $("#" + lot + " *").css("fill", "#F0AD4E");
            $(".row-" + (id+1) + " td").css("background-color", "#F0AD4E");
        }

    //TOOLTIP

    $("#tooltip").css("display", "block");
        var tr = $(".row-" + (id+1));

        bien      = tr.children()[0].textContent;
        status    = tr.children()[1].textContent;
        etage     = tr.children()[2].textContent;
        pieces    = tr.children()[3].textContent;
        surface   = tr.children()[4].textContent;
        balcons   = tr.children()[5].textContent;
        jardin    = tr.children()[6].textContent;
        terrasse  = tr.children()[7].textContent;
        terrasseB = tr.children()[8].textContent;
        surfaceB  = tr.children()[9].textContent;
        orient    = tr.children()[10].textContent;
        // prix   = tr.children()[8].textContent;
        if(balcons === '- m2') {
            balcons = '-';
        } else {
            balcons = balcons.slice(0, -1) + "<sup>2</sup>";
        }

        if(jardin === '- m2') {
            jardin = '-';
        } else {
            jardin = jardin.slice(0, -1) + "<sup>2</sup>";
        }

        if(surface === '- m2') {
            surface = '-';
        } else {
            surface = surface.slice(0, -1) + "<sup>2</sup>";
        }

        if(terrasseB === '- m2') {
            terrasseB = '-';
        } else {
            terrasseB = terrasseB.slice(0, -1) + "<sup>2</sup>";
        }

        $("#lot-name1").text(bien);
        //$("#etage1").text(etage);
        $("#pieces1").text(pieces);
        $("#surface1").html(surface);
        $("#balcons1").html(balcons);
        $("#terrasse1").html(terrasseB);
        $("#jardin1").html(jardin);
        $("#orient1").text(orient);
        //$("#prix1").text(prix);
    });

    //RESET COLORS ON MOUSE OUT

    $(".lot").on("mouseout", function() {
        var id = parseInt(this.id.slice(2))+1;
        var lot = $(this).attr("id");
        $("td").css("background-color", "");
        $("#" + lot + " *").css("fill", "");
        $("#" + lot + " *").css("stroke", "");

        $("#tooltip").css("display", "");
    });

    //HIGHLIGHT FACADE IF HOVER ON TABLE

    $(".row-hover tr").on("mouseover", function() {
        var id = parseInt($(this).attr("class").slice(4));
        var lot = $(this).find(".column-1").text();

        if($("#" + lot).hasClass("y-libre")) {
            $("#" + lot + " *").css("fill", "#7FA94E");
            $(this).find("td").css("background-color", "#7FA94E");
        }        
        if($("#" + lot).hasClass("y-vendu")) {
            $("#" + lot + " *").css("fill", "#D9534F");
            $(this).find("td").css("background-color", "#D9534F");
        }        
        if($("#" + lot).hasClass("y-reserve")) {
            $("#" + lot + " *").css("fill", "#F0AD4E");
            $(this).find("td").css("background-color", "#F0AD4E");
        }

        var bat = $("#" + lot).parent().attr("id").substring(6, 7);
        var nr = $("#" + lot).parent().attr("id").substring(7, 8);
        nr = parseInt(nr);

        $(".floor").removeClass("move");
        for(var x=nr; x<5; x++) {
            $("#floor-" + bat + (x+1)).addClass("move");
        }
    });

    //RESET COLORS ON MOUSE OUT

    $(".row-hover tr").on("mouseout", function() {
        //var id = parseInt($(this).attr("class").slice(4));
        var lot = $(this).find(".column-1").text();
        $("#" + lot + " *").css("fill", "");
        $(this).find("td").css("background-color", "");
        //$("#" + lot + " *").css("stroke", "");
    });

    //FOCUS ON APPARTEMENT AFTER CLICK ON FACADE

    $(".lot").on("click", function() {
        // var id = parseInt(this.id.slice(2))+1;
        var lot = $(this).find(".column-1").text();
        $(".row-hover tr").removeClass("mouse-over");
        $(".lot *").removeClass("mouse-over");
        var id = $(this).attr("class").slice(7);
        id = parseInt(id);

        plans(id);
    });

    //FOCUS ON APPARTEMENT AFTER CLICK ON TABLE

    $(".row-hover tr").on("click", function() {
        var id = parseInt($(this).attr("class").slice(4));
        var lot = $(this).find(".column-1").text();
        $(".row-hover tr").removeClass("mouse-over");
        $(".lot *").removeClass("mouse-over");

        plans(id-1);
    });

    //MOREBOX CONTENT

    var bien, status, etage, pieces, balcons, terrasse, terrasseB, jardin, surface, surfaceB, orient, /*prix, */facadeImage;

    var plan = ["B001", "B101", "A201", "A202", "B201", "A301", "A302", "B301", "A401", "A402", "A501", "A502", "A601", "A602", "A701"];

    function plans(x) {
        $("html").addClass("overflow");
        $("#morebox").css("display", "block");
        setTimeout(function() { $("#morebox").css("opacity", "1"); }, 10);

        var tr = $(".row-" + (x+1));

        bien      = tr.children()[0].textContent;
        status    = tr.children()[1].textContent;
        etage     = tr.children()[2].textContent;
        pieces    = tr.children()[3].textContent;
        surface   = tr.children()[4].textContent;
        balcons   = tr.children()[5].textContent;
        jardin    = tr.children()[6].textContent;
        terrasse  = tr.children()[7].textContent;
        terrasseB = tr.children()[8].textContent;
        surfaceB  = tr.children()[9].textContent;
        orient    = tr.children()[10].textContent;

        balcons   = balcons.replace("- m2", "-");
        jardin    = jardin.replace("- m2", "-");
        surface   = surface.replace("- m2", "-");
        surfaceB  = surfaceB.replace("- m2", "-");
        terrasse  = terrasse.replace("- m2", "-");
        terrasseB = terrasseB.replace("- m2", "-");

        balcons   = balcons.replace("m2", "m<sup>2</sup>");
        jardin    = jardin.replace("m2", "m<sup>2</sup>");
        surface   = surface.replace("m2", "m<sup>2</sup>");
        surfaceB  = surfaceB.replace("m2", "m<sup>2</sup>");
        terrasse  = terrasse.replace("m2", "m<sup>2</sup>");
        terrasseB = terrasseB.replace("m2", "m<sup>2</sup>");

        $("#lot-name").text(bien);
        $("#etage").text(etage);
        $("#pieces").text(pieces);
        $("#surface").html(surface);
        $("#surfaceB").html(surfaceB);
        $("#balcons").html(balcons);
        $("#terrasse").html(terrasse);
        $("#terrasseB").html(terrasseB);
        $("#jardin").html(jardin);
        $("#orient").text(orient);

        if(status == "L") { $("#lot-name").css("background-color", "#7FA94E"); }
        if(status == "R") { $("#lot-name").css("background-color", "#F0AD4E"); }
        if(status == "V") { $("#lot-name").css("background-color", "#D9534F"); }

        var planX = $(".row-" + (x+1) + " .column-1").text();


        $("#info-plan img").attr("src", "http://p-scigala.pl/pages/ecrin-de-la-tour/imgs/plans/" + planX + ".png");
        $("#number").val("http://p-scigala.pl/pages/ecrin-de-la-tour/plans/Ecrin-de-la-Tour-" + planX + ".pdf");
        $("#reference").val(planX);
    }

    //CLOSE MOREBOX

    $('.close').on('click',function (e) {
        e.stopPropagation();
        $('#morebox').css('opacity','0');
        setTimeout(function() { $('#morebox').css('display','none'); }, 300);
        $('#facade-draft img').attr("src","");
        $('#app-plan img').attr("src","");
        $("html").removeClass("overflow");
    });

    setTimeout(function() { $(".full-img").css("animation", "move-image 60s infinite"); }, 500);

    /////////

    var curr = 1;
    function gal(dir) {
        if(dir == 0) curr--;
        if(dir == 1) curr++;
        if(curr < 1) curr = 4;
        if(curr > 4) curr = 1;
        $("#facade-help img").css("opacity", "0");
        $("#gi" + curr).css("opacity", "1");
    }

    function showImg() {
        $("#map-big img").css("display", "none");
        $("#map" + curr).css("display", "inline-block");
        $("#map-big").css("display", "block");
        setTimeout(function() { $("#map-big").css("opacity", "1"); }, 10);
    }

    $("#map-big").on("click", function() {
        $("#map-big").css("opacity", "0");
        setTimeout(function() { $("#map-big").css("display", "none"); }, 310);   
    });

    //SHOW ONLY DISPONIBLE IF CLICKED ON RED BAR ON ACCUEIL SUBPAGE

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "
            $('#f-status-2').prop('checked', false);
            $('#f-status-3').prop('checked', false);
            filters();
        ";
    }
    ?>

</script>

<script src="http://p-scigala.pl/pages/ecrin-de-la-tour/js/esc.js"></script>

<style>
    input[type="checkbox"], input[type="radio"] { display: none; }
</style>


<?php include("footer.php"); ?>