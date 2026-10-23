# Esercizio 1 — Voti

Dato l'array $voti:
1. stampa i voti in una lista puntata `<ul>` (usa PHP inline + foreach)
2. stampa quanti voti ci sono
3. calcola e stampa la MEDIA dei voti, con un ciclo (non usare array_sum)
4. stampa la media arrotondata a 2 decimali (suggerimento: round())

BONUS: se la media è >= 6 stampa "Sufficiente" in verde, altrimenti "Insufficiente" in rosso.

## Dati di partenza

```php
$voti = [7, 5.5, 8, 6, 9];
```
# Esercizio 2 — Lista della spesa

Partendo dall'array $spesa:
1. stampa l'array con print_r dentro `<pre>`
2. aggiungi in coda "uova" e "farina"
3. rimuovi "latte" (indice 1) con unset
4. ristampa con print_r: cosa noti negli indici?
5. ricompatta gli indici con array_values e ristampa
6. infine mostra la lista in una `<ol>` con PHP inline

DOMANDA: perché dopo il punto 3 un ciclo for ($i = 0; $i < count($spesa); $i++)
darebbe un errore? Scrivi la risposta in un commento.

## Dati di partenza

```php
$spesa = ["pane", "latte", "mele"];
```
# Esercizio 3 — Numeri pari

Dato l'array $numeri:
1. stampa SOLO i numeri pari usando un foreach
2. stampa SOLO i numeri pari usando un for con count()
3. costruisci un NUOVO array $pari che contiene solo i numeri pari
   e stampalo con print_r
4. stampa quanti sono i numeri pari e quanti i dispari

Suggerimento: un numero è pari se $n % 2 == 0

## Dati di partenza

```php
$numeri = [3, 8, 15, 22, 7, 10, 41, 64, 5, 18];
