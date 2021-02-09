### Be Prog My Api

#### API for obtaining Progressive Metal/Rock bands, albums, songs and other information.

<hr>

#### Roadmap

* [x] Get all Bands
* [x] Get all Albums
* [x] Get all Songs from an Album
* [x] Get all Genres

<hr>

#### Endpoints

| Resource       | HTTP     | Endpoint     | Description |
| :------------- | :----------:  | -----------: | -----------: |
|  Bands         | GET           | /api/bands    | Get all Bands |
|  Albums         | GET           | /api/albums    | Get all Albums |
|  Songs         | GET           | /api/albums/{album}/songs    | Get all Songs from an Album |
|  Genres         | GET           | /api/genres    | Get all Genres |

#### JSON Schema

**GET** - `/api/bands`
```json
{
    "data": [
        {
            "id": 1,
            "name": "Caligula's Horse",
            "country": {
                "id": 1,
                "name": "Australia",
                "code": "AU"
            },
            "genres": [
                {
                    "id": 1,
                    "name": "Progressive Rock"
                },
                {
                    "id": 2,
                    "name": "Progressive Metal"
                }
            ]
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
