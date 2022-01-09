# Project Travel Compass 
![Algorithm schema](./public/img/uploads/logo.png)

* [General Info](#general-info "Goto General Info")
* [Description](#description "Goto General Description")
* [Technologies](#technologies "Goto General Technologies")
* [Setup](#setup "Goto General Steup")

## General Info
Ten projekt to odpowiednik kompasu politycznego, ale dotyczącego celu wakacyjnej podróży. Wystarczy odpowiedzieć na kilka pytań, a system obliczy destynację dopasowaną do Twoich preferencji (oczywiście w ramach danych wrzuconych do bazy danych, których na ten moment jest dość niewiele - 40 destynacji do 20 pytań). Wyszukiwane cele mają dwa parametry: 
* cenę (od niskiej do wysokiej)
* aktywność w danym miejscu (od małej do dużej ilości możliwości)

W przyszłości należałoby oczywiście powiększyć bazę pytań, oraz celów pordóży, a przede wszystkim sposób filtrowania: np. poprzez pytanie czy ktos chce jechać do Europy i odpowiedź "Nie zgadzam się" powinno filtrować już tylko wyniki spoza Europy. 

## Description
![image](https://user-images.githubusercontent.com/47715648/148698375-07919857-6c39-4136-bbf7-911dc472f772.png)
Cały projekt jest wypełniony nagraniani i zdjęciami które wykonałem na wakacjach, co było właściwie głównym powodem, dla którego stworzyłem taką aplikację. 
Strona to celowy one page, stworzony po to aby uzyskać skondensowaną dawkę informacji.
Specyfikacja projektu:
* Cała strona ma ustaloną większość parametrów wysokości i szerokości wartościami vh i vw, przez co można ją tylko w niewielkim stopniu skalować. Oczywiście dla każdej podstrony widoki są responsywne dla tabletów, smartfonów, etc.
* Po kliknięciu w przycisk "Get Started" otwiera nam się okno logowania/rejestracji, gdzie z użyciem walidacji należy wprowadzić swoje dane i hasło zawierające przynajmniej jedną literę dużą, jedną małą, znak i cyfrę dla dodatkowej weryfikacji. Ewentualne błędy wyskakują tużpod tytułem sekcji.  
![image](https://user-images.githubusercontent.com/47715648/148698585-4f6a3234-f39d-4570-9188-7b0a45d3cb0e.png)
![image](https://user-images.githubusercontent.com/47715648/148698561-3092ef5c-4454-4790-8b65-cb4cdcfa78a1.png)
* Po poprawnym zalogowaniu widzimy od razu stronę z Quizem (Kompasem) wraz z pierwszym pytaniem, na które mamy odpowiedzieć. Pytania są wyciągane za pomocą Fetch API, a faktyczny formularz wysyłamy dopiero po odpowiedzeniu na ostatnie pytanie. Wtedy też zostajemy przekierowani na stronę wyników  
![image](https://user-images.githubusercontent.com/47715648/148698678-15fea78f-0d2f-4d87-b0d7-f06f66edae9c.png)
![image](https://user-images.githubusercontent.com/47715648/148698664-e58b0090-c431-4015-b5c8-8c49a1a5526f.png)
*  Strona wyników przechowuje dane zawarte w tabeli users_results, czyli wynik jaki uzyskaliśmy, oraz najlepiej dopasowany cel (o wartościach będących najbliższymi tego co uzyskaliśmy)  
![image](https://user-images.githubusercontent.com/47715648/148698730-80ecb05a-c472-4505-8fa7-65b1587264d4.png)
![image](https://user-images.githubusercontent.com/47715648/148698787-d9c37d60-da3a-4ad8-b07b-16789da334db.png)
* Zakładka Recommended zawiera wszystkie polecane przez nas destynacje (tak właściwie to wszystkie jakie aktualnie są w bazie). Widok jest taki sam jak na stronie wyników (Results).  
![image](https://user-images.githubusercontent.com/47715648/148698856-7152e0bd-c8d3-4801-aaca-3fa821164931.png)
![image](https://user-images.githubusercontent.com/47715648/148698878-81c081b5-b703-46e7-87ea-047bd262cb0c.png)
* Strona About to oczywiście szybki skrót, do czego powstała aplikacja  
![image](https://user-images.githubusercontent.com/47715648/148698926-acf6c25b-258c-4b97-b9c9-b2abc2014e9f.png)
![image](https://user-images.githubusercontent.com/47715648/148698913-d258110a-5025-4dac-ba2c-5fff5b0592ad.png)
* Strona Settings to dynamicznie wczytywana strona z edycją konta (w której nalezy każdorazowo wprowadzić poprawne hasło użytkownika do wprowadzenia zmian)  
![image](https://user-images.githubusercontent.com/47715648/148698976-00f3cf6c-12f6-4bd0-bc1c-2fd82c6c33fd.png)
![image](https://user-images.githubusercontent.com/47715648/148698964-511520d0-0ad4-497c-8a84-b93114df220d.png)

* Aplikacja po kliknięciu w Log out wylogowuje użytkownika i usuwa sesję, oraz powraca do początkowego widoku z logiem. 




## Technologies
Project is created with:
* PHP version: 7.4.3-fpm-alpine3.11
* Nginx version: 1.17.8-alpine

## Setup
To run this project, just download and extract all files
