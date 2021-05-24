# AirDelivery
 This website is about the best airplanes delivery service, where u can choose the items to delivery, the weight of your package and smth else, check it!
 
Co udało się zrealizować:
Założenia ogólne z punktu 1 zostały spełnione. Strona jest responsywna.
Całościowo zrobiony punkt 2: formularz zawiera wszystkie pola wynikające na podstawie zadania, a dokładnie - 
Transport z (pole tekstowe, wymagane);
Transport do (pole tekstowe, wymagane);
Typ samolotu (możliwość wybrania jednego z dwóch rodzajów: Airbus A380, Boeing 747, pole wymagane);
Dokumenty przewozowe (pole w którym można wgrać kilka plików z użyciem Drag and Drop, pole opcjonalne, ograniczenia do typu pliku: jpg, png, doc, docx, pdf);
Data transportu (możliwość wyboru daty z kalendarza, pole wymagane)
Pola dla pojedynczego ładunku:
  Nazwa ładunku (pole tekstowe, wymagane);
  Ciężar ładunku w kg (pole liczbowe, wymagane);
  Typ ładunku (możliwość wybrania jednego z dwóch: ładunek zwykły, ładunekniebezpieczny, pole wymagane).

Wszyskie walidacje zostały uwzględnione, takie jak: 
Użytkownik musi wypełnić niezbędne dane do przesyłki wymienione w punkcie 1.
Transport może się odbywać tylko i wyłącznie od poniedziałku do piątku, nie może zostać wybrana data wcześniejsza niż data wypełnienia formularza;
Pojedynczy ładunek nie może przekraczać maksymalnego ciężaru w zależności od wybranego typu samolotu;
Formularz może zawierać 1 lub wiele towarów, przy czym pola dla kolejnego ładunku są dodawane dynamicznie przez użytkownika za pomocą przycisku "Add new cargo";
Punkt 3. Formularz wykorzystując PHP jest wysyłany na odpowiedni adres e-mail w zależności od wybranego typu samolotu:
Airbus A380 - airbus@lemonmind.com
Boeing 747 - boeing@lemonmind.com
Wiadomość e-maila zawiera dane z formularza oraz tabelę z listą towarów zgłoszonych do transportu. Jedynie czego nie osiągnąłem zrobić - to przesyłanie pliku. 

Sposób uruchomienia:
Uruchomienia jako takiego nie ma. Nie mam żadnej bazy danych którą trzeba by skonfigurować i td. Należy zainstalować i skonfigurować serwer WWW z obsługą PHP, korzystałem się z gotowej paczki narzedzi XAMPP (link do instrukcji: https://www.apachefriends.org/pl/index.html), następnie umieścić pliki aplikacji w katalogu dostępnym dla serwera (htdocs dla XAMPP) i otworzyć w przeglądarce adres localhost i ścieżkę do pliku (plik delivery.php zawiera w sobie formularz, a plik index.php jest jako strona główna). Zaznaczam, iż projekt nie wymaga budowania przy użyciu narzędzi ani konfiguracji serwisów, jak np. baza danych.
Zwracam uwagę na e-maile - aby korzystać się z XAMPPA należy skonfigurować pocztę(korzystałem się z tej instrukcji: https://www.thapatechnical.com/2020/03/how-to-send-mail-from-localhost-xampp.html). Ostatecznie w kodzie są umieszczone adresy e-mail na które wysyła się wiadomość w zaleźności od wybranego samolotu.
Alternatywną opcją uruchomienia jest: umieścić pliki na hostingu WWW z obsługą PHP. To powinno działać od razu.
