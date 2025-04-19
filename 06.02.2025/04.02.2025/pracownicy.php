<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nasz zespół</title>
</head>
<body>
    <header>
        <img src="logo1.png" alt="logo firmy">
    </header>
    <header>
        <h1>Nasz zespół</h1>
    </header>
    <main>
        <section id="person1">
            <img src="osoba1.jpg" alt="Dyrektkor">
            <h2>Krzysztof Dobromilski</h2>
            <h3>Dyrektor</h3>
            <p>Firma logistyczna była jego marzeniem. Zrealizował je 10 lat temu. Nasza firma prosperuje dzięki Krzysztofowi</p>
            <p>telefon: 111222333</p>
            <h5>
                <a href="mailto:Krzysztof.Dobromilski@firma.pl">kontakt</a>
            </h5>
        </section>
        <section id="person2">
            <img src="osoba2.jpg" alt="Kierownik logistyków">
            <h2>Joanna Trojanowska</h2>
            <h3>Kierownik logistyków</h3>
            <p>Od początku firmy z nami. Wie jak zorganizować pracę swoich logistyków aby wszystko było na czas</p>
            <p>telefon: 222333444</p>
            <h5>
                <a href="mailto:Joanna.Trojanowska@firma.pl">kontakt</a>
            </h5>
        </section>
        <section id="person3">
            <img src="osoba3.jpg" alt="Kadry">
            <h2>Ewa Nowak</h2>
            <h3>Księgowość i kadry</h3>
            <p>Od lat finanse powierzamy niezawodnej Ewie. Twardą ręką trzyma kasę i dba o wszystkich pracowników</p>
            <p>telefon: 333444555</p>
            <h5>
                <a href="mailto:Ewa.Nowak@firma.pl">kontakt</a>
            </h5>
        </section>
    </main>
    <blockquote>
    <?php
        $file = fopen("tekstyNaStrone.txt", "r");
        $lineNumber = 1;
        $quote1 = $quote2 = $quote3 = "";

        if ($file) {
            while (($linia = fgets($file)) !== false) {
            if ($lineNumber == 32) {
                     $quote1 = $linia;
                 }
                if ($lineNumber == 36) {
                    $quote2 = $linia;
                }
                if ($lineNumber == 40) {
                    $quote3 = $linia;
                }
                $lineNumber += 1;
            }
            fclose($file);
        } else {
            echo "Błąd: Nie można otworzyć pliku!";
        }

        echo '<div id="quote1" class="quote">
                '.htmlspecialchars($quote1).'
                <p>- Krzysztof</p>
            </div>';

        echo '<div id="quote2" class="quote">
                '.htmlspecialchars($quote2).'
                <p>- Joanna</p>
            </div>';

        echo '<div id="quote3" class="quote">
                '.htmlspecialchars($quote3).'
                <p>- Ewa</p>
            </div>'

    ?>   
    </blockquote>
    <footer>Strone wykonal xxxxx</footer>
    <script>
        let quotelist = document.querySelectorAll(".quote")
        function quoteFunction(){
            for(let i = 0; i < quotelist.length; i++){
                if(quotelist[i].style.display !== "none"){
                    quotelist[i].style.display = "none"
                    let nextQuote = (i + 1) % quotelist.length
                    quotelist[nextQuote].style.display = "block"
                    break
                }
            }
        }

        document.querySelectorAll(".quote").forEach(quote => {
            quote.addEventListener('click', quoteFunction)
        })
        
    </script>
</body>
</html>