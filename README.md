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
