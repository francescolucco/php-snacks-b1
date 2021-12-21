<?php

// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragrafo = 'Tutto inizia sempre con una telefonata, preparati si va a pesca! Appuntamento ore sei di sabato mattina al molo di Bacoli, ma dove andiamo come peschiamo cosa devo portare ? Niente ! vogliamo solo la tua presenza. Tutto diventa un mistero, nella mente tanta fantasia siamo in barca usciremo forse facciamo la traina ? forse il drifting?, forse il classico bolentino ……ma? non importa, so che la compagnia è buona e tutto va bene, comunque il mare è sempre ricco di meraviglie, so che mi divertirò .La sera prima di un appuntamento di pesca sembra sempre la notte prima degli esami, insonnia, pensieri che ti avvolgono la mente e ti fanno volare con la fantasia, tutto è parte del grande gioco che è la Pesca. La sveglia suona ore 05:00; no! sono appena le 3e 50 del mattino ma quando arrivano le cinque e mai possibile che sono io a dare la sveglia all’orologio! Ma comunque le cinque arrivano, mi tocca che mi alzo, anche perché il letto ormai non min gratifica più devo andare a pesca mi aspettano. Finalmente arrivo sul molo, sono tutti li, siamo tutti in anticipo ,mi accorgo con piacere  che c’e’ gente come me che non dorme la notte per la pesca. Passami la cassette con le alici  fresche, prendi il secchio, io ho la mia canna, io la mia, ha siamo due barche ad uscire ti presento Pasquale Piacere Davide,ciao zio Benny ,Ciao Valerio, tutto diventa concitante, sembra di colpo che ci si conosce già da tanto tempo. Zio Benny ha l’aspetto di un vecchio lupo di mare, Barba Bianca incolta, cappellino con visiera e una pipa in bocca che  inizia a fumare come una ciminiera un tabacco con buon aroma. Finalmente si parte il motore da 130 cv montato su un open semicabinato fa sentire subito di che stazza e fatto. Il panorama e bellissimo lo spettacolo che regala il sorgere del sole rende il tutto misterioso le ombre danno spazio alla luce. La nostra destinazione è la piana di Cuma su un fondale di 30 mt per la ricerca di pesce azzurro ,tombarelli, tonnetti insomma vogliamo prendere un buon branco vogliamo il divertimento. in meno che non si dica siamo sul posto le indicazioni sono approssimative come i cercatori d’oro iniziamo la ricerca, i punti di riferimento sembrano darci ragione sulla giusta posizione, l’incrocio tra il canale di Procida e la collina di Cuma sembrano allinearsi le il punto e questo bisogna buttar giù l’ancora iniziamo a pasturare con le alici a circa 14mt dalla superficie aspettiamo una decina di minuti forse piuì,  eccolo zio Benny ci segnala una prima mangiata e un Sugarello di discreta taglia siamo sull posto giusto. L’umore inizia a salire, e alle stelle, le catture iniziano a susseguirsi una dietro l’altra Valerio a qualche difficoltà ad entrare in pesca, non riesce proprio a stare a passo con noi cerchiamo di stargli vicino gli suggeriamo profondità è tipo di innesco, ecco finalmente anche Valerio inizia una serie di catture. Il tempo passa, ma noi neanche riusciamo a misurarlo, pian piano le catture rallentano ecco decido di scendere fino a toccare il fondo con la mia esca non si può mai sapere, in fondo ci sono sempre i pesci migliori. Una toccata forte la canna si blocca mi sembra di aver impigliato ma no faccio leva e sembra venir lentamente su pian piano sale ecco il guadino e già pronto la sagoma di un serpente sale su dalle oscurità del mare e un gronco eccolo issato è in barca. Maurizio mi chiama, dai aiutami prendi il guadino, un bell Sugarello che supera i sette etti ,gli da un bell filo da torcere, il sole e ormai già alto intorno a noi. Qualche altro pesce come delle gallinelle di mare e dei ghiozzi fanno compagnia a un secchio ormai pieno di pesci, la nostra avventura sta per volgere al termine sono ormai quasi le 15:00 del pomeriggio è possiamo ritenerci soddisfatti. Alla prossima!!!!!';

var_dump(explode('. ', $paragrafo));

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Snacks blocco 1</title>
   <ol>
      <?php
      for ($i = 0; $i < count(explode('. ', $paragrafo)); $i++) {
         echo "<li>" . explode('. ', $paragrafo)[$i] . "</li>";
      }
      ?>
   </ol>
</head>

<body>

</body>

</html>