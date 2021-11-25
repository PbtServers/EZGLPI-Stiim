#!/bin/bash

export GLPI_API_URL=http://glpi.stiim.com/apirest.php
export GLPI_USERNAME=glpi
export GLPI_PASSWORD=stiim21-22
export GLPI_APP_TOKEN=XUcM99DC9n82b5K6xP4fNfV9j4Z3RTVWOtNnEd6x

export username=glpi
export password=stiim21-22
export url=http://glpi.stiim.com/apirest.php
export glpi_app_token=XUcM99DC9n82b5K6xP4fNfV9j4Z3RTVWOtNnEd6x

sessiontoken=$(curl -X GET -H 'Content-Type: application/json' -H "Authorization: user_token ez4WoSexl0WrKPC3kw2JxfgUD0oblaJAzOH19TWs" -H "App-Token: EZglpi2021" 'http://glpi.stiim.com/apirest.php/initSession')

finalstoken=$(echo -e $sessiontoken | cut -d":" -f2 | tr -d '}' | tr -d '"')

echo -e Session-Token: $finalstoken

EZGLPIUB="EZGLPI-C"

EZGLPI10A="EZGLPI-D"

EZGLPI10B="EZGLPI-E"

EZGLPI10C="EZGLPI-F"

if [ $EZGLPIUB != "null" ] && [ $EZGLPI10A = "null" ] && [ $EZGLPI10B = "null" ] && [ $EZGLPI10C = "null" ]

then

curl -X POST \
-H 'Content-Type: application/json' \
-H "Session-Token: $finalstoken" \
-H "App-Token: EZglpi2021" \
-d '{"input": {"name": "EZGLPI-1", "date": "EZGLPI-2", "status": "EZGLPI-3", "content": "EZGLPI-4", "urgency": "EZGLPI-5", "impact": "EZGLPI-6", "priority": "EZGLPI-7", "itilcategories_id": "EZGLPI-8", "actiontime": "EZGLPI-9", "_users_id_assign": "EZGLPI-C", "_users_id_requester": "EZGLPI-G"}}' \
'http://glpi.stiim.com/apirest.php/Ticket'

elif [ $EZGLPIUB != "null" ] && [ $EZGLPI10A != "null" ] && [ $EZGLPI10B = "null" ] && [ $EZGLPI10C = "null" ]

then

curl -X POST \
-H 'Content-Type: application/json' \
-H "Session-Token: $finalstoken" \
-H "App-Token: EZglpi2021" \
-d '{"input": {"name": "EZGLPI-1", "date": "EZGLPI-2", "status": "EZGLPI-3", "content": "EZGLPI-4", "urgency": "EZGLPI-5", "impact": "EZGLPI-6", "priority": "EZGLPI-7", "itilcategories_id": "EZGLPI-8", "actiontime": "EZGLPI-9", "_users_id_assign": ["EZGLPI-C","EZGLPI-D"], "_users_id_requester": "EZGLPI-G"}}' \
'http://glpi.stiim.com/apirest.php/Ticket'

elif [ $EZGLPIUB != "null" ] && [ $EZGLPI10A != "null" ] && [ $EZGLPI10B != "null" ] && [ $EZGLPI10C = "null" ]

then

curl -X POST \
-H 'Content-Type: application/json' \
-H "Session-Token: $finalstoken" \
-H "App-Token: EZglpi2021" \
-d '{"input": {"name": "EZGLPI-1", "date": "EZGLPI-2", "status": "EZGLPI-3", "content": "EZGLPI-4", "urgency": "EZGLPI-5", "impact": "EZGLPI-6", "priority": "EZGLPI-7", "itilcategories_id": "EZGLPI-8", "actiontime": "EZGLPI-9", "_users_id_assign": ["EZGLPI-C","EZGLPI-D","EZGLPI-E"], "_users_id_requester": "EZGLPI-G"}}' \
'http://glpi.stiim.com/apirest.php/Ticket'

elif [ $EZGLPIUB != "null" ] && [ $EZGLPI10A != "null" ] && [ $EZGLPI10B != "null" ] && [ $EZGLPI10C != "null" ]

then

curl -X POST \
-H 'Content-Type: application/json' \
-H "Session-Token: $finalstoken" \
-H "App-Token: EZglpi2021" \
-d '{"input": {"name": "EZGLPI-1", "date": "EZGLPI-2", "status": "EZGLPI-3", "content": "EZGLPI-4", "urgency": "EZGLPI-5", "impact": "EZGLPI-6", "priority": "EZGLPI-7", "itilcategories_id": "EZGLPI-8", "actiontime": "EZGLPI-9", "_users_id_assign": ["EZGLPI-C","EZGLPI-D","EZGLPI-E","EZGLPI-F"], "_users_id_requester": "EZGLPI-G"}}' \
'http://glpi.stiim.com/apirest.php/Ticket'

fi

# Plantilla Script
# ------------------
# "id":119,
# "entities_id":0,
 # "name":"Creació document glpi, usuari alberto glpi i resoldre dubtes del document",
 # "date":"2021-10-21 17:35:00",
# "closedate":"2021-10-21 17:35:00",
# "solvedate":"2021-10-21 17:35:00",
# "date_mod":"2021-10-21 19:34:55",
 # "status":6,
# "requesttypes_id":1,
 # "content":"&lt;p&gt;Creació document glpi, usuari Alberto glpi i resoldre dubtes del document. També he instal·lat un nou règim a la classe en què cadascú s'ha d’apuntar les seves incidències, així no hi ha problemes&lt;/p&gt;",
 # "urgency":4,
 # "impact":3,
 # "priority":4,
 # "itilcategories_id":4,
# "type":1,
# "global_validation":1,
# "slas_id_ttr":0,
# "slas_id_tto":0,
# "slalevels_id_ttr":0,
# "time_to_resolve":null,
# "time_to_own":null,
# "begin_waiting_date":null,
# "internal_time_to_resolve":null,
# "internal_time_to_own":null,
# "waiting_duration":0,
# "close_delay_stat":0,
# "solve_delay_stat":0,
# "takeintoaccount_delay_stat":0,
 # "actiontime":7200,
# "is_deleted":0,
# "locations_id":0,
# "validation_percent":0,
# "date_creation":"2021-10-21 19:34:55",
# "_users_id_assign": 6,
# "_users_id_requester": 15,
