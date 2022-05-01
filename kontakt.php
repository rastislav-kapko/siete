
<?php include 'header.php';?>



<h1 class="nadpis">Kontakt</h1>

<div class="kontakt_udaje">
    
        <div class="ku_vlavo">
            <p>Autorent a.s.</p>
            <p>IČO: 43774444, OR SR BA I.,Vložka: 45651/B</p>
            <p>IBAN: SK 14 1100 0000 0030 3030 0030</p>
        </div>

        <div class="ku_vpravo"> 
            <ul>
                <li><h3>Prevádzka Bratislava - centrála:</h3></li>
                <li><h4>Adresa: </h4></li>
                <li>Bajkalská 231</li>
                <li>Bratislava 827 25</li>
                <li>Slovenská republika</li>
                <li>GPS: 49.153475; 19.147564</li>
            </ul>
        </div>

        <div class="ku_vlavo2">
    <h3>Kontaktné informácie a rezervácia:</h3>
    <ul>
        <li>Telefón (denne 8.00-18.00):</li>
        <li>+ 421 988 888 888</li>
        <li>+ 421 345 678 901</li>
    </ul>
        </div>

        <div class="ku_vpravo2">
    <ul>
        <li><h3>Otváracie hodiny:</h3></li>
        <li>Pracovné dni: od 8.00 - 18.00</li>
        <li>Víkendy: od 10.00 - 18.00</li>
        <li>V ostatných časoch po individuálnej dohode. </li>
    </ul>
        </div>
</div>


<div class="kontakt_formular">
<img src="sidlo.jpg" alt="sidlo firmy v google maps" width="650">



        <br>

    <h1>Napíšte nám</h1>
        
        <br>

    <form action="kontakt_formular.php" method="post">
                <div>
                    <label for="meno">Meno:</label><br>
                    <input type="text" name="meno" size="28" required="required" placeholder="Vaše meno"/>
                </div>

                <div>
                    <label for="priezvisko">Priezvisko:</label><br>
                    <input type="text" name="priezvisko" size="28" required="required" placeholder="Vaše priezvisko"/>
                </div>

                <div>
                    <label for="mesto">Mesto:</label><br>
                    <input type="text" name="mesto" size="28" required="required" placeholder="Vaše mesto"/>
                </div>

                <div>
                    <label for="stat">Štát:</label><br>
                    <input type="text" name="stat" size="28" required="required" placeholder="Váš štát"/>
                </div>

                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" size="28" required="required" placeholder="Váš email" />
                </div>

                <div>
                    <label for="sprava">Správa</label><br>
                    <textarea name="sprava" id="id_sprava" cols="25" rows="10" required="required" placeholder="Text vašej správy"></textarea>
                </div>
                
                <button type="submit">Odoslať</button>
                
    </form>


    </div>
</div>

<?php include 'footer.php';?>