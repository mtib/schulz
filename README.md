# Freie Schülerzeitung WIP: schulz
Das Schulzentrum Kühlungsborn hat keine Schülerzeitung und sonst auch sehr wenig Möglichkeiten um Schülern zu erlauben sich untereinander möglichst frei auszutauschen.

**Und dafür sind wir da!**

Wir wollen eine freie Schülerzeitung
 - Wer mitmachen will, entweder ein Issue öffnen oder mir schreiben
   - Öffentlichkeit: [info@tibyte.net](mailto:info@tibyte.net)
   - Quelltext: [mtb@tibyte.net](mailto:mtb@tibyte.net)

## Frontend
In HTML für den Browser und evtl. als App für Android und iOS

## Backend
In PHP und MySQL

## Ziele
Diese Software soll auf einer öffentlichen Instanz laufen unter der Domain ```todo: Domain einfügen```

aber gleichzeitig werden wir alle Konfigurationsschritte in nächster Zeit einstellen um das System nachzuvollziehen.

## Setup
### Server
Note: Bis Version 1.0 ist die Sicherheit der Daten nicht garantiert, da es sich um Entwicklungsversionen handelt.
```sh
sudo -i
apt-get install git-core apache2 php5 libapache2-mod-php5
apt-get install mysql-server mysql-client php5-mysql
apt-get install phpmyadmin
rm -r /var/www/html
git clone https://github.com/tibyte/schulz /var/www/html
```
### Datenbank
```sql

```
