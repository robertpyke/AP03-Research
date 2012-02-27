Routes
==========

Proposed RESTful URL patterns:
---------------------------------

```
.json extensions should be supported for Ajax requests
(consider .xml if more appropriate for cake framework)

GET /users                                                       (lists all users)
GET /users/<user_id>                                             (lists the details of a specific user)

GET /species                                                     (lists the known species)
GET /species/<species_id>                                        (lists the details of a specific species)
GET /species/<species_id>/occurrences                            (lists all occurrences of a given a species)
GET /species/<species_id>/occurrences/<occurence_id>             (lists the details of a specific occurrence)
```

*N.B.* These may change based on PHP Cake conventions
