SELECT REVERSE(SUBSTRING(distrib.phone_number, 2, 9)) AS 'rebmunenohp'
FROM distrib
WHERE distrib.phone_number LIKE '05%';