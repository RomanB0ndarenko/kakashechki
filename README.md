# 📦 Inventaario - Laitteiden hallinta- ja lainausjärjestelmä

**Repository:** [RomanB0ndarenko/kakashechki](https://github.com/RomanB0ndarenko/kakashechki)

## Projektin kuvaus
Moderni ja visuaalisesti miellyttävä inventaario- ja lainausjärjestelmä. Sovellus mahdollistaa laitteiden hallinnan, lainaamisen ja seurannan. Kehitetty oppilaitoksen tarpeisiin.

## Käyttäjäroolit
- **Admin** — täydet oikeudet (laitteiden lisäys, muokkaus, poisto)
- **User** — voi selata laitteita ja lainata niitä

## Teknologiat
- PHP
- MySQL (XAMPP)
- HTML + CSS (moderni tumma teema)
- GitHub

## Projektin rakenne
- `/pages/` — pääsivut (devices, add_device, loans jne.)
- `/assets/` — tyylitiedostot
- `/config/` — tietokantayhteys
- `/database/` — tietokannan rakenne

## Valmiit ominaisuudet
- ✅ Käyttäjän kirjautuminen ja sessioiden hallinta
- ✅ Moderni tumma käyttöliittymä (hyvä visuaalinen ilme)
- ✅ Laitteiden listaaminen (`devices.php`)
- ✅ Uuden laitteen lisääminen (`add_device.php`)
- ✅ Navigointi navbarilla
- ✅ Logout-toiminto
- ✅ Perus CRUD-toiminnot laitteille (lisäys, lista, edit, delete, borrow, return)

## Backlog / Kehityskohteet
- Täysi lainaus- ja palautuslogiikka
- Lainojen historian tarkastelu
- Haku- ja suodatustoiminnot
- Laitteen tilan automaattinen päivitys
- Käyttäjien hallinta

## Käyttäjätarinat
1. Käyttäjänä haluan kirjautua sisään, jotta pääsen järjestelmään.
2. Käyttäjänä haluan nähdä laitteiden listan.
3. Käyttäjänä haluan lainata laitteen.
4. Adminina haluan lisätä, muokata ja poistaa laitteita.
5. Adminina haluan hallita lainoja.

## Sprint 1 - Lopputulos
**Tavoite:** Toimiva prototyyppi modernilla designilla  
**Valmiina:** Kirjautuminen, laitteiden hallinta, visuaalisesti siisti käyttöliittymä.

## Tiimi
- **Roman Bondarenko** — UI/UX, CSS, dokumentaatio, GitHub
- **Artem** — Backend (PHP + MySQL)

## Asennusohjeet

1. Asenna **XAMPP**
2. Kloonaa repositorio tai lataa zip `htdocs`-kansioon
3. Luo tietokanta nimellä `invetory_system` (tai vastaava)
4. Importtaa tietokannan rakenne `/database/`-kansiosta
5. Käynnistä Apache + MySQL
6. Avaa selaimessa: `http://localhost/kakashechki`

## Testaus
- Kirjaudu sisään admin-tunnuksella
- Testaa laitteiden lisäys ja listaaminen

---

Скопируй этот текст полностью и замени им содержимое `README.md` в репозитории.

Хочешь, я сделаю ещё отдельный файл `RETROSPEKTIIVI.md`?
