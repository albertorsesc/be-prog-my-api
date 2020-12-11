### Be Prog My Api

#### API for obtaining Progressive Metal/Rock bands, albums, songs and other information.

<hr>

#### Roadmap

* [x] Get all Bands
* [x] Get all Genres

<hr>

#### Endpoints

| Resource       | HTTP     | Endpoint     | Description |
| :------------- | :----------:  | -----------: | -----------: |
|  Bands         | GET           | /api/bands    | Get all Bands |
|  Genres         | GET           | /api/genres    | Get all Genres |

#### JSON Schema

**GET** - `/api/bands`
```json
{
    "data": [
        {
            "id": 1,
            "name": "Tool",
            "country": {
                "id": 1,
                "name": "United States of America",
                "code": "USA"
            },
            "genres": [
                {
                    "id": 1,
                    "name": "Progressive Metal"
                }
            ]
        }
    ]
}
```

**GET** - `/api/genres`
```json
{
    "data": [
        {
            "id": 1,
            "name": "Progressive Rock"
        }
    ]
}
```

<hr>

#### Installation

##### **Clone Repo**
`git clone https://github.com/albertorsesc/be-prog-my-api.git`

##### **Install Dependencies**
```
cd be-prog-my-api/
composer install
```

##### **Setup Environment**
```
cp .env.example .env
php artisan key:generate
```

##### **Setup DB credentials**
```
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

##### **Start Application**
`php artisan serve`

##### **Visit** `http://localhost:8000`
