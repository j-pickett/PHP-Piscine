SELECT user_card.last_name, user_card.first_name
FROM user_card
WHERE last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY user_card.last_name ASC, user_card.first_name ASC;