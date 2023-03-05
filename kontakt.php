   <div class="header-kontakt">

        <div class="header-text">

            <div class="header-nadpis">Kontakt</div>

            <div class="header-podnadpis">Žádný dotaz<br> není zbytečný.</div>

        </div>

        <img src = "fotky-kontakt/kontakt-dum.png" class = "kontakt-pic">        

    </div>



    <div class="dotaz-container">

        <div class="dotaz-texty">

            <div class="dotaz-firma">

                <h2 class = "kontakt-nadpis">Firma</h2>

                <span class = "mapa-podnadpis">(fakturační adresa)</span>

                Tibor Zapletal<br>

                Slíny 1380<br>

                691 02 Velké Bílovice<br>

                IČ: 65808754<br>

                DIČ: CZ7612034067

            </div>

            <div class="dotaz-vinarstvi">

                <h2 class = "kontakt-nadpis">Vinařství</h2>

                <span class = "mapa-podnadpis">(dodací adresa a provozovna)</span>

                Ke Kapličce<br>

                691 02 Velké Bílovice<br>

                <b>+420 606 715 417</b>

                tibor@vinarstvi.cz

            </div>

        </div>



        <div class="dotaznik">

            <h2 class = "dotaz-nadpis">Máte dotaz?</h2>

            <form method = "POST" class = "form-dotaz" action = "send.php">

                <input class = "input-dotaz" type = "text" placeholder = "Vaše jméno" name = "kontaktJmeno">

                <input class = "input-dotaz" type = "text" placeholder = "Váš e-mail" name = "email" required>

                <input class = "input-dotaz" type = "text" placeholder = "Telefon"  name = "kontaktTelefon">

                <textarea id = "textbox" class = "text-dotaz" placeholder = "Zde napište svou zpráva..." maxlength = "180" name = "kontaktZprava" required></textarea>

                <div class="letter-counter" id = "lettercounter"><span id = "count">0</span>/180 znaků</div>

                <script src = "lettercount.js"></script>

                <div class="dotaz-btn">

                    <div class="dotaz-celek">

                        <div class="dotaz-but-left"></div>

                        <input type = "submit" value = "Odeslat" class = "dotaz-submit" name = "odeslaniDotazu">

                        <div class="dotaz-but-right"></div>

                    </div>

                </div>

            

            </form>

            

        </div>



    </div>

