### Be Prog My Api

#### API for obtaining Progressive Metal/Rock bands, albums, songs and other information.

<hr>

#### Roadmap

* [x] Get all Bands

<hr>

#### Endpoints

| Resource       | HTTP     | Endpoint     | Description |
| :------------- | :----------:  | -----------: | -----------: |
|  Bands         | GET           | /api/bands    | Get all Bands |

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
            }
        }
    ]
}
```
