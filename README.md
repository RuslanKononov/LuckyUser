# Lucky User Project
## Requirements
### На главной странице
    
необходимо вывести
* форму регистрации с такими полями:
  - Username,
  - Phonenumber
* кнопку Register.

После того как пользователь заполнил поля и нажал кнопку Register, происходит следующее:
* Пользователь получает сгенерированный уникальный линк на специальную страницу (страница А),
доступ к которой будет доступен по уникальной ссылке в течении 7 дней.
* После истечения времени, линк становится недействительным.

### Функциональность страницы А:
   * Возможность сгенерировать новый уникальный линк
   * Возможность деактивировать данный уникальный линк
   * Кнопка Imfeelinglucky
   * Кнопка History
   * По нажатию на кнопку "Imfeelinglucky" пользователю выводится:
     * Рандомное число от 1 до 1000. Результат Win/Lose. Сумма выиграша (0 если проигрыш)
     * Если рандомное число четное - выводить пользователю результат Win. В противном случае
     результат Lose.
   * Сумма Win:
     * Если рандомное число более 900, сумма выигрыша должна составлять 70% от
   рандомного числа.
     * Если рандомное число более 600, сумма выигрыша должна составлять
   50% от рандомного числа. 
     * Если рандомное число более 300, сумма выигрыша должна
   составлять 30% от рандомного числа.
     * Если рандомное число меньше или равно 300, сумма
   выигрыша должна составлять 10% от рандомного числа.
   * По нажатию на кнопку "History" пользователю выводиться:
     * Информация о последних 3х результатах нажатия на кнопку "Imfeelinglucky"

> **_NOTE:_**  There were NO REQUIREMENTS to validation of phone number, so it has ability to use letters and symbols like american format. It should be only minimum 9 symbols.
> Also it was no requirements to validate user so application has ability to create few accounts with same data. It looks like different users for application. 

## Setup
Run `make compile` on first run

Next time you can run app via `make run`.

To stop containers use `make stop`.

### Config
It's better to check/add few values to `.env` file
* `LINK_TTL=7` - Set TTL in days for Link that generated for user on registration and regeneration

Also you can configure your game rules into `config/games.php`

```php
'randomWin' => [
        'randomValues' => [
            'min' => 1,
            'max' => 1000,
        ],
        'winPercent' => [
            '10' => [1, 300],
            '30' => [301, 600],
            '50' => [601, 900],
            '70' => [901, 1000],
        ]
    ]
```

To get simple ability to check database you can use Adminer
### Adminer
- URL: http://localhost:9090
- Server: `db`
- Username: `refactorian`
- Password: `refactorian`
- Database: `refactorian`

### Routes
You can use next routes:

* `/registration`
* `/pageA/{unique-link}`
* `/game/{unique-link}/history`

### Image
To get more info about this image you can visit [Pack-Readme](Pack-readme.md)
