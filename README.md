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


## Technologies
Project is created with:
* PHP version: 7.4.3-fpm-alpine3.11
* Nginx version: 1.17.8-alpine

## Setup
To run this project, just download and extract all files
