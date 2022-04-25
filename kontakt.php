
<?php include 'header.php';?>



  <div class="kontakt">


    <h1>Naša adresa</h1>
    <p>V prípade, že máte záujem nás navštíviť <br>
        a obzrieť si nami ponúkané automobily,
        alebo <br>ak ste už pevne rozhodnutí využiť naše služby, 
        neváhajte k nám zájsť, najdete nás na adrese:</p>

    <div class="container">
<div class="item" style="text-align: left;">Autobazár Auto s.r.o.</div>
<div class="item-2" style="text-align: right;">Kontaktné informácie a rezervácia: </div>
<div class="item-3" style="text-align: left;">IČO: 43794904, OR SR BA I.,Vložka: 48751/B</div>
<div class="item-4" style="text-align: right;">Telefón (denne 8.00-18.00): </div>
<div class="item-5" style="text-align: left;">IBAN: SK 14 1100 0000 0029 2584 0158 </div>
<div class="item-6" style="text-align: right;">+ 421 945 888 888 </div>

    </div>

        <br>

    <h1>Kontaktujte nás</h1>
        
        <br>

    <form action="subscribe.php" method="post">
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
                    <label for="stat">Stat:</label><br>
                    <input type="text" name="stat" size="28" required="required" placeholder="Vaše stat"/>
                </div>

                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" size="28" required="required" placeholder="Váš email" />
                </div>

                <div>
                    <label for="sprava">Správa</label><br>
                    <textarea name="sprava" id="id_sprava" cols="25" rows="10" required="required" placeholder="Vaša správa pre nás"></textarea>
                </div>

                <button type="submit">Subscribe</button>
    </form>


</div>

<?php include 'footer.php';?>