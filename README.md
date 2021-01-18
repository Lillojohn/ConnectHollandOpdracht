# Connect Holland Opdracht

In deze opdracht word het mogelijk om een csv naar de console te plotten.
De csv bestand worden bewaard in de /csv map 

## Het commando

Om de csv op de het console te tonen. 

```bash
symfony console app:csv-to-console
```

Er is ook de mogelijkheid om een specifiek bestand te tonen. Hierbij moet het bestand wel toegevoegd worden in de /csv map.

```bash
symfony console app:csv-to-console --file=voorbeeld2.csv
```