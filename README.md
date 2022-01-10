# Project Travel Compass 
![Algorithm schema](./public/img/uploads/logo.png)

* [General Info](#general-info "Goto General Info")
* [Description](#description "Goto General Description")
* [Technologies](#technologies "Goto General Technologies")
* [Setup](#setup "Goto General Setup")
* [Images](#images "Goto General Images")

## General Info
Ten projekt to odpowiednik kompasu politycznego, ale dotyczącego celu wakacyjnej podróży. Wystarczy odpowiedzieć na kilka pytań, a system obliczy destynację dopasowaną do Twoich preferencji (oczywiście w ramach danych wrzuconych do bazy danych). Wyszukiwane cele mają dwa parametry: 
* cenę (od niskiej do wysokiej)
* aktywność w danym miejscu (od małej do dużej ilości możliwości)

W przyszłości należałoby oczywiście powiększyć bazę pytań, oraz celów pordóży, a przede wszystkim sposób filtrowania: np. poprzez pytanie czy ktos chce jechać do Europy i odpowiedź "Nie zgadzam się" powinno filtrować już tylko wyniki spoza Europy. 

## Description
![image](https://user-images.githubusercontent.com/47715648/148698375-07919857-6c39-4136-bbf7-911dc472f772.png)
Cały projekt jest wypełniony nagraniani i zdjęciami które wykonałem na wakacjach, co było właściwie głównym powodem, dla którego stworzyłem taką aplikację. 
Strona to celowy one page, stworzony po to aby uzyskać skondensowaną dawkę informacji.
Specyfikacja projektu:
* Cała strona ma ustaloną większość parametrów wysokości i szerokości wartościami vh i vw, przez co można ją tylko w niewielkim stopniu skalować. Oczywiście dla każdej podstrony widoki są responsywne dla tabletów, smartfonów, etc.
* Po kliknięciu w przycisk "Get Started" otwiera nam się okno logowania/rejestracji, gdzie z użyciem walidacji należy wprowadzić swoje dane i hasło zawierające przynajmniej jedną literę dużą, jedną małą, znak i cyfrę dla dodatkowej weryfikacji. Ewentualne błędy wyskakują tuż pod tytułem sekcji.  
* Po poprawnym zalogowaniu widzimy od razu stronę z Quizem (Kompasem) wraz z pierwszym pytaniem, na które mamy odpowiedzieć. Pytania są wyciągane za pomocą Fetch API, a faktyczny formularz wysyłamy dopiero po odpowiedzeniu na ostatnie pytanie. Wtedy też zostajemy przekierowani na stronę wyników  
*  Strona wyników przechowuje dane zawarte w tabeli users_results, czyli wynik jaki uzyskaliśmy, oraz najlepiej dopasowany cel (o wartościach będących najbliższymi tego co uzyskaliśmy). Dane to: Miejscowość, Kraj, Krótki opis, Zdjęcie, oraz wynik przedstawiony za pomocą okrągłego diva o odpowiednio ustalonych parametrach `left` i `top` pokazuje bez umieszczania cyfr, jak prezentuje się nasz wynik
* Zakładka Recommended zawiera wszystkie polecane przez nas destynacje (tak właściwie to wszystkie jakie aktualnie są w bazie). Widok jest taki sam jak na stronie wyników (Results).  
* Strona About to oczywiście szybki skrót, do czego powstała aplikacja  
* Strona Settings to dynamicznie wczytywana strona z edycją konta (w której nalezy każdorazowo wprowadzić poprawne hasło użytkownika do wprowadzenia zmian)  

* Aplikacja po kliknięciu w Log out wylogowuje użytkownika i usuwa sesję, oraz powraca do początkowego widoku z logiem. 
* Opis projektu względem [Kryteriów ewaluacji projektu](https://torus.uck.pk.edu.pl/~awidlak/content/25):
     * [x] 1. Część backendowa jest napisana obiektowo  
     * [x] 2. Diagram [ERD](#erd "Goto General Diagram ERD") umieszczony
     * [x] 3. Systematyka pracy GIT: Starałem się codziennie na koniec pracy wysyłać zmiany na git'a  
     * [x] 4. Prototyp aplikacji wysłany wcześniej obejmował taką samą funkcjonalność  
     * [x] 5. Pliki [head.php](https://github.com/jacekoleksy/Travel-Compass/blob/bb55fd01991865738b0ba1ae7beb73a356d3fc6e/public/views/head.php#L1) oraz [nav.php](https://github.com/jacekoleksy/Travel-Compass/blob/bb55fd01991865738b0ba1ae7beb73a356d3fc6e/public/views/nav.php#L1) są otwierane na każdej podstronie  
     * [x] 6. Połączenie z bazą PostgreSQL
     * [x] 7. Baza danych zawiera relacje jeden do jednego oraz jeden do wielu [ERD](#erd "Goto General Diagram ERD")
     * [x] 8. Wersja PHP 7.4.3
     * [x] 9. JS (oraz JQuery) używane do animacji oraz przy pytaniach z Kompasu do wczytywania i wysyłania danych
     * [x] 10. Ostatecznie użyłem jedynie metody POST. Fetch API używane do wszytywania i wysyłania danych w Quizie
     * [x] 11. Główne style zawarte w pliku style.css, reszta w plikach do każdej podstrony (np. settings.php -> settings.css)
     * [x] 12. Strona jest responsywna na wszystkich typach urządzeń (PC, Tablet, Smartfon)
     * [x] 13. Logowanie wymaga od użytkownika podania pełnych danych, dodatkowo sprawdzany jest format email, a hasło musi zawierać minimum: 1 literę dużą, 1 literę małą, 1 znak, 1 cyfrę
     * [x] 14. Wartości sesji są zaimplementowane i kasowane po wylogowaniu
     * [x] 15. system sprawdza czy użytkownik ma ustawioną wartość `enabled` w bazie na `true`, tym samym sprawiając że ma dostęp do niektórych podstron
     * [x] 16. Jedyne role jakie użyłem to użytkownik zalogowany i niezalogowany - z dostępem do odpowiednich podstron z użyciem sesji
     * [x] 17. Wylogowanie
     * [x] 18. Zastosowałem wywołanie widoków np. w pliku Questions.php, dodatkowo stosuję sekwencje w bazie danych
     * [x] 19. Stosuję m.in. inner join na tabeli results
     * [x] 20. Hasła są hashowane
     * [x] 21. Powtarzalny kod jest zawarty w plikach [head.php](https://github.com/jacekoleksy/Travel-Compass/blob/bb55fd01991865738b0ba1ae7beb73a356d3fc6e/public/views/head.php#L1) oraz [nav.php](https://github.com/jacekoleksy/Travel-Compass/blob/bb55fd01991865738b0ba1ae7beb73a356d3fc6e/public/views/nav.php#L1)
     * [x] 22. Czystość i przejrzystość kodu

## Diagram ERD:
![ERD](https://user-images.githubusercontent.com/47715648/148699194-d97f4d6d-266b-469b-951f-e3cf4a6b0b96.png)


## Technologies
Project is created with:
* PHP version: 7.4.3-fpm-alpine3.11
* Nginx version: 1.17.8-alpine

## Setup
To run this project, just download and extract all files

## Images
* PC  
![image](https://user-images.githubusercontent.com/47715648/148698375-07919857-6c39-4136-bbf7-911dc472f772.png)
![image](https://user-images.githubusercontent.com/47715648/148698561-3092ef5c-4454-4790-8b65-cb4cdcfa78a1.png)
![image](https://user-images.githubusercontent.com/47715648/148698664-e58b0090-c431-4015-b5c8-8c49a1a5526f.png)
![image](https://user-images.githubusercontent.com/47715648/148698730-80ecb05a-c472-4505-8fa7-65b1587264d4.png)
![image](https://user-images.githubusercontent.com/47715648/148698913-d258110a-5025-4dac-ba2c-5fff5b0592ad.png)
![image](https://user-images.githubusercontent.com/47715648/148698964-511520d0-0ad4-497c-8a84-b93114df220d.png)

* Tablet  
![image](https://user-images.githubusercontent.com/47715648/148736114-17c71fff-8e55-4f1f-9a4b-0726d1a9544d.png)
![image](https://user-images.githubusercontent.com/47715648/148736062-42d93a65-af46-4384-a549-408716687584.png)
![image](https://user-images.githubusercontent.com/47715648/148698878-81c081b5-b703-46e7-87ea-047bd262cb0c.png)
![image](https://user-images.githubusercontent.com/47715648/148698926-acf6c25b-258c-4b97-b9c9-b2abc2014e9f.png)
![image](https://user-images.githubusercontent.com/47715648/148736016-67517454-4600-496a-bda6-02b8d1d432fb.png)

* Smartphone  
![image](https://user-images.githubusercontent.com/47715648/148698585-4f6a3234-f39d-4570-9188-7b0a45d3cb0e.png)
![image](https://user-images.githubusercontent.com/47715648/148698678-15fea78f-0d2f-4d87-b0d7-f06f66edae9c.png)
![image](https://user-images.githubusercontent.com/47715648/148698787-d9c37d60-da3a-4ad8-b07b-16789da334db.png)
![image](https://user-images.githubusercontent.com/47715648/148698856-7152e0bd-c8d3-4801-aaca-3fa821164931.png)
![image](https://user-images.githubusercontent.com/47715648/148735920-e4751960-46b1-4721-9487-0a5444644d42.png)
