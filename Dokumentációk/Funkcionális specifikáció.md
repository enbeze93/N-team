# Funkcionális specifikáció
## 1. Áttekintés
- Az alkalmazás célja, hogy segítse az oktató kollégák adminisztratív munkáját, kiegészítve a Neptun tanulmányi nyilvántartó szerepét. 
- A Hallgatói követelményrendszer szabályozása szerint a hallgató órára járási kötelezettségét az oktató ellenőrzi, a hiányzást a következő héten az oktató igazolja a hozzá bemutatott igazolás alapján.- Az új alkalmazás többek között arra hivatott, hogy ennek nyilvántartását támogassa, leegyszerűsítse.
- Emellett abban is segítséget szeretnénk adni az oktatónak, hogy a félév során a hallgató által elért részeredményeket is rögzíteni tudja, amiból a félév végén az alkalmazás ajánlott érdemjegyet számol. 
## 2.Jelenlegi helyzet
Az EKKE Foglalkoztatási követelményrendszere, követve a hatályos Felsőoktatási törvény szabályozását az egyetemmel munkaviszonyban álló oktató kollégák számára szerteágazó oktatási feladatokat, tudományos, művészeti, illetve sportszakmai tevékenységgel kapcsolatos feladatokat és emellett sokrétű, az intézmény működésével kapcsolatos egyéb tevékenységeket, feladatokat ír elő. Ezek röviden a következők:
- a hallgatók felkészítését szolgáló előadás, szeminárium, gyakorlat, konzultáció megtartása
- a tanulmányi eredményesség értékelése
- szakdolgozatok/diplomadolgozatok konzultációi és bírálata
- a tananyagfejlesztés, tankönyv és segédlet készítése; e) oktatási feladatok ellátására irányuló oktatói felkészülés
- tudományos diákköri dolgozatok konzultációja és bírálata; tantárgyfelelősi, szakfelelősi feladatok
- beiskolázás
- hallgatók mentorálása, egyéni hallgatói fogadóóra
- felnőttképzésben résztvevő hallgatók felkészítését célzó foglalkozás megtartása
- részvétel az oktatással, oktatásfejlesztéssel összefüggő pályázatokban
- az oktatói utánpótlás nevelése
- egyéb oktatásszervezési feladatok ellátása
- a szervezeti egységek vezetői, projektek irányítói által meghatározott intézményi, intézeti értekezleteken, munkamegbeszéléseken, rendezvényeken való részvétel és feladatvégzés
- részvétel a Szenátus, valamint a Szenátus mellett működő bizottságok munkájában
- részvétel az egyéb testületek munkájában
- részvétel regionális és országos hatáskörű felsőoktatási testületek és szervezetek munkájában.

A fenti felsorolás jól érzékelteti, hogy az oktatók elsődleges feladatai mellett (oktatás és kutatás) számos egyéb munkaköri kötelezettsége van, melyek ellátása a munkaidőn belül sok esetben nem lehetséges. 

A hatékony munkaidőkihasználást a ezért minden rendelkezésre álló eszközzel elő kell segíteni, szükséges az adminisztratív terhek csökkentése, a kapcsolódó feladatok egyszerűsítése.

