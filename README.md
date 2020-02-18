<h1>Задание на практику</h1>

Задание 7 - форма регистрации на Laravel

Cоздать сайт - форму регистрации на вымышленную конференцию. 
Сайт должен содержать 4 страницы - 
1) Форма регистрации, 
2) Список зарегистрировавшихся участников. 
3) форма логина. 
4) форма редактирования. 

Поля формы регистрации:	
- имя
- фамилия
- пол
- национальность
- название организации
- должность
- дата рождения
- email
- пароль
- подтверждение пароля

Список зарегистрировавшихся - доступен только залогиненым пользователям - таблица со следующими полями:
 - №№
- Имя Фамилия (в одной ячейке)
-  название организации
- email
- кнопка редактировать, (только самого себя)

Для верстки можно использовать Bootstrap.
Сайт делать на основе фреймфорка Laravel

Навигация по страницам осуществляется с помощью меню в хедере сайта

Готовый код должен быть размещен в репозитории на github.

<h1>О Проекте</h1>

База данных была создана с использованием миграции. Также имеется папка БД с несколькими записями.
Система аутентификации используется "из коробки".

<h5>Структура View:<h5>
<p>В папке auth находятся страницы логина и регистрации:</p>
  <ul>
    <li>login</li>
    <li>register</li>
  </ul> 
<p>В inc - хэдер с навигацией, который подключается к основному шаблону layouts\app.blade.php:</p>
  <ul>
    <li>navbar</li>
  </ul> 
<p>В layouts - основной шаблон для всех страниц:</p>
  <ul>
    <li>app</li>
  </ul> 
<p>Также отдельные страницы:</p>
  <ul>
    <li>edit - страница редактирования профиля</li>
    <li>home - главная\домашняя страница</li>
    <li>list - список зарегистрированных</li>
  </ul> 

<h5>Контроллеры:</h5>
<p>В папке Auth контроллеры регистрации и авторизации "из коробки", измененные под условия задания.</p>
<p>Edit-List-HomeController соответственно контроллеры для редактирования профиля, списка зарегистрировавшихся, главной страницы.</p>
