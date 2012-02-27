Routes
==========

Proposed RESTful URL patterns:
---------------------------------

* GET /species[.json]                                     (lists the known species)
* GET /species/<species_id>[.json]                        (lists the details of a specific species)
* GET /species/<species_id>/occurrences                   (lists all occurrences of a given a species)
* GET /species/<species_id>/occurrences/<occurence_id>    (lists the details of a specific occurrence)

*N.B.* These may change based on PHP Cake conventions