Az egyetem már több szabálymódosítással, munkaszervezési megoldással és alkalmazás bevezetésével tett lépéseket az időigényes adminisztráció csökkentésére, erős pillér a folyamatos fejlesztés alatt álló Neptun tanulmányi nyílvántartó rendszer, a GYKER rendszer vagy épp a frissen elinduló VEKKER, de az első fejezetben tárgyalt problémákra még nem érkezett megoldás.
## 3. Követelménylista
| Modul       | Id  | Név                      | v   | Kifejtés                                                                                                                                                                                                        |
|-------------|-----|--------------------------|-----|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Jogosultság | K1  | Bejelentkezési felület   | 1.0 | A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Ha a megadott email cím vagy jelszó nem megfelelő, akkor a  elhasználó hibaüzenetet kap.                                                 |
| Jogosultság | K2  | Bejelentkezési felület   | 1.0 | Az oktató a Neptun azonosítójával és az ahhoz kapcsolódó jelszavával tud belépni. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót. |
| Jogosultság | K3  | Bejelentkezési felület   | 1.0 | - Admin: Rendszerhozzáférés, adatbáziskezelés, karbantartás, felhasználók / szerepkörök módosítása. - Oktató: hozzáférés a féléves kurusainak névsorához, hiányzáskezelés, eredmények rögzítése.            |
| Modifikáció | K4  | Jelszó módosítása        | 1.0 | A felhasználó módosítani tudja saját jelszavát. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése.                                                                              |
| Modifikáció | K5  | Elfelejtett jelszó       | 1.0 | Ha a felhasználó elfelejtette a jelszavát akkor ezzel az opcióval egy Adminhoz tud fordulni.                                                                                                                    |
| Felület     | K6  | Névsor                   | 1.0 | Az oktató az egyes kurzusaihoz listázhatja a hallgatók névsorát, láthatja az eddigi igazolt és igazolatlan hiányzásokat, eddigi érdemjegyeket.                                                                  |
| Felület     | K7  | Jelenlét vezetés         | 1.0 | Az oktató a névsorban rögzítheti a hiányzást az adott napra, beállíthatja a következő héten, hogy igazolt vagy igazolatlan a hiányzás.                                                                          |
| Felület     | K8  | Jegyrögzítés             | 1.0 | Az oktató a névsorban rögzítheti, ha érdemjegyet ad a hallgatónak (dátum, érdemjegy, súly, elvégzett feladat)                                                                                                   |
| Felület     | K9  | Féléves eremény számítás | 1.0 | A rendszer súlyozott számtani átlagot számol, és ajánlott féléves érdemjegyként feltünteti a hallgatónál.                                                                                                       |
| Statisztika | K10 | Összegzés                | 1.0 | Az oktató megtekintheti a kurzusonként, illetve összes kurzusa vonatkozásában az összesített értékeket (hiányzások, eredmények)                                                                                 |
| Felület     | K11 | Bejelentkezés            | 1.0 | A felhasználók itt tudnak bejelentkezni a rendszerbe, probléma esetén jelszót, változtatni.      
				

## 4. Jelenlegi üzleti folyamatok modellje 
Az EKKE Hallgatói követelményrendszere a következőképpen szabályoz: az oktató a képzési program keretei között az alábbi hatásköröket gyakorolja:
- félévenként a hallgató egy foglalkozásról való távolmaradásának engedélyezése, 
- a hiányzások ellenőrzése, igazoltatása és a pótlás módjának meghatározása, 
- óralátogatás engedélyezése, 
- az egyes oktatókhoz rendelt tanegységek részletes tanulmányi követelményeinek (szemináriumi követelmények, vizsgakövetelmények, pótlási lehetőségek stb.) meghatározása, 
- a tanulmányi követelmények teljesítésének bejegyzése és érvényesítése aláírással,
- a jegymegajánlás.

Az oktatók félév elején tematikát készítenek, mely a tantárgyi program részletes megvalósítása, heti szinten tartalmazza a tanegységek részletes tanulmányi követelményeit, a részletes ismeretanyagot.

 A fenn felsorolt további feladatok egyelőre nincsenek központilag tervezve, a hallgatók óralátogatásának nyomonkövetését, vezetését, hiányzások igazolásának nyílvántartását, a félév közben szerzett eredmények tárolását, félév végi érdemjegy kalkulálását nem segíti sem iránymutatás sem annak támogatására készített eszköz. 
 
 Így az oktatók egy része nem vezeti a hiányzásokat, egy része jelenléti ívet szerkeszt magának és nyomtatott formában próbálja rögzíteni a távolmaradást, egyesek excel táblázatot használnak. A hiányzások nyomonkövetése teljesen hektikus és követhetetlen. (Lenne a Neptunnak modulja, de nem használjuk. Miért?)

