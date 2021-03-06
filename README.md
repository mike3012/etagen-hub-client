# etagen-hub-client
testing SF-Flex and own composer stuff....

## "Client Projekt"
Neues Projekt anlegen:
bsp. "shopX" client:

Projekt Ordner anlegen `mkdir shopX` `cd shopX`.

Composer init:  `composer init` dann den Anweisungen folgen.

z.B. ein README anlegen (damit man irgendwelche Dateien außer der composer.json hat) und bei z.B. Github einstellen.

### Autoload
Damit das Autoloading klappt muss der Abschnitt "autoload" zur composer.json hinzugefügt werden.

```
    # ...
    "autoload": {
        "psr-4": {
            "EtagenHubClient\\": "src/"
        }
    }
    # ...
```


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



## Umbau zum Bundle (Client Projekt)

Damit der "Client" über Symfony, also den Dependency-Container nutzbar ist muss der Client zum Bundle umgebaut werden.

(Mit dem "Maker" sind leider keine Bundles mehr generierbar).

### Bundle Class
Im root-dir muss eine Klasse namens <NameDenManHabenMöchte>Bundle angelegt werden die von `Symfony\Component\HttpKernel\Bundle\Bundle` extended.
(Für normale Anwendungszweke reicht eine Leere Klasse). Siehe `EtagenHubClientBundle.php`


### Dependency Injection
Damit Services aus dem Thirdparty Bundle (Client) im eigentlichen Projekt (Hub) nutzen kann braucht man eine `Resources/config/services.yaml` in der man den Service definiert.
Und eine Extension-Klasse die die Services dem Container bekannt macht. Siehe `DependencyInjection/EtagenHubClientExtension`.




# recipes (ToDo)

https://github.com/symfony/recipes/blob/master/README.rst
Recipes must be stored on their own repositories, outside of your Composer package repository. They must follow the vendor/package/version/ directory structure, where version is the minimum version supported by the recipe.

create manifest vendor/packagename/version/manifest.json
