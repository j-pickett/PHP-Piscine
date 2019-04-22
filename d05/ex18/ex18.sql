SELECT distrib.name
FROM distrib
WHERE distrib.id_distrib IN (42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90) OR LENGTH(lower(name)) - LENGTH(REPLACE(lower(name), 'y', '')) = 2 LIMIT 2, 5;