## 5. Igényelt üzleti folyamatok
Annak érdekében, hogy az oktatók egységesen, és időt megtakarítva tudják teljesíteni a szabályzatban számukra előírt kötelességüket, új folyamatok bevezetésére van szükség. 
1. A hiányzások nyilvántartását az arra rendszeresített felületen kell végezni.
2. A felület a Neptun accountokkal érhetőek el. 
3. Az oktató a kötelezően látogatandó órák/konzultációk elején vagy végén köteles a felületen rögzíteni a hiányzókat.
4. A felület jelzi az elmúlt heti hiányzásokat, felhívva az oktató figyelmét az igazolások megtekintésére.
5. Ha a hallgató hitelt érdemlően igazolta a hiányzását, az oktató ezt jelezheti a felületen.
6. Abban az esetben, ha a hallgató túllépte a maximális hiányzás számát, a felület automatikusan Neptun üzenetben tájékoztatja erről, és törli a kurzusról.
7. Az oktató a félév során szerzett érdemjegyeket a felületen rögzíti.
8. A félév végén a rendszer az oktató által meghatározott algoritmus alapján féléves érdemjegyet számol, jóváhagyást követően azt rögzíti a Neptunban. 
## 6. Használati esetek
### Admin:
- Az Admin beléphet mindegyik más szerepkörbe, hogy az hibamentes működését ellenőrizhesse.
- Az Admin(ok) feladata a rendszer problémamentes működése. Ez egyben jár azzal, hogy az egész rendszerhez van hozzáférésük.
- Az Admin(ok)nak hozzá kell tudni férniük a felhasználók listájához, ahol mindent átváltoztathatnak egy felhasználó profilján.
- Tudniuk kell a felhasználók jogosultságait, szerepkörét, jelszavát, és felhasználónevét módosítani.
- Továbbá képesnek kell lenniük arra, hogy felhasználókat vegyenek fel rendszerbe és, hogy rakjanak le belőle.
- Fontos, hogy ők is képesek kezelni a kurzusok jelenléti listáit, érdemjegyeit, mint az oktatók. 

### Oktató: 
- Az oktatók a rendszerbe lépve a félév során oktatott kurzusaikat látják (tárgynév, tárgykód, kurzuskód, létszám), melyre kattintva a kurzus hallgatóinak névsora és a konzultációs alkalmak időpontja jelenik meg (táblázatos formában), ahol az oktató tudja rögzíteni a jelenlétet/hiányzást. 

Itt lesz arra lehetőség, hogy gombnyomásra összesítést lássunk az egyes hallgatók óralátogatási statisztikájáról, kiemelve, ha valaki túllépte a megengedett hiányzások számát. Továbbá, szintén gombnyomásra, lehetőség van újabb táblázat lekérésére, ahová nem hiányzásokat, hanem érdemjegyeket tud rögzíteni az oktató, tetszőleges számban.
- A rendszernek tudnia kell az érdemjegyeket átlagolni, ajánlott féléves osztályzatot számolni. 
## 7. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
A tervezés során valamennyi követelményre terveztünk használati esetete.
## 8. Képernyő tervek

![alt text](https://i.ibb.co/G3DjNmh/oktatoi-fooldal.png "Oktató oldal")
![alt text](https://i.ibb.co/LJkjBSc/kurzus-oldal.png "Kurzus oldal")
![alt text](https://i.ibb.co/z2MJkHr/jegyhozzadas.png "Jegybeírás oldal")

## 9. Forgatókönyv
Az oktatók a rendszerbe lépve a félév során oktatott kurzusaikat látják (tárgynév, tárgykód, kurzuskód, létszám), melyre kattintva a kurzus hallgatóinak névsora és a konzultációs alkalmak időpontja jelenik meg (táblázatos formában), ahol az oktató tudja rögzíteni a jelenlétet/hiányzást.

Itt lesz arra lehetőség, hogy gombnyomásra összesítést lássunk az egyes hallgatók óralátogatási statisztikájáról, kiemelve, ha valaki túllépte a megengedett hiányzások számát. 

Továbbá, szintén gombnyomásra, lehetőség van újabb táblázat lekérésére, ahová nem hiányzásokat, hanem érdemjegyeket tud rögzíteni az oktató, tetszőleges számban. A rendszernek tudnia kell az érdemjegyeket átlagolni, ajánlott féléves osztályzatot számolni.
## 10. Funkció - követelmény megfeleltetés

## 11. Fogalomtár
1. **Admin**
   - Olyan felhasználó, aki a rendszer minden eleméhez és funkciójához hozzáfér és módosítani tudja azokat, ha szükséges.