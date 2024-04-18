PHP Dischi JSON
===
Parte 1
===
Creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

## Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

## Svolgimento
- Verificare che la pagina index.php (front-end) comunichi correttamente con lo script PHP (API).
- Implementare la lettura della lista dei dischi da un file JSON.

## Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.

Parte 2
===
- aggiungere un post per l’aggiunta (in modo permanente) di un nuovo disco con tutti i dati ad esso relativo (titolo, url immagine, artista, ecc)
- aggiungere la possibilità di eliminare un disco in modo permanente
## Bonus
- aggiungere “mi piace”. I dischi con “mi piace” avranno un cuoricino pieno e gli altri vuoto. Al click del cuoricino avviene il toggle del “mi piace”
- Al click della card linkare a una pagina PHP di dettaglio che riceve in GET l’indice dell’elemento da mostrare e lo stampa in pagina