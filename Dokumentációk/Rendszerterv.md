# Rendszerterv
## 1.	A rendszer célja
Az rendszer célja, hogy segítse az oktató kollégák adminisztratív munkáját, kiegészítve a Neptun tanulmányi nyilvántartó szerepét. A Hallgatói követelményrendszer szabályozása szerint a hallgató órára járási kötelezettségét az oktató ellenőrzi, a hiányzást a következő héten az oktató igazolja a hozzá bemutatott igazolás alapján. Az új alkalmazás többek között arra hivatott, hogy ennek nyilvántartását támogassa, leegyszerűsítse. Emellett abban is segítséget szeretnénk adni az oktatónak, hogy a félév során a hallgató által elért részeredményeket is rögzíteni tudja, amiból a félév végén az alkalmazás ajánlott érdemjegyet számol. 
## 2.	Projektterv

1. **Projektszerepkörök, felelőségek:**
   - Scrum master: Varga Balázs
2. **Projektmunkások és felelőségek:**
   - Backend munkálatok: Kerecsendi András, Kovács Attila, Kovács Dávid
   - Feladatuk az adatok tárolásához szükséges adatszerkezetek kialakítása, funkciók létrehozása, a különböző platformok kiszolgálása adatokkal.
3. **Dokumentáció elkészítése:**
   - Farkas Attila
4. **Ütemterv:**
   - [A mellékelt excel szerint.](https://github.com/enbeze93/N-team/blob/main/Dokument%C3%A1ci%C3%B3k/GanttAFP2.xlsx)


## 3. Üzleti folyamatok modellje
Ide fogok berakni képet!

## 4. Követelmények
Átmásolom majd a követelményspeből!

## 5. Funkcionális terv

1. **Kurzusok kezelése oldal**
- Az oktató látja a kurzusait, a hallgatókat és a kurzus kódját
- Lekérheti a hallgatók névsorát adott kurzushoz
- Összesített kurzus statiszta lekérésének a lehetősége (hiányzás, átlag)

2. **Kiválasztott kurzus oldal**
- Az oktató bejegyezheti, ha egy diák hiányzott az adott alkalomról
- Óránként beírhat jegyet a diákoknak
- Átlagot számíttathat
- Bizonyos érték felett jelzést kap, ha egy diák elérte a maximum hiányzást
## 6. Fizikai környezet

## 7. Absztrakt domain modell

## 8. Architekturális terv 

## 9. Adatbázis terv
1. **Felhasználók Tábla**
- Cél: Felhasználói hitelesítő adatok tárolása.
Attribútumok:
- **Attribútumok**
   -   NeptunKod (Primer kulcs): A felhasználó egyedi azonosítója.
   -   Jelszo: Titkosított formában tárolt jelszó.
2. **Kurzusok Tábla**
- Cél: Az elérhető kurzusok információjának tárolása.
- **Attribútumok**
   -   KurzusID (Primer kulcs): A kurzus egyedi azonosítója.
   -   KurzusNev: A kurzus neve.
   -   OktatoNeptunKod: Az oktató Neptun kódja, aki a kurzust tartja (Idegen kulcs, kapcsolódik a Felhasználók táblához).
3. **KurzusHallgatók Tábla**
- Cél: A kurzusokhoz rendelt hallgatók nyilvántartása.
- **Attribútumok**
   -   KurzusID (Idegen kulcs, kapcsolódik a Kurzusok táblához): A kurzus azonosítója, amelyhez a hallgató tartozik.
   -   HallgatoNeptunKod (Idegen kulcs, kapcsolódik a Felhasználók táblához): A hallgató Neptun kódja.
3. **Jegyek Tábla**
- Cél: Az oktató által beírt jegyek tárolása a hallgatók számára.
Jegy: A hallgató által elérhető érdemjegy (pl. 1-től 5-ig).
- **Attribútumok**
   -   JegyID (Primer kulcs): A jegy egyedi azonosítója.
   -   HallgatoNeptunKod (Idegen kulcs, kapcsolódik a Felhasználók táblához): A hallgató Neptun kódja.
   -   KurzusID (Idegen kulcs, kapcsolódik a Kurzusok táblához): A kurzus azonosítója, amelyben a jegyet rögzítik.
   -   Jegy: A hallgató által elérhető érdemjegy (pl. 1-től 5-ig).
4. **Hiányzások Tábla**
- Cél: A hallgatók hiányzásainak nyilvántartása.
- **Attribútumok**
   -   HianyzasID (Primer kulcs): A hiányzás egyedi azonosítója.
   -   HallgatoNeptunKod (Idegen kulcs, kapcsolódik a Felhasználók táblához): A hiányzó hallgató Neptun kódja.
   -   KurzusID (Idegen kulcs, kapcsolódik a Kurzusok táblához): A kurzus azonosítója, ahonnan hiányzott.
   -   Datum: A hiányzás dátuma.
## 10. Implementációs terv

## 11. Tesztterv
1. **Tesztelési Stratégia**
- Cél: Meghatározni a tesztelés céljait, amely magában foglalja a funkciók ellenőrzését, a felhasználói felület tesztelését, és a rendszer biztonságos működését.
- Módszertan: Kombinálja a manuális tesztelési technikákat az automatizált tesztekkel a széles körű lefedettség érdekében.
2. **Tesztelési Szintek**
- Egységteszt: Kisebb kódrészletek (funkciók, metódusok) tesztelése, hogy azok a specifikáció szerint működnek-e.
- Integrációs teszt: A rendszer különböző részeinek együttműködésének tesztelése, hogy az integrációk helyesek-e.
- Rendszerteszt: Az egész rendszer tesztelése, hogy az megfelel-e a követelményeknek és a felhasználói elvárásoknak.
- Elfogadási teszt: Az ügyfél vagy a végfelhasználók által végzett tesztek, hogy a rendszer készen áll-e a termelésbe helyezésre.
3. **Automatizált Tesztelési Eszközök**
- Cypress: A webes felület automatizált tesztelésére használt eszköz.
Tesztelési forgatókönyvek fejlesztése a felhasználói interakciók szimulálására.
Tesztek automatizálása a felhasználói felület működésének, funkcióinak és reakcióidejének ellenőrzésére.
4. **Tesztesetek és Forgatókönyvek**
- Felsorolás: A tesztesetek és forgatókönyvek felsorolása, amelyek lefedik a rendszer összes funkcióját.

- **Példák a tesztesetekre:**
   -   A felhasználó bejelentkezhet a rendszerbe helyes felhasználónévvel és jelszóval.
   -   Az oktató képes átlagot számíttatni.



## 12. Telepítési terv

## 13. Karbantartási terv

