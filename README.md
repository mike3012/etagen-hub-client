# etagen-hub-client
testing SF-Flex and own composer stuff....

## "Client Projekt"
Neues Projekt anlegen:
bsp. "shopX" client:

Projekt Ordner anlegen `mkdir shopX` `cd shopX`.

Composer init:  `composer init` dann den Anweisungen folgen.

z.B. ein README anlegen (damit man irgendwelche Dateien außer der composer.json hat) und bei z.B. Github einstellen.


## "Hub"
Im Projekt welches den "Client" nutzen soll muss in der composer.json angegeben werden wo (außer bei Packagist) nach dem Paket gesucht werden soll.  
Hierzu muss der Abschnit "repositories" in der composer.json angelegt werden.

```
    # ...
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mike3012/etagen-hub-client"
        }
    ],
    # ...
```

Um das entsprechende Paket zu laden:

```
    # ...
    "require": {
        "mike3012/etagen-hub-client": "dev-master"
    },
    # ...

```
Mit dev-master wird der aktuelle Master-Branch geladen. Ansosten muss das client Projekt hat eine Versionierung haben. (**Dringend empfohlen**)




