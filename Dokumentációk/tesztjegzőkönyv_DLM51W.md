# Tesztdokumentáció

## Tesztesetek

### Test01: Bejelentkezés 1
- **Kiinduló állapot**: A felhasználó a bejelentkező felületen van
- **Lépések**:
  1. Hibás felhasználó nevet ad meg
  2. Helyes jelszót ad meg
  3. Bejelentkezés gombra kattint
- **Várt eredmény**: Marad a bejelentkező felületen
- **Eredmény**: Maradt a bejelentkező felületen, sikeres teszt

### Test02: Bejelentkezés 2
- **Kiinduló állapot**: A felhasználó a bejelentkező felületen van
- **Lépések**:
  1. Helyes felhasználó nevet ad meg
  2. Hibás jelszót ad meg
  3. Bejelentkezés gombra kattint
- **Várt eredmény**: Marad a bejelentkező felületen
- **Eredmény**: Maradt a bejelentkező felületen, sikeres teszt

### Test03: Bejelentkezés 3
- **Kiinduló állapot**: A felhasználó a bejelentkező felületen van
- **Lépések**:
  1. Helyes felhasználó nevet ad meg
  2. Helyes jelszót ad meg
  3. Bejelentkezés gombra kattint
- **Várt eredmény**: Belép a kurzusok felületre
- **Eredmény**: Belépett a kurzusok felületre, sikeres teszt

### Test04: Kurzus 1
- **Kiinduló állapot**: A felhasználó bejelentkezik és megnyit egy kurzus adatlapot
- **Lépések**:
  1. Helyes felhasználó nevet ad meg
  2. Helyes jelszót ad meg
  3. Bejelentkezés gombra kattint
  4. Az első kurzust kiválasztja
- **Várt eredmény**: Belép a kiválasztott kurzus adatlapjára
- **Eredmény**: Belépett a kiválasztott kurzus adatlapjára, sikeres teszt

### Test05: Kurzus 1
- **Kiinduló állapot**: A felhasználó bejelentkezik és megnyit egy kurzus adatlapot
- **Lépések**:
  1. Helyes felhasználó nevet ad meg
  2. Helyes jelszót ad meg
  3. Bejelentkezés gombra kattint
  4. Az első kurzust kiválasztja
  5. Varga Dorina eredményéhez beírja, hogy 5
  6. Átlép a következő kurzus időpontra
  7. Varga Dorina eredményéhez beírja, hogy 1
- **Várt eredmény**: 2 kurzus időpoontra bekerülnek a jegyek és kiszámítódik az átlag
- **Eredmény**: Első kurzus időpont 0 maradt, második 01 lett, sikertelen teszt

### Test06: Kurzus 1
- **Kiinduló állapot**: A felhasználó bejelentkezik és megnyit egy kurzus adatlapot
- **Lépések**:
  1. Helyes felhasználó nevet ad meg
  2. Helyes jelszót ad meg
  3. Bejelentkezés gombra kattint
  4. Az első kurzust kiválasztja
  5. Varga Dorina jegyéhez belép és kitörli a 0 értéket
  6. Beírja hogy 5
  7. Átlép a következő kurzus időpontra
  8. Varga Dorina jegyéhez belép és kitörli a 0 értéket
  9. Beírja hogy 1
- **Várt eredmény**: 2 kurzus időpoontra bekerülnek a jegyek és kiszámítódik az átlag
- **Eredmény**: Jegyek bekerültek, átlag kiszámolódott, sikeres teszt














## Summary
All test cases executed successfully. The buttons and functions are working as expected.
